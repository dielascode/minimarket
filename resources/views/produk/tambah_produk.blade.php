<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>
<style>
    * {
        font-family: 'Poppins', serif;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .card {
        width: 500px;
    }

    .card-header {
        background-color: #0d6efd;
        color: white;
        text-align: center;
    }

    .card-header h5 {
        margin: 0;
    }
</style>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>Tambah Produk</h5>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif
                <form action="{{ route('admin.tambahprodukproses') }}" method="POST" enctype="multipart/form-data">
                    {{-- kalau kirim file harus pakai enctype="multipart/form-data --}}
                    {{-- ambil nama dari rute --}}
                    @csrf
                    <div class="mb-3">
                        <label for="kode_barang" class="form-label">Kode Produk</label>
                        <input type="text" name="kode_barang" id="kode_barang" class="form-control">
                    </div>
                    <div class="mb-3" class="form-label">
                        <label for="">Nama Produk</label>
                        <input type="text" name="nama_barang" id="nama_barang" class="form-control">
                    </div>
                    <div class="mb-3" class="form-label">
                        <label for="">Stok</label>
                        <input type="number" name="qty" id="qty" class="form-control">
                    </div>
                    <div class="mb-3" class="form-label">
                        <label for="">Harga</label>
                        <input type="number" name="harga" id="harga" class="form-control">
                    </div>
                    <div class="mb-3" class="form-label">
                        <label for="">Gambar Produk</label>
                        <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">+ Tambah Produk</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
