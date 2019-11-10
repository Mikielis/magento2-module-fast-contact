<?php

namespace Mikielis\Contact\Model;

use Magento\Framework\Data\OptionSourceInterface;

class Icon implements OptionSourceInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        $list = [];

        /** @see https://fontawesome.com/v4.7.0/icon/envelope-o */
        $list[] = [
            'value' => 'fa fa-envelope-o',
            'label' => __('Envelope 1')
        ];

        /** @see https://fontawesome.com/v4.7.0/icon/envelope */
        $list[] = [
            'value' => 'fa fa-envelope',
            'label' => __('Envelope 2')
        ];

        /** @see https://fontawesome.com/v4.7.0/icon/envelope-square */
        $list[] = [
            'value' => 'fa fa-envelope-square',
            'label' => __('Envelope 3')
        ];

        return $list;
    }
}
