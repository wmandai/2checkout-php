<?php
namespace Twocheckout\Tests;

use Twocheckout\Twocheckout\TwocheckoutReturn;

class TestReturn extends PHPUnit_Framework_TestCase
{

    public function testReturnCheck()
    {
        $params = array(
            'sid' => '1817037',
            'key' => '7AB926D469648F3305AE361D5BD2C3CB',
            'total' => '0.01',
            'order_number' => '4774380224',
        );
        $result = TwocheckoutReturn::check($params, 'tango');
        $this->assertSame("Success", $result['response_code']);
    }

}
