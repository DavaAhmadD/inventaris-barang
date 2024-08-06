
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
                    <h4>Edit Data Pemakaian</h4>
                    {{-- Uncomment the following line if you have a link for adding new items --}}
                    {{-- <a href="" class="btn btn-primary"><i class="fa-solid fa-user-plus me-2"></i>Tambah Barang</a> --}}
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route ('update-pemakaian',['id' => $data->id])}}" method="POST"> @method('PUT')
                        @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="nama_barang" class="fw-medium mb-2 mt-2">Pilih Barang</label>
                                    <select name="nama_barang" id="nama_barang" class="form-select mb-3">
                                        @foreach($barang as $item)
                                            <option value="{{ $item->nama_barang }}" {{ $item->kode_barang == $data->kode_barang ? 'selected' : '' }}>
                                                {{ $item->nama_barang }} | {{ $item->merk_type }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            <div class="mb-3">
                                <label for="jumlah_pakai" class="form-label">Jumlah Pakai</label>
                                <input type="number" class="form-control" id="jumlah_pakai" name="jumlah_pakai" value="{{$data->jumlah_pakai}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_pakai" class="form-label">Tanggal Pakai</label>
                                <input type="date" class="form-control" id="tanggal_pakai" name="tanggal_pakai" value="{{$data->tanggal_pakai}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="pemakaian" class="form-label">Pemakaian</label>
                                <input type="text" class="form-control" id="pemakaian" name="pemakaian" value="{{$data->pemakaian}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{$data->keterangan}}" required>
                            </div>
                            <button type="submit" class="btn btn-secondary">Submit</button>
                            <a class="btn btn-danger ms-2" href="{{route('datapemakaian')}}">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
