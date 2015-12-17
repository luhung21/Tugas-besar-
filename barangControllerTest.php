<?php
require_once 'controller/barangController.php';

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * barangController test case.
 */
class barangControllerTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var barangController
     */
    private $barangController;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated barangControllerTest::setUp()
        
        $this->barangController = new barangController(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated barangControllerTest::tearDown()
        $this->barangController = null;
        
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
     * Tests barangController->__construct()
     */
    public function test__construct()
    {
        // TODO Auto-generated barangControllerTest->test__construct()
        $this->markTestIncomplete("__construct test not implemented");
        
        $this->barangController->__construct(/* parameters */);
    }

    /**
     * Tests barangController->view()
     */
    public function testView()
    {
        // TODO Auto-generated barangControllerTest->testView()
        $this->markTestIncomplete("view test not implemented");
        
        $this->barangController->view(/* parameters */);
    }

    /**
     * Tests barangController->viewInsert()
     */
    public function testViewInsert()
    {
        // TODO Auto-generated barangControllerTest->testViewInsert()
        $this->markTestIncomplete("viewInsert test not implemented");
        
        $this->barangController->viewInsert(/* parameters */);
    }

    /**
     * Tests barangController->viewUpdate()
     */
    public function testViewUpdate()
    {
        // TODO Auto-generated barangControllerTest->testViewUpdate()
        $this->markTestIncomplete("viewUpdate test not implemented");
        
        $this->barangController->viewUpdate(/* parameters */);
    }

    /**
     * Tests barangController->insert()
     */
    public function testInsert()
    {
        // TODO Auto-generated barangControllerTest->testInsert()
        $this->markTestIncomplete("insert test not implemented");
        
        $this->barangController->insert(/* parameters */);
    }

    /**
     * Tests barangController->edit()
     */
    public function testEdit()
    {
        // TODO Auto-generated barangControllerTest->testEdit()
        $this->markTestIncomplete("edit test not implemented");
        
        $this->barangController->edit(/* parameters */);
    }

    /**
     * Tests barangController->delete()
     */
    public function testDelete()
    {
        // TODO Auto-generated barangControllerTest->testDelete()
        $this->markTestIncomplete("delete test not implemented");
        
        $this->barangController->delete(/* parameters */);
    }

    /**
     * Tests barangController->__destruct()
     */
    public function test__destruct()
    {
        // TODO Auto-generated barangControllerTest->test__destruct()
        $this->markTestIncomplete("__destruct test not implemented");
        
        $this->barangController->__destruct(/* parameters */);
    }
}

