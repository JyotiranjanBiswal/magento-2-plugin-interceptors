<?php

namespace JRB\Customplugin\Plugin;

class AroundPlugin
{
    public function aroundGetPriceModel(\Magento\Catalog\Model\Product $product, \Closure $proceed)
    {
        \Magento\Framework\App\ObjectManager::getInstance()->get('Psr\Log\LoggerInterface')->debug('fetching price model for ' . get_class($product));
        $result = $proceed();
        \Magento\Framework\App\ObjectManager::getInstance()->get('Psr\Log\LoggerInterface')->debug('Price model is ' . get_class($result));
        return $result;
    }
}
