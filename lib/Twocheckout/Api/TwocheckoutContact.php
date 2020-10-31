<?php
namespace Twocheckout\Twocheckout\Api;

use Twocheckout\Twocheckout;

class TwocheckoutContact extends Twocheckout
{

    public static function retrieve()
    {
        $request = new TwocheckoutApi();
        $urlSuffix = '/api/acct/detail_contact_info';
        $result = $request->doCall($urlSuffix);
        return TwocheckoutUtil::returnResponse($result);
    }
}
