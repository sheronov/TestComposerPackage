<?php


namespace WebRush;


class Status
{
    private const SUCCESS_CODE = 200;

    public static function getStatus(): string
    {
        return 'All services are work normally.';
    }

    public static function getStatusCode(): int
    {
        return self::SUCCESS_CODE;
    }
}