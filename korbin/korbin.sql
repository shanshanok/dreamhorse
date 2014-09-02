
# --------------------------------------------------------
# 表的结构 joe_user,该表用于用户
# --------------------------------------------------------

DROP TABLE IF EXISTS kor_user;
CREATE TABLE kor_user(
	userno INT NOT NULL AUTO_INCREMENT,
	username VARCHAR(20) NOT NULL,
	email VARCHAR(20) NOT NULL,
	password VARCHAR(80),
	motto VARCHAR(100) DEFAULT '       ',
	school VARCHAR(50),
	authority VARCHAR(10) NOT NULL DEFAULT 'user' CHECK(authority in ('manager','user')),
	PRIMARY KEY(userno),
	UNIQUE KEY(username)
);

DROP TABLE IF EXISTS kor_essay;
CREATE TABLE kor_essay(
	essayno INT NOT NULL AUTO_INCREMENT,
	title VARCHAR(200) NOT NULL,
	type VARCHAR(50) NOT NULL,
	author VARCHAR(20),
	addtime DATETIME,
	abstract TEXT,
	content TEXT,
	checked VARCHAR(10) NOT NULL DEFAULT 'false' CHECK(checked in ('true', 'false')),
	PRIMARY KEY(essayno)
);

DROP TABLE IF EXISTS kor_work;
CREATE TABLE kor_work(
	workno INT NOT NULL AUTO_INCREMENT,
	title VARCHAR(200) NOT NULL,
	type VARCHAR(50) NOT NULL,
	author VARCHAR(20),
	filename VARCHAR(50),
	abstract TEXT,
	content TEXT,
	addtime DATETIME,
	checked VARCHAR(10) NOT NULL DEFAULT 'false' CHECK(checked in ('true', 'false')),
	PRIMARY KEY(workno)
);

DROP TABLE IF EXISTS kor_experience;
CREATE TABLE kor_experience(
	experienceno INT NOT NULL AUTO_INCREMENT,
	title VARCHAR(200) NOT NULL,
	author VARCHAR(20),
	addtime DATETIME,
	abstract TEXT,
	content TEXT,
	checked VARCHAR(10) NOT NULL DEFAULT 'false' CHECK(checked in ('true', 'false')),
	PRIMARY KEY(experienceno)
);

DROP TABLE IF EXISTS kor_thinkform;
CREATE TABLE kor_thinkform (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `create_time` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;


DROP TABLE IF EXISTS kor_comment;
CREATE TABLE kor_comment(
	commentno INT NOT NULL AUTO_INCREMENT,
	commenttype VARCHAR(20) NOT NULL DEFAULT 'essaycomment' CHECK(checked in ('essaycomment', 'workcomment', 'experiencecomment')),
	targetno INT NOT NULL,
	userno VARCHAR(20) NOT NULL,
	username VARCHAR(20) NOT NULL,
	commenttext TEXT,
	addtime DATETIME,
	recommentno INT,
	PRIMARY KEY(commentno),
	UNIQUE KEY(username)
);

DROP TABLE IF EXISTS kor_post;
CREATE TABLE kor_post(
	postno INT NOT NULL AUTO_INCREMENT,
	postname VARCHAR(200) NOT NULL UNIQUE,
	industry VARCHAR(50) NOT NULL,
	author VARCHAR(20),
	addtime DATETIME,
	introduction TEXT,
	requirement TEXT,
	improvement TEXT,
	employment TEXT,
	checked VARCHAR(10) NOT NULL DEFAULT 'false' CHECK(checked in ('true', 'false')),
	PRIMARY KEY(postno)
);

DROP TABLE IF EXISTS kor_praise;
CREATE TABLE kor_praise(
	praiseno INT NOT NULL AUTO_INCREMENT,
	praisetype VARCHAR(20) NOT NULL DEFAULT 'essaypraise' CHECK(checked in ('essaypraise', 'experiencepraise', 'workpraise')),
	targetno INT NOT NULL,
	author VARCHAR(20) NOT NULL,
	targetauthor VARCHAR(20) NOT NULL,
	addtime DATETIME,
	positive VARCHAR(10) NOT NULL DEFAULT 'false' CHECK(checked in ('true', 'false')),
	PRIMARY KEY(praiseno)
);

DROP TABLE IF EXISTS kor_message;
CREATE TABLE kor_message(
	messageno INT NOT NULL AUTO_INCREMENT,
	message_author VARCHAR(20) NOT NULL ,
	message_title TEXT ,
	message_text TEXT ,
	comment_user VARCHAR(20) NOT NULL,
	PRIMARY KEY(messageno),
	
)

