<?php

namespace Xenokore\Inspirobot;

use Xenokore\Inspirobot\Exception\InspirobotException;

class Inspirobot
{
    public static function generateUrl(): string
    {
        $client   = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'http://inspirobot.me/api?generate=true');

        $body = $response->getBody();

        if ($body && \filter_var($body, FILTER_VALIDATE_URL) !== false) {
            return $body;
        }

        throw new InspirobotException('Failed to get inspirobot image URL');
    }
}
