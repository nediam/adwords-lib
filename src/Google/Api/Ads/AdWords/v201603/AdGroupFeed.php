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
   * AdGroupFeeds are used to link a feed to an adgroup using a matching function,
   * making the feed's feed items available in the adgroup's ads for substitution.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
class AdGroupFeed
{
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201603';
    const XSI_TYPE = 'AdGroupFeed';
    /**
     * @access public
     * @var integer
     */
    public $feedId;
    /**
     * @access public
     * @var integer
     */
    public $adGroupId;
    /**
     * @access public
     * @var Function
     */
    public $matchingFunction;
    /**
     * @access public
     * @var integer[]
     */
    public $placeholderTypes;
    /**
     * @access public
     * @var AdGroupFeedStatus
     */
    public $status;
    /**
     * @access public
     * @var integer
     */
    public $baseCampaignId;
    /**
     * @access public
     * @var integer
     */
    public $baseAdGroupId;
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
    public function __construct($feedId = null, $adGroupId = null, $matchingFunction = null, $placeholderTypes = null, $status = null, $baseCampaignId = null, $baseAdGroupId = null)
    {
        $this->feedId = $feedId;
        $this->adGroupId = $adGroupId;
        $this->matchingFunction = $matchingFunction;
        $this->placeholderTypes = $placeholderTypes;
        $this->status = $status;
        $this->baseCampaignId = $baseCampaignId;
        $this->baseAdGroupId = $baseAdGroupId;
    }
}