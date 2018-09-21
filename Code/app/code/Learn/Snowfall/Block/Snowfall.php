<?php 
/**
 * @author VIJAYAKUMAR S
 * @copyright Copyright (c) 2018
 * @package Learn_Snowfall
 */
 
namespace Learn\Snowfall\Block;
 
use Magento\Framework\Registry;
use \Learn\Snowfall\Helper\Data;

class Snowfall extends \Magento\Framework\View\Element\Template
{
    public $assetRepository;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = [],
        \Magento\Framework\View\Asset\Repository $assetRepository,
        Data $helperData
    )
    {
        $this->assetRepository = $assetRepository;
        $this->_helperData = $helperData;
        return parent::__construct($context, $data);
    }

    public function getSnowfallFont() {
        return $this->_helperData->snowfall_font();
    }
    public function getSnowfallJsonOptions() {
        $options = array();
        $options['flakes']    =  $this->_helperData->snowfall_count();
        $options['color']     = array(
            "#".$this->_helperData->snowfall_color_1(),
            "#".$this->_helperData->snowfall_color_2(),
            "#".$this->_helperData->snowfall_color_3(),
            "#".$this->_helperData->snowfall_color_4(),
            "#".$this->_helperData->snowfall_color_5()
        );
        $options['text']      = $this->_helperData->snowfall_text();
        $options['speed']     = $this->_helperData->snowfall_speed();
        $options['size']      = array(
            'min' =>  $this->_helperData->snowfall_minsize(),
            'max' =>  $this->_helperData->snowfall_maxsize()
        );
        // print_r($options);
        return json_encode($options);
    }
}