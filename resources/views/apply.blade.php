@extends('base')

@section('myPage')
    {{--邀请--}}
    <div class="invitation">
        {{--主体--}}
        <div class="invitationMain">
            {{--邀请图--}}
            <div class="i-pic">
                <img src="/img/yaoqing.png" />
            </div>
            {{--内容区--}}
            <div class="contentBox">
                {{--如果你是线下小额支付的参与者--}}
                <div class="type">
                    <div class="t-title">如果您是线下小额支付的参与者</div>
                    <div class="t-content">
                        <p>加入我们吧！为我们提供宝贵的数据，我们也将竭力为您服务，为您提供或许有效的新型营销方案。</p>
                        <p>餐饮类、零售类、商店类客户，或许还有更多的可能，能去尝试，你主动，我们就有故事……</p>
                    </div>
                </div>
                <div class="type">
                    <div class="t-title">介绍了这么多，还不清楚我们在做什么？</div>
                    <div class="t-content">
                        <p>我们联合各商家，调查研究，研究如何从支付手段上为商家获取更多的用户的办法。</p>
                    </div>
                </div>
                <div class="type">
                    <div class="t-title">我们提供以下几种合作联系方式</div>
                    <div class="t-content">
                        <p>公司全称：西安辰象的象网络科技有限公司</p>
                        <p>QQ联系：2397514801</p>
                        <p>Email方式：&nbsp;&nbsp;&nbsp;contact@censng.com</p>
                        <p>电话方式：&nbsp;&nbsp;&nbsp;029-87976807（工作日，早9:00-18:00）</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .siteMenu a:nth-child(4) .i-menu{
            border-bottom: 2px solid #db6161;
            color: #666;
        }
        body{
            padding-top: 88px;
        }
        .invitation{
            width: 100%;
        }
        .invitationMain{
            width: 90%;
        }
        .i-pic{
            display: inline-block;
            width: 30%;
        }
        .i-pic img{
            width: 100%;
        }
    </style>
    <style>
        .contentBox{
            display: inline-block;
            vertical-align: top;
            padding-top: 88px;
            width: 69%;
            margin-bottom: 5%;
        }
        .contentBox .type{
            line-height: 2em;
            margin-bottom: 5%;
        }
        .contentBox .type .t-title{
            font-size: 18px;
            margin-bottom: 16px;
            line-height: 2em;
            /*border-left: 2px solid #e5e5e5;*/
            border-left: 2px solid #f00;
            padding-left: 5%;
            font-weight: bold;
        }
        .contentBox .type .t-content{
            padding-left: 5%;
            margin-left: 2px;
        }
        .contentBox .type .t-content p{
            /*margin-bottom: 5%;*/
        }
    </style>
@endsection