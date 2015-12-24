<?php

use RamonChristopherMorales\ProfileRoles;

class ProfileRolesTest extends TestCase
{

    public function configTest()
    {
        $this->assertTrue(\PR::getConfig());
    }
}