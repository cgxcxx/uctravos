<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{mix('css/app.css')}}">
  <title>商旅客</title>
</head>
  <body>
    <div id="app">
        @include('layouts._header')
        @yield('content')
        @include('layouts._download')
        @include('layouts._footer')

    </div>
    <script src="js/app.js"></script>
    <script src="js/swiper.min.js"></script>
    <script>
        //swiper
        var mySwiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: 6000,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination : '.swiper-pagination',
            paginationClickable :true
        })
    </script>
    <script>
        //client-swiper
        var clientSwiper = new Swiper('.client-swiper-container', {
            loop: true,
            autoplay: 6000,
            pagination: {
                el: '.swiper-pagination',
                clickable :true,
            }
        })
    </script>
    <script>

        $(document).ready(function(){
            //检测卷去高度，切换菜单背景
            scrollTop = $(document).scrollTop();
            if(scrollTop > 0){
                $(".all-header").removeClass("header-index");
            }else{
                $(".all-header").addClass("header-index");
            }
            $(document).scroll(function() {
                scrollTop = $(document).scrollTop();
                if(scrollTop > 0){
                    $(".all-header").removeClass("header-index");
                }else{
                    $(".all-header").addClass("header-index");
                }
            });

        });
    </script>
    <script>
        $('.to-top').click(function(){$('html,body').animate({scrollTop: '0px'}, 800);});
    </script>
    <script>
          $(document).ready(function() {
            $(".nav-mobile").click(function() {
              menu_height = $(window).height();
              if ($(this).hasClass("open")) {
                $(".header-nav").removeClass("open");
                $(this).removeClass("open");
                $(".header-nav").height(0);
              } else {
                $(".header-nav").addClass("open");
                $(this).addClass("open");
                $(".header-nav").height(menu_height);
              }
            });

            //页面加载时tab菜单归位
            $(".page-tab-nav").each(function() {
              page_tab_nav_left =
                $(this)
                  .find("li.active")
                  .offset().left - $(this).offset().left;
              page_tab_nav_width = $(this)
                .find("li.active")
                .width();
              $(this)
                .find(".page-tab-nav-hover")
                .css("left", page_tab_nav_left);
              $(this)
                .find(".page-tab-nav-hover")
                .css("width", page_tab_nav_width);
            });

            //鼠标移动时tab菜单滑动
            $(".page-tab-nav li").hover(
              function() {
                left = $(this).offset().left - $(".page-tab-nav").offset().left;
                width = $(this).width();
                $(".page-tab-nav-hover").css("left", left);
                $(".page-tab-nav-hover").css("width", width);
              },
              function() {
                $(".page-tab-nav").each(function() {
                  left =
                    $(this)
                      .find("li.active")
                      .offset().left - $(this).offset().left;
                  width = $(this)
                    .find("li.active")
                    .width();
                  $(this)
                    .find(".page-tab-nav-hover")
                    .css("left", left);
                  $(this)
                    .find(".page-tab-nav-hover")
                    .css("width", width);
                });
              }
            );

            //回到顶部
            $(".footer-top").on("click", function() {
              $("html,body").animate({ scrollTop: 0 }, 500);
            });
          });
        </script>
  </body>
</html>
