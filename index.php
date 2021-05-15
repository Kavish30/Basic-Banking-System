<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
    
  </head>

  <body style="background-color: #501f3d">
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-0">
              <div class="col-sm-10 col-md" style="background-color: #501f3d">
                <div class="heading text-center my-5">
                  <h3 style="color: #D2691E">Welcome to</h3>
                  <h1 style="color: #D2691E">SPARKS BANK</h1>
                </div>
              </div>
              <div class="col-sm-10 col-md img text-center py-5" style="background-color: #501f3d">
                <h1 style="color: #D2691E">Basic Banking System</h1>
                
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user.png" class="img-fluid" width="200" height="150">
                    <br>
                    <a href="createuser.php"><button class="button"  style="background-color: #D2691E" onMouseOver="this.style.color='indigo'"onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:150px;">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/money.png" class="img-fluid" width="200" height="150">
                    <br>
                    <a href="transfermoney.php"><button class="button"  style="background-color: #D2691E" onMouseOver="this.style.color='indigo'"onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:150px;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.png" class="img-fluid" width="200" height="150">
                    <br>
                    <a href="transactionhistory.php"><button class="button"  style="background-color: #D2691E" onMouseOver="this.style.color='indigo'"onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:150px;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2" style="background-color: #501f3d">
        <p>&copy 2021. Made by <b>KAJAL VISHWAKARMA</b> <br> The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>