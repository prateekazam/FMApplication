CREATE TABLE `places` (
`woeid` int(15) NOT NULL,
`iso` varchar(6) NOT NULL,
`name` text NOT NULL,
`language` varchar(6) NOT NULL,
`type` varchar(30) NOT NULL,
`parent` int(15) NOT NULL,
PRIMARY KEY (`woeid`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;


--to load the data into DB use concurrent load utility

LOAD DATA concurrent infile "C:\\Users\\bleh\\Downloads\\geoplanet_places_7.9.0.tsv" into table 
places 
fields terminated by '\t'
lines terminated by '\n' 
ignore 1 lines  

--for locating places by names / aliases

CREATE TABLE `aliases` (
`woeid` int(15) NOT NULL,
`name` text NOT NULL,
`name-type` varchar(10) NOT NULL,
`language` varchar(10) DEFAULT NULL,
 KEY `woeid` (`woeid`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

--to load data

LOAD DATA concurrent infile "C:\\Users\\bleh\\Downloads\\aliases.tsv" into table 
places 
fields terminated by '\t'
lines terminated by '\n' 
ignore 1 lines  


--for locating places near the place

CREATE TABLE adjacencies
(
  `place_woe_id` int(15) NOT NULL,
  `place_iso` varchar(6) NOT NULL,
  `neighbour_woe_id` int(15) NOT NULL,
  `neighbour_iso` varchar(6) NOT NULL,
  PRIMARY KEY (`place_woe_id`, `neighbour_woe_id`)
)ENGINE=INNODB DEFAULT CHARSET=utf8;

LOAD DATA concurrent infile "C:\\Users\\bleh\\Downloads\\adjacencies.tsv" into table 
places 
fields terminated by '\t'
lines terminated by '\n' 
ignore 1 lines  