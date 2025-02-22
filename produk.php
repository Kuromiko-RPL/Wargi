<?php 
    require "koneksi.php";
    
    $queryKategori = mysqli_query($con, "SELECT * FROM kategori");

    // Pagination setup
    $limit = 6; // Jumlah produk per halaman
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $start = ($page - 1) * $limit;

    // Get produk berdasarkan filter
    if(isset($_GET['keyword'])) {
        $queryProduk = mysqli_query($con, "SELECT * FROM produk WHERE nama LIKE '%$_GET[keyword]%' LIMIT $start, $limit");
        $totalQuery = mysqli_query($con, "SELECT COUNT(*) AS total FROM produk WHERE nama LIKE '%$_GET[keyword]%'");
    }
    else if (isset($_GET['kategori'])) {
        $queryGetKategoriId = mysqli_query($con, "SELECT id FROM kategori WHERE nama='$_GET[kategori]'");
        $kategoriId = mysqli_fetch_array($queryGetKategoriId);
        $queryProduk = mysqli_query($con, "SELECT * FROM produk WHERE kategori_id='$kategoriId[id]' LIMIT $start, $limit");
        $totalQuery = mysqli_query($con, "SELECT COUNT(*) AS total FROM produk WHERE kategori_id='$kategoriId[id]'");
    }
    else {
        $queryProduk = mysqli_query($con, "SELECT * FROM produk LIMIT $start, $limit");
        $totalQuery = mysqli_query($con, "SELECT COUNT(*) AS total FROM produk");
    }

    $totalData = mysqli_fetch_array($totalQuery)['total'];
    $totalPages = ceil($totalData / $limit);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Wargi eCommerce | Produk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/wargi_logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
</head>
    <style>
        .card-text {
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 5;
        -webkit-box-orient: vertical;
    }

    .pagination .page-item.active .page-link {
            background-color: #218838;
            border-color: #1e7e34;
        }

    .pagination .page-link:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
    </style>
<body>
    <?php require "navbar.php"; ?>
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-3">
                    <h1 class="h1 pb-4 text-success"><strong>Kategori</strong></h1>
                    <ul class="list-unstyled templatemo-accordion">
                        <?php while($kategori = mysqli_fetch_array($queryKategori)) {?>
                            <a class="text-decoration-none" href="produk.php?kategori=<?php echo $kategori['nama']; ?>">
                                <li class="h3"> <?php echo $kategori['nama']; ?> </li>
                            </a>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col-lg-9">
                    <h1 class="text-center mb-3">Produk</h1>
                    <div class="row">
                        <?php if($totalData < 1) { ?>
                            <h4 class="text-center my-5">Produk yang dicari tidak tersedia</h4>
                        <?php } ?>
                        <?php while($data = mysqli_fetch_array($queryProduk)){ ?>
                        <div class="col-12 col-md-4 mb-4">
                            <div class="card h-100">
                                <a href="produk-detail.php?nama=<?php echo $data['nama']; ?>">
                                    <img src="image/<?php echo $data['foto']; ?>" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <a href="produk-detail.php?nama=<?php echo $data['nama']; ?>" class="h2 text-decoration-none text-dark"><?php echo $data['nama']; ?></a>
                                    <p class="card-text"> <?php echo $data['detail']; ?> </p>
                                    <ul class="list-unstyled d-flex justify-content-between">
                                        <li class="text-success text-right fs-5">Rp <?php echo $data['harga']; ?></li>
                                    </ul>
                                    <p class="text-center"><a class="btn btn-success" href="produk-detail.php?nama=<?php echo $data['nama']; ?>">Lihat Detail</a></p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <nav>
                        <ul class="pagination justify-content-center">
                            <?php if($page > 1) { ?>
                                <li class="page-item">
                                    <a class="page-link text-success" href="?page=<?php echo $page - 1; ?>">Previous</a>
                                </li>
                            <?php } ?>
                            <?php for($i = 1; $i <= $totalPages; $i++) { ?>
                                <li class="page-item <?php echo ($i == $page) ? 'active' : ''; ?>">
                                    <a class="page-link text-success" href="?page=<?php echo $i; ?>"> <?php echo $i; ?> </a>
                                </li>
                            <?php } ?>
                            <?php if($page < $totalPages) { ?>
                                <li class="page-item">
                                    <a class="page-link text-success" href="?page=<?php echo $page + 1; ?>">Next</a>
                                </li>
                            <?php } ?>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </section>
    <?php require "footer.php"; ?>
</body>
</html>