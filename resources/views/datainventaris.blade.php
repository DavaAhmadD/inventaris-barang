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
                        <h4>Data Inventaris</h4>
                    </div>
                    
                    <!-- Table Element -->
                    <div class="card border-0">
                        <div class="card-header">
                            <div class="d-flex">
                                <h5 class="card-title">
                                    Tabel Inventaris Barang
                                </h5>
                                <a class="btn btn-success ms-auto" href="{{route('datainventaristambah')}}"><i class="fa-regular fa-square-plus"></i> Tambah Data Inventaris</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Kode Barang</th>
                                        <th scope="col">Jenis Barang</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Tanggal Pembelian</th>
                                        <th scope="col">Tanggal Pemakaian</th>
                                        <th scope="col">Penggunaan</th>
                                        <th scope="col">Ruang</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->kode_barang }}</td>
                                        <td>{{ $item->jenis_barang }}</td>
                                        <td>{{ $item->jumlah }}</td>
                                        <td>{{ $item->tanggal_pembelian->format('Y-m-d') }}</td>
                                        <td>{{ $item->tanggal_pemakaian->format('Y-m-d') }}</td>
                                        <td>{{ $item->penggunaan }}</td>
                                        <td>{{ $item->ruang }}</td>
                                        <td>{{ $item->keterangan }}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{ route('datainventarisedit', ['id' => $item->id]) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $item->id }}">
                                                <i class="fa-regular fa-trash-can"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Penghapusan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus data ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <form id="deleteForm" method="POST" action="">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Iya</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var deleteModal = document.getElementById('deleteModal');
        deleteModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget; 
            var id = button.getAttribute('data-id'); 
            var form = document.getElementById('deleteForm');
            form.action = '/datainventarishapus/' + id;
        });
    </script>
</body>

</html>
