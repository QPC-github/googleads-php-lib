<?php

namespace Google\AdsApi\AdManager\v202211;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class InventoryService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202211\\ObjectValue',
      'ActivateAdUnits' => 'Google\\AdsApi\\AdManager\\v202211\\ActivateAdUnits',
      'AdSenseAccountError' => 'Google\\AdsApi\\AdManager\\v202211\\AdSenseAccountError',
      'AdSenseSettings' => 'Google\\AdsApi\\AdManager\\v202211\\AdSenseSettings',
      'AdUnitAction' => 'Google\\AdsApi\\AdManager\\v202211\\AdUnitAction',
      'AdUnitCodeError' => 'Google\\AdsApi\\AdManager\\v202211\\AdUnitCodeError',
      'AdUnit' => 'Google\\AdsApi\\AdManager\\v202211\\AdUnit',
      'AdUnitHierarchyError' => 'Google\\AdsApi\\AdManager\\v202211\\AdUnitHierarchyError',
      'AdUnitPage' => 'Google\\AdsApi\\AdManager\\v202211\\AdUnitPage',
      'AdUnitParent' => 'Google\\AdsApi\\AdManager\\v202211\\AdUnitParent',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202211\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202211\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202211\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202211\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202211\\AppliedLabel',
      'ArchiveAdUnits' => 'Google\\AdsApi\\AdManager\\v202211\\ArchiveAdUnits',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202211\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202211\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202211\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202211\\CommonError',
      'CompanyError' => 'Google\\AdsApi\\AdManager\\v202211\\CompanyError',
      'CreativeWrapperError' => 'Google\\AdsApi\\AdManager\\v202211\\CreativeWrapperError',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202211\\CrossSellError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202211\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202211\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202211\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202211\\DateValue',
      'DeactivateAdUnits' => 'Google\\AdsApi\\AdManager\\v202211\\DeactivateAdUnits',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202211\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202211\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202211\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202211\\FieldPathElement',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v202211\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202211\\FrequencyCapError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202211\\InternalApiError',
      'InvalidColorError' => 'Google\\AdsApi\\AdManager\\v202211\\InvalidColorError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202211\\InvalidUrlError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v202211\\InventoryUnitError',
      'InventoryUnitRefreshRateError' => 'Google\\AdsApi\\AdManager\\v202211\\InventoryUnitRefreshRateError',
      'AdUnitSize' => 'Google\\AdsApi\\AdManager\\v202211\\AdUnitSize',
      'InventoryUnitSizesError' => 'Google\\AdsApi\\AdManager\\v202211\\InventoryUnitSizesError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202211\\LabelEntityAssociationError',
      'LabelFrequencyCap' => 'Google\\AdsApi\\AdManager\\v202211\\LabelFrequencyCap',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202211\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202211\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202211\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202211\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202211\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202211\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202211\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202211\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202211\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202211\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202211\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202211\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202211\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202211\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202211\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202211\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202211\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202211\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202211\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202211\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202211\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202211\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202211\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202211\\TeamError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202211\\TextValue',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202211\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202211\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202211\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202211\\Value',
      'createAdUnitsResponse' => 'Google\\AdsApi\\AdManager\\v202211\\createAdUnitsResponse',
      'getAdUnitSizesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202211\\getAdUnitSizesByStatementResponse',
      'getAdUnitsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202211\\getAdUnitsByStatementResponse',
      'performAdUnitActionResponse' => 'Google\\AdsApi\\AdManager\\v202211\\performAdUnitActionResponse',
      'updateAdUnitsResponse' => 'Google\\AdsApi\\AdManager\\v202211\\updateAdUnitsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202211/InventoryService?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * Creates new {@link AdUnit} objects.
     *
     * @param \Google\AdsApi\AdManager\v202211\AdUnit[] $adUnits
     * @return \Google\AdsApi\AdManager\v202211\AdUnit[]
     * @throws \Google\AdsApi\AdManager\v202211\ApiException
     */
    public function createAdUnits(array $adUnits)
    {
      return $this->__soapCall('createAdUnits', array(array('adUnits' => $adUnits)))->getRval();
    }

    /**
     * Returns a set of all relevant {@link AdUnitSize} objects.
     *
     * <p>The given {@link Statement} is currently ignored but may be honored in future versions.
     *
     * @param \Google\AdsApi\AdManager\v202211\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202211\AdUnitSize[]
     * @throws \Google\AdsApi\AdManager\v202211\ApiException
     */
    public function getAdUnitSizesByStatement(\Google\AdsApi\AdManager\v202211\Statement $filterStatement)
    {
      return $this->__soapCall('getAdUnitSizesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Gets a {@link AdUnitPage} of {@link AdUnit} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code adUnitCode}</td>
     * <td>{@link AdUnit#adUnitCode}</td>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link AdUnit#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link AdUnit#name}</td>
     * </tr>
     * <tr>
     * <td>{@code parentId}</td>
     * <td>{@link AdUnit#parentId}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link AdUnit#status}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link AdUnit#lastModifiedDateTime}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202211\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202211\AdUnitPage
     * @throws \Google\AdsApi\AdManager\v202211\ApiException
     */
    public function getAdUnitsByStatement(\Google\AdsApi\AdManager\v202211\Statement $filterStatement)
    {
      return $this->__soapCall('getAdUnitsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link AdUnit} objects that match the given
     * {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202211\AdUnitAction $adUnitAction
     * @param \Google\AdsApi\AdManager\v202211\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202211\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202211\ApiException
     */
    public function performAdUnitAction(\Google\AdsApi\AdManager\v202211\AdUnitAction $adUnitAction, \Google\AdsApi\AdManager\v202211\Statement $filterStatement)
    {
      return $this->__soapCall('performAdUnitAction', array(array('adUnitAction' => $adUnitAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link AdUnit} objects.
     *
     * @param \Google\AdsApi\AdManager\v202211\AdUnit[] $adUnits
     * @return \Google\AdsApi\AdManager\v202211\AdUnit[]
     * @throws \Google\AdsApi\AdManager\v202211\ApiException
     */
    public function updateAdUnits(array $adUnits)
    {
      return $this->__soapCall('updateAdUnits', array(array('adUnits' => $adUnits)))->getRval();
    }

}
