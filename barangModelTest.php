<?php
require_once 'model/barangModel.php';

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * barangModel test case.
 */
class barangModelTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var barangModel
     */
    private $barangModel;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated barangModelTest::setUp()
        
        $this->barangModel = new barangModel(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated barangModelTest::tearDown()
        $this->barangModel = null;
        
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
     * Tests barangModel->execute()
     */
    public function testExecute()
    {
        // TODO Auto-generated barangModelTest->testExecute()
        $this->markTestIncomplete("execute test not implemented");
        
        $this->barangModel->execute(/* parameters */);
    }

    /**
     * Tests barangModel->fetch()
     */
    public function testFetch()
    {
        // TODO Auto-generated barangModelTest->testFetch()
        $this->markTestIncomplete("fetch test not implemented");
        
        $this->barangModel->fetch(/* parameters */);
    }

    /**
     * Tests barangModel->selectAll()
     */
    public function testSelectAll()
    {
        // TODO Auto-generated barangModelTest->testSelectAll()
        $this->markTestIncomplete("selectAll test not implemented");
        
        $this->barangModel->selectAll(/* parameters */);
    }

    /**
     * Tests barangModel->cari()
     */
    public function testCari()
    {
        // TODO Auto-generated barangModelTest->testCari()
        $this->markTestIncomplete("cari test not implemented");
        
        $this->barangModel->cari(/* parameters */);
    }

    /**
     * Tests barangModel->selectKat()
     */
    public function testSelectKat()
    {
        // TODO Auto-generated barangModelTest->testSelectKat()
        $this->markTestIncomplete("selectKat test not implemented");
        
        $this->barangModel->selectKat(/* parameters */);
    }

    /**
     * Tests barangModel->select()
     */
    public function testSelect()
    {
        // TODO Auto-generated barangModelTest->testSelect()
        $this->markTestIncomplete("select test not implemented");
        
        $this->barangModel->select(/* parameters */);
    }

    /**
     * Tests barangModel->insert()
     */
    public function testInsert()
    {
        // TODO Auto-generated barangModelTest->testInsert()
        $this->markTestIncomplete("insert test not implemented");
        
        $this->barangModel->insert(/* parameters */);
    }

    /**
     * Tests barangModel->update()
     */
    public function testUpdate()
    {
        // TODO Auto-generated barangModelTest->testUpdate()
        $this->markTestIncomplete("update test not implemented");
        
        $this->barangModel->update(/* parameters */);
    }

    /**
     * Tests barangModel->delete()
     */
    public function testDelete()
    {
        // TODO Auto-generated barangModelTest->testDelete()
        $this->markTestIncomplete("delete test not implemented");
        
        $this->barangModel->delete(/* parameters */);
    }

    /**
     * Tests barangModel->cariCode()
     */
    public function testCariCode()
    {
        // TODO Auto-generated barangModelTest->testCariCode()
        $this->markTestIncomplete("cariCode test not implemented");
        
        $this->barangModel->cariCode(/* parameters */);
    }
}

