@extends('base')

@section('myPage')
    {{--核心功能--}}
    <div class="codeFunc funcList">
        {{--标题--}}
        <div class="f-title">核心功能</div>
        {{--项目--}}
        <div class="f-list">
            {{--集成支付宝、微信扫码支付--}}
            <div class="f-list-item">
                {{--标志--}}
                <div class="f-list-item-icon">
                    <img src="/img/32.jpg" />
                </div>
                {{--说明--}}
                <div class="f-list-item-msg">
                    <div class="msg-i-title">
                        扫码支付
                    </div>
                    <div class="msg-i-msg">
                        <p>系统在扫码支付的基础上，集成了微信支付与支付宝支付，一码通用。</p>
                        <p>如果您本身店铺开通了花呗支付，在系统中也得到了集成。</p></div>
                </div>
            </div>
            {{--店铺系统·以店铺为消费单位，对消费记录进行记录，可供多方查询及活动使用（暂时有自身考虑，注重用户隐私，完全封闭）--}}
            <div class="f-list-item">
                {{--标志--}}
                <div class="f-list-item-icon">
                    <img src="/img/35.jpg" />
                </div>
                {{--说明--}}
                <div class="f-list-item-msg">
                    <div class="msg-i-title">
                        店铺系统
                    </div>
                    <div class="msg-i-msg">
                        <p>用户消费的数据，以您的店铺为基础进行记录。</p>
                        <p>对您的店铺数据进行统计，您可以在后台查看每月用户的消费记录，为您的营业提供数据指导。</p>
                        <p>同时用户的消费数据，对我们的产品策划也提供了数据指导，从而我们将推出更有效的营销辅助功能。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{--灵活功能--}}
    <div class="flexibleFunc funcList">
        {{--标题--}}
        <div class="f-title">灵活配置</div>
        {{--项目--}}
        <div class="f-list">
            {{--顾客小程序消费记录--}}
            <div class="f-list-item">
                {{--标志--}}
                <div class="f-list-item-icon">
                    <img src="/img/312.png" />
                </div>
                {{--说明--}}
                <div class="f-list-item-msg">
                    <div class="msg-i-title">
                        店铺鼓励金（可选）
                    </div>
                    <div class="msg-i-msg">
                        <p>为您的客户设置每周鼓励金，每次支付时随机从设置的金额中抽取一部分为您的客户发放。这个优惠程度由您自己掌控，我们只会根据汇总的情况，来控制鼓励金分发的速度。</p>
                        <p>鼓励金发放出去后，并不会直接对您进行扣款处理，您也不用在平台中预存鼓励金。我们只会在客户使用了鼓励金的情况下，从您的下次收款中扣除。</p>
                        <p>PS:再次强调，使用后才会从您的收益中进行扣除，没有使用不会对您造成任何影响，同时鼓励金仅可在您的店铺中消费——鼓励在您的店铺中进行消费的机制。</p>
                    </div>
                </div>
            </div>
            {{--消费转优惠--}}
            <div class="f-list-item">
                {{--标志--}}
                <div class="f-list-item-icon">
                    <img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1524556180341&di=2cc39417cc88fc2bcf4eb4ec5aa0678d&imgtype=0&src=http%3A%2F%2Ffile16.zk71.com%2FFile%2FCorpEditInsertImages%2F2017%2F11%2F15%2Fmengmengdexin_20171115174859.gif" />
                </div>
                {{--说明--}}
                <div class="f-list-item-msg">
                    <div class="msg-i-title">
                        客户端·微信小程序（可选）
                    </div>
                    <div class="msg-i-msg">
                        <p>玩过微信的小程序“跳一跳”吗？我们同时为您的顾客设置了微信小程序。</p>
                        <p>顾客可以在小程序中看到其在您的店铺内，有多少鼓励金可用，以及简单的消费记录。</p>
                        <p>同时您也可以将您的店铺展现给您的顾客。</p>
                    </div>
                </div>
            </div>
            {{--闲时打折功能--}}
            <div class="f-list-item">
                {{--标志--}}
                <div class="f-list-item-icon">
                    <img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1525151560&di=6d3b7bcd3df1260adee54843aedf5965&imgtype=jpg&er=1&src=http%3A%2F%2Fimgsrc.baidu.com%2Fimgad%2Fpic%2Fitem%2F0e2442a7d933c895bcc3deb2db1373f0830200bd.jpg" />
                </div>
                {{--说明--}}
                <div class="f-list-item-msg">
                    <div class="msg-i-title">
                        营业闲时优惠方式（可选）
                    </div>
                    <div class="msg-i-msg">
                        <p>我们在调研的过程中，从餐饮界听到一句话：忙时生意多到愁，闲时生意没到愁，反正生意没生意，卖出一笔是一笔。</p>
                        <p>然后我们有了第二个特殊功能，对于分淡旺时间的商家们：</p>
                        <p>设置闲时采用另外优惠手段你，使忙时顾客可流向闲时，鼓励闲时消费，为忙时用户吞吐量提供更大空间。</p>
                    </div>
                </div>
            </div>
            {{--更多功能研发中--}}
            <div class="f-list-item">
                {{--标志--}}
                <div class="f-list-item-icon">
                    <img src="/img/44.jpg" />
                </div>
                {{--说明--}}
                <div class="f-list-item-msg">
                    <div class="msg-i-title">
                        更多功能研发中……
                    </div>
                    <div class="msg-i-msg">
                        <p>我们所考虑的，就是您所考虑的，您的生意更好，我们才会有生意可做！</p>
                        <p>如果您有想法或需要协助，请与我们联系。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .funcList{
            width: 90%;
            margin: 0 auto;
        }
        .funcList .f-title{
            font-size: 18px;
            background: #565656;
            margin-bottom: 5%;
            line-height: 50px;
            padding: 0 1%;
            color: #fff;
        }
        .funcList .f-list{

        }
        .funcList .f-list .f-list-item{
            margin-bottom: 4%;
        }
        .flexibleFunc{
            margin-top: 8%;
        }
        .funcList .f-list .f-list-item .f-list-item-icon{
            width: 15%;
            display: inline-block;
            vertical-align: top;
        }
        .funcList .f-list .f-list-item .f-list-item-icon img{
            width: 100%;
        }
        .funcList .f-list .f-list-item .f-list-item-msg{
            width: 82%;
            display: inline-block;
            padding-left: 2%;
            padding-top: 2%;
        }
        .msg-i-title{
            margin-bottom: 12px;
            font-size: 16px;
            font-weight: bold;
        }
        .msg-i-msg{
            display: inline-block;
            line-height: 2.5em;
        }
    </style>
<style>
    body{
        padding-top: 200px;
    }
    .siteMenu a:nth-child(2) .i-menu{
        border-bottom: 2px solid #db6161;
        color: #666;
    }
    .footer{
        margin-top: 10%;
    }
</style>
@endsection