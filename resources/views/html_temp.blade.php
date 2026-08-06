<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>QA</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            color: #222;
            background: #f8f9fa;
        }

        /* Navbar */
        .navbar {
            background: #111827;
            color: white;
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .nav-links {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
        }

        .nav-links a:hover {
            color: #60a5fa;
        }

        /* Hero */
        .hero {
            min-height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 50px 20px;
            background: linear-gradient(135deg, #2563eb, #7c3aed);
            color: white;
        }

        .hero-content {
            max-width: 800px;
        }

        .hero h1 {
            font-size: 55px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 20px;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 14px 30px;
            background: white;
            color: #2563eb;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
        }

        .btn:hover {
            background: #e5e7eb;
        }

        /* Services */
        .services {
            padding: 80px 8%;
            text-align: center;
        }

        .services h2 {
            font-size: 36px;
            margin-bottom: 15px;
        }

        .services > p {
            color: #666;
            margin-bottom: 40px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .card {
            background: white;
            padding: 35px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        .card h3 {
            margin-bottom: 15px;
            font-size: 22px;
        }

        .card p {
            color: #666;
            line-height: 1.6;
        }

        /* About */
        .about {
            padding: 80px 8%;
            background: #111827;
            color: white;
            text-align: center;
        }

        .about h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .about p {
            max-width: 700px;
            margin: auto;
            line-height: 1.7;
            color: #d1d5db;
        }

        /* Contact */
        .contact {
            padding: 80px 8%;
            text-align: center;
        }

        .contact h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .contact p {
            color: #666;
            margin-bottom: 25px;
        }

        .contact-btn {
            display: inline-block;
            padding: 14px 30px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }

        .contact-btn:hover {
            background: #1d4ed8;
        }

        /* Footer */
        footer {
            background: #030712;
            color: #9ca3af;
            text-align: center;
            padding: 25px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                gap: 15px;
            }

            .nav-links {
                gap: 15px;
            }

            .hero h1 {
                font-size: 40px;
            }

            .cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            MyWebsite
        </div>

        <ul class="nav-links">
            <li><a href="/">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>


    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Build Something Amazing</h1>

            <p>
                Welcome to our website. We create simple,
                beautiful and powerful digital experiences.
            </p>

            <a href="#services" class="btn">
                Get Started
            </a>
        </div>
    </section>


    <!-- Services Section -->
    <section class="services" id="services">

        <h2>Our Services</h2>

        <p>
            We provide high-quality solutions for your business.
        </p>

        <div class="cards">

            <div class="card">
                <h3>Web Development</h3>

                <p>
                    We build fast, responsive and modern websites
                    using the latest technologies.
                </p>
            </div>

            <div class="card">
                <h3>UI / UX Design</h3>

                <p>
                    We create clean and user-friendly designs
                    that provide a great experience.
                </p>
            </div>

            <div class="card">
                <h3>Laravel Development</h3>

                <p>
                    We build powerful web applications using
                    Laravel and PHP.
                </p>
            </div>

        </div>

    </section>


    <!-- About Section -->
    <section class="about" id="about">

        <h2>About Us</h2>

        <p>
            We are passionate about building modern websites
            and applications. Our goal is to create simple,
            reliable and beautiful digital products.
        </p>

    </section>


    <!-- Contact Section -->
    <section class="contact" id="contact">

        <h2>Contact Us</h2>

        <p>
            Have a project in mind? Let's work together.
        </p>

        <a href="mailto:hello@example.com" class="contact-btn">
            Contact Us
        </a>

    </section>


    <!-- Footer -->
    <footer>
        <p>
            &copy; {{ date('Y') }} MyWebsite. All rights reserved.
        </p>
    </footer>

</body>
</html>