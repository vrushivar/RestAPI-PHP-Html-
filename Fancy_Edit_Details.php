<?php
    session_start();
    $con=mysqli_connect("localhost","root","","fancy_shop");
    if(!$con)
    {
        die("failure in connection: ".mysqli_connect_error());
    }
    else
    {
        echo"welcome to succefull connection";
        $q="select * from product;";
        mysqli_query($con,$q);
        if(isset($_GET['type']) && $_GET['type']!='')
        {
            if($type=='delete')
            {
                $id=get_safe_value($con,$_GET['id']);
                $delete_sql="delete from product where Product_ID='$id'";
                mysqli_query($con,$delete_sql);
            }
        }
    }      
        //end the db connection.
?>
<html>
    <head>
        <style>
             aside.left-panel {
            background: rgb(248, 235, 235);
            height: 100vh;
            padding: 0;
            vertical-align: top;
            width: 280px;
            -webkit-box-shadow: 1px 0 20px rgba(0, 0, 0, .08);
            box-shadow: 1px 0 20px rgba(0, 0, 0, .08);
            position: fixed;
            left: 0;
            bottom: 0;
            top: 55px;
            z-index: 999
        }
        .right-panel {
        background: #f1f2f7;
        margin-left: 280px;
        margin-top: 55px
    }
            .navbar {
            background: rgb(248, 235, 235);
            border-radius: 0;
            border: none;
            display: inline-block;
            margin: 0;
            padding: 0;
            vertical-align: top
        }
            .navbar .menu-title {
            color: #41434d;
            clear: both;
            display: block;
            font-family: open sans;
            font-size: 14px;
            font-weight: 700;
            line-height: 50px;
            padding: 0;
            text-transform: uppercase;
            width: 100%
        }
            .navbar .main-menu {
            float: left;
            padding: 0;
            padding-bottom: 50px
        }
        .navbar .navbar-nav {
        float: none;
        position: relative
    }
        .button{
            margin-left:300px ;  
        }
        [type=button] {
        background-color: #69d3d3;
        border: none;
        color: white;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
        }
        </style>
    </head>
    <body>
        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">
               <div id="main-menu" class="main-menu collapse navbar-collapse">
                     <ul class="nav navbar-nav">
                        <h4 style="text-align:center">Category_Product Diagramatical illustration</h4>
                        <img src="Fancy_Flow_figimage.jpg"  width="220" height="180"><br>
                        <picture style="text-align:center">
                            
                            <!--source media="(min-width: 650px)" srcset="Fancy_Flow_figimage.jpg"-->
                        </picture>
                        <li class="menu-title">MENU</li>
                        <li> <a href="FancyShopWebsite.html">Add Parent Category </a> </li>
                        <li><a href="Fancy_Product_Page.html">ADD Product Page</a> </li>
                    </ul>
               </div>
            </nav>
        </aside>
        <div class="right-panel">
            <table  border=1, style="background-color:rgb(220,220,255)">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>quantity</th>
                        <th>Rating</th>
                        <th>Status</th>
                        <th>Reference_ID</th>
                        <th>Edit</th>
                        <th>DeletRow</th>
                    </tr>
                </thead>
                    <tbody>
                        <?php
                        $result = mysqli_query($con,$q);
                            while($row=mysqli_fetch_assoc($result))
                            {
                                echo "<br>";
                                echo "<tr>";
                                    echo"<td>".$row['Product_ID'] ."</td>";
                                    echo"<td>".$row['Product_Name']."</td>";
                                    echo"<td>".$row['Product_Price']."</td>";
                                    echo"<td>".$row['Product_qty']."</td>";
                                    echo"<td>".$row['Product_Rating']."</td>";
                                    echo"<td>".$row['Product_Status']."</td>";
                                    echo"<td>".$row['Reference_Category_ID']."</td>";
                                    echo "<td><input type=button name='edit' &id=".$row['Product_ID']." value='Edit'></a></td>;";
                                    echo "<td><input type=button name='delete' &id=".$row['Product_ID']." value='Delete'></a></td>";
                                echo"</tr>";
                            }
                        ?>
                    </tbody>
            </table> 
        </div>
    </body>
</html>