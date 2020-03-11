//<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop AnimeVVB</title>
  <!-- gio hang js -->
  <script src="https://kit.fontawesome.com/326bd157c8.js" crossorigin="anonymous"></script>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="Css/shop.css" rel="stylesheet">
</head>

<body>


  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" >
    <div class="first">
       </div>
        <div class="container">
          <a class="navbar-brand" href="#"> <img src="Images/anime.jpg" alt="" style="max-height: 60px"> Vụ Văn Bùi </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="Shopvu.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>

          </li>
          <li>
            <form method="post" action="Search.php">
                <button type = “submit” name = “TÌM”> 
                Search 
                </button> <br>
              <input type = “text” giữ chỗ name = “ Nhập từ khóa tìm kiếm ” = “khóa_tìm_kiếm”> <br>

              
            </form>

            <!-- <button type="submit" style="background-color: gray"><i class="fa fa-search"></i>Search</button> <br>
               <input type="text" placeholder="" name="Search"> <br> -->
          </li>
        </ul>
        <ul >
            <li>
                <a class="nav-item" href='register/login.php' style="color:white;"> Login </a>
            </li>
            <li>
                <a class="nav-item" href='register/register.php' style="color:white;">Register</a>
                  
            </li>
          </ul>
          <br>
         
            <div class="icon" style="margin-left: 5%">
                <a href="Cart.php" ><i class="fas fa-shopping-cart" > </i> My cart</a>
          
          </div>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <div class="col-lg-3">

        <h1 class="my-4" style="color: gray">Anime Shop</h1>
        <div class="list-group">
          <a href="Category.php" class="list-group-item " style="background-color: gray; color: white;">Category</a>
          <a href="Ss.php" class="list-group-item sty" style="background-color: gray; color: white;">Type Anime</a>
        </div>
        <h1 class="my-4" style="color: gray">Movie Shop</h1>
        <div class="list-group">
          <a href="America.php" class="list-group-item" style="background-color: gray; color: white;">America</a>
          <a href="China.php" class="list-group-item" style="background-color: gray; color: white">Chinese</a>
        </div>
        <h1 class="my-4" style="color: gray">Follow</h1>
        <div class="list-group">
          <a href="https://www.facebook.com/vuhansome2" ><i class="fab fa-facebook" style=""> https://www.facebook.com/</i></a>
        </div>
      </div>

      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="Images/thay.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="Images/kirito.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="Images/tien2.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
       

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="Images/stone5.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Dr Stone</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text" style="font-size: 75%">On a fateful day, all humans were petrified by a strange light. As the millennium passed, Taiju high school student woke up, smashed the rock, and stepped out of the world.</p>
            </div>
             <div class="card-footer">
                <a href="Add.php" ><i class="fas fa-shopping-cart"> </i> Add cart</a></div> 
              </div>
          </div>
          
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="Images/sai.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">ReZero</a>
                </h4>
                <h5>$23</h5>
                <p class="card-text" style="font-size: 75%">In the movie Subaru Natsuki is a normal high school student, he is summoned to another world and saved by a beautiful girl. Then buy it to know</p> 
              </div>
              <div class="card-footer"> 
                <a href="" ><i class="fas fa-shopping-cart"> </i> Add cart</a></div>
           
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="Images/tu3.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Escape room</a>
                </h4>
                <h5>$10</h5>
                <p class="card-text" style="font-size: 75%">Chamber of Death brings 6 players to the rooms with those toughest sentences that the player's defeat will be exchanged for life, making the white mouse in a cage entertain the sick.</p>
              </div>
             <div class="card-footer"> 
                <a href="" ><i class="fas fa-shopping-cart"> </i> Add cart</a></div>
           
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="Images/ca.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"> Shark Lake</a>
                </h4>
                <h5>$13</h5>
                <p class="card-text" style="font-size: 75%">Shark Lake talks about the white shark that suddenly appeared in this ancient sea very calmly, making many people here scared. A shark hunting team was quickly formed, but it seemed that they not only faced deep sea monsters</p>
              </div>
              <div class="card-footer"> 
                <a href="" ><i class="fas fa-shopping-cart"> </i> Add cart</a></div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="Images/meli.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Nanatsu no Taizai</a>
                </h4>
                <h5>$15</h5>
                <p class="card-text" style="font-size: 75%">Because of being accused of treason, the group "Seven Deadly Sins" was exiled. Princess Elizabeth was the one who discovered the fact that the paladins were the ones who plotted to take the throne, but it was too late.
                </p>
              </div>
              <div class="card-footer"> 
                <a href="" ><i class="fas fa-shopping-cart"> </i> Add cart</a></div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="Images/the.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">The Conjuring 2</a>
                </h4>
                <h5>$20</h5>
                <p class="card-text" style="font-size: 75%">The Enfield Poltergeist continues to be based on one of 10,000 investigative records of the Warren couple. This is the most mysterious case recorded in supernatural history.</p>
              </div>
              <div class="card-footer">
                <a href="" ><i class="fas fa-shopping-cart"> </i> Add cart</a></div>
               
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark" style="max-height: 100px"> 
    <div class="container">
      <p class="m-0 text-center text-white">Address: Giao Thủy - Nam Định  <br> Phone: 0374146076 - Gmail: vudz@gmail.com -    Website: by VUVANBUI</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
