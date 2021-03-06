<?php
namespace Twocheckout\Twocheckout\Api;

use Twocheckout\Twocheckout;

class TwocheckoutAccount extends Twocheckout
{

    public static function retrieve()
    {
        $request = new TwocheckoutApi();
        $urlSuffix = '/api/acct/detail_company_info';
        $result = $request->doCall($urlSuffix);
        return TwocheckoutUtil::returnResponse($result);
    }
}
