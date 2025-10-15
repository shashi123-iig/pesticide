<?php
// $page_title = "Contact Us - Pesticide Company";
// $page_description = "Get in touch with our team for product inquiries or agricultural support.";
include 'includes/header.php';
?>

<main>
    <h1>Contact Us</h1>
    <p>Email: info@pesticidecompany.com</p>
    <p>Phone: +91-9876543210</p>

    <form action="send_message.php" method="POST">
        <label>Name:</label>
        <input type="text" name="name" required>
        
        <label>Email:</label>
        <input type="email" name="email" required>
        
        <label>Message:</label>
        <textarea name="message" required></textarea>

        <button type="submit">Send Message</button>
    </form>
</main>

<?php include 'includes/footer.php'; ?>
