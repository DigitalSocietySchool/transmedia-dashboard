<?php

// authenticate
// user will be redirected if not logged in with right credentials
include "includes/auth.php"; //COMMENT TO SKIP AUTHENTICATION

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

						<input type="submit" value="update"/>
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

	      	<li class="has-sub active">
	            <a href="cat_content.php" class="">
	                <span class="icon-box"> <i class="icon-user"></i></span> CONTENT
	                <span class="arrow"></span>
	            </a>
	            <ul class="sub">
	                <li><a class="" href="#intro_interaction">Intro Interaction</a></li>
	                <li><a class="" href="#intro_interaction">Deciding Time Intro</a></li>
	                <li><a class="" href="#video_popularity">Video Popularity</a></li>
	                <li><a class="" href="#infographics">Infographics</a></li>
	                <li><a class="" href="#last_video">Last Video Watched</a></li>
					<li><a class="" href="#visitor_flow">Visitor Flow</a></li>


	            </ul>
	        </li>

	        <li class="sub">
	            <a href="cat_interface.php" class="">
	                <span class="icon-box"> <i class="icon-link"></i></span> INTERFACE
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
						<li><a href="index.php"><i class="icon-home"></i></a><span class="divider">&nbsp;</span></li>
						<li><a href="#">CONTENT</a><span class="divider-last">&nbsp;</span></li>
					</ul>
				</div>


<!-- START BEHAVIOR TITLE + QUESTION -->
				<div>
					<h1>CONTENT NAVIGATION</h1>
					<h5>How are users exploring the content and what is the content that drives stopping exploration of the content?</h5>
				</div>

<!-- START INTRO STATE:OVERVIEW -->
				<a name="intro_interaction"></a>

	            <div class="smallvisualization-1" >

            		<div class="widget" style="height:600px;"  >
	                    <div class="widget-title">
	                        <h4> Intro state: overview (<?php echo $startdate . " - " . $enddate; ?>)</h4>
	               	 	</div>
						<div class="widget-body">
							<span class="dropt" title="Title for the pop-up">Explanation of this visualization
  								<span style="width:500px;">Shows how visitors react to the intro video- watch it completely, skip it or navigate away from the website. The numbers are expressed in percentage of sessions . Hover over a segment for the value expressed in number of sessions.</span>
							</span>

							<div id="pieIntro"></div>

	<!-- SCRIPT PIECHART INTRO STATE-->

							<?php

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
								$data = $service -> data_ga -> get('ga:81935905',$startdate, $enddate, 'ga:sessions',	 $optParams);
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

							//print_r($content);

							// write the data to a file
							// makes interfacing with D3 simpler
							file_put_contents("data/d_behav_intro.csv", $content);

							?>


							<script>

							var width = 500,
								height = 400,
								radius = Math.min(width, height) / 2;


							var div = d3.select("body").append("div")
								.attr("class", "tooltip")
								.style("opacity", 0);

							var color = d3.scale.ordinal()
								.range(["#EEE8D6", " #E9B690", "#57B7B9", "#9BA3B1"]);


							var arc = d3.svg.arc()
								.outerRadius(radius - 19)
								.innerRadius(0);

							var arcBorder = d3.svg.arc()
								.innerRadius(radius - 15 )
								.outerRadius(radius - 10);

							var pie = d3.layout.pie()
								.sort(null)
								.value(function(d) { return d.session; });

							var svg = d3.select("#pieIntro").append("svg")
								.attr("width", width)
								.attr("height", height)
								.append("g")
								.attr("class","circle")
								.attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");


							d3.csv("data/d_behav_intro.csv", function(error, data) {

								data.forEach(function(d) {
									d.session = +d.session;
								});

								var g = svg.selectAll(".arc")
									.data(pie(data))
									.enter().append("g")
									.attr("class", "arc");

								g.append("path")
									.attr("d", arc)
									.style("fill", function(d) { return color(d.data.label); });

								g.append("path")
									.attr("fill", "#5D686E")
									.attr("d", arcBorder)
									.style("stroke-width", "1pt");

								g.append("text")
									.attr("transform", function(d) { return "translate(" + arc.centroid(d) + ")"; })
									.attr("dy", ".35em")
									.style("text-anchor", "middle")
									.text(function(d) { return d.data.percentage + "% " + d.data.label; });			// added label here to simplify

								g.on("mouseover", function(d) {
									div.transition()
										.duration(100)
										.style("opacity",.9);
									div.html(d.data.session + " sessions")
										.style("left", (d3.event.pageX) + "px")
										.style("top", (d3.event.pageY - 28) + "px")
										.style("position","absolute")						// added this to fix hover label
										.style("padding-left","10px")
										.style("padding-right","10px")
										.style("font-size","11pt")
										.style("background-color","#5D686E")
										.style("color","#FFF");
									})
									.on("mouseout", function(d) {
									div.transition()
										.duration(100)
										.style("opacity", 0);
									});
							});


							// Commented the following out to simplify
							// LABEL

							//var outerRadius = 100;

							/*
							g.append("text")
								.attr("transform", function(d) {  var pos = arc.centroid(d);

									var posY = pos[1] * 1.3;
									if(pos[1] < 0){
										posY = pos[1] * 0.7;
									}

									return "translate(" + pos[0] +"," + posY + ")";})
										.attr("dy", ".35em")
										.style("text-anchor", "middle")
										.text(function(d) {  return d.data.label; });
							*/

							</script>

							<p style="text-align:center;"> total sessions = <!--?php echo $data["totalsForAllResults"]["ga:sessions"]; ?--> </p>

					 	</div>
					</div>

            	</div>

<!-- END INTROSTATE -->

<!-- DECIDING TIME -->
				
				<a name="deciding_time"></a>

				<div class="largevisualization" >
					<div class="widget" style="height:500px;">
						<div class="widget-title">
							<h4>Deciding Time</h4>

						</div>
					
						<div class="widget-body">
							<span class="dropt">Explanation of this visualization
  								<span style="width:500px;">Provides insight into the “SKIPPED” and “WENT AWAY” segments. The graph shows what is the moment in the intro when visitors decide to skip or leave the website. The bubbles represent 5 seconds increments of the intro video. The size of the bubble represents the number of visitors that dropped of/ skipped at a certain moment in the intro. For number of sessions hover over a bubble.</span>
							</span>

						</div>
					</div>
				</div>

<!-- END DECIDING TIME -->

<!-- DECIDING TIME -->
				
				<a name="video_popularity"></a>

				<div class="largevisualization" >
					<div class="widget" style="height:370px;">
						<div class="widget-title">
							<h4>Popularity of a video</h4>
						</div>
					

					<div class="widget-body">
							<span class="dropt">Explanation of this visualization
  								<span style="width:500px;">Shows the top content based on level of enagagement. The size of the bubble represents how many times a video was watched. The position of the bubble on the grid indicates the average percentage of the full video length that is watched before users navigate to another video.</span>
							</span>
						</div>
					</div>
				</div>

<!-- END DECIDING TIME -->

<!-- INFOGRAPHICS -->


				<a name="infographics"></a>

				<div class="smallvisualization-1" >

					<div class="widget" style="height:487px">
						<div class="widget-title">
							<h4>Infographics </h4>
						</div>

						<div class="widget-body">
						
						<span class="dropt">Explanation of this visualization
  								<span style="width:500px;">Shows how many times the infographic elements not included in the autopilot narrative were viewed by users. </span>
							</span>



							<?php

							// here we set up the query
							// cf GA query explorer for reference
							$optParams = array(
								'dimensions' => 'ga:eventLabel',
								//'sort' => '-ga:visits',
								'filters' => 'ga:eventAction==info',
								'max-results' => '5000'
							);

									// make the call to the API
							try {
								$data = $service -> data_ga -> get('ga:81935905',$startdate, $enddate, 'ga:totalEvents',$optParams);
							} catch (Exception $e) {
						    	print_r($e);
							}

							//print_r($data); exit;

							// CSV file format first line
							$content = "infographic,frequency\n";

							// parse data and write to file
							$add = 0;
						    foreach($data["rows"] as $row) {
						    	$names = array("hijacks","history","illegalfishing","moneyflows");
						    	if(in_array($row[0], $names)) {
						    		$content .= $row[0] . "," . $row[1] . "\n";
									$add += $row[1];
						    	}
							}

							//print_r($content);

							// write the data to a file
							// makes interfacing with D3 simpler
							file_put_contents("data/d_behav_infographics.csv", $content);

							?>

							<iframe width="1000" height="340" src="vizmodules/behav_infographics.html" frameborder="0"></iframe>

							<p>sum = <!--?php echo $add; ?--></p>
						</div>
					</div>
				</div>


<!-- END INFOGRAPHICS -->

<!-- LAST VIDEO WATCHED -->

				<a name="last_video"></a>

				<div class="smallvisualization-1">
						<div class="widget" style="height:487px">
							<div class="widget-title">
								<h4>Last video watched</h4>							
							</div>

							<div class="widget-body">
							<span class="dropt">Explanation of this visualization
  								<span style="width:500px;">Shows how many times visitors used the Help -function. “Automatic” indicates the number of times the function was triggered automatically, as a splash page at the beginning of the session (at the moment this happens for all sessions). “Manual” indicates the number of people that chose to view the help page an additional time during the session, from the side menu.</span>
							</span>

								<?php

								// here we set up the query
								// cf GA query explorer for reference
								$optParams = array(
									'dimensions' => 'ga:dimension4',
									//'sort' => '-ga:visits',
									//'filters' => '',
									'max-results' => '5000'
								);


								// make the call to the API
								try {
									$data = $service -> data_ga -> get('ga:81935905',$startdate, $enddate, 'ga:sessions',	 $optParams);
								} catch (Exception $e) {
							    	print_r($e);
								}

								//print_r($data); exit;

								// CSV file format first line
								$content = "label,sessions\n";

								$newdata = array();
								foreach($data["rows"] as $row) {
									$row[0] = substr($row[0], 0, strpos($row[0], "."));
									if(!isset($newdata[$row[0]])) {
										$newdata[$row[0]] = 0;
									}
									$newdata[$row[0]] += $row[1];
								}

								arsort($newdata);

								foreach($newdata as $key => $value) {
						    			$content .= $key . "," . $value . "\n";
								}

								//print_r($content);

								// write the data to a file
								// makes interfacing with D3 simpler
								file_put_contents("data/d_behav_lastvideo.csv", $content);

								?>

								<iframe width="500" height="310" src="vizmodules/behav_lastvideo.html" frameborder="0"></iframe>
							</div>
					</div>
				</div>

<!-- END LAST VIDEO WATCHED -->

<!-- VISITOR FLOW -->

				<a name="visitor_flow"></a>

				<div class="largevisualization">
					<div class="widget">
						<div class="widget-title">
							<h4>Visitor Flow</h4>
						</div>
						<div class="widget-body">

						<span class="dropt">Explanation of this visualization
  								<span style="width:500px;">This visualization shows how users navigate through the video content. Each column is a new step in the interaction. The two perspectives of the narrative are indicated by color of the blocks. The height of the connection represents the number of sessions. To get the number of sessions, hover over a connection.</span>
						</span>

							<?php

							// here we set up the query
							// cf GA query explorer for reference
							$optParams = array(
								'dimensions' => 'ga:eventLabel',
								//'sort' => '-ga:visits',
								'filters' => 'ga:eventAction==videopath',
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

								$items = explode(":", $row[0]);

								// maximum depth
								$stop = (count($items) > 10) ? 10:count($items);

								$target = "";

								for($i = 0; $i < $stop; $i += 2) {

									$source = $items[$i];
									if($items[$i] != "intro") {
										$source = substr($items[$i], 0, strpos($items[$i], "."));
									}

									$source = $i . "_" . $source;

									if(isset($items[$i+2])) {

										$target = $items[$i+2];
										if($items[$i+2] != "intro") {
											$target = substr($items[$i+2], 0, strpos($items[$i+2], "."));
										}

										$target = $i + 2 . "_" . $target;


										//echo $items[$i] . " ";
										if(!in_array($source,$network["nodes"])) {
											$network["nodes"][] = $source;
											$translate[$source] = count($network["nodes"]) - 1;
										}

										if(!in_array($target,$network["nodes"])) {
											$network["nodes"][] = $target;
											$translate[$target] = count($network["nodes"]) - 1;

										}

										$edge = $source . "_XXX_" . $target;

										if(!isset($network["links"][$edge])) {
											$network["links"][$edge] = 0;
										}
										$network["links"][$edge] += $row[1];
										$edgecounter += $row[1];
										//echo $edge . " ";
									}
								}
							}

							//print_r($network);

							$newwork = array();
							$newwork["nodes"] = array();
							$newwork["links"] = array();

							for($i = 0; $i < count($network["nodes"]); $i++) {
								$network["nodes"][$i] = preg_replace("/\d+_/","", $network["nodes"][$i]);
								$newwork["nodes"][$i] = array("name" => $network["nodes"][$i]);
							}

							foreach($network["links"] as $key => $value) {
								$elements = explode("_XXX_", $key);
								$edge = array("source" => $translate[$elements[0]],"target" => $translate[$elements[1]], "value" => $value);
								$newwork["links"][] =  $edge;
							}

							//print_r(json_encode($newwork)); print_r($translate); exit;



							// write the data to a file
							// makes interfacing with D3 simpler
							file_put_contents("data/d_behav_visitorflow.json",json_encode($newwork));

							?>

							<iframe width="1000" height="520" src="vizmodules/behav_visitorflow.html" frameborder="0"></iframe>

							<p>total transitions = <?php echo $edgecounter ?></p>
						</div>
					</div>


				</div>



<!-- END VISITOR FLOW -->









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