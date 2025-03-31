<?php
// Function to sanitize input
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to validate email
function is_valid_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Function to send email notification
function send_email_notification($name, $email, $subject, $message) {
    $to = "karan90092u8y@gmail.com";
    
    // Email headers
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    // Email content
    $email_content = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background-color: #2563eb; color: white; padding: 20px; text-align: center; }
                .content { padding: 20px; background-color: #f9fafb; }
                .footer { text-align: center; padding: 20px; color: #6b7280; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>New Contact Form Submission</h2>
                </div>
                <div class='content'>
                    <p><strong>Name:</strong> $name</p>
                    <p><strong>Email:</strong> $email</p>
                    <p><strong>Subject:</strong> $subject</p>
                    <p><strong>Message:</strong></p>
                    <p>$message</p>
                </div>
                <div class='footer'>
                    <p>This email was sent from your portfolio website contact form.</p>
                </div>
            </div>
        </body>
        </html>
    ";
    
    return mail($to, "Portfolio Contact: $subject", $email_content, $headers);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    $success = false;
    
    // Get and sanitize form data
    $name = sanitize_input($_POST['name'] ?? '');
    $email = sanitize_input($_POST['email'] ?? '');
    $subject = sanitize_input($_POST['subject'] ?? '');
    $message = sanitize_input($_POST['message'] ?? '');
    
    // Validate inputs
    if (empty($name) || strlen($name) < 2) {
        $errors[] = "Name must be at least 2 characters long.";
    }
    
    if (empty($email) || !is_valid_email($email)) {
        $errors[] = "Please enter a valid email address.";
    }
    
    if (empty($subject) || strlen($subject) < 3) {
        $errors[] = "Subject must be at least 3 characters long.";
    }
    
    if (empty($message) || strlen($message) < 10) {
        $errors[] = "Message must be at least 10 characters long.";
    }
    
    // If there are no errors, send the email
    if (empty($errors)) {
        if (send_email_notification($name, $email, $subject, $message)) {
            $success = true;
        } else {
            $errors[] = "Failed to send email. Please try again later.";
        }
    }
    
    // Return JSON response
    header('Content-Type: application/json');
    echo json_encode([
        'success' => $success,
        'errors' => $errors,
        'message' => $success ? 'Message sent successfully!' : 'Please correct the errors below.'
    ]);
    exit;
} else {
    // If someone tries to access this file directly
    header("Location: contact.php");
    exit;
}
?> 