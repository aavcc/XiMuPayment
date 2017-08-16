<?php

namespace XiMu\Alipay\Aop\Request;

/**
 * ALIPAY API: alipay.open.auth.token.app request
 *
 * @author auto create
 * @since 1.0, 2016-12-08 12:06:55
 */
class AlipayOpenAuthTokenAppRequest
{
	/**
	 * 用应用授权码（app_auth_code）换取或者刷新应用授权令牌(app_auth_token)
	 **/
	private $bizContent;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;


	public function setBizContent($bizContent)
	{
		$this->bizContent = $bizContent;
		$this->apiParas["biz_content"] = $bizContent;
		return $this;
	}

	public function getBizContent()
	{
		return $this->bizContent;
	}

	public function getApiMethodName()
	{
		return "alipay.open.auth.token.app";
	}

	public function setNotifyUrl($notifyUrl)
	{
		$this->notifyUrl = $notifyUrl;
		return $this;
	}

	public function getNotifyUrl()
	{
		return $this->notifyUrl;
	}

	public function setReturnUrl($returnUrl)
	{
		$this->returnUrl = $returnUrl;
		return $this;
	}

	public function getReturnUrl()
	{
		return $this->returnUrl;
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function getTerminalType()
	{
		return $this->terminalType;
	}

	public function setTerminalType($terminalType)
	{
		$this->terminalType = $terminalType;
		return $this;
	}

	public function getTerminalInfo()
	{
		return $this->terminalInfo;
	}

	public function setTerminalInfo($terminalInfo)
	{
		$this->terminalInfo = $terminalInfo;
		return $this;
	}

	public function getProdCode()
	{
		return $this->prodCode;
	}

	public function setProdCode($prodCode)
	{
		$this->prodCode = $prodCode;
		return $this;
	}

	public function setApiVersion($apiVersion)
	{
		$this->apiVersion = $apiVersion;
		return $this;
	}

	public function getApiVersion()
	{
		return $this->apiVersion;
	}

  	public function setNeedEncrypt($needEncrypt)
  	{
     	$this->needEncrypt = $needEncrypt;
     	return $this;
  	}

  	public function getNeedEncrypt()
  	{
    	return $this->needEncrypt;
  	}
}