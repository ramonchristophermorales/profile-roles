<?php

use RamonChristopherMorales\ProfileRoles\PR;

class CommonTest extends PHPUnit_Framework_TestCase
{

    public $pr;

    public function __construct($name = NULL, array $data = array(), $dataName = '') {
        parent::__construct($name, $data, $dataName);

        $this->setUpBeforeClass();
        $this->pr = new PR();
    }

    public function assertSTF($actual)
    {
        $this->assertInstanceOf('RamonChristopherMorales\ProfileRoles\PR', $actual);
    }

    public function testProfileRolesClass() {
        $this->assertNotEmpty($this->pr);
    }

    public function testAttributeConfigPath() {
        $this->assertClassHasAttribute('configPath', 'RamonChristopherMorales\ProfileRoles\PR');
    }


}
