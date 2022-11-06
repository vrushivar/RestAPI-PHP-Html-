<div>
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
                    $id=$_POST['Pname'];
                    $name=$_POST['Pname'];
                    $Price=$_POST['Price'];
                    $q=$_POST['qty'];
                    $rat=$_POST['Rate'];
                    $ref=$_POST['R_Category_ID']
                    //query to database to insert data from textboxes by user 
                    $q="insert into parent_category values('$id','$name','Price','q','rat','ref');";
                    mysqli_query($con,$q);
               }  
        //end the db connection.
         die();
             }
</div>