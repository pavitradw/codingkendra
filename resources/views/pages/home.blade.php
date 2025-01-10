@extends('layouts.app')
@section('content')

<section class="main-slider">
    <div class="rev_slider_wrapper fullwidthbanner-container tp-mouseover" id="rev_slider_one_wrapper"
        data-source="gallery" style="overflow: visible; height: 870px;">
        <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1" style="height: 870px;">
            <ul>

                <li data-index="rs-1" data-transition="zoomout">

                    <img src="assets/images/main-slider/1.jpg" alt class="rev-slidebg">
                    <div class="tp-caption" data-paddingbottom="[15,15,15,15]" data-paddingleft="[15,15,15,15]"
                        data-paddingright="[15,15,15,15]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="['750','750','750','650']"
                        data-whitespace="normal" data-hoffset="['0','0','0','0']" data-voffset="['20','20','0','0']"
                        data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                        <h2 class="color2">Innovative Design</h2>
                        <h1>Transforming <span class="style-font color2">Ideas</span> <br>into Reality</h1>
                    </div>
                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                        data-paddingright="[15,15,15,15]" data-paddingtop="[35,35,35,35]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="['700','750','700','450']"
                        data-whitespace="normal" data-hoffset="['0','0','0','0']"
                        data-voffset="['215','215','215','215']" data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                        data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                        <a href="{{url('/about')}}" class="theme-btn btn-style-one bg-theme-color2"><span
                                class="btn-title">See Our Work</span></a>
                    </div>
                </li>
                <li data-index="rs-2" data-transition="zoomout">

                    <img src="assets/images/main-slider/2.jpg" alt class="rev-slidebg">
                    <div class="tp-caption" data-paddingbottom="[15,15,15,15]" data-paddingleft="[15,15,15,15]"
                        data-paddingright="[15,15,15,15]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="['750','750','750','650']"
                        data-whitespace="normal" data-hoffset="['0','0','0','0']" data-voffset="['20','20','0','0']"
                        data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                        <h2 class="color2">Full-Stack Experts</h2>
                        <h1>Comprehensive <br /><span class="style-font color2">Web</span> Solutions</h1>
                    </div>
                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                        data-paddingright="[15,15,15,15]" data-paddingtop="[30,30,30,30]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="['700','750','700','450']"
                        data-whitespace="normal" data-hoffset="['0','0','0','0']"
                        data-voffset="['215','215','215','215']" data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                        data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                        <a href="{{url('/contact')}}" class="theme-btn btn-style-one bg-theme-color2"><span
                                class="btn-title">Get Started</span></a>
                    </div>
                </li>

                <li data-index="rs-3" data-transition="zoomout" class="active-revslide">

                    <img src="assets/images/main-slider/2.jpg" alt class="rev-slidebg">
                    <div class="tp-caption" data-paddingbottom="[15,15,15,15]" data-paddingleft="[15,15,15,15]"
                        data-paddingright="[15,15,15,15]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="['750','750','750','650']"
                        data-whitespace="normal" data-hoffset="['0','0','0','0']" data-voffset="['20','20','0','0']"
                        data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                        <h2 class="color2">Grow Your Business Online</h2>
                        <h1>Boost Your <br /><span class="style-font color2">Digital</span> Presence</h1>
                    </div>
                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                        data-paddingright="[15,15,15,15]" data-paddingtop="[30,30,30,30]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="['700','750','700','450']"
                        data-whitespace="normal" data-hoffset="['0','0','0','0']"
                        data-voffset="['215','215','215','215']" data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                        data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                        <a href="{{url('/contact')}}" class="theme-btn btn-style-one bg-theme-color2"><span
                                class="btn-title">Request a Quote</span></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="about-section-two">
    <div class="auto-container">
        <div class="row">
            <div class="content-column col-xl-6 col-lg-7 col-md-12 col-sm-12 order-2 wow fadeInRight animated"
                data-wow-delay="600ms"
                style="visibility: visible; animation-delay: 600ms; animation-name: fadeInRight;">
                <div class="inner-column">
                    <div class="float-text">codingkendra</div>
                    <div class="sec-title">
                        <span class="sub-title">Who We Are</span>
                        <h2>Passionate Experts in Web Development</h2>
                        <div class="text"><strong>CodingKendra</strong> is a premier web design and development agency
                            specializing in full-stack solutions. Our team excels in React.js, WordPress, Laravel, and
                            more, offering custom websites, e-commerce platforms, and ongoing support. We’re dedicated
                            to delivering innovative, user-friendly solutions that elevate your online presence and
                            drive success.</div>
                    </div>
                    <div class="row">
                        <div class="about-block col-lg-6 col-md-6">
                            <div class="inner-box">
                                <i class="icon flaticon-user-interface"></i>
                                <h6 class="title">Custom Web Solutions</h6>
                                <div class="text">Customized designs and development to fit your unique needs.</div>
                            </div>
                        </div>
                        <div class="about-block col-lg-6 col-md-6">
                            <div class="inner-box">
                                <i class="icon flaticon-front-end"></i>
                                <h6 class="title">Expert Team</h6>
                                <div class="text">Skilled professionals delivering high-quality, innovative web
                                    solutions.</div>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="page-about.html" class="theme-btn btn-style-one"><span class="btn-title">Explore
                            now</span></a> -->
                </div>
            </div>

            <div class="image-column col-xl-6 col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInLeft animated"
                    style="visibility: visible; animation-name: fadeInLeft;">
                    <figure class="image-1 overlay-anim wow fadeInUp animated"
                        style="visibility: visible; animation-name: fadeInUp;"><img
                            src="assets/images/resource/about-3.jpg" alt=""></figure>
                    <figure class="image-2 overlay-anim wow fadeInRight animated"
                        style="visibility: visible; animation-name: fadeInRight;"><img
                            src="assets/images/resource/about-4.jpg" alt=""></figure>
                    <div class="experience bounce-y">
                        <div class="inner">
                            <i class="icon flaticon-design"></i>
                            <div class="text">Customized Designs.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-section pt-0">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="sub-title">What We’re Offering</span>
            <h2>Comprehensive Solutions <br /> for Every Web Development Need</h2>
        </div>
        <div class="row wow fadeInUp animated animated">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="service-block" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon flaticon-color-sample"></i></div>
                                <h5 class="title"><a href="{{url('/custom-website-design')}}">Custom Website Design</a>
                                </h5>
                                <div class="text">Crafting unique, visually appealing websites tailored to your brand's
                                    identity, ensuring an engaging user experience and optimal functionality.
                                </div>
                                <a href="{{url('/custom-website-design')}}" class="read-more"><i
                                        class="fa fa-long-arrow-alt-right"></i>
                                    Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-block" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon flaticon-front-end"></i></div>
                                <h5 class="title"><a href="{{url('/full-stack-development')}}">Full-Stack
                                        Development</a></h5>
                                <div class="text">Providing comprehensive development services, including both front-end
                                    and back-end solutions, for dynamic, scalable, and robust web applications.
                                </div>
                                <a href="{{url('/full-stack-development')}}" class="read-more"><i
                                        class="fa fa-long-arrow-alt-right"></i>
                                    Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-block" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon flaticon-online-shopping"></i></div>
                                <h5 class="title"><a href="{{url('/ecommerce-solutions')}}">E-commerce Solutions</a>
                                </h5>
                                <div class="text">Building secure, user-friendly online stores with integrated payment
                                    systems, product management for seamless shopping
                                    experiences.
                                </div>
                                <a href="{{url('/ecommerce-solutions')}}" class="read-more"><i
                                        class="fa fa-long-arrow-alt-right"></i>
                                    Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-block" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon flaticon-online-shopping"></i></div>
                                <h5 class="title"><a href="{{url('/cms')}}">Content Management Systems (CMS)</a></h5>
                                <div class="text">Implementing and customizing CMS platforms like WordPress for easy
                                    update and maintain your site.
                                </div>
                                <a href="{{url('/cms')}}" class="read-more"><i class="fa fa-long-arrow-alt-right"></i>
                                    Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-block" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon flaticon-online-shopping"></i></div>
                                <h5 class="title"><a href="{{url('/seo-google-indexing')}}">SEO and Google Indexing</a>
                                </h5>
                                <div class="text">Enhancing your website’s visibility with effective SEO strategies and
                                    ensuring proper Google indexing to improve search engine rankings.
                                </div>
                                <a href="{{url('/seo-google-indexing')}}" class="read-more"><i
                                        class="fa fa-long-arrow-alt-right"></i>
                                    Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-block" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon flaticon-online-shopping"></i></div>
                                <h5 class="title"><a href="{{url('/website-maintenance')}}">Website Maintenance</a></h5>
                                <div class="text">Providing ongoing support, updates, and security patches to ensure
                                    your website remains functional, secure, and up-to-date.
                                </div>
                                <a href="{{url('/website-maintenance')}}" class="read-more"><i
                                        class="fa fa-long-arrow-alt-right"></i>
                                    Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="bottom-box">
            <div class="text">Trust the experts for all your <strong>web design &amp; development</strong> needs.
            </div>
            <a href="{{url('/contact')}}" class="theme-btn btn-style-one"><span class="btn-title">Contact Us!</span></a>
        </div>
    </div>
</section>

<section class="fun-fact-section pt-0" style="background-image: url(assets/images/background/1.png)">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="sub-title">Our Achievements</span>
            <h2>Proudly Showcasing <br />Our Milestones and Success Stories</h2>
        </div>

        <div class="fact-counter">
            <div class="row">

                <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="inner">
                        <i class="icon flaticon-campaign"></i>
                        <div class="count-box counted"><span class="count-text" data-speed="2000"
                                data-stop="150">150</span>+</div>
                        <h6 class="counter-title">Projects completed</h6>
                    </div>
                </div>

                <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="300ms"
                    style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                    <div class="inner">
                        <i class="icon flaticon-reputation"></i>
                        <div class="count-box counted"><span class="count-text" data-speed="2000"
                                data-stop="120">120</span>+</div>
                        <h6 class="counter-title">Satisfied Clients</h6>
                    </div>
                </div>

                <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="600ms"
                    style="visibility: visible; animation-delay: 600ms; animation-name: fadeInUp;">
                    <div class="inner">
                        <i class="icon flaticon-coffee"></i>
                        <div class="count-box counted"><span class="count-text" data-speed="2000"
                                data-stop="5">5</span>+</div>
                        <h6 class="counter-title">Years of Experience</h6>
                    </div>
                </div>

                <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="900ms"
                    style="visibility: visible; animation-delay: 900ms; animation-name: fadeInUp;">
                    <div class="inner">
                        <i class="icon flaticon-social-campaign"></i>
                        <div class="count-box counted"><span class="count-text" data-speed="2000"
                                data-stop="9">9</span>+</div>
                        <h6 class="counter-title">Team Members</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="call-to-action">
    <div class="bg bg-pattern-8"></div>
    <div class="auto-container">
        <div class="outer-box wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
            <div class="title-box">
                <h2 class="title">Looking for the best web design <br>solutions?</h2>
            </div>
            <div class="btn-box">
                <a href="{{url('/contact')}}" class="theme-btn btn-style-one light"><span class="btn-title">Contact
                        Us</span></a>
            </div>
        </div>
    </div>
</section>

<section class="news-section">
    <div class="bg bg-pattern-6"></div>
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="sub-title">Blog</span>
            <h2>Latest from the blog</h2>
        </div>
        <div class="row">

            <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href=""><img src="assets/images/resource/news-1.jpg" alt=""></a>
                        </figure>
                    </div>
                    <div class="content-box">
                        <span class="date">20 Jan, 2024</span>
                        <span class="post-info"><i class="fa fa-user-circle"></i> by Puneet</span>
                        <h5 class="title"><a href="">Top 5 Web Design Trends for 2024</a></h5>
                        <div class="text">As we head into 2024, web design continues to evolve with new trends shaping
                            the digital landscape.</div>
                        <a href="" class="read-more"><i class="fa fa-long-arrow-alt-right"></i>
                            Read More</a>
                    </div>
                </div>
            </div>

            <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="300ms"
                style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href=""><img src="assets/images/resource/news-2.jpg" alt=""></a>
                        </figure>
                    </div>
                    <div class="content-box">
                        <span class="date">20 Dec, 2022</span>
                        <span class="post-info"><i class="fa fa-user-circle"></i> by Sumit</span>
                        <h5 class="title"><a href="">How Full-Stack Development Can Boost..</a></h5>
                        <div class="text">Full-stack development offers a comprehensive...</div>
                        <a href="" class="read-more"><i class="fa fa-long-arrow-alt-right"></i>
                            Read More</a>
                    </div>
                </div>
            </div>

            <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="600ms"
                style="visibility: visible; animation-delay: 600ms; animation-name: fadeInUp;">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href=""><img src="assets/images/resource/news-3.jpg" alt=""></a>
                        </figure>
                    </div>
                    <div class="content-box">
                        <span class="date">20 Dec, 2022</span>
                        <span class="post-info"><i class="fa fa-user-circle"></i> by Laxman</span>
                        <h5 class="title"><a href="">Essential Tips for Optimizing Your site..</a></h5>
                        <div class="text">In today’s competitive online marketplace, optimizing..</div>
                        <a href="" class="read-more"><i class="fa fa-long-arrow-alt-right"></i>
                            Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonial-section-two">
    <div class="bg bg-pattern-11"></div>
    <div class="auto-container">
        <div class="row">
            <div class="image-column col-lg-6 col-md-12">
                <div class="inner-column">
                    <div class="image-box">
                        <div class="bg-shape"></div>
                        <figure class="image image-4"><img src="assets/images/resource/thumb-4.jpg" alt>
                        </figure>
                        <figure class="image image-3"><img src="assets/images/resource/thumb-3.jpg" alt>
                        </figure>
                        <figure class="image image-2"><img src="assets/images/resource/thumb-2.jpg" alt>
                        </figure>
                        <figure class="image image-1"><img src="assets/images/resource/thumb-1.jpg" alt>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="testimonial-column col-lg-6 col-md-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="sub-title">What Our Clients Say</span>
                        <h2>Hear from those who’ve experienced our exceptional web solutions</h2>
                    </div>
                    <div class="carousel-outer">
                        <div class="testimonial-carousel-two owl-carousel owl-theme default-dots">

                            <div class="testimonial-block-two">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <div class="text">CodingKendra transformed our outdated website into a modern, dynamic platform. Their attention to detail and timely delivery exceeded our expectations.</div>
                                        <div class="info-box">
                                            <h6 class="name">Rajesh Patel</h6>
                                            <span class="icon icon-quote"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="testimonial-block-two">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <div class="text">Working with CodingKendra was a fantastic experience. Their team delivered a custom e-commerce site that perfectly fits our needs. Their support and expertise are good.</div>
                                        <div class="info-box">
                                            <h6 class="name">Priya Sharma</h6>
                                            <span class="icon icon-quote"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="testimonial-block-two">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <div class="text">CodingKendra’s expertise in full-stack development brought our vision to life. The project was completed ahead of schedule, and the quality of work was exceptional.</div>
                                        <div class="info-box">
                                            <h6 class="name">Amit Kumar</h6>
                                            <span class="icon icon-quote"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection