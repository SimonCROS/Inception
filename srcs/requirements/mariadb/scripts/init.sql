UPDATE mysql.user SET Password=PASSWORD('root') WHERE User='root';
DELETE FROM mysql.user WHERE User='';
DELETE FROM mysql.user WHERE User='root' AND Host NOT IN ('localhost', '127.0.0.1', '::1');
DROP DATABASE IF EXISTS test;
DELETE FROM mysql.db WHERE Db='test' OR Db='test\\_%';

-- CREATE USER 'pma'@'localhost' IDENTIFIED BY 'pmapassword';
-- GRANT ALL PRIVILEGES ON *.* TO 'pma'@'localhost';

CREATE DATABASE wpdb;
CREATE USER 'wp'@'localhost' IDENTIFIED BY 'wppassword';
GRANT ALL PRIVILEGES ON wpdb.* TO 'wp'@'localhost';

FLUSH PRIVILEGES;
