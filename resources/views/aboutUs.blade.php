@extends('base')

@section('myPage')
    {{--辰象科技--}}
    <div class="showItem">
        {{--名称--}}
        <div class="showItemClass">辰象科技</div>
        {{--介绍--}}
        <div class="showMsg">
            <p>辰象科技，创业公司，一个新公司（西安辰象的象网络科技有限公司）。</p>
            <p>从事于互联网技术开发领域、互联网营销服务这两个领域。在懂技术的基础上，为中小企业提供技术及理念上的服务。</p>
            <p>因为懂技术，所以才能将互联网与实际业务结合起来，助力中小企业发展更好！</p>
        </div>
    </div>
    {{--辰象支付--}}
    <div class="showItem">
        {{--名称--}}
        <div class="showItemClass secTitle">辰象支付</div>
        {{--介绍--}}
        <div class="showMsg">
            <p>辰象支付，我们对于互联网与零售业场景结合的一种尝试。</p>
            <p>尝试将“互联网加”概念融入到各行各业中，而这只是一个开始！</p>
            <p>支付，我们的主要研究方向之一！</p>
        </div>
    </div>
    {{--辰象支付--}}
    <div class="showItem">
        {{--名称--}}
        <div class="showItemClass secTitle">联系方式</div>
        {{--介绍--}}
        <div class="showMsg">
            <p>联系方式：029-87976807</p>
            <p>电子邮箱：contact@censng.com</p>
            <p>企业官网：http://www.censng.com</p>
        </div>
    </div>
    <style>
        .showItem{
            margin: 0 auto;
            width: 90%;
            margin-top: 20px;
            line-height: 1.5em;
            box-sizing: border-box;
        }
        .showItemClass{
            font-size: 18px;
            font-weight: bold;
        }
        .showMsg{
            margin-top: 20px;
            padding-left: 28px;
            line-height: 2.5em;
            color: #888;
        }
        .secTitle{
            font-size: 16px;
        }
    </style>
    <style>
        .siteMenu a:nth-child(5) .i-menu{
            border-bottom: 2px solid #db6161;
            color: #666;
        }
        body{
            padding-top: 128px;
        }
        .footer{
            margin-top: 88px;
        }
    </style>
@endsection