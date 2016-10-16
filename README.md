# Doctor_Who-App
CREATE DATABASE IF NOT EXISTS `doctorapp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `BeerApp`;

CREATE TABLE `details` (
  `id` int(255) NOT NULL,
  `season` varchar(255) NOT NULL,
  `Doctor_id` int(255) NOT NULL,
  `major_foes` varchar(255) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `doctor` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `incarnation` text NOT NULL,
  `year` int(255) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
ALTER TABLE `doctor`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
