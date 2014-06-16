<?php

// authenticate
// user will be redirected if not logged in with right credentials
include "includes/auth.php";

?>

<!DOCTYPE html>
<!--
Template Name: Admin Lab Dashboard build with Bootstrap v2.3.1
Template Version: 1.2
Author: Mosaddek Hossain
Website: http://thevectorlab.net/
-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Submarine Dashboard</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/style_responsive.css" rel="stylesheet" />
	<link href="css/style_default.css" rel="stylesheet" id="style_color" />
	<link href="css/AcquisitionLastHijackCSS.css" rel="stylesheet" />
	<link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
	<link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Gudea' rel='stylesheet' type='text/css'>
	 <link rel='stylesheet' type='text/css' href='stylesheet.css'/>
	<link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css'/>
	<link href="css/ballsstyle.css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Gudea' rel='stylesheet' type='text/css'/>
	<script type='text/javascript' src='script.js'></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>



</head>



	<script src="js/d3.min.js"></script>
</head>
<style>

body {font-family: 'Gudea', sans-serif;

}



.arc path {
  stroke: #fff;
  stroke-width:5;

}

#project {
	font-family: 'Gudea', sans-serif;
}



a.tooltips {
  position: relative;
  display: inline;
}
a.tooltips span {
  position: absolute;
  width:210px;
  color: #FFFFFF;
  background: #777E88;
  height: 100px;
  text-align:center;
  visibility: hidden;
  border-radius: 14px;

}
a.tooltips span:after {
  position: absolute;
  top: 50%;
  left: 100%;
  margin-top: -8px;
  width: 0; height: 0;
  border-left: 8px solid #777E88;
  border-top: 8px solid transparent;
  border-bottom: 8px solid transparent;
}
a:hover.tooltips span {
  visibility: visible;
  opacity: 0.8;
  right: 100%;
  top: 50%;
  margin-top: -50px;
  margin-right: 15px;
  z-index: 999;
}


</style>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">




	<!-- BEGIN HEADER -->
    <div id="header" class="navbar navbar-inverse navbar-fixed-top">
        <!-- BEGIN TOP NAVIGATION BAR -->
        <div class="navbar-inner">
            <div class="container-fluid">
                <!-- BEGIN LOGO -->
                <a class="brand" href="Behavior1AB.html">

                </a>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="arrow"></span>
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <div id="top_menu" class="nav notify-row">
                    <!-- BEGIN NOTIFICATION -->
                    <ul class="nav top-menu">
                        <!-- BEGIN PROJECT -->
                        <li class="dropdown">
                            <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title=>
                                <p id="project"> Last Hijack</p>
                            </a>
                        </li>
                        <!-- END PROJECT -->

                    </ul>
                </div>
                <!-- END  NOTIFICATION -->
                <div class="top-nav ">
                    <ul class="nav pull-right top-menu" >

                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="img/Geert.jpg" alt="">
                                <span class="username">	Transmedia Analytics</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                                <li><a href="login.html"><i class="icon-info-sign"></i> Help</a></li>
                                <li><a href="login.html"><i class="icon-flag"></i> About</a></li>
                                <li class="divider"></li>
                                <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                    </ul>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
            </div>
        </div>
        <!-- END TOP NAVIGATION BAR -->
    </div>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
	<div id="container" class="row-fluid">
		<!-- BEGIN SIDEBAR -->
		<div id="sidebar" class="nav-collapse collapse">
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
			<div class="sidebar-toggler hidden-phone"></div>
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

			<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
			<div class="navbar-inverse">
				<form class="navbar-search visible-phone">
					<input type="text" class="search-query" placeholder="Search" />
				</form>
			</div>
			<!-- END RESPONSIVE QUICK SEARCH FORM -->
			<!-- BEGIN SIDEBAR MENU -->
            <ul class="sidebar-menu">
				<li class="sub">
                    <a href="cat_content.php" class="">
                        <span class="icon-box"> <i class="icon-user"></i></span> CONTENT
                        <span class="arrow"></span>
                    </a>
                </li>

                <li class="sub">
                    <a href="cat_interface.php" class="">
                        <span class="icon-box"> <i class="icon-user"></i></span> INTERFACE
                        <span class="arrow"></span>
                    </a>
                </li>

                <li class="sub">
                    <a href="cat_acquisition.php" class="">
                        <span class="icon-box"> <i class="icon-link"></i></span> ACQUISITION
                        <span class="arrow"></span>
                    </a>
                </li>

                <li class="has-sub">
                    <a href="cat_technical.php" class="">
                        <span class="icon-box"><i class="icon-wrench"></i></span> TECHNICAL
                        <span class="arrow"></span>
                    </a>
                </li>
            </ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div id="main-content">
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">





<!-- BEGIN BREADCRUMB-->

					<div class="span12">
						<ul class="breadcrumb">
							<li>
                                <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
							</li>
							<!--
                            <li>
                                <a href="#">ACQUISTION</a> <span class="divider">&nbsp;</span>
                            </li>
							<li><a href="#">Referral performance</a><span class="divider-last">&nbsp;</span></li>
							-->
						</ul>
					</div>


<!-- ACQUISITION + QUESTION -->

					<div>
						<h1>LAST HIJACK ANALYTICS</h1>
							<h5>Check stuff</h5>
					</div>

<!-- START REFERRAL PERFORMANCE: OVERVIEW -->

                <div class="span10" >
					<div class="widget">
                        <div class="widget-title">
                            <h4> Referral performance: overview </h4>
                     			<a class="tooltips" href="#" style="float:right"><p type="button" class="icon-question-sign" style="margin:12px"></p>
									<span>The date span filter can be used to zoom in to a specific period of time. By hovering over a slice the absolute number of sessions is displayed.</span>
								</a>
                   	 	</div>


						<div class="widget-body">
                    		<div>
                        		<h5>

                        		<?php

				// let's get some data!


				// here we set up the query
				// cf GA query explorer for reference
				$optParams = array(
					'dimensions' => 'ga:dimension1',
					//'sort' => '-ga:visits',
					//'filters' => 'ga:medium==organic',
					'max-results' => '5000'
				);

				// make the call to the API
				try {
					$data = $service -> data_ga -> get('ga:81935905', '2014-05-05', '2014-05-19', 'ga:sessions',	 $optParams);
				} catch (Exception $e) {
			    	print_r($e);
				}

				// CSV file format first line
				$content = "label,session,percentage\n";

				// parse data and write to file
			    foreach($data["rows"] as $row) {
					$content .= $row[0] . "," .
								$row[1] . "," .
								round(($row[1] / $data["totalsForAllResults"]["ga:sessions"]) * 100) .		// percentage needs to be calculated
								"\n";
				}

				print_r($content);

				// write the data to a file
				// makes interfacing with D3 simpler
				//file_put_contents("data/rtdata_pie.csv", $content);

				?>


                        		</h5>
                       		</div>
						</div>
					</div>





				<!-- END PAGE CONTENT-->

			<!-- END PAGE CONTAINER-->
		</div>
		<!-- END PAGE -->
	    </div>
	    </div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
        <div id="footer">
            2014 &copy; Transmedia Analytics.
            <div class="span pull-right">
                <span class="go-top"><i class="icon-arrow-up"></i></span>
            </div>
        </div>
        <!-- END FOOTER -->
        <!-- BEGIN JAVASCRIPTS -->
        <!-- Load javascripts at bottom, this will reduce page load time -->
        <script src="js/jquery-1.8.3.min.js"></script>
        <script src="assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
        <script src="assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.blockui.js"></script>
        <script src="js/jquery.cookie.js"></script>
        <!-- ie8 fixes -->
        <!--[if lt IE 9]>
        <script src="js/excanvas.js"></script>
        <script src="js/respond.js"></script>
        <![endif]-->
        <script src="assets/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="assets/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="assets/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="assets/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="assets/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="assets/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="assets/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <script src="assets/jquery-knob/js/jquery.knob.js"></script>
        <script src="assets/flot/jquery.flot.js"></script>
        <script src="assets/flot/jquery.flot.resize.js"></script>

        <script src="assets/flot/jquery.flot.pie.js"></script>
        <script src="assets/flot/jquery.flot.stack.js"></script>
        <script src="assets/flot/jquery.flot.crosshair.js"></script>

        <script src="js/jquery.peity.min.js"></script>
        <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
        <script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
        <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
		<script type="text/javascript" src="js/Transmedia.js"></script>
        <script src="js/scripts.js"></script>
        <script>
            jQuery(document).ready(function() {
                // initiate layout and plugins
                App.setMainPage(true);
                App.init();
            });
        </script>
        <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>