<?php

class User {
    
    public function getName() {
        // .. return user name
    }
    
    public function getAddress() {
        // .. return user address
    }
}

class Mailer {
    
    public function sendEmail() {
        // .. sending email to user
    }
    
}

class PhotoUploader {
    public function uploadPhoto() {
        // .. upload photo
    }
}

$user = new User();
$mailer = new Mailer();

//$user->sendEmail('User created');