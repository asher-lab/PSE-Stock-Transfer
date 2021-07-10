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
  $incrementquery = "select top 1 transactionID from incrementer order by desc";
  $incrementRes1 = mysqli_query($con2, $incrementquery);
  $row = $incrementRes1->fetch_assoc();
  $transactionID = $row["transactionID"]+1;
}
?>