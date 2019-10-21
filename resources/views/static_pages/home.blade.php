@extends('layouts.default')
@section('content')
<div class="index-banner">
    <div class="container">
        <div class="banner-text">
            <div class="text-area">
                <h3>开启你的旅程</h3>
                <h3 class="marm50">Start your journey</h3>
                <p>提供海量优质特价机票，轻松找到你想要的低价</p>
                <p>提供一站式机票预订</p>
                <p>时刻陪你启动探索未知的世界 </p>
                <a href="">立即体验</a>
            </div>
        </div>
        <div class="banner-img">
            <img src="images/pool.png" alt="">
        </div>
    </div>
</div>
<div class="index-scenes">
    <div class="">
        <h3>多样的出行场景</h3>
        <h4 class="position-fix">满足企业员工因与因私不同的出行场景，并可根据需求个性化定制</h4>
        <div class="index-slide">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-box container">
                            <div class="img-show">
                                <img src="images/scene1.png" alt="">
                            </div>
                            <div class="detail-show">
                                <h4>商旅出行</h4>
                                <div class="detail-list">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-6">
                                            <div class="box-show clearfix">
                                                <div class="box-icon">
                                                    <img src="images/icon-1.png" alt="">
                                                </div>
                                                <div class="box-text">
                                                    <p>全球协议价机票</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-6">
                                            <div class="box-show clearfix">
                                                <div class="box-icon">
                                                    <img src="images/icon-2.png" alt="">
                                                </div>
                                                <div class="box-text">
                                                    <p>全球协议价酒店</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-6">
                                            <div class="box-show clearfix">
                                                <div class="box-icon">
                                                    <img src="images/icon-3.png" alt="">
                                                </div>
                                                <div class="box-text">
                                                    <p>国内火车票</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-6">
                                            <div class="box-show clearfix">
                                                <div class="box-icon">
                                                    <img src="images/icon-4.png" alt="">
                                                </div>
                                                <div class="box-text">
                                                    <p>会务会议/团建</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-6">
                                            <div class="box-show clearfix">
                                                <div class="box-icon">
                                                    <img src="images/icon-5.png" alt="">
                                                </div>
                                                <div class="box-text">
                                                    <p>市内用车/接送机</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-6">
                                            <div class="box-show clearfix">
                                                <div class="box-icon">
                                                    <img src="images/icon-6.png" alt="">
                                                </div>
                                                <div class="box-text">
                                                    <p>签证</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="more-detail">
                                        <a href="/out">了解详情</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-box container">
                            <div class="img-show">
                                <img src="images/scene2.png" alt="">
                            </div>
                            <div class="detail-show">
                                <h4 class="holiday">假期出行</h4>
                                <div class="detail-list">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-6">
                                            <div class="box-show clearfix">
                                                <div class="box-icon">
                                                    <img src="images/icon-1.png" alt="">
                                                </div>
                                                <div class="box-text">
                                                    <p>特价机票</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-6">
                                            <div class="box-show clearfix">
                                                <div class="box-icon">
                                                    <img src="images/icon-7.png" alt="">
                                                </div>
                                                <div class="box-text">
                                                    <p>特惠度假酒店</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-6">
                                            <div class="box-show clearfix">
                                                <div class="box-icon">
                                                    <img src="images/icon-3.png" alt="">
                                                </div>
                                                <div class="box-text">
                                                    <p>国内火车票</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-6">
                                            <div class="box-show clearfix">
                                                <div class="box-icon">
                                                    <img src="images/icon-8.png" alt="">
                                                </div>
                                                <div class="box-text">
                                                    <p>租车自驾</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-6">
                                            <div class="box-show clearfix">
                                                <div class="box-icon">
                                                    <img src="images/icon-6.png" alt="">
                                                </div>
                                                <div class="box-text">
                                                    <p>签证&保险</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="more-detail">
                                        <a href="/out">了解详情</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</div>
<div class="index-out">
    <div class="container">
        <div class="line-show"></div>
        <h3>专业的出行管理</h3>
        <h4>行程数据化，通过智能管控、统一发票，帮企节省成本，告别低效审批，帮员工告别报销，费用数据分析报告，助力出行管理决策</h4>
        <div class="out-show">
            <div class="row">
                <div class="col-md-4">
                    <div class="out-b-box">
                        <div class="out-box">
                            <div class="inner-box">
                                <div class="out-img">
                                    <img src="images/out-1.png" alt="">
                                </div>
                                <div class="out-text">
                                    <h4>只能费控，节省成本</h4>
                                    <p>满足企业事前预算、事中审批、时候分析的券流程管控需求</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="out-b-box">
                        <div class="out-box">
                            <div class="inner-box">
                                <div class="out-img">
                                    <img src="images/out-2.png" alt="">
                                </div>
                                <div class="out-text">
                                    <h4>场景齐全，灵活支付</h4>
                                    <p>覆盖差旅、用车、用餐补助、采购等企业95%以上的消费场景</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="out-b-box">
                        <div class="out-box">
                            <div class="inner-box">
                                <div class="out-img">
                                    <img src="images/out-3.png" alt="">
                                </div>
                                <div class="out-text">
                                    <h4>统一开票，告别报销</h4>
                                    <p>提供明细账单和统一发票，让员工彻底免贴票免报销</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="line-show"></div>
    </div>
</div>
<div class="to-top">
    <div class="container">
        <a href="#"><img src="images/to-top.png" alt=""></a>
    </div>
</div>
<div class="index-service">
    <div class="container">
        <h3>“客户经理 + 专属客服”双服务体系，保障服务质量</h3>
        <div class="service-link clearfix">
            <a href="" class="link-left">立即体验</a>
            <a href="" class="link-right">联系我们</a>
        </div>
        <div class="service-show">
            <div class="row">
                <div class="col-md-6">
                    <div class="service-box clearfix">
                        <div class="img-box">
                            <img src="images/service1.png" alt="">
                        </div>
                        <div class="text-show">
                            <h4>专属客户经理</h4>
                            <p>专业的技术、培训人员，确保产品顺利上线；</p>
                            <p>专属客户经理，提供专业的消费咨询服务</p>
                            <p>完善的客户体系，无缝衔接每一环节。</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-box clearfix">
                        <div class="img-box">
                            <img src="images/service2.png" alt="">
                        </div>
                        <div class="text-show">
                            <h4>客户团队7*24小时服务</h4>
                            <p>专业客服全天候为难你服务；</p>
                            <p>一对一专属客服经理，保障您的使用体验；</p>
                            <p>提供专人一对一账单、发票沟通服务。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="index-partner">
    <div class="container">
        <h3>生态合作伙伴</h3>
        <h4>（排名不分先后）</h4>
        <div class="partner-show">
            <div class="row">
                @foreach($partners as $partner)
                  <div class="col-md-2 col-xs-6">
                      <div class="img-box">
                          <img src="/storage/{{ $partner->image }}" alt="">
                      </div>
                  </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="index-client">
    <div class="container">
        <h3>我们的客户</h3>
        <div class="show-client">
            <div class="row">
              @foreach($guests as $guest)
                <div class="col-md-2 col-xs-6">
                  <div class="logo-box">
                      <img src="/storage/{{ $guest->image }}" alt="">
                  </div>
                </div>
              @endforeach
            </div>
        </div>
        <h4>他们正在使用商旅客，降低企业成本，提升员工效率</h4>
        <div class="client-slide">
            <div class="client-swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="client-slide-box">
                            <p>“有了商旅客，各地的销售同事都觉得方便很多，不用每次出差回来贴发票，等报销了。原来报销时，还跟财务部门扯皮，搞得大家都很不愉快，现在这些都通过商旅客避免了！”</p>
                            <h5>Viella Malkovich</h5>
                            <h6>Creative Director at Johnson</h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-slide-box">
                            <p>“有了商旅客，各地的销售同事都觉得方便很多，不用每次出差回来贴发票，等报销了。原来报销时，还跟财务部门扯皮，搞得大家都很不愉快，现在这些都通过商旅客避免了！”</p>
                            <h5>Viella Malkovich</h5>
                            <h6>Creative Director at Johnson</h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-slide-box">
                            <p>“有了商旅客，各地的销售同事都觉得方便很多，不用每次出差回来贴发票，等报销了。原来报销时，还跟财务部门扯皮，搞得大家都很不愉快，现在这些都通过商旅客避免了！”</p>
                            <h5>Viella Malkovich</h5>
                            <h6>Creative Director at Johnson</h6>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>
<div class="index-experience">
    <div class="container">
        <h3>立即体验</h3>
        <p>超过500家企业选择商旅客</p>
        <p>覆盖互联网、企业服务、教育、金融、餐饮、零售等领域</p>

        <form action="/test" method="post">
            <div class="infor">
                <input type="text" placeholder="姓名" class="form-control">
                <input type="text" placeholder="联系电话" class="form-control">
                <input type="text" placeholder="公司名称" class="form-control">
            </div>
            <div class="sub">
                <a href="">提交</a>
            </div>
        </form>
    </div>
</div>
@stop
