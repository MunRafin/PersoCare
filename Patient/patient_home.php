<?php
/**
 * PATIENT HOME - Main Dashboard Container
 * This file serves as the main layout for the patient portal
 * It includes the sidebar, topbar, and dynamically loads page content
 */

session_start();

// Security: Check if user is logged in and has correct role
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'patient') {
    header("Location: ../loginPC.php");
    exit();
}

// Get the requested page (default to dashboard)
$page = $_GET['page'] ?? 'dashboard';

// Define allowed pages - these correspond to patient_*.php files
$allowed_pages = [
    'dashboard',
    'dietplan',
    'exroutine',
    'addentry',
    'foodlog',
    'excerciselog',
    'medischedule',
    'medicinelog',
    'appointment',
    'prescriptions',
    'reports',
    'profile',
    'records',
    'symptoms',
    'family',
    'caregiver'
];

// Build the filename for the requested page
$page_file = "patient_" . $page . ".php";

// Page titles for the topbar
$page_titles = [
    'dashboard' => 'Dashboard',
    'dietplan' => 'Diet Plan',
    'exroutine' => 'Exercise Routine',
    'medischedule' => 'Medicine Schedule',
    'addentry' => 'Add Entry',
    'foodlog' => 'Food Log',
    'excerciselog' => 'Exercise Log',
    'medicinelog' => 'Medicine Log',
    'records' => 'All Records',
    'appointment' => 'Appointments',
    'prescriptions' => 'Prescriptions',
    'reports' => 'Reports',
    'profile' => 'Profile',
    'symptoms' => 'Symptoms',
    'family' => 'Family Members',
    'caregiver' => 'Care Givers'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>PersoCare | Patient Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="../zCSS/common.css">
    <link rel="stylesheet" href="../zCSS/dashboard.css">
</head>
<body>
    <!-- Mobile menu toggle button -->
    <button class="mobile-toggle" onclick="toggleMobileSidebar()">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Loading overlay - shows during page transitions -->
    <div class="loading-overlay" id="loadingOverlay">
        <div class="loading-spinner"></div>
    </div>

    <!-- Sidebar Navigation -->
    <?php 
    $current_page = $page;
    $user_role = 'patient';
    include '../includes/dashboard_sidebar.php'; 
    ?>

    <!-- Main Content Area -->
    <div class="main-wrapper">
        <!-- Top Navigation Bar -->
        <?php 
        $page_title = $page_titles[$page] ?? 'Unknown Page';
        $breadcrumb = 'Patient Portal';
        include '../includes/dashboard_topbar.php'; 
        ?>

        <!-- Dynamic Content Area -->
        <div class="content">
            <?php
            // Load the requested page if it exists and is allowed
            if (in_array($page, $allowed_pages) && file_exists($page_file)) {
                include $page_file;
            } else {
                // 404 error page
                echo "<div style='text-align: center; padding: 60px 20px;'>";
                echo "<i class='fas fa-exclamation-triangle' style='font-size: 4rem; color: #ef4444; margin-bottom: 20px;'></i>";
                echo "<h1 style='font-size: 2rem; margin-bottom: 10px; color: #1e293b;'>404 - Page Not Found</h1>";
                echo "<p style='color: #64748b; font-size: 1.1rem;'>The page you requested is not available.</p>";
                echo "</div>";
            }
            ?>
        </div>
    </div>

    <!-- AI Chat Assistant -->
    <?php include '../includes/ai_chat_widget.php'; ?>

    <!-- Dashboard JavaScript -->
    <script src="../zJS/dashboard.js"></script>
</body>
</html>