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
                        <span>John <b>Doe</b> <i class=" icofont icofont-simple-down"></i></span>

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
		 
		 
































         <div class="card">
         <div class="card-header"><h5 class="card-header-text">Transaction Type Information Table</h5> <p><code>select * from transactiontype_tb ORDER BY transactionID</code></p></div>
         <div class="card-block">
                <div class="row">
                    <div class="col-sm-12 table-responsive">
         <table class="table">
                <thead>
                  <tr>
                  <th scope="col">Transaction ID</th>
                    <th scope="col">Transfer Type</th>
                    <th scope="col">Transfer Description</th>
                    <th scope="col">Transfer Fees</th>
                    <th scope="col">Transfer Period</th>
                    

                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $con=mysqli_connect("localhost","root","","im");
                    global $con;
                    $query = "select * from transactiontype_tb ORDER BY transactionID";
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){

                    

                      
                        $transactionID = $row['transactionID'];
                        $Transfertype = $row['Transfertype'];
                        $transfee = $row['transfee'];
                        $transferdesc = $row['transferdesc'];
                        $transperiod = $row['transperiod'];
                        

                 
                      
                      echo "<tr>
                        <td>$transactionID</td>
                        <td>$Transfertype</td>
                        <td>$transferdesc</td>
                        <td>$transfee</td>
                        <td>$transperiod</td>
                       
                      
                      </tr>";
                    }

                  ?>
                </tbody>
              </table>
        <br>
      </div></div></div>


















































































										
										
										
										
										
										
										
										
										

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
