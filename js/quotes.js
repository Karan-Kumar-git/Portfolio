// Motivational and coding-related quotes
const quotes = [
    {
        text: "The only way to do great work is to love what you do.",
        author: "Steve Jobs"
    },
    {
        text: "Code is like humor. When you have to explain it, it's bad.",
        author: "Cory House"
    },
    {
        text: "First, solve the problem. Then, write the code.",
        author: "John Johnson"
    },
    {
        text: "The best way to predict the future is to create it.",
        author: "Peter Drucker"
    },
    {
        text: "Clean code is not about perfection; it's about honesty.",
        author: "Robert C. Martin"
    },
    {
        text: "Innovation distinguishes between a leader and a follower.",
        author: "Steve Jobs"
    },
    {
        text: "The only limit to our realization of tomorrow will be our doubts of today.",
        author: "Franklin D. Roosevelt"
    },
    {
        text: "Programming isn't about what you know; it's about what you can figure out.",
        author: "Chris Pine"
    }
];

// Function to display random quote
function displayRandomQuote() {
    const quoteContainer = document.querySelector('.quote-container');
    if (!quoteContainer) return;

    const randomIndex = Math.floor(Math.random() * quotes.length);
    const quote = quotes[randomIndex];

    quoteContainer.innerHTML = `
        <div class="quote-content">
            <i class="fas fa-quote-left"></i>
            <p class="quote-text">${quote.text}</p>
            <p class="quote-author">- ${quote.author}</p>
        </div>
    `;
}

// Function to handle form validation
function validateContactForm() {
    const form = document.getElementById('contactForm');
    if (!form) return;

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const subject = document.getElementById('subject').value;
        const message = document.getElementById('message').value;

        let isValid = true;
        let errorMessage = '';

        // Name validation
        if (name.length < 2) {
            isValid = false;
            errorMessage += 'Name must be at least 2 characters long.\n';
        }

        // Email validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            isValid = false;
            errorMessage += 'Please enter a valid email address.\n';
        }

        // Subject validation
        if (subject.length < 3) {
            isValid = false;
            errorMessage += 'Subject must be at least 3 characters long.\n';
        }

        // Message validation
        if (message.length < 10) {
            isValid = false;
            errorMessage += 'Message must be at least 10 characters long.\n';
        }

        if (!isValid) {
            alert(errorMessage);
            return;
        }

        // If validation passes, submit the form
        form.submit();
    });
}

// Function to handle lazy loading of images
function handleLazyLoading() {
    const images = document.querySelectorAll('img[data-src]');
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
                observer.unobserve(img);
            }
        });
    });

    images.forEach(img => imageObserver.observe(img));
}

// Function to add background animation
function addBackgroundAnimation() {
    const body = document.body;
    body.classList.add('animated-background');
}

// Initialize all features
document.addEventListener('DOMContentLoaded', function() {
    displayRandomQuote();
    validateContactForm();
    handleLazyLoading();
    addBackgroundAnimation();
}); 