<?php
require_once 'controller/transaksiController.php';

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * transaksiController test case.
 */
class transaksiControllerTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var transaksiController
     */
    private $transaksiController;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated transaksiControllerTest::setUp()
        
        $this->transaksiController = new transaksiController(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated transaksiControllerTest::tearDown()
        $this->transaksiController = null;
        
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
     * Tests transaksiController->__construct()
     */
    public function test__construct()
    {
        // TODO Auto-generated transaksiControllerTest->test__construct()
        $this->markTestIncomplete("__construct test not implemented");
        
        $this->transaksiController->__construct(/* parameters */);
    }

    /**
     * Tests transaksiController->viewInsert()
     */
    public function testViewInsert()
    {
        // TODO Auto-generated transaksiControllerTest->testViewInsert()
        $this->markTestIncomplete("viewInsert test not implemented");
        
        $this->transaksiController->viewInsert(/* parameters */);
    }

    /**
     * Tests transaksiController->detailInsert()
     */
    public function testDetailInsert()
    {
        // TODO Auto-generated transaksiControllerTest->testDetailInsert()
        $this->markTestIncomplete("detailInsert test not implemented");
        
        $this->transaksiController->detailInsert(/* parameters */);
    }

    /**
     * Tests transaksiController->__destruct()
     */
    public function test__destruct()
    {
        // TODO Auto-generated transaksiControllerTest->test__destruct()
        $this->markTestIncomplete("__destruct test not implemented");
        
        $this->transaksiController->__destruct(/* parameters */);
    }
}

