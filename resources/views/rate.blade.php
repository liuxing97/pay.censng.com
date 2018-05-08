@extends('base')

@section('myPage')
    {{--声明--}}
    <div class="statement">
        {{--支付宝:服务费按照单笔交易金额的【0.6%】收取--}}
        <p>声明：本平台暂未计划收取任何费用，但因资金需支付宝、微信支付内流动，故而会存在手续费。</p>
    </div>
    {{--支付宝费率--}}
    <div class="alipayRate r-item">
        <div class="r-item-title">支付宝费率</div>
        <div class="r-item-value">0.6%&nbsp;&nbsp;-&nbsp;单笔，若通过支付宝</div>
    </div>
    <div class="alipayRate r-item">
        <div class="r-item-title">微信费率</div>
        <div class="r-item-value">0.6%&nbsp;&nbsp;-&nbsp;单笔，若通过微信支付</div>
    </div>
    <div class="alipayRate r-item">
        <div class="r-item-title">平台支付费率</div>
        <div class="r-item-value">0.0%&nbsp;&nbsp;-&nbsp;暂无收费方案</div>
    </div>
    <style>
        .r-item{
            width: 44.35%;

            margin: 0 auto;

            margin-top: 38px;

            border: 1px solid #e5e5e5;

            box-sizing: border-box;

            display: inline-block;

            position: relative;

            left: 5%;

            margin-right: 1%;
        }
        .r-item-title{
            font-size: 18px;
            line-height: 48px;
            border-bottom: 1px solid #e5e5e5;
            padding: 0 20px;
            background: #fbfbfb;
        }
        .r-item-value{
            font-size: 16px;
            /*margin-top: 12px;*/
            line-height: 88px;
            padding: 0 44px;
            color: #666;
        }
    </style>
    <style>
        .statement{
            width: 90%;
            margin: 0 auto;
            margin-top: 46px;
            margin-bottom: 20px;
            background: #f2f2f2;
            line-height: 1.5em;
            padding: 36px 20px;
            box-sizing: border-box;
        }
    </style>
    <style>
    .siteMenu a:nth-child(3) .i-menu{
        border-bottom: 2px solid #db6161;
        color: #666;
    }
    body{
        padding-top: 112px;
    }
    .footer{
        margin-top: 88px;
    }
</style>
@endsection