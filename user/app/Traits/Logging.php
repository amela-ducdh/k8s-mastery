<?php

namespace App\Traits;

trait Logging
{
    public function sendTeamNotice($exception)
    {
        if (env('TEAM_WEBHOOK_URL')) {
            $message = $exception->getMessage();
            $content = $exception->getTraceAsString();

            try {
                $webhook = env('TEAM_WEBHOOK_URL');
                $client = new \GuzzleHttp\Client();
                $headers = ['Content-Type' => 'application/json'];
                $env = config('app.env');

                $body = [
                    'text' => "[$env] <strong>$message</strong> <p>$content</p>"
                ];

                $request = new \GuzzleHttp\Psr7\Request('POST', $webhook, $headers, json_encode($body));
                $client->send($request);
            } catch (\GuzzleHttp\Exception\GuzzleException $e) {
            }
        }
    }
}
