<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - Karan Kumar</title>
    <link rel="stylesheet" href="css/style.css">
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
            <a href="index.php">Home</a>
            <a href="about.php" class="active">About</a>
            <a href="certifications.php">Certifications</a>
            <a href="projects.php">Projects</a>
            <a href="contact.php">Contact</a>
        </div>
        <div class="theme-toggle">
            <i class="fas fa-moon"></i>
        </div>
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <!-- About Section -->
    <main>
        <section class="about-section page-transition">
            <div class="container">
                <h1 class="section-title">About Me</h1>
                
                <!-- Quote Section -->
                <div class="quote-container">
                    <!-- Quote content will be dynamically inserted by JavaScript -->
                </div>

                <div class="about-content">
                    <div class="about-text">
                        <p class="lead">I am a passionate BCA student with a keen interest in technology and innovation. My journey in computer science has been driven by a desire to understand and create solutions that make a difference.</p>
                        
                        <div class="skills-container">
                            <h2>Technical Skills</h2>
                            <div class="skills-grid">
                                <div class="skill-item">
                                    <i class="fab fa-python"></i>
                                    <h3>Python</h3>
                                    <div class="skill-level">
                                        <div class="progress" style="width: 90%"></div>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <i class="fas fa-code"></i>
                                    <h3>C/C++</h3>
                                    <div class="skill-level">
                                        <div class="progress" style="width: 85%"></div>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <i class="fab fa-html5"></i>
                                    <h3>HTML5</h3>
                                    <div class="skill-level">
                                        <div class="progress" style="width: 95%"></div>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <i class="fab fa-css3-alt"></i>
                                    <h3>CSS3</h3>
                                    <div class="skill-level">
                                        <div class="progress" style="width: 90%"></div>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <i class="fas fa-database"></i>
                                    <h3>Databases</h3>
                                    <div class="skill-level">
                                        <div class="progress" style="width: 85%"></div>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <i class="fas fa-robot"></i>
                                    <h3>AI & Automation</h3>
                                    <div class="skill-level">
                                        <div class="progress" style="width: 80%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="timeline">
                            <h2>Education & Journey</h2>
                            <div class="timeline-item">
                                <div class="timeline-date">2021 - Present</div>
                                <div class="timeline-content">
                                    <h3>Bachelor of Computer Applications (BCA)</h3>
                                    <p>Currently pursuing my BCA degree with a focus on software development and AI technologies.</p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-date">2020</div>
                                <div class="timeline-content">
                                    <h3>High School</h3>
                                    <p>Completed high school with a strong foundation in computer science.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

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