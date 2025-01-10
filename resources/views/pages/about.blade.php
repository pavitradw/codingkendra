@extends('layouts.app')
@section('content')

<section class="page-title" style="background-image: url(assets/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">About Us</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</section>

<section class="about-section">
    <div class="auto-container">
        <div class="row">
            <div class="content-column col-xl-6 col-lg-7 col-md-12 col-sm-12 order-2 wow fadeInRight animated"
                data-wow-delay="600ms"
                style="visibility: visible; animation-delay: 600ms; animation-name: fadeInRight;">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="sub-title">Discover CodingKendra</span>
                        <h2>Our Commitment to Excellence in Web Design and Development</h2>
                        <div class="text">CodingKendra is a leading web design and development agency dedicated to creating impactful digital experiences. We combine creativity with technical expertise to deliver high-quality, custom solutions for businesses of all sizes.</div>
                    </div>
                    <ul class="list-style-two">
                        <li><i class="fa fa-check-circle"></i> Custom Website Design.</li>
                        <li><i class="fa fa-check-circle"></i> Full-Stack Development.</li>
                        <li><i class="fa fa-check-circle"></i> E-commerce Solutions.</li>
                        <li><i class="fa fa-check-circle"></i> Content Management Systems (CMS).</li>
                        <li><i class="fa fa-check-circle"></i> SEO and Google Indexing.</li>
                        <li><i class="fa fa-check-circle"></i> Website Maintenance.</li>
                    </ul>

                </div>
            </div>

            <div class="image-column col-xl-6 col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInLeft animated"
                    style="visibility: visible; animation-name: fadeInLeft;">
                    <figure class="image-1 overlay-anim wow fadeInUp animated"
                        style="visibility: visible; animation-name: fadeInUp;"><img
                            src="assets/images/resource/about-1.jpg" alt=""></figure>
                    <figure class="image-2 overlay-anim wow fadeInRight animated"
                        style="visibility: visible; animation-name: fadeInRight;"><img
                            src="assets/images/resource/about-2.jpg" alt=""></figure>
                    <div class="experience bounce-y">
                        <div class="inner">
                            <i class="icon flaticon-discuss"></i>
                            <div class="text"><strong>30+</strong> Years of <br>experience</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features-section">
    <div class="bg bg-pattern-1"></div>
    <div class="auto-container">
        <div class="row">

            <div class="content-column col-xl-5 col-lg-6 col-md-12">
                <div class="inner-column wow fadeInRight animated"
                    style="visibility: visible; animation-name: fadeInRight;">
                    <div class="sec-title">
                        <span class="sub-title">Our Vision, Mission, and Values</span>
                        <h2>Guiding Principles That Drive Our Commitment to Excellence</h2>
                    </div>
                    <div class="feature-block">
                        <div class="inner-box">
                            <div class="content">
                                <span class="icon"><i class="fa fa-check"></i></span>
                                <h5 class="title">Vision</h5>
                                <div class="text">To be a leading force in web design and development, empowering businesses with innovative, user-centric digital solutions that drive success and growth in an ever-evolving online landscape.</div>
                            </div>
                        </div>
                    </div>
                    <div class="feature-block">
                        <div class="inner-box">
                            <div class="content">
                                <span class="icon"><i class="fa fa-check"></i></span>
                                <h5 class="title">Mission</h5>
                                <div class="text">Our mission is to deliver exceptional web solutions through creativity, expertise, and commitment, ensuring every client achieves a powerful online presence that reflects their unique brand and goals.</div>
                            </div>
                        </div>
                    </div>
                    <div class="feature-block">
                        <div class="inner-box">
                            <div class="content">
                                <span class="icon"><i class="fa fa-check"></i></span>
                                <h5 class="title">Values</h5>
                                <div class="text">Innovation, integrity, and excellence are at the core of what we do. We strive to push the boundaries of design and technology, maintain transparency and honesty, and prioritize client needs to deliver the highest quality solutions. Collaboration and a customer-centric approach guide our efforts to achieve shared success.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="image-column col-xl-7 col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInLeft animated"
                    style="visibility: visible; animation-name: fadeInLeft;">
                    <div class="image-box">
                        <figure class="image"><img src="assets/images/resource/image-2.jpg" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-section-three">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="sub-title">What We’re Offering</span>
            <h2>Services we’re offering to <br>our customers.</h2>
        </div>
        <div class="row">

            <div class="service-block-three col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="inner-box">
                    <div class="content">
                        <div class="icon-box"><i class="icon flaticon-color-sample"></i></div>
                        <h5 class="title"><a href="page-service-details.html">Web <br>designing</a></h5>
                        <div class="text">Tincidunt elit magnis nulla facilisis sags maecenas nunc amet ultrices.</div>
                    </div>
                    <a href="page-service-details.html" class="read-more"><i class="fa fa-long-arrow-alt-right"></i></a>
                </div>
            </div>

            <div class="service-block-three col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="inner-box">
                    <div class="content">
                        <div class="icon-box"><i class="icon flaticon-front-end"></i></div>
                        <h5 class="title"><a href="page-service-details.html">Web <br>development</a></h5>
                        <div class="text">Tincidunt elit magnis nulla facilisis sags maecenas nunc amet ultrices.</div>
                    </div>
                    <a href="page-service-details.html" class="read-more"><i class="fa fa-long-arrow-alt-right"></i></a>
                </div>
            </div>

            <div class="service-block-three col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="inner-box">
                    <div class="content">
                        <div class="icon-box"><i class="icon flaticon-online-shopping"></i></div>
                        <h5 class="title"><a href="page-service-details.html">Web <br>application</a></h5>
                        <div class="text">Tincidunt elit magnis nulla facilisis sags maecenas nunc amet ultrices.</div>
                    </div>
                    <a href="page-service-details.html" class="read-more"><i class="fa fa-long-arrow-alt-right"></i></a>
                </div>
            </div>

            <div class="service-block-three col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="inner-box">
                    <div class="content">
                        <div class="icon-box"><i class="icon flaticon-advertising"></i></div>
                        <h5 class="title"><a href="page-service-details.html">Web <br>marketing</a></h5>
                        <div class="text">Tincidunt elit magnis nulla facilisis sags maecenas nunc amet ultrices.</div>
                    </div>
                    <a href="page-service-details.html" class="read-more"><i class="fa fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="call-to-action">
    <div class="bg bg-pattern-8"></div>
    <div class="auto-container">
        <div class="outer-box wow fadeIn animated animated" style="visibility: visible; animation-name: fadeIn;">
            <div class="title-box">
                <h2 class="title">Looking for the best web design <br>solutions?</h2>
            </div>
            <div class="btn-box">
                <a href="http://127.0.0.1:8001/contact" class="theme-btn btn-style-one light"><span
                        class="btn-title">Contact
                        Us</span></a>
            </div>
        </div>
    </div>
</section>


@endsection