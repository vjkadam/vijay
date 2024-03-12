<?php
 namespace Mgt\Varnish\Block\Adminhtml\System\Config\Form\Field; class License extends \Magento\Config\Block\System\Config\Form\Field { protected $license; public function __construct(\Magento\Backend\Block\Template\Context $context, \Mgt\Varnish\Model\License $license, array $data = []) { $this->license = $license; parent::__construct($context, $data); } public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element) { goto bde05; bde05: $isCheckboxRequired = $this->_isInheritCheckboxRequired($element); goto Ff566; a5ad2: $element->setDisabled(true); goto Cba6f; Cba6f: da2ad: goto df9c8; dd071: return $this->_decorateRowHtml($element, $html); goto Cad76; F27c3: $html .= $this->_renderHint($element); goto dd071; df9c8: $html = "\x3c\164\144\x20\143\154\x61\163\x73\75\42\154\x61\x62\145\154\x22\x3e\74\154\141\142\145\x6c\x20\146\x6f\x72\75\42" . $element->getHtmlId() . "\x22\x3e\74\163\160\x61\156" . $this->_renderScopeLabel($element) . "\76" . $element->getLabel() . "\x3c\57\163\160\141\156\76\x3c\57\x6c\141\142\145\x6c\76\74\x2f\164\144\76"; goto F7456; F7456: $html .= $this->_renderValue($element); goto F27c3; Ff566: if (!($element->getInherit() == 1 && $isCheckboxRequired)) { goto da2ad; } goto a5ad2; Cad76: } protected function _renderValue(\Magento\Framework\Data\Form\Element\AbstractElement $element) { goto Fd816; efb8d: $html .= "\x3c\x70\40\x63\x6c\141\163\x73\75\x22\x6e\157\164\145\42\x3e\74\x73\x70\x61\156\76" . $element->getComment() . "\74\57\x73\x70\141\x6e\x3e\x3c\57\x70\76"; goto B36f8; C612b: return $html; goto f012c; B36f8: c55ed: goto E9d73; Ba087: B22e2: goto cfd07; E9d73: $html .= "\74\x2f\164\x64\76"; goto C612b; Fd816: $html = "\74\164\x64\x20\143\x6c\141\x73\163\x3d\x22\x76\x61\154\x75\x65\x22\x3e"; goto D6799; cfd07: if (!$element->getComment()) { goto c55ed; } goto efb8d; D6799: $licensedDomains = $this->license->getDomains(); goto Ee443; Be1ea: $html .= implode("\74\142\162\76", $licensedDomains); goto Ba087; Ee443: if (!$licensedDomains) { goto B22e2; } goto Be1ea; f012c: } }
