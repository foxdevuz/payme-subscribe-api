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
    "method": "cards.get_verify_code",
    "params": {
        "token": "651bdd447d00859911351800_DaWN5J8FNdj28anxMJ4nyZYwCKJS5A0yhI3wQXDfmnFHy3Jxx9ibyWy98Q7EjcUCW9kP6MuA7qNFu13rAqZsfcfvDwFM5DqX0TrFu1a3NCFH4ZkZciPq3rV0wP6SGm98srf8JvSeiAWSP20Uyqc27fxJzmNT70iHr5pusf1b88VpV77zWsq5Wk5OGzHBk70Eq96nmw7wSSIZ6K3EdTES2NKMUmCXPFa41COPzOfs868O5HuErBOTsB1TU7Ayw2MgwXUiQ79XNqYkeQme9f1AAPgMUiWbyYSDFfpr9ZjwC2uWJsIOfhTewzIuXaksx9r6zQ4XzsznwAo58yNJBifXKj3C6G4tQxrmWZTCOvnOF0jiguquC04Rta2yrY3V95TzmXeNvw"
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
