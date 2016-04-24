<?php
/*
 * File generated by ClassyFile <https://github.com/onema/classyfile>
 * (c) 2016, Juan Manuel Torres
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed
 * with this source code.
 */
namespace Google\Api\Ads\AdWords\v201603;



/**
   * Defines the elements within the header of a SOAP response.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
class SoapResponseHeader
{
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201603';
    const XSI_TYPE = 'SoapResponseHeader';
    /**
     * @access public
     * @var string
     */
    public $requestId;
    /**
     * @access public
     * @var string
     */
    public $serviceName;
    /**
     * @access public
     * @var string
     */
    public $methodName;
    /**
     * @access public
     * @var integer
     */
    public $operations;
    /**
     * @access public
     * @var integer
     */
    public $responseTime;
    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }
    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }
    public function __construct($requestId = null, $serviceName = null, $methodName = null, $operations = null, $responseTime = null)
    {
        $this->requestId = $requestId;
        $this->serviceName = $serviceName;
        $this->methodName = $methodName;
        $this->operations = $operations;
        $this->responseTime = $responseTime;
    }
}