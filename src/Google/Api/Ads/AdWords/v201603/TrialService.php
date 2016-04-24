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
   * TrialService
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
class TrialService extends AdWordsSoapClient
{
    const SERVICE_NAME = 'TrialService';
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201603';
    const ENDPOINT = 'https://adwords.google.com/api/adwords/cm/v201603/TrialService';
    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = 'https://adwords.google.com/api/adwords/cm/v201603/TrialService';
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = [
        'AuthenticationError' => AuthenticationError::class,
        'AuthorizationError' => AuthorizationError::class,
        'BiddingErrors' => BiddingErrors::class,
        'BudgetError' => BudgetError::class,
        'CampaignError' => CampaignError::class,
        'ClientTermsError' => ClientTermsError::class,
        'DateError' => DateError::class,
        'DateRange' => DateRange::class,
        'DateRangeError' => DateRangeError::class,
        'DistinctError' => DistinctError::class,
        'EntityCountLimitExceeded' => EntityCountLimitExceeded::class,
        'EntityNotFound' => EntityNotFound::class,
        'IdError' => IdError::class,
        'InternalApiError' => InternalApiError::class,
        'NotEmptyError' => NotEmptyError::class,
        'NullError' => NullError::class,
        'OperationAccessDenied' => OperationAccessDenied::class,
        'OperatorError' => OperatorError::class,
        'OrderBy' => OrderBy::class,
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
        'Trial' => Trial::class,
        'TrialError' => TrialError::class,
        'TrialOperation' => TrialOperation::class,
        'TrialPage' => TrialPage::class,
        'DatabaseError' => DatabaseError::class,
        'Operation' => Operation::class,
        'Page' => Page::class,
        'ApiError' => ApiError::class,
        'ApiException' => ApiException::class,
        'ApplicationException' => ApplicationException::class,
        'Selector' => Selector::class,
        'TrialReturnValue' => TrialReturnValue::class,
        'ListReturnValue' => ListReturnValue::class,
        'AuthenticationError.Reason' => AuthenticationErrorReason::class,
        'AuthorizationError.Reason' => AuthorizationErrorReason::class,
        'BiddingErrors.Reason' => BiddingErrorsReason::class,
        'BudgetError.Reason' => BudgetErrorReason::class,
        'CampaignError.Reason' => CampaignErrorReason::class,
        'ClientTermsError.Reason' => ClientTermsErrorReason::class,
        'DatabaseError.Reason' => DatabaseErrorReason::class,
        'DateError.Reason' => DateErrorReason::class,
        'DateRangeError.Reason' => DateRangeErrorReason::class,
        'DistinctError.Reason' => DistinctErrorReason::class,
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
        'TrialError.Reason' => TrialErrorReason::class,
        'TrialStatus' => TrialStatus::class,
        'get' => TrialServiceGet::class,
        'getResponse' => TrialServiceGetResponse::class,
        'mutate' => TrialServiceMutate::class,
        'mutateResponse' => TrialServiceMutateResponse::class,
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
     * Loads a TrialPage containing a list of {@link Trial} objects matching the selector.
     * 
     * @param selector defines which subset of all available trials to return, the sort order, and
     * which fields to include
     * 
     * @return Returns a page of matching trial objects.
     * @throws com.google.ads.api.services.common.error.ApiException if errors occurred while
     * retrieving the results.
     */
    public function get($selector)
    {
        $args = new TrialServiceGet($selector);
        $result = $this->__soapCall('get', array($args));
        return $result->rval;
    }
    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * 
     * 
     * 
     * Creates new trials, updates properties and controls the life cycle of existing trials.
     * See {@link TrialService} for details on the trial life cycle.
     * 
     * @return Returns the list of updated Trials, in the same order as the {@code operations} list.
     * @throws com.google.ads.api.services.common.error.ApiException if errors occurred while
     * processing the request.
     */
    public function mutate($operations)
    {
        $args = new TrialServiceMutate($operations);
        $result = $this->__soapCall('mutate', array($args));
        return $result->rval;
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * 
     * 
     * 
     * Loads a TrialPage containing a list of {@link Trial} objects matching the query.
     * 
     * @param query defines which subset of all available trials to return, the sort order, and
     * which fields to include
     * 
     * @return Returns a page of matching trial objects.
     * @throws com.google.ads.api.services.common.error.ApiException if errors occurred while
     * retrieving the results.
     */
    public function query($query)
    {
        $args = new Query($query);
        $result = $this->__soapCall('query', array($args));
        return $result->rval;
    }
}
