<?php

class ConfigTest extends CommonTest {

    
    /**
     * test the config file if exists
     *
     * @param array $stack
     * @return mixed|null
     * @throws Exception
     */
    public function testConfig() {

        $config = $this->pr->getConfig();
        $this->assertNotEmpty($config);

        return $config;
    }

    /**
     * @depends testConfig
     * @param array $config
     * @return array
     */
    public function testConfigType(array $config) {

        $this->assertTrue(is_array($config));

        return $config;
    }

    /**
     * @depends testConfigType
     * @param array $config
     */
    public function testConfigTables(array $config) {

        $this->assertArrayHasKey('tables', $config);

        if (isset($config['tables'])) {
            $this->assertNotEmpty($config['tables']);
            return $config['tables'];

        } else {
            return [];
        }
    }

    /**
     * @depends testConfigType
     * @param array $config
     */
    public function testConfigLink(array $config) {

        $this->assertArrayHasKey('link', $config);

        if (isset($config['link'])) {
            $this->assertNotEmpty($config['link']);
            return $config['link'];
        } else {
            return [];
        }
    }

    /**
     * @depends testConfigTables
     * @param array $configTables
     */
    public function testConfigTablesRoles(array $configTables) {

        $this->assertArrayHasKey('roles', $configTables);

        if (isset($configTables['roles'])) {
            $this->assertNotEmpty($configTables['roles']);
        }
    }

    /**
     * @depends testConfigTables
     * @param array $configTables
     */
    public function testConfigTablesProfiles(array $configTables) {

        $this->assertArrayHasKey('profiles', $configTables);

        if (isset($configTables['profiles'])) {
            $this->assertNotEmpty($configTables['profiles']);
        }
    }

    /**
     * @depends testConfigTables
     * @param array $configTables
     */
    public function testConfigTablesAccess(array $configTables) {

        $this->assertArrayHasKey('access', $configTables);

        if (isset($configTables['access'])) {
            $this->assertNotEmpty($configTables['access']);
        }
    }

    /**
     * @depends testConfigLink
     * @param array $config
     */
    public function testConfigLinkTable(array $configLink) {

        $this->assertArrayHasKey('table', $configLink);

        if (isset($configLink['table'])) {
            $this->assertNotEmpty($configLink['table']);
        }
    }

    /**
     * @depends testConfigLink
     * @param array $config
     */
    public function testConfigLinkId(array $configLink) {

        $this->assertArrayHasKey('id', $configLink);

        if (isset($configLink['id'])) {
            $this->assertNotEmpty($configLink['id']);
        }
    }

}