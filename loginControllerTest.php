<?php
require_once 'controller/loginController.php';

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * loginController test case.
 */
class loginControllerTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var loginController
     */
    private $loginController;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated loginControllerTest::setUp()
        
        $this->loginController = new loginController(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated loginControllerTest::tearDown()
        $this->loginController = null;
        
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
     * Tests loginController->__construct()
     */
    public function test__construct()
    {
        // TODO Auto-generated loginControllerTest->test__construct()
        $this->markTestIncomplete("__construct test not implemented");
        
        $this->loginController->__construct(/* parameters */);
    }

    /**
     * Tests loginController->login()
     */
    public function testLogin()
    {
        // TODO Auto-generated loginControllerTest->testLogin()
        $this->markTestIncomplete("login test not implemented");
        
        $this->loginController->login(/* parameters */);
    }

    /**
     * Tests loginController->logout()
     */
    public function testLogout()
    {
        // TODO Auto-generated loginControllerTest->testLogout()
        $this->markTestIncomplete("logout test not implemented");
        
        $this->loginController->logout(/* parameters */);
    }

    /**
     * Tests loginController->__destruct()
     */
    public function test__destruct()
    {
        // TODO Auto-generated loginControllerTest->test__destruct()
        $this->markTestIncomplete("__destruct test not implemented");
        
        $this->loginController->__destruct(/* parameters */);
    }
}

