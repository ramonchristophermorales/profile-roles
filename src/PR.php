<?php namespace RamonChristopherMorales\ProfileRoles;

/**
 * Class PR
 * @package RamonChristopherMorales\UserManagement
 */
class PR {

    /**
     * config path holder
     * @var
     */
    protected $configPath;


    /************************************************************************************
     *
     * GETTERS
     *
     */

    /**
     * returns all registered route paths
     *
     * @return array
     */
    public function getRoutePaths() {

        $return = [];

        foreach(\Route::getRoutes() as $route) {
            $return[] = $route->getPath();
        }

        return $return;
    }

    /**
     * returns all registered route names
     *
     * @return array
     */
    public function getRouteNames() {

        $return = [];

        foreach (\Route::getRoutes() as $route) {

            $routeName = $route->getName();

            if ($routeName) {
                $return[] = $routeName;
            }
        }

        return $return;
    }

    /**
     * returns all registered route action name
     *
     * @return array
     */
    public function getRouteActions() {

        $return = [];

        foreach (\Route::getRoutes() as $route) {

            $actionNameExplode = explode("\\", $route->getActionName());
            end($actionNameExplode);
            $actionName = $actionNameExplode[key($actionNameExplode)];

            $return[] = $actionName;
        }

        return $return;
    }


    /**
     * returns configuration array from the config file
     *
     * @param null $configPath
     * @return mixed|null
     * @throws \Exception
     */
    public function getConfig() {

        $config = null;

        if ($this->configPath) {

            if (file_exists($this->configPath)) {
                $config = require $this->configPath;
            } else {
                throw new \Exception("Failed to find STF configuration file with config path: " . $this->configPath);
            }

            return $config;
        }

        /**
         * for laravel only
         */
        if (function_exists('config')) {
            $config =  config('STF');
        }

        if (!$config) {
            if (file_exists(__DIR__.'/config.php')) {
                $config = require __DIR__.'/config.php';
            }
        }

        if (!$config) {
            throw new \Exception("Missing STF configuration file");
        }

        return $config;
    }

}
