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
	//$lq = $_SESSION['lq'];
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
// $result = mysql_query("SELECT Q16, Q29, Q41, Q51, Q77, Q93, Q102, Q123, Q107, Q139, Q153, Q183, Q203, Q232, Q260 FROM u_profile WHERE Uid = '$Uid' AND (Q16 = 0 OR Q29 = 0 OR Q41 = 0 OR Q51 = 0 OR Q77 = 0 OR Q93 = 0 OR Q102 = 0 OR Q123 = 0 OR Q107 = 0 OR Q139 = 0 OR Q153 = 0 OR Q183 = 0 OR Q203 = 0 OR Q232 = 0 OR Q260 = 0)");
//echo mysql_num_fields($result);

$resultlf = mysql_query("SELECT IF(Q16=0,1,0) + IF(Q29=0,1,0) + IF(Q41=0,1,0) + IF(Q51=0,1,0) + IF(Q77=0,1,0) + IF(Q93=0,1,0) + IF(Q102=0,1,0) + IF(Q107=0,1,0) + IF(Q123=0,1,0) + IF(Q139=0,1,0) + IF(Q153=0,1,0) + IF(Q183=0,1,0) + IF(Q203=0,1,0) + IF(Q232=0,1,0) + IF(Q260=0,1,0) as total FROM u_profile WHERE Uid = '$Uid';");
$resultft = mysql_query("SELECT IF(Q18=1,1,0) + IF(Q24=1,1,0) + IF(Q30=1,1,0) + IF(Q36=1,1,0) + IF(Q42=1,1,0) + IF(Q48=1,1,0) + IF(Q54=1,1,0) + IF(Q60=1,1,0) + IF(Q66=1,1,0) + IF(Q72=1,1,0) + IF(Q84=1,1,0) + IF(Q96=1,1,0) + IF(Q114=1,1,0) + IF(Q138=1,1,0) + IF(Q144=1,1,0) + IF(Q150=1,1,0) + IF(Q156=1,1,0) + IF(Q162=1,1,0) + IF(Q168=1,1,0) + IF(Q180=1,1,0) + IF(Q198=1,1,0) + IF(Q216=1,1,0) + IF(Q228=1,1,0) + IF(Q234=1,1,0) + IF(Q240=1,1,0) + IF(Q246=1,1,0) + IF(Q252=1,1,0) + IF(Q258=1,1,0) + IF(Q264=1,1,0) + IF(Q270=1,1,0) + IF(Q282=1,1,0) + IF(Q288=1,1,0) + IF(Q294=1,1,0) + IF(Q300=1,1,0) + IF(Q306=1,1,0) + IF(Q312=1,1,0) + IF(Q324=1,1,0) + IF(Q336=1,1,0) + IF(Q349=1,1,0) + IF(Q355=1,1,0) + IF(Q361=1,1,0) as total FROM u_profile WHERE Uid = '$Uid';");
$resultff = mysql_query("SELECT IF(Q6=0,1,0) + IF(Q12=0,1,0) + IF(Q78=0,1,0) + IF(Q90=0,1,0) + IF(Q102=0,1,0) + IF(Q108=0,1,0) + IF(Q120=0,1,0) + IF(Q126=0,1,0) + IF(Q132=0,1,0) + IF(Q174=0,1,0) + IF(Q186=0,1,0) + IF(Q192=0,1,0) + IF(Q204=0,1,0) + IF(Q210=0,1,0) + IF(Q222=0,1,0) + IF(Q276=0,1,0) + IF(Q318=0,1,0) + IF(Q330=0,1,0) + IF(Q343=0,1,0) as total FROM u_profile WHERE Uid = '$Uid';");
$resultkt = mysql_query("SELECT IF(Q83=1,1,0) as total FROM u_profile WHERE Uid = '$Uid';");
$resultkf = mysql_query("SELECT IF(Q29=0,1,0) + IF(Q37=0,1,0) + IF(Q58=0,1,0) + IF(Q76=0,1,0) + IF(Q110=0,1,0) + IF(Q116=0,1,0) + IF(Q122=0,1,0) + IF(Q127=0,1,0) + IF(Q130=0,1,0) + IF(Q136=0,1,0) + IF(Q148=0,1,0) + IF(Q157=0,1,0) + IF(Q158=0,1,0) + IF(Q167=0,1,0) + IF(Q171=0,1,0) + IF(Q196=0,1,0) + IF(Q213=0,1,0) + IF(Q243=0,1,0) + IF(Q267=0,1,0) + IF(Q284=0,1,0) + IF(Q290=0,1,0) + IF(Q330=0,1,0) + IF(Q338=0,1,0) + IF(Q339=0,1,0) + IF(Q341=0,1,0) + IF(Q346=0,1,0) + IF(Q348=0,1,0) + IF(Q356=0,1,0) + IF(Q365=0,1,0) as total FROM u_profile WHERE Uid = '$Uid';");
//$resultlf = mysql_query("SELECT IF(Q16=0,1,0) + IF(Q29=0,1,0) + IF(Q41=0,1,0) + IF(Q51=0,1,0) + IF(Q77=0,1,0) + IF(Q93=0,1,0) + IF(Q102=0,1,0) + IF(Q107=0,1,0) + IF(Q123=0,1,0) + IF(Q139=0,1,0) + IF(Q153=0,1,0) + IF(Q183=0,1,0) + IF(Q203=0,1,0) + IF(Q232=0,1,0) + IF(Q260=0,1,0) as total FROM u_profile WHERE Uid = '$Uid';");
$resulthst = mysql_query("SELECT IF(Q18=1,1,0) + IF(Q28=1,1,0) + IF(Q39=1,1,0) + IF(Q53=1,1,0) + IF(Q59=1,1,0) + IF(Q97=1,1,0) + IF(Q101=1,1,0) + IF(Q111=1,1,0) + IF(Q149=1,1,0) + IF(Q175=1,1,0) + IF(Q247=1,1,0) as total FROM u_profile WHERE Uid = '$Uid';");
$resulthsf = mysql_query("SELECT IF(Q2=0,1,0) + IF(Q3=0,1,0) + IF(Q8=0,1,0) + IF(Q10=0,1,0) + IF(Q20=0,1,0) + IF(Q45=0,1,0) + IF(Q47=0,1,0) + IF(Q57=0,1,0) + IF(Q91=0,1,0) + IF(Q117=0,1,0) + IF(Q141=0,1,0) + IF(Q143=0,1,0) + IF(Q152=0,1,0) + IF(Q164=0,1,0) + IF(Q173=0,1,0) + IF(Q176=0,1,0) + IF(Q179=0,1,0) + IF(Q208=0,1,0) + IF(Q224=0,1,0) + IF(Q249=0,1,0) + IF(Q255=0,1,0) as total FROM u_profile WHERE Uid = '$Uid';");
$resultdt = mysql_query("SELECT IF(Q5=1,1,0) + IF(Q15=1,1,0) + IF(Q18=1,1,0) + IF(Q37=1,1,0) + IF(Q38=1,1,0) + IF(Q39=1,1,0) + IF(Q46=1,1,0) + IF(Q56=1,1,0) + IF(Q73=1,1,0) + IF(Q92=1,1,0) + IF(Q117=1,1,0) + IF(Q127=1,1,0) + IF(Q130=1,1,0) + IF(Q146=1,1,0) + IF(Q147=1,1,0) + IF(Q170=1,1,0) + IF(Q175=1,1,0) + IF(Q181=1,1,0) + IF(Q215=1,1,0) + IF(Q233=1,1,0) as total FROM u_profile WHERE Uid = '$Uid';");
$resultdf = mysql_query("SELECT IF(Q2=0,1,0) + IF(Q9=0,1,0) + IF(Q10=0,1,0) + IF(Q20=0,1,0) + IF(Q29=0,1,0) + IF(Q33=0,1,0) + IF(Q37=0,1,0) + IF(Q43=0,1,0) + IF(Q45=0,1,0) + IF(Q49=0,1,0) + IF(Q55=0,1,0) + IF(Q68=0,1,0) + IF(Q75=0,1,0) + IF(Q76=0,1,0) + IF(Q95=0,1,0) + IF(Q109=0,1,0) + IF(Q118=0,1,0) + IF(Q134=0,1,0) + IF(Q140=0,1,0) + IF(Q141=0,1,0) + IF(Q142=0,1,0) + IF(Q143=0,1,0) + IF(Q148=0,1,0) + IF(Q165=0,1,0) + IF(Q178=0,1,0) + IF(Q188=0,1,0) + IF(Q189=0,1,0) + IF(Q212=0,1,0) + IF(Q221=0,1,0) + IF(Q223=0,1,0) + IF(Q226=0,1,0) + IF(Q238=0,1,0) + IF(Q245=0,1,0) + IF(Q248=0,1,0) + IF(Q260=0,1,0) + IF(Q267=0,1,0) as total FROM u_profile WHERE Uid = '$Uid';");
$resulthyt = mysql_query("SELECT IF(Q11=1,1,0) + IF(Q18=1,1,0) + IF(Q31=1,1,0) + IF(Q39=1,1,0) + IF(Q40=1,1,0) + IF(Q44=1,1,0) + IF(Q65=1,1,0) + IF(Q101=1,1,0) + IF(Q166=1,1,0) + IF(Q172=1,1,0) + IF(Q175=1,1,0) + IF(Q218=1,1,0) + IF(Q230=1,1,0) as total FROM u_profile WHERE Uid = '$Uid';");
$resulthyf = mysql_query("SELECT IF(Q2=0,1,0) + IF(Q3=0,1,0) + IF(Q7=0,1,0) + IF(Q8=0,1,0) + IF(Q9=0,1,0) + IF(Q10=0,1,0) + IF(Q14=0,1,0) + IF(Q26=0,1,0) + IF(Q29=0,1,0) + IF(Q45=0,1,0) + IF(Q47=0,1,0) + IF(Q58=0,1,0) + IF(Q76=0,1,0) + IF(Q81=0,1,0) + IF(Q91=0,1,0) + IF(Q95=0,1,0) + IF(Q98=0,1,0) + IF(Q110=0,1,0) + IF(Q115=0,1,0) + IF(Q116=0,1,0) + IF(Q124=0,1,0) + IF(Q125=0,1,0) + IF(Q129=0,1,0) + IF(Q135=0,1,0) + IF(Q141=0,1,0) + IF(Q148=0,1,0) + IF(Q151=0,1,0) + IF(Q152=0,1,0) + IF(Q157=0,1,0) + IF(Q159=0,1,0) + IF(Q161=0,1,0) + IF(Q164=0,1,0) + IF(Q167=0,1,0) + IF(Q173=0,1,0) + IF(Q176=0,1,0) + IF(Q179=0,1,0) + IF(Q185=0,1,0) + IF(Q193=0,1,0) + IF(Q208=0,1,0) + IF(Q213=0,1,0) + IF(Q224=0,1,0) + IF(Q241=0,1,0) + IF(Q243=0,1,0) + IF(Q249=0,1,0) + IF(Q253=0,1,0) + IF(Q263=0,1,0) + IF(Q265=0,1,0) as total FROM u_profile WHERE Uid = '$Uid';");
$resultpdt = mysql_query("SELECT IF(Q17=1,1,0) + IF(Q21=1,1,0) + IF(Q22=1,1,0) + IF(Q31=1,1,0) + IF(Q32=1,1,0) + IF(Q35=1,1,0) + IF(Q42=1,1,0) + IF(Q52=1,1,0) + IF(Q54=1,1,0) + IF(Q56=1,1,0) + IF(Q71=1,1,0) + IF(Q82=1,1,0) + IF(Q89=1,1,0) + IF(Q94=1,1,0) + IF(Q99=1,1,0) + IF(Q105=1,1,0) + IF(Q113=1,1,0) + IF(Q195=1,1,0) + IF(Q202=1,1,0) + IF(Q219=1,1,0) + IF(Q225=1,1,0) + IF(Q259=1,1,0) + IF(Q264=1,1,0) + IF(Q288=1,1,0) as total FROM u_profile WHERE Uid = '$Uid';");
$resultpdf = mysql_query("SELECT IF(Q9=0,1,0) + IF(Q12=0,1,0) + IF(Q34=0,1,0) + IF(Q70=0,1,0) + IF(Q79=0,1,0) + IF(Q83=0,1,0) + IF(Q95=0,1,0) + IF(Q122=0,1,0) + IF(Q125=0,1,0) + IF(Q129=0,1,0) + IF(Q143=0,1,0) + IF(Q157=0,1,0) + IF(Q158=0,1,0) + IF(Q160=0,1,0) + IF(Q167=0,1,0) + IF(Q171=0,1,0) + IF(Q185=0,1,0) + IF(Q209=0,1,0) + IF(Q214=0,1,0) + IF(Q217=0,1,0) + IF(Q226=0,1,0) + IF(Q243=0,1,0) + IF(Q261=0,1,0) + IF(Q263=0,1,0) + IF(Q266=0,1,0) + IF(Q267=0,1,0) as total FROM u_profile WHERE Uid = '$Uid';");
$resultmfmt = mysql_query("SELECT IF(Q4=1,1,0) + IF(Q25=1,1,0) + IF(Q62=1,1,0) + IF(Q64=1,1,0) + IF(Q67=1,1,0) + IF(Q74=1,1,0) + IF(Q80=1,1,0) + IF(Q112=1,1,0) + IF(Q119=1,1,0) + IF(Q122=1,1,0) + IF(Q128=1,1,0) + IF(Q137=1,1,0) + IF(Q166=1,1,0) + IF(Q177=1,1,0) + IF(Q187=1,1,0) + IF(Q191=1,1,0) + IF(Q196=1,1,0) + IF(Q205=1,1,0) + IF(Q209=1,1,0) + IF(Q219=1,1,0) + IF(Q236=1,1,0) + IF(Q251=1,1,0) + IF(Q256=1,1,0) + IF(Q268=1,1,0) + IF(Q271=1,1,0) as total FROM u_profile WHERE Uid = '$Uid';");
$resultmfmf = mysql_query("SELECT IF(Q1=0,1,0) + IF(Q19=0,1,0) + IF(Q26=0,1,0) + IF(Q27=0,1,0) + IF(Q63=0,1,0) + IF(Q68=0,1,0) + IF(Q69=0,1,0) + IF(Q76=0,1,0) + IF(Q86=0,1,0) + IF(Q103=0,1,0) + IF(Q104=0,1,0) + IF(Q107=0,1,0) + IF(Q120=0,1,0) + IF(Q121=0,1,0) + IF(Q132=0,1,0) + IF(Q133=0,1,0) + IF(Q163=0,1,0) + IF(Q184=0,1,0) + IF(Q193=0,1,0) + IF(Q194=0,1,0) + IF(Q197=0,1,0) + IF(Q199=0,1,0) + IF(Q201=0,1,0) + IF(Q207=0,1,0) + IF(Q231=0,1,0) + IF(Q235=0,1,0) + IF(Q237=0,1,0) + IF(Q239=0,1,0) + IF(Q254=0,1,0) + IF(Q257=0,1,0) + IF(Q272=0,1,0) as total FROM u_profile WHERE Uid = '$Uid';");
$resultmfft = mysql_query("SELECT IF(Q4=1,1,0) + IF(Q25=1,1,0) + IF(Q62=1,1,0) + IF(Q64=1,1,0) + IF(Q67=1,1,0) + IF(Q74=1,1,0) + IF(Q80=1,1,0) + IF(Q112=1,1,0) + IF(Q119=1,1,0) + IF(Q121=1,1,0) + IF(Q122=1,1,0) + IF(Q128=1,1,0) + IF(Q137=1,1,0) + IF(Q177=1,1,0) + IF(Q187=1,1,0) + IF(Q191=1,1,0) + IF(Q196=1,1,0) + IF(Q205=1,1,0) + IF(Q219=1,1,0) + IF(Q236=1,1,0) + IF(Q251=1,1,0) + IF(Q256=1,1,0) + IF(Q271=1,1,0) as total FROM u_profile WHERE Uid = '$Uid';");
$resultmfff = mysql_query("SELECT IF(Q1=0,1,0) + IF(Q19=0,1,0) + IF(Q26=0,1,0) + IF(Q27=0,1,0) + IF(Q63=0,1,0) + IF(Q68=0,1,0) + IF(Q69=0,1,0) + IF(Q76=0,1,0) + IF(Q86=0,1,0) + IF(Q103=0,1,0) + IF(Q104=0,1,0) + IF(Q107=0,1,0) + IF(Q120=0,1,0) + IF(Q121=0,1,0) + IF(Q132=0,1,0) + IF(Q133=0,1,0) + IF(Q163=0,1,0) + IF(Q184=0,1,0) + IF(Q193=0,1,0) + IF(Q194=0,1,0) + IF(Q197=0,1,0) + IF(Q199=0,1,0) + IF(Q201=0,1,0) + IF(Q207=0,1,0) + IF(Q209=0,1,0) + IF(Q231=0,1,0) + IF(Q235=0,1,0) + IF(Q237=0,1,0) + IF(Q239=0,1,0) + IF(Q254=0,1,0) + IF(Q257=0,1,0) + IF(Q268=0,1,0) + IF(Q272=0,1,0) as total FROM u_profile WHERE Uid = '$Uid';");
$resultpat = mysql_query("SELECT IF(Q16=1,1,0) + IF(Q17=1,1,0) + IF(Q22=1,1,0) + IF(Q23=1,1,0) + IF(Q24=1,1,0) + IF(Q42=1,1,0) + IF(Q99=1,1,0) + IF(Q113=1,1,0) + IF(Q138=1,1,0) + IF(Q144=1,1,0) + IF(Q145=1,1,0) + IF(Q146=1,1,0) + IF(Q162=1,1,0) + IF(Q234=1,1,0) + IF(Q259=1,1,0) + IF(Q271=1,1,0) + IF(Q277=1,1,0) + IF(Q285=1,1,0) + IF(Q305=1,1,0) + IF(Q307=1,1,0) + IF(Q333=1,1,0) + IF(Q334=1,1,0) + IF(Q334=1,1,0) + IF(Q336=1,1,0) + IF(Q355=1,1,0) + IF(Q361=1,1,0) as total FROM u_profile WHERE Uid = '$Uid';");
$resultpaf = mysql_query("SELECT IF(Q81=0,1,0) + IF(Q95=0,1,0) + IF(Q98=0,1,0) + IF(Q100=0,1,0) + IF(Q104=0,1,0) + IF(Q110=0,1,0) + IF(Q244=0,1,0) + IF(Q255=0,1,0) + IF(Q266=0,1,0) + IF(Q283=0,1,0) + IF(Q284=0,1,0) + IF(Q286=0,1,0) + IF(Q297=0,1,0) + IF(Q314=0,1,0) + IF(Q315=0,1,0) as total FROM u_profile WHERE Uid = '$Uid';");
$resultptt = mysql_query("SELECT IF(Q11=1,1,0) + IF(Q16=1,1,0) + IF(Q23=1,1,0) + IF(Q31=1,1,0) + IF(Q38=1,1,0) + IF(Q56=1,1,0) + IF(Q65=1,1,0) + IF(Q73=1,1,0) + IF(Q82=1,1,0) + IF(Q89=1,1,0) + IF(Q94=1,1,0) + IF(Q130=1,1,0) + IF(Q147=1,1,0) + IF(Q170=1,1,0) + IF(Q175=1,1,0) + IF(Q196=1,1,0) + IF(Q218=1,1,0) + IF(Q242=1,1,0) + IF(Q273=1,1,0) + IF(Q275=1,1,0) + IF(Q277=1,1,0) + IF(Q285=1,1,0) + IF(Q289=1,1,0) + IF(Q301=1,1,0) + IF(Q302=1,1,0) + IF(Q304=1,1,0) + IF(Q308=1,1,0) + IF(Q309=1,1,0) + IF(Q310=1,1,0) + IF(Q313=1,1,0) + IF(Q316=1,1,0) + IF(Q317=1,1,0) + IF(Q320=1,1,0) + IF(Q325=1,1,0) + IF(Q326=1,1,0) + IF(Q327=1,1,0) + IF(Q328=1,1,0) + IF(Q329=1,1,0) + IF(Q331=1,1,0) as total FROM u_profile WHERE Uid = '$Uid';");
$resultptf = mysql_query("SELECT IF(Q3=0,1,0) + IF(Q9=0,1,0) + IF(Q33=0,1,0) + IF(Q109=0,1,0) + IF(Q140=0,1,0) + IF(Q165=0,1,0) + IF(Q174=0,1,0) + IF(Q293=0,1,0) + IF(Q321=0,1,0) as total FROM u_profile WHERE Uid = '$Uid';");
$resultsct = mysql_query("SELECT IF(Q16=1,1,0) + IF(Q17=1,1,0) + IF(Q21=1,1,0) + IF(Q22=1,1,0) + IF(Q23=1,1,0) + IF(Q31=1,1,0) + IF(Q32=1,1,0) + IF(Q35=1,1,0) + IF(Q38=1,1,0) + IF(Q42=1,1,0) + IF(Q44=1,1,0) + IF(Q46=1,1,0) + IF(Q48=1,1,0) + IF(Q65=1,1,0) + IF(Q85=1,1,0) + IF(Q92=1,1,0) + IF(Q138=1,1,0) + IF(Q145=1,1,0) + IF(Q147=1,1,0) + IF(Q166=1,1,0) + IF(Q168=1,1,0) + IF(Q170=1,1,0) + IF(Q180=1,1,0) + IF(Q182=1,1,0) + IF(Q190=1,1,0) + IF(Q218=1,1,0) + IF(Q221=1,1,0) + IF(Q229=1,1,0) + IF(Q233=1,1,0) + IF(Q234=1,1,0) + IF(Q242=1,1,0) + IF(Q247=1,1,0) + IF(Q252=1,1,0) + IF(Q256=1,1,0) + IF(Q268=1,1,0) + IF(Q273=1,1,0) + IF(Q274=1,1,0) + IF(Q277=1,1,0) + IF(Q279=1,1,0) + IF(Q281=1,1,0) + IF(Q287=1,1,0) + IF(Q291=1,1,0) + IF(Q292=1,1,0) + IF(Q296=1,1,0) + IF(Q298=1,1,0) + IF(Q299=1,1,0) + IF(Q303=1,1,0) + IF(Q307=1,1,0) + IF(Q311=1,1,0) + IF(Q316=1,1,0) + IF(Q319=1,1,0) + IF(Q320=1,1,0) + IF(Q322=1,1,0) + IF(Q323=1,1,0) + IF(Q325=1,1,0) + IF(Q329=1,1,0) + IF(Q332=1,1,0) + IF(Q333=1,1,0) + IF(Q355=1,1,0) as total FROM u_profile WHERE Uid = '$Uid';");
$resultscf = mysql_query("SELECT IF(Q6=0,1,0) + IF(Q9=0,1,0) + IF(Q12=0,1,0) + IF(Q34=0,1,0) + IF(Q90=0,1,0) + IF(Q91=0,1,0) + IF(Q106=0,1,0) + IF(Q165=0,1,0) + IF(Q177=0,1,0) + IF(Q179=0,1,0) + IF(Q192=0,1,0) + IF(Q210=0,1,0) + IF(Q255=0,1,0) + IF(Q276=0,1,0) + IF(Q278=0,1,0) + IF(Q280=0,1,0) + IF(Q290=0,1,0) + IF(Q295=0,1,0) + IF(Q343=0,1,0) as total FROM u_profile WHERE Uid = '$Uid';");
$resultmat = mysql_query("SELECT IF(Q13=1,1,0) + IF(Q15=1,1,0) + IF(Q21=1,1,0) + IF(Q23=1,1,0) + IF(Q50=1,1,0) + IF(Q55=1,1,0) + IF(Q61=1,1,0) + IF(Q85=1,1,0) + IF(Q87=1,1,0) + IF(Q98=1,1,0) + IF(Q113=1,1,0) + IF(Q122=1,1,0) + IF(Q131=1,1,0) + IF(Q145=1,1,0) + IF(Q155=1,1,0) + IF(Q168=1,1,0) + IF(Q169=1,1,0) + IF(Q182=1,1,0) + IF(Q190=1,1,0) + IF(Q200=1,1,0) + IF(Q205=1,1,0) + IF(Q206=1,1,0) + IF(Q211=1,1,0) + IF(Q212=1,1,0) + IF(Q218=1,1,0) + IF(Q220=1,1,0) + IF(Q227=1,1,0) + IF(Q229=1,1,0) + IF(Q238=1,1,0) + IF(Q242=1,1,0) + IF(Q244=1,1,0) + IF(Q248=1,1,0) + IF(Q250=1,1,0) + IF(Q253=1,1,0) + IF(Q269=1,1,0) as total FROM u_profile WHERE Uid = '$Uid';");
$resultmaf = mysql_query("SELECT IF(Q83=0,1,0) + IF(Q93=0,1,0) + IF(Q100=0,1,0) + IF(Q106=0,1,0) + IF(Q107=0,1,0) + IF(Q136=0,1,0) + IF(Q154=0,1,0) + IF(Q158=0,1,0) + IF(Q167=0,1,0) + IF(Q243=0,1,0) + IF(Q263=0,1,0) as total FROM u_profile WHERE Uid = '$Uid';");
$resultsit = mysql_query("SELECT IF(Q31=1,1,0) + IF(Q56=1,1,0) + IF(Q70=1,1,0) + IF(Q100=1,1,0) + IF(Q104=1,1,0) + IF(Q110=1,1,0) + IF(Q127=1,1,0) + IF(Q135=1,1,0) + IF(Q158=1,1,0) + IF(Q161=1,1,0) + IF(Q167=1,1,0) + IF(Q185=1,1,0) + IF(Q215=1,1,0) + IF(Q243=1,1,0) + IF(Q251=1,1,0) + IF(Q265=1,1,0) + IF(Q275=1,1,0) + IF(Q284=1,1,0) + IF(Q289=1,1,0) + IF(Q296=1,1,0) + IF(Q302=1,1,0) + IF(Q308=1,1,0) + IF(Q326=1,1,0) + IF(Q337=1,1,0) + IF(Q338=1,1,0) + IF(Q347=1,1,0) + IF(Q348=1,1,0) + IF(Q351=1,1,0) + IF(Q352=1,1,0) + IF(Q357=1,1,0) + IF(Q364=1,1,0) + IF(Q367=1,1,0) + IF(Q368=1,1,0) + IF(Q369=1,1,0) as total FROM u_profile WHERE Uid = '$Uid';");
$resultsif = mysql_query("SELECT IF(Q25=0,1,0) + IF(Q32=0,1,0) + IF(Q49=0,1,0) + IF(Q79=0,1,0) + IF(Q86=0,1,0) + IF(Q106=0,1,0) + IF(Q112=0,1,0) + IF(Q131=0,1,0) + IF(Q181=0,1,0) + IF(Q189=0,1,0) + IF(Q207=0,1,0) + IF(Q209=0,1,0) + IF(Q231=0,1,0) + IF(Q237=0,1,0) + IF(Q255=0,1,0) + IF(Q262=0,1,0) + IF(Q267=0,1,0) + IF(Q280=0,1,0) + IF(Q321=0,1,0) + IF(Q328=0,1,0) + IF(Q335=0,1,0) + IF(Q340=0,1,0) + IF(Q342=0,1,0) + IF(Q344=0,1,0) + IF(Q345=0,1,0) + IF(Q350=0,1,0) + IF(Q353=0,1,0) + IF(Q354=0,1,0) + IF(Q358=0,1,0) + IF(Q360=0,1,0) + IF(Q362=0,1,0) + IF(Q363=0,1,0) + IF(Q370=0,1,0) as total FROM u_profile WHERE Uid = '$Uid';");
$liet = mysql_fetch_array($resultlf);
$ft1 = mysql_fetch_array($resultft);
$ft2 = mysql_fetch_array($resultff);
$kt1 = mysql_fetch_array($resultkt);
$kt2 = mysql_fetch_array($resultkf);
$hst1 = mysql_fetch_array($resulthst);
$hst2 = mysql_fetch_array($resulthsf);
$dt1 = mysql_fetch_array($resultdt);
$dt2 = mysql_fetch_array($resultdf);
$hyt1 = mysql_fetch_array($resulthyt);
$hyt2 = mysql_fetch_array($resulthyf);
$pdt1 = mysql_fetch_array($resultpdt);
$pdt2 = mysql_fetch_array($resultpdf);
//$liet = mysql_fetch_array($resultlf);
$mfmt1 = mysql_fetch_array($resultmfmt);
$mfmt2 = mysql_fetch_array($resultmfmf);
$mfft1 = mysql_fetch_array($resultmfft);
$mfft2 = mysql_fetch_array($resultmfff);
$pat1 = mysql_fetch_array($resultpat);
$pat2 = mysql_fetch_array($resultpaf);
$ptt1 = mysql_fetch_array($resultptt);
$ptt2 = mysql_fetch_array($resultptf);
$sct1 = mysql_fetch_array($resultsct);
$sct2 = mysql_fetch_array($resultscf);
$mat1 = mysql_fetch_array($resultmat);
$mat2 = mysql_fetch_array($resultmaf);
$sit1 = mysql_fetch_array($resultsit);
$sit2 = mysql_fetch_array($resultsif);
//$liet = mysql_fetch_array($resultlf);
//$liet = mysql_fetch_array($resultlf);
$lx = $liet[0];
$f1 = $ft1[0]; 
$f2 = $ft2[0]; 
$k1 = $kt1[0]; 
$k2 = $kt2[0]; 
$hs1 = $hst1[0];
$hs2 = $hst2[0];
$d1 = $dt1[0]; 
$d2 = $dt2[0]; 
$hy1 = $hyt1[0];
$hy2 = $hyt2[0];
$pd1 = $pdt1[0];
$pd2 = $pdt2[0];
$mfm1 = $mfmt1[0];
$mfm2 = $mfmt2[0];
$mff1 = $mfft1[0];
$mff2 = $mfft2[0];
$pa1 = $pat1[0];
$pa2 = $pat2[0];
$pt1 = $ptt1[0];
$pt2 = $ptt2[0];
$sc1 = $sct1[0];
$sc2 = $sct2[0];
$ma1 = $mat1[0];
$ma2 = $mat2[0];
$si1 = $sit1[0];
$si2 = $sit2[0];

$l = $lx;
$f = $f1+$f2;
$k = $k1+$k2;
$hs = $hs1+$hs2;
$d = $d1+$d2;
$hy = $hy1+$hy2;
$pd = $pd1+$pd2;
$mfm = $mfm1 +$mfm2;
$mff = $mff1 +$mff2;
$pa = $pa1 +$pa2;
$pt = $pt1 +$pt2;
$sc = $sc1 +$sc2;
$ma = $ma1 +$ma2;
$si = $si1 +$si2;
////////////

$genderx = mysql_query("SELECT * FROM u_profile2 WHERE Uid = $Uid");					 
								$gender2 = mysql_fetch_array($genderx);
								$gender = $gender2['gender'];

////////
// $gendert=  mysql_query("SELECT gender FROM `u_profile2` WHERE Uid=$Uid");
// $gender2 = mysql_fetch_array($gendert);
// $gender = $gender2[0];
$gendermale = 'MALE';
if ($gender === $gendermale){
mysql_query("SELECT * FROM `mmpi_result_male`");
}
else{
mysql_query("SELECT * FROM `mmpi_result_female`");
}
$kvaluet = mysql_query("SELECT * FROM `k_value` WHERE K = $k");
$kvaluet2 = mysql_fetch_array($kvaluet);
$kvalue5 = $kvaluet2['5'];
$kvalue4 = $kvaluet2['4'];
$kvalue2 = $kvaluet2['2'];
$hsk = $hs+$kvalue5;
$pdk = $pd+$kvalue4;
$ptk = $pt+$k;
$sck = $sc+$k;
$mak = $ma+$kvalue2;
//echo $kvalue5; 
//echo $kvalue4; 
//echo $kvalue2;
// $gendert=  mysql_query("SELECT gender FROM `u_profile2` WHERE Uid=$Uid");
// $gender2 = mysql_fetch_array($gendert);
// $gender = $gender2[0];
if ($gender === $gendermale){//////////////////////////////////////Gender////////////////////////
$toflt=  mysql_query("SELECT T FROM `mmpi_result_male` WHERE L=$l");
$toflt2 = mysql_fetch_array($toflt);
$tofl = $toflt2[0];

if($f > 30){
	mysql_query("UPDATE mmpi_result SET F='120', FDes='Very High. Probably invalid. Random answers, severe dyslexia' WHERE Uid = '$Uid'");
 }
 else{
$tofft=  mysql_query("SELECT T FROM `mmpi_result_male` WHERE F=$f");
$tofft2 = mysql_fetch_array($tofft);
$toff = $tofft2[0];
 }
 
$tofkt=  mysql_query("SELECT T FROM `mmpi_result_male` WHERE K=$k");
$tofkt2 = mysql_fetch_array($tofkt);
$tofk = $tofkt2[0];

$tofhst=  mysql_query("SELECT T FROM `mmpi_result_male` WHERE HS=$hsk");
$tofhst2 = mysql_fetch_array($tofhst);
$tofhs = $tofhst2[0];

if($d > 55){
	mysql_query("UPDATE mmpi_result SET D='120', DDes='Very High. self-absorption, introversion. despair, feelings of guilt. self-perception of inadequacy. concern about death, probability of suicidal ideation. apathy, depression, psychomotor retardation.' WHERE Uid = '$Uid'");
 }
 else{
$tofdt=  mysql_query("SELECT T FROM `mmpi_result_male` WHERE D=$d");
$tofdt2 = mysql_fetch_array($tofdt);
$tofd = $tofdt2[0];
 }

 if($hy > 54){
	mysql_query("UPDATE mmpi_result SET HY='120', HYDes='Very High. high suggestibility Sudden episodes of anxiety and / or panic. disinhibition, rapt and childish behavior. appearance of physical symptoms as a reaction to embarrassing situations or attitudes.' WHERE Uid = '$Uid'");
 }
 else{
$tofhyt=  mysql_query("SELECT T FROM `mmpi_result_male` WHERE HY=$hy");
$tofhyt2 = mysql_fetch_array($tofhyt);
$tofhy = $tofhyt2[0];
 }

 if($pdk > 50){
	mysql_query("UPDATE mmpi_result SET PD='120', PDDes='Very High. poverty in the adaptation to the judgment. instability, irresponsibility. Self-centered attitude, immaturity. antisocial attitudes and behaviors, aggression, provocation.' WHERE Uid = '$Uid'");
 }
 else{
$tofpdt=  mysql_query("SELECT T FROM `mmpi_result_male` WHERE PD=$pdk");
$tofpdt2 = mysql_fetch_array($tofpdt);
$tofpd = $tofpdt2[0];
 }

 if($mfm > 52){
	mysql_query("UPDATE mmpi_result SET MFM='120', MFMDes='Very High. traditional pattern of female interests. Conflicts about sexual identity. passivity, scant assertiveness.' WHERE Uid = '$Uid'");
 }
 else{
$tofmfmt=  mysql_query("SELECT T FROM `mmpi_result_male` WHERE MF=$mfm");
$tofmfmt2 = mysql_fetch_array($tofmfmt);
$tofmfm = $tofmfmt2[0];
 }

 if($pa > 31){
	mysql_query("UPDATE mmpi_result SET PA='120', PADes='Very High. probability of thinking disorder. Erroneous beliefs. use of reference ideas. Vengeful provisions, bitterness. excessive cavilación. Probability of action depending on the delirium.' WHERE Uid = '$Uid'");
 }
 else{
$tofpat=  mysql_query("SELECT T FROM `mmpi_result_male` WHERE PA=$pa");
$tofpat2 = mysql_fetch_array($tofpat);
$tofpa = $tofpat2[0];
 }

 if($ptk > 62){
	mysql_query("UPDATE mmpi_result SET PT='120', PTDes='Very High. cavilación deep and constant reflection, rumination. psychomotor agitation. probability of ritual behaviors, superstitions, phobias, fears. feelings of guilt, expressions of depression and anxiety.' WHERE Uid = '$Uid'");
 }
 else{
$tofptt=  mysql_query("SELECT T FROM `mmpi_result_male` WHERE PT=$ptk");
$tofptt2 = mysql_fetch_array($tofptt);
$tofpt = $tofptt2[0];
 }

 if($sck > 75){
	mysql_query("UPDATE mmpi_result SET SC='120', SCDes='Very High. disturbance of thought. Eccentric behavior. probability of delirium somatic, persecution, etc.. and/or hallucinations. social withdrawal, isolation. contact with deficit reality.' WHERE Uid = '$Uid'");
 }
 else{
$tofsct=  mysql_query("SELECT T FROM `mmpi_result_male` WHERE SE=$sck");
$tofsct2 = mysql_fetch_array($tofsct);
$tofsc = $tofsct2[0];
 }

 if($mak > 46){
	mysql_query("UPDATE mmpi_result SET MA='120', MADes='Very High. expansiveness, grandiosity, irritability. poor impulse control. Impulsive decision making. hyperactivity, distracted attitude. confusion.' WHERE Uid = '$Uid'");
 }
 else{
$tofmat=  mysql_query("SELECT T FROM `mmpi_result_male` WHERE MA=$mak");
$tofmat2 = mysql_fetch_array($tofmat);
$tofma = $tofmat2[0];
 }

 if($si > 69){
	mysql_query("UPDATE mmpi_result SET SI='120', SIDes='Very High. self-absorption, distant attitude. insecurity, indecision, austerity (severity and rigidity in the way of acting), modesty. rumination. introversion, embarrassing attitude, shyness, lack of self.' WHERE Uid = '$Uid'");
 }
 else{
$tofsit=  mysql_query("SELECT T FROM `mmpi_result_male` WHERE SI=$si");
$tofsit2 = mysql_fetch_array($tofsit);
$tofsi = $tofsit2[0];
 }
}
////////////female////////////
else{
	$toflt=  mysql_query("SELECT T FROM `mmpi_result_female` WHERE L=$l");
$toflt2 = mysql_fetch_array($toflt);
$tofl = $toflt2[0];

if($f > 30){
	mysql_query("UPDATE mmpi_result SET F='120', FDes='Very High. Probably invalid. Random answers, severe dyslexia' WHERE Uid = '$Uid'");
 }
 else{
$tofft=  mysql_query("SELECT T FROM `mmpi_result_female` WHERE F=$f");
$tofft2 = mysql_fetch_array($tofft);
$toff = $tofft2[0];
 }
 
$tofkt=  mysql_query("SELECT T FROM `mmpi_result_female` WHERE K=$k");
$tofkt2 = mysql_fetch_array($tofkt);
$tofk = $tofkt2[0];

$tofhst=  mysql_query("SELECT T FROM `mmpi_result_female` WHERE HS=$hsk");
$tofhst2 = mysql_fetch_array($tofhst);
$tofhs = $tofhst2[0];

if($d > 57){
	mysql_query("UPDATE mmpi_result SET D='120', DDes='Very High. self-absorption, introversion. despair, feelings of guilt. self-perception of inadequacy. concern about death, probability of suicidal ideation. apathy, depression, psychomotor retardation.' WHERE Uid = '$Uid'");
 }
 else{
$tofdt=  mysql_query("SELECT T FROM `mmpi_result_female` WHERE D=$d");
$tofdt2 = mysql_fetch_array($tofdt);
$tofd = $tofdt2[0];
 }

 if($hy > 56){
	mysql_query("UPDATE mmpi_result SET HY='120', HYDes='Very High. high suggestibility Sudden episodes of anxiety and / or panic. disinhibition, rapt and childish behavior. appearance of physical symptoms as a reaction to embarrassing situations or attitudes.' WHERE Uid = '$Uid'");
 }
 else{
$tofhyt=  mysql_query("SELECT T FROM `mmpi_result_female` WHERE HY=$hy");
$tofhyt2 = mysql_fetch_array($tofhyt);
$tofhy = $tofhyt2[0];
 }

 if($pdk > 50){
	mysql_query("UPDATE mmpi_result SET PD='120', PDDes='Very High. poverty in the adaptation to the judgment. instability, irresponsibility. Self-centered attitude, immaturity. antisocial attitudes and behaviors, aggression, provocation.' WHERE Uid = '$Uid'");
 }
 else{
$tofpdt=  mysql_query("SELECT T FROM `mmpi_result_female` WHERE PD=$pdk");
$tofpdt2 = mysql_fetch_array($tofpdt);
$tofpd = $tofpdt2[0];
 }

 if($mff > 38){
	mysql_query("UPDATE mmpi_result SET MFF='0', MFFDes='Low. with low level of education, traditional pattern of female interests. insecurity, low self-esteem. passivity and submission. Constriction and dependence. But with a high level of education, intellectual capacity,introspective. initiative, energy, considerate attitude.' WHERE Uid = '$Uid'");
 }
 else{
$tofmfft=  mysql_query("SELECT T FROM `mmpi_result_female` WHERE MF=$mff");
$tofmfft2 = mysql_fetch_array($tofmfft);
$tofmff = $tofmfft2[0];
 }

 if($pa > 31){
	mysql_query("UPDATE mmpi_result SET PA='120', PADes='Very High. probability of thinking disorder. Erroneous beliefs. use of reference ideas. Vengeful provisions, bitterness. excessive cavilación. Probability of action depending on the delirium.' WHERE Uid = '$Uid'");
 }
 else{
$tofpat=  mysql_query("SELECT T FROM `mmpi_result_female` WHERE PA=$pa");
$tofpat2 = mysql_fetch_array($tofpat);
$tofpa = $tofpat2[0];
 }

 if($ptk > 64){
	mysql_query("UPDATE mmpi_result SET PT='120', PTDes='Very High. cavilación deep and constant reflection, rumination. psychomotor agitation. probability of ritual behaviors, superstitions, phobias, fears. feelings of guilt, expressions of depression and anxiety.' WHERE Uid = '$Uid'");
 }
 else{
$tofptt=  mysql_query("SELECT T FROM `mmpi_result_female` WHERE PT=$ptk");
$tofptt2 = mysql_fetch_array($tofptt);
$tofpt = $tofptt2[0];
 }

 if($sck > 69){
	mysql_query("UPDATE mmpi_result SET SC='120', SCDes='Very High. disturbance of thought. Eccentric behavior. probability of delirium somatic, persecution, etc.. and/or hallucinations. social withdrawal, isolation. contact with deficit reality.' WHERE Uid = '$Uid'");
 }
 else{
$tofsct=  mysql_query("SELECT T FROM `mmpi_result_female` WHERE SE=$sck");
$tofsct2 = mysql_fetch_array($tofsct);
$tofsc = $tofsct2[0];
 }

 if($mak > 46){
	mysql_query("UPDATE mmpi_result SET MA='120', MADes='Very High. expansiveness, grandiosity, irritability. poor impulse control. Impulsive decision making. hyperactivity, distracted attitude. confusion.' WHERE Uid = '$Uid'");
 }
 else{
$tofmat=  mysql_query("SELECT T FROM `mmpi_result_female` WHERE MA=$mak");
$tofmat2 = mysql_fetch_array($tofmat);
$tofma = $tofmat2[0];
 }

 if($si > 70){
	mysql_query("UPDATE mmpi_result SET SI='120', SIDes='Very High. self-absorption, distant attitude. insecurity, indecision, austerity (severity and rigidity in the way of acting), modesty. rumination. introversion, embarrassing attitude, shyness, lack of self.' WHERE Uid = '$Uid'");
 }
 else{
$tofsit=  mysql_query("SELECT T FROM `mmpi_result_female` WHERE SI=$si");
$tofsit2 = mysql_fetch_array($tofsit);
$tofsi = $tofsit2[0];
 }
}
////end/////
if (mysql_num_rows(mysql_query("SELECT * FROM mmpi_result WHERE Uid = '$Uid'"))==0){
mysql_query("INSERT INTO mmpi_result (Uid) VALUES ('$Uid')");
}

if($tofl > 79){
	mysql_query("UPDATE mmpi_result SET L='$tofl', LDes='Very High. Probably invalid. Pretend a good adjustment' WHERE Uid = '$Uid'");
 }else if($tofl > 69 && $tofl < 80){
	 mysql_query("UPDATE mmpi_result SET L='$tofl', LDes='High. Questionable validity. Random answers. Denial of faults' WHERE Uid = '$Uid'");
 } else if($tofl > 59 && $tofl < 70){
	 mysql_query("UPDATE mmpi_result SET L='$tofl', LDes='Avg Higher. Probably valid. Configuration defensive' WHERE Uid = '$Uid'");
 }else if($tofl > 49 && $tofl < 60){
	 mysql_query("UPDATE mmpi_result SET L='$tofl', LDes='Modal. Acceptable protocol. Typical approach to the situation of test' WHERE Uid = '$Uid'");
 } else{
	mysql_query("UPDATE mmpi_result SET L='$tofl', LDes='Low. Possibly, he pretends be bad. All answers true' WHERE Uid = '$Uid'"); 
 }

if($toff > 90){
	mysql_query("UPDATE mmpi_result SET F='$toff', FDes='Very High. Probably invalid. Random answers, severe dyslexia' WHERE Uid = '$Uid'");
 }else if($toff > 70 && $toff < 91){
	 mysql_query("UPDATE mmpi_result SET F='$toff', FDes='High. Questionable validity. Fake disease, Psychotic processes' WHERE Uid = '$Uid'");
 } else if($toff > 55 && $toff < 71){
	 mysql_query("UPDATE mmpi_result SET F='$toff', FDes='Avg Higher. Probably valid. Desire to be no conventional, moderately severe self critical agitated, distracted' WHERE Uid = '$Uid'");
 }else if($toff > 44 && $toff < 56){
	 mysql_query("UPDATE mmpi_result SET F='$toff', FDes='Modal. Acceptable protocol. Beliefs a little deviated.' WHERE Uid = '$Uid'");
 } else{
	mysql_query("UPDATE mmpi_result SET F='$toff', FDes='Low. Acceptable protocol. Accordance. Possible pretend be okay' WHERE Uid = '$Uid'"); 
 }

 if($tofk > 70){
	mysql_query("UPDATE mmpi_result SET K='$tofk', KDes='High. Markedly defensive. State of defense in employment situations.' WHERE Uid = '$Uid'");
 }else if($tofk > 55 && $tofk < 71){
	 mysql_query("UPDATE mmpi_result SET K='$tofk', KDes='Avg Higher. Moderately defensive Non-recognition of stress.' WHERE Uid = '$Uid'");
 } else if($tofk > 40 && $tofk < 56){
	 mysql_query("UPDATE mmpi_result SET K='$tofk', KDes='Modal. Balance between self protection and self- revelation.' WHERE Uid = '$Uid'");
 } else{
	mysql_query("UPDATE mmpi_result SET K='$tofk', KDes='Low. Answers to pretend that It is bad. All the answers true Request for help Inadequate defenses.' WHERE Uid = '$Uid'"); 
 }
 
 if($tofhs > 75){
	mysql_query("UPDATE mmpi_result SET HS='$tofhs', HSDes='Very High. Somatic bizarre delusions or concerning the body. multiple symptoms and complaints, probable constriction.' WHERE Uid = '$Uid'");
 }else if($tofhs > 65 && $tofhs < 76){
	 mysql_query("UPDATE mmpi_result SET HS='$tofhs', HSDes='High. exaggerated reaction to any real problem. selfishness, extreme self-centeredness. defeatist and pessimistic attitudes. bitterness and cynical perspective. constant demand for attention. exaggeration of physical problems. intense complaints and changing temperaments.' WHERE Uid = '$Uid'");
 } else if($tofhs > 55 && $tofhs < 66){
	 mysql_query("UPDATE mmpi_result SET HS='$tofhs', HSDes='Avg Higher. presence of specific health disorder. probability of immaturity, irritability, tendency to complain and lament. concern for ones own physical health like, weight, physical functioning, etc.' WHERE Uid = '$Uid'");
 }else if($tofhs > 40 && $tofhs < 56){
	 mysql_query("UPDATE mmpi_result SET HS='$tofhs', HSDes='Modal. little concern about the body and health itself. open and balanced emotion. Realistic and insightful.' WHERE Uid = '$Uid'");
 } else{
	mysql_query("UPDATE mmpi_result SET HS='$tofhs', HSDes='Low. probability of inattention to signs and symptoms of disease. optimism, energy, effectiveness.' WHERE Uid = '$Uid'"); 
 }
 
 
 // if($tofhs > 75){
	// mysql_query("UPDATE mmpi_result SET HS='$tofhs', HSDes='Very High.' WHERE Uid = '$Uid'");
 // }else if($tofhs > 65 && $tofhs < 76){
	 // mysql_query("UPDATE mmpi_result SET HS='$tofhs', HSDes='High.' WHERE Uid = '$Uid'");
 // } else if($tofhs > 55 && $tofhs < 66){
	 // mysql_query("UPDATE mmpi_result SET HS='$tofhs', HSDes='Avg Higher.' WHERE Uid = '$Uid'");
 // }else if($tofhs > 40 && $tofhs < 56){
	 // mysql_query("UPDATE mmpi_result SET HS='$tofhs', HSDes='Modal.' WHERE Uid = '$Uid'");
 // } else{
	// mysql_query("UPDATE mmpi_result SET HS='$tofhs', HSDes='Low.' WHERE Uid = '$Uid'"); 
 // }
 
 if($tofd > 75){
	mysql_query("UPDATE mmpi_result SET D='$tofd', DDes='Very High. self-absorption, introversion. despair, feelings of guilt. self-perception of inadequacy. concern about death, probability of suicidal ideation. apathy, depression, psychomotor retardation.' WHERE Uid = '$Uid'");
 }else if($tofd > 65 && $tofd < 76){
	 mysql_query("UPDATE mmpi_result SET D='$tofd', DDes='High. tendency to isolation, shyness, embarrassing attitude. decreased energetic level, difficulty of concentration. Somatic complaints, sleep disorder. low self-esteem, feelings of inadequacy. presence of distress, dysphoria and pessimism.' WHERE Uid = '$Uid'");
 } else if($tofd > 55 && $tofd < 66){
	 mysql_query("UPDATE mmpi_result SET D='$tofd', DDes='Avg Higher. likelihood of inhibition, irritability, shyness, relatively chronic feelings of sadness, unhappiness, dissatisfaction with self and others. Worry about pessimism, responsible attitude. Modesty attitude' WHERE Uid = '$Uid'");
 }else if($tofd > 40 && $tofd < 56){
	 mysql_query("UPDATE mmpi_result SET D='$tofd', DDes='Modal. conformity with itself. Emotional stability, balance. realistic attitude' WHERE Uid = '$Uid'");
 } else{
	mysql_query("UPDATE mmpi_result SET D='$tofd', DDes='Low. attitude, enthusiasm, optimism. No emotional disturbances or problems of inhibition or social reaction. probability of low impulse control. Greater social interest' WHERE Uid = '$Uid'"); 
 }
 
if($tofhy > 75){
	mysql_query("UPDATE mmpi_result SET HY='$tofhy', HYDes='Very High. high suggestibility Sudden episodes of anxiety and / or panic. disinhibition, rapt and childish behavior. appearance of physical symptoms as a reaction to embarrassing situations or attitudes.' WHERE Uid = '$Uid'");
 }else if($tofhy > 65 && $tofhy < 76){
	 mysql_query("UPDATE mmpi_result SET HY='$tofhy', HYDes='High. defensive predominance of negation and dissociation. specific somatic complaints and symptoms. naivety, poor ability to insight. exaggerated, demanding and histrionic attitude' WHERE Uid = '$Uid'");
 } else if($tofhy > 55 && $tofhy < 66){
	 mysql_query("UPDATE mmpi_result SET HY='$tofhy', HYDes='Avg Higher. self-centered attitude, superficiality. sometimes, immaturity and manipulative attitude. conformism, moralism, need to please and extraverted.' WHERE Uid = '$Uid'");
 }else if($tofhy > 40 && $tofhy < 56){
	 mysql_query("UPDATE mmpi_result SET HY='$tofhy', HYDes='Modal. Realistic attitude Openness to feelings. logical and rational style.' WHERE Uid = '$Uid'");
 } else{
	mysql_query("UPDATE mmpi_result SET HY='$tofhy', HYDes='Low. probability of cynical attitude. tendency to social isolation and loneliness, desire for restricted interests' WHERE Uid = '$Uid'"); 
 }
 
 if($tofpd > 75){
	mysql_query("UPDATE mmpi_result SET PD='$tofpd', PDDes='Very High. poverty in the adaptation to the judgment. instability, irresponsibility. Self-centered attitude, immaturity. antisocial attitudes and behaviors, aggression, provocation.' WHERE Uid = '$Uid'");
 }else if($tofpd > 65 && $tofpd < 76){
	 mysql_query("UPDATE mmpi_result SET PD='$tofpd', PDDes='High. low tolerance to boredom, boredom and frustration. problems with authority, labor problems and / or recurrent marital problems. rebellious and hostile attitudes. Superficial and short-term emotional reactions like, shame, guilt. likelihood of substance abuse. Work and / or school background of reduced achievement.' WHERE Uid = '$Uid'");
 } else if($tofpd > 55 && $tofpd < 66){
	 mysql_query("UPDATE mmpi_result SET PD='$tofpd', PDDes='Avg Higher. impulsiveness, intrepid and adventurous behavior. hedonistic attitude. resentment, instability, impatience.' WHERE Uid = '$Uid'");
 }else if($tofpd > 40 && $tofpd < 56){
	 mysql_query("UPDATE mmpi_result SET PD='$tofpd', PDDes='Modal. sincerity, reliable attitude. persistent, responsible.' WHERE Uid = '$Uid'");
 } else{
	mysql_query("UPDATE mmpi_result SET PD='$tofpd', PDDes='Low. rigidity, conventionalism, passivity, poor ability to Express feelings, ideas and opinions freely, clearly and simply,communicating them at the right time and to the person indicated, assertiveness. moralistic, self-critical, overcontrol.' WHERE Uid = '$Uid'"); 
 }
 ////////////////////////////////////////////
 if ($gender === $gendermale){
  if($tofmfm > 75){
	mysql_query("UPDATE mmpi_result SET MFM='$tofmfm', MFMDes='Very High. traditional pattern of female interests. Conflicts about sexual identity. passivity, scant assertiveness.' WHERE Uid = '$Uid'");
 }else if($tofmfm > 65 && $tofmfm < 76){
	 mysql_query("UPDATE mmpi_result SET MFM='$tofmfm', MFMDes='High. curiosity and creativity. tolerant attitude, individualism. intellectual interests, empathy.' WHERE Uid = '$Uid'");
 } else if($tofmfm > 55 && $tofmfm < 66){
	 mysql_query("UPDATE mmpi_result SET MFM='$tofmfm', MFMDes='Avg Higher. self control, demonstrative expressiveness. common sense, aesthetic interest. touch and social sensitivity.' WHERE Uid = '$Uid'");
 }else if($tofmfm > 40 && $tofmfm < 56){
	 mysql_query("UPDATE mmpi_result SET MFM='$tofmfm', MFMDes='Modal. practical sense, realistic attitude. conventionalism and initiative.' WHERE Uid = '$Uid'");
 } else{
	mysql_query("UPDATE mmpi_result SET MFM='$tofmfm', MFMDes='Low. traditional pattern of male interests. osca and aggressive attitude. attachment to the macho stereotype. reckless, careless behaviors, confidence in oneself.' WHERE Uid = '$Uid'"); 
 }
 }
 else{
  if($tofmff > 69){
	mysql_query("UPDATE mmpi_result SET MFF='$tofmff', MFFDes='Very High. traditional pattern of male interests. not very friendly. dominant attitude. Aggressiveness.' WHERE Uid = '$Uid'");
 }else if($tofmff > 59 && $tofmff < 70){
	 mysql_query("UPDATE mmpi_result SET MFF='$tofmff', MFFDes='High. self-confidence. logical style, little emotional. competitiveness, vigor.' WHERE Uid = '$Uid'");
 } else if($tofmff > 50 && $tofmff < 60){
	 mysql_query("UPDATE mmpi_result SET MFF='$tofmff', MFFDes='Avg Higher. activity. adventurous attitude. spontaneity. assertiveness.' WHERE Uid = '$Uid'");
 }else if($tofmff > 40 && $tofmff < 51){
	 mysql_query("UPDATE mmpi_result SET MFF='$tofmff', MFFDes='Modal. empathy, competent behavior. initiative. Attitude of consideration, idealism.' WHERE Uid = '$Uid'");
 } else{
	mysql_query("UPDATE mmpi_result SET MFF='$tofmff', MFFDes='Low. with low level of education, traditional pattern of female interests. insecurity, low self-esteem. passivity and submission. Constriction and dependence. But with a high level of education, intellectual capacity,introspective. initiative, energy, considerate attitude.' WHERE Uid = '$Uid'"); 
 }
 }
 //////////////////////////////////////////////
 if($tofpa > 75){
	mysql_query("UPDATE mmpi_result SET PA='$tofpa', PADes='Very High. probability of thinking disorder. Erroneous beliefs. use of reference ideas. Vengeful provisions, bitterness. excessive cavilación. Probability of action depending on the delirium.' WHERE Uid = '$Uid'");
 }else if($tofpa > 65 && $tofpa < 76){
	 mysql_query("UPDATE mmpi_result SET PA='$tofpa', PADes='High. anger, resentment. displacement of guilt, critical attitude, hostility, suspicion. rigidity, obstinacy, tendency to misinterpret social situations.' WHERE Uid = '$Uid'");
 } else if($tofpa > 55 && $tofpa < 66){
	 mysql_query("UPDATE mmpi_result SET PA='$tofpa', PADes='Avg Higher. sensitivity to rejection and / or slights. caution and defense in the beginning of social contacts. Moralism. contraction to work.' WHERE Uid = '$Uid'");
 }else if($tofpa > 40 && $tofpa < 56){
	 mysql_query("UPDATE mmpi_result SET PA='$tofpa', PADes='Modal. rationality, clear thinking. caution, flexibility.' WHERE Uid = '$Uid'");
 } else{
	mysql_query("UPDATE mmpi_result SET PA='$tofpa', PADes='Low. tendency to balance and pleasant mood. prudence and evasion. Obstinacy, stubbornness. probability of paranoid features.' WHERE Uid = '$Uid'"); 
 }
 
 if($tofpt > 75){
	mysql_query("UPDATE mmpi_result SET PT='$tofpt', PTDes='Very High. cavilación deep and constant reflection, rumination. psychomotor agitation. probability of ritual behaviors, superstitions, phobias, fears. feelings of guilt, expressions of depression and anxiety.' WHERE Uid = '$Uid'");
 }else if($tofpt > 65 && $tofpt < 76){
	 mysql_query("UPDATE mmpi_result SET PT='$tofpt', PTDes='High. insecurity, anxiety, tension. worries, apprehensive attitude. fear of making mistakes or mistakes. thoroughness, indecision, moralism.' WHERE Uid = '$Uid'");
 } else if($tofpt > 55 && $tofpt < 66){
	 mysql_query("UPDATE mmpi_result SET PT='$tofpt', PTDes='Avg Higher. Awareness and responsibility about one's own actions. tendency to intellectualize. contraction to work. organization, order, tendency to perfectionism. Self-critical and introspective attitude.' WHERE Uid = '$Uid'");
 }else if($tofpt > 40 && $tofpt < 56){
	 mysql_query("UPDATE mmpi_result SET PT='$tofpt', PTDes='Modal. Reliable attitude, adaptability. organization, punctuality.' WHERE Uid = '$Uid'");
 } else{
	mysql_query("UPDATE mmpi_result SET PT='$tofpt', PTDes='Low. self-confidence, free from insecurity. Relaxed attitude and wellness. persistence and effectiveness.' WHERE Uid = '$Uid'"); 
 }
 
 if($tofsc > 75){
	mysql_query("UPDATE mmpi_result SET SC='$tofsc', SCDes='Very High. disturbance of thought. Eccentric behavior. probability of delirium somatic, persecution, etc. and/or hallucinations. social withdrawal, isolation. contact with deficit reality.' WHERE Uid = '$Uid'");
 }else if($tofsc > 65 && $tofsc < 76){
	 mysql_query("UPDATE mmpi_result SET SC='$tofsc', SCDes='High. unusual beliefs, bizarre acts. self-absorption, alienation. unconventional. problems of identification and self-confirmation. difficulties in concentration and reasoning.' WHERE Uid = '$Uid'");
 } else if($tofsc > 55 && $tofsc < 66){
	 mysql_query("UPDATE mmpi_result SET SC='$tofsc', SCDes='Avg Higher. little interest in people. little practical skill. creativity and imagination. religious and / or spiritual concerns.' WHERE Uid = '$Uid'");
 }else if($tofsc > 40 && $tofsc < 56){
	 mysql_query("UPDATE mmpi_result SET SC='$tofsc', SCDes='Modal. adaptability, reliability, safety. emotional balance.' WHERE Uid = '$Uid'");
 } else{
	mysql_query("UPDATE mmpi_result SET SC='$tofsc', SCDes='Low. conventionalism, conservatism. control over the impulses themselves. Submissive attitude.' WHERE Uid = '$Uid'"); 
 }
 
 if($tofma > 75){
	mysql_query("UPDATE mmpi_result SET MA='$tofma', MADes='Very High. expansiveness, grandiosity, irritability. poor impulse control. Impulsive decision making. hyperactivity, distracted attitude. confusion.' WHERE Uid = '$Uid'");
 }else if($tofma > 65 && $tofma < 76){
	 mysql_query("UPDATE mmpi_result SET MA='$tofma', MADes='High. euphoria, excessive activity, loquacity like, ability to speak a lot. restlessness, impatience, lability. superficial relationships.' WHERE Uid = '$Uid'");
 } else if($tofma > 55 && $tofma < 66){
	 mysql_query("UPDATE mmpi_result SET MA='$tofma', MADes='Avg Higher. little tolerance to tedium. wide range of interest. commitment to work, effectiveness. achievement orientation, entrepreneurial attitude.' WHERE Uid = '$Uid'");
 }else if($tofma > 40 && $tofma < 56){
	 mysql_query("UPDATE mmpi_result SET MA='$tofma', MADes='Modal. Sociability, friendliness. responsible, realistic attitude, enthusiasm, balance.' WHERE Uid = '$Uid'");
 } else{
	mysql_query("UPDATE mmpi_result SET MA='$tofma', MADes='Low. pessimistic and apathetic attitude. frequent occurrence of fatigue, lack of energy, shyness, dependence. little self-confidence, depressive feelings.' WHERE Uid = '$Uid'"); 
 }
 
 if($tofsi > 75){
	mysql_query("UPDATE mmpi_result SET SI='$tofsi', SIDes='Very High. self-absorption, distant attitude. insecurity, indecision, austerity (severity and rigidity in the way of acting), modesty. rumination. introversion, embarrassing attitude, shyness, lack of self.' WHERE Uid = '$Uid'");
 }else if($tofsi > 65 && $tofsi < 76){
	 mysql_query("UPDATE mmpi_result SET SI='$tofsi', SIDes='High.  taciturn attitude, irritability, rigidity, submission.' WHERE Uid = '$Uid'");
 } else if($tofsi > 55 && $tofsi < 66){
	 mysql_query("UPDATE mmpi_result SET SI='$tofsi', SIDes='Avg Higher. reserve attitude, seriousness, caution. impulse overcontrol. dull social skill.' WHERE Uid = '$Uid'");
 }else if($tofsi > 40 && $tofsi < 56){
	 mysql_query("UPDATE mmpi_result SET SI='$tofsi', SIDes='Modal. activity, energy. loving attitude.' WHERE Uid = '$Uid'");
 } else{
	mysql_query("UPDATE mmpi_result SET SI='$tofsi', SIDes='Low. warmth, sociability, gregarious attitude. Self-confidence and assertiveness Exhibitionism and attitude manipulative.' WHERE Uid = '$Uid'"); 
 }
 mysql_query("UPDATE u_profile2 SET test_complete='1' WHERE Uid = '$Uid'");
 header("location: result.php");
 // echo $Uid;
 // echo '//';
 // echo $gender;
 // echo '// T of L:';
 // echo $tofl;
 // echo '//L:';
// echo $l;
// echo '||';
// echo '// T of F:';
// echo $toff;
// echo '//F:';
// echo $f;
// echo '||';
// echo '// T of K:';
// echo $tofk;
// echo '//K:';
// echo $k;
// echo '||';
// echo '// T of HS:';
// echo $tofhs;
// echo '//F:';
// echo $hsk;
// echo '||';
// echo '// T of D:';
// echo $tofd;
// echo '//D:';
// echo $d;
// echo '||';
// echo '// T of HY:';
// echo $tofhy;
// echo '//HY:';
// echo $hy;
// echo '||';
// echo '// T of PD:';
// echo $tofpd;
// echo '//F:';
// echo $pdk;
// echo '||';
// echo '// T of mf:';
// echo $tofmff;
// echo '//MF:';
// echo $mff;
// echo '||';
// echo '// T of PA:';
// echo $tofpa;
// echo '//PA:';
// echo $pa;
// echo '||';
// echo '// T of PT:';
// echo $tofpt;
// echo '//PT:';
// echo $ptk;
// echo '||';
// echo '// T of SE:';
// echo $tofsc;
// echo '//SE:';
// echo $sck;
// echo '||';
// echo '// T of MA:';
// echo $tofma;
// echo '//MA:';
// echo $mak;
// echo '||';
// echo '// T of SI:';
// echo $tofsi;
// echo '//SI:';
// echo $si;
//echo $k;
//$hs = ($hsx/32)*100;
//echo $hs;
//echo $d;
//echo $hy;
//echo $pd;
//echo $mfm;
//echo $mff;
//echo $pa;
//echo $pt;
//echo $sc;
//echo $ma;
//echo $si;
//echo $hy1+$hy2;
//$hsft = mysql_fetch_array($resulthsft);
//echo $hsft[0];
 // $querym = mysql_query("SELECT * FROM u_profile WHERE Uid = '$Uid'");
// $rowb = mysql_fetch_array($querym);


//echo $Q1;
// $countea = 1;
// $tempa = $lq-4;
// $z1= '';
// $z2='';
// $dollar='$';
// $y= '1';
// $Q1='';
// $Q2='';
// $Q3='';
// $Q4='';
// $Q5='';
// $answer=array();

// for( $a = $tempa; $a<=$lq; $a++ ) {
	// if($countea==1){
		// $Q1=isset($_POST['answer'][$a]) ? $_POST['answer'][$a] : null;
	// }else if($countea==2){
		// $Q2=isset($_POST['answer'][$a]) ? $_POST['answer'][$a] : null;
	// }else if($countea==3){
		// $Q3=isset($_POST['answer'][$a]) ? $_POST['answer'][$a] : null;
	// }else if($countea==4){
		// $Q4=isset($_POST['answer'][$a]) ? $_POST['answer'][$a] : null;
	// }else{
		// $Q5=isset($_POST['answer'][$a]) ? $_POST['answer'][$a] : null;
	// }
// $countea++;

// $Q1 = isset($_POST['answer'][1]) ? $_POST['answer'][1] : null;
// $Q5 = isset($_POST['answer'][5]) ? $_POST['answer'][5] : null;
// $Q5 = isset($_POST['answer'][10]) ? $_POST['answer'][10] : null; 
// $Q5 = isset($_POST['answer'][5]) ? $_POST['answer'][5] : null
//}

 // $required = array('$Q1', '$Q2', '$Q3', '$Q4', 'Q5');

// Loop over field names, make sure each one exists and is not empty
 // $error = false;
 // foreach($required as $field) {
   // if (empty($_POST[$field])) {
     // $error = true;
   // }
 // }

 // if ($error) {
  // echo "All fields are required.";
  // header("location: Report_Building.php");
 // } else {
   // echo "Proceed...";
 


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
//{?>
               <?php 
			 // echo $Q1, $Q2, $Q3, $Q4, $Q5, $Uid; 
			 //echo $Q5;
			   // $temp = $lq-4;
			   // $s1='UPDATE u_profile SET ';
			   // $s2='';
			   // $s3="WHERE Uid = '$Uid'";
			   // $s4=';';
			   // $counter=1;
			   // $dollar='Q';
			   
			   
			   // for( $i = $temp; $i<=$lq; $i++ ) {
				   // $aa=${$dollar.$counter};
					// if($counter==5){
						//$s2.="Q".$i."="$Q".$counter."' ";
						// $s2.="Q".$i."='$aa' ";
					// }else{
						
						//echo $Q1;
					// $s2.="Q".$i."='$aa', ";
					//$s2.="Q".$i."='".$dollar."Q".$counter."', ";
					// }
					// $counter++;
		 // }
			   
			   // $sql=$s1.$s2.$s3.$s4;
				//echo $sql;
				//echo $lq;
			//	$sql = "UPDATE u_profile SET Q1='$Q1', Q2='$Q2', Q3='$Q3', Q4='$Q4', Q5='$Q5' WHERE Uid = '$Uid'" ;
											//. "VALUES ('$Q1','$Q2','$Q3','$Q4','$Q5')";
							// mysql_query($sql) ;
							// mysql_query('DROP TABLE IF EXISTS `epsychotherapist`.`TBL_question_set`');
							//header("location: Report_Building.php");
			?>
            <?php //} 
 //}?>
			
			
			
			