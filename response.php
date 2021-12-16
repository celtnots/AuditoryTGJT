<?php
$in = file_get_contents('php://input');//file_get_contents('php://input');


$decoded = json_decode( $in, true );




$UserName =  $decoded['UserName'];


$sentenceID =  $decoded['sentenceID'];


$elapsedTime = $decoded['elapsedTime'];


$answer = $decoded['answer'];


$AnswerScore = $decoded['AnswerScore'];


$status = $decoded['status'];


$Confidence = $decoded['Confidence'];


$link = mysqli_connect("server", "username", "password") or die ("didn't connect to mysql");
mysqli_select_db($link, "globalsmalltalk") or die(mysqli_error($link));
mysqli_query($link, "INSERT INTO `errorrecognition` (`UserName`,`sentenceID`,`answer`,`elapsedTime`,`status`,`Confidence`,`score`) VALUES ('$UserName','$sentenceID','$answer','$elapsedTime','$status', '$Confidence', '$AnswerScore')");




mysqli_close($link);




?>
