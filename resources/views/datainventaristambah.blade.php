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
    <div class="wrapper d-flex">
        @include('sidebarAdmin')
        <div class="main flex-grow-1">
            <div class="navbar-custom">
                @include('navbar')
            </div>
            <div class="container mt-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4>Tambah Data Inventaris</h4>
                    {{-- Uncomment the following line if you have a link for adding new items --}}
                    {{-- <a href="" class="btn btn-primary"><i class="fa-solid fa-user-plus me-2"></i>Tambah Barang</a> --}}
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('store-inventaris')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="kode_barang" class="form-label">Kode Barang</label>
                                <input type="text" class="form-control" id="kode_barang" name="kode_barang" required>
                            </div>
                            <div class="mb-3">
                                <label for="jenis_barang" class="form-label">Jenis Barang</label>
                                <input type="text" class="form-control" id="jenis_barang" name="jenis_barang" required>
                            </div>
                            <div class="mb-3">
                                <label for="jumlah" class="form-label">Jumlah</label>
                                <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_pembelian" class="form-label">Tanggal Pembelian</label>
                                <input type="date" class="form-control" id="tanggal_pembelian" name="tanggal_pembelian" required>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_pemakaian" class="form-label">Tanggal Pemakaian</label>
                                <input type="date" class="form-control" id="tanggal_pemakaian" name="tanggal_pemakaian" required>
                            </div>
                            <div class="mb-3">
                                <label for="penggunaan" class="form-label">Penggunaan</label>
                                <input type="text" class="form-control" id="penggunaan" name="penggunaan" required>
                            </div>
                            <div class="mb-3">
                                <label for="ruang" class="form-label">Ruang</label>
                                <input type="text" class="form-control" id="ruang" name="ruang" required>
                            </div>
                            <div class="mb-3">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                            </div>
                            <button type="submit" class="btn btn-secondary">Submit</button>
                            <a class="btn btn-danger ms-2" href="{{route('datainventaris')}}">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
