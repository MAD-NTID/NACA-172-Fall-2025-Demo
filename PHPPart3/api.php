<?php

// Begin API

// Check it is post, and has the parameter "action"
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    // Decide which function to run based on 'action'
    session_start();

    $response = [
        "status" => "",
        "message" => ""
    ];
    
    switch($_POST['action'])
    {
        case 'login':
            
            $username = "mberrios";
            $password = "password!";

            // Match the username and password
            if($username === $_POST['username'] && $password === $_POST['password']) {
                // Once logged in and session startedd, redirect back to index.php
                $_SESSION['cookie'] = [
                    'username' => $_POST['username']
                ];

                $response = [
                    'status'=> 'success',
                    'message'=> 'Logged in successfully'
                ];
            }

            else {
                $response = [
                    "status"=> "invalid",
                    "message"=> "Missing username and password"
                ];
            }

            break;
        case 'logout':
            // This LOGS OUT THE USER
            session_unset();


            $response = [
                'status'=> 'success',
                'message'=> 'Logged out successfully'
            ];

            break;
        default:
            $response = [
                "status"=> "error",
                "message"=> "Sorry, invalid request"
            ];

            break;
    }

    // Convert the response to a json string
    $response = json_encode($response);
    
    header('Content-Type: application/json');

    echo $response;
}
else {
    echo "Invalid Request. POST ONLY";
}
// this is the end of file.....
// PHP knows to stop the session
// REmember, requests are STATELESS