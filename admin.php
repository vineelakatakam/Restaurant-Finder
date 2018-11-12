<?php include("config.php");
      include("func.php");
       
      if(isset($_POST['add']) )
     {
          insert();
           echo " <script  type='text/javascript' >
          alert('Insert successful');
          </script> ";
      } 

      if(isset($_POST['del']) )
     {
          delete();
            echo " <script  type='text/javascript' >
          alert('Delete successful');
          </script> ";
      }
       
      if(isset($_POST['update']) )
     {
          update();
            echo " <script  type='text/javascript' >
          alert('Update successful');
          </script> ";
      }
?>

<!DOCTYPE html>
<html>
<head>
  <link rel = "stylesheet" type="text/css" href="admin.css">
</head>
<body>
  <h2>Restaraunt details by admin</h2>
<div class="Admin">
  <form action="admin.php" method="post">

    
    <label for="rest name">Rest id</label>
    <input type= "text" id="rest name" name="Restid" placeholder="Your Restaraunt Id."><br>

    <label for="Item id">Id of item</label>
    <input type="text" id="item id" name="Item_id" placeholder="Item id of Restaraunt"><br>
    
    <label for="Item Name">Item Name</label>
    <input type="text" id="Item Name" name="Item_name" placeholder="Item Name"><br>

    <label for="price">Item price</label>
    <input type="text" id="Item price" name="Item_price" placeholder="Item price"><br>

    <input type="submit" value="Add" name="add"><br>
    <input type="submit" value="Delete" name="del"> 
     <input type="submit" value="Update" name="update">
  </form>
</div>
</body>
</html>
