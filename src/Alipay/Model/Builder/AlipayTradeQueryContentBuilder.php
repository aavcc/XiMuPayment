<?php

namespace XiMu\Alipay\Model\Builder;

/**
 * 统一收单线下交易查询
 * https://doc.open.alipay.com/docs/api.htm?spm=a219a.7395905.0.0.2QwXkc&docType=4&apiId=757
 */
class AlipayTradeQueryContentBuilder extends ContentBuilder
{
    //out_trade_no 订单支付时传入的商户订单号,和支付宝交易号不能同时为空。 trade_no,out_trade_no如果同时存在优先取trade_no
    private $outTradeNo;

    //trade_no 支付宝交易号，和商户订单号不能同时为空
    private $tradeNo;

    public function setOutTradeNo($outTradeNo)
    {
        if ($outTradeNo) {
            $this->outTradeNo = $outTradeNo;
            $this->bizContentarr['out_trade_no'] = $outTradeNo;
        }
        return $this;
    }

    public function getOutTradeNo()
    {
        return $this->outTradeNo;
    }

    public function setTradeNo($tradeNo)
    {
        if ($tradeNo) {
            $this->tradeNo = $tradeNo;
            $this->bizContentarr['trade_no'] = $tradeNo;
        }
        return $this;
    }

    public function getTradeNo()
    {
        return $this->tradeNo;
    }
}
