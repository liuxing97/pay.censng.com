@extends('base')
@section('myPage')
    {{--支付宣传背景--}}
    <div class="headerBg">
        <div class="headerBgBox">
            <img src="/img/1.png" />
            {{--加入我们--}}
            <div class="actBox">
                <a href="/apply">
                    <div class="joinUs">申请接入</div>
                </a>
            </div>
        </div>

    </div>
    <style>
        .siteMenu a:nth-child(1) .i-menu{
            border-bottom: 2px solid #db6161;
            color: #666;
        }
        .headerBg{
            text-align: center;
            background: #b91c23;
            padding-top: 100px;
        }
        .headerBgBox{
            width: 90%;
            margin: 0 auto;
            position: relative;
        }
        .headerBgBox img{
            width: 90%;
        }
        .headerBgBox .actBox{
            position: absolute;
            top: 38%;
            height: 20%;
            background: rgba(255,255,255,0.4);
            width: 20%;
            right: 11%;
        }
        .headerBgBox .actBox .joinUs{
            width: 66%;
            margin: 0 auto;
            background: #ff8700;
            margin-top: 15%;
            padding: 5%;
            color: #fff;
            border-radius: 2px;
        }
    </style>

    {{--集成支付宝，微信支付--}}
    <div class="stepOne">
        {{--装饰--}}
        <div class="integrateShow">
            <img src="/img/2.png" />
        </div>
        {{--文字描述--}}
        <div class="describe">
            {{--标题--}}
            <div class="d-title">集成微信、支付宝</div>
            {{--内容--}}
            <div class="d-content">
                <p>微信支付、支付宝支付，国内支付业务的两大巨头，集成两大支付系统，为用户提供更方便的扫码方式。</p>
                <p>专业的安全技术，确保支付过程中，数据上的对接安全。</p>
                <p>线下支付场景：快捷、安全、付款无忧</p>
            </div>
        </div>
    </div>
    <style>
        .stepOne{
            width: 90%;
            margin: 0 auto;
            padding: 66px 0;
            box-sizing: border-box;
        }
        .integrateShow{
            width: 18%;
            /*margin: 66px 0 112px 0px;*/
            display: inline-block;
            vertical-align: top;
        }
        .integrateShow img{
            width: 100%;
        }
        .describe{
            width: 74%;
            display: inline-block;
            vertical-align: top;
            margin-left: 7%;
            /*margin-top: 1%;*/
        }
        .describe .d-title{
            font-size: 18px;
        }
        .describe .d-content{

        }
        .describe .d-content p{
            margin-top: 26px;
            color: #666;
            line-height: 1.5em;
        }
    </style>
    {{--刺激消费，独特的活动模式--}}
    <div class="stepTwo">
        <div class="stepTwoMain">
            <div class="s-show">
                {{--<img src="/img/3.jpg" />--}}
                <img src="/img/197.png" />
            </div>
            {{--文字描述--}}
            <div class="describe">
                {{--标题--}}
                <div class="d-title">刺激消费,灵活的优惠模式</div>
                {{--内容--}}
                <div class="d-content">
                    <p>我们做了很多尝试，并且将继续尝试下去，掌握如何让线下店铺活动更加有效，又与互联网结合起来。</p>
                    <p>我们从餐饮的线下支付场景开始入手，提供多种消费活动的接入与消费分析，正在测试系统中。</p>
                    <p>如果您有兴趣，可以与我们联系，使，更好。</p>
                </div>
            </div>
        </div>
    </div>
    <style>
        .stepTwo{
            width: 100%;
            /*margin-bottom: 200px;*/
            padding: 100px 0;
            background: #fbfbfb;
        }
        .stepTwoMain{
            width: 90%;
            margin: 0 auto;
        }
        .stepTwoMain .s-show{
            width: 18%;
            display: inline-block;
        }
        .stepTwoMain .s-show img{
            width: 100%;
        }
    </style>
    {{--为店家提供微不足道的顾客黏性--}}
    <div class="stepThree">
        <div class="stepThreeMain">
            <div class="s-show">
                {{--<img src="/img/3.jpg" />--}}
                <img src="/img/shops.png" />
            </div>
            {{--文字描述--}}
            <div class="describe">
                {{--标题--}}
                <div class="d-title">为店家提供微不足道的顾客黏性</div>
                {{--内容--}}
                <div class="d-content">
                    <p>提高用户对于店铺的消费粘性，使我们所考虑的事情！</p>
                    <p>或许目前只是微不足道的，但我们正不断努力。</p>
                    <p>加入我们，帮您把生意做的更好！</p>
                </div>
            </div>
        </div>
    </div>
    <style>
        .stepThree{
            width: 100%;
            /*margin-bottom: 200px;*/
            padding: 100px 0;
            /*background: #fbfbfb;*/
        }
        .stepThreeMain{
            width: 90%;
            margin: 0 auto;
            position: relative;
        }
        .stepThreeMain .s-show img{
            width: 100%;
        }
        .stepThreeMain .s-show{
            width: 18%;
            padding: 2%;
            box-sizing: border-box;
            display: inline-block;
            position: relative;
            top:-30px;
        }
    </style>
@endsection