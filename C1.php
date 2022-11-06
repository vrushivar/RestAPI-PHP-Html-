
<!---->
<?php
     session_start();
    $con=mysqli_connect("localhost","root","","fancy_shop");
    if(!$con)
    {
        die("failure in connection: ".mysqli_connect_error());
    }
    else{
         echo"welcome to succefull connection";
        if(isset($_POST['submit']))
        {   
                     echo"just cheking loop";
                     $id=$_POST['P_Category_ID'];
                     $name=$_POST['P_Category_Name'];
                     // parent status is yes no type if no parent then no parent id present in database.
                     $ps=$_POST['P_status'];
                     $pi=$_POST['P_ID'];
                     //query to database to insert data from textboxes by user 
                     $q="insert into parent_category values('$id','$name','$ps','$pi');";
                     mysqli_query($con,$q);
                     header("location: FancyShopWbsite.html");
        }  
        //end the db connection.
        die();
     }
?>