
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventaris Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
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
                    <h4>Edit Data Barang</h4>
                    {{-- Uncomment the following line if you have a link for adding new items --}}
                    {{-- <a href="" class="btn btn-primary"><i class="fa-solid fa-user-plus me-2"></i>Tambah Barang</a> --}}
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route ('update-barang',['id' => $data->id])}}" method="POST"> @method('PUT')
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="kode_barang" class="form-label">Kode Barang</label>
                                <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="{{$data->kode_barang}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama_barang" class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{$data->nama_barang}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="jenis_barang" class="form-label">Jenis Barang</label>
                                <input type="text" class="form-control" id="jenis_barang" name="jenis_barang" value="{{$data->jenis_barang}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="merk_type" class="form-label">Merk/Type</label>
                                <input type="text" class="form-control" id="merk_type" name="merk_type" value="{{$data->merk_type}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="jumlah" class="form-label">Jumlah</label>
                                <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{$data->jumlah}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="number" class="form-control" id="harga" name="harga" value="{{$data->harga}}" required>
                            </div>
                            <button type="submit" class="btn btn-secondary">Submit</button>
                            <a class="btn btn-danger ms-2" href="{{route('databarang')}}">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
