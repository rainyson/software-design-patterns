<?php

namespace App\Singleton\Config;

class ConfigManager
{
    private array $settings = [];
    private static ConfigManager $configManager;

    private function __construct()
    {
    }

    public function set(string $key, string $value): void
    {
        $this->settings[$key] = $value;
    }

    public function get(string $key): string|null
    {
        return $this->settings[$key] ?? null;
    }

    public static function instance(): ConfigManager
    {
        if (empty(self::$configManager)) {
            self::$configManager = new ConfigManager();
        }
        return self::$configManager;
    }
}