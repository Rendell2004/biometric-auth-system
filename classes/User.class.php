<?php

/**
 * Base User Class
 * Aligned with HCI principles for secure data handling and clear status management.
 */
class User {
    protected $id;
    protected $name;
    protected $biometricData; // Fingerprint or Facial scan string [cite: 4, 52]
    protected $status;        // Active or Deactive toggle [cite: 41]

    public function __construct($id, $name, $biometricData, $status = true) {
        $this->id = $id;
        $this->name = $name;
        $this->biometricData = $biometricData;
        $this->status = $status;
    }

    // Getters for display in the UI (HCI: Readable interface elements) [cite: 33]
    public function getName() {
        return htmlspecialchars($this->name);
    }

    public function getId() {
        return htmlspecialchars($this->id);
    }

    /**
     * Check if the user is allowed to access the system.
     * Related to Admin Management[cite: 41].
     */
    public function isActive() {
        return $this->status === true;
    }

    /**
     * Logic for Authentication [cite: 21, 52]
     * Compares captured scan against stored biometric data.
     */
    public function verifyBiometrics($capturedScan) {
        if (!$this->isActive()) {
            return ["success" => false, "message" => "Account is currently deactivated."]; [cite: 41, 49]
        }

        if ($this->biometricData === $capturedScan) {
            return ["success" => true, "message" => "Access granted."]; [cite: 22]
        } else {
            // HCI: Providing clear instructions when errors occur [cite: 60]
            return ["success" => false, "message" => "Biometric match failed. Please try again."]; [cite: 46, 47]
        }
    }
}