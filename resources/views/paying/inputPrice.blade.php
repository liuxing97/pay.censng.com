<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <title>辰象支付</title>

</head>
<body>
    <!--辰象logo-->
    <img class="logo_bg" src="{{URL::asset('img/paying/censng_pay_logo.png')}}" />
    <!--店家介绍-->
    <div class="businessAbout">
        <!--店家logo-->
        <div class="businessLogo">
            <div class="businessLogo-box">
                <img src="{{URL::asset('img/paying/eg_business_logo_100x100.png')}}"/>
            </div>
        </div>
        <!--店家标题-->
        <div class="businessTitle">叫个不停（北大街旗舰店）</div>
        <!--店家类别-->
        <div class="businessClass">饭店类</div>
    </div>
    <!--金额及确认-->
    <div class="inputAction">
        <div class="inputPriceTitle">转账金额（支付前请先询问商家）</div>
        <input class="inputPrice" type="text" />
        <a href="/paying/step=paytype"><div class="confirmPay">确认支付</div></a>
    </div>
    <!--提示-->
    <div class="hint">支持微信、支付宝、花呗(部分商家)支付</div>
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
    .logo_bg{
        position: absolute;
        top: 20px;
        width: 40px;
        left: 20px;
    }
    html{
        background: #fbfbfb;
    }
    body{
        position: relative;
        border: 1px solid #e5e5e5;
        margin: 0 auto;
        width: 300px;
        background: #fff;
        margin-top: 10%;
        margin-bottom: 20px;
        box-shadow: 0 0 10px #ccc;
    }
</style>
<style>
    .businessAbout{
        text-align: center;
    }
    .businessLogo{
        width: 100px;
        height: 100px;
        margin: 0 auto;
        margin-top: 36px;
        border-radius: 100px;
        box-sizing: border-box;
        overflow: hidden;
        box-shadow: 0 0 10px #666;
    }
    .businessLogo-box{

    }
    .businessLogo-box img{
        height: 100%;
        width: 100%;
    }
    .businessTitle{
        font-size: 20px;
        width: 160px;
        margin: 0 auto;
        margin-top: 26px;
        line-height: 1.5em;
        font-weight: bold;
    }
    .businessClass{
        width: 60px;
        font-size: 16px;
        background: #cccccc;
        background: #696969;
        color: #fff;
        margin: 0 auto;
        margin-top: 10px;
        line-height: 1.5em;
        border-radius: 5px;
        padding: 2px 10px;
    }
</style>
<style>
    .inputAction{
        text-align: center;
        font-size: 18px;
        width: 280px;
        margin: 0 auto;
        margin-top: 27px;
    }
    .inputPriceTitle{
        text-align: left;
        color: #cccccc;
        font-size: 16px;
    }
    .inputPrice{
        border: none;
        border-bottom: 1px solid #cccccc;
        width: 100%;
        margin-top: 4px;
        font-size: 26px;
        padding: 10px 0;
        border-radius: 0;
        letter-spacing: 2px;
        padding-left: 30px;
        box-sizing: border-box;
        background: url("/img/paying/price-icon.png") no-repeat;
        background-size: 30px;
        background-position-y: 6px;
    }
    .inputPrice:focus{
        /*border: 1px solid red;*/
        /*outline: 1px solid #ccc;*/
        /*border: none;*/
    }
    .confirmPay{
        width: 100%;
        line-height: 48px;
        background: #0FBA00;
        color: #fff;
        border-radius: 5px;
        margin: 0 auto;
        margin-top: 36px;
    }
    .hint{
        font-size: 16px;
        margin-top: 26px;
        text-align: center;
        padding-bottom: 30px;
        color: #666;
    }
</style>