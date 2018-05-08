<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <title>辰象支付</title>

</head>
<body>
<!--公告栏-->
<div class="listBrand">
    <!--店铺信息-->
    <div class="businessAbout">
        <div class="businessAbout-box">
            <div class="businessLogo">
                <img src="{{URL::asset('/img/paying/eg_business_logo_75x75.png')}}" />
            </div>
            <div class="businessTitle">叫个不停（北大街旗舰店）</div>
        </div>
    </div>
    <!--消费信息-->
    <div class="spendMsg">
        <div class="circle">
            <div class="circle-b"></div>
        </div>
        <div class="circle">
            <div class="circle-b"></div>
        </div>
        <div class="spendMsg-box">
            <div class="spendPrice">您本次消费￥102.86</div>
        </div>
    </div>
</div>
<!--选择支付方式-->
<div class="choicePayType">
    <div class="choicePayType-title">辰象支付，请选择支付方式</div>
    <ul class="payTypeList">
        <li onclick="payTypeChoied(this)">
            <img src="{{URL::asset('/img/paying/pay_type_weixin_32x30.png')}}" />
            <span>微信支付</span>
        </li>
        <li onclick="payTypeChoied(this)">
            <img src="{{URL::asset('/img/paying/pay_type_alipay_32x30.png')}}" />
            <span>支付宝支付</span>
        </li>
        <li onclick="payTypeChoied(this)">
            <img src="{{URL::asset('/img/paying/pay_type_huabei_32x30.png')}}" />
            <span>花呗支付（本店支持，不享优惠）</span>
        </li>
    </ul>
    <a href="/paying/step=waiting"><div class="confirmPay">确认支付</div></a>
</div>
</body>
</html>
<style>
    body,h1,h2,h3,h4,h5,h6,hr,p,blockquote,dl,dt,dd,ul,ol,li,pre,figcaption,figure,fieldset,legend,button,input,textarea,th,td{margin:0;padding:0}
    body,button,input,select,textarea{font:12px/1 Lucida Grande,'Microsoft YaHei',"Lucida Grande","Lucida Sans Unicode",Helvetica,Arial,Verdana,sans-serif}
    h1{font-size:18px;font-weight:normal}
    h2{font-size:16px;font-weight:normal}
    h3{font-size:14px;font-weight:normal}
    h4,h5,h6{font-size:100%;font-weight:normal}
    address,cite,dfn,em,var{font-style:normal}
    code,kbd,pre,samp,tt{font-family:"Courier New",Courier,monospace}
    small{font-size:12px}
    ul,ol,li{list-style:none}
    a{text-decoration:none}
    abbr[title],acronym[title]{border-bottom:1px dotted;cursor:help}
    q:before,q:after{content:''}
    legend{color:#000}
    fieldset,img{border:0}
    table{border-collapse:collapse;border-spacing:0}
    hr{border:0;height:1px}
    *{-ms-word-break:break-all;word-break:break-all;-ms-word-wrap:break-word;word-wrap:break-word;-webkit-tap-highlight-color:rgba(0,0,0,0)}
</style>
<style>
    body{
        background: #fbfbfb;
    }
    .listBrand{
        background: #fff;
        width: 300px;
        /*height: 260px;*/
        margin: 0 auto;
        margin-top: 10%;
        box-shadow: 0 0 10px #ccc;
        position: relative;
        z-index: 9999;
    }
    .businessAbout{
        width: 100%;
        height: 130px;
        border-bottom: 1px dashed #ccc;
        box-sizing: border-box;
        padding-top: 28px;
        padding-left: 20px;
    }
    .businessAbout-box{
        display: table-cell;
        height: 100px;
    }
    .businessLogo{
        display: inline-block;
        vertical-align: top;
    }
    .businessLogo img{

    }
    .businessTitle{
        display: inline-block;
        vertical-align: top;
        font-size: 16px;
        width: 170px;
        margin-left: 10px;
        margin-top: 10px;
        line-height: 1.5em;
    }
    .spendMsg{
        width: 100%;
        padding-left: 20px;
        padding-right: 20px;
        color: #666666;
        letter-spacing: 2px;
        text-align: center;
        box-sizing: border-box;
    }
    .spendMsg-box{
        display: table-cell;
        width: 260px;
        height: 80px;
        vertical-align: middle;
    }
    .spendMsg .spendPrice{
        width: 100%;
        font-size: 16px;
        /*vertical-align: middle;*/
    }
    .listBrand .circle{
        box-shadow: inset 0 0 10px #ccc;
    }
    .listBrand .circle:nth-child(1){
        width: 20px;
        height: 20px;
        background: #fbfbfb;
        position: absolute;
        top:130px;
        border-radius: 100px;
        left: -10px;
        /*box-shadow: 0 0 10px #ccc;*/
        z-index: 9998;
    }
    .listBrand .circle:nth-child(2){
        width: 20px;
        height: 20px;
        background: #fbfbfb;
        position: absolute;
        top:130px;
        border-radius: 100px;
        right: -10px;
        z-index: 9998;
        /*box-shadow: 0 0 10px #ccc;*/
    }
    .listBrand .circle:nth-child(1) .circle-b:first-child{
        width: 20px;
        height: 20px;
        background: #fbfbfb;
        border-radius: 100px;
        left: -5px;
        position: relative;
        box-shadow: 0 0 10px #fbfbfb;
    }
    .listBrand .circle:nth-child(2) .circle-b:first-child{
        width: 20px;
        height: 20px;
        background: #fbfbfb;
        border-radius: 100px;
        right: -5px;
        position: relative;
        box-shadow: 0 0 10px #fbfbfb;
    }
</style>
<style>
    .choicePayType{
        width: 300px;
        font-size: 16px;
        margin: 0 auto;
        margin-top: 20px;
    }
    .choicePayType-title{
        font-size: 16px;
        color: #ccc;
    }
    .payTypeList{
        padding-top: 10px;
    }
    .payTypeList li{
        line-height: 30px;
        margin: 15px 0;
        background: #fff;
        padding: 10px 10px;
        /*box-shadow: 0 0 10px #ccc;*/
        border: 1px solid #e5e5e5;
        cursor: pointer;
    }
    .payTypeList li img{
        vertical-align: middle;
    }
    .payTypeList li span{
        vertical-align: middle;
        font-size: 14px;
        color: #666;
    }
    .confirmPay{
        width: 100%;
        line-height: 48px;
        background: #0FBA00;
        color: #fff;
        border-radius: 5px;
        margin: 0 auto;
        margin-top: 36px;
        text-align: center;
        margin-bottom: 36px;
    }
</style>
<script>
    function payTypeChoied(dom){
        $("li").css({"border":"1px solid #e5e5e5"});
        $(dom).css({"border":"2px solid darkgrey"});
    }
</script>

<!--如果本店有额度，或其他店有额度，询问是否使用额度-->