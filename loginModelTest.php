<?php
require_once 'model/loginModel.php';

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * loginModel test case.
 */
class loginModelTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var loginModel
     */
    private $loginModel;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated loginModelTest::setUp()
        
        $this->loginModel = new loginModel(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated loginModelTest::tearDown()
        $this->loginModel = null;
        
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
     * Tests loginModel->__construct()
     */
    public function test__construct()
    {
        // TODO Auto-generated loginModelTest->test__construct()
        $this->markTestIncomplete("__construct test not implemented");
        
        $this->loginModel->__construct(/* parameters */);
    }

    /**
     * Tests loginModel->execute()
     */
    public function testExecute()
    {
        // TODO Auto-generated loginModelTest->testExecute()
        $this->markTestIncomplete("execute test not implemented");
        
        $this->loginModel->execute(/* parameters */);
    }

    /**
     * Tests loginModel->fetch()
     */
    public function testFetch()
    {
        // TODO Auto-generated loginModelTest->testFetch()
        $this->markTestIncomplete("fetch test not implemented");
        
        $this->loginModel->fetch(/* parameters */);
    }

    /**
     * Tests loginModel->numRow()
     */
    public function testNumRow()
    {
        // TODO Auto-generated loginModelTest->testNumRow()
        $this->markTestIncomplete("numRow test not implemented");
        
        $this->loginModel->numRow(/* parameters */);
    }

    /**
     * Tests loginModel->select()
     */
    public function testSelect()
    {
        // TODO Auto-generated loginModelTest->testSelect()
        $this->markTestIncomplete("select test not implemented");
        
        $this->loginModel->select(/* parameters */);
    }

    /**
     * Tests loginModel->__destruct()
     */
    public function test__destruct()
    {
        // TODO Auto-generated loginModelTest->test__destruct()
        $this->markTestIncomplete("__destruct test not implemented");
        
        $this->loginModel->__destruct(/* parameters */);
    }
}

