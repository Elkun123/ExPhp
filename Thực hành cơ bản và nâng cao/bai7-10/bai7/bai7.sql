CREATE DATABASE bai7;
CREATE TABLE `theloai` (
`idTL` int(11) NOT NULL auto_increment,
`TenTL` varchar(255) NOT NULL default '',
`ThuTu` int(11) default '0',
`AnHien` tinyint(1) default '1',
`icon` varchar(255) NOT NULL default '',
PRIMARY KEY (`idTL`),
UNIQUE KEY `TenTL` (`TenTL`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;