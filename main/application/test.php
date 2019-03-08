<?php
$hello = 'world';

///////////////
@mysql_connect("localhost" ,"root","");

@mysql_select_db("epsychotherapist");
$exe1 = mysql_query("SELECT * FROM `rorschach_result` WHERE Uid= '3'");
	$exe2 = mysql_fetch_array($exe1);
	$card1 = $exe2[1];
	$card2 = $exe2[2];
	$card3 = $exe2[3];
	$card4 = $exe2[4];
	$card5 = $exe2[5];
	$card6 = $exe2[6];
	$card7 = $exe2[7];
	$card8 = $exe2[8];
	$card9 = $exe2[9];
	$card10 = $exe2[10];
	 //echo $card1;
	///////////////
$result1 = shell_exec('test.py ' . $card1);
$result2= shell_exec('test.py ' . $card2);
$result3 = shell_exec('test.py ' . $card3);
$result4 = shell_exec('test.py ' . $card4);
$result5 = shell_exec('test.py ' . $card5);
$result6 = shell_exec('test.py ' . $card6);
$result7 = shell_exec('test.py ' . $card7);
$result8 = shell_exec('test.py ' . $card8);
$result9 = shell_exec('test.py ' . $card9);
$result10 = shell_exec('test.py ' . $card10);
$keywords1 = preg_split("/[\s,]+/", $result1);
$keywords2 = preg_split("/[\s,]+/", $result2);
$keywords3 = preg_split("/[\s,]+/", $result3);
$keywords4 = preg_split("/[\s,]+/", $result4);
$keywords5 = preg_split("/[\s,]+/", $result5);
$keywords6 = preg_split("/[\s,]+/", $result6);
$keywords7 = preg_split("/[\s,]+/", $result7);
$keywords8 = preg_split("/[\s,]+/", $result8);
$keywords9 = preg_split("/[\s,]+/", $result9);
$keywords10 = preg_split("/[\s,]+/", $result10);
echo '<font color="red"><h3>Result of text analysis is showing here for debugging purpose only</h3></font>';
echo '<br>';
echo 'Card 1: Emotion: '.$keywords1[0].'|| Sentiment: '.$keywords1[1];
// echo $result1;
echo '<br>';
echo 'Card 2: Emotion: '.$keywords2[0].'|| Sentiment: '.$keywords2[1];
// echo $result2;
echo '<br>';
echo 'Card 3: Emotion: '.$keywords3[0].'|| Sentiment: '.$keywords3[1];
// echo $result3;
echo '<br>';
echo 'Card 4: Emotion: '.$keywords4[0].'|| Sentiment: '.$keywords4[1];
// echo $result4;
echo '<br>';
echo 'Card 5: Emotion: '.$keywords5[0].'|| Sentiment: '.$keywords5[1];
// echo $result5;
echo '<br>';
echo 'Card 6: Emotion: '.$keywords6[0].'|| Sentiment: '.$keywords6[1];
// echo $result6;
echo '<br>';
echo 'Card 7: Emotion: '.$keywords7[0].'|| Sentiment: '.$keywords7[1];
// echo $result7;
echo '<br>';
echo 'Card 8: Emotion: '.$keywords8[0].'|| Sentiment: '.$keywords8[1];
// echo $result8;
echo '<br>';
echo 'Card 9: Emotion: '.$keywords9[0].'|| Sentiment: '.$keywords9[1];
// echo $result9;
echo '<br>';
echo 'Card 10: Emotion: '.$keywords10[0].'|| Sentiment: '.$keywords10[1];
// echo $result10;
echo '<br>';

function match11($needles, $haystack1)
{
    foreach($needles as $needle){
        if (strpos($haystack1, $needle) !== false) {
            return true;
        }
    }
    return false;
}
function match12($needles, $haystack2)
{
    foreach($needles as $needle){
        if (strpos($haystack2, $needle) !== false) {
            return true;
        }
    }
    return false;
}
function match13($needles, $haystack3)
{
    foreach($needles as $needle){
        if (strpos($haystack3, $needle) !== false) {
            return true;
        }
    }
    return false;
}
function match14($needles, $haystack4)
{
    foreach($needles as $needle){
        if (strpos($haystack4, $needle) !== false) {
            return true;
        }
    }
    return false;
}
function match15($needles, $haystack5)
{
    foreach($needles as $needle){
        if (strpos($haystack5, $needle) !== false) {
            return true;
        }
    }
    return false;
}
function match16($needles, $haystack6)
{
    foreach($needles as $needle){
        if (strpos($haystack6, $needle) !== false) {
            return true;
        }
    }
    return false;
}
function match17($needles, $haystack7)
{
    foreach($needles as $needle){
        if (strpos($haystack7, $needle) !== false) {
            return true;
        }
    }
    return false;
}
function match18($needles, $haystack8)
{
    foreach($needles as $needle){
        if (strpos($haystack8, $needle) !== false) {
            return true;
        }
    }
    return false;
}
function match19($needles, $haystack9)
{
    foreach($needles as $needle){
        if (strpos($haystack9, $needle) !== false) {
            return true;
        }
    }
    return false;
}
function match110($needles, $haystack10)
{
    foreach($needles as $needle){
        if (strpos($haystack10, $needle) !== false) {
            return true;
        }
    }
    return false;
}
/////////////////////////////////////////////////////////////////////////////////
function match21($needles2, $haystack1)
{
    foreach($needles2 as $needle){
        if (strpos($haystack1, $needle) !== false) {
            return true;
        }
    }
    return false;
}
function match22($needles2, $haystack2)
{
    foreach($needles2 as $needle){
        if (strpos($haystack2, $needle) !== false) {
            return true;
        }
    }
    return false;
}
function match23($needles2, $haystack3)
{
    foreach($needles2 as $needle){
        if (strpos($haystack3, $needle) !== false) {
            return true;
        }
    }
    return false;
}
function match24($needles2, $haystack4)
{
    foreach($needles2 as $needle){
        if (strpos($haystack4, $needle) !== false) {
            return true;
        }
    }
    return false;
}
function match25($needles2, $haystack5)
{
    foreach($needles2 as $needle){
        if (strpos($haystack5, $needle) !== false) {
            return true;
        }
    }
    return false;
}
function match26($needles2, $haystack6)
{
    foreach($needles2 as $needle){
        if (strpos($haystack6, $needle) !== false) {
            return true;
        }
    }
    return false;
}
function match27($needles2, $haystack7)
{
    foreach($needles2 as $needle){
        if (strpos($haystack7, $needle) !== false) {
            return true;
        }
    }
    return false;
}
function match28($needles2, $haystack8)
{
    foreach($needles2 as $needle){
        if (strpos($haystack8, $needle) !== false) {
            return true;
        }
    }
    return false;
}
function match29($needles2, $haystack9)
{
    foreach($needles2 as $needle){
        if (strpos($haystack9, $needle) !== false) {
            return true;
        }
    }
    return false;
}
function match210($needles2, $haystack10)
{
    foreach($needles2 as $needle){
        if (strpos($haystack10, $needle) !== false) {
            return true;
        }
    }
    return false;
}
//////////////////////////////////////////////////////////////////////////////////
function match41($needles3, $haystack1)
{
    foreach($needles3 as $needle){
        if (strpos($haystack1, $needle) !== false) {
            return true;
        }
    }
    return false;
}
function match42($needles3, $haystack2)
{
    foreach($needles3 as $needle){
        if (strpos($haystack2, $needle) !== false) {
            return true;
        }
    }
    return false;
}
function match43($needles3, $haystack3)
{
    foreach($needles3 as $needle){
        if (strpos($haystack3, $needle) !== false) {
            return true;
        }
    }
    return false;
}
function match44($needles3, $haystack4)
{
    foreach($needles3 as $needle){
        if (strpos($haystack4, $needle) !== false) {
            return true;
        }
    }
    return false;
}
function match45($needles3, $haystack5)
{
    foreach($needles3 as $needle){
        if (strpos($haystack5, $needle) !== false) {
            return true;
        }
    }
    return false;
}
function match46($needles3, $haystack6)
{
    foreach($needles3 as $needle){
        if (strpos($haystack6, $needle) !== false) {
            return true;
        }
    }
    return false;
}
function match47($needles3, $haystack7)
{
    foreach($needles3 as $needle){
        if (strpos($haystack7, $needle) !== false) {
            return true;
        }
    }
    return false;
}
function match48($needles3, $haystack8)
{
    foreach($needles3 as $needle){
        if (strpos($haystack8, $needle) !== false) {
            return true;
        }
    }
    return false;
}
function match49($needles3, $haystack9)
{
    foreach($needles3 as $needle){
        if (strpos($haystack9, $needle) !== false) {
            return true;
        }
    }
    return false;
}
function match410($needles3, $haystack10)
{
    foreach($needles3 as $needle){
        if (strpos($haystack10, $needle) !== false) {
            return true;
        }
    }
    return false;
}
///////////////////////////////////////////////////////////////////////////////////
function match31($needles3, $haystack1)
{
	$array2 = array();
    foreach($needles3 as $needle){
        if (strpos($haystack1, $needle) !== false) {
			$array2[] = $needle;
            
        }
    }
	echo 'Uncommon words found in card 1';
	echo '<br>';
	$i = 0;
foreach($array2 as $value){
    ${'something'.$i} = $value;
	echo ${'something'.$i};
	echo '<br>';
    $i++;
    }
}
function match32($needles3, $haystack2)
{
	$array2 = array();
    foreach($needles3 as $needle){
        if (strpos($haystack2, $needle) !== false) {
			$array2[] = $needle;
            
        }
    }
	echo 'Uncommon words found in card 2';
	echo '<br>';
	$i = 0;
foreach($array2 as $value){
    ${'something'.$i} = $value;
	echo ${'something'.$i};
	echo '<br>';
    $i++;
    }
}
function match33($needles3, $haystack3)
{
	$array2 = array();
    foreach($needles3 as $needle){
        if (strpos($haystack3, $needle) !== false) {
			$array2[] = $needle;
            
        }
    }
	echo 'Uncommon words found in card 3';
	echo '<br>';
	$i = 0;
foreach($array2 as $value){
    ${'something'.$i} = $value;
	echo ${'something'.$i};
	echo '<br>';
    $i++;
    }
}
function match34($needles3, $haystack4)
{
	$array2 = array();
    foreach($needles3 as $needle){
        if (strpos($haystack4, $needle) !== false) {
			$array2[] = $needle;
            
        }
    }
	echo 'Uncommon words found in card 4';
	echo '<br>';
	$i = 0;
foreach($array2 as $value){
    ${'something'.$i} = $value;
	echo ${'something'.$i};
	echo '<br>';
    $i++;
    }
}
function match35($needles3, $haystack5)
{
	$array2 = array();
    foreach($needles3 as $needle){
        if (strpos($haystack5, $needle) !== false) {
			$array2[] = $needle;
            
        }
    }
	echo 'Uncommon words found in card 5';
	echo '<br>';
	$i = 0;
foreach($array2 as $value){
    ${'something'.$i} = $value;
	echo ${'something'.$i};
	echo '<br>';
    $i++;
    }
}
function match36($needles3, $haystack6)
{
	$array2 = array();
    foreach($needles3 as $needle){
        if (strpos($haystack6, $needle) !== false) {
			$array2[] = $needle;
            
        }
    }
	echo 'Uncommon words found in card 6';
	echo '<br>';
	$i = 0;
foreach($array2 as $value){
    ${'something'.$i} = $value;
	echo ${'something'.$i};
	echo '<br>';
    $i++;
    }
}
function match37($needles3, $haystack7)
{
	$array2 = array();
    foreach($needles3 as $needle){
        if (strpos($haystack7, $needle) !== false) {
			$array2[] = $needle;
            
        }
    }
	echo 'Uncommon words found in card 7';
	echo '<br>';
	$i = 0;
foreach($array2 as $value){
    ${'something'.$i} = $value;
	echo ${'something'.$i};
	echo '<br>';
    $i++;
    }
}
function match38($needles3, $haystack8)
{
	$array2 = array();
    foreach($needles3 as $needle){
        if (strpos($haystack8, $needle) !== false) {
			$array2[] = $needle;
            
        }
    }
	echo 'Uncommon words found in card 8';
	echo '<br>';
	$i = 0;
foreach($array2 as $value){
    ${'something'.$i} = $value;
	echo ${'something'.$i};
	echo '<br>';
    $i++;
    }
}
function match39($needles3, $haystack9)
{
	$array2 = array();
    foreach($needles3 as $needle){
        if (strpos($haystack9, $needle) !== false) {
			$array2[] = $needle;
            
        }
    }
	echo 'Uncommon words found in card 9';
	echo '<br>';
	$i = 0;
foreach($array2 as $value){
    ${'something'.$i} = $value;
	echo ${'something'.$i};
	echo '<br>';
    $i++;
    }
}
function match310($needles3, $haystack10)
{
	$array2 = array();
    foreach($needles3 as $needle){
        if (strpos($haystack10, $needle) !== false) {
			$array2[] = $needle;
            
        }
    }
	echo 'Uncommon words found in card 10';
	echo '<br>';
	$i = 0;
foreach($array2 as $value){
    ${'something'.$i} = $value;
	echo ${'something'.$i};
	echo '<br>';
    $i++;
    }
}
//////////////////////////////////////////////////////////////////////////////////////
$needles = array('boob', 'boobs', 'fuck', 'dick', 'nude', 'sexy', 'banging', 'boning', 'jerking', 'fucking', 'naked', 'orgy', 'vagina', 'penis', 'shithole', 'pussy', 'sexual');
$needles2 = array('bat', 'butterfly', 'moth', 'cave entrance', 'clowns', 'ribbon', 'bow-tie', 'stomach', 'esophagus', 'boat', 'submarine', 'mushroom cloud', 'goatees', 'rib cage', 'christmas tree', 'lions', 'pigs', 'bears', 'Fire', 'smoke', 'explosion', 'map', 'flower', 'anatomy', 'Sea life', 'spiders', 'crabs', 'caterpillars');
$needles3 = array('mask', 'animal face', 'jack o lantern', 'monster', 'scissors', 'crocodile', 'gossips', 'girls fighting', 'witches', 'men fighting', 'face of an animal');
$haystack1 = $card1;
$haystack2 = $card2;
$haystack3 = $card3;
$haystack4 = $card4;
$haystack5 = $card5;
$haystack6 = $card6;
$haystack7 = $card7;
$haystack8 = $card8;
$haystack9 = $card9;
$haystack10 = $card10;
/////////////////////////////////////////////////////////////////////
if(match11($needles, $haystack1)){

   echo "sexual words found in card 1<br>";
}
if(match12($needles, $haystack2)){

   echo "sexual words found in card 2<br>";
}
if(match13($needles, $haystack3)){

   echo "sexual words found in card 3<br>";
}
if(match14($needles, $haystack4)){

   echo "sexual words found in card 4<br>";
}
if(match15($needles, $haystack5)){

   echo "sexual words found in card 5<br>";
}
if(match16($needles, $haystack6)){

   echo "sexual words found in card 6<br>";
}
if(match17($needles, $haystack7)){

   echo "sexual words found in card 7<br>";
}
if(match18($needles, $haystack8)){

   echo "sexual words found in card 8<br>";
}
if(match19($needles, $haystack9)){

   echo "sexual words found in card 9<br>";
}
if(match110($needles, $haystack10)){

   echo "sexual words found in card 10<br>";
}

//////////////////////////////////////////////////////////////////
if(match21($needles2, $haystack1)){

   echo "conman words found in card 1<br>";
}
if(match22($needles2, $haystack2)){

   echo "conman words found in card 2<br>";
}
if(match23($needles2, $haystack3)){

   echo "conman words found in card 3<br>";
}
if(match24($needles2, $haystack4)){

   echo "conman words found in card 4<br>";
}
if(match25($needles2, $haystack5)){

   echo "conman words found in card 5<br>";
}
if(match26($needles2, $haystack6)){

   echo "conman words found in card 6<br>";
}
if(match27($needles2, $haystack7)){

   echo "conman words found in card 7<br>";
}
if(match28($needles2, $haystack8)){

   echo "conman words found in card 8<br>";
}
if(match29($needles2, $haystack9)){

   echo "conman words found in card 9<br>";
}
if(match210($needles2, $haystack10)){

   echo "conman words found in card 10<br>";
}
/////////////////////////////////////////////////////////////////////
if(match41($needles3, $haystack1)){
echo match31($needles3, $haystack1);
}
if(match42($needles3, $haystack2)){
echo match32($needles3, $haystack2);
}
if(match43($needles3, $haystack3)){
echo match33($needles3, $haystack3);
}
if(match44($needles3, $haystack4)){
echo match34($needles3, $haystack4);
}
if(match45($needles3, $haystack5)){
echo match35($needles3, $haystack5);
}
if(match46($needles3, $haystack6)){
echo match36($needles3, $haystack6);
}
if(match47($needles3, $haystack7)){
echo match37($needles3, $haystack7);
}
if(match48($needles3, $haystack8)){
echo match38($needles3, $haystack8);
}
if(match49($needles3, $haystack9)){
echo match39($needles3, $haystack9);
}
if(match410($needles3, $haystack10)){
echo match310($needles3, $haystack10);
}
/////////////////////////////////////////////////////////////////////
echo '<a href="dashboard.php">Home</a>';

?>