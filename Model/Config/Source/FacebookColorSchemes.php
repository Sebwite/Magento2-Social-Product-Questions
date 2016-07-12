<?php namespace Sebwite\SocialProductQuestions\Model\Config\Source;

class FacebookColorSchemes implements \Magento\Framework\Option\ArrayInterface {

    /**
     * Return array of options as value-label pairs
     *
     * @return array Format: array(array('value' => '<value>', 'label' => '<label>'), ...)
     */
    public function toOptionArray()
    {
        return ['light'=> 'Light', 'dark' => 'Dark'];
    }
}