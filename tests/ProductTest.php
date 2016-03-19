<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/19/2016
 * Time: 10:13 AM
 */

class ProductTest extends TestCase {

    /** @test */
    public function it_fetches_lessons()
    {

        // arrange
      //  $this->makeProduct();


        // act
        $this->getResponse('product/store?title=seriaously&description=asdas');


        // assert
        $this->assertResponseOk();

    }

    private function makeProduct()
    {
    }

    private function getResponse($string)
    {

       return $this->call('GET',$string)->getContent();
    }

}