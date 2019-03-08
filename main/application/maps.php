<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>EPsychotherapist Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
	<style>
    









 

	#map{
			position: relative;
			width: 100%;
			padding-bottom: 56.25%; /* Ratio 16:9 ( 100%/16*9 = 56.25% ) */
	 }
	#map > *{
			display: block;
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			margin: 0;
			padding: 0;
			height: 100%;
			width: 100%;
	}

	#map{
		margin-bottom: 50px;
		background: ;
	}

	

</style>
<script type="text/javascript">

					var myLocation;
					function initMap() {
						if (navigator.geolocation) {

								navigator.geolocation.getCurrentPosition(function(position) {
									myLocation = {
										lat: position.coords.latitude,
										lng: position.coords.longitude
									};
									setPos(myLocation);
									//document.getElementById('my').innerHTML=myLocation.lat+"<br>"+myLocation.lng;
								});

								setPos(myLocation);
							}
							else
							{
								 alert("Failed");
							}
					}

					function setPos(myLocation) {
						map = new google.maps.Map(document.getElementById('map'), {
							center: myLocation,
							zoom: 100
						});

						var service = new google.maps.places.PlacesService(map);
						service.nearbySearch({
							location: myLocation,
							radius: 4000,
							types: ['hospital']
						}, processResults);

					}

					function processResults(results, status, pagination) {
						if (status !== google.maps.places.PlacesServiceStatus.OK) {
							return;
						} else {
							createMarkers(results);

						}
					}


					function createMarkers(places) {
						var hospitals="";
						var dist;
						var op;
						var opn,st="Open";
						var bounds = new google.maps.LatLngBounds();
						var placesList = document.getElementById('places');

						for (var i = 0, place; place = places[i]; i++) {
								 console.log(places[i]);
								 var lat1=myLocation.lat;
									console.log(lat1);
								 var lng1=myLocation.lng;
									console.log(lng1);
								 var lat2=places[i].geometry.location.lat();
									console.log(lat2);
								 var lng2=places[i].geometry.location.lng();
								 console.log(lng2);

								 dist=distance(lat1,lng1,lat2,lng2);
								 op=places[i].opening_hours;
								 if (typeof op !== 'undefined')
								 {
										opn=op.open_now;
										if(opn)
										{
											 st="Open";
										}
										else
										{
											 st="Close";
										}
								 }


								 console.log(opn);

								 hospitals= hospitals+"<div>"+"<div>"+places[i].name+"<br>"+"Full Address : "+places[i].vicinity+"<br>"+"Distance : "+dist+" km<br>"+"Rating : "+places[i].rating+"<br>Status : "+st+"</div></a></div><br><br>";
							var image = {
								url: place.icon,
								size: new google.maps.Size(71, 71),
								origin: new google.maps.Point(0, 0),
								anchor: new google.maps.Point(17, 34),
								scaledSize: new google.maps.Size(25, 25)
							};

							var marker = new google.maps.Marker({
								map: map,
								
								title: place.name,
								animation: google.maps.Animation.DROP,
								position: place.geometry.location
							});

							bounds.extend(place.geometry.location);
						}

						document.getElementById('h').innerHTML=hospitals;
						console.log(hospitals);

						map.fitBounds(bounds);
					}

					function distance(lon1, lat1, lon2, lat2) {
								var R = 6371; // Radius of the earth in km
								var dLat = (lat2-lat1).toRad();  // Javascript functions in radians
								var dLon = (lon2-lon1).toRad();
								var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
												Math.cos(lat1.toRad()) * Math.cos(lat2.toRad()) *
												Math.sin(dLon/2) * Math.sin(dLon/2);
								var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
								var d = (R * c).toFixed(2); // Distance in km

								return d;
					}

					if (typeof(Number.prototype.toRad) === "undefined") {
							Number.prototype.toRad = function() {
								return this * Math.PI / 180;
					}
				 }


</script>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    EPsychotherapist
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="./user.html">
                            <i class="material-icons">person</i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="./table.php">
                            <i class="material-icons">content_paste</i>
                            <p>Reports</p>
                        </a>
                    </li>
                    <li>
                        <a href="./typography.html">
                            <i class="material-icons">library_books</i>
                            <p>Your diary</p>
                        </a>
                    </li>
                    <li  class="active">
                        <a href="./maps.php">
                            <i class="material-icons">location_on</i>
                            <p>Near by hospitals</p>
                        </a>
                    </li>
                    <!--<li>
                        <a href="./maps.html">
                            <i class="material-icons">location_on</i>
                            <p>Maps</p>
                        </a>
                    </li>-->
                    <li>
                        <a href="./notifications.html">
                            <i class="material-icons text-gray">chrome_reader_mode</i>
                            <p>About us</p>
                        </a>
                    </li>
                     <!--<li class="active-pro">
                        <a href="upgrade.html">
                            <i class="material-icons">unarchive</i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>-->
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">  EPsychotherapist </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <!--<li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">dashboard</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>-->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Mike John responded to your email</a>
                                    </li>
                                    <li>
                                        <a href="#">You have 5 new tasks</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Andrew</a>
                                    </li>
                                    <li>
                                        <a href="#">Another Notification</a>
                                    </li>
                                    <li>
                                        <a href="#">Another One</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
								<ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Log Out</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- <form class="navbar-form navbar-right" role="search">
                            <div class="form-group  is-empty">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form>-->
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Search near by hospitals</h4>
                                    <p class="category">With address and distance</p>
                                </div>
                                <div class="card-content">
                                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuBzeYkYimIquGG5KkIcB6vFmtHMUzDFo&libraries=places&callback=initMap" async defer></script>

 <div id="map"></div><br>
<div id="h"></div>
   <!-- <section id="main" style="margin-top:100px;"> -->

      <!-- <div class="container"> -->
				<!-- <div class="row"> -->
 				 <!-- <div class="col-md-2"></div> -->
 				 <!-- <div class="col-md-8"> -->
					 <!-- <div id="map"></div><br> -->
				<!-- </div> -->
				 <!-- <div class="col-md-2"></div> -->
			 <!-- </div> -->
			 <!-- <div class="row"> -->
				  <!-- <div class="col-md-2"></div> -->
					<!-- <div class="col-md-8"> -->
             <!-- <div id="h"></div> -->
					<!-- </div> -->
						 <!-- <div class="col-md-2"></div> -->
        <!-- </div> -->

        <!-- </div> -->
     



       <!-- </section> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                      
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="../assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="../assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="../assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

</html>