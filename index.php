<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillCraft Technology</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --background-color: #ecf0f1;
            --text-color: #333;
        }
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            line-height: 1.6;
        }
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            transition: all 0.3s ease;
            padding: 1rem 0;
        }
        .navbar-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        .navbar-logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-color);
            text-decoration: none;
        }
        .navbar-menu {
            display: flex;
        }
        .navbar-item {
            margin-left: 2rem;
            color: var(--text-color);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }
        .navbar-item:hover {
            color: var(--primary-color);
        }
        .navbar-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--text-color);
        }
        .scrolled {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .hero {
            background-image: url('https://source.unsplash.com/random/1600x900/?technology');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
        }
        .hero-content {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 2rem;
            border-radius: 10px;
        }
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        .hero p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto 2rem;
        }
        .btn {
            display: inline-block;
            background-color: var(--primary-color);
            color: #fff;
            padding: 0.8rem 2rem;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #2980b9;
        }
        .section {
            padding: 5rem 2rem;
        }
        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
        }
        .services {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        .service-card {
            background-color: #fff;
            border-radius: 10px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .service-card:hover {
            transform: translateY(-10px);
        }
        .service-icon {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }
        .footer {
            background-color: var(--secondary-color);
            color: #fff;
            text-align: center;
            padding: 2rem;
        }
        @media (max-width: 768px) {
            .navbar-menu {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background-color: #fff;
                padding: 1rem;
            }
            .navbar-menu.active {
                display: flex;
            }
            .navbar-item {
                margin: 0.5rem 0;
            }
            .navbar-toggle {
                display: block;
            }
            .hero h1 {
                font-size: 2rem;
            }
            .hero p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar" id="navbar">
        <div class="navbar-container">
            <a href="#" class="navbar-logo">SkillCraft Technology</a>
            <button class="navbar-toggle" id="navbar-toggle">☰</button>
            <div class="navbar-menu" id="navbar-menu">
                <a href="#" class="navbar-item">Home</a>
                <a href="#services" class="navbar-item">Services</a>
                <a href="#about" class="navbar-item">About</a>
                
            </div>
        </div>
    </nav>

    <header class="hero">
        <div class="hero-content">
            <h1>Welcome to SkillCraft Technology</h1>
            <p>Empowering businesses with cutting-edge technology solutions</p>
            <a href="#contact" class="btn">Get Started</a>
        </div>
    </header>

    <main>
        <section id="services" class="section">
            <h2 class="section-title">Our Services</h2>
            <div class="services">
                <?php
                $services = [
                    ['icon' => '💻', 'title' => 'Web Development', 'description' => 'Custom websites tailored to your needs'],
                    ['icon' => '📱', 'title' => 'Mobile App Development', 'description' => 'Innovative apps for iOS and Android'],
                    ['icon' => '🛡️', 'title' => 'Cybersecurity', 'description' => 'Protecting your digital assets'],
                    ['icon' => '☁️', 'title' => 'Cloud Solutions', 'description' => 'Scalable and efficient cloud services']
                ];

                foreach ($services as $service) {
                    echo "<div class='service-card'>";
                    echo "<div class='service-icon'>{$service['icon']}</div>";
                    echo "<h3>{$service['title']}</h3>";
                    echo "<p>{$service['description']}</p>";
                    echo "</div>";
                }
                ?>
            </div>
        </section>

        <section id="about" class="section">
            <h2 class="section-title">About Us</h2>
            <p style="text-align: center; max-width: 800px; margin: 0 auto;">
                SkillCraft Technology is a leading provider of innovative tech solutions. 
                With our team of expert developers and cutting-edge technologies, we help businesses 
                transform their digital presence and streamline their operations.
            </p>
        </section>

    </main>

    <footer class="footer">
        <p>&copy; 2023 SkillCraft Technology. All rights reserved.</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.getElementById('navbar');
            const navbarToggle = document.getElementById('navbar-toggle');
            const navbarMenu = document.getElementById('navbar-menu');

            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');          
                }
            });

            navbarToggle.addEventListener('click', function() {
                navbarMenu.classList.toggle('active');
            });

            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>
</body>
</html>
