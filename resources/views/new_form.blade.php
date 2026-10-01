<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Acara 20</title>
</head>
<body>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif

    <form action="/submit" method="POST">
        @csrf
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name">
        <br><br>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br><br>
        <label for="password_confirmation">Konfirmasi Password:</label>
        <input type="password" name="password_confirmation" id="password_confirmation">
        <br><br>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>
