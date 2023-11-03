@include('layouts.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/order.css') }}">
    <title>Make a Reservation</title>
</head>
<body>
    <h1>Make a Reservation</h1>
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <form action="{{ route('order') }}" method="post">
        @csrf <!-- CSRF-bescherming -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="date">Preferred date:</label>
        <input type="date" id="date" name="date" required>

        <label for="time">Preferred time:</label>
        <input type="time" id="time" name="time" required>

        <br>
        <br>
        <input type="submit" value="Submit Reservation">
    </form>
</body>
</html>
