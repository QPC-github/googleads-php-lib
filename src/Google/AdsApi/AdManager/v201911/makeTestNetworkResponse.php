<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class makeTestNetworkResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201911\Network $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201911\Network $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\Network
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\Network $rval
     * @return \Google\AdsApi\AdManager\v201911\makeTestNetworkResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
