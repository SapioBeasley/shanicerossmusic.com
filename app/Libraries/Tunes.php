<?php

namespace App\Libraries;


class Tunes
{
    public static function iTunesSearchTerm($term)
    {
        $term = urlencode(strtolower($term));

        $client = new \GuzzleHttp\Client();

        $res = $client->request('GET', 'https://itunes.apple.com/search?term=' . $term);

        if ($res->getStatusCode() !== 200) {
            return false;
        }

        return json_decode($res->getBody()->getContents(), true);
    }

    public static function spotifySearchTerm($term)
    {
        $term = urlencode(strtolower($term));

        $client = new \GuzzleHttp\Client();

        $base64Creds = base64_encode('ffe7c8521e5c44fc8a65c55fc7dad47e:ec703cb423624acebf4c680d8806b291');

        $token = $client->request('POST', 'https://accounts.spotify.com/api/token', [
          'headers' => [
            'Authorization' => 'Basic ' . $base64Creds
          ],
          'form_params' => [
            'grant_type' => 'client_credentials'
          ]
        ]);

        $token = json_decode($token->getBody());

        $res = $client->request('GET', 'https://api.spotify.com/v1/search?q=' . $term . '&type=track', [
          'headers' => [
            'Authorization' => $token->token_type . ' ' . $token->access_token
          ],
        ]);

        if ($res->getStatusCode() !== 200) {
            return false;
        }

        return json_decode($res->getBody()->getContents(), true);
    }
}
