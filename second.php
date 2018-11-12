
<html>
<body>
 <h1>List of restaurants</h1>
     
<form action="second.php" method="post">
<div class="user_table">
    <a href='second.php?hello=true'>Run PHP Function</a>
    <a href='#'>restaurant(); </a>
      <pre> 
        <?php
     include("config.php");
     include("func.php");
    if(isset($_POST["American"]))
     {
         #echo $_POST["American"];
        restaurant($_POST["American"]); 
       }
    if(isset($_POST["Asian"]))
     {
         #echo $_POST["American"];
      restaurant($_POST["Asian"]);
     }
     if(isset($_POST["Chinese"]))
     {
         #echo $_POST["American"];
      restaurant($_POST["Chinese"]);
     }
     ?> </pre>

    </div>
</form>

  
</body>
</html>


