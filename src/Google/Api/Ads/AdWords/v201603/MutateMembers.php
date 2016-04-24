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
   * <span class="constraint CollectionSize">The minimum size of this collection is 1. The maximum size of this collection is 10000.</span>
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
   * 
   * 
   * 
   * Mutate members of user lists by either adding or removing their lists of members.
   * 
   * <p>Note that operations cannot have same user list id but different operators.
   * 
   * @param operations the mutate members operations to apply
   * @return a list of UserList objects
   * @throws ApiException when there are one or more errors with the request
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
class MutateMembers
{
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/rm/v201603';
    const XSI_TYPE = '';
    /**
     * @access public
     * @var MutateMembersOperation[]
     */
    public $operations;
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
    public function __construct($operations = null)
    {
        $this->operations = $operations;
    }
}
