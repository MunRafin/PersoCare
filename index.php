<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PersoCare - Your Personal Health Companion</title>
    
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="zCSS/common.css">
    <link rel="stylesheet" href="zCSS/landing.css">
</head>
<body>
    <!-- Header Navigation -->
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section: First thing users see - makes a strong impression -->
    <section class="hero">
        <div class="container">
            <h2>Your Personal Health Companion</h2>
            <p>Track your health metrics, manage appointments, and stay on top of your wellness journey with PersoCare's comprehensive health management platform.</p>
            
            <!-- Call-to-action buttons - encouraging user engagement -->
            <div class="hero-buttons">
                <a href="registerPC.php" class="btn-cta">Get Started</a>
                <a href="#features" class="btn btn-login" style="margin-left: 15px;">Learn More</a>
            </div>
            
            <!-- Visual representation of the app -->
            <div class="hero-image">
                <img src="zphotos/app-dashboard.png" alt="PersoCare Dashboard">
            </div>
        </div>
    </section>

    <!-- Features Section: Showcasing what makes PersoCare valuable -->
    <section class="features" id="features">
        <div class="container">
            <div class="section-title">
                <h3>Powerful Features</h3>
                <p>Everything you need to manage your health in one place</p>
            </div>
            
            <!-- Feature cards grid - automatically responsive -->
            <div class="features-grid">
                <!-- Health Tracking Feature -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="zphotos/icon-health.png" alt="Health Tracking">
                    </div>
                    <h4>Health Tracking</h4>
                    <p>Monitor your vital statistics, medications, and health progress over time.</p>
                </div>
                
                <!-- Appointment Management Feature -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="zphotos/icon-appointment.png" alt="Appointment Management">
                    </div>
                    <h4>Appointment Management</h4>
                    <p>Schedule and keep track of all your medical appointments in one calendar.</p>
                </div>
                
                <!-- Nutrition Tracking Feature -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="zphotos/icon-nutrition.png" alt="Nutrition Tracking">
                    </div>
                    <h4>Nutrition Tracking</h4>
                    <p>Log your meals, track calories, and monitor your nutritional intake.</p>
                </div>
                
                <!-- Exercise Logging Feature -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="zphotos/icon-exercise.png" alt="Exercise Logging">
                    </div>
                    <h4>Exercise Logging</h4>
                    <p>Record your workouts and track your fitness progress over time.</p>
                </div>
                
                <!-- Medication Reminders Feature -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="zphotos/icon-medication.png" alt="Medication Reminders">
                    </div>
                    <h4>Medication Reminders</h4>
                    <p>Never miss a dose with our smart medication reminder system.</p>
                </div>
                
                <!-- Doctor Connect Feature -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="zphotos/icon-doctor.png" alt="Doctor Connect">
                    </div>
                    <h4>Doctor Connect</h4>
                    <p>Communicate with your healthcare providers directly through the platform.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call-to-Action Section: Converting visitors to users -->
    <section class="cta">
        <div class="container">
            <h3>Ready to take control of your health?</h3>
            <p>Join thousands of users who are already managing their health with PersoCare.</p>
            <a href="registerPC.php" class="btn-cta">Create Your Free Account</a>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>