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
	<link href="css/AcquisitionLastHijackCSS.css rel="stylesheet" />
	<link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
	<link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Gudea' rel='stylesheet' type='text/css'>
	 <link rel='stylesheet' type='text/css' href='stylesheet.css'/>
	<link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css'/>
	<link href="ballsstyle.css" rel="stylesheet" />
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
            <li>
                    <a href="javascript:;" class="">
                        <span class="icon-box"> <i class="icon-user"></i></span> PERSONAL
                        <span class="arrow"></span>
                    </a>
              	  <li class="has-sub">
                    <a href="javascript:;" class="">
                        <span class="icon-box"> <i class="icon-user"></i></span> BEHAVIOR
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="Acquisition1AB.html" > Visitor Flow</a></li>
                         <li class="active"><a class="" href="Acquisition1AB.html" >Intro State</a></li>
                         <li><a class="" href="Acquisition1AB.html" > Video Popularity</a></li>
                         <li><a class="" href="Acquisition1AB.html" > Narrative Paths</a></li>
                         <li><a class="" href="Acquisition1AB.html" > First Click </a></li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <span class="icon-box"> <i class="icon-link"></i></span> ACQUISITION
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="Acquisition1AB.html" >Referral performance:  overview</a></li>
                         <li><a class="" href="Acquisition1AB.html" >Referral performance: intro state</a></li>
                         <li><a class="" href="Acquisition1AB.html" >Referral performance: engagement</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <span class="icon-box"><i class="icon-wrench"></i></span> TECHNICAL
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="Technical1AB.html">Last vido watched & loading time</a></li>
                        <li><a class="" href="Technical2AB.html">Time on site & width/height</a></li>
                        <li><a class="" href="Technical2CD.html">Browser</a></li>
                    </ul>
                </li>

                    </ul>
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
                            <li>
                                <a href="#">ACQUISTION</a> <span class="divider">&nbsp;</span>
                            </li>
							<li><a href="#">Referral performance</a><span class="divider-last">&nbsp;</span></li>

						</ul>
					</div>


<!-- ACQUISITION + QUESTION -->

					<div>
						<h1>ACQUISITION</h1>
							<h5>What is the process of user acquisition and where are the most/least users coming from?</h5>
					</div>

<!-- START REFERRAL PERFORMANCE: OVERVIEW -->

                <div class="span10" >
                    <div class="widget">
                        <div class="widget-title">
                            <h4> Referral performance: overview </h4>
                     			<a class="tooltips" href="#" style="float:right"><p type="button" class="icon-question-sign" style="margin:12px"></p>
								<span>The date span filter can be used to zoom in to a specific period of time. By hovering over a slice the absolute number of sessions is displayed.</span></a>
                   	 </div>


                    <div class="widget-body">
                    	<div>
                        	<h5>This graph shows what kind or category of referral source drives visitors to your website. Sources are categorized for easy overview, and feature the three best performing sources per category.</h5>
                       	</div>

<!-- DATEPICKER REFERRAL PERFORMANCE: OVERVIEW -->

		<div class="left">
			<p>Start date:</p> <input type="text" id="start"></p>
		</div>

		<div class="right">
			<p> End date:</p> <input type="text" id="end">
		</div>

		<div id="main">

		</div>
		</div>


<!-- START: REFERRAL PERFORMANCE: INTRO STATE-->

			 <div class="widget">
                <div class="widget-title">
                        <h4>Referral performance: intro state</h4>
                        <a class="tooltips" href="#" style="float:right"><p type="button" class="icon-question-sign" style="margin:12px"></p>
								<span>The date span filter can be used to zoom in to a specific period of time. By hovering over a slice the absolute number of sessions is displayed.</span></a>
                </div>

            	<div class="widget-body">
                	<div>

                   	<h5>This graph shows which sources drive the most engaged users according to the intro. The sources are ranked by sessions, so the most relevant information stays on top. A refferal with a high number of sessions and an low average time spent is more relevant than a referral with a very lower number of sessions but with a high average time spent on the intro. </h5>
                   	</div>
<!-- DATEPICKER REFERRAL PERFORMANCE: INTRO STATE-->

			 <div class="left">
			<p>Start date:</p> <input type="text" id="start_intro"></p>
		</div>

		<div class="right">
			<p> End date:</p> <input type="text" id="end_intro">
		</div>

		<div id="main">

		</div>
		</div>


<!-- START REFERRAL PERFORMANCE: ENGAGEMENT-->

         <div class="widget">
            <div class="widget-title">
                <h4>Referral performance: engagement</h4>

            </div>

        <div class="widget-body">
        	<div>
            	<h5> This graph shows which sources (on the y-axes) drive the most engaged users, in terms of how much of the content is watched on average in % (on the x-axis).
                The size of the circle represents the amount of sessions. Within the grid, the saturation of red indicates an attention area in terms of low engagement.
                 This means that a circle that is positioned on the right side of the graph, with a relatively large surface indicates a source with a high amount of engaged users. </h5>

<!-- DATEPICKER REFERRAL PERFORMANCE: ENGAGEMENT-->

		<div class="left">
			<p>Start date:</p> <input type="text" id="d_engagement"></p>
		</div>

		<div class="right">
			<p> End date:</p> <input type="text" id="r_engagement">
		</div>

		<div id="main">

		</div>
		<div>

<!--SCRIPT REFERRAL PERFORMANCE: ENGAGEMENT-->

    <div id="base" style="width:660px;heigth:700px">
			<script>

				var margin={top:20, right:20, bottom:30, left:44},
					width=660-margin.left-margin.right,
					height=700-margin.top-margin.bottom;

				var x=d3.scale.linear()
					.range([0,width]);

				var y = d3.scale.ordinal()
    				.domain(["Source 1", "Source 2", "Source 3", "Source 4", "Source 5", "Source 6", "Source 7", "Source 8","Source 9", "Source 10"])
   					.rangePoints([0, width]);

				/*var y=d3.scale.linear()
					.range([height,0]);*/

				var color = d3.scale.category10();

				var formatAxis = d3.format("0");

				var xAxis=d3.svg.axis()
					.scale(x)
					.orient("bottom");

				var yAxis=d3.svg.axis()
					.scale(y)
					.orient("left")
					.ticks(10);

				var svg=d3.select("#base").append("svg")
					.attr("width", width+margin.left + margin.right)
					.attr("height", height+margin.top + margin.bottom)
					.append("g")
					.attr("transform","translate("+margin.left+","+margin.top+")");


				function make_x_axis() {
    				return d3.svg.axis()
        			.scale(x)
        	   		.orient("bottom")
         			.ticks(10)

				}

				function make_y_axis() {
  				 	return d3.svg.axis()
       			 	.scale(y)
        			.orient("left")
        			.ticks(10)
				}


				d3.tsv("data/data_referralPerforman_2.3.1.tsv", function(error, data) {

				// Defines the min and max values of the scales for the axis
				x.domain([0,100]);
  				//y.domain([0,10]);


			   var chart = d3.select("body")
			    .append("svg")
				.attr("class", "chart")
				.attr("width", 490)
				.attr("height", 330)
				.append("g")
				  // move 0,0 slightly down and right to accomodate axes
				 .attr("transform", "translate(30,20)");

				svg.append("g")
					  .attr("class", "x axis")
					  .attr("transform", "translate(0," + height + ")")
					  .call(xAxis)
					.append("text")
					  .attr("class", "label")
					  .attr("x", width)
					  .attr("y", -6)
					  .style("text-anchor", "end")
					  .text("Average % of content watched");
// Code for Y axis

				  svg.append("g")
					  .attr("class", "y axis")
					  .call(yAxis)
					.append("text")
					  .attr("class", "label")
					  .attr("transform", "rotate(-90)")
					  .attr("y", 6)
					  .attr("dy", ".71em")
					  .style("text-anchor", "end")
					  .text("Sources")

// Code for grid
					  d3.select("#parent").append('svg:image')
						.attr("src", 'url(/images/background_gradient-popularity_video.jpg)')
						.attr('x', 0)
						.attr('y', 0)
						.attr('width', 596)
						.attr('height', 650);

					  svg.append("g")
						.attr("class", "grid")
						.attr("width", width)
						.attr("height", height)
						.attr("id","parent");


					 svg.append("g")
        				.attr("class", "grid")
       					 .attr("transform", "translate(0," + height + ")")
        				.call(make_x_axis()
            				.tickSize(-height, 0, 0)
            				.tickFormat("")
            			)
            			.attr("height", height);

       					svg.append("g")
       					 .attr("class", "grid")
       					 .call(make_y_axis()
           				 .tickSize(-width, 0, 0)
            			.tickFormat("")
        				)
        				.style("fill", "yellow)");

// Code for circles
				 	 svg.selectAll(".dot")
					  .data(data)
					.enter().append("circle")
					  .attr("class", "dot")
					  .attr("r", function(d) { return d.session; })//Size
					  .attr("cx", function(d) { return x(d.percentage); })//position x-axis
					  .attr("cy", function(d) { return y(d.source); });//position y-axis


// Code to create the legend in the upper right corner

					var legend = svg.selectAll(".legend")
					  .data(color.domain())
					.enter().append("g")
					  .attr("transform", function(d, i) { return "translate(0," + i * 40 + ")"; });

				  legend.append("rect")
					  .attr("x", width - 18)
					  .attr("width", 18)
					  .attr("height", 18);
					  //.style("fill", color);

				  legend.append("text")
					  .attr("x", width - 24)
					  .attr("y", 9)
					  .attr("dy", ".35em")
					  .style("text-anchor", "end")
					  .text(function(d) { return d; });



				});
			</script>
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