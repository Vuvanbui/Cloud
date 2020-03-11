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
   <script src="js/jquery-1.11.1.min.js"></script>
   <link rel="stylesheet" href="Css/text.css">

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
                <a class="nav-item" href='login.php' style="color:white;"> Login </a>
            </li>
            <li>
                <a class="nav-item" href='register.php' style="color:white;">Register</a>
                  
            </li>
          </ul>
          <br>
         
            <div class="icon" style="margin-left: 5%">
                <a href="" ><i class="fas fa-shopping-cart" > </i> My cart</a>
          
          </div>
      </div>
    </div>
  </nav>

<div style="padding: 10px"><h1 style="text-align: center">My cart</h1></div>
       
<div class="container" > 

 <table id="cart" class="table table-hover table-condensed"> 
  <thead> 
   <tr> 
    <th style="width:50%">Name Product</th> 
    <th style="width:10%">Price</th> 
    <th style="width:8%">Quantum</th> 
    <th style="width:22%" class="text-center">Total</th> 
    <th style="width:10%"> </th> 
   </tr> 
  </thead> 
  <tbody><tr> 
   <td data-th="Product"> 
    <div class="row"> 
     <div class="col-sm-2 hidden-xs"><img src="Images/meli.png" alt="Sản phẩm 1" class="img-responsive" width="100">
     </div> 
     <div class="col-sm-10"> 
      <h4 class="nomargin" style="text-align: center">Nanatsu no Taizai</h4> 
      <p></p> 
     </div> 
    </div> 
   </td> 
   <td data-th="Price">$15</td> 
   <td data-th="Quantity"><input class="form-control text-center" value="1" type="number">
   </td> 
   <td data-th="Subtotal" class="text-center">$15</td> 
   <td class="actions" data-th="">
    <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
    </button> 
    <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>
    </button>
   </td> 
  </tr> 
  <tr> 
   <td data-th="Product"> 
    <div class="row"> 
     <div class="col-sm-2 hidden-xs"><img src="Images/tien2.jpg" alt="Sản phẩm 1" class="img-responsive" width="100">
     </div> 
     <div class="col-sm-10"> 
      <h4 class="nomargin" style="text-align: center">Dark Fairy</h4> 
      <p></p> 
     </div> 
    </div> 
   </td> 
   <td data-th="Price">$20</td> 
   <td data-th="Quantity"><input class="form-control text-center" value="1" type="number">
   </td> 
   <td data-th="Subtotal" class="text-center">$20</td> 
   <td class="actions" data-th="">
    <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
    </button> 
    <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>
    </button>
   </td> 
  </tr> 
  <tr> 
   <td data-th="Product"> 
    <div class="row"> 
     <div class="col-sm-2 hidden-xs"><img src="Images/sai.jpg" alt="Sản phẩm 1" class="img-responsive" width="100">
     </div> 
     <div class="col-sm-10"> 
      <h4 class="nomargin" style="text-align: center">One Pucnh Man</h4> 
      <p></p> 
     </div> 
    </div> 
   </td> 
   <td data-th="Price">$20</td> 
   <td data-th="Quantity"><input class="form-control text-center" value="1" type="number">
   </td> 
   <td data-th="Subtotal" class="text-center">$20</td> 
   <td class="actions" data-th="">
    <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
    </button> 
    <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>
    </button>
   </td> 
  </tr> 
  <tr> 
   <td data-th="Product"> 
    <div class="row"> 
     <div class="col-sm-2 hidden-xs"><img src="Images/Konosuba.jpg" alt="Sản phẩm 1" class="img-responsive" width="100">
     </div> 
     <div class="col-sm-10"> 
      <h4 class="nomargin" style="text-align: center">Konosuba</h4> 
      <p></p> 
     </div> 
    </div> 
   </td> 
   <td data-th="Price">$13</td> 
   <td data-th="Quantity"><input class="form-control text-center" value="1" type="number">
   </td> 
   <td data-th="Subtotal" class="text-center">$13</td> 
   <td class="actions" data-th="">
    <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
    </button> 
    <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>
    </button>
   </td> 
  </tr> 
  </tbody><tfoot> 
   <tr class="visible-xs"> 
   </tr> 
   <tr> 
    <td><a href="Shopvu.php" class="btn btn-warning"><i class="fa fa-angle-left"></i>Continue Shopping</a>
    </td> 
    <td colspan="2" class="hidden-xs"> </td> 
    <td class="hidden-xs text-center"><strong>Total: $68 </strong>
    </td> 
    <td><a href="#" class="btn btn-success btn-block">Solve<i class="fa fa-angle-right"></i></a>
    </td> 
   </tr> 
  </tfoot> 
 </table>
</div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark" style="max-height: 1%"> 
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
