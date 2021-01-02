<?php

namespace Suraj\GraphQlTest\Block\View;

use Magento\Framework\View\Element\Template\Context;

class CallWebsite extends \Magento\Framework\View\Element\Template
{


    protected $_storeManager;

    public function __construct(
 
        Context $context,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        array $data = [])
    {

        $this->_storeManager = $storeManager;
        parent::__construct($context, $data);
    }


    public function getWebsites(){
        return $this->_storeManager->getWebsites();
    }


    /**
     * @return int
     */
    public function getCurrentWebsiteId()
    {
        return $this->_storeManager->getWebsite()->getId();
    }

    /**
     * @return string
     */
    public function getCurrentWebsiteCode()
    {
        return $this->_storeManager->getWebsite()->getCode();
    }

}
