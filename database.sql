CREATE DATABASE valet_services;
USE valet_services;

-- Users (for login)
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL
);

-- Insert sample admin user (username: admin, password: admin123)
INSERT INTO users (username, password) 
VALUES ('admin', MD5('admin123'));

-- Events
CREATE TABLE events (
  id INT AUTO_INCREMENT PRIMARY KEY,
  location VARCHAR(100),
  event_name VARCHAR(100),
  manpower INT,
  status VARCHAR(50)
);

-- Sample data
INSERT INTO events (location, event_name, manpower, status) VALUES
('Delhi', 'Corporate Seminar', 15, 'Completed'),
('Mumbai', 'Wedding Event', 25, 'Ongoing'),
('Bangalore', 'Music Festival', 40, 'Scheduled');

-- Contact messages
CREATE TABLE contacts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  message TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
