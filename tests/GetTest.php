<?php

class GetTest extends CommonTest {

    public function testGetRoutePaths() {

        $routePaths = $this->pr->getRoutePaths();

        $this->assertTrue(is_array($routePaths));
    }

    public function testGetRouteActions() {

        $routePaths = $this->pr->getRoutePaths();

        $this->assertTrue(is_array($routePaths));
    }

    public function testGetRouteNames() {

        $routePaths = $this->pr->getRoutePaths();

        $this->assertTrue(is_array($routePaths));
    }

}