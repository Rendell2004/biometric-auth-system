<?php
// 1. Include the OOP Classes
require_once 'classes/User.class.php';
require_once 'classes/Student.class.php';
require_once 'classes/Admin.class.php';
require_once 'classes/Database.class.php';

// 2. Initialize the Database Bridge
$db = new DatabaseManager();

/**
 * SIMULATED LOGIN PROCESS
 * HCI Relation: Designed to reduce interaction steps and cognitive load[cite: 23].
 */

// Simulate fetching a student's data from the database [cite: 21]
$userData = $db->getUserData("2024-0001"); 

// Create the Student Object [cite: 8]
$currentStudent = new Student(
    $userData['id'], 
    "John Doe", 
    "stored_fingerprint_hash", // Securely stored data [cite: 56]
    $userData['status']
);

// Simulate a captured biometric scan from the hardware [cite: 12, 20]
$capturedScan = "stored_fingerprint_hash"; 

// 3. Perform Authentication Logic 
$authResult = $currentStudent->verifyBiometrics($capturedScan);

// 4. Handle Feedback (HCI-Focused) [cite: 49, 60]
if ($authResult['success']) {
    // Log the successful attempt for Admin monitoring [cite: 39]
    $db->logActivity($currentStudent->getId(), "Login", "Success");
    
    echo "<h3>" . $authResult['message'] . "</h3>";
    echo "<p>Welcome to the " . $currentStudent->getProfileData()['name'] . "!</p>";
    
    // Redirect to Student Dashboard [cite: 26]
    // header("Location: views/dashboard.php");
} else {
    // Log the failure for security tracking [cite: 39]
    $db->logActivity($currentStudent->getId(), "Login", "Failed Scan");
    
    // HCI: Clear error message to help user understand what went wrong [cite: 49, 60]
    echo "<div style='color: red;'>" . $authResult['message'] . "</div>";
}
?>