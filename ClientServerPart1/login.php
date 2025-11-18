<?php

$response = [];

if($_SERVER["REQUEST_METHOD"] != "POST") {
    http_response_code(405);
    $response = [
        'message' => 'Method Not Allowed',
        'user' => null
    ];
}
else {
    $data = json_decode(
        file_get_contents(
            'php://input'
        ), true
    );

    if(isset($data['username']) && isset($data['password'])
        && $data['username'] == 'bob' && $data['password'] == '1234') {
        $response = [
            'message' => 'Login Success',
            'user' => [
                'id' => 1,
                'username' => 'bob'
            ]
        ];

        session_start();

        $_SESSION['user'] = $response['user'];
    }
    else {
        $response = [
            'message' => 'Login Failed',
            'user' => null
        ];
    }
}

echo json_encode($response);