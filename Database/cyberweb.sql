CREATE DATABASE cyber_owls;

CREATE TABLE events (
  id int(11) NOT NULL,
  image varchar(255) NOT NULL,
  name varchar(255) NOT NULL,
  description text NOT NULL
);

-- Table structure for table `inquiries` --

CREATE TABLE inquiries (
  id int(11) NOT NULL,
  name varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  number varchar(20) NOT NULL,
  message text NOT NULL,
  created_at timestamp NOT NULL DEFAULT current_timestamp()
);

-- Table structure for table `uploaded_files` --

CREATE TABLE uploaded_files (
  id int(11) NOT NULL,
  file_name varchar(255) NOT NULL,
  file_type varchar(255) NOT NULL,
  submitted_by varchar(255) NOT NULL,
  other_comments text NOT NULL,
  upload_date_time datetime NOT NULL
);

