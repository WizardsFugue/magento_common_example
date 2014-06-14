<?php
/**
 * 
 * 
 * 
 * 
 */

namespace WizardsFugue\Magento1_Tests\Web;


class SimpleTest extends WebTestCase {

    /**
     * @runInSeparateProcess
     */
    public function testIncompleteRequestObject()
    {
        $request = new \Mage_Core_Controller_Request_Http();
        $request->setRequestUri('/');
        unset($_SERVER['HTTP_HOST']);

        $response = self::executeWebRequest( $request );
        $this->assertEquals(
            'Location: http://dev.local.cotya.de:8082/',
            trim($response->getSendResponseContent())
        );

    }
    
    
    
    /**
     * @runInSeparateProcess
     */
    public function testHomeCmsPage()
    {
        $request = new \Mage_Core_Controller_Request_Http();
        $request->setRequestUri('/');

        $response = self::executeWebRequest( $request );
        $this->assertContains(
            '<title>Home page</title>',
            trim($response->getSendResponseContent())
        );

    }

}
 