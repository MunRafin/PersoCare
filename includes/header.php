<?php
/**
 * HEADER NAVIGATION
 * Reusable header component for all pages
 * Displays logo, navigation links, and auth buttons
 */
?>

<header>
    <div class="container">
        <nav>
            <!-- Logo section -->
            <div class="logo">
                <img src="zphotos/logo.png" alt="PersoCare Logo">
                <h1>PersoCare</h1>
            </div>
            
            <!-- Main navigation links -->
            <ul class="nav-links">
                <li><a href="#features">Features</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            
            <!-- Login and Register buttons -->
            <div class="auth-buttons">
                <a href="loginPC.php" class="btn btn-login">Login</a>
                <a href="registerPC.php" class="btn btn-register">Register</a>
            </div>
        </nav>
    </div>
</header>