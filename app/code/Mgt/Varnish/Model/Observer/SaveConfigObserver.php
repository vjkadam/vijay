<?php
 namespace Mgt\Varnish\Model\Observer; use Magento\Framework\Event\ObserverInterface; use Magento\Framework\Event\Observer; class SaveConfigObserver implements ObserverInterface { const FULL_PAGE_CACHE_STATUS_ENABLED = 1; const FULL_PAGE_CACHE_STATUS_DISABLED = 0; protected $config; protected $deploymentConfigWriter; protected $configValueFactory; protected $cachePurger; protected $cacheTypeList; public function __construct(\Mgt\Varnish\Model\Cache\Config $config, \Magento\Framework\App\DeploymentConfig\Writer $deploymentConfigWriter, \Magento\Framework\App\Config\ValueFactory $configValueFactory, \Magento\CacheInvalidate\Model\PurgeCache $cachePurger, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList) { goto A0383; F2b7a: $this->cacheTypeList = $cacheTypeList; goto D77e2; C5c5e: $this->deploymentConfigWriter = $deploymentConfigWriter; goto Fc4a3; A0383: $this->config = $config; goto C5c5e; e853a: $this->cachePurger = $cachePurger; goto F2b7a; Fc4a3: $this->configValueFactory = $configValueFactory; goto e853a; D77e2: } public function execute(Observer $observer) { $isVarnishEnabled = $this->config->isEnabled(); try { goto F9b9b; d9210: $this->deploymentConfigWriter->saveConfig($appEnvDataCacheTypes, true); goto a9061; b794a: $this->cachePurger->sendPurgeRequest("\52"); goto Cf73d; f9ef8: $cacheTypes["\x66\165\x6c\x6c\137\160\141\x67\x65"]->setStatus(self::FULL_PAGE_CACHE_STATUS_DISABLED); goto Abda1; Cf73d: goto A92d9; goto c2f97; e4d9b: $cacheTypes["\x66\165\154\x6c\137\160\x61\147\x65"]->setStatus(self::FULL_PAGE_CACHE_STATUS_ENABLED); goto d8d4a; F60d9: C88a7: goto Fb48e; c760d: if (!$configValue->getId()) { goto eac2b; } goto Fd06b; F9b9b: $configValue = $this->configValueFactory->create(); goto F9d7f; C76f9: if (true === $isVarnishEnabled) { goto ba105; } goto c760d; Ad384: if (!isset($cacheTypes["\146\165\154\154\137\x70\x61\x67\x65"])) { goto af55f; } goto e4d9b; d4447: $configValue->setPath(\Magento\PageCache\Model\Config::XML_PAGECACHE_TYPE); goto Bf8b4; abd2c: $configValue->save(); goto Ad384; Fb48e: B4a97: goto d9210; d8d4a: af55f: goto Ef52d; Fd06b: $configValue->delete(); goto b4f3a; Bf8b4: $configValue->setValue(\Magento\PageCache\Model\Config::VARNISH); goto abd2c; Ef52d: A92d9: goto Ab16e; Edaff: if (!$cacheTypes) { goto B4a97; } goto a9d98; b4f3a: eac2b: goto Ea9a9; a9d98: foreach ($cacheTypes as $cacheTypeKey => $cacheType) { $appEnvDataCacheTypes["\141\x70\x70\x5f\145\x6e\x76"]["\x63\141\143\x68\145\137\164\171\x70\145\x73"][$cacheTypeKey] = (int) $cacheType->getStatus(); E0ee8: } goto F60d9; c2f97: ba105: goto d4447; Ab16e: $appEnvDataCacheTypes = []; goto Edaff; Abda1: E9b25: goto b794a; Ba5fb: $cacheTypes = $this->cacheTypeList->getTypes(); goto C76f9; F9d7f: $configValue->load(\Magento\PageCache\Model\Config::XML_PAGECACHE_TYPE, "\x70\141\x74\x68"); goto Ba5fb; Ea9a9: if (!isset($cacheTypes["\146\x75\154\154\x5f\x70\x61\x67\x65"])) { goto E9b25; } goto f9ef8; a9061: } catch (\Exception $e) { throw new $e(); } } }