<?php
//Autoload function
session_start(); // start session
function __autoload($classname) {
    require (__DIR__.'/system/'.$classname.'.php');
}
?>

<?php
$productsCollection = new ProductsCollection();
$products = $productsCollection->getProducts();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shopping Cart - PHP & AJAX</title>

    <!-- Bootstrap Core CSS -->
    <link href="style/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="style/style.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="text-center">
    <i class="fa fa-shopping-cart fa-2x"></i>
    <a href="#" class="cart-box" id="cart-info">
            <?php
            if(isset($_SESSION['products'])) {
                echo count($_SESSION['products']);
            } else {
                echo 0;
            }
            ?>
      </a>

    <div class="shopping-cart-box">
        <a href="#" class="close-shopping-cart-box" >Close</a>
        <h3>Your Shopping Cart</h3>
        <div id="shopping-cart-results">
        </div>
    </div>

    </div>
</nav>

<body>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="row">

            <div class="row carousel-holder">

                <div class="col-md-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="slide-image" src="images/nfs.jpg"  alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="images/cob3.jpg"  alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="images/gtav.jpg" alt="">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach($products as  $product) : ?>
                    <form class="form-inline form-item col-md-6" id="games" method="post">
                        <br/>
                        <div class="form-group">
                            <div class="col-md-6 pull-left">
                                <img src="images/<?php echo $product->getProductImage();?>" style="width:150px;height:200px;" alt="">
                            </div>
                            <div class="col-md-6 pull-right">
                                <p id="desc"><?php echo $product->getProductName();?></p>
                                <p id="desc"><?php echo "$".sprintf("%01.2f",$product->getProductPrice()); ?></p>
                                <div class="input-group">
                                    <input type="text" name="product_quantity" value="1" class="form-control">
                                </div>
                                <select name="product_genre">
                                <option value="PC">PC</option>
                                <option value="PS4">PS4</option>
                                <option value="Xbox One">Xbox One</option>
                                <option value="Xbox 360">Xbox 360</option>
                                <option value="Nintendo DS">Nintendo DS</option>
                                </select>
                                <br/>
                                <br/>
                                <input name="product_code" type="hidden" value="<?php echo $product->getProductCode();?>">
                                <button type="submit" class="btn btn-primary">Add to cart</button>
                            </div>
                        </div>
                    </form>
                <?php endforeach; ?>
               </div>
            </div>

        </div>

    </div>

<!-- /.container -->

<div class="container">
    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-xs-12">
                <ul class="nav navbar-nav navbar-left">
                    <li id="copyright"><p>Copyright 2016 . Company name. All rights reserved.</p></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><i class="fa fa-facebook-official fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter-square fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram fa-2x"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>

</div>

<!-- /.container -->


<!-- jQuery -->
<script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>

<!-- Custom JS File -->
<script src="js/custom.js"></script>


<!-- Bootstrap Core JavaScript -->
<script src="style/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>


</body>

</html>


