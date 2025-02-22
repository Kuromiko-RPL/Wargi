<?php 
    require "koneksi.php";
    $queryProduk =  mysqli_query($con, "SELECT id, nama, harga, foto, detail FROM produk LIMIT 6")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Wargi eCommerce | Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="img/wargi_logo.jpg">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

</head>

<body>

<?php require "navbar.php"; ?>

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="produk.php" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" name="q" placeholder="Nama Barang" name="keyword">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_01.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Wargi</b> eCommerce</h1>
                                <h3 class="h2">Lorem ipsum dolor sit amet</h3>
                                <p>
                                    Wargi Shop is Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam deleniti atque tempore fuga rerum necessitatibus, similique repellendus corrupti suscipit velit, aut ea voluptate? Consequatur quos animi tempora nam corporis dolorem!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_02.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Lorem ipsum dolor sit amet</h1>
                                <h3 class="h2">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h3>
                                <p>
                                    Sit molestias soluta sed distinctio impedit placeat fuga quasi repudiandae minus, cupiditate optio ab aut. Ratione quos repudiandae aperiam iure nisi reiciendis!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_03.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Lorem ipsum dolor sit amet</h1>
                                <h3 class="h2">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim voluptatum illo nihil dolorem alias voluptate, maxime nam velit nisi porro! Libero ex illum provident numquam illo quod nesciunt quasi voluptate.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Kategori yang lagi populer</h1>
                <p>
                    Dibawah ini ada 3 kategori yang lagi populer di website Wargi dan yang sedang populer dibeli orang-orang
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-4">
                <div class="highlighted-kategori kategori-sticker">
                    <a href="#"><img src="img/category_img_01.jpg" class="rounded-circle img-fluid border"></a>
                    <h5 class="text-center mt-3 mb-3">Sticker</h5>
                    <p class="text-center"><a class="btn btn-success" href="produk.php?kategori=Sticker">Go Shop</a></p>
                </div>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <div class="highlighted-kategori kategori-Desain">
                    <a href="#"><img src="img/category_img_01.jpg" class="rounded-circle img-fluid border"></a>
                    <h2 class="h5 text-center mt-3 mb-3">Desain</h2>
                    <p class="text-center"><a class="btn btn-success" href="produk.php?kategori=Desain">Go Shop</a></p>
                </div>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <div class="highlighted-kategori kategori-Jasa">
                    <a href="#"><img src="img/category_img_01.jpg" class="rounded-circle img-fluid border"></a>
                    <h2 class="h5 text-center mt-3 mb-3">Jasa </h2>
                    <p class="text-center"><a class="btn btn-success" href="produk.php?kategori=Jasa">Go Shop</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Produk</h1>
                    <p>
                        Disini adalah produk-produk yang di jual dan yang sedang populer dibeli orang-orang
                    </p>
                </div>
            </div>
            <div class="row">
                <?php while($data = mysqli_fetch_array($queryProduk)){ ?>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="image/<?php echo $data['foto']; ?>" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark"><?php echo $data['nama']; ?></a>
                            <p class="card-text">
                                <?php echo $data['detail']; ?>
                            </p>
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="text-success text-right fs-5">Rp <?php echo $data['harga']; ?></li>
                            </ul>
                            <p class="text-center"><a class="btn btn-success" href="produk-detail.php?nama=<?php echo $data['nama']; ?>">Lihat Detail</a></p>
                        </div>
                    </div>
                </div>
                    <?php }?>
            </div>
            <div class="text-center">
                <a class="btn btn-outline-success mt-3 p-3 fs-4" href="produk.php">See More</a>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->

    <?php require "footer.php"; ?>

</body>

</html>