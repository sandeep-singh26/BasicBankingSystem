<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Customer Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <style type="text/css">
    .logo-text, .nav-link1{
      color: #ff0080;
      
	  	  font-size:30px;
        
    }
    .list-home{
      padding-left: 1100px;
	 
    }
    .nav-link1:hover{
      color: yellow;
      text-decoration: none;
    }
    .container{
		background-color:white;
      padding-top: 30px;
      text-align: center;
    }
    .button {
      background-color: grey;
      border: none;
      color: white;
      padding: 5px 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 20px;
      margin: 4px 2px;
      border-radius: 10px;
    }
    .button:hover{
      background-color: #02c555;
      color: yellow;
    }
    .button:active{
      background-color: #02c39a;
    }
	.row{
		color:black;
		font-size:25px;
	}
  h2{
font-family: sans-serif;
color: #03045e;
background-color: pink;
font-weight: bold;
}
th{
  text-decoration: underline;
  color:black ;
}
    </style>
  


</head>
<body style="background-image: url(https://image.freepik.com/free-vector/modern-city-buildings_1441-3041.jpg);">
<?php
    require 'config.php';
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn,$query);
?>

<nav class="navbar navbar-light" style="background-color: black">

<p class="logo-text"><b style="font-family: arial;">Banking Transfer</b><sub><small style="font-size: 30px; color: yellow;">

<ul class="navbar-nav">
<li class="list-home">
  <a class="nav-link1" href="index.php">Home</a>
</li>
</ul>
</nav>
    <div class="container divStyle">
        <h2>CUSTOMER COMPLETE DETAILS </h2>
        <br>

            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table border="4"class="table roundedCorners tabletext table-hover table-sm table-striped table-condensed">
                        <thead>
                            <tr>
                            <th scope="col">Sr. no</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email Id</th>
                            <th scope="col"> Current Balance </th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php
                    while($rows=mysqli_fetch_array($result)){
                ?>
                    <tr>
                        <td><?php echo $rows['id'] ?></td>
                        <td><?php echo $rows['name']?></td>
                        <td><?php echo $rows['email']?></td>
                        <td><?php echo $rows['credits']?></td>
                        <td><a href="selectedUserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="button">Transfer Money</button></a></td>
                    </tr>
                <?php
                    }
                 ?>

                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            </div>

</div>
  <footer class="bg-dark text-white text-center p-3">
      
                  <h3>Copyright © 2021 , BankingTransfer.com</h3>
                  <h6>All Rights Reserved</h6>
                  <h6>Developed & Maintained by
                      <a class="text-warning" href="https://instagram.com/i_em_sandeep._?igshid=1xr6ihhsvilc5" target="_blank">
                          <i class="fa fa-user-circle"></i> Sandeep Singh
                      </a>
                  </h6>
              
  </footer>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>