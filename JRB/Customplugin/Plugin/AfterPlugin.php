<?php

namespace JRB\Customplugin\Plugin;

class AfterPlugin
{
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        return "( " . $result ." )";
    }
}
