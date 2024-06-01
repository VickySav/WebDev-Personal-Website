DROP DATABASE IF EXISTS message;
CREATE database message;
use message;

CREATE TABLE saveMsg (
	id INT AUTO_INCREMENT PRIMARY KEY,
	nama VARCHAR(150)  NOT NULL,
	email varchar(100) NOT NULL,
    sbj  VARCHAR(50)  NOT NULL,
    msg  longtext NOT NULL
);

select * from saveMsg;