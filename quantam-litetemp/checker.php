<!DOCTYPE html>
<?php 
$con=mysqli_connect("localhost","root","","im");
$con2 = mysqli_connect("localhost", "root", "", "incrementer");

if ($con2->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }



  //calling the autoincrementer
  $status = '1';
  $incrementqueryinsert = "insert into incrementer (status) values ('$status')";
  $incrementRes0 = mysqli_query($con2, $incrementqueryinsert);


  //$incrementquery = "select top 1 transactionID from incrementer order by desc";
  $incrementquery = "select transactionID from incrementer ORDER BY transactionID DESC";
  $result = mysqli_query($con2, $incrementquery);


  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo "<br> id: ". $row["transactionID"] ;
        $transactionID =  $row["transactionID"];
        BREAK;
    }
} else {
    echo "0 results";
}


echo $transactionID;
  




  //Personal Info customer info
  $Col_ID = 1212121;
  $email = "asher01000001@gmail.com";
  $contact = 121212111;
  $address = "Zambales";
  $tdcp = "Pineng";
  $pc = "1016";
  
  
    $personalquery = "insert into custinfo_tb (transactionID, Col_ID, email, contact, address, tdcp, pc) values('$transactionID', '$Col_ID', '$email', '$contact', '$address', '$tdcp', '$pc' )";
    $personalRes = mysqli_query($con, $personalquery);
    if($personalRes){
        echo "<script> alert ('Personal Information added successfully!') ; </script>";
    }


 //Stock Amount Query
 $Stock_Code = "JFC";
 $Stock_Name = "Jollivee";
 $Stock_Amount = 100;
 $Avecost = 121;
 $Cert_amount = 10;

 $stockquery = "insert into stockinfo_tb (transactionID, Stock_Code, Stock_Name, Stock_Amount, Avecost, Cert_amount) values('$transactionID', '$Stock_Code', '$Stock_Name',' $Stock_Amount', '$Avecost', '$Cert_amount' )";
 $stockRes = mysqli_query($con, $stockquery);
 if($stockRes){
     echo "<script> alert ('Stock Amount added successfully!') ; </script>";
 }

 $Brokerid = "Abacus";
 $Broker_contact = 121212121;
 $Account_wBroker = "Asher Manangan";        


 
 $brokerquery = "insert into brokerinfo_tb (transactionID, Brokerid, Broker_contact, Account_wBroker) values('$transactionID', '$Brokerid', '$Broker_contact', '$Account_wBroker' )";
 $brokerRes = mysqli_query($con, $brokerquery);
 if($brokerRes){
     echo "<script> alert ('Broker1 added successfully!') ; </script>";
 }

 $transfee = 90;
 $Transfertype = "Stock transfer in";
 $transferdesc = "Stock transfer in";
 $transperiod = "3 days";
 
 $typequery = "insert into transactiontype_tb(transactionID,Transfertype, transferdesc, transperiod,transfee) values('$transactionID', '$Transfertype', ' $transferdesc', ' $transperiod' , '$transfee' )";
 $typeRes = mysqli_query($con, $typequery);
 if($typeRes){
     echo "<script> alert ('Transaction Type added successfully!') ; </script>";
 }

//Transaction ID Query


 $txquery = "insert into transaction_tb (transactionID, Col_ID, Stock_Code, Brokerid, Transfertype) values('$transactionID', '$Col_ID', '$Stock_Code', '$Brokerid', '$Transfertype')";
 $txRes = mysqli_query($con, $txquery);
 if($txRes){
     echo "<script> alert ('Transaction ID added successfully!') ; </script>";
 }











?>
