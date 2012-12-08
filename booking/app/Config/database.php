<?php
class DATABASE_CONFIG
{
    public $default = null;
    public $test    = null;
    public $env     = null;
    /**
     * Switch configuration based on environment
     */
    function __construct() {
        // Check that a suitable environment is defined
        if (!defined('APP_ENV')) {
            return false;
        }
        $this->env = APP_ENV;
        // Try to read database settings from the current ENV file
        $config = Configure::read('Database.config');
        if (!is_array($config)) {
            return false;
        }
        // Load all config database profiles
        foreach ($config as $name => $data) {
            $this->$name = $data;
        }
        // Throw an error if there is no suitable configuration
        if (empty($config['default']) || empty($this->default)) {
            return false;
        }
    }
}