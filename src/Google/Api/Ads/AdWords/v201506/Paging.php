<?php
/*
 * File generated by ClassyFile <https://github.com/onema/classyfile>
 * (c) 2015, Juan Manuel Torres
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed
 * with this source code.
 */
namespace Google\Api\Ads\AdWords\v201506;

/**
   * Specifies the page of results to return in the response. A page is specified
   * by the result position to start at and the maximum number of results to
   * return.
   * 
   * 
   * 
   * Base error class for Ad Group Criterion Service.
   * @package Google_Api_Ads_AdWords_v201506
   * @subpackage v201506
   */
class Paging
{
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201506';
    const XSI_TYPE = 'Paging';
    /**
     * @access public
     * @var integer
     */
    public $startIndex;
    /**
     * @access public
     * @var integer
     */
    public $numberResults;
    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }
    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }
    public function __construct($startIndex = null, $numberResults = null)
    {
        $this->startIndex = $startIndex;
        $this->numberResults = $numberResults;
    }
}
