<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karan Kumar - Portfolio</title>
    <link rel="stylesheet" href="css/style.css?v=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css?v=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap?v=1.0" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <a href="index.php" class="logo">
            <img src="logo.jpg" alt="Karan Kumar" width="50px" height="50px" style="border-radius: 50%;">
            <span class="logo-text">Karan Kumar</span>
        </a>
        <div class="nav-links">
            <a href="index.php" class="active">Home</a>
            <a href="about.php">About</a>
            <a href="certifications.php">Certifications</a>
            <a href="projects.php">Projects</a>
            <a href="contact.php">Contact</a>
        </div>
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <!-- Hero Section -->
    <main>
        <section class="hero page-transition">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Hi, I'm <span class="highlight">Karan Kumar</span></h1>
                    <h2>BCA Student & Tech Enthusiast</h2>
                    <p>Passionate about AI, API Integration, and Cybersecurity</p>
                    <div class="cta-buttons">
                        <a href="about.php" class="btn primary">Learn More</a>
                        <a href="contact.php" class="btn secondary">Get in Touch</a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="image-container">
                        <img src="logo1.jpeg" alt="Karan Kumar">
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Quote Section -->
    <div class="quote-container">
        <!-- Quote content will be dynamically inserted by JavaScript -->
    </div>

    <!-- Technical Expertise -->
    <section class="skills-preview">
        <h2>Technical Expertise</h2>
        <div class="skills-grid">
            <div class="skill-card">
                <div class="skill-icon">
                    <i class="fab fa-python"></i>
                </div>
                <div class="skill-info">
                    <h3>Python Development</h3>
                    <p>Strong foundation in Python programming with expertise in data structures, algorithms, and OOP.</p>
                    <div class="skill-stats">
                        <span>100+ Projects</span>
                        <span>5+ Years</span>
                    </div>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-icon">
                    <i class="fas fa-code"></i>
                </div>
                <div class="skill-info">
                    <h3>C/C++</h3>
                    <p>Proficient in system programming and low-level development with strong problem-solving skills.</p>
                    <div class="skill-level">
                        <div class="progress" style="width: 85%"></div>
                    </div>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-icon">
                    <i class="fab fa-html5"></i>
                </div>
                <div class="skill-info">
                    <h3>HTML5</h3>
                    <p>Expert in semantic HTML and modern web standards with focus on accessibility and SEO.</p>
                    <div class="skill-level">
                        <div class="progress" style="width: 95%"></div>
                    </div>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-icon">
                    <i class="fab fa-css3-alt"></i>
                </div>
                <div class="skill-info">
                    <h3>CSS3</h3>
                    <p>Advanced styling with modern CSS features, animations, and responsive design principles.</p>
                    <div class="skill-level">
                        <div class="progress" style="width: 90%"></div>
                    </div>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-icon">
                    <i class="fas fa-database"></i>
                </div>
                <div class="skill-info">
                    <h3>Databases</h3>
                    <p>Experience with SQL and NoSQL databases, data modeling, and query optimization.</p>
                    <div class="skill-level">
                        <div class="progress" style="width: 85%"></div>
                    </div>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-icon">
                    <i class="fas fa-robot"></i>
                </div>
                <div class="skill-info">
                    <h3>Basic AI & ML</h3>
                    <p>Understanding of fundamental AI/ML concepts and basic implementations.</p>
                    <div class="skill-level">
                        <div class="progress" style="width: 60%"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Karan Kumar. All rights reserved.</p>
        </div>
    </footer>

    <script src="js/main.js"></script>
    <script src="js/quotes.js"></script>
    <script src="js/page-transition.js"></script>
</body>
</html> 