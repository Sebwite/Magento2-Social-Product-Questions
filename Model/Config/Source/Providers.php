<?php namespace Sebwite\SocialProductQuestions\Model\Config\Source;

/**
 * Class:Categories
 * Sebwite\Sidebar\Model\Config\Source
 *
 * @author      Sebwite
 * @package     Sebwite\Sidebar
 * @copyright   Copyright (c) 2015, Sebwite. All rights reserved
 */
class Providers implements \Magento\Framework\Option\ArrayInterface {

    /**
     * Return array of options as value-label pairs
     *
     * @return array Format: array(array('value' => '<value>', 'label' => '<label>'), ...)
     */
    public function toOptionArray()
    {
        return [0 => 'Disabled', 'facebook' => 'Facebook', 'disqus' => 'Disqus'];
    }
}