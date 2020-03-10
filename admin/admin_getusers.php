<?php
    require_once '../load.php';

    // Get all Roku users
    if (isset($_GET['allusers'])) {
        $users = getAllUsers();

        // Send this (all of the users or an error message) back to JS
        echo $users;
    }