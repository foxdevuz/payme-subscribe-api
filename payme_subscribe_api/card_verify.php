<?php
    $url = 'https://checkout.test.paycom.uz/api';

    $headers = [
        'Host: checkout.test.paycom.uz',
        'X-Auth: 5e730e8e0b852a417aa49ceb',
        'Cache-Control: no-cache',
        'Content-Type: application/json',
    ];

    $json_data = '{
        "id": 123,
        "method": "cards.verify",
        "params": {
            "token": "651bdd447d00859911351800_DaWN5J8FNdj28anxMJ4nyZYwCKJS5A0yhI3wQXDfmnFHy3Jxx9ibyWy98Q7EjcUCW9kP6MuA7qNFu13rAqZsfcfvDwFM5DqX0TrFu1a3NCFH4ZkZciPq3rV0wP6SGm98srf8JvSeiAWSP20Uyqc27fxJzmNT70iHr5pusf1b88VpV77zWsq5Wk5OGzHBk70Eq96nmw7wSSIZ6K3EdTES2NKMUmCXPFa41COPzOfs868O5HuErBOTsB1TU7Ayw2MgwXUiQ79XNqYkeQme9f1AAPgMUiWbyYSDFfpr9ZjwC2uWJsIOfhTewzIuXaksx9r6zQ4XzsznwAo58yNJBifXKj3C6G4tQxrmWZTCOvnOF0jiguquC04Rta2yrY3V95TzmXeNvw",
            "code":"666666"
        }
    }';

    $curl = curl_init($url);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $json_data);

    $response = curl_exec($curl);

    if (curl_errno($curl)) {
        echo 'cURL error: ' . curl_error($curl);
    }

    curl_close($curl);

    echo $response;
