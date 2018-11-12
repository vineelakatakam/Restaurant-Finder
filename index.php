
<?php include("config.php");
      include("func.php");
       
      if(isset($_POST['submit']) )
     {
          checkuser();
      }
?>
<!DOCTYPE>
<html lang="en">
<head>

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style type="text/css">
    h1{
    	text-align: center
    }
    form{
    	text-align: right;
    }

    .btn-group{
    	margin: auto;
    }
	</style>
	<title>Cusinator</title>
</head>
<body>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    <h1> Select Cuisine </h1>

    <div class="login">
    	<form action="index.php" method="post">
    		Username: <input type="text" name="Username"><br>
    		Password: <input type="password" name="Password"><br>
    		Admin? <input type="checkbox" name="Admin"><br>
    		<input type="submit" value="Submit" name="submit">
         </form>

    </div>

	<div class="container" role="group" aria-label="CuisineButtons">
		<!-- <form> -->
		<div class="container">
            <form action="second.php" method="post">
                <input type="submit" class="btn btn-secondary" name="American" value="American" >
			<input type="button" class="btn btn-secondary" name="Asian" value="Asian" >
            <input type="submit" class="btn btn-secondary" name="Chinese" value="Chinese" >
            </form>
	</div>
    </div>
  
</body>

</html>
