<?php use RamonChristopherMorales\ProfileRoles\PR;

class ProfileRolesTest extends PHPUnit_Framework_TestCase
{
    protected $pr;

    public function __construct() {
        $this->pr = new PR();
    }

    public function testConfig()
    {
        $this->assertTrue($this->pr->getConfig()?true:false);
    }
}