<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
    .logo-text{
	  font-size:30px;
    padding-left:-10%;

      color: #ff0080;
      padding-top: 5px;

	  
    }
	 .nav-link1{
      color: #ff0080;
     	  
    }
    .list-customer{
      padding-left: 1100px;
    }

    .nav-link1:hover{
      color: yellow;
      text-decoration: none;
    }
    h2{
      text-align: center;
      border: 20px;
      margin-top: 10px;
      text-decoration-line: underline;
      font-family: Arial, Helvetica, sans-serif;
      color: BLACK;
      
      font-weight: bold;
    }
    .container{
		background-color:white;
      padding-top: 30px;
      text-align: center;
    }

    </style>
</head>
<body style="background-image: url(https://image.freepik.com/free-vector/modern-city-buildings_1441-3041.jpg);">

  <nav class="navbar navbar-light" style="background-color: #4646b5">

  <p class="logo-text"><b style="font-family: arial;">Banking Transfer</b><sub><small style="font-size: 30px; color: yellow;">

   
<ul class="navbar-nav">
<li class="list-customer">
<a class="nav-link1" href="index.php">Home </a>
</li>
</ul>
</nav>
        <div class="container divStyle" >
        <h2>TRANSACTION DETAILS </h2>

       <br>
       <div class="table-responsive">
    <table border="4"class="table roundedCorners tabletext table-hover table-sm table-striped table-condensed">
        <thead>
            <tr style="color:BLACK; font-style:normal">
                <th>Sender</th>
                <th>Receiver</th>
                <th> Transferred Amount</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';
			

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_array($query))
            {
        ?>
            <tr>
            <td><?php echo $rows['sender']; ?></td>
            <td><?php echo $rows['receiver']; ?></td>
            <td><?php echo $rows['credits']; ?> </td>

        <?php
            }

        ?>
        </tbody>
    </table>

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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>