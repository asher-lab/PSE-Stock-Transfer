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

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
   <!-- Favicon icon -->
   <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
   <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

   <!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

   <!-- themify --> 
   <!--themify -->
   <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">

   <!-- iconfont -->
   <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

   <!-- simple line icon -->
   <link rel="stylesheet" type="text/css" href="assets/icon/simple-line-icons/css/simple-line-icons.css">

   <!-- Required Fremwork -->
   <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap/css/bootstrap.min.css">

   <!-- Chartlist chart css -->
   <link rel="stylesheet" href="assets/plugins/chartist/dist/chartist.css" type="text/css" media="all">

   <!-- Weather css -->
   <link href="assets/css/svg-weather.css" rel="stylesheet">


   <!-- Style.css -->
   <link rel="stylesheet" type="text/css" href="assets/css/main.css">

   <!-- Responsive.css-->
   <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

</head>

<body class="sidebar-mini fixed">
   <div class="loader-bg">
      <div class="loader-bar">
      </div>
   </div>
   <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header-top hidden-print">
         <a href="index.php" class="logo"><img class="img-fluid able-logo" src="assets/images/logo.png" alt="Theme-logo"></a>
         <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
            <ul class="top-nav lft-nav">
                           
              
            </ul>
           

               <ul class="top-nav">
                  <!--Notification Menu-->
                    
       
                  
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
                <li class="active treeview">
                    <a class="waves-effect waves-dark" href="index.php">
                        <i class="icon-speedometer"></i><span> Dashboard</span>
                    </a>                
                </li>
                <li class="nav-level">--- Services</li>
               



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
         <!-- Main content starts -->
         <div class="container-fluid">
            <div class="row">
               <div class="main-header">
                  <h4>Dashboard</h4>
               </div>
            </div>
			
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">Ticker Tape</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "FOREXCOM:SPXUSD",
      "title": "S&P 500"
    },
    {
      "proName": "FOREXCOM:NSXUSD",
      "title": "Nasdaq 100"
    },
    {
      "proName": "FX_IDC:EURUSD",
      "title": "EUR/USD"
    },
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "BTC/USD"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "ETH/USD"
    },
    {
      "description": "PSEI",
      "proName": "INDEX:PSEC"
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "light",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->

            <!-- 4-blocks row end -->



<!--Header Ticker widget tape -->

            <!-- 1-3-block row start -->
            <div class="row">
			
			<!--start from user -->
               <div class="col-lg-4">
                  <div class="card">
				  
                     <div class="user-block-2">
                        <img class="img-fluid" src="assets/images/widget/user-1.jpg" alt="user-header">
                        <h5>April Lee Tan</h5>
                        <h6>COL Chief Equity Strategist</h6>
                     </div>
					 
                     <div class="card-block">
                        <div class="user-block-2-activities">
                           <div class="user-block-2-active">
                              <i class="icofont icofont-ui-user"></i> <i> Col Financial Stock Transfer system is 
							  an extension of COL Financial Inc. We provide services to our customers
							  from Stock Lodgements, Transferring from and to a broker and 
							  COL-to-COL transaction.  The firm was established in 1999 with the vision of allowing 
							  a low-cost and easily accessible means to invest in the Philippine Stock Market. Over the years,
							  it has developed a full sweep of services to empower the retail investor.</i>
                             
                           </div>
                        </div>
                        <div class="text-center">
                           <button type="button"  onclick="location.href='http://colfinancial.com'"  target = "_blank" class="btn btn-warning waves-effect waves-light text-uppercase m-r-30">
                                    Transfer Stocks
                                </button>
                           <button type="button"  onclick="location.href='http://edge.pse.com.ph'" target = "_blank" class="btn btn-primary waves-effect waves-light text-uppercase">
                                    PSE Edge
                                </button>
                        </div>
                     </div>
                  </div>
               </div>
			   
			   <!--BAR CHART CHART -->
               <div class="col-lg-8">
                  <div class="card">
                     <div class="card-header">
                        <h5 class="card-header-text">Trading Chart</h5>
                     </div>
                     <div class="card-block">
					 
					 
                       <!-- <div id="barchart" style="min-width: 250px; height: 330px; margin: 0 auto"></div>-->
						
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tradingview_b9096"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/INDEX-PSEC/" rel="noopener" target="_blank"><span class="blue-text">PSEC Chart</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": 980,
  "height": 310,
  "symbol": "INDEX:PSEC",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "light",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_b9096"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-12 grid-item">
                  
				  <div class="card">
                     <div class="card-block horizontal-card-img d-flex">
                        <img class="media-object img-circle" src="assets/images/ashpic.png" alt="Generic placeholder image">
                        <div class="d-inlineblock  p-l-20">
                          <h6>Asher Manangan</h6>
                          <a href="#">customerservice@colfinancial.com</a>
                       </div>
                        <h6 class="txt-warning rotate-txt">Cust. Rep.</h6>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-12 grid-item">
                 
				 <div class="card">
                     <div class="card-block horizontal-card-img d-flex">
                        <img class="media-object img-circle" src="assets/images/khypic.png" alt="Generic placeholder image">
                        
						
						
						<div class="d-inlineblock  p-l-20">
                          <h6>Khyllo Martin Malundas</h6>
                          <a href="#">trading@colfinancial.com</a>
                       </div>
                        <h6 class="txt-danger rotate-txt">COL Broker</h6>
                     </div>
                  </div>
               </div>
            </div>
            <!-- 1-3-block row end -->

            <!-- 2-1 block start -->
            <div class="row">
			
			
			<!--transaction -->
			<h5>...              Recent Transactions </h5>
               <div class="col-xl-8 col-lg-12">
                  <div class="card">
                     <div class="card-block">
                        <div class="table-responsive">
                           <table class="table m-b-0 photo-table">
                           <thead>
                  <tr>
                  <th scope="col">Transaction ID</th>
                    <th scope="col">COL ID</th>
                    <th scope="col">Stock Code</th>
                    <th scope="col">Type of Transfer</th>

                  </tr>
                </thead>
							  
							  
                              
               
                <tbody>
                  <?php 
                    $con=mysqli_connect("localhost","root","","im");
                    global $con;
                    $query = "select * from transaction_tb ORDER BY transactionID DESC";
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){

                        $transactionID = $row['transactionID'];
                        $Col_ID =  $row['COL_ID'];
                        $Stock_Code =  $row['Stock_Code'];
                        $transfertype =  $row['Transfertype'];
          


                 
                      
                      echo "<tr>
                        <td>$transactionID</td>
                        <td>$Col_ID</td>
                        <td>$Stock_Code</td>
                        <td>$transfertype</td>

                      
                      </tr>";
                    }

                  ?>
                </tbody>
              </table>

                           </table>
                        </div>
                     </div>
                  </div>
               </div>
			   
			   <!--transaction -->
			   
			   
			   
			   
               <div class="col-xl-4 col-lg-12">
                 
				 <div class="card">
                     <div class="card-header">
                        <h5 class="card-header-text">Financial News from Philippines & Global Markets  </h5>
						
                     </div>
					 
					 
					 
					 
					 
					 
                     <div class="card-block">
                       <!-- <div id="piechart" style="min-width: 250px; height: 460px; margin: 0 auto"></div> -->
						
						
						
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text"> History</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
  {
  "colorTheme": "light",
  "isTransparent": false,
  "displayMode": "regular",
  "width": "480",
  "height": "500",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
						
                     
					 </div>







                  </div>
               </div>
            </div>
            <!-- 2-1 block end -->
         </div>
         <!-- Main content ends -->
         <!-- Container-fluid ends -->
         <div class="fixed-button">
            <a href="https://colfinancial.com" class="btn btn-md btn-primary">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i> Click Here to go to main site
            </a>
         </div>
      </div>
   </div>


   <!-- Warning Section Starts -->
   <!-- Older IE warning message -->
   <!--[if lt IE 9]>
      <div class="ie-warning">
          <h1>Warning!!</h1>
          <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
          <div class="iew-container">
              <ul class="iew-download">
                  <li>
                      <a href="http://www.google.com/chrome/">
                          <img src="assets/images/browser/chrome.png" alt="Chrome">
                          <div>Chrome</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.mozilla.org/en-US/firefox/new/">
                          <img src="assets/images/browser/firefox.png" alt="Firefox">
                          <div>Firefox</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://www.opera.com">
                          <img src="assets/images/browser/opera.png" alt="Opera">
                          <div>Opera</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.apple.com/safari/">
                          <img src="assets/images/browser/safari.png" alt="Safari">
                          <div>Safari</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                          <img src="assets/images/browser/ie.png" alt="">
                          <div>IE (9 & above)</div>
                      </a>
                  </li>
              </ul>
          </div>
          <p>Sorry for the inconvenience!</p>
      </div>
      <![endif]-->
   <!-- Warning Section Ends -->

   <!-- Required Jqurey -->
   <script src="assets/plugins/Jquery/dist/jquery.min.js"></script>
   <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
   <script src="assets/plugins/tether/dist/js/tether.min.js"></script>

   <!-- Required Fremwork -->
   <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

   <!-- Scrollbar JS-->
   <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
   <script src="assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

   <!--classic JS-->
   <script src="assets/plugins/classie/classie.js"></script>

   <!-- notification -->
   <script src="assets/plugins/notification/js/bootstrap-growl.min.js"></script>

   <!-- Sparkline charts -->
   <script src="assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

   <!-- Counter js  -->
   <script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
   <script src="assets/plugins/countdown/js/jquery.counterup.js"></script>

   <!-- Echart js -->
   <script src="assets/plugins/charts/echarts/js/echarts-all.js"></script>

   <script src="https://code.highcharts.com/highcharts.js"></script>
   <script src="https://code.highcharts.com/modules/exporting.js"></script>
   <script src="https://code.highcharts.com/highcharts-3d.js"></script>

   <!-- custom js -->
   <script type="text/javascript" src="assets/js/main.min.js"></script>
   <script type="text/javascript" src="assets/pages/dashboard.js"></script>
   <script type="text/javascript" src="assets/pages/elements.js"></script>
   <script src="assets/js/menu.min.js"></script>
<script>
var $window = $(window);
var nav = $('.fixed-button');
$window.scroll(function(){
    if ($window.scrollTop() >= 200) {
       nav.addClass('active');
    }
    else {
       nav.removeClass('active');
    }
});
</script>

</body>

</html>
