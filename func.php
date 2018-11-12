<?php
function Createuser(){
    global $db;
    $username = $_POST['name'];
    $password = $_POST['password']; 
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $gender= $_POST['gender'];
    $phone_num = $_POST['phone_num'];
    $emailid= $_POST['emailid'];
    
    $query = "INSERT INTO customer (username,password,fname,lname,gender,phone_num,Email_id) ";
    $query .= "VALUES ('$username ', '$password', '$fname','$lname','$gender','$phone_num','$emailid')";
    

    $result = mysqli_query($db, $query);
    if(!$result){
        die("Query Failed,". mysqli_error($db));
    }
}

function checkuser()
{
    global $db;
    $username=$_POST['Username'];
    $password= $_POST['Password'];
    $query= "SELECT Username FROM customer WHERE Username='$username' and password='$password'";
    $result = mysqli_query($db, $query);
    if(!$result){
        die("Query Failed,". mysqli_error($db));
    }
    while($row=mysqli_fetch_assoc ($result))
       {
           echo "Hi  " .$row["Username"]  ."<br>";
       }
   
}

 function restaurant($rest)
 {
     global $db;
     
     //$american= $_POST['American'];
     #echo $american;
     $query= "SELECT Restaurant_name FROM resturant WHERE cuisine_name ='$rest'";
     //$query1= "SELECT Item_name, Item_price FROM item ,resturant WHERE item.Rest_id=resturant.R_id AND Restaurant_name='$'";
     $result=mysqli_query($db,$query);
     while($row=mysqli_fetch_assoc ($result))
     {
         $res1 = $row["Restaurant_name"];#print_r($row);
         $query1= "SELECT Item_name, Item_price FROM item ,resturant WHERE item.Rest_id=resturant.R_id AND Restaurant_name='$res1'";
         echo $row["Restaurant_name"] ."<br>";
        $result1=mysqli_query($db,$query1);
        if(!$result){
            die("Query Failed,". mysqli_error($db));
            }
        while($row=mysqli_fetch_assoc ($result1))
        {
           #print_r($row);
            echo $row["Item_name"];
            echo " ";
            echo $row["Item_price"]."<br>";
        }
     }
 }
 

   function readrows() {
        global $db;
    $query = "SELECT * FROM resturant ";
    $result = mysqli_query($db, $query);
    if(!$result){
        die("Query Failed,". mysqli_error($db));
    }
      if(mysqli_num_rows($result)>0){
       while($row=mysqli_fetch_assoc ($result))
       {
           #print_r($row);
           echo "resturant_name:" .$row["resturant_name"] ."<br>";
       }
     }
   }

   function selectcuisine()
   {
       global $db;
       $restname = $_POST['restname'];
       $query = "SELECT item_name , item_price FROM Item , Returant WHERE Item.Rest_id=Resturant.R_id and Resturant.Restaurant_name= '$restname'";
   }

  function insert()
  {
      global $db;
      $rest_id=$_POST['Restid'];
      $item_id=$_POST['Item_id'];
      $item_name=$_POST['Item_name'];
      $item_price=$_POST['Item_price'];
    $query = "INSERT INTO item (Item_id,Item_name,Item_price,Rest_id) ";
    $query .= "VALUES ('$item_id ','$item_name','$item_price','$rest_id')";
       $result = mysqli_query($db, $query);
    if(!$result){
        die("Query Failed,". mysqli_error($db));
    }
  }

  function update()
  {
    global $db;
//    $username = $_POST['name'];
//    $password = $_POST['password'];
    $item_id=$_POST['Item_id'];
    $item_price=$_POST['Item_price'];
    $query ="UPDATE item set Item_price = '$item_price' where Item_id= '$item_id'";
       $result = mysqli_query($db, $query);
    if(!$result){
        die("Query Failed,". mysqli_error($db));
    }
  }

  function delete()
  {
      global $db;
    //$username = $_POST['name'];
    $rest_id=$_POST['Restid'];
    $item_id=$_POST['Item_id'];
    $item_name=$_POST['Item_name'];
    $item_price=$_POST['Item_price'];
    $query ="DELETE FROM item where Item_id= '$item_id' AND Rest_id='$rest_id'";
       $result = mysqli_query($db, $query);
    if(!$result){
        die("Query Failed,". mysqli_error($db));
    }
  }
?>
