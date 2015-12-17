<?php
require_once 'model/transaksiModel.php';

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * transaksiModel test case.
 */
class transaksiModelTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var transaksiModel
     */
    private $transaksiModel;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated transaksiModelTest::setUp()
        
        $this->transaksiModel = new transaksiModel(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated transaksiModelTest::tearDown()
        $this->transaksiModel = null;
        
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
     * Tests transaksiModel->execute()
     */
    public function testExecute()
    {
        // TODO Auto-generated transaksiModelTest->testExecute()
        $this->markTestIncomplete("execute test not implemented");
        
        $this->transaksiModel->execute(/* parameters */);
    }

    /**
     * Tests transaksiModel->fetch()
     */
    public function testFetch()
    {
        // TODO Auto-generated transaksiModelTest->testFetch()
        $this->markTestIncomplete("fetch test not implemented");
        
        $this->transaksiModel->fetch(/* parameters */);
    }

    /**
     * Tests transaksiModel->selectBarang()
     */
    public function testSelectBarang()
    {
        // TODO Auto-generated transaksiModelTest->testSelectBarang()
        $this->markTestIncomplete("selectBarang test not implemented");
        
        $this->transaksiModel->selectBarang(/* parameters */);
    }

    /**
     * Tests transaksiModel->selectPelanggan()
     */
    public function testSelectPelanggan()
    {
        // TODO Auto-generated transaksiModelTest->testSelectPelanggan()
        $this->markTestIncomplete("selectPelanggan test not implemented");
        
        $this->transaksiModel->selectPelanggan(/* parameters */);
    }

    /**
     * Tests transaksiModel->insert()
     */
    public function testInsert()
    {
        // TODO Auto-generated transaksiModelTest->testInsert()
        $this->markTestIncomplete("insert test not implemented");
        
        $this->transaksiModel->insert(/* parameters */);
    }

    /**
     * Tests transaksiModel->cariCode()
     */
    public function testCariCode()
    {
        // TODO Auto-generated transaksiModelTest->testCariCode()
        $this->markTestIncomplete("cariCode test not implemented");
        
        $this->transaksiModel->cariCode(/* parameters */);
    }

    /**
     * Tests transaksiModel->cariCode2()
     */
    public function testCariCode2()
    {
        // TODO Auto-generated transaksiModelTest->testCariCode2()
        $this->markTestIncomplete("cariCode2 test not implemented");
        
        $this->transaksiModel->cariCode2(/* parameters */);
    }
}

