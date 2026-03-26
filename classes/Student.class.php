<?php

/**
 * Student Class
 * Inherits from User and manages personal dashboard features.
 */
class Student extends User {
    private $schedule = [];
    private $notifications = [];

    /**
     * Viewing personal profile.
     * HCI Relation: Designed with a readable interface in mind.
     */
    public function getProfileData() {
        return [
            "name" => $this->getName(),
            "id" => $this->getId(),
            "status" => $this->isActive() ? "Active Student" : "Account Suspended"
        ];
    }

    /**
     * Access to secured resources like schedules and announcements.
     * Related to: Student Dashboard functionalities.
     */
    public function fetchSchedules($dbData) {
        // HCI: Clear navigation and organized layout for schedules
        $this->schedule = $dbData; 
        return $this->schedule;
    }

    /**
     * Check for subjects when the teacher adds activities or quizzes.
     * Related to: System notifications and academic tracking.
     */
    public function getAcademicUpdates($updates) {
        $this->notifications = $updates;
        return $this->notifications;
    }
}