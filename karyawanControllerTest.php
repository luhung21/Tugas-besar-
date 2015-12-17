<?php
require_once 'controller/karyawanController.php';

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * karyawanController test case.
 */
class karyawanControllerTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var karyawanController
     */
    private $karyawanController;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated karyawanControllerTest::setUp()
        
        $this->karyawanController = new karyawanController(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated karyawanControllerTest::tearDown()
        $this->karyawanController = null;
        
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
     * Tests karyawanController->__construct()
     */
    public function test__construct()
    {
        // TODO Auto-generated karyawanControllerTest->test__construct()
        $this->markTestIncomplete("__construct test not implemented");
        
        $this->karyawanController->__construct(/* parameters */);
    }

    /**
     * Tests karyawanController->view()
     */
    public function testView()
    {
        // TODO Auto-generated karyawanControllerTest->testView()
        $this->markTestIncomplete("view test not implemented");
        
        $this->karyawanController->view(/* parameters */);
    }

    /**
     * Tests karyawanController->viewInsert()
     */
    public function testViewInsert()
    {
        // TODO Auto-generated karyawanControllerTest->testViewInsert()
        $this->markTestIncomplete("viewInsert test not implemented");
        
        $this->karyawanController->viewInsert(/* parameters */);
    }

    /**
     * Tests karyawanController->viewUpdate()
     */
    public function testViewUpdate()
    {
        // TODO Auto-generated karyawanControllerTest->testViewUpdate()
        $this->markTestIncomplete("viewUpdate test not implemented");
        
        $this->karyawanController->viewUpdate(/* parameters */);
    }

    /**
     * Tests karyawanController->insert()
     */
    public function testInsert()
    {
        // TODO Auto-generated karyawanControllerTest->testInsert()
        $this->markTestIncomplete("insert test not implemented");
        
        $this->karyawanController->insert(/* parameters */);
    }

    /**
     * Tests karyawanController->edit()
     */
    public function testEdit()
    {
        // TODO Auto-generated karyawanControllerTest->testEdit()
        $this->markTestIncomplete("edit test not implemented");
        
        $this->karyawanController->edit(/* parameters */);
    }

    /**
     * Tests karyawanController->delete()
     */
    public function testDelete()
    {
        // TODO Auto-generated karyawanControllerTest->testDelete()
        $this->markTestIncomplete("delete test not implemented");
        
        $this->karyawanController->delete(/* parameters */);
    }

    /**
     * Tests karyawanController->__destruct()
     */
    public function test__destruct()
    {
        // TODO Auto-generated karyawanControllerTest->test__destruct()
        $this->markTestIncomplete("__destruct test not implemented");
        
        $this->karyawanController->__destruct(/* parameters */);
    }
}

