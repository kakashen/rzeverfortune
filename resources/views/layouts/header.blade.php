<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>日照莱珐贸易有限公司</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/swiper-3.4.2.min.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/aids.css">
    <link rel="stylesheet" href="./css/aids_resize.css">
</head>
<body>
<div id="header" class="header">
    <div class="title"></div>
</div>
<div id="main" class="main">

    <div class="tab-container aids">
        <ul>
            <li class="tab-item">首页</li>
            <li class="tab-item">
                关于
                <div class="hover-wrapper" style="">
                    <div class="img-gap"><img src="./images/up_triangle.png" alt=""></div>
                    <div>
                        <ul>
                            <li class="sub-item"><a href="javascript:void(0)">最新进展</a></li>

                        </ul>
                    </div>
                </div>
            </li>
            <li class="tab-item">
                产品介绍
                <div class="hover-wrapper" style="">
                    <div class="img-gap"><img src="./images/up_triangle.png" alt=""></div>
                    <div>
                        <ul>
                            <li class="sub-item"><a href="javascript:void(0)">最新进展</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="tab-item">
                我的服务
                <div class="hover-wrapper" style="">
                    <div class="img-gap"><img src="./images/up_triangle.png" alt=""></div>
                    <div>
                        <ul>
                            <li class="sub-item"><a href="javascript:void(0)">最新进展</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="tab-item">
                图片展示
                <div class="hover-wrapper" style="">
                    <div class="img-gap"><img src="./images/up_triangle.png" alt=""></div>
                    <div>
                        <ul>
                            <li class="sub-item"><a href="javascript:void(0)">最新进展</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="tab-item">
                联系我们
                <div class="hover-wrapper" style="">
                    <div class="img-gap"><img src="./images/up_triangle.png" alt=""></div>
                    <div>
                        <ul>
                            <li class="sub-item"><a href="javascript:void(0)">最新进展</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="search-container">
        <div class="links">
            <a href="javascript:void(0)">回到主页</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="images/icon/phone_icon.png" alt="">
            &nbsp;
            <span class="phone" style="text-decoration : underline;">电话：</span><span>186 6338 0600</span>
        </div>
        <div class="search">
            <form id="search_form" action="/search" method="get">
                <input type="text" name="keyword" id="keyword" placeholder="请输入关键字">
                <input id="btn_search" type="button" value="">
            </form>
        </div>
    </div>

@yield('content')

@include('layouts.footer')