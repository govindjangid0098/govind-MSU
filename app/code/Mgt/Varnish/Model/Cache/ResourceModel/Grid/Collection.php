<?php
 namespace Mgt\Varnish\Model\Cache\ResourceModel\Grid; class Collection extends \Magento\Backend\Model\Cache\ResourceModel\Grid\Collection { public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList) { parent::__construct($entityFactory, $cacheTypeList); } public function loadData($printQuery = false, $logQuery = false) { goto Aaf7e; B3b2e: f9dee: goto Cfbf8; D3300: return $this; goto b32bb; Aaf7e: if ($this->isLoaded()) { goto Fc055; } goto C36cd; C36cd: $cacheTypes = $this->_cacheTypeList->getTypes(); goto C94c9; Cfbf8: $this->_setIsLoaded(true); goto D1fab; C94c9: $cacheTypes = $this->prepareCacheTypes($cacheTypes); goto A4e7b; D1fab: Fc055: goto D3300; A4e7b: foreach ($cacheTypes as $type) { $this->addItem($type); eafa9: } goto B3b2e; b32bb: } protected function prepareCacheTypes(array $cacheTypes) { goto C5beb; d084a: return $cacheTypes; goto bff40; c1e7f: $cacheTypes["\146\165\154\154\137\x70\141\x67\145"]->setDescription("\x56\141\x72\156\x69\x73\150\x20\103\141\x63\x68\145\40\160\162\x6f\166\151\x64\145\144\40\142\x79\x20\115\107\124\x2d\x43\117\115\115\x45\x52\103\x45"); goto d084a; C5beb: $cacheTypes["\x66\x75\154\x6c\x5f\x70\x61\x67\x65"]->setCacheType("\115\107\124\40\x56\141\x72\x6e\x69\163\x68\40\103\x61\143\150\145"); goto c1e7f; bff40: } }
