<?php

namespace App\Traits;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Http;

trait Token
{
    public function createSession($payload)
    {
        $token = $this->encodeAccessToken($payload);

        return $token;
    }

    public function decodeAccessToken($token)
    {
        try {
            return JWT::decode(
                $token,
                new Key(config('jwt.secret'), config('jwt.algo'))
            );
        } catch (\Exception $e) {
            throw new ModelNotFoundException(trans('messages.unauthorized'));
        }
    }

    public function encodeAccessToken($payload)
    {
        return JWT::encode($payload, config('jwt.secret'), config('jwt.algo'));
    }
}
