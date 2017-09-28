<?php

namespace JRB\Customplugin\Plugin;

class BeforePlugin
{
    public function beforeAddProduct(
        \Magento\Checkout\Model\Cart $subject,
        $productInfo,
        $requestInfo = null
    ) {
        $requestInfo['qty'] += 5; // increasing quantity to qty + 5
        return array($productInfo, $requestInfo);
    }
}