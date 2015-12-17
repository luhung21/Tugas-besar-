<?php
require_once 'PHPUnit/Framework/TestSuite.php';

require_once 'barangControllerTest.php';

require_once 'barangModelTest.php';

require_once 'karyawanControllerTest.php';

/**
 * Static test suite.
 */
class action_figureSuite extends PHPUnit_Framework_TestSuite
{

    /**
     * Constructs the test suite handler.
     */
    public function __construct()
    {
        $this->setName('action_figureSuite');
        
        $this->addTestSuite('barangControllerTest');
        
        $this->addTestSuite('barangModelTest');
        
        $this->addTestSuite('karyawanControllerTest');
    }

    /**
     * Creates the suite.
     */
    public static function suite()
    {
        return new self();
    }
}

