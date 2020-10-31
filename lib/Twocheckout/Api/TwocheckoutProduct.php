<?php
namespace Twocheckout\Twocheckout\Api;

use Twocheckout\Twocheckout;

class TwocheckoutProduct extends Twocheckout
{

    public static function create($params = array())
    {
        $request = new TwocheckoutApi();
        $urlSuffix = '/api/products/create_product';
        $result = $request->doCall($urlSuffix, $params);
        return TwocheckoutUtil::returnResponse($result);
    }

    public static function retrieve($params = array())
    {
        $request = new TwocheckoutApi();
        if (array_key_exists("product_id", $params)) {
            $urlSuffix = '/api/products/detail_product';
        } else {
            $urlSuffix = '/api/products/list_products';
        }
        $result = $request->doCall($urlSuffix, $params);
        return TwocheckoutUtil::returnResponse($result);
    }

    public static function update($params = array())
    {
        $request = new TwocheckoutApi();
        $urlSuffix = '/api/products/update_product';
        $result = $request->doCall($urlSuffix, $params);
        return TwocheckoutUtil::returnResponse($result);
    }

    public static function delete($params = array())
    {
        $request = new TwocheckoutApi();
        $urlSuffix = '/api/products/delete_product';
        $result = $request->doCall($urlSuffix, $params);
        return TwocheckoutUtil::returnResponse($result);
    }

}
