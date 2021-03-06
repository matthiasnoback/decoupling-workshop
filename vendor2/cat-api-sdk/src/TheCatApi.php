<?php
declare(strict_types=1);

namespace CatApiSdk;

use Assert\Assertion;

class TheCatApi
{
    public static function imagesSearch(): ImagesSearchResponse
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.thecatapi.com/v1/images/search",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "x-api-key: " . getenv('CAT_API_KEY')
            ),
        ));

        $response = curl_exec($curl);

        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
            echo "cURL Error #:" . $err;
            exit;
        } else {
            if (!is_string($response)) {
                $response = '';
            }
            $data = json_decode($response, true);
            if (!is_array($data)) {
                header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
                echo "Invalid JSON response";
                exit;
            }
            Assertion::keyExists($data, 0);
            Assertion::isArray($data[0]);

            return new ImagesSearchResponse($data[0]);
        }
    }
}
