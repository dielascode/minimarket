@php
    use Illuminate\Support\Facades\Auth;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body>
@if (auth()->user()->isAdmin())
    <p>Welcome, Admin!</p>
@else
    <p>Welcome, User!</p>
@endif
</body>''
</html>
