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
</body>
</html>
<style>
    #loading{
        background-color: rgba(255,255,255,1);
        height: 100%;
        width: 100%;
        position: absolute;
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
    .waiting{
        text-align: center;
        position: absolute;
        top:30%;
        left: 0;
        right: 0;
        margin: auto;
        z-index: 9999;
        margin-top: 150px;
        /*display: none;*/
        color: #666;
    }
</style>