<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  //header("location: ../error.php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
	$Uid = $_SESSION['Uid'];
   // $active = $_SESSION['active'];
}
?>
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
                    <li class="active">
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
                    <li>
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
                    </li> -->
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
                      
						<?php
						@mysql_connect("localhost" ,"root","");

@mysql_select_db("epsychotherapist");
$u1= mysql_query("SELECT * FROM `u_profile2` WHERE Uid = '$Uid'");
$u2 = mysql_fetch_array($u1);
$gender = $u2[7];
$age = $u2[9];
$add = $u2[1];
$city = $u2[2];
$pro = $u2[3];
$country = $u2[4];
$pc = $u2[5];
$occ = $u2[8];
$edu = $u2[10];
$ms = $u2[11];
$gendermale = 'MALE';

$L1= mysql_query("SELECT L FROM `mmpi_result` WHERE Uid = '$Uid'");
$L2 = mysql_fetch_array($L1);
$L = $L2[0];

$F1= mysql_query("SELECT F FROM `mmpi_result` WHERE Uid = '$Uid'");
$F2 = mysql_fetch_array($F1);
$F = $F2[0];

$K1= mysql_query("SELECT K FROM `mmpi_result` WHERE Uid = '$Uid'");
$K2 = mysql_fetch_array($K1);
$K = $K2[0];

$HS1= mysql_query("SELECT HS FROM `mmpi_result` WHERE Uid = '$Uid'");
	$HS2 = mysql_fetch_array($HS1);
	$HS = $HS2[0];

	$D1= mysql_query("SELECT D FROM `mmpi_result` WHERE Uid = '$Uid'");
	$D2 = mysql_fetch_array($D1);
	$D = $D2[0];

	$HY1= mysql_query("SELECT HY FROM `mmpi_result` WHERE Uid = '$Uid'");
	$HY2 = mysql_fetch_array($HY1);
	$HY = $HY2[0];

	$PD1= mysql_query("SELECT PD FROM `mmpi_result` WHERE Uid = '$Uid'");
	$PD2 = mysql_fetch_array($PD1);
	$PD = $PD2[0];

	$MFM1= mysql_query("SELECT MFM FROM `mmpi_result` WHERE Uid = '$Uid'");
	$MFM2 = mysql_fetch_array($MFM1);
	$MFM = $MFM2[0];
	
	$MFF1= mysql_query("SELECT MFF FROM `mmpi_result` WHERE Uid = '$Uid'");
	$MFF2 = mysql_fetch_array($MFF1);
	$MFF = $MFF2[0];

	$PA1= mysql_query("SELECT PA FROM `mmpi_result` WHERE Uid = '$Uid'");
	$PA2 = mysql_fetch_array($PA1);
	$PA = $PA2[0];

	$PT1= mysql_query("SELECT PT FROM `mmpi_result` WHERE Uid = '$Uid'");
	$PT2 = mysql_fetch_array($PT1);
	$PT = $PT2[0];

	$SC1= mysql_query("SELECT SC FROM `mmpi_result` WHERE Uid = '$Uid'");
	$SC2 = mysql_fetch_array($SC1);
	$SC = $SC2[0];

	$MA1= mysql_query("SELECT MA FROM `mmpi_result` WHERE Uid = '$Uid'");
	$MA2 = mysql_fetch_array($MA1);
	$MA = $MA2[0];

	$SI1= mysql_query("SELECT SI FROM `mmpi_result` WHERE Uid = '$Uid'");
	$SI2 = mysql_fetch_array($SI1);
	$SI = $SI2[0];
/**
*	INCLUDE CLASS
*/
include( dirname(dirname( __FILE__ )) . '/src/GoogleCharts.class.php' );
$GoogleCharts = new GoogleCharts;
$GoogleChartsb = new GoogleCharts;
$GoogleChartsc = new GoogleCharts;

/**
*	DATA
*/
$data = array(
	array('Year', 'Scale value'),
	array('L-Scale',  61),
	array('F-Scale',  114),
	array('K-Scale',  48)
);

$data2 = array(
	array('Year', 'Sales', 'Expenses'),
	array('2004',  1000,      400),
	array('2005',  1170,      460),
	array('2006',  660,       1120),
	array('2007',  1030,      540)
);

$data3 = array(
	Array('Task', 'Hours per Day'),
	Array('Hypochondria',     60),
	Array('Depression',      65),
	Array('Hysteria',  69),
	Array('Psychopathic deviation', 68),
	Array('Masculinity-Femininity',    60),
	Array('Paranoia',      78),
	Array('Psychoastenia',  74),
	Array('Schizophrenia', 86),
	Array('Hypomania',    76),
	Array('Introversion Social',    63),
);

/**
*	OPTIONS
*/
$options = Array(
	'title' => 'Psycoanalysis Test Validity',
	'hAxis' => Array(
		'title' => 'T-Score',
		'titleTextStyle' => Array('color' => 'red')
	)
);
$options1 = Array(
	'title' => 'Psycoanalysis Test Validity',
	'hAxis' => Array(
		'title' => 'T-Score',
		'titleTextStyle' => Array('color' => 'red')
	)
);
$options2 = Array(
	'title' => 'Psycoanalysis Test Result',
	'hAxis' => Array(
		'title' => 'T-Score',
		'titleTextStyle' => Array('color' => 'red')
	)
);
/**
*	CHART
*/
$chart = $GoogleCharts->load( 'column' , 'chart_div' )->get( $data , $options );
$chartb = $GoogleChartsb->load( 'area' , 'chartb_div' )->get( $data2 , $options1 );
$chartc = $GoogleChartsc->load( 'pie' , 'chartc_div' )->get( $data3 , $options2 ); 
?>
<div class="col-md-12">
                            <div class="card card-plain">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Your Test results</h4>
                                    <p class="category">Graphical view of the reports</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th><b>Scale Name</b></th>
                                            <th><b>T-Score</b></th>
                                          
                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>L-Scale</td>
                                                <td><?php echo $L?></td>
                                                
                                                
                                            </tr>
                                            <tr>
                                                <td>F-Scale</td>
                                                <td><?php echo $F?></td>
                                                
                                               
                                            </tr>
                                            <tr>
                                                <td>K-Scale</td>
                                                <td><?php echo $K?></td>
                                               
                                               
                                            </tr>
                                            <tr>
                                                <td>Hypochondria</td>
                                                <td><?php echo $HS?></td>
                                               
                                                
                                            </tr>
                                            <tr>
                                                <td>Depression</td>
                                                <td><?php echo $D?></td>
                                                
                                                
                                            </tr>
                                            <tr>
                                                <td>Hysteria</td>
                                                <td><?php echo $HY?></td>
                                              
                                                
                                            </tr>
											<tr>
                                                <td>Psychopathic deviation</td>
                                                <td><?php echo $PD?></td>
                                               
                                                
                                            </tr>
											<tr>
                                                <td>Masculinity-Femininity</td>
                                                <td><?php  if ($gender === $gendermale){echo $MFM;}else{echo $MFF;}?></td>
                                               
                                                
                                            </tr>
											<tr>
                                                <td>Paranoia</td>
                                                <td><?php echo $PA?></td>
                                             
                                                
                                            </tr>
											<tr>
                                                <td>Psychoastenia</td>
                                                <td><?php echo $PT?></td>
                                              
                                                
                                            </tr>
											<tr>
                                                <td>Schizophrenia</td>
                                                <td><?php echo $SC?></td>
                                               
                                               
                                            </tr>
											<tr>
                                                <td>Hypomania</td>
                                                <td><?php echo $MA?></td>
                                               
                                               
                                            </tr>
											<tr>
                                                <td>Introversion Social</td>
                                                <td><?php echo $SI?></td>
                                               
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

 <div class="col-md-12">
                            <div class="card">
                                <div id="chart_div" style="width: auto; height: 500px;"></div>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript">
			<?php echo $chart;?>
		</script>
                            </div>
                        </div>
						
						<div class="col-md-12">
                            <div class="card">
                                <div id="chartc_div" style="width: auto; height: 500px;"></div>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript">
			<?php echo $chartc;?>
		</script>
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

<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>
</html>