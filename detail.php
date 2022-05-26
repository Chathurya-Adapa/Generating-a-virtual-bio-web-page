<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Details</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Details</h2>
  </div>
	
  <form method="post" action="table1.php" >
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" placeholder="provide a nome to be displayed on protofolio" required>
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" placeholder="email for communication" required>
  	</div>
  	<div class="input-group">
  	  <label>Organization</label>
  	  <input type="txt" name="cname" required>
  	</div>
  	<div class="input-group">
  	  <label>summary</label>
  	  <input type="txt" name="sum" placeholder="about you" required>
  	</div>
        
       <div>
  	<div class="input-group">
  	  <label>Linked In</label>
  	  <input type="txt" name="link" required >
  	</div>
</div>
  	<div class="input-group">
  	  <label>facebook</label>
  	  <input type="txt" name="fb" required >
  	</div>
 <div class="input-group">
         <label>interests - to select multiple use ctrl+select</label>
        <select name="interests[]"multiple style="width:100px;height:80px">
        <option id="one"  />C</option>
        <option id="two" />java</option>
        <option id="three"  />python</option>
        <option id="four" />c++</option>
        <option id="five"  />front-end development</option>
        <option id="six" />Back-end development</option>
        <option id="seven" />programming</option>
        <option id="eight" />marketing</option>
        <option id="nine" />start up</option>
        <option id="ten" />other</option>
        </div>
  	<div class="input-group">
  	  <label>other</label>
  	  <input type="txt" name="other" placeholder="other" required>
  	</div>

          
      

  	<div class="input-group">
  	  <button type="submit" class="btn" name="detail">submit</button>
  	</div>
  	
  </form>
</body>
</html>