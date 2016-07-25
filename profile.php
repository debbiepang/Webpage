<?php session_start(); 
header("Content-Type: text/html; charset=utf-8");?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
	<br><br><br>照片<br><br><br>---------------------------------------<br><br>
	
	 <h1>個人資料</h1>
	 
<?php
include("config.php");




if($_SESSION['acct'] != null){
	
	$acct = $_SESSION['acct'];
	
	$sql="SELECT * FROM account WHERE acct='$acct' ";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_row($result);
	

	

	echo "Name：";echo $row[3];echo"<br/>";
	echo "Gender：";echo $row[4];echo"<br/>"; 
	echo "Level：";echo $row[5];echo"<br/>";
	echo "Language：";echo $row[6];echo"<br/>"; 
	echo "Education：";echo $row[7];echo"<br/>";
   
	
        
}


	
?>
     
<br><br><br>
 <a href="#identify"onclick="location.href='identify.php'">辨識</a>
 <a href="#video"onclick="location.href='https://apc-13.iim.nctu.edu.tw:8080/demos/demotest_audio_video_simple.html'">視訊</a>
 <a href="#profile"onclick="location.href='profile.php'">個人資料</a>