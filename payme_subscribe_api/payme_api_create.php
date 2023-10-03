<?php
    // Define the URL you want to send the request to
    $url = 'https://checkout.test.paycom.uz/api';

    // Define the request headers
    $headers = [
        'Host: checkout.test.paycom.uz',
        'X-Auth: 5e730e8e0b852a417aa49ceb',
        'Cache-Control: no-cache',
        'Content-Type: application/json', // Specify the content type as JSON
    ];

    // Define the request body as a JSON string
    $request_body = '{
        "id": 123,
        "method": "cards.create",
        "params": {
                "card": { "number": "8600069195406311  ", "expire": "0399"},
            "save": true
        }
    }';

    // Initialize cURL session
    $curl = curl_init($url);

    // Set cURL options
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $request_body);

    // Execute cURL and capture the response
    $response = curl_exec($curl);

    // Check for cURL errors
    if (curl_errno($curl)) {
        echo 'cURL error: ' . curl_error($curl);
    }

    // Close cURL session
    curl_close($curl);

    // Handle the response as needed
    echo $response;
