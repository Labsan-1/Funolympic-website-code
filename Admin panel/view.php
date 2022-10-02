

<!DOCTYPE html>
<html>
  <head>
  
  </head>
  <body style="background-color:#a0daa9;">
   
  </body>
</html>



<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> </title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
    <h1 style="text-align: center;font-family:cursive; "> Welcome To Olympic VIP Live Videos Section </h1>
 <a class="btn btn-info" href="http://localhost/Funolympic">Logout To Home </a>  


</head>
<body>

		<?php
			require 'conn.php';
			
			$query = mysqli_query($conn, "SELECT * FROM `video` ORDER BY `video_id` ASC") or die(mysqli_error());
			while($fetch = mysqli_fetch_array($query)){
		?>
		<br>
			<div class="loveson">
				<video  width="100%" height="30%" controls position="center" >
					<source src="<?php echo $fetch['location']?>">
				</video>
			</div>
			</br>
		</div>
		<?php
			}
		?>
	</div>
	<div class="container">


	<style>
		
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

*{
   ont-family: 'Poppins', sans-serif;
   margin:10; padding:-10;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
   text-transform: capitalize;
}

body{

  background-repeat: no-repeat;
  background-size: cover;
   padding:0px;
   background-color:#a0daa9;
   position: 
   top:0;
   height: auto;
}


.loveson{
flex:1 1 700px;
   border-radius: 5px;
   box-shadow: 0 5px 15px rgba(0,0,0,.1);
   background-color:#a0daa9 ;
   padding:15px;
   max-width: 1200px;

   margin:100px ;
   display: flex;
   flex-wrap: wrap;
   align-items: flex-start;
   gap:5px;

}

}


		</style>
