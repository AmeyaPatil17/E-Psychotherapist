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
	$lq = $_SESSION['lq'];
	//echo"$lq";
   // $active = $_SESSION['active'];
}
?>
<?php
// user logging in     
// $mysqli = mysqli_connect("localhost","root","","epsychotherapist");

//Check connection
// if (mysqli_connect_errno())
  // {
  // echo "Failed to connect to MySQL: " . mysqli_connect_error();
  // }
// $Q1 = $mysqli->escape_string($_POST['answer[$q]']);
// $Q2 = $mysqli->escape_string($_POST['answer[$q]']);
// $Q3 = $mysqli->escape_string($_POST['answer[$q]']);
// $Q4 = $mysqli->escape_string($_POST['answer[$q]']);
// $Q5 = $mysqli->escape_string($_POST['answer[$q]']);
 // $sql = "INSERT INTO u_profile (Q1, Q2, Q3, Q4, Q5)" 
            // . "VALUES ('$Q1','$Q2','$Q3','$Q4', '$Q5')";
			// $result=mysql_query($sql);
		// if($result){
// echo "Successful";
// echo "<BR>";
//echo "<a href='insert.php'>Back to main page</a>";
// }

// else {
// echo "ERROR";
// }



// $data = array();

// foreach($teams as $team)
// $data[] = "(" . addslashes($team) . ")";

// $data = implode("," , $data);

// $sql = "INSERT INTO schedule (home) VALUES $data";

// here we go

// mysql_query($sql);


// $Q1 = isset($_POST['answer'][0]) ? $_POST['answer'][0] : null;
					// $Q2 = isset($_POST['answer'][1]) ? $_POST['answer'][1] : null;
					// $Q3 = isset($_POST['answer'][2]) ? $_POST['answer'][2] : null;
					// $Q4 = isset($_POST['answer'][3]) ? $_POST['answer'][3] : null;
					// $Q5 = isset($_POST['answer'][4]) ? $_POST['answer'][4] : null;
							//$sql = "INSERT INTO u_profile (Q1, Q2, Q3, Q4, Q5)" 
											//. "VALUES ('$Q1','$Q2','$Q3','$Q4', '$Q5')";
							//mysql_query($sql) ;
							//10101
 ?>

<?php
@mysql_connect("localhost" ,"root","");

@mysql_select_db("epsychotherapist");
$countea = 1;
$tempa = $lq-20;
$z1= '';
$z2='';
$dollar='$';
$y= '1';
$Q1='';
$Q2='';
$Q3='';
$Q4='';
$Q5='';
$Q6='';
$Q7='';
$Q8='';
$Q9='';
$Q10='';
$Q11='';
$Q12='';
$Q13='';
$Q14='';
$Q15='';
$Q16='';
$Q17='';
$Q18='';
$Q19='';
$Q20='';
$Q21='';
$answer=array();

for( $a = $tempa; $a<=$lq; $a++ ) {
	if($countea==1){
		$Q1=isset($_POST['answer'][$a]) ? $_POST['answer'][$a] : null;
	}else if($countea==2){
		$Q2=isset($_POST['answer'][$a]) ? $_POST['answer'][$a] : null;
	}else if($countea==3){
		$Q3=isset($_POST['answer'][$a]) ? $_POST['answer'][$a] : null;
	}else if($countea==4){
		$Q4=isset($_POST['answer'][$a]) ? $_POST['answer'][$a] : null;
	}else if($countea==5){
		$Q5=isset($_POST['answer'][$a]) ? $_POST['answer'][$a] : null;
	}else if($countea==6){
		$Q6=isset($_POST['answer'][$a]) ? $_POST['answer'][$a] : null;
	}else if($countea==7){
		$Q7=isset($_POST['answer'][$a]) ? $_POST['answer'][$a] : null;
	}else if($countea==8){
		$Q8=isset($_POST['answer'][$a]) ? $_POST['answer'][$a] : null;
	}else if($countea==9){
		$Q9=isset($_POST['answer'][$a]) ? $_POST['answer'][$a] : null;
	}else if($countea==10){
		$Q10=isset($_POST['answer'][$a]) ? $_POST['answer'][$a] : null;
	}else if($countea==11){
		$Q11=isset($_POST['answer'][$a]) ? $_POST['answer'][$a] : null;
	}else if($countea==12){
		$Q12=isset($_POST['answer'][$a]) ? $_POST['answer'][$a] : null;
	}else if($countea==13){
		$Q13=isset($_POST['answer'][$a]) ? $_POST['answer'][$a] : null;
	}else if($countea==14){
		$Q14=isset($_POST['answer'][$a]) ? $_POST['answer'][$a] : null;
	}else if($countea==15){
		$Q15=isset($_POST['answer'][$a]) ? $_POST['answer'][$a] : null;
	}else if($countea==16){
		$Q16=isset($_POST['answer'][$a]) ? $_POST['answer'][$a] : null;
	}else if($countea==17){
		$Q17=isset($_POST['answer'][$a]) ? $_POST['answer'][$a] : null;
	}else if($countea==18){
		$Q18=isset($_POST['answer'][$a]) ? $_POST['answer'][$a] : null;
	}else if($countea==19){
		$Q19=isset($_POST['answer'][$a]) ? $_POST['answer'][$a] : null;
	}else if($countea==20){
		$Q20=isset($_POST['answer'][$a]) ? $_POST['answer'][$a] : null;
	}else{
		$Q21=isset($_POST['answer'][$a]) ? $_POST['answer'][$a] : null;
	}
$countea++;

//$Q1 = isset($_POST['answer'][1]) ? $_POST['answer'][1] : null;
//$Q5 = isset($_POST['answer'][5]) ? $_POST['answer'][5] : null;
//$Q5 = isset($_POST['answer'][10]) ? $_POST['answer'][10] : null; 
//$Q5 = isset($_POST['answer'][5]) ? $_POST['answer'][5] : null
}

 //$required = array('$Q1', '$Q2', '$Q3', '$Q4', 'Q5');

//Loop over field names, make sure each one exists and is not empty
//$error = false;
 if(!isset($Q1) || !isset($Q2) || !isset($Q3) || !isset($Q4) || !isset($Q5) || !isset($Q6) || !isset($Q7) || !isset($Q8) || !isset($Q9) || !isset($Q10) || !isset($Q11) || !isset($Q12) || !isset($Q13) || !isset($Q14) || !isset($Q15) || !isset($Q16) || !isset($Q17) || !isset($Q18) || !isset($Q19) || !isset($Q20) || !isset($Q21)) 
{
  echo "All fields are required.";
  header("location: Report_Building.php");
}
 // foreach($answer as $field) {
   // if (empty($_POST[$field])) {
     // $error = true;
   // }
 // }
 else {
   //echo "Proceed...";
 


//echo $l;
// $Q2 = isset($_POST['answer'][2]) ? $_POST['answer'][2] : null;
// $Q3 = isset($_POST['answer'][3]) ? $_POST['answer'][3] : null;
// $Q4 = isset($_POST['answer'][4]) ? $_POST['answer'][4] : null;
// $Q5 = isset($_POST['answer'][5]) ? $_POST['answer'][5] : null;

// $Q6 = isset($_POST['answer'][6]) ? $_POST['answer'][6] : null;
// $Q7 = isset($_POST['answer'][7]) ? $_POST['answer'][7] : null;
// $Q8 = isset($_POST['answer'][8]) ? $_POST['answer'][8] : null;
// $Q9 = isset($_POST['answer'][9]) ? $_POST['answer'][9] : null;
// $Q10 = isset($_POST['answer'][10]) ? $_POST['answer'][10] : null;
// $Q11 = isset($_POST['answer'][11]) ? $_POST['answer'][11] : null;
// $Q12 = isset($_POST['answer'][12]) ? $_POST['answer'][12] : null;
// $Q13 = isset($_POST['answer'][13]) ? $_POST['answer'][13] : null;
// $Q14 = isset($_POST['answer'][14]) ? $_POST['answer'][14] : null;
// $Q15 = isset($_POST['answer'][15]) ? $_POST['answer'][15] : null;
// $Q16 = isset($_POST['answer'][16]) ? $_POST['answer'][16] : null;
// $Q17 = isset($_POST['answer'][17]) ? $_POST['answer'][17] : null;
// $Q18 = isset($_POST['answer'][18]) ? $_POST['answer'][18] : null;
// $Q19 = isset($_POST['answer'][19]) ? $_POST['answer'][19] : null;
// $Q20 = isset($_POST['answer'][20]) ? $_POST['answer'][20] : null;
// $Q21 = isset($_POST['answer'][21]) ? $_POST['answer'][21] : null;

//foreach($answers as $x)
?>
               <?php 
			 // echo $Q1, $Q2, $Q3, $Q4, $Q5, $Uid; 
			 //echo $Q5;
			   $temp = $lq-20;
			   $s1='UPDATE u_profile SET ';
			   $s2='';
			   $s3="WHERE Uid = '$Uid'";
			   $s4=';';
			   $counter=1;
			   $dollar='Q';
			   
			   
			   for( $i = $temp; $i<=$lq; $i++ ) {
				   $aa=${$dollar.$counter};
					if($counter==21){
						//$s2.="Q".$i."="$Q".$counter."' ";
						$s2.="Q".$i."='$aa' ";
					}else{
						
						//echo $Q1;
					$s2.="Q".$i."='$aa', ";
					//$s2.="Q".$i."='".$dollar."Q".$counter."', ";
					}
					$counter++;
		 }
			   
			   $sql=$s1.$s2.$s3.$s4;
				//echo $sql;
				//echo $lq;
			//	$sql = "UPDATE u_profile SET Q1='$Q1', Q2='$Q2', Q3='$Q3', Q4='$Q4', Q5='$Q5' WHERE Uid = '$Uid'" ;
											//. "VALUES ('$Q1','$Q2','$Q3','$Q4','$Q5')";
							mysql_query($sql) ;
							$querya = mysql_query("SELECT elq FROM `u_profile` WHERE Uid = '$Uid'");
$rowa = mysql_fetch_array($querya);
$elq = $rowa['elq'];
							mysql_query("DELETE FROM `TBL_question_set` WHERE userid = '$Uid'");
							//DELETE FROM Customers WHERE CustomerName='Alfreds Futterkiste';
							//mysql_query('DROP TABLE IF EXISTS `epsychotherapist`.`TBL_question_set`');
							if($lq == 567){
								header("location: resultcal.php");
							}
							else{
								if($elq == 10){
									header("location: Report_Building.php");
								}
								else{
								header("location: exercise.php");
								}
							}
							
			?>
            <?php 
 }?>
			
			
			
			