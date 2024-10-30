<?php

namespace App\Singleton\Logger;

class Logger
{
    private string $filename;
    private static array $instance = [];

    private function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public static function getInstance(string $filename): Logger
    {
        if (!isset(self::$instance[$filename])){
            self::$instance[$filename] = new Logger($filename);
        }
        return self::$instance[$filename];
    }

    public function write(string $message): void
    {
        echo "Writing a message: {$message} to the log. <br />";
    }
}