<?php

/**
 * Admin Class
 * Inherits from User and handles account management and system monitoring.
 */
class Admin extends User {
    
    /**
     * Toggles a student's status between Active and Deactive.
     * Related to: Admin Management[cite: 41].
     */
    public function toggleStudentStatus(Student $student) {
        // In a real scenario, this would update the status in your Firebase record
        $currentStatus = $student->isActive();
        $newStatus = !$currentStatus;
        
        // Return a status report for the Admin UI
        return [
            "student_id" => $student->getId(),
            "new_status" => $newStatus ? "Active" : "Deactive",
            "message" => "Student " . $student->getName() . " is now " . ($newStatus ? "enabled." : "disabled.")
        ];
    }

    /**
     * Monitors login attempts and system logs[cite: 39, 40].
     * HCI Relation: Prioritizes efficiency by providing clear data controls.
     */
    public function viewSystemLogs($logsArray) {
        // This method processes raw log data for the Admin Panel view
        $formattedLogs = [];
        foreach ($logsArray as $log) {
            $formattedLogs[] = [
                "time" => $log['timestamp'],
                "user" => $log['user_id'],
                "event" => $log['event_type'], // e.g., "Successful Login" or "Failed Scan"
                "status" => $log['status']
            ];
        }
        return $formattedLogs;
    }
}