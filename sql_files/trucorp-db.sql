CREATE USER 'team0'@'%' IDENTIFIED BY 'team0';

GRANT ALL PRIVILEGES ON *.* TO 'team0'@'%';

CREATE DATABASE Trucorp;

USE Trucorp;

FLUSH PRIVILEGES;

CREATE TABLE `users` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`ID`, `Nama`, `Alamat`, `Jabatan`) VALUES
(1, 'Moana Jools', 'Psr. Gedebage Selatan No. 809', 'HRD'),
(2, 'Jaden Maayan', 'Kpg. Villa No. 870', 'Supervisor'),
(3, 'Jaycee Uria', 'Kpg. Cokroaminoto No. 57', 'Trainee'),
(4, 'Lidya Hastuti', 'Jl. Soekarno Hatta No. 452', 'Staff'),
(5, 'Aurora Safitri', 'Jl. Setiabudhi No. 250', 'Intern');

ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `users`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;
