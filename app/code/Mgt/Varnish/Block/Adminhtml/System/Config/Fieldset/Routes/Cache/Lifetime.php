<?php
 namespace Mgt\Varnish\Block\Adminhtml\System\Config\Fieldset\Routes\Cache; class Lifetime extends \Magento\Config\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray { protected $_elementFactory; public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Data\Form\Element\Factory $elementFactory, array $data = []) { $this->_elementFactory = $elementFactory; parent::__construct($context, $data); } protected function _construct() { goto Cbd04; d8517: $this->addColumn("\146\x69\145\x6c\144\x33", ["\x6c\x61\x62\x65\154" => __("\x43\157\155\x6d\145\156\x74")]); goto F57f2; Eca4a: parent::_construct(); goto c7d67; F57f2: $this->_addAfter = false; goto E3ca7; E3ca7: $this->_addButtonLabel = __("\101\x64\x64"); goto Eca4a; da8a6: $this->addColumn("\x66\x69\x65\154\144\x32", ["\x6c\x61\142\x65\x6c" => __("\103\141\x63\150\145\40\x4c\151\146\x65\164\151\x6d\x65")]); goto d8517; Cbd04: $this->addColumn("\x66\151\145\x6c\x64\61", ["\154\141\142\x65\154" => __("\x52\x6f\165\x74\x65")]); goto da8a6; c7d67: } public function getArrayRows() { goto e7689; b62dc: $element->setValue($elementValue); goto Ba444; C2b50: E52c5: goto b62dc; b888a: $unserializedValue = @unserialize($elementValue); goto Ee00b; B0a36: $elementValue = $element->getValue(); goto d4a6f; Bf23a: Dfc2d: goto A9e66; Ee00b: if (!($elementValue === "\142\72\x30\73" || $unserializedValue !== false)) { goto Dfc2d; } goto E8347; A9e66: goto a1227; goto C2b50; a89b7: return parent::getArrayRows(); goto a3081; e7689: $element = $this->getElement(); goto B0a36; E8347: $element->setValue($unserializedValue); goto Bf23a; d4a6f: if (true === is_array($elementValue)) { goto E52c5; } goto b888a; Ba444: a1227: goto a89b7; a3081: } }