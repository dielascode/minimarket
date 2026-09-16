<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Minimarket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>

<body class="container">
    <header>
        <h2>Sistem Point of Sale (POS) - Toko Sawit</h2>
        <hr>
    </header>
    <main>
        <h3>Selamat Datang, {{ $user['name'] }}!</h3>
        <p>Status Shift Anda hari ini: <strong>24 Jam</strong></p>
        <h4>Menu Cepat:</h4>
        <button class="btn btn-primary" style=" margin: 20px 0;"><a style="color: white; text-decoration: none;" href="{{ route('produk.index') }}">Lihat Data Produk</a></button>
        <ul>
            <li>Kasir Aktif: Jam Operasional Terpantau</li>
            <li>Jumlah Transaksi Hari Ini: 122</li>
        </ul>
    </main>
    <footer>
        <hr>
        <p>&copy; 2026 POS Toko Sawit Indonesia - Praktikum Pemrograman Web</p>
    </footer>
</body>

</html>
