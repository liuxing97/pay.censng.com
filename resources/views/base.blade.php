<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
				@php
			    function is_mobile()  
					{  
						$agent = strtolower($_SERVER['HTTP_USER_AGENT']);  
						$is_pc = (strpos($agent, 'windows nt')) ? true : false;  
						$is_mac = (strpos($agent, 'mac os')) ? true : false;  
						$is_iphone = (strpos($agent, 'iphone')) ? true : false;  
						$is_android = (strpos($agent, 'android')) ? true : false;  
						$is_ipad = (strpos($agent, 'ipad')) ? true : false;  
						  
						if($is_iphone){  
							  return  true;  
						}  
						if($is_android){  
							  return  true;  
						}  
						if($is_ipad){  
							  return  false;  
						}  
						if($is_pc){  
							  return  false;  
						}   
						if($is_mac){  
							  return  false;  
						}  
					}
				if(!is_mobile()){
					echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";
				}
			@endphp
    @section('myJs')
    @show
    <link href="/css/default.css" type="text/css" rel="stylesheet" />
    <link href="/css/base.css" type="text/css" rel="stylesheet" />
    @section('myCss')
    @show
    <title>辰象支付</title>
</head>
<body>
{{--头部--}}
<div class="header">
    <div class="headerBox">
        {{--Logo--}}
		<a href="/homepage">
		    <div class="siteLogo">
				<img src="/img/paying/censng_pay_logo.png" />
			</div>
		</a>
        {{--目录--}}
        <div class="siteMenu">
            {{--辰象支付--}}
            <a href="/homepage"><div class="i-menu">辰象支付</div></a>
            {{--已开通功能--}}
            <a href="/functions"><div class="i-menu">已开通功能</div></a>
            {{--相关费率--}}
            <a href="/rate"><div class="i-menu">相关费率</div></a>
            {{--加入我们--}}
            <a href="/apply"><div class="i-menu">申请开通</div></a>
            {{--关于我们--}}
            <a href="/about/us"><div class="i-menu">关于我们</div></a>
        </div>
    </div>
</div>
@section('myPage')
@show
{{--页脚--}}
<div class="footer">
    <p>Copyright © 2009-2018 CENSNG 西安辰象的象网络技术有限公司</p>
    <p>简称【辰象科技】 备案号：陕ICP备18006045号-1</p>
</div>
</body>
</html>