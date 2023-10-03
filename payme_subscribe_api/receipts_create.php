<?php
    $url = 'https://checkout.test.paycom.uz/api';

    $headers = [
        'Host: checkout.test.paycom.uz',
        'X-Auth: 5e730e8e0b852a417aa49ceb:ZPDODSiTYKuX0jyO7Kl2to4rQbNwG08jbghj',
        'Cache-Control: no-cache',
        'Content-Type: application/json',
    ];

    $json_data = '{
        "id": 4,
        "method": "receipts.create",
        "params": {
            "amount": 500000,
            "account": {
                "order_id": "test"
            },
            "detail": {
                "receipt_type": 0,
                "shipping": {
                    "title": "Доставка до ттз-4 28/23",
                    "price": 500000
                },
                "items": [
                    {
                        "discount":10000,
                        "title": "Помидоры",
                        "price": 505000,
                        "count": 2,
                        "code": "00702001001000001",
                        "units": 241092,
                        "vat_percent": 15,
                        "package_code": "123456"
                    }
                ]
            }
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
