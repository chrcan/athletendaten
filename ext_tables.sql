# Extend table structure for table 'tt_address'

CREATE TABLE tt_address (
	onmstartklasse text,
	iomstartklasse text,
	wettbewerb text,
	startlizenz varchar(255) DEFAULT '' NOT NULL,
	startbuch varchar(255) DEFAULT '' NOT NULL,
	iomstart varchar(255) DEFAULT '' NOT NULL,
	emquali varchar(255) DEFAULT '' NOT NULL,
	wmquali varchar(255) DEFAULT '' NOT NULL,
	arnoldquali varchar(255) DEFAULT '' NOT NULL,
	reisepassnummer varchar(255) DEFAULT '' NOT NULL,
	reisepassland varchar(255) DEFAULT '' NOT NULL,
	aufenthalt bigint(20) DEFAULT '0' NOT NULL,
	genehmigung bigint(20) DEFAULT '0', 
	reisepassimage int(11) unsigned NOT NULL default '0',
	imageupload int(11) unsigned NOT NULL default '0',
); 