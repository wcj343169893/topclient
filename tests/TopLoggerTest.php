<?php

use Taobao\TopClient\TopLogger;

/**
 * TopLogger test case.
 */
class TopLoggerTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var TopLogger
     */
    private $topLogger;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated TopLoggerTest::setUp()
        
        $this->topLogger = new TopLogger(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated TopLoggerTest::tearDown()
        $this->topLogger = null;
        
        parent::tearDown();
    }

    /**
     * Constructs the test case.
     */
    public function __construct()
    {
        // TODO Auto-generated constructor
    }

    /**
     * Tests TopLogger->log()
     */
    public function testLog()
    {
        // TODO Auto-generated TopLoggerTest->testLog()
        $this->markTestIncomplete("log test not implemented");
        
        $this->topLogger->log(/* parameters */);
    }
}

