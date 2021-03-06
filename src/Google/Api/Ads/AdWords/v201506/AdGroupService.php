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
   * AdGroupService
   * @package Google_Api_Ads_AdWords_v201506
   * @subpackage v201506
   */
class AdGroupService extends AdWordsSoapClient
{
    const SERVICE_NAME = 'AdGroupService';
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201506';
    const ENDPOINT = 'https://adwords.google.com/api/adwords/cm/v201506/AdGroupService';
    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = 'https://adwords.google.com/api/adwords/cm/v201506/AdGroupService';
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap = array(
        'AdGroupLabel'                                 => AdGroupLabel::class,
        'AdGroupLabelOperation'                        => AdGroupLabelOperation::class,
        'AdGroupServiceError'                          => AdGroupServiceError::class,
        'AdxError'                                     => AdxError::class,
        'AuthenticationError'                          => AuthenticationError::class,
        'AuthorizationError'                           => AuthorizationError::class,
        'BiddingErrors'                                => BiddingErrors::class,
        'TextLabel'                                    => TextLabel::class,
        'DisplayAttribute'                             => DisplayAttribute::class,
        'ClientTermsError'                             => ClientTermsError::class,
        'ConversionOptimizerBiddingScheme'             => ConversionOptimizerBiddingScheme::class,
        'CustomParameter'                              => CustomParameter::class,
        'CustomParameters'                             => CustomParameters::class,
        'DateError'                                    => DateError::class,
        'DateRange'                                    => DateRange::class,
        'DistinctError'                                => DistinctError::class,
        'DoubleValue'                                  => DoubleValue::class,
        'EnhancedCpcBiddingScheme'                     => EnhancedCpcBiddingScheme::class,
        'EntityAccessDenied'                           => EntityAccessDenied::class,
        'EntityCountLimitExceeded'                     => EntityCountLimitExceeded::class,
        'EntityNotFound'                               => EntityNotFound::class,
        'ExperimentError'                              => ExperimentError::class,
        'ExplorerAutoOptimizerSetting'                 => ExplorerAutoOptimizerSetting::class,
        'ForwardCompatibilityError'                    => ForwardCompatibilityError::class,
        'IdError'                                      => IdError::class,
        'InternalApiError'                             => InternalApiError::class,
        'LongValue'                                    => LongValue::class,
        'ManualCpcBiddingScheme'                       => ManualCpcBiddingScheme::class,
        'ManualCpmBiddingScheme'                       => ManualCpmBiddingScheme::class,
        'Money'                                        => Money::class,
        'MultiplierError'                              => MultiplierError::class,
        'NewEntityCreationError'                       => NewEntityCreationError::class,
        'NotEmptyError'                                => NotEmptyError::class,
        'NullError'                                    => NullError::class,
        'NumberValue'                                  => NumberValue::class,
        'OperationAccessDenied'                        => OperationAccessDenied::class,
        'OperatorError'                                => OperatorError::class,
        'OrderBy'                                      => OrderBy::class,
        'Paging'                                       => Paging::class,
        'Predicate'                                    => Predicate::class,
        'QueryError'                                   => QueryError::class,
        'QuotaCheckError'                              => QuotaCheckError::class,
        'RangeError'                                   => RangeError::class,
        'RateExceededError'                            => RateExceededError::class,
        'ReadOnlyError'                                => ReadOnlyError::class,
        'RejectedError'                                => RejectedError::class,
        'RequestError'                                 => RequestError::class,
        'RequiredError'                                => RequiredError::class,
        'SelectorError'                                => SelectorError::class,
        'SettingError'                                 => SettingError::class,
        'SizeLimitError'                               => SizeLimitError::class,
        'SoapHeader'                                   => SoapRequestHeader::class,
        'SoapResponseHeader'                           => SoapResponseHeader::class,
        'StatsQueryError'                              => StatsQueryError::class,
        'StringFormatError'                            => StringFormatError::class,
        'StringLengthError'                            => StringLengthError::class,
        'String_StringMapEntry'                        => String_StringMapEntry::class,
        'TargetingSettingDetail'                       => TargetingSettingDetail::class,
        'TargetingSetting'                             => TargetingSetting::class,
        'UrlError'                                     => UrlError::class,
        'ComparableValue'                              => ComparableValue::class,
        'CpaBid'                                       => CpaBid::class,
        'CpcBid'                                       => CpcBid::class,
        'CpmBid'                                       => CpmBid::class,
        'DatabaseError'                                => DatabaseError::class,
        'PageOnePromotedBiddingScheme'                 => PageOnePromotedBiddingScheme::class,
        'Setting'                                      => Setting::class,
        'TargetCpaBiddingScheme'                       => TargetCpaBiddingScheme::class,
        'TargetOutrankShareBiddingScheme'              => TargetOutrankShareBiddingScheme::class,
        'TargetRoasBiddingScheme'                      => TargetRoasBiddingScheme::class,
        'TargetSpendBiddingScheme'                     => TargetSpendBiddingScheme::class,
        'ApiError'                                     => ApiError::class,
        'ApiException'                                 => ApiException::class,
        'ApplicationException'                         => ApplicationException::class,
        'LabelAttribute'                               => LabelAttribute::class,
        'Bid'                                          => Bid::class,
        'BidMultiplier'                                => BidMultiplier::class,
        'Bids'                                         => Bids::class,
        'BudgetOptimizerBiddingScheme'                 => BudgetOptimizerBiddingScheme::class,
        'Label'                                        => Label::class,
        'ManualCPCAdGroupExperimentBidMultipliers'     => ManualCPCAdGroupExperimentBidMultipliers::class,
        'ManualCPMAdGroupExperimentBidMultipliers'     => ManualCPMAdGroupExperimentBidMultipliers::class,
        'Selector'                                     => Selector::class,
        'AdGroupExperimentBidMultipliers'              => AdGroupExperimentBidMultipliers::class,
        'AdGroupExperimentData'                        => AdGroupExperimentData::class,
        'AdGroupLabelReturnValue'                      => AdGroupLabelReturnValue::class,
        'BiddingScheme'                                => BiddingScheme::class,
        'BiddingStrategyConfiguration'                 => BiddingStrategyConfiguration::class,
        'AdGroup'                                      => AdGroup::class,
        'AdGroupOperation'                             => AdGroupOperation::class,
        'AdGroupPage'                                  => AdGroupPage::class,
        'AdGroupReturnValue'                           => AdGroupReturnValue::class,
        'ListReturnValue'                              => ListReturnValue::class,
        'Operation'                                    => Operation::class,
        'Page'                                         => Page::class,
        'AdGroupServiceError.Reason'                   => AdGroupServiceErrorReason::class,
        'AdGroup.Status'                               => AdGroupStatus::class,
        'AdxError.Reason'                              => AdxErrorReason::class,
        'AuthenticationError.Reason'                   => AuthenticationErrorReason::class,
        'AuthorizationError.Reason'                    => AuthorizationErrorReason::class,
        'BidSource'                                    => BidSource::class,
        'BiddingErrors.Reason'                         => BiddingErrorsReason::class,
        'BiddingStrategySource'                        => BiddingStrategySource::class,
        'BiddingStrategyType'                          => BiddingStrategyType::class,
        'ClientTermsError.Reason'                      => ClientTermsErrorReason::class,
        'ConversionOptimizerBiddingScheme.BidType'     => ConversionOptimizerBiddingSchemeBidType::class,
        'ConversionOptimizerBiddingScheme.PricingMode' => ConversionOptimizerBiddingSchemePricingMode::class,
        'CriterionTypeGroup'                           => CriterionTypeGroup::class,
        'DatabaseError.Reason'                         => DatabaseErrorReason::class,
        'DateError.Reason'                             => DateErrorReason::class,
        'DistinctError.Reason'                         => DistinctErrorReason::class,
        'EntityAccessDenied.Reason'                    => EntityAccessDeniedReason::class,
        'EntityCountLimitExceeded.Reason'              => EntityCountLimitExceededReason::class,
        'EntityNotFound.Reason'                        => EntityNotFoundReason::class,
        'ExperimentDataStatus'                         => ExperimentDataStatus::class,
        'ExperimentDeltaStatus'                        => ExperimentDeltaStatus::class,
        'ExperimentError.Reason'                       => ExperimentErrorReason::class,
        'ForwardCompatibilityError.Reason'             => ForwardCompatibilityErrorReason::class,
        'IdError.Reason'                               => IdErrorReason::class,
        'InternalApiError.Reason'                      => InternalApiErrorReason::class,
        'Label.Status'                                 => LabelStatus::class,
        'MultiplierError.Reason'                       => MultiplierErrorReason::class,
        'NewEntityCreationError.Reason'                => NewEntityCreationErrorReason::class,
        'NotEmptyError.Reason'                         => NotEmptyErrorReason::class,
        'NullError.Reason'                             => NullErrorReason::class,
        'OperationAccessDenied.Reason'                 => OperationAccessDeniedReason::class,
        'Operator'                                     => Operator::class,
        'OperatorError.Reason'                         => OperatorErrorReason::class,
        'PageOnePromotedBiddingScheme.StrategyGoal'    => PageOnePromotedBiddingSchemeStrategyGoal::class,
        'Predicate.Operator'                           => PredicateOperator::class,
        'QueryError.Reason'                            => QueryErrorReason::class,
        'QuotaCheckError.Reason'                       => QuotaCheckErrorReason::class,
        'RangeError.Reason'                            => RangeErrorReason::class,
        'RateExceededError.Reason'                     => RateExceededErrorReason::class,
        'ReadOnlyError.Reason'                         => ReadOnlyErrorReason::class,
        'RejectedError.Reason'                         => RejectedErrorReason::class,
        'RequestError.Reason'                          => RequestErrorReason::class,
        'RequiredError.Reason'                         => RequiredErrorReason::class,
        'SelectorError.Reason'                         => SelectorErrorReason::class,
        'SettingError.Reason'                          => SettingErrorReason::class,
        'SizeLimitError.Reason'                        => SizeLimitErrorReason::class,
        'SortOrder'                                    => SortOrder::class,
        'StatsQueryError.Reason'                       => StatsQueryErrorReason::class,
        'StringFormatError.Reason'                     => StringFormatErrorReason::class,
        'StringLengthError.Reason'                     => StringLengthErrorReason::class,
        'UrlError.Reason'                              => UrlErrorReason::class,
        'get'                                          => AdGroupServiceGet::class,
        'getResponse'                                  => AdGroupServiceGetResponse::class,
        'mutate'                                       => AdGroupServiceMutate::class,
        'mutateResponse'                               => AdGroupServiceMutateResponse::class,
        'mutateLabel'                                  => MutateLabel::class,
        'mutateLabelResponse'                          => MutateLabelResponse::class,
        'query'                                        => Query::class,
        'queryResponse'                                => QueryResponse::class
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
     * Returns a list of all the ad groups specified by the selector
     * from the target customer's account.
     * 
     * @param serviceSelector The selector specifying the {@link AdGroup}s to return.
     * @return List of adgroups identified by the selector.
     * @throws ApiException when there is at least one error with the request.
     */
    public function get($serviceSelector)
    {
        $args = new AdGroupServiceGet($serviceSelector);
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
     * Adds, updates, or removes ad groups.
     * <p class="note"><b>Note:</b> {@link AdGroupOperation} does not support the
     * {@code REMOVE} operator. To remove an ad group, set its
     * {@link AdGroup#status status} to {@code REMOVED}.</p>
     * 
     * @param operations List of unique operations. The same ad group cannot be
     * specified in more than one operation.
     * @return The updated adgroups.
     */
    public function mutate($operations)
    {
        $args = new AdGroupServiceMutate($operations);
        $result = $this->__soapCall('mutate', array($args));
        return $result->rval;
    }
    /**
     * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
     * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : ADD, REMOVE.</span>
     * <span class="constraint NotEmpty">This field must contain at least one element.</span>
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
     * 
     * 
     * 
     * Adds labels to the {@linkplain AdGroup ad group} or removes
     * {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}s from the
     * {@linkplain AdGroup ad group}.
     * <p>Add - Apply an existing label to an existing
     * {@linkplain AdGroup ad group}. The {@code adGroupId} must reference an existing
     * {@linkplain AdGroup ad group}. The {@code labelId} must reference an existing
     * {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}.
     * <p>Remove - Removes the link between the specified
     * {@linkplain AdGroup ad group} and
     * {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}.</p>
     * @param operations the operations to apply.
     * @return a list of {@linkplain AdGroupLabel}s where each entry in the list is the result of
     * applying the operation in the input list with the same index. For an
     * add operation, the returned AdGroupLabel contains the AdGroupId and the LabelId.
     * In the case of a remove operation, the returned AdGroupLabel will only have AdGroupId.
     * @throws ApiException when there are one or more errors with the request.
     */
    public function mutateLabel($operations)
    {
        $args = new MutateLabel($operations);
        $result = $this->__soapCall('mutateLabel', array($args));
        return $result->rval;
    }
    /**
     * <span class="constraint Required">This field is required and should not be {@code null}.</span>
     * 
     * 
     * 
     * Returns the list of ad groups that match the query.
     * 
     * @param query The SQL-like AWQL query string
     * @return A list of adgroups
     * @throws ApiException
     */
    public function query($query)
    {
        $args = new Query($query);
        $result = $this->__soapCall('query', array($args));
        return $result->rval;
    }
}
