<?php namespace Sebwite\SocialProductQuestions\Block;

use Magento\Catalog\Block\Product\AbstractProduct;
use Magento\Framework\View\LayoutInterface;

//use Magento\Framework\View\Element\Template;

/**
 * This is the class Tab.
 *
 * @package        Sebwite\SocialProductQuestions
 * @author         Sebwite
 * @copyright      Copyright (c) 2015, Sebwite. All rights reserved
 */
class Tab extends AbstractProduct
{
    /** @var \Magento\Framework\App\Config\ScopeConfigInterface */
    protected $config;

    /**
     * Tab constructor.
     *
     * @param \Magento\Catalog\Block\Product\Context $context
     * @param array                                  $data
     */
    public function __construct(
        \Magento\Catalog\Block\Product\Context $context,
        array $data
    ) {
        parent::__construct($context, $data);

        $this->config = $context->getScopeConfig();
        $this->setTabTitle();
    }

    /**
     * _beforeToHtml method
     *
     * @return $this
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    protected function _beforeToHtml()
    {
        $provider = $this->config->getValue('socialquestions/general/provider');
        if ($provider === 'facebook') {
            $this->setTemplate('facebook.phtml');
        } elseif ($provider === 'disqus') {
            $this->setData('disqusid', $this->config->getValue('socialquestions/general/disqusid'));
            $this->setTemplate('disqus.phtml');
        } else {
            // Remove tab
            $this->getLayout()->unsetElement('socialquestions.tab');
        }

        return parent::_beforeToHtml();
    }

    /**
     * Set tab title
     *
     * @return void
     */
    public function setTabTitle()
    {
        $this->setTitle(__($this->config->getValue('socialquestions/general/tabtitle')));
    }
}