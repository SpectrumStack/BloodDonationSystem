-- =========================================================
-- BLOODCARE BLOOD DONATION MANAGEMENT SYSTEM
-- DATABASE
-- =========================================================

CREATE DATABASE IF NOT EXISTS bloodcare
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE bloodcare;


-- =========================================================
-- 1. USERS
-- =========================================================

CREATE TABLE users (

    id INT AUTO_INCREMENT PRIMARY KEY,

    name VARCHAR(100) NOT NULL,

    email VARCHAR(150) NOT NULL UNIQUE,

    phone VARCHAR(20),

    password VARCHAR(255) NOT NULL,

    role ENUM('admin', 'donor', 'user')
        NOT NULL DEFAULT 'user',

    photo VARCHAR(255) DEFAULT NULL,

    status ENUM('active', 'inactive')
        NOT NULL DEFAULT 'active',

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    updated_at TIMESTAMP
        DEFAULT CURRENT_TIMESTAMP
        ON UPDATE CURRENT_TIMESTAMP

) ENGINE=InnoDB;


-- =========================================================
-- 2. DONORS
-- =========================================================

CREATE TABLE donors (

    id INT AUTO_INCREMENT PRIMARY KEY,

    user_id INT NOT NULL,

    blood_group ENUM(
        'A+',
        'A-',
        'B+',
        'B-',
        'AB+',
        'AB-',
        'O+',
        'O-'
    ) NOT NULL,

    gender ENUM(
        'Male',
        'Female',
        'Other'
    ) DEFAULT NULL,

    age INT DEFAULT NULL,

    district VARCHAR(100) DEFAULT NULL,

    area VARCHAR(150) DEFAULT NULL,

    address TEXT DEFAULT NULL,

    medical_status ENUM(
        'Healthy',
        'Under Treatment',
        'Not Eligible'
    ) DEFAULT 'Healthy',

    last_donation DATE DEFAULT NULL,

    availability ENUM(
        'Available',
        'Unavailable'
    ) DEFAULT 'Available',

    emergency_available BOOLEAN DEFAULT TRUE,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    updated_at TIMESTAMP
        DEFAULT CURRENT_TIMESTAMP
        ON UPDATE CURRENT_TIMESTAMP,

    CONSTRAINT fk_donor_user

        FOREIGN KEY (user_id)
        REFERENCES users(id)

        ON DELETE CASCADE
        ON UPDATE CASCADE

) ENGINE=InnoDB;


-- =========================================================
-- 3. BLOOD REQUESTS
-- =========================================================

CREATE TABLE blood_requests (

    id INT AUTO_INCREMENT PRIMARY KEY,

    user_id INT NOT NULL,

    blood_group ENUM(
        'A+',
        'A-',
        'B+',
        'B-',
        'AB+',
        'AB-',
        'O+',
        'O-'
    ) NOT NULL,

    units_needed INT NOT NULL,

    hospital_name VARCHAR(200) NOT NULL,

    hospital_address TEXT,

    patient_name VARCHAR(100),

    patient_age INT,

    required_date DATE,

    reason TEXT,

    urgency ENUM(
        'Normal',
        'Urgent',
        'Critical'
    ) DEFAULT 'Normal',

    status ENUM(
        'Pending',
        'Approved',
        'Completed',
        'Rejected',
        'Cancelled'
    ) DEFAULT 'Pending',

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    updated_at TIMESTAMP
        DEFAULT CURRENT_TIMESTAMP
        ON UPDATE CURRENT_TIMESTAMP,

    CONSTRAINT fk_request_user

        FOREIGN KEY (user_id)
        REFERENCES users(id)

        ON DELETE CASCADE
        ON UPDATE CASCADE

) ENGINE=InnoDB;


-- =========================================================
-- 4. EMERGENCY REQUESTS
-- =========================================================

CREATE TABLE emergency_requests (

    id INT AUTO_INCREMENT PRIMARY KEY,

    user_id INT NOT NULL,

    patient_name VARCHAR(100) NOT NULL,

    blood_group ENUM(
        'A+',
        'A-',
        'B+',
        'B-',
        'AB+',
        'AB-',
        'O+',
        'O-'
    ) NOT NULL,

    units_needed INT NOT NULL,

    hospital_name VARCHAR(200) NOT NULL,

    hospital_address TEXT,

    contact_number VARCHAR(20) NOT NULL,

    emergency_reason TEXT,

    required_time DATETIME,

    status ENUM(
        'Pending',
        'Processing',
        'Accepted',
        'Completed',
        'Rejected'
    ) DEFAULT 'Pending',

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    updated_at TIMESTAMP
        DEFAULT CURRENT_TIMESTAMP
        ON UPDATE CURRENT_TIMESTAMP,

    CONSTRAINT fk_emergency_user

        FOREIGN KEY (user_id)
        REFERENCES users(id)

        ON DELETE CASCADE
        ON UPDATE CASCADE

) ENGINE=InnoDB;


-- =========================================================
-- 5. APPOINTMENTS
-- =========================================================

CREATE TABLE appointments (

    id INT AUTO_INCREMENT PRIMARY KEY,

    donor_id INT NOT NULL,

    appointment_date DATE NOT NULL,

    appointment_time TIME NOT NULL,

    location VARCHAR(200) NOT NULL,

    purpose VARCHAR(200)
        DEFAULT 'Blood Donation',

    notes TEXT,

    status ENUM(
        'Pending',
        'Scheduled',
        'Completed',
        'Cancelled'
    ) DEFAULT 'Pending',

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    updated_at TIMESTAMP
        DEFAULT CURRENT_TIMESTAMP
        ON UPDATE CURRENT_TIMESTAMP,

    CONSTRAINT fk_appointment_donor

        FOREIGN KEY (donor_id)
        REFERENCES donors(id)

        ON DELETE CASCADE
        ON UPDATE CASCADE

) ENGINE=InnoDB;


-- =========================================================
-- 6. BLOOD STOCK
-- =========================================================

CREATE TABLE blood_stock (

    id INT AUTO_INCREMENT PRIMARY KEY,

    blood_group ENUM(
        'A+',
        'A-',
        'B+',
        'B-',
        'AB+',
        'AB-',
        'O+',
        'O-'
    ) NOT NULL UNIQUE,

    units_available INT NOT NULL DEFAULT 0,

    minimum_required INT NOT NULL DEFAULT 5,

    last_updated TIMESTAMP
        DEFAULT CURRENT_TIMESTAMP
        ON UPDATE CURRENT_TIMESTAMP

) ENGINE=InnoDB;


-- =========================================================
-- 7. BLOOD CAMPS
-- =========================================================

CREATE TABLE blood_camps (

    id INT AUTO_INCREMENT PRIMARY KEY,

    title VARCHAR(200) NOT NULL,

    description TEXT,

    location VARCHAR(255) NOT NULL,

    camp_date DATE NOT NULL,

    start_time TIME,

    end_time TIME,

    organizer VARCHAR(150),

    contact_number VARCHAR(20),

    status ENUM(
        'Upcoming',
        'Ongoing',
        'Completed',
        'Cancelled'
    ) DEFAULT 'Upcoming',

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    updated_at TIMESTAMP
        DEFAULT CURRENT_TIMESTAMP
        ON UPDATE CURRENT_TIMESTAMP

) ENGINE=InnoDB;


-- =========================================================
-- 8. CAMP REGISTRATIONS
-- =========================================================

CREATE TABLE camp_registrations (

    id INT AUTO_INCREMENT PRIMARY KEY,

    camp_id INT NOT NULL,

    donor_id INT NOT NULL,

    registration_date TIMESTAMP
        DEFAULT CURRENT_TIMESTAMP,

    status ENUM(
        'Registered',
        'Attended',
        'Cancelled'
    ) DEFAULT 'Registered',

    CONSTRAINT fk_registration_camp

        FOREIGN KEY (camp_id)
        REFERENCES blood_camps(id)

        ON DELETE CASCADE
        ON UPDATE CASCADE,

    CONSTRAINT fk_registration_donor

        FOREIGN KEY (donor_id)
        REFERENCES donors(id)

        ON DELETE CASCADE
        ON UPDATE CASCADE,

    UNIQUE KEY unique_camp_donor
        (camp_id, donor_id)

) ENGINE=InnoDB;


-- =========================================================
-- 9. NOTIFICATIONS
-- =========================================================

CREATE TABLE notifications (

    id INT AUTO_INCREMENT PRIMARY KEY,

    user_id INT NOT NULL,

    title VARCHAR(200) NOT NULL,

    message TEXT NOT NULL,

    type ENUM(
        'Info',
        'Success',
        'Warning',
        'Emergency'
    ) DEFAULT 'Info',

    is_read BOOLEAN DEFAULT FALSE,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_notification_user

        FOREIGN KEY (user_id)
        REFERENCES users(id)

        ON DELETE CASCADE
        ON UPDATE CASCADE

) ENGINE=InnoDB;


-- =========================================================
-- 10. DONATION HISTORY
-- =========================================================

CREATE TABLE donation_history (

    id INT AUTO_INCREMENT PRIMARY KEY,

    donor_id INT NOT NULL,

    donation_date DATE NOT NULL,

    blood_group ENUM(
        'A+',
        'A-',
        'B+',
        'B-',
        'AB+',
        'AB-',
        'O+',
        'O-'
    ) NOT NULL,

    units_donated INT DEFAULT 1,

    location VARCHAR(200),

    notes TEXT,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_history_donor

        FOREIGN KEY (donor_id)
        REFERENCES donors(id)

        ON DELETE CASCADE
        ON UPDATE CASCADE

) ENGINE=InnoDB;


-- =========================================================
-- SAMPLE USERS
-- =========================================================
-- Passwords below are:
-- Admin: admin123
-- Donor: donor123
-- User: user123
--
-- These are temporary development accounts.
-- We will replace/handle passwords properly through PHP.
-- =========================================================

INSERT INTO users
(
    name,
    email,
    phone,
    password,
    role,
    status
)
VALUES

(
    'System Administrator',
    'admin@bloodcare.com',
    '01700000000',
    '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llCq0J7ZkK5YqV5qGZK',
    'admin',
    'active'
),

(
    'Rahim Ahmed',
    'donor@bloodcare.com',
    '01711111111',
    '$2y$10$92IXUNpkO0rOQ5byMi.Ye4oKoEa3Ro9llCq0J7ZkK5YqV5qGZK',
    'donor',
    'active'
),

(
    'Karim Hasan',
    'user@bloodcare.com',
    '01722222222',
    '$2y$10$92IXUNpkO0rOQ5byMi.Ye4oKoEa3Ro9llCq0J7ZkK5YqV5qGZK',
    'user',
    'active'
);


-- =========================================================
-- SAMPLE DONOR
-- =========================================================

INSERT INTO donors
(
    user_id,
    blood_group,
    gender,
    age,
    district,
    area,
    address,
    medical_status,
    last_donation,
    availability,
    emergency_available
)

VALUES

(
    2,
    'O+',
    'Male',
    24,
    'Dhaka',
    'Mirpur',
    'Mirpur, Dhaka',
    'Healthy',
    '2026-06-15',
    'Available',
    TRUE
);


-- =========================================================
-- INITIAL BLOOD STOCK
-- =========================================================

INSERT INTO blood_stock
(
    blood_group,
    units_available,
    minimum_required
)

VALUES

('A+', 12, 8),
('A-', 5, 5),
('B+', 18, 8),
('B-', 4, 5),
('AB+', 8, 4),
('AB-', 3, 3),
('O+', 20, 10),
('O-', 6, 5);


-- =========================================================
-- SAMPLE BLOOD CAMP
-- =========================================================

INSERT INTO blood_camps
(
    title,
    description,
    location,
    camp_date,
    start_time,
    end_time,
    organizer,
    contact_number,
    status
)

VALUES

(
    'Blood Donation Camp 2026',
    'Community blood donation campaign organized by BloodCare.',
    'Dhaka Community Center',
    '2026-09-15',
    '09:00:00',
    '16:00:00',
    'BloodCare Foundation',
    '01733333333',
    'Upcoming'
);


-- =========================================================
-- SAMPLE NOTIFICATION
-- =========================================================

INSERT INTO notifications
(
    user_id,
    title,
    message,
    type
)

VALUES

(
    2,
    'Welcome to BloodCare',
    'Thank you for joining BloodCare as a donor.',
    'Success'
),

(
    3,
    'Welcome to BloodCare',
    'You can now search for blood donors and submit blood requests.',
    'Info'
);


-- =========================================================
-- END OF DATABASE
-- =========================================================