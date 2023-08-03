
<?php

session_start();

include("conn.php"); 


$username=$_SESSION['name'];
?>


<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<link type="text/css" rel="stylesheet" href="css/top.css"/>
<link type="text/css" rel="stylesheet" href="css/blog.css"/>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="js/top.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.min.js"></script>
<link href="style.css" rel="stylesheet"/>
<!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<style>
		
		hr { 

    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;

    border: 1px solid cornflowerblue;
			
			
			
} 
		#post{
			
			text-align: center;

		}
		#head{
			background-color: cornflowerblue;
			color: white;
		}

	#head2{
text-align: right;
		}
		#img{
			height: 100px;
			width: 100px;
			border-radius: 100px;
			border: 1px solid cornflowerblue;
			color: darkred;
		}
		
		#pro3{
			text-align: right;
			color: darkred;
		}
		 input[type=submit], input[type=reset] {
    		background-color:green;
    		border: 1px solid black;
    		color: white;
   			height: 30px;
    		text-decoration: none;
    		margin: 4px 2px;
    		cursor: pointer;
			 border-radius: 8px;
}
		input[type=text] {
    
    		border: 2px solid cornflowerblue;
    
  
    		text-decoration: none;
    		margin: 4px 2px;
    		cursor: pointer;
			border-radius: 5px;
}
	</style>

</head>
<body style="background-image: url('image/wood.jpg'); background-size: cover; background-position: center; background-attachment: fixed;">


	<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-double-up"></i></button>



<div class="container-fluid">
	
	<div id="head" class="row">
		
		
	<div class="col-xs-6"><h2>E-Commerce Blog</h2></div>
    <div id="head2" class="col-xs-6"><h3><?php echo "$username"  ?></h3></div>
	




	</div>
    <br>
	
	
	
	
	
	
	
	
	<div id="profile" class="row">
		
		
	<div class="col-xs-2"><?php	
		      $username=$_SESSION['name'];

		       $sql = "SELECT 	* FROM signup where name='$username'";
              $result = $conn->query($sql);

               if ($result->num_rows > 0) {
                // output data of each row
               while($row = $result->fetch_assoc()) {
		       $location= $row["image"];
              echo "<img id='img' src='$location'>";
              }
             } else {
            echo "0 results";
           }
          $conn->close();
             ?></div>
    <div id="pro2" class="col-xs-2">
		<?php



                 include("conn.php"); 


           $username=$_SESSION['name'];


           if(isset($_POST['submit']))

               {
	$name=$_FILES['myfile']['name'];
	$tmp_name=$_FILES['myfile']['tmp_name'];
	
	
	
	if($name)
	{
	$location="image/$name";
    move_uploaded_file($tmp_name,$location);	
		
	$query=mysqli_query($conn,"UPDATE signup SET image='$location' WHERE name='$username'");
		
		
		header("Location:home.php");
		
	}
	else 
		die("Please select a file");
}

 

echo "<br>";
echo "

<form action='home.php' method='post' enctype='multipart/form-data'>
	
<input type='file' name='myfile'>
<input type='submit' name='submit' value='Change Your Photo'>
</form>
";
?></div>
	

		<div id="pro3" class="col-xs-8"><h3><a href="logout.php">LogOut</a></h3></div>


	</div>
    <hr>

<div id="post" class="row">
		

	<div class="col-xs-12">
		<form method="post" action="post.php" >
			<textarea name="title" placeholder="    Title...." rows="3" cols="90" maxlength="20" minlength="6" required style="border-radius: 10px"></textarea><br>
			<textarea name="des" placeholder="Describe..."  rows="7" cols="90" maxlength="500" minlength="10" required style="border-radius: 10px"> </textarea><br>
			
			<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>

			<div class="g-recaptcha" data-sitekey="6LfQ0JMaAAAAAEiTGHWWq2dIz5e_QnYOfuAPhsbU" style="display: flex; align-items: center; justify-content: center;">
			</div>


			<input type="password" name="p" placeholder="Enter Admin Password"><br>

			<input name="submit" type="submit" value="Post" style="width:300px; ">
		
		</form>
	
	</div>
	
    
</div>
	<hr>


	
    <div id="body" class="row">
		

	<div class="col-xs-12"><?php	$sql = "SELECT 	* FROM posts ORDER BY id desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	

            

        echo   "<b>"." " .$row["title"]."</b>"."<br><br>". $row["post"]."<br>"."<i>Posted By--</i><br>"."<b>".$row["name"]." <br><br></b>"."<b><br>".$row["time"]."</b>"  ;
		
		
		echo"<hr>";
        echo "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?></div>

	</div>
	</div>










	<div id="fb-root" style="display: flex; align-items: center; justify-content: center;"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="YcOToFF8"></script>
	<!--fb cmment plugin-->
	<div style="display: flex; align-items: center; justify-content: center;" class="fb-comments" data-href="http://localhost/project/Blog/home.php" data-width="800" data-numposts="4"></div>

	


</body>
</html>