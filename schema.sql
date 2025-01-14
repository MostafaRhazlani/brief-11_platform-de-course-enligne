-- Table: users
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    firstName VARCHAR(50),
    lastName VARCHAR(50),
    email VARCHAR(100) UNIQUE,
    experience VARCHAR(255),
    description TEXT,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'teacher', 'student') NOT NULL,
    dateJoined TIMESTAMP NOT NULL DEFAULT now(),
    status BOOLEAN NOT NULL DEFAULT TRUE
);

-- Table: courses
CREATE TABLE courses (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    titleDescription VARCHAR(255),
    description TEXT,
    statusCourse BOOLEAN NOT NULL DEFAULT TRUE,
    price DECIMAL(10, 2) NOT NULL,
    created_at timestamp NOT NULL DEFAULT now(),
    updated_at timestamp null default now() on update now(),
    idTeacher INT NOT NULL,
    FOREIGN KEY (idTeacher) REFERENCES users(id) on delete cascade
);

-- Table: student_course
CREATE TABLE student_course (
    id INT PRIMARY KEY AUTO_INCREMENT,
    idStudent INT NOT NULL,
    idCourse INT NOT NULL,
    FOREIGN KEY (idStudent) REFERENCES users(id) on delete cascade,
    FOREIGN KEY (idCourse) REFERENCES courses(id) on delete cascade
);

-- Table: tags
CREATE TABLE tags (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nameTag VARCHAR(50) NOT NULL UNIQUE
);

-- Table: tags_courses
CREATE TABLE tags_courses (
    id INT PRIMARY KEY AUTO_INCREMENT,
    idCourse INT NOT NULL,
    idTag INT NOT NULL,
    FOREIGN KEY (idCourse) REFERENCES courses(id) on delete cascade,
    FOREIGN KEY (idTag) REFERENCES tags(id) on delete cascade
);

-- Table: videos
CREATE TABLE videos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nameVideo VARCHAR(255) NOT NULL,
    idCourse INT NOT NULL,
    FOREIGN KEY (idCourse) REFERENCES courses(id)
);
