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
   * An operation on a {@code BatchJob}.
   * 
   * <p class="note"><b>Note:</b> Only the <code>ADD</code> and <code>SET</code>
   * operators are supported.
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
class BatchJobOperation extends Operation
{
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201603';
    const XSI_TYPE = 'BatchJobOperation';
    /**
     * @access public
     * @var BatchJob
     */
    public $operand;
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
    public function __construct($operand = null, $operator = null, $OperationType = null)
    {
        parent::__construct();
        $this->operand = $operand;
        $this->operator = $operator;
        $this->OperationType = $OperationType;
    }
}
