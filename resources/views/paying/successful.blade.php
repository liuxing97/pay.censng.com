<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="http://simbyone.com/wp-content/uploads/2014/04/3455e6f65c33232a060c28829a49b1cb.png">
    <title>辰象支付</title>
</head>
<body onclick="location.href='/paying/step=price'">
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="first_object"></div>
            <div class="object" id="second_object"></div>
            <div class="object" id="third_object"></div>
            <div class="object" id="forth_object"></div>
        </div>
    </div>
</div>
<div class="waiting">
    <p>摩 擦 摩 擦</p>
    <p>获 取 服 务 器 数 据 中</p>
</div>
<div class="successful screenBox">
    <!--支付成功-->
    <div class="paySuccessfulIcon">
        <img src="{{URL::asset('/img/paying/pay_success_70x70.png')}}" />
        <p class="state">支付成功</p>
        <p class="reward">已获取0.3元奖励金</p>
    </div>
    <img class="logo_bg" src="{{URL::asset('img/paying/censng_pay_logo.png')}}" />
    <!--店家Logo及名称-->
    <div class="businessAbout">
        <div class="businessLogo">
            <img src="{{URL::asset('/img/paying/eg_business_logo_75x75.png')}}" />
        </div>
        <div class="businessTitle">叫个不停（北大街旗舰店）</div>
        <div class="payPriceAdd_up">总计：￥68.00</div>
    </div>
</div>
<!--我与该店-->
<div class="userMsg">
    <p class="availablePrice">本店已累计：0.6元</p>
    <p class="availableHelp">下 次 可 直 接 使 用 ，或 累 积 后 使 用  （ 可 跨 店 ， 抵  消 金 额 效 果 减  半 ） 。</p>
</div>
</body>
</html>
<style>
    #loading{
        background-color: rgba(255,255,255,1);
        height: 100%;
        width: 100%;
        position: fixed;
        z-index: 1;
        margin-top: 0px;
        top: 0px;
    }
    #loading-center{
        width: 100%;
        height: 100%;
        position: relative;
    }
    #loading-center-absolute {
        position: absolute;
        left: 50%;
        top: 30%;
        height: 100px;
        width: 100px;
        margin-left: -62px;
    }
    .object{
        width: 25px;
        height: 25px;
        background-color: rgba(255,255,255,0);
        margin-right: auto;
        margin-left: auto;
        border: 4px solid rgba(239,74,74,1);
        left: 37px;
        top: 37px;
        position: absolute;
    }

    #first_object{
        -webkit-animation: first_object 2s infinite;
        animation: first_object 2s infinite;
        -webkit-animation-delay: 0.5s;
        animation-delay: 0.5s;
    }
    #second_object{
        -webkit-animation: second_object 2s infinite;
        animation: second_object 2s infinite;
    }
    #third_object{
        -webkit-animation: third_object 2s infinite;
        animation: third_object 2s infinite;
        -webkit-animation-delay: 0.5s;
        animation-delay: 0.5s;
    }
    #forth_object{
        -webkit-animation: forth_object 2s infinite;
        animation: forth_object 2s infinite;
    }






    @-webkit-keyframes first_object {
        0% {
            -ms-transform: translate(1,1) scale(1,1);
            -webkit-transform: translate(1,1) scale(1,1);
            transform: translate(1,1) scale(1,1);
        }
        50% {
            -ms-transform: translate(150%,150%) scale(2,2);
            -webkit-transform: translate(150%,150%) scale(2,2);
            transform: translate(150%,150%) scale(2,2);
        }

        100% {
            -ms-transform: translate(1,1) scale(1,1);
            -webkit-transform: translate(1,1) scale(1,1);
            transform: translate(1,1) scale(1,1);
        }
    }
    @keyframes first_object {
        0% {
            -ms-transform: translate(1,1) scale(1,1);
            -webkit-transform: translate(1,1) scale(1,1);
            transform: translate(1,1) scale(1,1);
        }
        50% {
            -ms-transform: translate(150%,150%) scale(2,2);
            -webkit-transform: translate(150%,150%) scale(2,2);
            transform: translate(150%,150%) scale(2,2);
        }

        100% {
            -ms-transform: translate(1,1) scale(1,1);
            -webkit-transform: translate(1,1) scale(1,1);
            transform: translate(1,1) scale(1,1);
        }
    }




    @-webkit-keyframes second_object {
        0% {
            -ms-transform: translate(1,1) scale(1,1);
            -webkit-transform: translate(1,1) scale(1,1);
            transform: translate(1,1) scale(1,1);
        }
        50% {
            -ms-transform: translate(-150%,150%) scale(2,2);
            -webkit-transform: translate(-150%,150%) scale(2,2);
            transform: translate(-150%,150%) scale(2,2);
        }
        100% {
            -ms-transform: translate(1,1) scale(1,1);
            -webkit-transform: translate(1,1) scale(1,1);
            transform: translate(1,1) scale(1,1);
        }
    }
    @keyframes second_object {
        0% {
            -ms-transform: translate(1,1) scale(1,1);
            -webkit-transform: translate(1,1) scale(1,1);
            transform: translate(1,1) scale(1,1);
        }
        50% {
            -ms-transform: translate(-150%,150%) scale(2,2);
            -webkit-transform: translate(-150%,150%) scale(2,2);
            transform: translate(-150%,150%) scale(2,2);
        }
        100% {
            -ms-transform: translate(1,1) scale(1,1);
            -webkit-transform: translate(1,1) scale(1,1);
            transform: translate(1,1) scale(1,1);
        }
    }




    @-webkit-keyframes third_object {
        0% {
            -ms-transform: translate(1,1) scale(1,1);
            -webkit-transform: translate(1,1) scale(1,1);
            transform: translate(1,1) scale(1,1);
        }
        50% {
            -ms-transform: translate(-150%,-150%) scale(2,2);
            -webkit-transform: translate(-150%,-150%) scale(2,2);
            transform: translate(-150%,-150%) scale(2,2);
        }
        100% {
            -ms-transform: translate(1,1) scale(1,1);
            -webkit-transform: translate(1,1) scale(1,1);
            transform: translate(1,1) scale(1,1);
        }
    }
    @keyframes third_object {
        0% {
            -ms-transform: translate(1,1) scale(1,1);
            -webkit-transform: translate(1,1) scale(1,1);
            transform: translate(1,1) scale(1,1);
        }
        50% {
            -ms-transform: translate(-150%,-150%) scale(2,2);
            -webkit-transform: translate(-150%,-150%) scale(2,2);
            transform: translate(-150%,-150%) scale(2,2);
        }
        100% {
            -ms-transform: translate(1,1) scale(1,1);
            -webkit-transform: translate(1,1) scale(1,1);
            transform: translate(1,1) scale(1,1);
        }
    }






    @-webkit-keyframes forth_object {
        0% {
            -ms-transform: translate(1,1) scale(1,1);
            -webkit-transform: translate(1,1) scale(1,1);
            transform: translate(1,1) scale(1,1);
        }
        50% {
            -ms-transform: translate(150%,-150%) scale(2,2);
            -webkit-transform: translate(150%,-150%) scale(2,2);
            transform: translate(150%,-150%) scale(2,2);
        }
        100% {
            -ms-transform: translate(1,1) scale(1,1);
            -webkit-transform: translate(1,1) scale(1,1);
            transform: translate(1,1) scale(1,1);
        }
    }
    @keyframes forth_object {
        0% {
            -ms-transform: translate(1,1) scale(1,1);
            -webkit-transform: translate(1,1) scale(1,1);
            transform: translate(1,1) scale(1,1);
        }
        50% {
            -ms-transform: translate(150%,-150%) scale(2,2);
            -webkit-transform: translate(150%,-150%) scale(2,2);
            transform: translate(150%,-150%) scale(2,2);
        }
        100% {
            -ms-transform: translate(1,1) scale(1,1);
            -webkit-transform: translate(1,1) scale(1,1);
            transform: translate(1,1) scale(1,1);
        }
    }






</style>
<style>
    #loading{
        display: none;
    }
    .waiting{
        text-align: center;
        position: absolute;
        top:30%;
        left: 0;
        right: 0;
        margin: auto;
        z-index: 9999;
        margin-top: 150px;
        display: none;
    }
</style>
<style>
    body{
        background: #fbfbfb;
    }
    .screenBox{
        position: relative;
        border: 1px solid #e5e5e5;
        margin: 0 auto;
        width: 300px;
        background: #fff;
        margin-top: 10%;
        margin-bottom: 20px;
        box-shadow: 0 0 10px #ccc;
        padding: 0 10px;
        box-sizing: border-box;
        padding-bottom: 100px;
    }
    .businessAbout{
        display: table-cell;
        height: 100px;
        vertical-align: middle;
        padding-left: 20px;
        border-top: 1px solid #ccc;
        width: 260px;
        position: relative;
        top: 60px;
    }
    .businessLogo{
        display: inline-block;
        vertical-align: middle;
        width: 55px;
    }
    .businessLogo img{
        width: 100%;
    }
    .businessTitle{
        display: inline-block;
        vertical-align: middle;
        width: 168px;
        font-size: 16px;
        margin-left: 12px;
    }
    .payPriceAdd_up{
        position: absolute;
        bottom: -10px;
        bottom: 0px;
        right: 24px;
        font-size: 14px;
        color: brown;
    }
</style>
<style>
    .logo_bg{
        position: absolute;
        top: 44px;
        width: 55px;
        left: 0;
        right: 0;
        margin: 0 auto;
        display: none;
    }
</style>
<style>
    .paySuccessfulIcon{
        /*margin-top: 130px;*/
        width: 100%;
        text-align: center;
        padding-top: 58px;
    }
    .paySuccessfulIcon img{

    }
    .paySuccessfulIcon .state{
        color: brown;
        margin: 0;
        margin-top: 20px;
        font-size: 18px;
        letter-spacing: 2px;
        text-indent: 2px;
    }
    .paySuccessfulIcon .reward{
        color: #8c8c8c;
        margin: 0;
        font-size: 18px;
        margin-top: 10px;
    }
</style>
<style>
    .userMsg{
        width: 300px;
        margin: 0 auto;
        font-size: 14px;
        text-align: center;
        padding: 0 10px;
        box-sizing: border-box;
        padding-bottom: 20px;
        /*display: none;*/
    }
    .userMsg .availablePrice{
        color: #666666;
    }
    .userMsg .availableHelp{
        color: #ccc;
    }
</style>