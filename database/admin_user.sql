-- =========================================================
-- BLOODCARE
-- ADMIN + USER BRANCH DATABASE ADDITIONS
-- =========================================================
--
-- IMPORTANT:
-- The master branch already contains:
--
-- users
-- donors
-- blood_requests
-- emergency_requests
-- appointments
-- blood_stock
-- blood_camps
-- camp_registrations
-- notifications
-- donation_history
--
-- Therefore DO NOT recreate those tables here.
--
-- This file contains only additional structures required
-- for Admin + User functionality.
-- =========================================================

USE bloodcare;


-- =========================================================
-- 1. ADMIN ACTIVITY LOG
-- =========================================================
--
-- Used by:
-- admin/dashboard.php
--
-- Stores actions performed by administrators.
--
-- Example:
-- Add donor
-- Update donor
-- Approve request
-- Reject request
-- Update blood stock
-- Create blood camp
-- Send notification
--
-- =========================================================

CREATE TABLE IF NOT EXISTS admin_activity_log (

    id INT AUTO_INCREMENT PRIMARY KEY,

    admin_id INT NOT NULL,

    action VARCHAR(100) NOT NULL,

    description TEXT DEFAULT NULL,

    target_type VARCHAR(50) DEFAULT NULL,

    target_id INT DEFAULT NULL,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_activity_admin
        FOREIGN KEY (admin_id)
        REFERENCES users(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE,

    INDEX idx_activity_admin (admin_id),

    INDEX idx_activity_action (action),

    INDEX idx_activity_target
        (target_type, target_id),

    INDEX idx_activity_created
        (created_at)

) ENGINE=InnoDB;


-- =========================================================
-- 2. REQUEST DONOR MATCHES
-- =========================================================
--
-- Used when Admin/User searches compatible donors
-- for a normal blood request.
--
-- =========================================================

CREATE TABLE IF NOT EXISTS request_donor_matches (

    id INT AUTO_INCREMENT PRIMARY KEY,

    request_id INT NOT NULL,

    donor_id INT NOT NULL,

    response_status ENUM(
        'Pending',
        'Contacted',
        'Accepted',
        'Rejected',
        'Completed'
    ) NOT NULL DEFAULT 'Pending',

    contacted_at DATETIME DEFAULT NULL,

    response_at DATETIME DEFAULT NULL,

    notes TEXT DEFAULT NULL,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_match_request
        FOREIGN KEY (request_id)
        REFERENCES blood_requests(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE,

    CONSTRAINT fk_match_donor
        FOREIGN KEY (donor_id)
        REFERENCES donors(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE,

    UNIQUE KEY unique_request_donor
        (request_id, donor_id),

    INDEX idx_match_request
        (request_id),

    INDEX idx_match_donor
        (donor_id),

    INDEX idx_match_status
        (response_status)

) ENGINE=InnoDB;


-- =========================================================
-- 3. EMERGENCY DONOR MATCHES
-- =========================================================
--
-- Used for emergency_request.php
--
-- =========================================================

CREATE TABLE IF NOT EXISTS emergency_donor_matches (

    id INT AUTO_INCREMENT PRIMARY KEY,

    emergency_request_id INT NOT NULL,

    donor_id INT NOT NULL,

    response_status ENUM(
        'Pending',
        'Contacted',
        'Accepted',
        'Rejected',
        'Completed'
    ) NOT NULL DEFAULT 'Pending',

    contacted_at DATETIME DEFAULT NULL,

    response_at DATETIME DEFAULT NULL,

    notes TEXT DEFAULT NULL,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_emergency_match_request
        FOREIGN KEY (emergency_request_id)
        REFERENCES emergency_requests(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE,

    CONSTRAINT fk_emergency_match_donor
        FOREIGN KEY (donor_id)
        REFERENCES donors(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE,

    UNIQUE KEY unique_emergency_donor
        (emergency_request_id, donor_id),

    INDEX idx_emergency_match_request
        (emergency_request_id),

    INDEX idx_emergency_match_donor
        (donor_id),

    INDEX idx_emergency_match_status
        (response_status)

) ENGINE=InnoDB;


-- =========================================================
-- 4. ADMIN ACTIVITY SAMPLE DATA
-- =========================================================
--
-- Existing master database has admin user:
--
-- user id = 1
--
-- =========================================================

INSERT INTO admin_activity_log
(
    admin_id,
    action,
    description,
    target_type,
    target_id
)
SELECT
    id,
    'System Setup',
    'BloodCare Admin and User module initialized.',
    'system',
    NULL
FROM users
WHERE email = 'admin@bloodcare.com'
AND NOT EXISTS (
    SELECT 1
    FROM admin_activity_log
    WHERE action = 'System Setup'
);


-- =========================================================
-- 5. ADMIN NOTIFICATION
-- =========================================================
--
-- Add notification for existing admin account.
--
-- =========================================================

INSERT INTO notifications
(
    user_id,
    title,
    message,
    type,
    is_read
)
SELECT
    id,
    'Admin Dashboard Ready',
    'Your BloodCare administration dashboard is ready to manage donors, requests, blood stock and camps.',
    'Info',
    FALSE
FROM users
WHERE email = 'admin@bloodcare.com'
AND NOT EXISTS (
    SELECT 1
    FROM notifications
    WHERE user_id = users.id
    AND title = 'Admin Dashboard Ready'
);


-- =========================================================
-- 6. USER NOTIFICATION
-- =========================================================
--
-- Add notification for existing normal user.
--
-- =========================================================

INSERT INTO notifications
(
    user_id,
    title,
    message,
    type,
    is_read
)
SELECT
    id,
    'BloodCare Services Available',
    'You can search donors, request blood, submit emergency requests and track your requests from your dashboard.',
    'Info',
    FALSE
FROM users
WHERE email = 'user@bloodcare.com'
AND NOT EXISTS (
    SELECT 1
    FROM notifications
    WHERE user_id = users.id
    AND title = 'BloodCare Services Available'
);


-- =========================================================
-- 7. ADMIN DASHBOARD VIEW
-- =========================================================
--
-- Provides summary data for the professional Admin Dashboard.
--
-- This is optional but useful.
--
-- =========================================================

CREATE OR REPLACE VIEW admin_dashboard_summary AS

SELECT

    (
        SELECT COUNT(*)
        FROM users
        WHERE role = 'user'
        AND status = 'active'
    ) AS total_users,

    (
        SELECT COUNT(*)
        FROM donors
    ) AS total_donors,

    (
        SELECT COUNT(*)
        FROM blood_requests
        WHERE status = 'Pending'
    ) AS pending_requests,

    (
        SELECT COUNT(*)
        FROM emergency_requests
        WHERE status IN ('Pending', 'Processing')
    ) AS emergency_requests,

    (
        SELECT COALESCE(SUM(units_available), 0)
        FROM blood_stock
    ) AS total_blood_units,

    (
        SELECT COUNT(*)
        FROM blood_camps
        WHERE status = 'Upcoming'
    ) AS upcoming_camps;


-- =========================================================
-- 8. USER DASHBOARD VIEW
-- =========================================================
--
-- Used by user/dashboard.php
--
-- This allows PHP to easily retrieve user statistics.
--
-- =========================================================

CREATE OR REPLACE VIEW user_dashboard_summary AS

SELECT

    u.id AS user_id,

    u.name,

    u.email,

    (
        SELECT COUNT(*)
        FROM blood_requests br
        WHERE br.user_id = u.id
    ) AS total_requests,

    (
        SELECT COUNT(*)
        FROM blood_requests br
        WHERE br.user_id = u.id
        AND br.status = 'Completed'
    ) AS completed_requests,

    (
        SELECT COUNT(*)
        FROM appointments a
        INNER JOIN donors d
            ON a.donor_id = d.id
        WHERE d.user_id = u.id
        AND a.appointment_date >= CURDATE()
        AND a.status IN ('Pending', 'Scheduled')
    ) AS upcoming_appointments,

    (
        SELECT COUNT(*)
        FROM notifications n
        WHERE n.user_id = u.id
        AND n.is_read = FALSE
    ) AS unread_notifications

FROM users u
WHERE u.role = 'user';


-- =========================================================
-- 9. USER REQUEST SUMMARY VIEW
-- =========================================================
--
-- Used by:
--
-- user/my_requests.php
-- user/dashboard.php
--
-- =========================================================

CREATE OR REPLACE VIEW user_request_summary AS

SELECT

    br.id,

    br.user_id,

    br.blood_group,

    br.units_needed,

    br.hospital_name,

    br.patient_name,

    br.required_date,

    br.urgency,

    br.status,

    br.created_at,

    CONCAT(
        '#REQ-',
        LPAD(br.id, 4, '0')
    ) AS request_code

FROM blood_requests br;


-- =========================================================
-- 10. AVAILABLE DONOR SEARCH VIEW
-- =========================================================
--
-- Used by:
--
-- user/search_donor.php
--
-- Shows only donors who are currently available.
--
-- =========================================================

CREATE OR REPLACE VIEW available_donors AS

SELECT

    d.id AS donor_id,

    d.user_id,

    u.name,

    u.email,

    u.phone,

    u.photo,

    d.blood_group,

    d.gender,

    d.age,

    d.district,

    d.area,

    d.address,

    d.medical_status,

    d.last_donation,

    d.availability,

    d.emergency_available

FROM donors d

INNER JOIN users u
    ON d.user_id = u.id

WHERE

    u.status = 'active'

    AND d.availability = 'Available'

    AND d.medical_status = 'Healthy';


-- =========================================================
-- 11. EMERGENCY AVAILABLE DONORS VIEW
-- =========================================================
--
-- Used for emergency donor search.
--
-- =========================================================

CREATE OR REPLACE VIEW emergency_available_donors AS

SELECT

    d.id AS donor_id,

    d.user_id,

    u.name,

    u.phone,

    u.photo,

    d.blood_group,

    d.gender,

    d.age,

    d.district,

    d.area,

    d.address,

    d.last_donation

FROM donors d

INNER JOIN users u
    ON d.user_id = u.id

WHERE

    u.status = 'active'

    AND d.availability = 'Available'

    AND d.medical_status = 'Healthy'

    AND d.emergency_available = TRUE;


-- =========================================================
-- 12. BLOOD STOCK STATUS VIEW
-- =========================================================
--
-- Used by:
--
-- admin/stock/blood_stock.php
-- admin/dashboard.php
--
-- Automatically determines stock status.
--
-- =========================================================

CREATE OR REPLACE VIEW blood_stock_status AS

SELECT

    id,

    blood_group,

    units_available,

    minimum_required,

    CASE

        WHEN units_available = 0
            THEN 'Critical'

        WHEN units_available < minimum_required
            THEN 'Low'

        WHEN units_available = minimum_required
            THEN 'Warning'

        ELSE 'Normal'

    END AS stock_status,

    last_updated

FROM blood_stock;


-- =========================================================
-- END OF ADMIN + USER BRANCH DATABASE
-- =========================================================