<?php

require_once '../utils/validate.php';

class UserController {

    public function validateUser($userData) {
        $validationResult = validateUserRegistration($userData);

        if ($validationResult['isValid']) {
            // Proceed with further processing
            return "User is valid.";
        } else {
            // Handle validation errors
            return "Validation failed: " . implode(", ", $validationResult['errors']);
        }
    }
}

// Example usage
$userController = new UserController();
$userData = [
    'username' => 'exampleUser',
    'email' => 'user@example.com',
    'password' => 'examplePassword'
];

echo $userController->validateUser($userData);

?>