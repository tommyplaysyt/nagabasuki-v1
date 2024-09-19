<?php
// Sample PHP code for dynamic content (artist profiles)
$artists = [
    [
        "name" => "Artist 1",
        "bio" => "Specializes in traditional Balinese designs.",
        "image" => "artist1.jpg" // Ensure the image is in the correct directory
    ],
    [
        "name" => "Artist 2",
        "bio" => "Focuses on modern styles with Balinese influence.",
        "image" => "artist2.jpg"
    ],
    [
        "name" => "Artist 3",
        "bio" => "Bali Tattoo.",
        "image" => "artist3.jpg"
    ]
];

// Sample PHP code for customer reviews
$reviews = [
    [
        "author" => "John Doe",
        "text" => "Fantastic experience! The artist captured exactly what I had in mind.",
    ],
    [
        "author" => "Jane Smith",
        "text" => "Amazing talent and a very professional environment. Highly recommend!",
    ],
    [
        "author" => "Alex Johnson",
        "text" => "Incredible detail and artistry. I couldn't be happier with my new tattoo.",
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Naga Basuki Ink - Home</title>

    <!-- Link Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Link to External CSS -->
    <link rel="stylesheet" href="styles.css">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header>
        <img src="cropped.png" alt="Naga Basuki Ink Logo"> <!-- Replace with your actual logo -->
        <nav>
            <a href="#home">Home</a>
            <a href="#about">About Us</a>
            <a href="#artists">Artists</a>
            <a href="#gallery">Gallery</a>
            <a href="#shop">Shop</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <h1>Naga Basuki Ink</h1>
        <p>Traditional Balinese Art Meets Modern Ink</p>
        <button class="cta-btn">Book a Session</button>
    </section>

    <!-- Artists Section -->
    <section class="artists" id="artists">
        <h2>Our Artists</h2>
        <div class="artist-cards">
            <?php foreach ($artists as $artist): ?>
                <div class="artist-card">
                    <img src="<?= $artist['image'] ?>" alt="<?= $artist['name'] ?>">
                    <h3><?= $artist['name'] ?></h3>
                    <p><?= $artist['bio'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery" id="gallery">
        <h2>Tattoo Gallery</h2>
        <div class="gallery-grid">
            <img src="tattoo1.jpg" alt="Tattoo 1"> <!-- Replace with actual images -->
            <img src="tattoo2.jpg" alt="Tattoo 2">
            <img src="tattoo3.jpg" alt="Tattoo 3">
            <img src="tattoo4.jpg" alt="Tattoo 4">
        </div>
    </section>

    <!-- Customer Reviews Section -->
    <section class="reviews" id="reviews">
        <h2>What Our Clients Say</h2>
        <?php foreach ($reviews as $review): ?>
            <div class="review-card">
                <p><?= $review['text'] ?></p>
                <h3>- <?= $review['author'] ?></h3>
            </div>
        <?php endforeach; ?>
        <!-- Embed a video review -->
        <div class="video-review">
            <iframe src="https://www.youtube.com/embed/your-video-id" allowfullscreen></iframe> <!-- Replace with your actual video link -->
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Naga Basuki Ink. All rights reserved.</p>
        <div class="social-icons">
            <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>
</body>
</html>
