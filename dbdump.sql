CREATE TABLE `MainInfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `number` varchar(10) NOT NULL,
  `gender` enum('MALE','FEMALE','OTHER') NOT NULL,
  `veteran` enum('TRUE','FALSE') NOT NULL,
  `mental` enum('TRUE','FALSE') NOT NULL,
  `dob` date NOT NULL,
  `ethnicity` enum('Hispanic/Latino','Not Hispanic/Latino','Prefer not to respond') NOT NULL,
  `race` enum('American Indian/Alaska Native','Asian','Black or African American','Native Hawaiian/Pacific Islander','White') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
