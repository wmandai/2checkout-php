<?php
namespace Twocheckout\Tests;

use Twocheckout\Twocheckout;
use Twocheckout\Twocheckout\Api\TwocheckoutProduct;

class TestProduct extends PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        Twocheckout::username('username');
        Twocheckout::password('pass');
    }

    public function testProductListRetrieve()
    {
        $params = array(
            'pagesize' => 2,
        );
        $products = TwocheckoutProduct::retrieve($params);
        $this->assertSame(2, sizeof($products['products']));
    }

    public function testProductCreate()
    {
        $params = array(
            'name' => "test",
            'price' => 0.01,
        );
        $response = TwocheckoutProduct::create($params);
        $this->assertSame("Product successfully created.", $response['response_message']);

    }

}
