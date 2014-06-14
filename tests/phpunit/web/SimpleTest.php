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



    /**
     *
     */
    public function testCatalogCategory()
    {
        $request = new Request();
        $request->setRequestUri('/electronics/cameras.html');

        $response = self::executeWebRequest( $request );
        $this->assertContains(
            '<h1>Cameras</h1>',
            trim($response->getSendResponseContent())
        );

    }

    /**
     *
     */
    public function testCatalogCategory2()
    {
        $request = new Request();
        $request->setRequestUri('/apparel/hoodies.html');

        $response = self::executeWebRequest( $request );
        $this->assertContains(
            '<h1>Hoodies</h1>',
            trim($response->getSendResponseContent())
        );

    }

    /**
     *
     */
    public function testCatalogProduct()
    {
        $request = new Request();
        $request->setRequestUri('/argus-qc-2185-quick-click-5mp-digital-camera.html');

        $response = self::executeWebRequest( $request );
        $this->assertContains(
            '<h1> Argus QC-2185 Quick Click 5MP Digital Camera</h1>',
            trim($response->getSendResponseContent())
        );

    }

    /**
     *
     */
    public function testCatalogProduct2()
    {
        $request = new Request();
        $request->setRequestUri('/apparel/hoodies/the-get-up-kids-band-camp-pullover-hoodie.html');

        $response = self::executeWebRequest( $request );
        $this->assertContains(
            '<h1>The Get Up Kids: Band Camp Pullover Hoodie</h1>',
            trim($response->getSendResponseContent())
        );

    }

}
 