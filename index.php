<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Makes page responsive on mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Form</title>

    <!-- Connect external stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <!-- 
        action="process.php" 
        → Sends form data to another file for processing
        method="POST"
        → Data is sent securely in the request body
    -->
    <form method="POST" action="post.php" class="form-card">

        <h2>Contact Me</h2>

        <!-- Name input -->
        <div class="input-group">
            <input type="text" name="name" required>
            <label>Your Name</label>
        </div>

        <!-- Email input -->
        <div class="input-group">
            <input type="email" name="email" required>
            <label>Your Email</label>
        </div>

        <!-- Message input -->
        <div class="input-group">
            <textarea name="message" rows="4" required></textarea>
            <label>Your Message</label>
        </div>

        <!-- Submit button -->
        <button type="submit">Send Message</button>

    </form>

</div>

</body>
</html>