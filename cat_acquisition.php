<?php

// authenticate
// user will be redirected if not logged in with right credentials
include "includes/auth.php";

$startdate = ($_GET["date_start"]) ? $_GET["date_start"]:date("Y-m-d", time() - 60 * 60 * 24 * 14);
$enddate = ($_GET["date_end"]) ? $_GET["date_end"]:date("Y-m-d", time() - 60 * 60 * 24 * 1);

?>
<head>
	<meta charset="utf-8" />

	<title>Submarine Dashboard</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/style_responsive.css" rel="stylesheet" />
	<link href="css/style_default.css" rel="stylesheet" id="style_color" />

	<link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
	<!-- <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" /> -->
	<link href="assets/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Gudea' rel='stylesheet' type='text/css'>

	<link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css'/>

	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
	<script src="js/d3.min.js"></script>


	<style>

	body { font-family: 'Gudea', sans-serif; }

	.arc path {
	  stroke: #fff;
	  stroke-width:5;
	}

	#project {
		font-family: 'Gudea', sans-serif;
		padding:10px;
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
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">

<!-- BEGIN HEADER -->
<div id="header" class="navbar navbar-inverse navbar-fixed-top">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <div class="container-fluid">
            <!-- BEGIN LOGO -->
            <a class="brand" href="index.php"></a>
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
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
					<p id="project">

                        <!-- DATEPICKER CODE-->
						<span>
							Last Hijack from <input type="text" name="date_start" id="date_start" value="<?php echo $startdate; ?>">
						</span>

						<span>
							to <input type="text" name="date_end" id="date_end"  value="<?php echo $enddate; ?>">
						</span>

						<input type="submit" value="update" />
					</p>
				</form>
            </div>


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

	        <li class="has-sub active">
	            <a href="cat_acquisition.php" class="">
	                <span class="icon-box"> <i class="icon-link"></i></span> ACQUISITION
	                <span class="arrow"></span>
	            </a>
	             <ul class="sub">
	                <li><a class="" href="#referrals_overview">Referrals Overview</a></li>
	                <li><a class="" href="#referrals_engagement">Referrals Engagement</a></li>
	            </ul>
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
						<li><a href="index.php"><i class="icon-home"></i></a><span class="divider">&nbsp;</span></li>
						<li><a href="#">ACQUISITION</a><span class="divider-last">&nbsp;</span></li>
					</ul>
				</div>


<!-- START BEHAVIOR TITLE + QUESTION -->
				<div>
					<h1>ACQUISITION</h1>
					<h5>How are users exploring the content and what is the content that drives stopping exploration of the content?</h5>
				</div>



				<a name="referrals_overview"></a>

				<div class="largevisualization">
					<div class="widget">
						<div class="widget-title">
							<h4>Referrals Overview</h4>
							</div>

						<div class="widget-body">

							<span class="dropt">Shows an overview of incoming traffic sources to the website and the engagement of visitors from each source with the intro video.
  								<span style="width:500px;">This graph shows an overview of incoming traffic sources to the website and the engagement of visitors from each source with the intro video. The first column represents the medium of the referral and the second column, the source. Hover over a connection to find out the number of sessions for each medium/source.</span>
							</span>
							<?php

							// here we set up the query
							// cf GA query explorer for reference
							$optParams = array(
								'dimensions' => 'ga:medium,ga:source,ga:dimension1',
								//'sort' => '-ga:visits',
								//'filters' => 'ga:eventAction==videopath',
								'max-results' => '5000'
							);


							// make the call to the API
							try {
								$data = $service -> data_ga -> get('ga:81935905',$startdate, $enddate, 'ga:sessions',	 $optParams);
							} catch (Exception $e) {
						    	print_r($e);
							}



							$network = array();
							$network["nodes"] = array();
							$network["links"] = array();
							$translate = array();
							$edgecounter = 0;

							foreach($data["rows"] as $row) {

								$freq = $row[count($row) - 1];

								for($i = 0; $i < count($row) - 1; $i++) {

									if(!in_array($row[$i], $network["nodes"])) {
										$network["nodes"][] = $row[$i];
										$translate[$row[$i]] = count($network["nodes"]) - 1;
									}

									if($i < count($row) - 2) {

										if(!in_array($row[$i+1], $network["nodes"])) {
											$network["nodes"][] = $row[$i+1];
											$translate[$row[$i+1]] = count($network["nodes"]) - 1;
										}

										$edge = $row[$i] . "_XXX_" . $row[$i+1];

										if(!isset($network["links"][$edge])) {
											$network["links"][$edge] = 0;
										}
										$network["links"][$edge] += $freq;
										$edgecounter += $freq;
									}
								}
							}

							//print_r($network); print_r($translate); exit;

							$newwork = array();
							$newwork["nodes"] = array();
							$newwork["links"] = array();

							for($i = 0; $i < count($network["nodes"]); $i++) {
								$network["nodes"][$i] = preg_replace("/\(none\)/","direct", $network["nodes"][$i]);
								$network["nodes"][$i] = preg_replace("/\(direct\)/","direct", $network["nodes"][$i]);
								$network["nodes"][$i] = preg_replace("/\(not set\)/","unknown", $network["nodes"][$i]);
								$newwork["nodes"][$i] = array("name" => $network["nodes"][$i]);
							}

							foreach($network["links"] as $key => $value) {
								$elements = explode("_XXX_", $key);
								$edge = array("source" => $translate[$elements[0]],"target" => $translate[$elements[1]], "value" => $value);
								$newwork["links"][] =  $edge;
							}

							//print_r($newwork); exit;

							// write the data to a file
							// makes interfacing with D3 simpler
							file_put_contents("data/d_acqui_referrals.json",json_encode($newwork));

							?>

							<iframe width="1000" height="520" src="vizmodules/acqui_referrals.html" frameborder="0"></iframe>

							<p>total sessions = <?php echo $edgecounter ?></p>

						</div>
					</div>
				</div>

<!-- REFERRALS ENGAGEMENT -->

				<a name="referrals_engagement"></a>

				<div class="largevisualization" >
					<div class="widget">
						<div class="widget-title">
							<h4>Referrals Engagement</h4>
					</div>
						<div class="widget-body">
							<p style="width:700px"></p>

							<span class="dropt">This graph shows the level of engagement of incoming visitors from the most important referral sources for the website. 
  								<span style="width:500px;">This graph shows the level of engagement of incoming visitors from the most important referral sources for the website. The size of the bubble represents the average number of videos watched/session for visitors coming from a certain source, while the position of the bubble on the grid represents the average percentage of available video content watched in a session by visitors from the  same source.  The graph only shows the top ten sources in terms of sessions generated.</span>
							</span>

							<?php

							/*
							// here we set up the query
							// cf GA query explorer for reference
							$optParams = array(
								'dimensions' => 'ga:source,ga:eventLabel',
								//'sort' => '-ga:visits',
								'filters' => 'ga:eventAction==videopath;ga:source!=(direct)',
								'max-results' => '5000'
							);


							// make the call to the API
							try {
								$data = $service -> data_ga -> get('ga:81935905',$startdate,$enddate,'ga:sessions',$optParams);
							} catch (Exception $e) {
						    	print_r($e);
							}


							print_r($data); exit;

							$buckets = array();
							$bucketsize = 200;
							$sessioncounter = 0;
							foreach($data["rows"] as $row) {
								$sessioncounter += $row[1];
							}

							$factor = 700 / $sessioncounter;

							for($i = 600; $i < 2600; $i = $i + $bucketsize) {

								$bucket = $i . "-" . ($i + $bucketsize - 1) . " px";


								$buckets[$bucket] = array("sessions" => 0,"averagesessionduration" => 0);

								foreach($data["rows"] as $row) {
									if($row[0] >= $i && $row[0] < $i + $bucketsize) {
										$buckets[$bucket]["sessions"] += $row[1];
										$buckets[$bucket]["averagesessionduration"] += $row[2];
									}
								}
							}



							//print_r($buckets); exit;

							$content = "widthrange	sessions	averagesessionduration	scale\n";
							$scale = 0;

							foreach($buckets as $bucketname => $values) {
								$content .= $bucketname . "\t" . ($values["sessions"] * $factor) . "\t" . ($values["averagesessionduration"] / $values["sessions"]) . "\t" . ($scale * $factor) . "\n";
								$scale += $values["sessions"];
							}

							file_put_contents("data/d_tech_timeonsitewidthheight.tsv",$content);

							 */

							?>

							<iframe width="1000" height="700" src="vizmodules/acqui_referralengagement.html" frameborder="0"></iframe>

							<input type="submit" value="CSV File" onClick="window.location.href='data/d_acqui_referralengagement.csv'">


						</div>
					</div>
				</div>

<!-- END REFERRALS ENGAGEMENT -->

			</div>
		</div>
	</div>

    <div id="footer">
        2014 &copy; Transmedia Analytics.<br /><br />
        <div class="span pull-right">
            <span class="go-top"><i class="icon-arrow-up"></i></span>
        </div>
    </div>

</div>

<!-- BEGIN JAVASCRIPTS -->
<!-- Load javascripts at bottom, this will reduce page load time -->
<script src="js/jquery-1.8.3.min.js"></script>
<script src="assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
<script src="assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- <script src="assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script> -->
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

</body>
</html>