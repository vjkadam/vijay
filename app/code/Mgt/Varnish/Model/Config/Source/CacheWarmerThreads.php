<?php
 namespace Mgt\Varnish\Model\Config\Source; class CacheWarmerThreads implements \Magento\Framework\Option\ArrayInterface { public function toOptionArray() { goto Ae332; C5b18: edccb: goto Ec654; Ae332: $optionsArray = []; goto d9756; Ec654: return $optionsArray; goto Ac973; d9756: foreach (range(1, 50) as $number) { $optionsArray[] = ["\x76\x61\x6c\165\x65" => $number, "\154\141\142\145\x6c" => $number]; B3ef9: } goto C5b18; Ac973: } public function toArray() { goto b6e89; cb9a2: return $optionsArray; goto ac996; b6e89: $optionsArray = []; goto c0853; B12aa: b372d: goto cb9a2; c0853: foreach (range(1, 50) as $number) { $optionsArray[$number] = $number; adc70: } goto B12aa; ac996: } }