@include('layouts.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.pkgd.min.js"></script>
</head>
<body>
    <div class="homepage-content">
    <h1>Welcome to Sushi Sakurai</h1>

    @if (session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <img src="{{ asset('images/test.png') }}" alt="Sushi op de homepage">
    <br>
    <p>Discover the most delicious sushi dishes prepared with fresh ingredients.</p>
    <br>
    <button><a href="/menu">Look at our menu</a></button>
    <br><br>
    
    <button class="scroll-down-button">
        
        V
    </button>


    <h1>About Us</h1>
    <p class="about-us">
        <br> <br>
        At Sushi Sakurai, we are dedicated to crafting the finest sushi experience for our customers. Our chefs are passionate about sushi, and our commitment to using the freshest ingredients ensures that every bite is a journey through the flavors of Japan.
        <br> <br>
        Our restaurant is more than just a place to eat; it's a place to experience the art and tradition of sushi-making. We strive to provide an inviting atmosphere where you can relax, enjoy your meal, and savor the artistry of our sushi chefs.
        <br> <br>
        Whether you're dining in, ordering takeout, or having your sushi delivered, we want your experience to be exceptional. Our menu offers a diverse selection of sushi, from traditional classics to innovative creations, ensuring there's something for everyone.
        <br> <br>
        We also cater to special dietary needs and preferences, with vegetarian and gluten-free options available. Our goal is to make sushi accessible and enjoyable for all.
        <br> <br>
        Thank you for choosing Sushi Sakurai. We look forward to serving you and sharing our love for sushi with you.
    </p>
</div>

<section id="menu">
    <!-- Your menu content here -->
</section>

    <script>
        // Get the scroll down button
        const scrollDownButton = document.querySelector('.scroll-down-button');

        // Add a click event listener to the scroll down button
        scrollDownButton.addEventListener('click', () => {
            // Get the menu section
            const menuSection = document.querySelector('#menu');

            // Scroll to the menu section
            menuSection.scrollIntoView({ behavior: 'smooth' });
        });
    </script>
</body>
</html>