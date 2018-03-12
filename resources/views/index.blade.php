@extends('layouts.header')
@section('content')
    <div class="content">
        <div class="section-left">
            <div class="swiper-container">
                <div class="section swiper-wrapper">
@foreach($banners as $banner)
                    <div class="swiper-slide">
                        <div class="slide-img"><img src="{{env('APP_URL').$banner->image}}" alt=""></div>
                        <div class="slide-title">{{$banner->title}}</div>
                    </div>
@endforeach

                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

            <div class="section main-work">
                <div class="section-title">最新上线</div>
                <div class="section-content">

                    <div class="img-wrapper">
                        <div class="img">
                            <img src="./images/group.png" alt="">
                        </div>
                        <div class="img-title">
                            社会组织
                        </div>
                    </div>

                    <!-- 最后三个是跳转链接 -->
                    <div class="img-wrapper">
                        <div class="img img-link">
                            <img src="./images/magazine.png" alt="">
                        </div>
                    </div>
                    <div class="img-wrapper">
                        <div class="img img-link">
                            <img src="./images/hot_line.png" alt="">
                        </div>
                    </div>
                    <div class="img-wrapper">
                        <div class="img img-link">
                            <img src="./images/download_zone.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-right">
            <div class="section">
                <div class="section-title" style="font-weight:bold;">我们的产品</div>
                <div class="section-content list association">
                    <ul>
                        <li>中国</li>

                    </ul>
                </div>
            </div>
            <div class="section list">
                <div class="section-title">我们的服务</div>
                <div class="section-content list">
                    <ul>
                        <li>关于公示</li>
                    </ul>
                </div>
            </div>
            <div class="section list">
                <div class="section-title">我们的宗旨</div>
                <div class="section-content list">
                    <ul>
                        <li>关于公示中国 2017</li>

                    </ul>
                </div>
            </div>
            <div class="section list">
                <div class="section-title">我们的追求</div>
                <div class="section-content list">
                    <ul>
                        <li>关于公示中国</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection


