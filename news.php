<?php  
 $connect = mysqli_connect("localhost", "root", "", "news");  
 if(isset($_POST["submit_login"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["file"]["tmp_name"])); 
      $inputtitle = mysqli_escape_string($connect,$_POST["title"]);
      $inputdescription = mysqli_escape_string($connect,$_POST["description"]); 

      $query = "INSERT INTO tbl_images(name,title,description) VALUES ('$file','$inputtitle','$inputdescription')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("News Inserted into Database")</script>';  
      }  
 }  
 ?>  
<!DOCTYPE html>
<html>
<head>
	<title>University of Michigan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="CSS/login.css">
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body >
	<header class="header">
		<table><tr>
			<div>
			<td><img src="images/michiganLogo.png" style="width:50px;height:50px;"></td>
			<td><h1 style = "color: red;font-size: 150%;">University of Michigan</h1></td></div>
			<div class="login"><a href="index.php" style="font-size: 20px;color: white;"> HomePage</a>
            </div>
		</tr></table>
	</header>

	<br><br>
	<center>
	<div class="form">
	<form id="myForm" action="news.php" method="post" enctype="multipart/form-data">
	<h2 style = "color: black;text-align: center ; font-size: 250%;">Add News</h2>
	<table style="background-color: White">	
	<tr><th>Image:</th><td><input type="file" name="file" id="file"  required></td></tr>	
	<tr><th>Title:</th><td><input type="text" name="title" id="title" placeholder="Enter News Title" required></td></tr>		
    <tr><th>Description:</th><td><textarea name="description" id="description" placeholder="Enter News Description" required></textarea></td></tr>
	</table>
	<br>
	<button type="submit" name="submit_login" style="background-color: lightBlue;text-align: center; font-size: 20px;width:200px;margin-left: 25px;">continue</button><br><br>
	</form>
	<h>Do you want to delete news?</h><br>
	<button type="submit" onclick="window.location.href='delete.php'" style="background-color: Red; font-size: 20px; width:200px">Delete</button><br><br>
	<h>Do you want to update news?</h><br>
	<button type="submit" onclick="window.location.href='update.php'" style="background-color: Red; font-size: 20px; width:200px">Update</button><br>
	</div>
	</center>
	<div style="height: 125px;"></div>
	 <footer class="footer">
        <table><tr><div>
        <td>
            <img src="images/footerimage.jpg" style=" width:80px;height: 80px;">
        </td>
        <td>
            <h5 style="color: white;">© 2019 The Regents of the University of Michigan<br> 500 S. State Street, Ann Arbor, MI 48109 USA<br></h5>
        </td>
        <td>
            <address>
            <a href="tel:9954822536" style="color: White;"><img src="images/phone.png" style="width:15px;height: 15px;">: 9954822536</a><br><br>
            <a href="https://bit.ly/2tRzDj5" style="color: White;"><img src="images/mail.jpg" style="width:15px;height: 15px;">: rajatstms@gmail.com</a><br></address>
        </td>
        </div></tr>
        </table>
    </footer>

</body>
</html>