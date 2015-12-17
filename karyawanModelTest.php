<?php
require_once 'model/karyawanModel.php';

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * karyawanModel test case.
 */
class karyawanModelTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var karyawanModel
     */
    private $karyawanModel;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated karyawanModelTest::setUp()
        
        $this->karyawanModel = new karyawanModel(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated karyawanModelTest::tearDown()
        $this->karyawanModel = null;
        
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
     * Tests karyawanModel->execute()
     */
    public function testExecute()
    {
        // TODO Auto-generated karyawanModelTest->testExecute()
        $this->markTestIncomplete("execute test not implemented");
        
        $this->karyawanModel->execute(/* parameters */);
    }

    /**
     * Tests karyawanModel->fetch()
     */
    public function testFetch()
    {
        // TODO Auto-generated karyawanModelTest->testFetch()
        $this->markTestIncomplete("fetch test not implemented");
        
        $this->karyawanModel->fetch(/* parameters */);
    }

    /**
     * Tests karyawanModel->selectAll()
     */
    public function testSelectAll()
    {
        // TODO Auto-generated karyawanModelTest->testSelectAll()
        $this->markTestIncomplete("selectAll test not implemented");
        
        $this->karyawanModel->selectAll(/* parameters */);
    }

    /**
     * Tests karyawanModel->selectKat()
     */
    public function testSelectKat()
    {
        // TODO Auto-generated karyawanModelTest->testSelectKat()
        $this->markTestIncomplete("selectKat test not implemented");
        
        $this->karyawanModel->selectKat(/* parameters */);
    }

    /**
     * Tests karyawanModel->select()
     */
    public function testSelect()
    {
        // TODO Auto-generated karyawanModelTest->testSelect()
        $this->markTestIncomplete("select test not implemented");
        
        $this->karyawanModel->select(/* parameters */);
    }

    /**
     * Tests karyawanModel->insert()
     */
    public function testInsert()
    {
        // TODO Auto-generated karyawanModelTest->testInsert()
        $this->markTestIncomplete("insert test not implemented");
        
        $this->karyawanModel->insert(/* parameters */);
    }

    /**
     * Tests karyawanModel->update()
     */
    public function testUpdate()
    {
        // TODO Auto-generated karyawanModelTest->testUpdate()
        $this->markTestIncomplete("update test not implemented");
        
        $this->karyawanModel->update(/* parameters */);
    }

    /**
     * Tests karyawanModel->delete()
     */
    public function testDelete()
    {
        // TODO Auto-generated karyawanModelTest->testDelete()
        $this->markTestIncomplete("delete test not implemented");
        
        $this->karyawanModel->delete(/* parameters */);
    }

    /**
     * Tests karyawanModel->cariCode()
     */
    public function testCariCode()
    {
        // TODO Auto-generated karyawanModelTest->testCariCode()
        $this->markTestIncomplete("cariCode test not implemented");
        
        $this->karyawanModel->cariCode(/* parameters */);
    }
}

