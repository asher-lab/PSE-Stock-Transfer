PSE Stock Transfer System - COL Financial Inc. <br><br>

run Xampp <br><br>
http://localhost/phpmyadmin<br>
Create database: 'incrementer'<br>
Paste this in SQL Tab: 
```
CREATE TABLE incrementer(
    transactionID bigint  NOT NULL AUTO_INCREMENT,
	status varchar(1),
    PRIMARY KEY (transactionID)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO incrementer (transactionID)
VALUES (13);
```


<br><br>
http://localhost/phpmyadmin<br>
Create database: 'im'<br>
Paste this in SQL Tab: https://github.com/asher-lab/PSE-Stock-Transfer/blob/master/SQLcreatetable.sql <br>
After pasting , copy and paste this dump date <br>
Paste this in im database sql tab: https://github.com/asher-lab/PSE-Stock-Transfer/blob/master/SQLdumpdata.sql <br><br>


download : https://codeload.github.com/asher-lab/PSE-Stock-Transfer/zip/refs/heads/master <br>
extract contents to: C://xampp/htdocs/ then paste here<br>
go to: http://localhost/quantum-lite/index.php or http://localhost/PSE-Stock-Transfer/quantum-lite/index.php <br><br>

![MyDrive Design](Screenshots/Screenshot%20(303).png)
