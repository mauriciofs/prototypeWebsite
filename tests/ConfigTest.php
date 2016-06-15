<?php

use PHPUnit\Framework\TestCase;
use Application\Config\Config;

/**
 * Config test case.
 */
class ConfigTest extends TestCase
{

    /**
     *
     * @var Config
     */
    private $config;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated ConfigTest::setUp()
        
        $this->config = new Config(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated ConfigTest::tearDown()
        $this->config = null;
        
        parent::tearDown();
    }

    public function testRun(){
        $this->assertTrue(false);
    }
}

