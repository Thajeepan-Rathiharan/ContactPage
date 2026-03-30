<?php
// Check if form was submitted using POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize user input to prevent XSS attacks
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Basic validation (server-side)
    if (!empty($name) && !empty($email) && !empty($message)) {

        echo "
        <!DOCTYPE html>
        <html>
        <head>
            <link rel='stylesheet' href='style.css'>
        </head>
        <body>
            <div class='container'>
                <div class='form-card'>
                    <div class='success'>
                        <strong>Thank you, $name!</strong><br>
                        Your message has been received.
                    </div>
                    <br>
                    <a href='index.php'>Go Back</a>
                </div>
            </div>
        </body>
        </html>
        ";

    } else {
        echo "All fields are required.";
    }

} else {
    // Prevent direct access to this file without form submission
    header("Location: index.php");
    exit();
}
?>