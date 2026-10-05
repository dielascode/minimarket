```blade
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Dashboard - POS Toko Sawit</title>

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
            background-color: #f5f7fb;
            margin: 0;
        }

        .sidebar {
            width: 250px;
            min-height: 100vh;
            background: #1f2937;
            position: fixed;
            left: 0;
            top: 0;
            padding: 25px 15px;
        }

        .brand {
            color: white;
            font-size: 21px;
            font-weight: 700;
            padding: 0 15px 30px;
        }

        .brand span {
            color: #22c55e;
        }

        .menu-title {
            color: #9ca3af;
            font-size: 12px;
            margin: 15px 15px 10px;
            text-transform: uppercase;
        }

        .sidebar a {
            display: block;
            color: #d1d5db;
            text-decoration: none;
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 5px;
            font-size: 14px;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: #22c55e;
            color: white;
        }

        .content {
            margin-left: 250px;
            padding: 30px;
        }

        .topbar {
            background: white;
            padding: 18px 25px;
            border-radius: 12px;
            margin-bottom: 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.04);
        }

        .topbar h4 {
            margin: 0;
            font-weight: 600;
        }

        .cashier {
            color: #6b7280;
            font-size: 13px;
        }

        .stat-card {
            background: white;
            border-radius: 12px;
            padding: 22px;
            border: none;
            height: 100%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.04);
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            margin-bottom: 15px;
        }

        .icon-green {
            background: #dcfce7;
        }

        .icon-blue {
            background: #dbeafe;
        }

        .icon-orange {
            background: #ffedd5;
        }

        .icon-red {
            background: #fee2e2;
        }

        .stat-label {
            color: #6b7280;
            font-size: 13px;
            margin-bottom: 5px;
        }

        .stat-value {
            font-size: 24px;
            font-weight: 700;
            color: #111827;
        }

        .card-box {
            background: white;
            border-radius: 12px;
            padding: 22px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.04);
            height: 100%;
        }

        .card-title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .quick-action {
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 18px;
            text-align: center;
            text-decoration: none;
            color: #374151;
            display: block;
            transition: 0.2s;
        }

        .quick-action:hover {
            border-color: #22c55e;
            color: #22c55e;
            transform: translateY(-2px);
        }

        .quick-icon {
            font-size: 25px;
            margin-bottom: 8px;
        }

        .table {
            font-size: 13px;
        }

        .badge-success {
            background: #dcfce7;
            color: #15803d;
            padding: 6px 10px;
            border-radius: 20px;
        }

        .badge-warning {
            background: #fef3c7;
            color: #b45309;
            padding: 6px 10px;
            border-radius: 20px;
        }

        .sidebar form {
            margin: 0;
        }

        .sidebar-logout {
            width: 100%;
            display: block;
            text-align: left;
            border: none;
            background: transparent;
            color: #d1d5db;
            text-decoration: none;
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 5px;
            font-size: 14px;
            font-family: 'Poppins', sans-serif;
        }

        .sidebar-logout:hover {
            background: #dc2626;
            color: white;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
            }

            .sidebar .brand,
            .sidebar .menu-title,
            .sidebar a span {
                display: none;
            }

            .content {
                margin-left: 70px;
                padding: 15px;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="brand">
            POS <span>Toko Sawit</span>
        </div>

        <div class="menu-title">Menu Utama</div>

        <a href="#" class="active">
            <span>Dashboard</span>
        </a>

        <a href="{{ route('produk.index') }}">
            <span>Data Produk</span>
        </a>
        <form action="{{ route('logout') }}" method="POST">
            @csrf

            <button type="submit" class="sidebar-logout">
                <span>Logout</span>
            </button>
        </form>

    </aside>


    <!-- CONTENT -->
    <main class="content">

        <!-- TOPBAR -->
        <div class="topbar">

            <div>
                <h4>Dashboard</h4>
                <small class="text-muted">
                    Kamis, 1 Oktober 2026
                </small>
            </div>

            <div class="cashier">
                Kasir Aktif<br>
                <strong>Admin Kasir</strong>

            </div>

        </div>


        <!-- STATISTICS -->
        <div class="row g-4 mb-4">

            <div class="col-md-6 col-xl-3">
                <div class="stat-card">

                    <div class="stat-icon icon-green">
                        Rp
                    </div>

                    <div class="stat-label">
                        Penjualan Hari Ini
                    </div>

                    <div class="stat-value">
                        Rp 4.850.000
                    </div>

                    <small class="text-success">
                        ↑ 12% dari kemarin
                    </small>

                </div>
            </div>


            <div class="col-md-6 col-xl-3">
                <div class="stat-card">

                    <div class="stat-icon icon-blue">
                        #
                    </div>

                    <div class="stat-label">
                        Total Transaksi
                    </div>

                    <div class="stat-value">
                        122
                    </div>

                    <small class="text-primary">
                        Transaksi hari ini
                    </small>

                </div>
            </div>


            <div class="col-md-6 col-xl-3">
                <div class="stat-card">

                    <div class="stat-icon icon-orange">
                        🛒
                    </div>

                    <div class="stat-label">
                        Produk Terjual
                    </div>

                    <div class="stat-value">
                        347
                    </div>

                    <small class="text-muted">
                        Item hari ini
                    </small>

                </div>
            </div>


            <div class="col-md-6 col-xl-3">
                <div class="stat-card">

                    <div class="stat-icon icon-red">
                        !
                    </div>

                    <div class="stat-label">
                        Stok Menipis
                    </div>

                    <div class="stat-value">
                        8
                    </div>

                    <small class="text-danger">
                        Perlu diperiksa
                    </small>

                </div>
            </div>

        </div>

        <!-- TABLES -->
        <div class="row g-4">

            <!-- TRANSACTIONS -->
            <div class="col-xl-8">

                <div class="card-box">

                    <div class="d-flex justify-content-between align-items-center mb-3">

                        <div class="card-title mb-0">
                            Transaksi Terbaru
                        </div>

                        <a href="#" class="text-success text-decoration-none small">
                            Lihat Semua
                        </a>

                    </div>

                    <div class="table-responsive">

                        <table class="table table-hover align-middle">

                            <thead>
                                <tr>
                                    <th>ID Transaksi</th>
                                    <th>Waktu</th>
                                    <th>Kasir</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>#TRX-00122</td>
                                    <td>14:32</td>
                                    <td>Admin</td>
                                    <td>Rp 185.000</td>
                                    <td>
                                        <span class="badge-success">
                                            Selesai
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>#TRX-00121</td>
                                    <td>14:17</td>
                                    <td>Admin</td>
                                    <td>Rp 320.000</td>
                                    <td>
                                        <span class="badge-success">
                                            Selesai
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>#TRX-00120</td>
                                    <td>13:58</td>
                                    <td>Admin</td>
                                    <td>Rp 95.000</td>
                                    <td>
                                        <span class="badge-success">
                                            Selesai
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>#TRX-00119</td>
                                    <td>13:42</td>
                                    <td>Admin</td>
                                    <td>Rp 450.000</td>
                                    <td>
                                        <span class="badge-warning">
                                            Pending
                                        </span>
                                    </td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>


            <!-- LOW STOCK -->
            <div class="col-xl-4">

                <div class="card-box">

                    <div class="d-flex justify-content-between align-items-center mb-3">

                        <div class="card-title mb-0">
                            Stok Menipis
                        </div>

                        <span class="text-danger small">
                            8 produk
                        </span>

                    </div>

                    <div class="mb-3">

                        <div class="d-flex justify-content-between">
                            <strong>Minyak Goreng 1L</strong>
                            <span class="text-danger">3 pcs</span>
                        </div>

                        <div class="progress mt-2" style="height: 6px;">
                            <div class="progress-bar bg-danger" style="width: 20%"></div>
                        </div>

                    </div>

                    <div class="mb-3">

                        <div class="d-flex justify-content-between">
                            <strong>Gula Pasir 1kg</strong>
                            <span class="text-warning">7 pcs</span>
                        </div>

                        <div class="progress mt-2" style="height: 6px;">
                            <div class="progress-bar bg-warning" style="width: 40%"></div>
                        </div>

                    </div>

                    <div class="mb-3">

                        <div class="d-flex justify-content-between">
                            <strong>Beras 5kg</strong>
                            <span class="text-danger">2 pcs</span>
                        </div>

                        <div class="progress mt-2" style="height: 6px;">
                            <div class="progress-bar bg-danger" style="width: 15%"></div>
                        </div>

                    </div>

                    <a href="#" class="btn btn-outline-success w-100 mt-2">
                        Kelola Stok
                    </a>

                </div>

            </div>

        </div>


        <!-- FOOTER -->
        <footer class="text-center mt-5 mb-3">

            <small class="text-muted">
                © 2026 POS Toko Sawit Indonesia
            </small>

        </footer>

    </main>

</body>

</html>
```
