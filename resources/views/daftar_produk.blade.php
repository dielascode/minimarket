<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f7f9fc;
            color: #1f2937;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Halaman Daftar Produk</h1>
        <table class="table table-primary">
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>SKU</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Gambar Produk</th>
            </tr>
            @foreach ($produk as $item)
                <tr>
                    <td class="table-light">{{$loop->iteration}}</td>
                    <td class="table-light">{{$item['nama']}}</td>
                    <td class="table-light">{{$item['sku']}}</td>
                    <td class="table-light">{{$item['harga']}}</td>
                    <td class="table-light">{{$item['stok']}}</td>
                    <td class="table-light"><img src="{{ asset('images/'. $item['gambar']) }}" alt="" srcset="" width="300px"></td>
                </tr>
            @endforeach

        </table>
    </div>
</body>

</html>
