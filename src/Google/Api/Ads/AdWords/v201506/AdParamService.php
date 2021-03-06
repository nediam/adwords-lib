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
use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

/**
   * AdParamService
   * @package Google_Api_Ads_AdWords_v201506
   * @subpackage v201506
   */
class AdParamService extends AdWordsSoapClient
{
    const SERVICE_NAME = 'AdParamService';
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201506';
    const ENDPOINT = 'https://adwords.google.com/api/adwords/cm/v201506/AdParamService';
    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = 'https://adwords.google.com/api/adwords/cm/v201506/AdParamService';
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
        'AdParam'                      => AdParam::class,
        'AdParamError'                 => AdParamError::class,
        'AdParamOperation'             => AdParamOperation::class,
        'AdParamPage'                  => AdParamPage::class,
        'AdParamPolicyError'           => AdParamPolicyError::class,
        'AdxError'                     => AdxError::class,
        'AuthenticationError'          => AuthenticationError::class,
        'AuthorizationError'           => AuthorizationError::class,
        'ClientTermsError'             => ClientTermsError::class,
        'DateRange'                    => DateRange::class,
        'DistinctError'                => DistinctError::class,
        'IdError'                      => IdError::class,
        'InternalApiError'             => InternalApiError::class,
        'NotEmptyError'                => NotEmptyError::class,
        'NullError'                    => NullError::class,
        'Operation'                    => Operation::class,
        'OperationAccessDenied'        => OperationAccessDenied::class,
        'OperatorError'                => OperatorError::class,
        'OrderBy'                      => OrderBy::class,
        'Paging'                       => Paging::class,
        'PolicyViolationError.Part'    => PolicyViolationErrorPart::class,
        'PolicyViolationKey'           => PolicyViolationKey::class,
        'Predicate'                    => Predicate::class,
        'QuotaCheckError'              => QuotaCheckError::class,
        'RangeError'                   => RangeError::class,
        'RateExceededError'            => RateExceededError::class,
        'ReadOnlyError'                => ReadOnlyError::class,
        'RejectedError'                => RejectedError::class,
        'RequestError'                 => RequestError::class,
        'RequiredError'                => RequiredError::class,
        'SelectorError'                => SelectorError::class,
        'SizeLimitError'               => SizeLimitError::class,
        'SoapHeader'                   => SoapRequestHeader::class,
        'SoapResponseHeader'           => SoapResponseHeader::class,
        'StringLengthError'            => StringLengthError::class,
        'DatabaseError'                => DatabaseError::class,
        'PolicyViolationError'         => PolicyViolationError::class,
        'ApiError'                     => ApiError::class,
        'ApiException'                 => ApiException::class,
        'ApplicationException'         => ApplicationException::class,
        'Selector'                     => Selector::class,
        'AdParamError.Reason'          => AdParamErrorReason::class,
        'AdxError.Reason'              => AdxErrorReason::class,
        'AuthenticationError.Reason'   => AuthenticationErrorReason::class,
        'AuthorizationError.Reason'    => AuthorizationErrorReason::class,
        'ClientTermsError.Reason'      => ClientTermsErrorReason::class,
        'DatabaseError.Reason'         => DatabaseErrorReason::class,
        'DistinctError.Reason'         => DistinctErrorReason::class,
        'IdError.Reason'               => IdErrorReason::class,
        'InternalApiError.Reason'      => InternalApiErrorReason::class,
        'NotEmptyError.Reason'         => NotEmptyErrorReason::class,
        'NullError.Reason'             => NullErrorReason::class,
        'OperationAccessDenied.Reason' => OperationAccessDeniedReason::class,
        'Operator'                     => Operator::class,
        'OperatorError.Reason'         => OperatorErrorReason::class,
        'Predicate.Operator'           => PredicateOperator::class,
        'QuotaCheckError.Reason'       => QuotaCheckErrorReason::class,
        'RangeError.Reason'            => RangeErrorReason::class,
        'RateExceededError.Reason'     => RateExceededErrorReason::class,
        'ReadOnlyError.Reason'         => ReadOnlyErrorReason::class,
        'RejectedError.Reason'         => RejectedErrorReason::class,
        'RequestError.Reason'          => RequestErrorReason::class,
        'RequiredError.Reason'         => RequiredErrorReason::class,
        'SelectorError.Reason'         => SelectorErrorReason::class,
        'SizeLimitError.Reason'        => SizeLimitErrorReason::class,
        'SortOrder'                    => SortOrder::class,
        'StringLengthError.Reason'     => StringLengthErrorReason::class,
        'get'                          => AdParamServiceGet::class,
        'getResponse'                  => AdParamServiceGetResponse::class,
        'mutate'                       => AdParamServiceMutate::class,
        'mutateResponse'               => AdParamServiceMutateResponse::class,
    );

    /**
     * Constructor using wsdl location and options array
     * @param string $wsdl WSDL location for this service
     * @param array $options Options for the SoapClient
     */
    public function __construct($wsdl, $options, $user)
    {
        $options['classmap'] = self::$classmap;
        parent::__construct($wsdl, $options, $user, self::SERVICE_NAME, self::WSDL_NAMESPACE);
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * 
     * 
     * 
     * Returns the ad parameters that match the criteria specified in the
     * selector.
     * 
     * @param serviceSelector Specifies which ad parameters to return.
     * @return A list of ad parameters.
     */
    public function get($serviceSelector)
    {
        $args = new AdParamServiceGet($serviceSelector);
        $result = $this->__soapCall('get', array($args));
        return $result->rval;
    }
    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: SET, REMOVE.</span>
     * 
     * 
     * 
     * Sets and removes ad parameters.
     * <p class="note"><b>Note:</b> {@code ADD} is not supported. Use {@code SET}
     * for new ad parameters.</p>
     * 
     * <ul class="nolist">
     * <li>{@code SET}: Creates or updates an ad parameter, setting the new
     * parameterized value for the given ad group / keyword pair.
     * <li>{@code REMOVE}: Removes an ad parameter. The <code><var>default-value</var>
     * </code> specified in the ad text will be used.</li>
     * </ul>
     * 
     * @param operations The operations to perform.
     * @return A list of ad parameters, where each entry in the list is the
     * result of applying the operation in the input list with the same index.
     * For a {@code SET} operation, the returned ad parameter will contain the
     * updated values. For a {@code REMOVE} operation, the returned ad parameter
     * will simply be the ad parameter that was removed.
     */
    public function mutate($operations)
    {
        $args = new AdParamServiceMutate($operations);
        $result = $this->__soapCall('mutate', array($args));
        return $result->rval;
    }
}
