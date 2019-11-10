<?php

namespace Mikielis\Contact\Block;

use Magento\Framework\View\Element\Template\Context;
use Magento\Contact\Block\ContactForm;
use Mikielis\Contact\Helper\Data as DataHelper;

class Settings extends ContactForm
{
    protected $dataHelper;

    /**
     * @param Context $context
     * @param Data $dataHelper
     * @param array $data
     */
    public function __construct(Context $context, DataHelper $dataHelper, array $data)
    {
        $this->dataHelper = $dataHelper;
        parent::__construct($context, $data);
    }

    /**
     * @return $this
     */
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    /**
     * Module activation
     * @return boolean
     */
    public function isModuleActive()
    {
        return (boolean) $this->dataHelper->getConfig('mikielis_contact/functional/enable');
    }

    /**
     * Get message
     * @return string
     */
    public function getMessage()
    {
        return $this->dataHelper->getConfig('mikielis_contact/content/message');
    }

    /**
     * Get message
     * @return string
     */
    public function getThankYouMessage()
    {
        return $this->dataHelper->getConfig('mikielis_contact/content/thank_you_message');
    }

    /**
     * Get icon
     * @return string
     */
    public function getIcon()
    {
        return $this->dataHelper->getConfig('mikielis_contact/design/icon');
    }
}
