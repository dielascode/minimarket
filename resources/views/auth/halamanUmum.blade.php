<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Umum</title>
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

        .navbar-custom {
            background: #ffffff;
            padding: 18px 0;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.05);
        }

        .navbar-brand {
            font-size: 25px;
            font-weight: 800;
            color: #2563eb !important;
        }

        .navbar-brand span {
            color: #111827;
        }

        .hero {
            margin-top: 35px;
            background: linear-gradient(135deg, #2563eb, #1e40af);
            border-radius: 25px;
            padding: 55px;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero::after {
            content: "";
            position: absolute;
            width: 280px;
            height: 280px;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 50%;
            right: -70px;
            top: -80px;
        }

        .hero h1 {
            font-size: 38px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .hero p {
            max-width: 600px;
            color: #dbeafe;
            line-height: 1.8;
        }

        .hero-button {
            margin-top: 20px;
            display: inline-block;
            background: white;
            color: #2563eb;
            padding: 12px 24px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
        }

        .hero-button:hover {
            background: #eff6ff;
            color: #1d4ed8;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#">
                UMUM<span>.</span>
            </a>
        </div>
        </div>
    </nav>
    <main class="container">
        <section class="hero">
            <div class="position-relative" style="z-index: 2;">
                <h1>
                    Halo,<br>
                    Ini halaman pengunjung umum.
                </h1>
                <p>
                    Selamat datang semuanyaaa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis libero
                    a sapien sollicitudin consequat. Mauris molestie pharetra ante, et sodales tellus. Quisque quam
                    ante, tincidunt id lacinia vehicula, condimentum eget enim.
                </p>
                <a href="#" class="hero-button">
                    Informasi
                </a>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html
