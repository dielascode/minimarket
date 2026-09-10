<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Minimarket</title>
</head>
<body>
 <header>
        <h2>Sistem Point of Sale (POS) - Toko Sawit</h2>
        <hr>
    </header>
    <main>
        <h3>Selamat Datang, {{ $name }}!</h3>
        <p>Status Shift Anda hari ini: <strong>{{ $shift }}</strong></p>
        <h4>Menu Cepat:</h4>
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
