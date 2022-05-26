<?php
$sname="localhost";
$uname="root";
$password="";
$dbname="project";
$con=mysqli_connect($sname,$uname,$password,$dbname);
if(isset($_POST['detail']))
{
	$name=$_POST["username"];
  $mail=$_POST["email"];
  $org=$_POST["cname"];
  $summary=$_POST["sum"];
  $r="";
  $box=$_POST["interests"];
  foreach($box as $b)
  {$r.=$b." ";}
  $linkedin=$_POST["link"];
  $facebook=$_POST["fb"];
  $other=$_POST["other"];
  $sql="insert into details (username,email,collegename,summary,interests,linkedin,facebook,other) values('$name','$mail','$org','$summary','$r','$linkedin','$facebook','$other')";
if(mysqli_query($con,$sql))
   {
    echo "<script>alert('Congratulations!!! your data is saved')</script>";
   }
  else
  {echo "error:".mysqli_error($con); }
}
   echo 'your profile url is : <a href="read.php">'."https://".'.'.$name.'.'."com".'</a>';