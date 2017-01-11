# login and signup in php and mysql with javascript validation
Create database name 'project_test'
I have created two table as follow

-- Table structure for table `login`
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `age` int(3) NOT NULL,
  `address` varchar(200) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Table structure for table `project`
CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `banner_images` varchar(255) NOT NULL,
  `banner_images1` varchar(111) NOT NULL,
  `project_name` varchar(200) NOT NULL,
  `project_cat` varchar(200) NOT NULL,
  `project_client` varchar(200) NOT NULL,
  `project_start_date` varchar(200) NOT NULL,
  `project_com_date` varchar(200) NOT NULL,
  `project_assign` varchar(111) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

Now change the username and password in config.php and connectdb.php

All Done!
