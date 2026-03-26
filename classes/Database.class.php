<?php

/**
 * DatabaseManager Class
 * Handles Secure Data Storage and Retrieval.
 * Designed to be easily connected to Firebase or GitHub later.
 */
class DatabaseManager {
    private $connection;
    private $isFirebaseConnected = false;

    public function __construct() {
        // Placeholder: This is where you will initialize your Firebase SDK
        // e.g., $this->connection = new FirebaseHelper($config);
    }

    /**
     * Securely stores biometric data and user information.
     * Related to: Student Registration and Key Features[cite: 9, 55].
     */
    public function saveUser(User $user) {
        // HCI: Ensure data is securely stored in the database [cite: 13, 56]
        $data = [
            "id" => $user->getId(),
            "name" => $user->getName(),
            "status" => $user->isActive(),
            "type" => get_class($user) // Stores if user is 'Student' or 'Admin'
        ];

        // FUTURE FIREBASE CODE:
        // return $this->firestore->collection('users')->doc($data['id'])->set($data);
        
        return "System logic: Prepared to save " . $data['name'] . " to database.";
    }

    /**
     * Retrieves stored biometric records for comparison.
     * Related to: Biometric Authentication Login[cite: 21, 38].
     */
    public function getUserData($userId) {
        // Logic to fetch the student's encrypted biometric key [cite: 48, 56]
        // This supports the "Fast Authentication Process" [cite: 57, 58]
        
        // Placeholder return
        return [
            "id" => $userId,
            "biometric_key" => "stored_hash_value",
            "status" => true
        ];
    }

    /**
     * Monitor login attempts and view system logs.
     * Related to: Admin Monitoring and Control[cite: 39, 40, 61, 62].
     */
    public function logActivity($userId, $eventType, $status) {
        $logEntry = [
            "timestamp" => date("Y-m-d H:i:s"),
            "user_id" => $userId,
            "event" => $eventType, // e.g., "Failed biometric scan" [cite: 46]
            "status" => $status
        ];
        
        // FUTURE FIREBASE CODE:
        // $this->firestore->collection('logs')->add($logEntry);
        
        return true;
    }
}