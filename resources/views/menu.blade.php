<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}"> 
</head>
<body>
    @include('layouts.navbar') <!-- Voeg de navbar toe -->

    <section class="menu-section">
        <div>
            <h2>Menu A</h2>
            <div class="menu-item">
                <img src="images/dish1.jpg" alt="Sushi Dish 1">
                <p>Delicious sushi with freshly sliced fish and rice.</p>
            </div>
            <div class="menu-item">
                <img src="images/dish2.jpg" alt="Sushi Dish 2">
                <p>Sashimi with a surprising blend of flavors.</p>
            </div>
        </div>
        <div>
            <h2>Menu B</h2>
            <div class="menu-item">
                <img src="images/dish3.jpg" alt="Sushi Dish 3">
                <p>Crunchy tempura rolls with a sweet and spicy sauce.</p>
            </div>
            <div class="menu-item">
                <img src="images/dish4.jpg" alt="Sushi Dish 4">
                <p>Vegetarian sushi with avocado and cucumber.</p>
            </div>
        </div>
    </section>
</body>
</html>
