<?php namespace RamonChristopherMorales\ProfileRoles;

/**
 * Class PR
 * @package RamonChristopherMorales\UserManagement
 */
class PR {

    protected $config;


    public function __construct() {

        $this->config = $this->getConfig();
    }

    /**
     * returns the config array
     *
     * @return array|null
     */
    public function getConfig() {

        $config = null;

        if (function_exists('config')) {
            $config = config('profileRoles');
        }

        if (!$config && file_exists(__DIR__.'/config.php')) {
            $config = require __DIR__.'/config.php';
        }

        return $config;
    }

}
