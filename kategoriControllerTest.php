<?php
require_once 'controller/kategoriController.php';

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * kategoriController test case.
 */
class kategoriControllerTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var kategoriController
     */
    private $kategoriController;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated kategoriControllerTest::setUp()
        
        $this->kategoriController = new kategoriController(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated kategoriControllerTest::tearDown()
        $this->kategoriController = null;
        
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
     * Tests kategoriController->__construct()
     */
    public function test__construct()
    {
        // TODO Auto-generated kategoriControllerTest->test__construct()
        $this->markTestIncomplete("__construct test not implemented");
        
        $this->kategoriController->__construct(/* parameters */);
    }

    /**
     * Tests kategoriController->view()
     */
    public function testView()
    {
        // TODO Auto-generated kategoriControllerTest->testView()
        $this->markTestIncomplete("view test not implemented");
        
        $this->kategoriController->view(/* parameters */);
    }

    /**
     * Tests kategoriController->viewInsert()
     */
    public function testViewInsert()
    {
        // TODO Auto-generated kategoriControllerTest->testViewInsert()
        $this->markTestIncomplete("viewInsert test not implemented");
        
        $this->kategoriController->viewInsert(/* parameters */);
    }

    /**
     * Tests kategoriController->viewUpdate()
     */
    public function testViewUpdate()
    {
        // TODO Auto-generated kategoriControllerTest->testViewUpdate()
        $this->markTestIncomplete("viewUpdate test not implemented");
        
        $this->kategoriController->viewUpdate(/* parameters */);
    }

    /**
     * Tests kategoriController->insert()
     */
    public function testInsert()
    {
        
        $result=$this->markTestIncomplete("Arios");
        
        $result->$this->kategoriController->insert(10,$result);
    }

    /**
     * Tests kategoriController->edit()
     */
    public function testEdit()
    {
        // TODO Auto-generated kategoriControllerTest->testEdit()
        $this->markTestIncomplete("edit test not implemented");
        
        $this->kategoriController->edit(/* parameters */);
    }

    /**
     * Tests kategoriController->delete()
     */
    public function testDelete()
    {
        // TODO Auto-generated kategoriControllerTest->testDelete()
        $this->markTestIncomplete("delete test not implemented");
        
        $this->kategoriController->delete(/* parameters */);
    }

    /**
     * Tests kategoriController->__destruct()
     */
    public function test__destruct()
    {
        // TODO Auto-generated kategoriControllerTest->test__destruct()
        $this->markTestIncomplete("__destruct test not implemented");
        
        $this->kategoriController->__destruct(/* parameters */);
    }
}

