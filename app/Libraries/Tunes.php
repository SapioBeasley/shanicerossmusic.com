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

        $res = $client->request('GET', 'https://api.spotify.com/v1/search?q=' . $term . '&type=track');

        if ($res->getStatusCode() !== 200) {
            return false;
        }

        return json_decode($res->getBody()->getContents(), true);
    }
}
