CREATE DATABASE IF NOT EXISTS bikesdb;

USE bikesdb;

-- =====================================================
-- BOOKINGS TABLE
-- =====================================================

DROP TABLE IF EXISTS bookings;

CREATE TABLE bookings (

    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    bike VARCHAR(100) NOT NULL,
    preferred_date DATE NOT NULL,
    preferred_time VARCHAR(30) NOT NULL,
    dealer VARCHAR(100) NOT NULL,
    message TEXT,
    source VARCHAR(50) DEFAULT 'Website',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);

-- =====================================================
-- BIKES TABLE
-- =====================================================

DROP TABLE IF EXISTS bikes;

CREATE TABLE bikes (

    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    slug VARCHAR(100) UNIQUE NOT NULL,
    category VARCHAR(50) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    engine VARCHAR(100),
    power VARCHAR(100),
    torque VARCHAR(100),
    transmission VARCHAR(100),
    mileage VARCHAR(50),
    fuel_type VARCHAR(50),
    weight VARCHAR(50),
    top_speed VARCHAR(50),
    image VARCHAR(255),
    description TEXT,
    featured TINYINT(1) DEFAULT 0,
    status ENUM('Available','Coming Soon','Discontinued') DEFAULT 'Available',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ON UPDATE CURRENT_TIMESTAMP

);

-- =====================================================
-- SAMPLE BIKES
-- =====================================================

INSERT INTO bikes
(
    name,
    slug,
    category,
    price,
    engine,
    power,
    torque,
    transmission,
    mileage,
    fuel_type,
    weight,
    top_speed,
    image,
    description,
    featured
)

VALUES

(
'Napoleon Classic 350',
'napoleon-classic-350',
'Classic',
189999.00,
'349cc Single Cylinder',
'20 HP',
'27 Nm',
'6-Speed',
'38 km/l',
'Petrol',
'181 kg',
'130 km/h',
'classic-350.jpg',
'Classic touring motorcycle with timeless styling.',
1
),

(
'Napoleon Classic 500',
'napoleon-classic-500',
'Classic',
249999.00,
'499cc Twin Cylinder',
'35 HP',
'42 Nm',
'6-Speed',
'30 km/l',
'Petrol',
'196 kg',
'160 km/h',
'classic-500.jpg',
'Premium classic motorcycle for highway cruising.',
1
),

(
'Napoleon Classic 900',
'napoleon-classic-900',
'Classic',
419999.00,
'900cc Twin Cylinder',
'82 HP',
'90 Nm',
'6-Speed',
'22 km/l',
'Petrol',
'220 kg',
'210 km/h',
'classic-900.jpg',
'Luxury touring motorcycle with premium comfort.',
1
),

(
'Napoleon Street 500',
'napoleon-street-500',
'Street',
259999.00,
'500cc Parallel Twin',
'47 HP',
'45 Nm',
'6-Speed',
'31 km/l',
'Petrol',
'188 kg',
'175 km/h',
'street-500.jpg',
'Urban street motorcycle with aggressive styling.',
1
),

(
'Napoleon Street',
'napoleon-street',
'Street',
299999.00,
'650cc Twin Cylinder',
'60 HP',
'62 Nm',
'6-Speed',
'27 km/l',
'Petrol',
'194 kg',
'195 km/h',
'street.jpg',
'Street performance motorcycle.',
1
),

(
'Napoleon Sport',
'napoleon-sport',
'Sport',
349999.00,
'650cc DOHC',
'78 HP',
'68 Nm',
'6-Speed',
'25 km/l',
'Petrol',
'189 kg',
'220 km/h',
'sport.jpg',
'Performance sport motorcycle.',
1
),

(
'Napoleon Sport X',
'napoleon-sport-x',
'Sport',
399999.00,
'750cc DOHC',
'96 HP',
'84 Nm',
'6-Speed',
'22 km/l',
'Petrol',
'191 kg',
'240 km/h',
'sport-x.jpg',
'Track-inspired performance motorcycle.',
1
),

(
'Napoleon Sports Edition',
'napoleon-sports-edition',
'Sport',
449999.00,
'850cc DOHC',
'112 HP',
'98 Nm',
'6-Speed',
'20 km/l',
'Petrol',
'195 kg',
'255 km/h',
'sports-edition.jpg',
'Limited edition flagship sport motorcycle.',
1
),

(
'Napoleon Phantom 900',
'napoleon-phantom-900',
'Cruiser',
499999.00,
'900cc V-Twin',
'92 HP',
'102 Nm',
'6-Speed',
'21 km/l',
'Petrol',
'235 kg',
'215 km/h',
'phantom-900.jpg',
'Premium cruiser built for long-distance touring.',
1
);
