<!DOCTYPE html>
<html lang="en">

<head>
   <title>Col Financial Stock Transfer System</title>
   <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

   <!-- Meta -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="description" content="codedthemes">
   <meta name="keywords" content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
   <meta name="author" content="codedthemes">

   <!-- Favicon icon -->
   <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
   <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

   <!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

   <!-- themify -->
   <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">

   <!-- iconfont -->
   <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

   <!-- simple line icon -->
   <link rel="stylesheet" type="text/css" href="assets/icon/simple-line-icons/css/simple-line-icons.css">

   <!-- Required Fremwork -->
   <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap/css/bootstrap.min.css">

   <!-- bash syntaxhighlighter css -->
   <link type="text/css" rel="stylesheet" href="assets/plugins/syntaxhighlighter/styles/shCoreDjango.css" />

   <!-- Style.css -->
   <link rel="stylesheet" type="text/css" href="assets/css/main.css">

   <!-- Responsive.css-->
   <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">



</head>

<body class="sidebar-mini fixed">




<?php 
$con=mysqli_connect("localhost","root","","StockTransferDB");



if(isset($_POST['peronalsub']))
{

  //Personal Details 
  $Col_ID = $_POST['Col_ID'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $address = $_POST['address'];
  $tdcp = $_POST['tdcp'];
  $pc = $_POST['pc'];
  
  
$personalquery = "insert into custinfo_tb (Col_ID, email, contact, address, tdcp, pc) values('$Col_ID', '$email', '$contact', '$address', '$tdcp', '$pc' )";
$personalRes = mysqli_query($con, $personalquery);
if($personalRes){
    echo "<script> alert ('Personal Information added successfully!') ; </script>";
}
}

if(isset($_POST['stocksub']))
{
  //Stock Amount Query
  $Stock_Code = $_POST['Stock_Code'];
  $Stock_Name = $_POST['Stock_Name'];
  $Stock_Amount = $_POST['Stock_Amount'];
  $Avecost = $_POST['Avecost'];
  $Cert_amount = $_POST['Cert_amount'];

  $stockquery = "insert into stockinfo_tb (Stock_Code, Stock_Name, Stock_Amount, Avecost, Cert_amount) values('$Stock_Code', '$Stock_Name',' $Stock_Amount', '$Avecost', '$Cert_amount' )";
  $stockRes = mysqli_query($con, $stockquery);
  if($stockRes){
      echo "<script> alert ('Stock Amount added successfully!') ; </script>";
  }
}

if(isset($_POST['brokersub']))
{
  //Broker Query
  $Brokerid = $_POST['Brokerid'];
  $Broker_contact = $_POST['Broker_contact'];
  $Account_wBroker = $_POST['Account_wBroker'];

  $query="insert into brokerinfo_tb( Brokerid, Broker_contact, Account_wBroker)values('$Brokerid', '$Broker_contact', '$Account_wBroker')";
  $result=mysqli_query($con,$query);
  if($result){
      echo "<script>alert('Broker added successfully!');</script>";
  }
}

if(isset($_POST['transfersub']))
{
  //Transfer Type Query
  $transfee = $_POST['transfee'];
  $Transfertype = $_POST['Transfertype'];
  $transferdesc = $_POST['transferdesc'];
  $transperiod = $_POST['transperiod'];

  $transquery = "insert into transfertype_tb (Transfertype, transferdesc, transperiod,transfee) values('$Transfertype', ' $transferdesc', ' $transperiod' , '$transfee')";
  $transferRes = mysqli_query($con, $transquery);
  if($transferRes){
      echo "<script> alert ('Transaction Type added successfully!') ; </script>";
  }
}

if(isset($_POST['txsub']))
{
 //Transaction ID Query

  $Col_ID = $_POST['Col_ID'];
  $Stock_Code = $_POST['Stock_Code'];
  $Brokerid = $_POST['Brokerid'];
  $Transfertype = $_POST['Transfertype'];

  $txquery = "insert into transaction_tb (Col_ID, Stock_Code, Brokerid, Transfertype) values('$Col_ID', '$Stock_Code', '$Brokerid', '$Transfertype')";
  $txRes = mysqli_query($con, $txquery);
  if($transferRes){
      echo "<script> alert ('Transaction ID added successfully!') ; </script>";
  }



}
?>











   <div class="wrapper">
      <div class="loader-bg">
         <div class="loader-bar">
         </div>
      </div>
      <!-- Navbar-->
      <header class="main-header-top hidden-print">
         <a href="index.php" class="logo"><img class="img-fluid able-logo" src="assets/images/logo.png" alt="Theme-logo"></a>
         <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
            <ul class="top-nav lft-nav">
              
            </ul>
            <!-- Navbar Right Menu-->
            <div class="navbar-custom-menu">
               <ul class="top-nav">
                  <!--Notification Menu-->
                  
                  <!-- chat dropdown -->
                  
                  <!-- window screen -->
                  <li class="pc-rheader-submenu">
                     <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                        <i class="icon-size-fullscreen"></i>
                     </a>

                  </li>
                  <!-- User Menu-->
                  <li class="dropdown">
                     <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                        <span><img class="img-circle " src="assets/images/avatar-1.png" style="width:40px;" alt="User Image"></span>
                        <span>Admin <b>1</b> <i class=" icofont icofont-simple-down"></i></span>

                     </a>
                     <ul class="dropdown-menu settings-menu">
                        <li><a href="#!"><i class="icon-settings"></i> Settings</a></li>
                        <li><a href="#"><i class="icon-user"></i> Profile</a></li>
                        <li><a href="#"><i class="icon-envelope-open"></i> My Messages</a></li>
                        <li class="p-0">
                           <div class="dropdown-divider m-0"></div>
                        </li>
                        <li><a href="#"><i class="icon-lock"></i> Lock Screen</a></li>
                        <li><a href="login1.html"><i class="icon-logout"></i> Logout</a></li>

                     </ul>
                  </li>
               </ul>

               <!-- search -->
               <div id="morphsearch" class="morphsearch">
                  <form class="morphsearch-form">

                     <input class="morphsearch-input" type="search" placeholder="Search..." />

                     <button class="morphsearch-submit" type="submit">Search</button>

                  </form>
                  <div class="morphsearch-content">
                     <div class="dummy-column">
                        <h2>People</h2>
                        <a class="dummy-media-object" href="#!">
                           <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G" alt="Sara Soueidan" />
                           <h3>Sara Soueidan</h3>
                        </a>

                        <a class="dummy-media-object" href="#!">
                           <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G" alt="Shaun Dona" />
                           <h3>Shaun Dona</h3>
                        </a>
                     </div>
                     <div class="dummy-column">
                        <h2>Popular</h2>
                        <a class="dummy-media-object" href="#!">
                           <img src="assets/images/avatar-1.png" alt="PagePreloadingEffect" />
                           <h3>Page Preloading Effect</h3>
                        </a>

                        <a class="dummy-media-object" href="#!">
                           <img src="assets/images/avatar-1.png" alt="DraggableDualViewSlideshow" />
                           <h3>Draggable Dual-View Slideshow</h3>
                        </a>
                     </div>
                     <div class="dummy-column">
                        <h2>Recent</h2>
                        <a class="dummy-media-object" href="#!">
                           <img src="assets/images/avatar-1.png" alt="TooltipStylesInspiration" />
                           <h3>Tooltip Styles Inspiration</h3>
                        </a>
                        <a class="dummy-media-object" href="#!">
                           <img src="assets/images/avatar-1.png" alt="NotificationStyles" />
                           <h3>Notification Styles Inspiration</h3>
                        </a>
                     </div>
                  </div>
                  <!-- /morphsearch-content -->
                  <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
               </div>
               <!-- search end -->
            </div>
         </nav>
      </header>
     <!-- Side-Nav-->
     <aside class="main-sidebar hidden-print ">
         <section class="sidebar" id="sidebar-scroll">
            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
                <li class="nav-level">--- Navigation</li>
                <li class="treeview">
                    <a class="waves-effect waves-dark" href="index.php">
                        <i class="icon-speedometer"></i><span> Dashboard</span>
                    </a>                
                </li>
                <li class="nav-level">--- Components</li>
               <!-- <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span> UI Elements</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i> Accordion</a></li>
                        <li><a class="waves-effect waves-dark" href="button.html"><i class="icon-arrow-right"></i> Button</a></li>
                        <li><a class="waves-effect waves-dark" href="label-badge.html"><i class="icon-arrow-right"></i> Label Badge</a></li>
                        <li><a class="waves-effect waves-dark" href="bootstrap-ui.html"><i class="icon-arrow-right"></i> Grid system</a></li>
                        <li><a class="waves-effect waves-dark" href="box-shadow.html"><i class="icon-arrow-right"></i> Box Shadow</a></li>
                        <li><a class="waves-effect waves-dark" href="color.html"><i class="icon-arrow-right"></i> Color</a></li>
                        <li><a class="waves-effect waves-dark" href="light-box.html"><i class="icon-arrow-right"></i> Light Box</a></li>
                        <li><a class="waves-effect waves-dark" href="notification.html"><i class="icon-arrow-right"></i> Notification</a></li>
                        <li><a class="waves-effect waves-dark" href="panels-wells.html"><i class="icon-arrow-right"></i> Panels-Wells</a></li>
                        <li><a class="waves-effect waves-dark" href="tabs.html"><i class="icon-arrow-right"></i> Tabs</a></li>
                        <li><a class="waves-effect waves-dark" href="tooltips.html"><i class="icon-arrow-right"></i> Tooltips</a></li>
                        <li><a class="waves-effect waves-dark" href="typography.html"><i class="icon-arrow-right"></i> Typography</a></li>
                    </ul>
                </li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-chart"></i><span> Charts &amp; Maps</span><span class="label label-success menu-caption">New</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="float-chart.html"><i class="icon-arrow-right"></i> Float Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="morris-chart.html"><i class="icon-arrow-right"></i> Morris Charts</a></li>
                    </ul>
                </li>-->

                <li class="active treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-book-open"></i><span> Forms</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li class="active"><a class="waves-effect waves-dark" href="form-elements-bootstrap.php"><i class="icon-arrow-right"></i> Stock Transfer</a></li>
                    </ul>
                </li>


                <li class="active treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-list"></i><span> Tables </span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li ><a class="waves-effect waves-dark" href="basic-table.php"><i class="icon-list"></i> Customer Information</a></li>
                        
                        <li><a class="waves-effect waves-dark" href="broker-table.php"><i class="icon-list"></i> Broker Information</a></li>

                        <li><a class="waves-effect waves-dark" href="stock-table.php"><i class="icon-list"></i> Stock Information</a></li>

                        <li><a class="waves-effect waves-dark" href="ttype-table.php"><i class="icon-list"></i> Transfer Type Information</a></li>

                        <li><a class="waves-effect waves-dark" href="tx-table.php"><i class="icon-list"></i> Transaction Information</a></li>
                    </ul>
                </li>



                <li class="treeview">
                    <a class="waves-effect waves-dark" href="basic1-table.php">
                        <i class="icon-list"></i><span> 15 SQL Examples</span>
                    </a>                
                </li>

                
 
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
         </section>
      </aside>
      <!-- Sidebar chat start -->

      <!-- Sidebar chat end-->
      <div class="content-wrapper">
         <!-- Container-fluid starts -->
         <div class="container-fluid">
		 
		 


































































<!-- Main-body start -->
<form method="post" action="admin-panel2.php">
<form> <!-- for required field -->
<!--Stock Information -->
<div class="col-md-6">
    <div class="card">
                <div class="card-header"><h5>Stock Information</h5></div>
                    

                            <div class="card-block">
                                <div class="row">
                                    <div class="form-group form-default">
                                        <input type="text" name="Stock_Code" class="form-control" placeholder="JFC" required>
                                        <span class="form-bar"></span>
                                        <label class="float-label">Stock Code</label></div>
                                    <div class="form-group form-primary">
                                        <input type="text" name="Stock_Name" class="form-control" placeholder="Jollibee Food Corporation" required >
                                        <span class="form-bar"></span>
                                        <label class="float-label">Stock Name</label></div>
                                    <div class="form-group form-success">
                                        <input type="text" name="Stock_Amount" class="form-control" placeholder="500" required minlength="1" maxlength="18">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Amount of shares to transfer</label></div>
                                    <div class="form-group form-danger">
                                        <input type="text" name="Avecost" class="form-control" placeholder="200.00" required >
                                        <span class="form-bar"></span>
                                        <label class="float-label">Average cost</label></div>
                                    <div class="form-group form-warning">
                                        <input type="text" name="Cert_amount" class="form-control" placeholder="0" required>
                                        <span class="form-bar"></span>
                                        <label class="float-label">Certificate Amount</label></div> 
                                        
                            </div> <!--div class = "row"-->
                        </div><!--<div class="card-block">-->
            
    </div><!-- <div class="card">-->
</div><!--<div class="col-md-6">-->										
										


<!--Personal Information-->

<div class="col-md-6">
    <div class="card">
            <div class="card-header"><h5>Col Financial Stock Transfer Form</h5></div>
               

                        <div class="card-block">
                            <div class="row">
                                <div class="form-group form-default">
                                    <input type="text" name="Col_ID" class="form-control" placeholder="Ex: 20190621" minlength="8" maxlength="8" required>
                                    <span class="form-bar"></span>
                                    <label class="float-label">COL Financial ID</label></div>
                                <div class="form-group form-default">
                                    <input type="email" name="email" class="form-control" placeholder="youremail@gmail.com" required>
                                    <span class="form-bar"></span>
                                    <label class="float-label">Email</label></div>
                                <div class="form-group form-default">
                                    <input type="text" name="contact" class="form-control" placeholder="09123456789" minlength="11" maxlength="11" required> 
                                    <span class="form-bar"></span>
                                    <label class="float-label">Contact Number #</label></div>
                                <div class="form-group form-default">
                                    <input type="text" name="tdcp" class="form-control" placeholder="Quezon City" required>
                                    <span class="form-bar"></span>
                                    <label class="float-label">TDCP</label>
                                </div>
                                <div class="form-group form-default">
                                    <input type="text" name="address" class="form-control" placeholder="25 Bagumbayan St." required>
                                    <span class="form-bar"></span>
                                    <label class="float-label">Delivery Address</label> </div>
                                <div class="form-group form-default">
                                    <input type="text" name="pc" class="form-control" placeholder="1016" minlength="4" maxlength="4"  required >
                                    <span class="form-bar"></span>
                                    <label class="float-label">Postal Code / Country</label></div>
                           
                            </div> <!--div class = "row"-->
                        </div><!--<div class="card-block">-->
            
    </div><!-- <div class="card">-->
</div><!--<div class="col-md-6">-->





<!--BROKER -->
<div class="col-md-6">
    <div class="card">
            <div class="card-header"><h5> Broker Information </h5></div><!--<div class="card-header">-->
               

                        <div class="card-block">
                                <div class="row">
                                            <div class="form-group form-default form-static-label">
                                                <input type="text" name="Brokerid" class="form-control" placeholder="Enter Broker Name" required>
                                                <span class="form-bar"></span>
                                                <label class="float-label">Counter Party Broker Name</label></div>
                                            <div class="form-group form-default form-static-label">
                                                <input type="text" name="Broker_contact" class="form-control" placeholder="Enter Broker Contact Number" minlength="11" maxlength="11" required >
                                                <span class="form-bar"></span>
                                                <label class="float-label">Contact Number</label></div>
                                            <div class="form-group form-default form-static-label">
                                                <input type="text" name="Account_wBroker" class="form-control" placeholder="Your Account Name with Counterparty Broker" required> 
                                                <span class="form-bar"></span>
                                                <label class="float-label">Account Name with Counterparty Broker</label></div>
                                   
                                </div> <!--div class = "row"-->
                        </div><!--<div class="card-block">-->
               
    </div><!-- <div class="card">-->
</div><!--<div class="col-md-6">-->












<!--transfer type -->

<div class="col-md-5">
    <div class="card">
            <div class="card-header"><h5>Transfer Type</h5></div>
                
                           
                            <div class="card-block">
                                <div class="row">
                                    <div class="form-group form-default form-static-label">
                                        <input type="text" name="Transfertype" class="form-control" minlength="17" maxlength="18" required required>
                                        <span class="form-bar"></span>
                                        <label class="float-label">Type of Transfer</label></div>

                                    <div class="form-group form-warning form-static-label">
                                        <input type="text" name="footer-email" class="form-control" value="Transaction type are indicated at the bottom of the page" disabled>
                                        <span class="form-bar"></span>
                                        <label class="float-label"> </label> </div>
                                        </div> <!--div class = "row"-->
                        </div><!--<div class="card-block">-->
               
    </div><!-- <div class="card">-->
</div><!--<div class="col-md-6">-->


<input type="submit" name="txsub" value="Submit" class="btn btn-xlg btn-primary waves-effect waves-light" onclick="return confirm('Are you sure you wsant to submit?')">
</form>
</form><!-- <form method = "post" action = "admin-panel2.php">-->

























































										
										
										
										
										
										
										
										
										
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    
                                                    <div class="card-block">
                                                        <h4 class="sub-title">Type of Transfer</h4>
                                                    
													   
													  <code> Stock Transfer In <br></code> - Receive shares from other Brokers<br><br>
													  <code> Stock Transfer Out <br></code> - Deliver shares to other Brokers<br><br>

													   
													   
													   
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Basic Form Inputs card end -->
                                            </div>
											
											
                                        </div>
                                    </div>
                                    <!-- Page body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->
         </div>
         <!-- Container-fluid ends -->
      </div>
   </div>


   <!-- Required Jqurey -->
   <script src="assets/plugins/jquery/dist/jquery.min.js"></script>
   <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
   <script src="assets/plugins/tether/dist/js/tether.min.js"></script>

   <!-- Required Fremwork -->
   <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

   <!-- waves effects.js -->
   <script src="assets/plugins/Waves/waves.min.js"></script>

   <!-- Scrollbar JS-->
   <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
   <script src="assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

   <!--classic JS-->
   <script src="assets/plugins/classie/classie.js"></script>

   <!-- notification -->
   <script src="assets/plugins/notification/js/bootstrap-growl.min.js"></script>

   <!-- Highliter js -->
   <script type="text/javascript" src="assets/plugins/syntaxhighlighter/scripts/shCore.js"></script>
   <script type="text/javascript" src="assets/plugins/syntaxhighlighter/scripts/shBrushJScript.js"></script>
   <script type="text/javascript" src="assets/plugins/syntaxhighlighter/scripts/shBrushXml.js"></script>
   <script type="text/javascript">
      SyntaxHighlighter.all();
   </script>

   <!-- custom js -->
   <script type="text/javascript" src="assets/js/main.min.js"></script>
   <script type="text/javascript" src="assets/pages/elements.js"></script>
   <script src="assets/js/menu.min.js"></script>

</body>

</html>
