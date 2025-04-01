<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karan Kumar - Portfolio</title>
    <link rel="stylesheet" href="css/style.css?v=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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

    <!-- Skills Preview -->
    <section class="skills-preview">
        <h2>Technical Expertise</h2>
        <div class="skills-grid">
            <div class="skill-card">
                <i class="fas fa-code"></i>
                <h3>Programming</h3>
                <p>Python, C, C++</p>
            </div>
            <div class="skill-card">
                <i class="fas fa-robot"></i>
                <h3>AI & Automation</h3>
                <p>Prompt Engineering, API Integration</p>
            </div>
            <div class="skill-card">
                <i class="fas fa-shield-alt"></i>
                <h3>Cybersecurity</h3>
                <p>Security Best Practices</p>
            </div>
            <div class="skill-card">
                <i class="fas fa-database"></i>
                <h3>Databases</h3>
                <p>SQL, Database Management</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-bottom">
            <p>&copy; 2024 Karan Kumar. All rights reserved.</p>
        </div>
    </footer>

    <script src="js/main.js"></script>
    <script src="js/quotes.js"></script>
    <script src="js/page-transition.js"></script>
</body>
</html> 