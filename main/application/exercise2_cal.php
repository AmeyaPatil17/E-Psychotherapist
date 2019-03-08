<?php
$result = shell_exec('BVC.py');
$keywords = preg_split("/[\s,]+/", $result);
// print_r($keywords);
echo '<font color="red"><h3>Result of voice analysis is showing here for debugging purpose only</h3></font>';
echo '<br>';
echo 'Arousal: '.$keywords[0];
echo '<br>';
echo 'Valence: '.$keywords[1];
echo '<br>';
echo 'Temper: '.$keywords[2];
echo '<br>';
echo 'Emotion_group: '.$keywords[3];
echo '<br>';
echo '<a href="dashboard.php">Home</a>';
?>