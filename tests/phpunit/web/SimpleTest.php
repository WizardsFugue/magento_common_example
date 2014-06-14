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

        try{
            self::executeWebRequest( $request );
            $this->assertNotTrue(true,"should not get executed");
        }catch( ResponseSendException $e ){
            $this->assertEquals(
                'Location: http://dev.local.cotya.de:8082/',
                trim($e->getContent())
            );
        }
        //Mage::getModel('test');

        //count($response->getBody());


        //$this->assertNotEmpty($response);

    }

}
 