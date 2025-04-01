<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Karan Kumar</title>
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
            <a href="projects.php">Projects</a>
            <a href="contact.php" class="active">Contact</a>
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

    <!-- Contact Section -->
    <main>
        <section class="contact-section page-transition">
            <div class="container">
                <h1 class="section-title">Get in Touch</h1>
                
                <!-- Quote Section -->
                <div class="quote-container">
                    <!-- Quote content will be dynamically inserted by JavaScript -->
                </div>
                
                <div class="contact-grid">
                    <!-- Contact Information -->
                    <div class="contact-info">
                        <h2>Contact Information</h2>
                        <div class="info-items">
                            <div class="info-item">
                                <i class="fas fa-phone"></i>
                                <div class="info-content">
                                    <h3>Phone</h3>
                                    <p><a href="tel:7696030897">+91 7696030897</a></p>
                                </div>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-envelope"></i>
                                <div class="info-content">
                                    <h3>Email</h3>
                                    <p><a href="mailto:karan90092u8y@gmail.com">karan90092u8y@gmail.com</a></p>
                                </div>
                            </div>
                            <div class="info-item">
                                <i class="fab fa-github"></i>
                                <div class="info-content">
                                    <h3>GitHub</h3>
                                    <p><a href="https://github.com/karan-kumar-git" target="_blank">karan-kumar-git</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="social-links-large">
                            <a href="https://github.com/karan-kumar-git" target="_blank" class="social-link">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="mailto:karan90092u8y@gmail.com" class="social-link">
                                <i class="fas fa-envelope"></i>
                            </a>
                            <a href="tel:7696030897" class="social-link">
                                <i class="fas fa-phone"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="contact-form">
                        <h2>Send a Message</h2>
                        <form action="process_contact.php" method="POST" id="contactForm">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" required>
                                <div class="error-message"></div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" required>
                                <div class="error-message"></div>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" id="subject" name="subject" required>
                                <div class="error-message"></div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" rows="5" required></textarea>
                                <div class="error-message"></div>
                            </div>
                            <div class="form-status"></div>
                            <button type="submit" class="submit-btn">
                                <span class="btn-text">Send Message</span>
                                <span class="btn-loader"></span>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Google Maps -->
                <div class="map-container">
                    <h2>Location</h2>
                    <div class="map">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448196.0536827244!2d76.072876!3d28.643795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347f62e7%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1647689123456!5m2!1sen!2sin"
                            width="100%" 
                            height="450" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
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
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('contactForm');
        const submitBtn = form.querySelector('.submit-btn');
        const btnText = submitBtn.querySelector('.btn-text');
        const btnLoader = submitBtn.querySelector('.btn-loader');
        const formStatus = form.querySelector('.form-status');
        const errorMessages = form.querySelectorAll('.error-message');

        // Clear error messages
        function clearErrors() {
            errorMessages.forEach(error => error.textContent = '');
            formStatus.textContent = '';
            formStatus.className = 'form-status';
        }

        // Show error message
        function showError(field, message) {
            const errorDiv = field.nextElementSibling;
            errorDiv.textContent = message;
            errorDiv.style.display = 'block';
        }

        // Show form status message
        function showStatus(message, isError = false) {
            formStatus.textContent = message;
            formStatus.className = `form-status ${isError ? 'error' : 'success'}`;
        }

        // Handle form submission
        form.addEventListener('submit', async function(e) {
            e.preventDefault();
            clearErrors();

            // Show loading state
            submitBtn.disabled = true;
            btnText.style.display = 'none';
            btnLoader.style.display = 'block';

            try {
                const formData = new FormData(form);
                const response = await fetch('process_contact.php', {
                    method: 'POST',
                    body: formData
                });

                const data = await response.json();

                if (data.success) {
                    showStatus(data.message);
                    form.reset();
                } else {
                    showStatus(data.message, true);
                    if (data.errors) {
                        data.errors.forEach(error => {
                            const field = form.querySelector(`[name="${error.field}"]`);
                            if (field) {
                                showError(field, error.message);
                            }
                        });
                    }
                }
            } catch (error) {
                showStatus('An error occurred. Please try again later.', true);
            } finally {
                // Reset button state
                submitBtn.disabled = false;
                btnText.style.display = 'block';
                btnLoader.style.display = 'none';
            }
        });

        // Real-time validation
        form.querySelectorAll('input, textarea').forEach(field => {
            field.addEventListener('input', function() {
                const errorDiv = this.nextElementSibling;
                if (errorDiv && errorDiv.classList.contains('error-message')) {
                    errorDiv.textContent = '';
                    errorDiv.style.display = 'none';
                }
            });
        });
    });
    </script>
</body>
</html> 