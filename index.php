<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Polytechnic College</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f0f0f0;
            color: #333;
        }

        /* Header */
        header {
            background-color: #007bff;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        header p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        /* Navigation */
        nav {
            background-color: #0056b3;
            padding: 10px 0;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            font-size: 1.2em;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* Main Content */
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
        }

        .hero-section {
            background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)),url('college_building.jpg') ;
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 100px 0;
            text-align: center;
        }

        .hero-section h2 {
            font-size: 3em;
            margin-bottom: 20px;
        }

        .hero-section p {
            font-size: 1.2em;
            margin-bottom: 40px;
        }

        .section {
            margin-bottom: 40px;
        }

        .section h2 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #007bff;
        }

        .section p {
            font-size: 1.1em;
        }

        /* Footer */
        footer {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Government Polytechnic College</h1>
        <p>Your Gateway to Technical Excellence</p>
    </header>
    <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Programs</a>
        <a href="#">Admissions</a>
        <a href="#">Contact</a>
        <a href="login/login_form.php">Login</a>
    </nav>
    <div class="container">
        <div class="hero-section">
            <h2>Welcome to Government Polytechnic College</h2>
            <p>Empowering students with technical skills for a brighter future.</p>
        </div>
        <div class="section">
            <h2>About Us</h2>
            <p>Government Polytechnic College is a prestigious institution dedicated to providing high-quality technical education. With state-of-the-art facilities and experienced faculty, we strive to nurture the next generation of engineers and technocrats.</p>
        </div>
        <div class="section">
            <h2>Programs</h2>
            <p>Our college offers a wide range of diploma and certificate programs in various disciplines including Civil Engineering, Electrical Engineering, Mechanical Engineering, Computer Science, and more. Explore our programs to discover your passion and build a successful career.</p>
        </div>
        <div class="section">
            <h2>Admissions</h2>
            <p>We welcome talented and ambitious individuals to join our diverse community. Our admission process is transparent and merit-based, ensuring equal opportunities for all. Contact us to learn more about admission requirements and procedures.</p>
        </div>
    </div>
    <footer>
        &copy; <?php echo date("Y"); ?> Government Polytechnic College. All rights reserved.
    </footer>
</body>
</html>
