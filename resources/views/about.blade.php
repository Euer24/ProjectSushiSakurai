@include('layouts.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css" />
</head>
<body>
    <div class="aboutpage-content">
    <h1>About us</h1>
    <div class="gallery">
        <img src="{{ asset('images/homepage1.jpg') }}" alt="Sushi op de aboutpage">
        <img src="{{ asset('images/homepage2.jpg') }}" alt="Sushi op de aboutpage">
        <img src="{{ asset('images/homepage3.jpg') }}" alt="Sushi op de aboutpage">
    </div>
    <p>Discover the most delicious sushi dishes prepared with fresh ingredients.</p>
    <p>We are a passionate team of chefs and food enthusiasts dedicated to bringing you the finest sushi experience. Our commitment to using the freshest ingredients ensures that every dish we serve is a culinary delight.</p>
    <p>At our restaurant, you'll find a wide variety of sushi options, from traditional classics to innovative creations. Whether you're a sushi connoisseur or trying it for the first time, there's something for everyone on our menu.</p>
    <button><a href="/menu">Look at our menu</a></button>
</div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.pkgd.min.js"></script>
    <script>
        var gallery = document.querySelector('.gallery');
        var flkty = new Flickity(gallery, {
            // options
            cellAlign: 'left',
            contain: true,
            autoPlay: true
        });
    </script>
</body>
</html>