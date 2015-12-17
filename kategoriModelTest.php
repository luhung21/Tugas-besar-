<?php
require_once 'model/kategoriModel.php';

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * kategoriModel test case.
 */
class kategoriModelTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var kategoriModel
     */
    private $kategoriModel;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated kategoriModelTest::setUp()
        
        $this->kategoriModel = new kategoriModel(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated kategoriModelTest::tearDown()
        $this->kategoriModel = null;
        
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
     * Tests kategoriModel->execute()
     */
    public function testExecute()
    {
        // TODO Auto-generated kategoriModelTest->testExecute()
        $this->markTestIncomplete("execute test not implemented");
        
        $this->kategoriModel->execute(/* parameters */);
    }

    /**
     * Tests kategoriModel->fetch()
     */
    public function testFetch()
    {
        // TODO Auto-generated kategoriModelTest->testFetch()
        $this->markTestIncomplete("fetch test not implemented");
        
        $this->kategoriModel->fetch(/* parameters */);
    }

    /**
     * Tests kategoriModel->selectAll()
     */
    public function testSelectAll()
    {
        // TODO Auto-generated kategoriModelTest->testSelectAll()
        $this->markTestIncomplete("selectAll test not implemented");
        
        $this->kategoriModel->selectAll(/* parameters */);
    }

    /**
     * Tests kategoriModel->select()
     */
    public function testSelect()
    {
        // TODO Auto-generated kategoriModelTest->testSelect()
        $this->markTestIncomplete("select test not implemented");
        
        $this->kategoriModel->select(/* parameters */);
    }

    /**
     * Tests kategoriModel->insert()
     */
    public function testInsert()
    {
        // TODO Auto-generated kategoriModelTest->testInsert()
        $this->markTestIncomplete("insert test not implemented");
        
        $this->kategoriModel->insert(/* parameters */);
    }

    /**
     * Tests kategoriModel->update()
     */
    public function testUpdate()
    {
        // TODO Auto-generated kategoriModelTest->testUpdate()
        $this->markTestIncomplete("update test not implemented");
        
        $this->kategoriModel->update(/* parameters */);
    }

    /**
     * Tests kategoriModel->delete()
     */
    public function testDelete()
    {
        // TODO Auto-generated kategoriModelTest->testDelete()
        $this->markTestIncomplete("delete test not implemented");
        
        $this->kategoriModel->delete(/* parameters */);
    }

    /**
     * Tests kategoriModel->cariCode()
     */
    public function testCariCode()
    {
        // TODO Auto-generated kategoriModelTest->testCariCode()
        $this->markTestIncomplete("cariCode test not implemented");
        
        $this->kategoriModel->cariCode(/* parameters */);
    }
}

