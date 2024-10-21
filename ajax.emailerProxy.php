<?php
    // Enable error reporting for warnings and errors
    error_reporting(E_ALL);

    // Include the required initialization file
    include('../example/init.php');

    // Check if the request method is POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Extract form data sent via POST method
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // Sanitize email
        $subject = htmlspecialchars($_POST['subject']); // Sanitize subject to prevent XSS
        $message = htmlspecialchars($_POST['message']); // Sanitize message to prevent XSS
        $name = htmlspecialchars($_POST['name']); // Sanitize name

        // Ensure required fields are not empty
        if (!empty($email) && !empty($subject) && !empty($message) && !empty($name)) {

            // Insert the first email record
            $sql = "INSERT INTO OR_EMAILS (EMAIL, TITLE, ATTACHMENT, MESSAGE, STATUS) VALUES (?, ?, '', ?, 'new')";
            $sisDao->insert($sql, ['example@email.com', $subject, $message]);

            // Insert the confirmation email to the user
            $sql = "INSERT INTO OR_EMAILS (EMAIL, TITLE, ATTACHMENT, MESSAGE, STATUS) VALUES (?, 'Thank you for contacting us', '', ?, 'new')";
            $confirmationMessage = "Thank you $name for contacting us. We have received your message and will revert shortly.";
            $sisDao->insert($sql, [$email, $confirmationMessage]);

            // Output a success message
            echo 'OK';
        } else {
            echo 'All fields are required.';
        }
    }
?>
