<?php
namespace Twocheckout\Tests;

use Twocheckout\Twocheckout;
use Twocheckout\Twocheckout\Api\TwocheckoutAccount;
use Twocheckout\Twocheckout\Api\TwocheckoutContact;

class TwocheckoutTest extends PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        Twocheckout::username('username');
        Twocheckout::password('pass');
    }

    public function testCompanyRetrieve()
    {
        $company = TwocheckoutAccount::retrieve();
        $this->assertSame("250111206876", $company['vendor_company_info']['vendor_id']);
    }

    public function testContactRetrieve()
    {
        $company = TwocheckoutContact::retrieve();
        $this->assertSame("250111206876", $company['vendor_contact_info']['vendor_id']);
    }

}
