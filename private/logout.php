<!-- Logging out of page   -->
<?php
if (isset($_POST['logout'])) {
    // Starting session if not already created
    session_start();
    session_unset();
    // Destroying session if not already created
    session_destroy();
    header("Location: /php/login.php");
}
?>