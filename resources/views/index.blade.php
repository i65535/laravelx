@extends('common_layout')

@section('content')

        <section id="slider" class="slider-parallax swiper_wrapper clearfix">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
<!--                    
                    <div  class="swiper-slide dark" style="background-image: url('images/slider/banner/b1.jpg');">
             <a href="activity/">
            <div class="container clearfix"></div>
             </a>
                    </div>
-->                    
                    <div class="swiper-slide dark" style="background-image: url('images/slider/banner/b2.jpg');">
                    </div>

                    <div class="swiper-slide dark" style="background-image: url('images/slider/banner/b3.jpg');">
                     <a href="products/cloudserver.html">
                        <div class="container clearfix"></div>
                     </a>
                    </div>
                    
                    <div class="swiper-slide dark" style="background-image: url('images/slider/banner/b4.jpg');">
                     <a href="products/lb.html">
                        <div class="container clearfix"></div>
                     </a>
                    </div>
                    
                </div>
                <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
                <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
                <div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>
            </div>

            <script>

                jQuery(document).ready(function($){
                    var swiperSlider = new Swiper('.swiper-parent',{
                        paginationClickable: false,
                        slidesPerView: 1,
                        grabCursor: false,
                        autoplay: 7000,
                        speed: 650,
                        loop: true,
                        onSwiperCreated: function(swiper){
                            $('[data-caption-animate]').each(function(){
                                var $toAnimateElement = $(this);
                                var toAnimateDelay = $(this).attr('data-caption-delay');
                                var toAnimateDelayTime = 0;
                                if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
                                if( !$toAnimateElement.hasClass('animated') ) {
                                    $toAnimateElement.addClass('not-animated');
                                    var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                    setTimeout(function() {
                                        $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                                    }, toAnimateDelayTime);
                                }
                            });
                            SEMICOLON.slider.swiperSliderMenu();
                        },
                        onSlideChangeStart: function(swiper){
                            $('#slide-number-current').html(swiper.activeLoopIndex + 1);
                            $('[data-caption-animate]').each(function(){
                                var $toAnimateElement = $(this);
                                var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                $toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
                            });
                            SEMICOLON.slider.swiperSliderMenu();
                        },
                        onSlideChangeEnd: function(swiper){
                            $('#slider').find('.swiper-slide').each(function(){
                                if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
                                if($(this).find('.yt-bg-player').length > 0) { $(this).find('.yt-bg-player').pauseYTP(); }
                            });
                            $('#slider').find('.swiper-slide:not(".swiper-slide-active")').each(function(){
                                if($(this).find('video').length > 0) {
                                    if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
                                }
                                if($(this).find('.yt-bg-player').length > 0) {
                                    $(this).find('.yt-bg-player').getPlayer().seekTo( $(this).find('.yt-bg-player').attr('data-start') );
                                }
                            });
                            if( $('#slider').find('.swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('video').get(0).play(); }
                            if( $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').playYTP(); }

                            $('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
                                var $toAnimateElement = $(this);
                                var toAnimateDelay = $(this).attr('data-caption-delay');
                                var toAnimateDelayTime = 0;
                                if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
                                if( !$toAnimateElement.hasClass('animated') ) {
                                    $toAnimateElement.addClass('not-animated');
                                    var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                    setTimeout(function() {
                                        $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                                    }, toAnimateDelayTime);
                                }
                            });
                        }
                    });

                    $('#slider-arrow-left').on('click', function(e){
                        e.preventDefault();
                        swiperSlider.swipePrev();
                    });

                    $('#slider-arrow-right').on('click', function(e){
                        e.preventDefault();
                        swiperSlider.swipeNext();
                    });

                    $('#slide-number-current').html(swiperSlider.activeLoopIndex + 1);
                    $('#slide-number-total').html($('#slider').find('.swiper-slide:not(.swiper-slide-duplicate)').length);
                });
            
            </script>

        </section>

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

               

  <div class="container clearfix">

                    <div class="col_one_fourth nobottommargin">
                        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                            <div class="fbox-icon">
                                <a href="products/cloudserver.html"><i class="i-alt noborder icon-cloud"></i></a>
                            </div>
                    <h3>云服务器<span class="subtitle">15个云节点覆盖全球10个国家</span>
                                <span class="subtitle">高端配置，安全稳定，简单易用的弹性云计算服务</span></h3>                            
                        </div>
                    </div>

                    <div class="col_one_fourth nobottommargin">
                        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                            <div class="fbox-icon">
                                <a href="products/dedicatedserver.html"><i class="i-alt noborder icon-tasks"></i></a>
                            </div>
                <h3>独立服务器<span class="subtitle">戴尔、超微高中低档服务器租用</span>
                            <span class="subtitle">优选全球顶尖机房网络带宽，完善的海外供应体系</span></h3>
                        </div>
                    </div>

                    <div class="col_one_fourth nobottommargin">
                        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                            <div class="fbox-icon">
                                <a href="products/lb.html"><i class="i-alt noborder icon-line2-layers"></i></a>
                            </div>
                <h3>云负载均衡
                <span class="subtitle">多台VM间程序流量自动分配</span>
                <span class="subtitle">实现故障自动切换，提高业务可用性并提高利用率</span></h3>
                        </div>
                    </div>

                    <div class="col_one_fourth nobottommargin col_last">
                        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                            <div class="fbox-icon">
                                <a href="products/ops.html"><i class="i-alt noborder icon-cogs"></i></a>
                            </div>
                            <h3>云代维<span class="subtitle">全面贴心的VM代维管家服务</span>
                            <span class="subtitle">基础服务升级，应用环境架设，网站迁移，数据备份</span></h3>
                        </div>
                    </div>

                    <div class="clear"></div><div class="line bottommargin-lg"></div>




<div class="tabs side-tabs clearfix" id="tab-4">

                            <div id="section-couple" class="heading-block title-center page-section">
                        <h3>YINGSOO 解决方案</h3>
                        
                    </div>
                            
                            <ul class="tab-nav clearfix">
                                <li><a href="#tabs-13"><i class="icon-magic"></i>电子商务</a></li>
                                <li><a href="#tabs-14"><i class="icon-map-marker2"></i>游戏</a></li>
                                <li><a href="#tabs-15"><i class="icon-lightbulb"></i>移动应用</a></li>
                                <li><a href="#tabs-16"><i class="icon-dollar"></i>跨境金融</a></li>
                                <li><a href="#tabs-17"><i class="icon-bar-chart"></i>数字营销</a></li>
                                
                            </ul>

                            <div class="tab-container">

                                <div class="tab-content clearfix" id="tabs-13">
                                <div class="col_two_fifth nobottommargin">
                        <a data-lightbox="iframe">
                            <img src="images/products/dian2.jpg" alt="Image">
                           
                        </a>
                    </div>

                    <div class="col_three_fifth nobottommargin col_last">

                        
                            <h3>电子商务 E-commerce</h3>
                        

                        <p class="nobottommargin">影速Yingsoo拥有优质的海外计算和网络资源，为企业网站，电子商城在各个发展阶段提供专业的系统架构方案。利用云技术的快速部署，弹性伸缩等优势，在帮助企业电商业务布局全球的同时也一并极大的降低了运维IT成本。 </p>
            <div class="col_full nobottommargin" style="text-align:right;">
              <a href="solutions/web.html" class="button button-small button-border button-rounded">查看详情</a>
                        </div>
            <div class="col_full nobottommargin">
            <h4 class="nobottommargin">客户案例</h4>
            </div>
                        <div class="col_one_third nobottommargin">
                            <ul class="iconlist iconlist-color nobottommargin">
                                <li><a href="about/customers.html"><i class="icon-caret-right"></i> 踏浪者国际</a></li>
                                <li><a href="about/customers.html"><i class="icon-caret-right"></i> 500万彩票网</a></li>  
                            </ul>
                        </div>
                        <div class="col_one_third nobottommargin">
                            <ul class="iconlist iconlist-color nobottommargin">
                                <li><a href="about/customers.html"><i class="icon-caret-right"></i> 飞亚达</a></li>
                                <li><a href="about/customers.html"><i class="icon-caret-right"></i> 海尔信息（国际）</a></li>
                            </ul>
                        </div>

                        <div class="col_one_third nobottommargin col_last">
                            <ul class="iconlist iconlist-color nobottommargin">
                                <li><a href="about/customers.html"><i class="icon-caret-right"></i> 翰沃德</a></li>
                                <li><a href="about/customers.html"><i class="icon-caret-right"></i> TradeEasy</a></li>
                            </ul>
                        </div>

                    </div>
                    
                          </div>
                         
                                <div class="tab-content clearfix" id="tabs-14">
                                <div class="col_two_fifth nobottommargin">
                        <a data-lightbox="iframe">
                            <img src="images/products/you.jpg" alt="Image">
                           
                        </a>
                    </div>

                    <div class="col_three_fifth nobottommargin col_last">

                        
                            <h3>游戏  Game</h3>
                        
                        <p class="nobottommargin">影速Yingsoo是以服务游戏客户为根基发展起来，到目前为止，已成功为海内外众多大型端游，页游，手游项目部署云架构服务。高性能配置，高速IO数据读写能力，保障游戏流畅运行，灵活的资源调配模式，应对在线人数激增状况，每一个项需求均有定制化的游戏服务器集群方案。 </p>
                        <div class="col_full nobottommargin" style="text-align:right;">
                          <a href="solutions/game.html" class="button button-small button-border button-rounded">查看详情</a>
                        </div>
                        <div class="col_full nobottommargin">
                        <h4 class="nobottommargin">客户案例</h4>
                        </div>
                        <div class="col_one_third nobottommargin">
                            <ul class="iconlist iconlist-color nobottommargin">
                                <li><a href="about/customers.html"><i class="icon-caret-right"></i> 完美世界</a></li>
                                <li><a href="about/customers.html"><i class="icon-caret-right"></i> 迅雷游戏</a></li>
                            </ul>
                        </div>
                        <div class="col_one_third nobottommargin">
                            <ul class="iconlist iconlist-color nobottommargin">
                                <li><a href="about/customers.html"><i class="icon-caret-right"></i> 大乐网络</a></li>
                            </ul>
                        </div>

                        <div class="col_one_third nobottommargin col_last">
                            <ul class="iconlist iconlist-color nobottommargin">
                                <li><a href="about/customers.html"><i class="icon-caret-right"></i> 名游网络</a></li>
                            </ul>
                            
                        </div>

                    </div>
                                </div>
                                <div class="tab-content clearfix" id="tabs-15">
                                <div class="col_two_fifth nobottommargin">
                        <a data-lightbox="iframe">
                            <img src="images/products/yi.jpg" alt="Image">
                           
                        </a>
                    </div>

                    <div class="col_three_fifth nobottommargin col_last">

                        
                            <h3>移动应用 Mobile Applications</h3>
                        
                        <p class="nobottommargin">移动互联网时代，将是全球多元文化加速融合的时代，APP全球化将成为这个时代的重要特征。影速Yingsoo海外云计算平台支持国外内在旅游，办公，汽车，游戏，电子商务等领域极具创新的移动行业应用一起走出国门，布局海外。 </p>
                        <div class="col_full nobottommargin" style="text-align:right;">
                          <a href="solutions/app.html" class="button button-small button-border button-rounded">查看详情</a>
                        </div>
                        <div class="col_full nobottommargin">
                        <h4 class="nobottommargin">客户案例</h4>
                        </div>
                        <div class="col_one_third nobottommargin">
                            <ul class="iconlist iconlist-color nobottommargin">
                                <li><a href="about/customers.html"><i class="icon-caret-right"></i> GirnarSOFT</a></li>
                                <li><a href="about/customers.html"><i class="icon-caret-right"></i> VNO</a></li>
                            </ul>
                        </div>
                        <div class="col_one_third nobottommargin">
                            <ul class="iconlist iconlist-color nobottommargin">
                                <li><a href="about/customers.html"><i class="icon-caret-right"></i> appStar</a></li>
                                <li><a href="about/customers.html"><i class="icon-caret-right"></i> 无碍互动</a></li>
                            </ul>
                        </div>

                        <div class="col_one_third nobottommargin col_last">
                            <ul class="iconlist iconlist-color nobottommargin">
                                <li><a href="about/customers.html"><i class="icon-caret-right"></i> Mobvista</a></li>
                            </ul>
                        </div>
                            

                    </div>
                                </div>
                                <div class="tab-content clearfix" id="tabs-16">
                                 <div class="col_two_fifth nobottommargin">
                        <a data-lightbox="iframe">
                            <img src="images/products/jin3.jpg" alt="Image">
                           
                        </a>
                    </div>

                    <div class="col_three_fifth nobottommargin col_last">

                        
                            <h3>跨境金融 Internation Financial</h3>
                        
                        <p class="nobottommargin">影速Yingsoo在金融贸易，跨境支付交易等互联网新兴金融行业，提供一对一的一站式混合云解决方案，完全独立的IDC数据中心对金融云进行隔离。安全方案涉及银行，保险，基金，互联网金融等多种类金融企业，确保跨境金融服务安全无忧。 </p>
                        <div class="col_full nobottommargin" style="text-align:right;">
                          <a href="solutions/finance.html" class="button button-small button-border button-rounded">查看详情</a>
                        </div>
                        <div class="col_full nobottommargin">
                        <h4 class="nobottommargin">客户案例</h4>
                        </div>
                        <div class="col_one_third nobottommargin">
                            <ul class="iconlist iconlist-color nobottommargin">
                                <li><a href="about/customers.html"><i class="icon-caret-right"></i> Globebill</a></li>
                                <li><a href="about/customers.html"><i class="icon-caret-right"></i> 订单保</a></li>
                            </ul>
                        </div>
                        <div class="col_one_third nobottommargin">
                            <ul class="iconlist iconlist-color nobottommargin">
                                <li><a href="about/customers.html"><i class="icon-caret-right"></i> MasaPay</a></li>
                                <li><a href="about/customers.html"><i class="icon-caret-right"></i> Marketocracy</a></li>
                            </ul>
                        </div>

                        <div class="col_one_third nobottommargin col_last">
                            <ul class="iconlist iconlist-color nobottommargin">
                                <li><a href="about/customers.html"><i class="icon-caret-right"></i> OnDeck</a></li>
                            </ul>
                        </div>

                    </div>
                                </div>
                                 <div class="tab-content clearfix" id="tabs-17">
                                 <div class="col_two_fifth nobottommargin">
                        <a data-lightbox="iframe">
                            <img src="images/products/shu2.jpg" alt="Image">
                           
                        </a>
                    </div>

                    <div class="col_three_fifth nobottommargin col_last">

                        
                            <h3>数字营销 Digital Marketing</h3>
                        <p class="nobottommargin">影速Yingsoo依托在全球部署的15个云服务节点，融合云计算快速响应，弹性扩容的优势，为高中端企业客户提供专业的海外数据采集，大数据营销云服务加速解决方案，通过这些具体化的数据更好的了解海外市场现状，以做出更好的战略决策。 </p>
                        <div class="col_full nobottommargin" style="text-align:right;">
                          <a href="solutions/data.html" class="button button-small button-border button-rounded">查看详情</a>
                        </div>
                        <div class="col_full nobottommargin">
                        <h4 class="nobottommargin">客户案例</h4>
                        </div>
                        <div class="col_one_third nobottommargin">
                            <ul class="iconlist iconlist-color nobottommargin">
                                <li><a href="about/customers.html"><i class="icon-caret-right"></i> 迈科龙</a></li>
                                <li><a href="about/customers.html"><i class="icon-caret-right"></i> 点通数据</a></li>
                            </ul>
                        </div>
                        <div class="col_one_third nobottommargin">
                            <ul class="iconlist iconlist-color nobottommargin">
                                <li><a href="about/customers.html"><i class="icon-caret-right"></i> Open Groupe</a></li>
                                <li><a href="about/customers.html"><i class="icon-caret-right"></i> 阜博通</a></li>
                            </ul>
                        </div>

                        <div class="col_one_third nobottommargin col_last">
                            <ul class="iconlist iconlist-color nobottommargin">
                                <li><a href="about/customers.html"><i class="icon-caret-right"></i> 芝诺数据</a></li>
                            </ul>
                        </div>
                        

                    </div>
                                </div>
                                 <div class="tab-content clearfix" id="tabs-18">
                                 <div class="col_two_fifth nobottommargin">
                     
                    </div>

                    
                                </div>

                            </div>

      </div>


                    <div class="clear"></div>

              </div>

                <div class="section parallax nomargin notopborder" style="background: url('images/slider/banner/7.jpg') center center; padding: 100px 0px 180px;" data-stellar-background-ratio="0.3">
                    <div class="container-fluid center clearfix">

                        <div class="heading-block">
                            <h2>影速全球云节点分布图</h2>
                            <span>全球15个节点，业务覆盖香港，台湾，东南亚，欧洲，北美主流市场<br>全优化中国大陆方向网络带宽,香港延迟最低至9ms，新加坡低至40ms</span>
                            <div class="clear"></div>
                        </div>

                        <div class="col_one_fifth nobottommargin" data-animate="bounceIn">
                            <div class="counter counter-large counter-lined"><span data-from="1" data-to="15" data-refresh-interval="20" data-speed="2000"></span></div>
                            <h5>全球节点</h5>
                        </div>

                        <div class="col_one_fifth nobottommargin" data-animate="bounceIn" data-delay="200">
                            <div class="counter counter-large counter-lined"><span data-from="1000" data-to="1286" data-refresh-interval="10" data-speed="2000"></span></div>
                            <h5>平台客户</h5>
                        </div>

                        <div class="col_one_fifth nobottommargin" data-animate="bounceIn" data-delay="400">
                            <div class="counter counter-large counter-lined"><span data-from="1600" data-to="2178" data-refresh-interval="13" data-speed="3000"></span></div>
                            <h5>运行主机</h5>
                        </div>

                        <div class="col_one_fifth nobottommargin" data-animate="bounceIn" data-delay="600">
                            <div class="counter counter-large counter-lined"><span data-from="5" data-to="20" data-refresh-interval="25" data-speed="2500"></span>G</div>
                            <h5>网络带宽</h5>
                        </div>

                        <div class="col_one_fifth nobottommargin col_last" data-animate="bounceIn" data-delay="800">
                            <div class="counter counter-large counter-lined"><span data-from="100" data-to="365" data-refresh-interval="30" data-speed="2700"></span></div>
                            <h5>售后服务</h5>
                        </div>

                    </div>
                </div>

                <div class="container clearfix">

                    

               <div class="container clearfix">
 
 <div id="section-couple" class="heading-block title-center page-section">
                        <h3>最新动态</h3>
                        
                    </div>
 
                    <div class="col_one_third nobottommargin">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img src="images/news/news_home1.jpg" alt="Why choose Us?">
                            </div>
                        
                        
                          <div class="fbox-desc">
                                <h3 style="margin-bottom:12px;">公司动态</h3>
                                
                            </div>
                        
                            <div class="widget widget_links clearfix">
                            
                                <ul>
                                    <li><a href="news/company/182.html"><div>[08-05]租用托管香港服务器之外的第三种选择</div></a></li>
                                    <li><a href="news/company/180.html"><div>[08-04]香港云服务器到底能有多便宜</div></a></li>
                                    <li><a href="news/company/178.html"><div>[08-03]租用香港服务器PK托管香港服务器</div></a></li>
                                    
                                </ul>

                            </div>
                            
                            
                        </div>
                    </div>

                    <div class="col_one_third nobottommargin">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img src="images/news/news_home2.jpg" alt="News">
                            </div>
                              <div class="fbox-desc">
                                <h3 style="margin-bottom:12px;">媒体报道</h3>
                                
                            </div>
                        
                            <div class="widget widget_links clearfix">
                            
                                <ul>
                                    <li><a href="news/posts/143.html"><div>[07-01]“多快好省”的云服务器，就是它！</div></a></li>
                                    <li><a href="news/posts/121.html"><div>[05-31]影速科技云服务器 助力企业海外市场拓展之路</div></a></li>
                                    <li><a href="news/posts/88.html"><div>[01-30]尽显优势！影速YINGSOO新加坡云服务器延迟仅45MS</div></a></li>
                                    

                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class="col_one_third nobottommargin col_last">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img src="images/news/news_home3.jpg" alt="新加坡服务器" title="新加坡服务器">
                            </div>
                            
                              <div class="fbox-desc">
                                <h3 style="margin-bottom:12px;">行业新闻</h3>
                                
                            </div>
                        
                            <div class="widget widget_links clearfix">
                            
                                <ul>
                                    <li><a href="news/news/183.html"><div>[08-05]印孚瑟斯二度投资以色列新成立的云计算公司CLOUDYN</div></a></li>
                                    <li><a href="news/news/181.html"><div>[08-04]360°全方位升级 影速科技云运维堪称典范</div></a></li>
                                    <li><a href="news/news/179.html"><div>[08-03]甲骨文巨资收购NETSUITE云服务公司，向云服务行业更加深入一脚</div></a></li>
                                    
                                </ul>

                            </div>
                            
                            
                        </div>
                    </div>

                </div>

                       
                                
                            </div>
      </div>

                    </div>

                    <script type="text/javascript">

                        jQuery(document).ready(function($) {

                            var ocPortfolio = $("#oc-portfolio");

                            ocPortfolio.owlCarousel({
                                margin: 1,
                                autoplay: true,
                                autoplayHoverPause: true,
                                dots: false,
                                nav: true,
                                navText : ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
                                responsive:{
                                    0:{ items:1 },
                                    600:{ items:2 },
                                    1000:{ items:3 },
                                    1200:{ items:4 }
                                }
                            });

                        });

                    </script>

                </div>

                

                <div class="container clearfix">

<div id="section-couple" class="heading-block title-center page-section">
                        <h3>合作伙伴</h3>
                        
                    </div>

                    <div id="oc-clients" class="owl-carousel owl-carousel-full image-carousel" style="padding: 0px 0px ;">

                        <div class="oc-item"><a href="#"><img src="images/partners/p1.jpg" alt="Clients"></a></div>
                        <div class="oc-item"><a href="#"><img src="images/partners/p2.jpg" alt="Clients"></a></div>
                        <div class="oc-item"><a href="#"><img src="images/partners/p3.jpg" alt="Clients"></a></div>
                        <div class="oc-item"><a href="#"><img src="images/partners/p4.jpg" alt="Clients"></a></div>
                        <div class="oc-item"><a href="#"><img src="images/partners/p5.jpg" alt="Clients"></a></div>
                        <div class="oc-item"><a href="#"><img src="images/partners/p6.jpg" alt="Clients"></a></div>
                        <div class="oc-item"><a href="#"><img src="images/partners/p7.jpg" alt="Clients"></a></div>
                        <div class="oc-item"><a href="#"><img src="images/partners/p8.jpg" alt="Clients"></a></div>
                        <div class="oc-item"><a href="#"><img src="images/partners/p9.jpg" alt="Clients"></a></div>

                       

                    </div>

                    <script type="text/javascript">

                        jQuery(document).ready(function($) {

                            var ocClients = $("#oc-clients");

                            ocClients.owlCarousel({
                                margin: 30,
                                loop: true,
                                nav: false,
                                autoplay: true,
                                dots: false,
                                autoplayHoverPause: true,
                                responsive:{
                                    0:{ items:2 },
                                    480:{ items:3 },
                                    768:{ items:4 },
                                    992:{ items:5 },
                                    1200:{ items:6 }
                                }
                            });

                        });

                    </script>

                </div>

            </div>

        </section><!-- #content end -->
@stop