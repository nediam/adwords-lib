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
use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;

/**
   * DraftService
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
class DraftService extends AdWordsSoapClient
{
    const SERVICE_NAME = 'DraftService';
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201603';
    const ENDPOINT = 'https://adwords.google.com/api/adwords/cm/v201603/DraftService';
    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = 'https://adwords.google.com/api/adwords/cm/v201603/DraftService';
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = [
        'AuthenticationError' => AuthenticationError::class,
        'AuthorizationError' => AuthorizationError::class,
        'BiddingErrors' => BiddingErrors::class,
        'ClientTermsError' => ClientTermsError::class,
        'Date' => Date::class,
        'DateError' => DateError::class,
        'DateRange' => DateRange::class,
        'DistinctError' => DistinctError::class,
        'Draft' => Draft::class,
        'DraftError' => DraftError::class,
        'DraftOperation' => DraftOperation::class,
        'DraftPage' => DraftPage::class,
        'DraftReturnValue' => DraftReturnValue::class,
        'EntityCountLimitExceeded' => EntityCountLimitExceeded::class,
        'EntityNotFound' => EntityNotFound::class,
        'IdError' => IdError::class,
        'InternalApiError' => InternalApiError::class,
        'ListReturnValue' => ListReturnValue::class,
        'NotEmptyError' => NotEmptyError::class,
        'NullError' => NullError::class,
        'NullStatsPage' => NullStatsPage::class,
        'Operation' => Operation::class,
        'OperationAccessDenied' => OperationAccessDenied::class,
        'OperatorError' => OperatorError::class,
        'OrderBy' => OrderBy::class,
        'Page' => Page::class,
        'Paging' => Paging::class,
        'Predicate' => Predicate::class,
        'QuotaCheckError' => QuotaCheckError::class,
        'RangeError' => RangeError::class,
        'RateExceededError' => RateExceededError::class,
        'ReadOnlyError' => ReadOnlyError::class,
        'RejectedError' => RejectedError::class,
        'RequestError' => RequestError::class,
        'RequiredError' => RequiredError::class,
        'SelectorError' => SelectorError::class,
        'SizeLimitError' => SizeLimitError::class,
        'SoapHeader' => SoapRequestHeader::class,
        'SoapResponseHeader' => SoapResponseHeader::class,
        'StringLengthError' => StringLengthError::class,
        'DatabaseError' => DatabaseError::class,
        'ApiError' => ApiError::class,
        'ApiException' => ApiException::class,
        'ApplicationException' => ApplicationException::class,
        'Selector' => Selector::class,
        'AuthenticationError.Reason' => AuthenticationErrorReason::class,
        'AuthorizationError.Reason' => AuthorizationErrorReason::class,
        'BiddingErrors.Reason' => BiddingErrorsReason::class,
        'ClientTermsError.Reason' => ClientTermsErrorReason::class,
        'DraftStatus' => DraftStatus::class,
        'DatabaseError.Reason' => DatabaseErrorReason::class,
        'DateError.Reason' => DateErrorReason::class,
        'DistinctError.Reason' => DistinctErrorReason::class,
        'DraftError.Reason' => DraftErrorReason::class,
        'EntityCountLimitExceeded.Reason' => EntityCountLimitExceededReason::class,
        'EntityNotFound.Reason' => EntityNotFoundReason::class,
        'IdError.Reason' => IdErrorReason::class,
        'InternalApiError.Reason' => InternalApiErrorReason::class,
        'NotEmptyError.Reason' => NotEmptyErrorReason::class,
        'NullError.Reason' => NullErrorReason::class,
        'OperationAccessDenied.Reason' => OperationAccessDeniedReason::class,
        'Operator' => Operator::class,
        'OperatorError.Reason' => OperatorErrorReason::class,
        'Predicate.Operator' => PredicateOperator::class,
        'QuotaCheckError.Reason' => QuotaCheckErrorReason::class,
        'RangeError.Reason' => RangeErrorReason::class,
        'RateExceededError.Reason' => RateExceededErrorReason::class,
        'ReadOnlyError.Reason' => ReadOnlyErrorReason::class,
        'RejectedError.Reason' => RejectedErrorReason::class,
        'RequestError.Reason' => RequestErrorReason::class,
        'RequiredError.Reason' => RequiredErrorReason::class,
        'SelectorError.Reason' => SelectorErrorReason::class,
        'SizeLimitError.Reason' => SizeLimitErrorReason::class,
        'SortOrder' => SortOrder::class,
        'StringLengthError.Reason' => StringLengthErrorReason::class,
        'get' => DraftServiceGet::class,
        'getResponse' => DraftServiceGetResponse::class,
        'mutate' => DraftServiceMutate::class,
        'mutateResponse' => DraftServiceMutateResponse::class,
        'query' => Query::class,
        'queryResponse' => QueryResponse::class,
    ];

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
     * Returns a DraftPage that contains a list of Draft objects matching the selector.
     * 
     * @throws {#link com.google.ads.api.services.common.error.ApiException} if problems occurred
     * while retrieving the results.
     */
    public function get($selector)
    {
        $args = new DraftServiceGet($selector);
        $result = $this->__soapCall('get', array($args));
        return $result->rval;
    }
    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
     * 
     * 
     * 
     * The mutate action is used for creating new Drafts and controlling the life cycle of Drafts,
     * such as abandoning or promoting Drafts.
     * 
     * @return The list of updated Drafts, in the same order as the {@code operations} list.
     * @throws {#link com.google.ads.api.services.common.error.ApiException} if problems occurred
     * while processing the request.
     */
    public function mutate($operations)
    {
        $args = new DraftServiceMutate($operations);
        $result = $this->__soapCall('mutate', array($args));
        return $result->rval;
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * 
     * 
     * 
     * Returns a DraftPage that contains a list of Draft objects matching the query.
     * 
     * @throws {#link com.google.ads.api.services.common.error.ApiException} if problems occurred
     * while retrieving the results.
     */
    public function query($query)
    {
        $args = new Query($query);
        $result = $this->__soapCall('query', array($args));
        return $result->rval;
    }
}
