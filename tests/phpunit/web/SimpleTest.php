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
     * 
     */
    public function testIncompleteRequestObject()
    {
        $request = new Request();
        $request->setRequestUri('/');
        $request->setServer('HTTP_HOST', '');

        $response = self::executeWebRequest( $request );
        $this->assertEquals(
            'Location: http://dev.local.cotya.de:8082/',
            trim($response->getSendResponseContent())
        );

    }
    
    
    
    /**
     * 
     */
    public function testHomeCmsPage()
    {
        $request = new Request();
        $request->setRequestUri('/');

        $response = self::executeWebRequest( $request );
        $this->assertContains(
            '<title>Home page</title>',
            trim($response->getSendResponseContent())
        );

    }

}
 