<?php 
/**
 * @author VIJAYAKUMAR S
 * @copyright Copyright (c) 2018
 * @package Learn_Snowfall
 */
namespace Learn\Snowfall\Helper; 

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{ 	
 	protected $_scopeConfig;

	const XML_PATH_SNOWFALL_ACTIVE					= 'snowfall_tab/snowfall_setting/snowfall_active';
	const XML_PATH_SNOWFALL_TEXT					= 'snowfall_tab/snowfall_setting/snowfall_text';
	const XML_PATH_SNOWFALL_COLOR_1				 	= 'snowfall_tab/snowfall_setting/snowfall_color_1';
	const XML_PATH_SNOWFALL_COLOR_2	 				= 'snowfall_tab/snowfall_setting/snowfall_color_2';
	const XML_PATH_SNOWFALL_COLOR_3	 				= 'snowfall_tab/snowfall_setting/snowfall_color_3';
	const XML_PATH_SNOWFALL_COLOR_4	 				= 'snowfall_tab/snowfall_setting/snowfall_color_4';
	const XML_PATH_SNOWFALL_COLOR_5	 				= 'snowfall_tab/snowfall_setting/snowfall_color_5';
	const XML_PATH_SNOWFALL_COUNT 					= 'snowfall_tab/snowfall_setting/snowfall_count';
	const XML_PATH_SNOWFALL_SPEED	 				= 'snowfall_tab/snowfall_setting/snowfall_speed';
	const XML_PATH_SNOWFALL_MINSIZE	 				= 'snowfall_tab/snowfall_setting/snowfall_minsize';
	const XML_PATH_SNOWFALL_MAXSIZE	 				= 'snowfall_tab/snowfall_setting/snowfall_maxsize';

 	public function __construct (
			\Magento\Framework\App\Helper\Context $context,
			\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig 
		) {
		parent::__construct($context);
		$this->_scopeConfig = $scopeConfig;
    }
    
    public function snowfall_enable() {
        return $this->_scopeConfig->getValue(self::XML_PATH_SNOWFALL_ACTIVE);
    }
    public function snowfall_text_with_font() {
        return $this->_scopeConfig->getValue(self::XML_PATH_SNOWFALL_TEXT);
    }
    public function snowfall_color_1() {
        return $this->_scopeConfig->getValue(self::XML_PATH_SNOWFALL_COLOR_1);
    }
    public function snowfall_color_2() {
        return $this->_scopeConfig->getValue(self::XML_PATH_SNOWFALL_COLOR_2);
    }
    public function snowfall_color_3() {
        return $this->_scopeConfig->getValue(self::XML_PATH_SNOWFALL_COLOR_3);
    }
    public function snowfall_color_4() {
        return $this->_scopeConfig->getValue(self::XML_PATH_SNOWFALL_COLOR_4);
    }
    public function snowfall_color_5() {
        return $this->_scopeConfig->getValue(self::XML_PATH_SNOWFALL_COLOR_5);
    }
    public function snowfall_count() {
        return $this->_scopeConfig->getValue(self::XML_PATH_SNOWFALL_COUNT);
    }
    public function snowfall_speed() {
        return $this->_scopeConfig->getValue(self::XML_PATH_SNOWFALL_SPEED);
    }
    public function snowfall_minsize() {
        return $this->_scopeConfig->getValue(self::XML_PATH_SNOWFALL_MINSIZE);
    }
    public function snowfall_maxsize() {
        return $this->_scopeConfig->getValue(self::XML_PATH_SNOWFALL_MAXSIZE);
    }

	public function snowfall_text($store = null) {
		$snow_text_with_font = self::snowfall_text_with_font();
		$snow_text = explode('*', $snow_text_with_font);
		return $snow_text[1];
	}
	public function snowfall_font($store = null) {
		$snow_text_with_font = self::snowfall_text_with_font();
		$snow_text = explode('*', $snow_text_with_font);
		return $snow_text[0];
	}
}