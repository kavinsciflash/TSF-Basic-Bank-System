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
  <body>
  <?php
  include 'navbar.php';
  ?>
  <div class="container-fluid" style="background:linear-gradient(blue,whitesmoke);">
      <!-- Introduction section -->
            <div class="row intro py-5 mt-0">
              <div class="col-sm-6 col-md">
                <div class="heading text-center py-5 my-5" >
                  <h3 style="color:#1F51FF;">Welcome to</h3>
                  <h1 style="color:#1F51FF;">KAVIN'S BANK</h1>
                  <p class="text-secondary">Thanks for choosing our bank. Make the transaction with easy way..</p>
                
                  <div class="col-sm-6 col-md img text-center">
                  <img src="img/bank1.svg" class="img-fluid" style="width: 400px;">
                  <figure><button class="btn kno">Know more</button></figure>
                  </div>
                </div>
              </div>
           </div>

      <!-- Activity section -->
            <div class="row activity text-center py-5">
                  <div class="col-md act">
                    <br>
                    <img src="img/trans.png" height= "70%" width="50%">
                    <br><br>
                    <a href="transfermoney.php"><button class="btn">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <br>
                    <img src="img/history.png" height= "70%" width="50%">
                    <br><br>
                    <a href="customerhistory.php"><button class="btn">Transaction History</button></a>
                  </div>
            </div>
          </div>
      <footer class="text-center py-2">
        <p><span style="color:#52006A;">&copy 2021. Created by </span><span style="color:#52006A;"><b><spanstyle="color:blue;">Mr.kavinprasanth</span></b> <br></p>
      </footer>
      
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
