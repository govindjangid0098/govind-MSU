<?php
 namespace Mgt\Waf\Model\Config\BackendModel; class Value extends \Magento\Framework\App\Config\Value { const MGT_WAF_CONFIG_DATA = "\155\x67\x74\x57\141\x66\x43\x6f\x6e\146\x69\147\104\x61\164\141"; protected $awsAccessKey; protected $awsSecretAccessKey; protected $awsRegion; protected $projectName; protected $webAclName; protected $session; public function __construct(\Magento\Backend\Model\Session $session, \Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\App\Config\ScopeConfigInterface $config, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList, \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = []) { $this->session = $session; parent::__construct($context, $registry, $config, $cacheTypeList, $resource, $resourceCollection, $data); } protected function getAwsAccessKey() { goto B19b0; B19b0: if (!(true === is_null($this->awsAccessKey))) { goto F1897; } goto b6249; E72f3: return $this->awsAccessKey; goto E0693; b6249: $this->awsAccessKey = $this->getConfigValue("\x6d\147\164\137\x77\x61\146\57\x73\145\164\164\x69\156\147\163\57\141\167\163\137\x61\143\143\145\163\163\137\x6b\x65\x79"); goto ce027; ce027: F1897: goto E72f3; E0693: } protected function getAwsSecretAccessKey() { goto F9c8c; caab8: return $this->awsSecretAccessKey; goto a3360; f87e2: A301d: goto caab8; A4df4: $this->awsSecretAccessKey = $this->getConfigValue("\x6d\147\164\137\x77\141\146\57\x73\x65\164\x74\x69\156\147\163\x2f\x61\167\x73\x5f\163\x65\143\162\145\164\137\141\143\x63\145\163\x73\x5f\x6b\145\171"); goto f87e2; F9c8c: if (!(true === is_null($this->awsSecretAccessKey))) { goto A301d; } goto A4df4; a3360: } protected function getAwsRegion() { goto C2fe6; E55df: return $this->awsRegion; goto Cc8b0; C2fe6: if (!(true == is_null($this->awsRegion))) { goto b431b; } goto b54fe; b69f8: b431b: goto E55df; b54fe: $this->awsRegion = $this->getConfigValue("\155\x67\x74\137\167\x61\x66\x2f\163\x65\x74\164\151\x6e\x67\163\x2f\141\x77\x73\x5f\162\145\147\x69\157\156"); goto b69f8; Cc8b0: } protected function getProjectName() { goto e66af; fb2ed: $this->projectName = $this->getConfigValue("\155\x67\x74\x5f\167\141\146\57\163\145\164\164\151\x6e\147\163\57\160\162\x6f\x6a\145\x63\x74\137\156\141\155\145"); goto Eea85; a947b: return $this->projectName; goto e678d; Eea85: Abc7b: goto a947b; e66af: if (!(true === is_null($this->projectName))) { goto Abc7b; } goto fb2ed; e678d: } protected function getWebAclName() { goto D7719; D0079: $projectName = ucfirst($this->getProjectName()); goto D6e94; fa9ce: return $this->webAclName; goto C1c01; c1e2f: C8d06: goto fa9ce; D6e94: $this->webAclName = sprintf("\45\163\55\x4d\107\124\55\127\145\142\55\101\103\x4c", $projectName); goto c1e2f; D7719: if (!(true === is_null($this->webAclName))) { goto C8d06; } goto D0079; C1c01: } protected function getSessionConfigData() { goto C1264; C1264: $session = $this->getSession(); goto B5f12; Ff860: return $sessionConfigData; goto C9f01; B5f12: $sessionConfigData = $session->getData(self::MGT_WAF_CONFIG_DATA); goto Ff860; C9f01: } protected function getSession() { return $this->session; } protected function getConfigValue($path) { return $this->_config->getValue($path); } }