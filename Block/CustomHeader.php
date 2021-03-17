<?php

namespace Ghratzoo\CustomHeader\Block;

use Magento\Framework\View\Element\Template;


/**
 * Class CustomHeader
 * @package Ghratzoo\CustomHeader\Block
 */
class CustomHeader extends Template
{
    /**
     * CustomHeader constructor.
     * @param Template\Context $context
     * @param array $data
     */
    public function __construct(Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }

    /**
     * @return string[]
     */
    public function getAdditionalInfo(): array
    {
        return [
            'FREE DELIVERY',
            'OVERNIGHT DELIVERY'
        ];
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return "+48 123123123";
    }
}
