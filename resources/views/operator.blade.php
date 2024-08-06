<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventaris Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrapper">
        @include('sidebarAdmin')
        <div class="main">
        @include('navbar')
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h4>Dashboard Operator</h4>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-3 m-1">
                                                <h3>Selamat Datang, Operator</h3>
                                                <p class="mb-0">Dashboard Operator</p>
                                            </div>
                                        </div>
                                        <div class="col-6 align-self-end text-end">
                                            <img src="image/inventaris.png" class="img-fluid illustration-img"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card card-dashboard bg-gray">
                                <div class="card-body py-4">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <h4 class="a-icon"><i class="fa-solid fa-money-check-dollar"></i></h4>
                                            <div class="ms-5 d-flex flex-column gap-3">
                                                <h5 class="fw-medium">Data Pembelian</h5>
                                                <h1 class="fw-bold">{{ $data['pembelian'] }}</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card card-dashboard bg-gray">
                                <div class="card-body py-4">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <h4 class="a-icon"><i class="fa-solid fa-chart-pie"></i></h4>
                                            <div class="ms-5 d-flex flex-column gap-3">
                                                <h5 class="fw-medium">Data Pemakaian</h5>
                                                <h1 class="fw-bold">{{ $data['pemakaian'] }}</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a href="#" class="text-muted">
                                    <strong>CV. OgahRugi</strong>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
