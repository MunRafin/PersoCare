<?php
/**
 * FOOTER COMPONENT
 * Reusable footer for all pages
 * Contains links, contact info, and copyright
 */
?>

<footer>
    <div class="container">
        <!-- Footer content grid: 4 columns of info -->
        <div class="footer-content">
            <!-- About PersoCare -->
            <div class="footer-column">
                <h4>PersoCare</h4>
                <p>Your personal health companion for tracking and managing all aspects of your wellness journey.</p>
            </div>
            
            <!-- Quick navigation links -->
            <div class="footer-column">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="loginPC.php">Login</a></li>
                    <li><a href="registerPC.php">Register</a></li>
                </ul>
            </div>
            
            <!-- Support and legal links -->
            <div class="footer-column">
                <h4>Support</h4>
                <ul>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">FAQs</a></li>
                </ul>
            </div>
            
            <!-- Contact information -->
            <div class="footer-column">
                <h4>Contact Us</h4>
                <ul>
                    <li>Email: info@persocare.com</li>
                    <li>Phone: +1 (123) 456-7890</li>
                    <li>Address: 123 Health St, Wellness City</li>
                </ul>
            </div>
        </div>
        
        <!-- Copyright notice -->
        <div class="copyright">
            <p>&copy; <?php echo date('Y'); ?> PersoCare. All rights reserved.</p>
        </div>
    </div>
</footer>