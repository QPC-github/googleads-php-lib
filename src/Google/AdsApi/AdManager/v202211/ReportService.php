<?php

namespace Google\AdsApi\AdManager\v202211;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ReportService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202211\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202211\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202211\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202211\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202211\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202211\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202211\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202211\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202211\\CommonError',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdManager\\v202211\\CurrencyCodeError',
      'Date' => 'Google\\AdsApi\\AdManager\\v202211\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202211\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202211\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202211\\DateValue',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202211\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202211\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202211\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202211\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202211\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202211\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202211\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202211\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202211\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202211\\QuotaError',
      'ReportDownloadOptions' => 'Google\\AdsApi\\AdManager\\v202211\\ReportDownloadOptions',
      'ReportError' => 'Google\\AdsApi\\AdManager\\v202211\\ReportError',
      'ReportJob' => 'Google\\AdsApi\\AdManager\\v202211\\ReportJob',
      'ReportQuery' => 'Google\\AdsApi\\AdManager\\v202211\\ReportQuery',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202211\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202211\\RequiredError',
      'SavedQuery' => 'Google\\AdsApi\\AdManager\\v202211\\SavedQuery',
      'SavedQueryPage' => 'Google\\AdsApi\\AdManager\\v202211\\SavedQueryPage',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202211\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202211\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202211\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202211\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202211\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202211\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202211\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202211\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202211\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202211\\TextValue',
      'Value' => 'Google\\AdsApi\\AdManager\\v202211\\Value',
      'getReportDownloadURLResponse' => 'Google\\AdsApi\\AdManager\\v202211\\getReportDownloadURLResponse',
      'getReportDownloadUrlWithOptionsResponse' => 'Google\\AdsApi\\AdManager\\v202211\\getReportDownloadUrlWithOptionsResponse',
      'getReportJobStatusResponse' => 'Google\\AdsApi\\AdManager\\v202211\\getReportJobStatusResponse',
      'getSavedQueriesByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202211\\getSavedQueriesByStatementResponse',
      'runReportJobResponse' => 'Google\\AdsApi\\AdManager\\v202211\\runReportJobResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202211/ReportService?wsdl')
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
     * Returns the URL at which the report file can be downloaded.
     * <p>
     * The report will be generated as a gzip archive, containing the report file itself.
     *
     * @param int $reportJobId
     * @param \Google\AdsApi\AdManager\v202211\ExportFormat $exportFormat Constant: string - Valid values: TSV, TSV_EXCEL, CSV_DUMP, XML, XLSX
     * @return string
     * @throws \Google\AdsApi\AdManager\v202211\ApiException
     */
    public function getReportDownloadURL($reportJobId, $exportFormat)
    {
      return $this->__soapCall('getReportDownloadURL', array(array('reportJobId' => $reportJobId, 'exportFormat' => $exportFormat)))->getRval();
    }

    /**
     * Returns the URL at which the report file can be downloaded, and allows for customization
     * of the downloaded report.
     * <p>
     * By default, the report will be generated as a gzip archive, containing the report file itself.
     * This can be changed by setting {@link ReportDownloadOptions#useGzipCompression} to false.
     *
     * @param int $reportJobId
     * @param \Google\AdsApi\AdManager\v202211\ReportDownloadOptions $reportDownloadOptions
     * @return string
     * @throws \Google\AdsApi\AdManager\v202211\ApiException
     */
    public function getReportDownloadUrlWithOptions($reportJobId, \Google\AdsApi\AdManager\v202211\ReportDownloadOptions $reportDownloadOptions)
    {
      return $this->__soapCall('getReportDownloadUrlWithOptions', array(array('reportJobId' => $reportJobId, 'reportDownloadOptions' => $reportDownloadOptions)))->getRval();
    }

    /**
     * Returns the {@link ReportJobStatus} of the report job with the specified ID.
     *
     * @param int $reportJobId
     * @return string
     * @throws \Google\AdsApi\AdManager\v202211\ApiException
     */
    public function getReportJobStatus($reportJobId)
    {
      return $this->__soapCall('getReportJobStatus', array(array('reportJobId' => $reportJobId)))->getRval();
    }

    /**
     * Retrieves a page of the saved queries either created by or shared with the current user. Each
     * {@link SavedQuery} in the page, if it is compatible with the current API version, will
     * contain a {@link ReportQuery} object which can be optionally modified and used to create a
     * {@link ReportJob}. This can then be passed to {@link ReportService#runReportJob}.
     * The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link SavedQuery#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link SavedQuery#name}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202211\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202211\SavedQueryPage
     * @throws \Google\AdsApi\AdManager\v202211\ApiException
     */
    public function getSavedQueriesByStatement(\Google\AdsApi\AdManager\v202211\Statement $filterStatement)
    {
      return $this->__soapCall('getSavedQueriesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Initiates the execution of a {@link ReportQuery} on the server.
     *
     * <p>The following fields are required:
     * <ul>
     * <li>{@link ReportJob#reportQuery}</li>
     * </ul>
     *
     * @param \Google\AdsApi\AdManager\v202211\ReportJob $reportJob
     * @return \Google\AdsApi\AdManager\v202211\ReportJob
     * @throws \Google\AdsApi\AdManager\v202211\ApiException
     */
    public function runReportJob(\Google\AdsApi\AdManager\v202211\ReportJob $reportJob)
    {
      return $this->__soapCall('runReportJob', array(array('reportJob' => $reportJob)))->getRval();
    }

}
