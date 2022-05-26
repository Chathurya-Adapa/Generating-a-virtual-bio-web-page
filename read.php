<!DOCTYPE html>
<html>
<head>
<title>VIRTUAL BIO PAGE</title>
<meta content="noindex, nofollow" name="robots">
 <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body style="background-color:brown;" >

<?php
 // Establishing Connection with Server
$db = mysqli_connect("localhost","root","","project");
$query = mysqli_query($db,"SELECT * FROM details ORDER BY id DESC LIMIT 1;");
?>
</div>
<?php
while ($row1 = mysqli_fetch_array($query)) {
?>
<div class="form">
 <table border="3" style="border-collapse:collapse;width:70%;margin-left:15%;margin-right:15%;border:0;" cellpadding="5"  >
            <thead>
        <caption  style="text-align:center;font-size:30px;color:white">
          ABOUT ME
        </caption>
             </thead>
       <tbody >
          <tr align="center"> <td allign="center;">
                  <span style="font-size:20px" ><b>Name:<i style="font-size:30px"><br><?php echo $row1['username']; ?></i> </b>  </span></tr></td>
 <tr align="center"> <td allign="center;">
                     <span style="font-size:20px"><b>E-mail: <i style="font-size:30px"><br> <?php echo $row1['email']; ?></i> </b></span></tr></td>
 <tr align="center"> <td allign="center;">
                      <span style="font-size:20px" ><b>Organization: <i style="font-size:30px"><br><?php echo $row1['collegename']; ?></i> </b></span></tr></td>
 <tr align="center"> <td allign="center;">
                       <span style="font-size:20px" ><b>About me:<i style="font-size:30px"><br><?php echo $row1['summary']; ?></i> </b></span></tr></td>
 <tr align="center"> <td allign="center;">
                       <span style="font-size:20px"><b>Interests:<i style="font-size:30px"><br> <?php echo $row1['interests']; ?></i> </b></span></tr></td>
 <tr align="center"> <td allign="center;">
                      <span style="font-size:20px" ><b>Linkedin:<i style="font-size:30px"><br><?php echo $row1['linkedin']; ?></i> </b></span></tr></td>
 <tr align="center"> <td allign="center;">
                     <span style="font-size:20px" ><b>Facebook:<i style="font-size:30px"><br> <?php echo $row1['facebook']; ?> </i></b></span></tr></td>
 <tr align="center"> <td allign="center;">
                      <span style="font-size:20px"><b>More about me:<i style="font-size:30px"><br> <?php echo $row1['other']; ?></i></b> </span></tr></td>
</div>
<?php
}

?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>

</body>
</html>