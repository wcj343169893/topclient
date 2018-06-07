<?php

use Taobao\TopClient\Mofing;

/**
 * Mofing test case.
 */
class MofingTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var Mofing
     */
    private $mofing;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated MofingTest::setUp()
        
        $this->mofing = new Mofing(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated MofingTest::tearDown()
        $this->mofing = null;
        
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
     * Tests Mofing->talk()
     */
    public function testTalk()
    {
        $this->mofing->talk(/* parameters */);
    }
}

