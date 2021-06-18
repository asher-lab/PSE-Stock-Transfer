CREATE TABLE `CUSTINFO_TB` (
  `Col_ID` int(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `tdcp` varchar(100) NOT NULL,
  `pc` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `STOCKINFO_TB` (
  `Stock_Code` varchar(6) NOT NULL ,
  `Stock_Name` varchar(50) NOT NULL,
  `Stock_Amount` int(9) NOT NULL,
  `Avecost` float(6) NOT NULL,
  `Cert_amount` float(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `BROKERINFO_TB` (
  `Brokerid` varchar(30) NOT NULL,
  `Broker_contact` int(15) NOT NULL,
  `Account_wBroker` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `TRANSFERTYPE_TB` (
  `Transfertype` varchar(20) NOT NULL,
  `transferdesc` varchar(20) NOT NULL,
  `transperiod` varchar(10) NOT NULL,
  `transfee` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `TRANSACTION_TB` (
  `transactionID` BIGINT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `Col_ID` int(8) NOT NULL,
  `Stock_Code` varchar(6) NOT NULL ,
  `Brokerid` varchar(30) NOT NULL,
  `Transfertype` varchar(20) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;