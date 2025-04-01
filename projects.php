<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - Karan Kumar</title>
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
            <a href="about.php">About</a>
            <a href="certifications.php">Certifications</a>
            <a href="projects.php" class="active">Projects</a>
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

    <!-- Projects Section -->
    <main>
        <section class="projects-section page-transition">
            <div class="container">
                <h1 class="section-title">My Projects</h1>
                
                <!-- Quote Section -->
                <div class="quote-container">
                    <!-- Quote content will be dynamically inserted by JavaScript -->
                </div>
                
                <!-- AI Projects Section -->
                <div class="projects-category">
                    <h2 class="category-title">
                        <i class="fas fa-robot"></i>
                        AI & Machine Learning Projects
                    </h2>
                    <div class="projects-grid">
                        <div class="project-card coming-soon">
                            <div class="project-icon">
                                <i class="fas fa-brain"></i>
                            </div>
                            <div class="project-content">
                                <h3>AI Chat Assistant</h3>
                                <p>An intelligent chatbot powered by advanced language models</p>
                                <div class="project-tech">
                                    <span>Python</span>
                                    <span>OpenAI API</span>
                                    <span>NLP</span>
                                </div>
                                <div class="project-status">
                                    <span class="status-badge">Coming Soon</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card coming-soon">
                            <div class="project-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="project-content">
                                <h3>Predictive Analytics Tool</h3>
                                <p>Machine learning model for business forecasting</p>
                                <div class="project-tech">
                                    <span>Python</span>
                                    <span>TensorFlow</span>
                                    <span>Data Analysis</span>
                                </div>
                                <div class="project-status">
                                    <span class="status-badge">Coming Soon</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- General Projects Section -->
                <div class="projects-category">
                    <h2 class="category-title">
                        <i class="fas fa-code"></i>
                        General Projects
                    </h2>
                    <div class="projects-grid">
                        <div class="project-card coming-soon">
                            <div class="project-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="project-content">
                                <h3>Portfolio Website</h3>
                                <p>A modern, responsive portfolio website</p>
                                <div class="project-tech">
                                    <span>HTML5</span>
                                    <span>CSS3</span>
                                    <span>JavaScript</span>
                                </div>
                                <div class="project-status">
                                    <span class="status-badge">In Progress</span>
                                </div>
                            </div>
                        </div>

                        <div class="project-card coming-soon">
                            <div class="project-icon">
                                <i class="fas fa-database"></i>
                            </div>
                            <div class="project-content">
                                <h3>Database Management System</h3>
                                <p>Efficient database management solution</p>
                                <div class="project-tech">
                                    <span>SQL</span>
                                    <span>Python</span>
                                    <span>Database Design</span>
                                </div>
                                <div class="project-status">
                                    <span class="status-badge">Coming Soon</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Coming Soon Message -->
                <div class="coming-soon-message">
                    <i class="fas fa-rocket"></i>
                    <h3>More Projects Coming Soon!</h3>
                    <p>I'm constantly working on new projects to enhance my skills and create innovative solutions.</p>
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