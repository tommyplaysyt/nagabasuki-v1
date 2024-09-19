<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Launching Soon</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- FontAwesome for Social Media Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- External CSS -->
    <link rel="stylesheet" href="styles.css">
    
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body */
        body {
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #0f0f0f;
            color: white;
            text-align: center;
            padding: 20px;
        }

        /* Container */
        .container {
            max-width: 600px;
            width: 100%;
        }

        /* Logo */
        img {
            max-width: 50%;
            height: auto;
            margin-bottom: 20px;
        }

        /* Header / Title */
        h1 {
            font-family: 'Cinzel', serif;
            font-size: 3rem;
            margin-bottom: 10px;
            color: #ff0000;
        }
        h2 {
            font-family: 'Cinzel', serif;
            font-size: 2rem;
            margin-bottom: 5px;
            color: #ff0000;
        }
        h3 {
            font-family: 'Cinzel', serif;
            font-size: 1rem;
            margin-bottom: 10px;
            color: #ff0000;
        }

        p {
            margin-bottom: 20px;
            font-size: 1.2rem;
        }

        /* Countdown Timer */
        .countdown {
            display: flex;
            justify-content: space-around;
            font-family: 'Cinzel', serif;
            font-size: 1.5rem;
            margin: 20px 0;
        }

        .countdown div {
            text-align: center;
        }

        .countdown div span {
            display: block;
            font-size: 2.5rem;
            color: #ff0000;
        }

        /* Email Signup */
        .email-signup {
            margin-top: 20px;
        }

        .email-signup input[type="email"] {
            padding: 10px;
            width: 80%;
            border: none;
            border-radius: 5px;
            margin-right: 10px;
            font-size: 1rem;
        }

        .email-signup button {
            padding: 10px 20px;
            background-color: #ff0000;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .email-signup button:hover {
            background-color: #d90000;
        }

        /* Social Icons */
        .social-icons {
            margin-top: 30px;
        }

        .social-icons a {
            margin: 0 15px;
            color: #ff0000;
            font-size: 1.8rem;
            text-decoration: none;
        }

        .social-icons a:hover {
            color: #f0f0f0;
        }

        /* Footer */
        footer {
            margin-top: 50px;
            font-size: 0.9rem;
            color: #fff;
        }
    </style>
</head>
<body>

    <div class="container">
        <img src="cropped maga.jpg" alt="Naga Basuki Ink Logo">  <!-- Replace with your actual logo -->
        <h1>NAGA BASUKI INK</h1>
        <h3>Traditional Balinese Art meets Modern Ink</h3>
        <h2>Launches 31/12</h2>

        <!-- Countdown Timer -->
        <div class="countdown">
            <div>
                <span id="days">00</span>
                Days
            </div>
            <div>
                <span id="hours">00</span>
                Hours
            </div>
            <div>
                <span id="minutes">00</span>
                Minutes
            </div>
            <div>
                <span id="seconds">00</span>
                Seconds
            </div>
        </div>

        <!-- Email Signup -->
        <div class="email-signup">
            <input type="email" placeholder="Enter your email for updates">
            <button>Notify Me</button>
        </div>

        <!-- Social Icons -->
        <div class="social-icons">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>

        <!-- Footer -->
    </div>

    <script>
        // Countdown Timer Script
        const launchDate = new Date('December 31, 2024 00:00:00').getTime();

        const countdown = setInterval(() => {
            const now = new Date().getTime();
            const timeLeft = launchDate - now;

            const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

            document.getElementById('days').innerHTML = days;
            document.getElementById('hours').innerHTML = hours;
            document.getElementById('minutes').innerHTML = minutes;
            document.getElementById('seconds').innerHTML = seconds;

            if (timeLeft < 0) {
                clearInterval(countdown);
                document.querySelector('.countdown').innerHTML = "We're Live!";
            }
        }, 1000);
    </script>
</body>
</html>
