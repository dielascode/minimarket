```blade
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Data Produk - POS Toko Sawit</title>

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
            color: #1f2937;
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

        .page-card {
            background: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.04);
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .page-header h5 {
            margin: 0;
            font-weight: 600;
        }

        .page-header p {
            margin: 5px 0 0;
            color: #6b7280;
            font-size: 13px;
        }

        .btn-add {
            background: #22c55e;
            border: none;
            color: white;
            padding: 10px 17px;
            border-radius: 8px;
            font-size: 13px;
            text-decoration: none;
        }

        .btn-add:hover {
            background: #16a34a;
            color: white;
        }

        .product-table {
            vertical-align: middle;
        }

        .product-table thead {
            background: #f8fafc;
        }

        .product-table th {
            color: #6b7280;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            padding: 14px;
            border-bottom: 1px solid #e5e7eb;
        }

        .product-table td {
            padding: 15px 14px;
            font-size: 13px;
            border-bottom: 1px solid #f0f0f0;
        }

        .product-image {
            width: 65px;
            height: 65px;
            object-fit: cover;
            border-radius: 8px;
            border: 1px solid #e5e7eb;
        }

        .product-name {
            font-weight: 600;
            color: #111827;
        }

        .product-code {
            color: #6b7280;
            font-size: 12px;
        }

        .stock {
            display: inline-block;
            background: #dcfce7;
            color: #15803d;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
        }

        .price {
            font-weight: 600;
            color: #111827;
        }

        .action-wrapper {
            display: flex;
            gap: 6px;
        }

        .btn-edit {
            background: #fef3c7;
            color: #b45309;
            border: none;
            padding: 7px 12px;
            border-radius: 6px;
            font-size: 12px;
        }

        .btn-edit:hover {
            background: #fde68a;
        }

        .btn-delete {
            background: #fee2e2;
            color: #dc2626;
            border: none;
            padding: 7px 12px;
            border-radius: 6px;
            font-size: 12px;
        }

        .btn-delete:hover {
            background: #fecaca;
        }

        .empty-image {
            width: 65px;
            height: 65px;
            border-radius: 8px;
            background: #f3f4f6;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #9ca3af;
            font-size: 11px;
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

            .page-header {
                align-items: flex-start;
                gap: 15px;
            }

            .table-responsive {
                overflow-x: auto;
            }
        }
    </style>
</head>

<body>

    <aside class="sidebar">

        <div class="brand">
            POS <span>Toko Sawit</span>
        </div>

        <div class="menu-title">Menu Utama</div>

        <a href="{{ route('dashboard') }}" >
            <span>Dashboard</span>
        </a>

        <a href="{{ route('produk.index') }}" class="active">
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
                <h4>Data Produk</h4>
                <small class="text-muted">
                    Kelola seluruh produk yang tersedia di toko
                </small>
            </div>

            <div class="cashier">
                Kasir Aktif<br>
                <strong>Admin Kasir</strong>
            </div>

        </div>


        <!-- PRODUCT CARD -->
        <div class="page-card">

            <div class="page-header">

                <div>
                    <h5>Daftar Produk</h5>
                    <p>
                        Daftar barang yang tersedia di Toko Sawit
                    </p>
                </div>

                <a href="{{ route('produk.create') }}" class="btn-add">
                    + Tambah Produk
                </a>

            </div>


            <!-- TABLE -->
            <div class="table-responsive">

                <table class="table product-table">

                    <thead>

                        <tr>
                            <th>No</th>
                            <th>Produk</th>
                            <th>Kode</th>
                            <th>Stok</th>
                            <th>Harga</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>

                    </thead>

                    <tbody>

                        @forelse ($produk as $item)

                            <tr>

                                <td>
                                    {{ $loop->iteration }}
                                </td>

                                <td>
                                    <div class="product-name">
                                        {{ $item['nama_barang'] }}
                                    </div>
                                </td>

                                <td>
                                    <span class="product-code">
                                        {{ $item['kode_barang'] }}
                                    </span>
                                </td>

                                <td>
                                    <span class="stock">
                                        {{ $item['qty'] }} pcs
                                    </span>
                                </td>

                                <td>
                                    <span class="price">
                                        Rp {{ number_format($item['harga'], 0, ',', '.') }}
                                    </span>
                                </td>

                                <td>

                                    @if ($item['gambar'])

                                        <img
                                            src="{{ asset('images/' . $item['gambar']) }}"
                                            alt="{{ $item['nama_barang'] }}"
                                            class="product-image"
                                        >

                                    @else

                                        <div class="empty-image">
                                            Tidak ada
                                        </div>

                                    @endif

                                </td>

                                <td>

                                    <div class="action-wrapper">

                                        <a href="{{ route('produk.edit', $item->id) }}">
                                            <button type="button" class="btn-edit">
                                                Edit
                                            </button>
                                        </a>

                                        <form
                                            action="{{ route('produk.destroy', $item->id) }}"
                                            method="POST"
                                            onsubmit="return confirm('Apakah kamu yakin ingin menghapus produk ini?')"
                                        >

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="btn-delete"
                                            >
                                                Hapus
                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="7" class="text-center py-5">

                                    <div class="text-muted">
                                        Belum ada produk yang tersedia.
                                    </div>

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>


        <!-- FOOTER -->
        <footer class="text-center mt-4 mb-3">

            <small class="text-muted">
                © 2026 POS Toko Sawit Indonesia
            </small>

        </footer>

    </main>

</body>

</html>
```
