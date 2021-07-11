<!--orginal-->

<!DOCTYPE html>
<?php 
$con=mysqli_connect("localhost","root","","im");
$con2 = mysqli_connect("localhost", "root", "", "incrementer");



if(isset($_POST['txsub']))
{



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


//echo $transactionID;









  //Personal Info customer info
  $Col_ID = $_POST['Col_ID'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $address = $_POST['address'];
  $tdcp = $_POST['tdcp'];
  $pc = $_POST['pc'];
  
  
  $personalquery = "insert into custinfo_tb (transactionID, Col_ID, email, contact, address, tdcp, pc) values('$transactionID', '$Col_ID', '$email', '$contact', '$address', '$tdcp', '$pc' )";
    $personalRes = mysqli_query($con, $personalquery);
    if($personalRes){
      //  echo "<script> alert ('Personal Information added successfully!') ; </script>";
    }

  //Stock Amount Query
  $Stock_Code = $_POST['Stock_Code'];
  $Stock_Name = $_POST['Stock_Name'];
  $Stock_Amount = $_POST['Stock_Amount'];
  $Avecost = $_POST['Avecost'];
  $Cert_amount = $_POST['Cert_amount'];

  $stockquery = "insert into stockinfo_tb (transactionID, Stock_Code, Stock_Name, Stock_Amount, Avecost, Cert_amount) values('$transactionID', '$Stock_Code', '$Stock_Name',' $Stock_Amount', '$Avecost', '$Cert_amount' )";
  $stockRes = mysqli_query($con, $stockquery);
  if($stockRes){
    //  echo "<script> alert ('Stock Amount added successfully!') ; </script>";
  }

  //Broker Query
  $Brokerid = $_POST['Brokerid'];
  $Broker_contact = $_POST['Broker_contact'];
  $Account_wBroker = $_POST['Account_wBroker'];

  $brokerquery = "insert into brokerinfo_tb (transactionID, Brokerid, Broker_contact, Account_wBroker) values('$transactionID', '$Brokerid', '$Broker_contact', '$Account_wBroker' )";
  $brokerRes = mysqli_query($con, $brokerquery);
  if($brokerRes){
      //echo "<script> alert ('Broker1 added successfully!') ; </script>";
  }

  //Transfer Type Query
  $Transfertype = $_POST['Transfertype'];
  if ($Transfertype == "Stock Transfer In" OR $Transfertype == "Stock Transfer Out"){
   
    $transfee = 75.00;
    $transferdesc = "Transfer IN/OUT ";
    $transperiod = "2 days"; }



  $typequery = "insert into transactiontype_tb(transactionID,Transfertype, transferdesc, transperiod,transfee) values('$transactionID', '$Transfertype', ' $transferdesc', ' $transperiod' , '$transfee' )";
  $typeRes = mysqli_query($con, $typequery);
  if($typeRes){
    //  echo "<script> alert ('Transaction Type added successfully!') ; </script>";
  }

 //Transaction ID Query

  $Col_ID = $_POST['Col_ID'];
  $Stock_Code = $_POST['Stock_Code'];
  $Brokerid = $_POST['Brokerid'];
  $Transfertype = $_POST['Transfertype'];
  $now = date_create()->format('Y-m-d H:i:s');
  $txquery = "insert into transaction_tb (transactionID, Col_ID, Stock_Code, Brokerid, Transfertype, sysdate) values('$transactionID', '$Col_ID', '$Stock_Code', '$Brokerid', '$Transfertype', '$now')";
  $txRes = mysqli_query($con, $txquery);
  if($txRes){
      echo "<script> alert ('Transaction added successfully!') ; </script>";
  }


}
?>


<script>
window.location.href = "https://localhost/quantam-lite/form-elements-bootstrap.php";
</script>