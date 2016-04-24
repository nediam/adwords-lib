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
   * AdGroupAdService
   * @package Google_Api_Ads_AdWords_v201603
   * @subpackage v201603
   */
class AdGroupAdService extends AdWordsSoapClient
{
    const SERVICE_NAME = 'AdGroupAdService';
    const WSDL_NAMESPACE = 'https://adwords.google.com/api/adwords/cm/v201603';
    const ENDPOINT = 'https://adwords.google.com/api/adwords/cm/v201603/AdGroupAdService';
    /**
     * The endpoint of the service
     * @var string
     */
    public static $endpoint = 'https://adwords.google.com/api/adwords/cm/v201603/AdGroupAdService';
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    public static $classmap =[
        'Ad' => Ad::class,
        'AdCustomizerError' => AdCustomizerError::class,
        'AdError' => AdError::class,
        'AdGroupAd' => AdGroupAd::class,
        'AdGroupAdCountLimitExceeded' => AdGroupAdCountLimitExceeded::class,
        'AdGroupAdError' => AdGroupAdError::class,
        'AdGroupAdExperimentData' => AdGroupAdExperimentData::class,
        'AdGroupAdLabel' => AdGroupAdLabel::class,
        'AdGroupAdLabelOperation' => AdGroupAdLabelOperation::class,
        'AdGroupAdLabelReturnValue' => AdGroupAdLabelReturnValue::class,
        'AdGroupAdOperation' => AdGroupAdOperation::class,
        'AdGroupAdPage' => AdGroupAdPage::class,
        'AdGroupAdReturnValue' => AdGroupAdReturnValue::class,
        'AdUnionId' => AdUnionId::class,
        'AdUrlUpgrade' => AdUrlUpgrade::class,
        'AdxError' => AdxError::class,
        'ApiError' => ApiError::class,
        'ApiException' => ApiException::class,
        'AppUrl' => AppUrl::class,
        'ApplicationException' => ApplicationException::class,
        'LabelAttribute' => LabelAttribute::class,
        'Audio' => Audio::class,
        'AuthenticationError' => AuthenticationError::class,
        'AuthorizationError' => AuthorizationError::class,
        'CallOnlyAd' => CallOnlyAd::class,
        'TextLabel' => TextLabel::class,
        'DisplayAttribute' => DisplayAttribute::class,
        'ClientTermsError' => ClientTermsError::class,
        'CustomParameter' => CustomParameter::class,
        'CustomParameters' => CustomParameters::class,
        'DatabaseError' => DatabaseError::class,
        'DateError' => DateError::class,
        'DateRange' => DateRange::class,
        'DeprecatedAd' => DeprecatedAd::class,
        'Dimensions' => Dimensions::class,
        'DistinctError' => DistinctError::class,
        'EntityAccessDenied' => EntityAccessDenied::class,
        'EntityCountLimitExceeded' => EntityCountLimitExceeded::class,
        'EntityNotFound' => EntityNotFound::class,
        'ExemptionRequest' => ExemptionRequest::class,
        'ExperimentError' => ExperimentError::class,
        'FeedAttributeReferenceError' => FeedAttributeReferenceError::class,
        'ForwardCompatibilityError' => ForwardCompatibilityError::class,
        'FunctionError' => FunctionError::class,
        'FunctionParsingError' => FunctionParsingError::class,
        'IdError' => IdError::class,
        'Image' => Image::class,
        'ImageAd' => ImageAd::class,
        'ImageError' => ImageError::class,
        'InternalApiError' => InternalApiError::class,
        'Label' => Label::class,
        'ListReturnValue' => ListReturnValue::class,
        'Media' => Media::class,
        'MediaBundle' => MediaBundle::class,
        'MediaBundleError' => MediaBundleError::class,
        'MediaError' => MediaError::class,
        'Media_Size_DimensionsMapEntry' => Media_Size_DimensionsMapEntry::class,
        'Media_Size_StringMapEntry' => Media_Size_StringMapEntry::class,
        'NewEntityCreationError' => NewEntityCreationError::class,
        'NotEmptyError' => NotEmptyError::class,
        'NullError' => NullError::class,
        'Operation' => Operation::class,
        'OperationAccessDenied' => OperationAccessDenied::class,
        'OperatorError' => OperatorError::class,
        'OrderBy' => OrderBy::class,
        'Page' => Page::class,
        'Paging' => Paging::class,
        'PagingError' => PagingError::class,
        'PolicyViolationError' => PolicyViolationError::class,
        'PolicyViolationError.Part' => PolicyViolationErrorPart::class,
        'PolicyViolationKey' => PolicyViolationKey::class,
        'Predicate' => Predicate::class,
        'ProductAd' => ProductAd::class,
        'QueryError' => QueryError::class,
        'QuotaCheckError' => QuotaCheckError::class,
        'RangeError' => RangeError::class,
        'RateExceededError' => RateExceededError::class,
        'ReadOnlyError' => ReadOnlyError::class,
        'RejectedError' => RejectedError::class,
        'RequestError' => RequestError::class,
        'RequiredError' => RequiredError::class,
        'RichMediaAd' => RichMediaAd::class,
        'Selector' => Selector::class,
        'SelectorError' => SelectorError::class,
        'SizeLimitError' => SizeLimitError::class,
        'SoapHeader' => SoapRequestHeader::class,
        'SoapResponseHeader' => SoapResponseHeader::class,
        'StatsQueryError' => StatsQueryError::class,
        'StringLengthError' => StringLengthError::class,
        'String_StringMapEntry' => String_StringMapEntry::class,
        'TempAdUnionId' => TempAdUnionId::class,
        'TemplateAd' => TemplateAd::class,
        'TemplateElement' => TemplateElement::class,
        'TemplateElementField' => TemplateElementField::class,
        'TextAd' => TextAd::class,
        'ThirdPartyRedirectAd' => ThirdPartyRedirectAd::class,
        'UrlError' => UrlError::class,
        'Video' => Video::class,
        'DynamicSearchAd' => DynamicSearchAd::class,
        'Ad.Type' => AdType::class,
        'AdCustomizerError.Reason' => AdCustomizerErrorReason::class,
        'AdError.Reason' => AdErrorReason::class,
        'AdGroupAd.ApprovalStatus' => AdGroupAdApprovalStatus::class,
        'AdGroupAd.Status' => AdGroupAdStatus::class,
        'DeprecatedAd.Type' => DeprecatedAdType::class,
        'AdGroupAdError.Reason' => AdGroupAdErrorReason::class,
        'AdxError.Reason' => AdxErrorReason::class,
        'AppUrl.OsType' => AppUrlOsType::class,
        'AuthenticationError.Reason' => AuthenticationErrorReason::class,
        'AuthorizationError.Reason' => AuthorizationErrorReason::class,
        'ClientTermsError.Reason' => ClientTermsErrorReason::class,
        'DatabaseError.Reason' => DatabaseErrorReason::class,
        'DateError.Reason' => DateErrorReason::class,
        'DistinctError.Reason' => DistinctErrorReason::class,
        'EntityAccessDenied.Reason' => EntityAccessDeniedReason::class,
        'EntityCountLimitExceeded.Reason' => EntityCountLimitExceededReason::class,
        'EntityNotFound.Reason' => EntityNotFoundReason::class,
        'ExperimentDataStatus' => ExperimentDataStatus::class,
        'ExperimentDeltaStatus' => ExperimentDeltaStatus::class,
        'ExperimentError.Reason' => ExperimentErrorReason::class,
        'FeedAttributeReferenceError.Reason' => FeedAttributeReferenceErrorReason::class,
        'ForwardCompatibilityError.Reason' => ForwardCompatibilityErrorReason::class,
        'FunctionError.Reason' => FunctionErrorReason::class,
        'FunctionParsingError.Reason' => FunctionParsingErrorReason::class,
        'IdError.Reason' => IdErrorReason::class,
        'ImageError.Reason' => ImageErrorReason::class,
        'InternalApiError.Reason' => InternalApiErrorReason::class,
        'Label.Status' => LabelStatus::class,
        'Media.MediaType' => MediaMediaType::class,
        'Media.MimeType' => MediaMimeType::class,
        'Media.Size' => MediaSize::class,
        'MediaBundleError.Reason' => MediaBundleErrorReason::class,
        'MediaError.Reason' => MediaErrorReason::class,
        'NewEntityCreationError.Reason' => NewEntityCreationErrorReason::class,
        'NotEmptyError.Reason' => NotEmptyErrorReason::class,
        'NullError.Reason' => NullErrorReason::class,
        'OperationAccessDenied.Reason' => OperationAccessDeniedReason::class,
        'Operator' => Operator::class,
        'OperatorError.Reason' => OperatorErrorReason::class,
        'PagingError.Reason' => PagingErrorReason::class,
        'Predicate.Operator' => PredicateOperator::class,
        'QueryError.Reason' => QueryErrorReason::class,
        'QuotaCheckError.Reason' => QuotaCheckErrorReason::class,
        'RangeError.Reason' => RangeErrorReason::class,
        'RateExceededError.Reason' => RateExceededErrorReason::class,
        'ReadOnlyError.Reason' => ReadOnlyErrorReason::class,
        'RejectedError.Reason' => RejectedErrorReason::class,
        'RequestError.Reason' => RequestErrorReason::class,
        'RequiredError.Reason' => RequiredErrorReason::class,
        'RichMediaAd.AdAttribute' => RichMediaAdAdAttribute::class,
        'RichMediaAd.RichMediaAdType' => RichMediaAdRichMediaAdType::class,
        'SelectorError.Reason' => SelectorErrorReason::class,
        'SizeLimitError.Reason' => SizeLimitErrorReason::class,
        'SortOrder' => SortOrder::class,
        'StatsQueryError.Reason' => StatsQueryErrorReason::class,
        'StringLengthError.Reason' => StringLengthErrorReason::class,
        'TemplateElementField.Type' => TemplateElementFieldType::class,
        'ThirdPartyRedirectAd.ExpandingDirection' => ThirdPartyRedirectAdExpandingDirection::class,
        'UrlError.Reason' => UrlErrorReason::class,
        'VideoType' => VideoType::class,
        'get' => AdGroupAdServiceGet::class,
        'getResponse' => AdGroupAdServiceGetResponse::class,
        'mutate' => AdGroupAdServiceMutate::class,
        'mutateResponse' => AdGroupAdServiceMutateResponse::class,
        'mutateLabel' => MutateLabel::class,
        'mutateLabelResponse' => MutateLabelResponse::class,
        'query' => Query::class,
        'queryResponse' => QueryResponse::class,
        'upgradeUrl' => UpgradeUrl::class,
        'upgradeUrlResponse' => UpgradeUrlResponse::class,
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
     * Returns a list of AdGroupAds.
     * AdGroupAds that had been removed are not returned by default.
     * 
     * @param serviceSelector The selector specifying the {@link AdGroupAd}s to return.
     * @return The page containing the AdGroupAds that meet the criteria specified by the selector.
     * @throws ApiException when there is at least one error with the request.
     */
    public function get($serviceSelector)
    {
        $args = new AdGroupAdServiceGet($serviceSelector);
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
     * Applies the list of mutate operations (ie. add, set, remove):
     * <p>Add - Creates a new {@linkplain AdGroupAd ad group ad}. The
     * {@code adGroupId} must
     * reference an existing ad group. The child {@code Ad} must be sufficiently
     * specified by constructing a concrete ad type (such as {@code TextAd})
     * and setting its fields accordingly.</p>
     * <p>Set - Updates an ad group ad. Except for {@code status},
     * ad group ad fields are not mutable. Status updates are
     * straightforward - the status of the ad group ad is updated as
     * specified. If any other field has changed, it will be ignored. If
     * you want to change any of the fields other than status, you must
     * make a new ad and then remove the old one.</p>
     * <p>Remove - Removes the link between the specified AdGroup and
     * Ad.</p>
     * @param operations The operations to apply.
     * @return A list of AdGroupAds where each entry in the list is the result of
     * applying the operation in the input list with the same index. For an
     * add/set operation, the return AdGroupAd will be what is saved to the db.
     * In the case of the remove operation, the return AdGroupAd will simply be
     * an AdGroupAd containing an Ad with the id set to the Ad being removed from
     * the AdGroup.
     */
    public function mutate($operations)
    {
        $args = new AdGroupAdServiceMutate($operations);
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
     * Adds labels to the AdGroupAd or removes labels from the AdGroupAd.
     * <p>Add - Apply an existing label to an existing {@linkplain AdGroupAd ad group ad}. The
     * {@code adGroupId} and {@code adId} must reference an existing
     * {@linkplain AdGroupAd ad group ad}. The {@code labelId} must reference an existing
     * {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}.
     * <p>Remove - Removes the link between the specified {@linkplain AdGroupAd ad group ad} and
     * {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}.</p>
     * @param operations The operations to apply.
     * @return A list of AdGroupAdLabel where each entry in the list is the result of
     * applying the operation in the input list with the same index. For an
     * add operation, the returned AdGroupAdLabel contains the AdGroupId, AdId and the LabelId.
     * In the case of a remove operation, the returned AdGroupAdLabel will only have AdGroupId and
     * AdId.
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
     * Returns a list of AdGroupAds based on the query.
     * 
     * @param query The SQL-like AWQL query string.
     * @return A list of AdGroupAds.
     * @throws ApiException if problems occur while parsing the query or fetching AdGroupAds.
     */
    public function query($query)
    {
        $args = new Query($query);
        $result = $this->__soapCall('query', array($args));
        return $result->rval;
    }
    /**
     * Upgrades the url for a set of ads.
     * @param operations The list of upgrades to apply.
     * @return The list of Ads that were upgraded.
     */
    public function upgradeUrl($operations)
    {
        $args = new UpgradeUrl($operations);
        $result = $this->__soapCall('upgradeUrl', array($args));
        return $result->rval;
    }
}
