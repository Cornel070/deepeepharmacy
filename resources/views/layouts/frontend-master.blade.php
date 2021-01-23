<!DOCTYPE html>
<html lang="en-US" class="no-js">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? "D'Preferred & Pharmacy & Stores Ltd." }}</title>


    <link rel='stylesheet' href='{{ asset('assets/frontend/plugins/goodlayers-core/plugins/fontawesome/font-awesome.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('assets/frontend/plugins/goodlayers-core/plugins/fa5/fa5.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('assets/frontend/plugins/goodlayers-core/plugins/elegant/elegant-font.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('assets/frontend/plugins/goodlayers-core/plugins/ionicons/ionicons.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('assets/frontend/plugins/goodlayers-core/plugins/simpleline/simpleline.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('assets/frontend/plugins/goodlayers-core/plugins/style.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('assets/frontend/plugins/goodlayers-core/include/css/page-builder.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('assets/frontend/plugins/revslider/public/assets/css/rs6.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('assets/frontend/plugins/google-map-plugin/assets/css/frontend.css') }}' type='text/css' media='all' />
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link rel='stylesheet' href='{{ asset('assets/frontend/css/style-core.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('assets/frontend/css/mediz-style-custom.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('assets/css/bootstrap.min.css') }}' type='text/css' media='all' />
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/frontend/Favicon.png') }}"/>
    <link href="{{ asset('assets/plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <script type='text/javascript'>
        var page_data = {!! pageJsonData() !!};
    </script>


    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMerriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin-ext%2Cdevanagari%2Clatin%2Cvietnamese%2Ccyrillic%2Ccyrillic-ext&amp;display=optional&amp;ver=5.3.2' type='text/css' media='all' />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400" rel="stylesheet" property="stylesheet" media="all" type="text/css">


{{-- {{ dd($cartCount) }} --}}
</head>

<body class="home page-template-default page page-id-7684 theme-mediz gdlr-core-body woocommerce-no-js mediz-body mediz-body-front mediz-full  mediz-with-sticky-navigation  mediz-sticky-navigation-no-logo  mediz-blockquote-style-1 gdlr-core-link-to-lightbox" data-home-url="index.html">
    <div class="mediz-mobile-header-wrap">
        <div class="mediz-mobile-header mediz-header-background mediz-style-slide mediz-sticky-mobile-navigation " id="mediz-mobile-header">
            <div class="mediz-mobile-header-container mediz-container clearfix">
                <div class="mediz-logo  mediz-item-pdlr">
                    <div class="mediz-logo-inner">
                        <a class="" href="/"><img src="{{ asset('assets/frontend/upload/logo-1.png') }}" alt="" width="290" height="76" title="logo" /></a>
                    </div>
                </div>
                <div class="mediz-mobile-menu-right">
                    <div class="mediz-main-menu-search" id="mediz-mobile-top-search"><i class="fa fa-search"></i></div>
                    <div class="mediz-top-search-wrap">
                        <div class="mediz-top-search-close"></div>

                        <div class="mediz-top-search-row">
                            <div class="mediz-top-search-cell">
                                <form role="search" method="post" id="search-frm-sm" class="search-form" action="{{ route('drugs') }}">
                                            @csrf
                                            <input type="text" class="search-field mediz-title-font" placeholder="Search drug..." value="" name="search-txt" id="drug-search-sm">
                                            <div class="mediz-top-search-submit"><i class="fa fa-search"></i></div>
                                            <input type="submit" class="search-submit">
                                            <input type="hidden" name="drug_id" id="id_area-sm">
                                            <div class="mediz-top-search-close"><i class="icon_close"></i></div>
                                            {{-- Suggestion Area --}}
                                            <table id="suggestions-sm" class="table dt-responsive sugg-scroll" style="">
                                               
                                            </table>
                                            {{-- suggestion ends --}}
                                        </form>
                            </div>
                        </div>

                    </div>

                    <div class="mediz-main-menu-search" id="mediz-mobile-top-search" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-shopping-bag"></i><span class="badge badge-pill badge-danger">{{ $cartCount }}</span></div>
              

                    <div class="mediz-overlay-menu mediz-mobile-menu" id="mediz-mobile-menu"><a class="mediz-overlay-menu-icon mediz-mobile-menu-button mediz-mobile-button-hamburger" href="#"><span></span></a>
                        <div class="mediz-overlay-menu-content mediz-navigation-font">
                            <div class="mediz-overlay-menu-close"></div>
                            <div class="mediz-overlay-menu-row">
                                <div class="mediz-overlay-menu-cell">
                                    <ul id="menu-main-navigation" class="menu">
                                        <li class="menu-item menu-item-home current-menu-item page_item page-item-7684 current_page_item"><a href="/" aria-current="page">Home</a></li>
                                        <li class="menu-item"><a href="{{ route('about') }}">About Us</a>
                                            <!-- <ul class="sub-menu">
                                                <li class="menu-item"><a href="about-us.html">About Us</a></li>
                                                <li class="menu-item"><a href="about-us-2.html">About Us 2</a></li>
                                                <li class="menu-item"><a href="our-services.html">Our Services</a></li>
                                                <li class="menu-item"><a href="our-services-2.html">Our Services 2</a></li>
                                                <li class="menu-item"><a href="our-services-3.html">Our Services 3</a></li>
                                            </ul> -->
                                        </li>
                                        <li class="menu-item menu-item-has-children"><a href="{{ route('services') }}">Our Services</a>
                                            <ul class="sub-menu">
                                                <!-- <li class="menu-item"><a href="#">Menu Item</a></li>
                                                <li class="menu-item menu-item-has-children"><a href="#">Our Services</a>
                                                    <ul class="sub-menu"> -->
                                                        <li class="menu-item"><a href="{{ route('services') }}">24/7 Home Delivery</a></li>
                                                        <li class="menu-item"><a href="{{ route('services') }}">Pharmacy-on-the-wheel</a></li>
                                                        <li class="menu-item"><a href="{{ route('services') }}">Drug Info. & Management</a></li>
                                                        <li class="menu-item"><a href="{{ route('services') }}">Pharm. Rep. & Feedback</a></li>
                                                        <li class="menu-item"><a href="{{ route('services') }}">First Aid</a></li>
                                                        <li class="menu-item"><a href="{{ route('services') }}">Health & Lifestyle Mgt.</a></li>
                                                        <!-- <li class="menu-item"><a href="sport-injury.html">Sport Injury</a></li> -->
                                                    <!-- </ul> -->
                                                <!-- </li> -->
                                                <li class="menu-item"><a>Know Your Drugs</a>
                                                    <!-- <ul class="sub-menu">
                                                       <li class="menu-item"><a href="lumbar-discectomy.html">Lumbar Discectomy</a></li>
                                                        <li class="menu-item"><a href="endoscopy.html">Endoscopy</a></li>
                                                        <li class="menu-item"><a href="knee-arthroscopy-2.html">Elbow Arthroscopy</a></li>
                                                        <li class="menu-item"><a href="colorectal.html">Colorectal</a></li>
                                                        <li class="menu-item"><a href="knee-arthroscopy.html">Knee Arthroscopy</a></li>
                                                        <li class="menu-item"><a href="hemorrhoids.html">Hemorrhoids</a></li>
                                                        <li class="menu-item"><a href="cardio-oncology.html">Cardio Oncology</a></li>
                                                    </ul> -->
                                                </li>
                                                <!-- <li class="menu-item menu-item-has-children"><a href="#">Service Listing Style</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="our-services.html">Our Services</a></li>
                                                        <li class="menu-item"><a href="our-services-2.html">Our Services 2</a></li>
                                                        <li class="menu-item"><a href="our-services-3.html">Our Services 3</a></li>
                                                    </ul>
                                                </li> -->
                                            </ul>
                                        </li>
                                        <!-- <li class="menu-item menu-item-has-children "><a href="our-doctor.html">Our Doctor</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="our-doctor.html">Our Doctor</a></li>
                                                <li class="menu-item"><a href="our-doctor-2.html">Our Doctor 2</a></li>
                                            </ul>
                                        </li> -->
                                        <li class="menu-item"><a href="{{ route('contact-us') }}">Contact</a>
                                            <!-- <ul class="sub-menu">
                                                <li class="menu-item"><a href="contact.html">Contact</a></li>
                                                <li class="menu-item"><a href="team-plain-style.html">Team / Plain Style</a></li>
                                                <li class="menu-item"><a href="gallery.html">Gallery</a></li>
                                                <li class="menu-item"><a href="price-table.html">Price Table</a></li>
                                                <li class="menu-item"><a href="maintenance.html">Maintenance</a></li>
                                                <li class="menu-item"><a href="coming-soon.html">Coming Soon</a></li>
                                                <li class="menu-item"><a href="404.html">404 Page</a></li>
                                            </ul> -->
                                        </li>
                                        <!-- <li class="menu-item menu-item-has-children"><a href="portfolio-3-columns.html">Portfolio</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-has-children"><a>Portfolio Grid</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="portfolio-2-columns.html">Portfolio 2 Columns</a></li>
                                                        <li class="menu-item"><a href="portfolio-3-columns.html">Portfolio 3 Columns</a></li>
                                                        <li class="menu-item"><a href="portfolio-4-columns.html">Portfolio 4 Columns</a></li>
                                                        <li class="menu-item"><a href="portfolio-2-columns-with-frame.html">Portfolio 2 Columns With Frame</a></li>
                                                        <li class="menu-item"><a href="portfolio-3-columns-with-frame.html">Portfolio 3 Columns With Frame</a></li>
                                                        <li class="menu-item"><a href="portfolio-4-columns-with-frame.html">Portfolio 4 Columns With Frame</a></li>
                                                        <li class="menu-item"><a href="portfolio-2-columns-no-space.html">Portfolio 2 Columns No Space</a></li>
                                                        <li class="menu-item"><a href="portfolio-3-columns-no-space.html">Portfolio 3 Columns No Space</a></li>
                                                        <li class="menu-item"><a href="portfolio-4-columns-no-space.html">Portfolio 4 Columns No Space</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children"><a>Portfolio Side Thumbnail</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="portfolio-left-right-large-thumbnail.html">Portfolio Left &#038; Right Large Thumbnail</a></li>
                                                        <li class="menu-item"><a href="portfolio-left-large-thumbnail.html">Portfolio Left Large Thumbnail</a></li>
                                                        <li class="menu-item"><a href="portfolio-right-large-thumbnail.html">Portfolio Right Large Thumbnail</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li> -->
                                        <!--  <li class="menu-item"><a href="blog-full-right-sidebar.html">Blog</a>
                                           <ul class="sub-menu">
                                                <li class="menu-item menu-item-has-children"><a href="blog-full-right-sidebar-with-frame.html">Blog Full</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="blog-full-right-sidebar.html">Blog Full Right Sidebar</a></li>
                                                        <li class="menu-item"><a href="blog-full-left-sidebar.html">Blog Full Left Sidebar</a></li>
                                                        <li class="menu-item"><a href="blog-full-both-sidebar.html">Blog Full Both Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children"><a href="blog-3-columns-with-frame.html">Blog Columns</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="blog-2-columns-with-frame.html">Blog 2 Columns With Frame</a></li>
                                                        <li class="menu-item"><a href="blog-3-columns-with-frame.html">Blog 3 Columns With Frame</a></li>
                                                        <li class="menu-item"><a href="blog-4-columns-with-frame.html">Blog 4 Columns With Frame</a></li>
                                                        <li class="menu-item"><a href="blog-2-columns.html">Blog 2 Columns</a></li>
                                                        <li class="menu-item"><a href="blog-3-columns.html">Blog 3 Columns</a></li>
                                                        <li class="menu-item"><a href="blog-4-columns.html">Blog 4 Columns</a></li>
                                                        <li class="menu-item"><a href="blog-3-columns-with-frame-post-format.html">Blog Columns With Post Format</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item"><a href="standard-post-type.html">Single Posts</a></li>
                                            </ul>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mediz-body-outer-wrapper ">
        <div class="mediz-body-wrapper clearfix  mediz-with-frame">
            <div class="mediz-top-bar">
                <div class="mediz-top-bar-background"></div>
                <div class="mediz-top-bar-container mediz-container ">
                    <div class="mediz-top-bar-container-inner clearfix">
                        <div class="mediz-top-bar-left mediz-item-pdlr"><i class="icon-clock" style="font-size: 18px ;color: #17449E ;margin-right: 10px ;"></i>Mon - Sun 24 Hrs
                            <i class="icon-phone" style="font-size: 19px ;color: #17449E ;margin-left: 25px ;margin-right: 10px ;"></i>07016669930<i class="icon-envelope" style="font-size: 19px ;color: #17449E ;margin-left: 25px ;margin-right: 10px ;"></i><a href="#"><span class="__cf_email__" >dpreferredpharmacyltd@gmail.com </span></a> </div>
                        <div class="mediz-top-bar-right mediz-item-pdlr">
                            <div class="mediz-top-bar-right-social"><a href="#" target="_blank" class="mediz-top-bar-social-icon" title="facebook"><i class="fa fa-facebook" ></i></a>
                                <a href="#" target="_blank" class="mediz-top-bar-social-icon" title="linkedin"><i class="fa fa-linkedin" ></i></a>
                                <a href="#" target="_blank" class="mediz-top-bar-social-icon" title="pinterest"><i class="fa fa-pinterest-p" ></i></a>
                                <a href="#" target="_blank" class="mediz-top-bar-social-icon" title="twitter"><i class="fa fa-twitter" ></i></a>
                                <a href="#" target="_blank" class="mediz-top-bar-social-icon" title="instagram"><i class="fa fa-instagram" ></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <header class="mediz-header-wrap mediz-header-style-bar mediz-header-background  mediz-style-left">
                <div class="mediz-header-container clearfix  mediz-container">
                    <div class="mediz-header-container-inner">
                        <div class="mediz-logo  mediz-item-pdlr">
                            <div class="mediz-logo-inner">
                                <a class="" href="index.html"><img src="{{ asset('assets/frontend/upload/logo-1.png') }}" alt="" width="290" height="76" title="logo" /></a>
                            </div>
                        </div>
                        <div class="mediz-logo-right-text mediz-item-pdlr clearfix">
                            <div class="mediz-logo-right-text-wrap"><i class="mediz-logo-right-text-icon icon-check"></i>
                                <div class="mediz-logo-right-text-content-wrap">
                                    <div class="mediz-logo-right-text-title">Trusted By</div>
                                    <div class="mediz-logo-right-text-caption">120,000+ People</div>
                                </div>
                            </div>
                            <div class="mediz-logo-right-text-wrap"><i class="mediz-logo-right-text-icon icon-check"></i>
                                <div class="mediz-logo-right-text-content-wrap">
                                    <div class="mediz-logo-right-text-title">Best Pharmacy</div>
                                    <div class="mediz-logo-right-text-caption">Healthwatch</div>
                                </div>
                            </div>
                            <div class="mediz-logo-right-text-wrap"><i class="mediz-logo-right-text-icon icon-check"></i>
                                <div class="mediz-logo-right-text-content-wrap">
                                    <div class="mediz-logo-right-text-title">Top 10</div>
                                    <div class="mediz-logo-right-text-caption">Pharmacy, Abuja</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- header -->
            <div class="mediz-navigation-bar-wrap  mediz-style-solid mediz-sticky-navigation mediz-sticky-navigation-height mediz-style-left  mediz-style-fixed">
                <div class="mediz-navigation-background"></div>
                <div class="mediz-navigation-container clearfix  mediz-container">
                    <div class="mediz-navigation mediz-item-pdlr clearfix ">
                        <div class="mediz-main-menu" id="mediz-main-menu">
                            <ul id="menu-main-navigation-1" class="sf-menu">
                                <li class="menu-item menu-item-home page_item page-item-7684 mediz-normal-menu {{ $current_h??'' }}"><a href="/">Home</a></li>
                                <li class="menu-item menu-item-has-children mediz-normal-menu {{ $current_a??'' }}"><a href="{{ route('about') }}" class="sf-with-ul-pre">About Us</a>
                                    <!-- <ul class="sub-menu"> 

                                    current_page_item current-menu-item

                                        <li class="menu-item" data-size="60"><a href="about-us.html">About Us</a></li>
                                        <li class="menu-item" data-size="60"><a href="about-us-2.html">About Us 2</a></li>
                                        <li class="menu-item" data-size="60"><a href="our-services.html">Our Services</a></li>
                                        <li class="menu-item" data-size="60"><a href="our-services-2.html">Our Services 2</a></li>
                                        <li class="menu-item" data-size="60"><a href="our-services-3.html">Our Services 3</a></li>
                                    </ul> -->
                                </li>
                                <li class="menu-item menu-item-has-children mediz-mega-menu {{ $current_s??'' }}"><a href="{{ route('services') }}" class="sf-with-ul-pre">Our Services</a>
                                    <div class="sf-mega sf-mega-full" style=" background-image: url('{{ asset('assets/frontend/upload/mega-nav-bg.jpg') }}');  background-position: top left;  background-repeat: no-repeat; ">
                                        <ul class="sub-menu">
                                            <li class="menu-item" data-size="15">
                                                <div class="mediz-mega-menu-section-content"><span class="gdlr-core-space-shortcode" style="margin-top: 140px ;"></span>
                                                    <div style="display: block; margin-left: 15px;">
                                                        <img src="{{ asset('assets/frontend/upload/mega-nav-logo.png') }}" width="98" alt="" /><span class="gdlr-core-space-shortcode" style="margin-top: 10px ;"></span>
                                                        <span style="font-size: 14px;">All our services are centered around our customers and the communities we serve at large.</span></div>
                                                </div>
                                            </li>
                                            <li class="menu-item menu-item-has-children" data-size="15"><a href="{{ route('services') }}" class="sf-with-ul-pre">Our Services</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="{{ route('services') }}">24/7 Home Delivery</a></li>
                                                    <li class="menu-item"><a href="{{ route('services') }}">Pharmacy-on-the-wheel</a></li>
                                                    <li class="menu-item"><a href="{{ route('services') }}">Drug Info. & Management</a></li>
                                                    <li class="menu-item"><a href="{{ route('services') }}">Pharm. Rep. & Feedback</a></li>
                                                    <li class="menu-item"><a href="{{ route('services') }}">First Aid</a></li>
                                                    <li class="menu-item"><a href="{{ route('services') }}">Health & Lifestyle Mgt.</a></li>
                                                    <!-- <li class="menu-item"><a href="sport-injury.html">Sport Injury</a></li> -->
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children" data-size="15"><a class="sf-with-ul-pre">Know Your Drugs</a>
                                                <ul class="sub-menu">
                                                    <li style="font-size: 14px;"><a>Feel free to search any drug on our platform. Use the know your drug feature, get all the information you need before purchase.</a></li>
                                                    <!-- <li class="menu-item"><a href="lumbar-discectomy.html">Lumbar Discectomy</a></li>
                                                    <!<li class="menu-item"><a href="endoscopy.html">Endoscopy</a></li>
                                                    <li class="menu-item"><a href="knee-arthroscopy-2.html">Elbow Arthroscopy</a></li>
                                                    <li class="menu-item"><a href="colorectal.html">Colorectal</a></li>
                                                    <li class="menu-item"><a href="knee-arthroscopy.html">Knee Arthroscopy</a></li>
                                                    <li class="menu-item"><a href="hemorrhoids.html">Hemorrhoids</a></li>
                                                    <li class="menu-item"><a href="cardio-oncology.html">Cardio Oncology</a></li> -->
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children" data-size="15"><a href="{{ route('contact-us') }}" class="sf-with-ul-pre">Contact Info.</a>
                                                <ul class="sub-menu">
                                                    <li><a>Neighbourhood Shopping Complex,
                                                        <br /> Area 3, Garki - Abuja</a></li>

                                                    <li><a href=""><i class="icon-phone" style="font-size: 19px ;color: #17449E ;margin-right: 10px ;"></i><span style="color: #17449e;">+1-2345-3455-33</span></a></li>

                                                    <li><a href=""><i class="icon-envelope" style="font-size: 19px ;color: #17449E ;margin-right: 10px ;"></i><span style="color: #17449E;" class="__cf_email__">contact@deepeepharmacy.ng</span></a></li>
                                                   <!--  <li class="menu-item"><a href="our-services.html">Our Services</a></li>
                                                    <li class="menu-item"><a href="our-services-2.html">Our Services 2</a></li>
                                                    <li class="menu-item"><a href="our-services-3.html">Our Services 3</a></li> -->
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- <li class="menu-item menu-item-has-children  mediz-normal-menu"><a href="our-doctor.html" class="sf-with-ul-pre">Our Doctor</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item" data-size="60"><a href="our-doctor.html">Our Doctor</a></li>
                                        <li class="menu-item" data-size="60"><a href="our-doctor-2.html">Our Doctor 2</a></li>
                                    </ul>
                                </li> -->
                                <li class="menu-item menu-item-has-children mediz-normal-menu {{ $current_c??'' }}"><a href="{{ route('contact-us') }}" class="sf-with-ul-pre">Contact</a>
                                    <!-- <ul class="sub-menu">
                                        <li class="menu-item" data-size="60"><a href="contact.html">Contact</a></li>
                                        <li class="menu-item" data-size="60"><a href="team-plain-style.html">Team</a></li>
                                        <li class="menu-item" data-size="60"><a href="gallery.html">Gallery</a></li>
                                        <li class="menu-item" data-size="60"><a href="price-table.html">Price Table</a></li>
                                        <li class="menu-item" data-size="60"><a href="maintenance.html">Maintenance</a></li>
                                        <li class="menu-item" data-size="60"><a href="coming-soon.html">Coming Soon</a></li>
                                        <li class="menu-item" data-size="60"><a href="404.html">404 Page</a></li>
                                    </ul> -->
                                </li>
                                <!-- <li class="menu-item menu-item-has-children mediz-normal-menu"><a href="portfolio-3-columns.html" class="sf-with-ul-pre">Portfolio</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-has-children" data-size="60"><a class="sf-with-ul-pre">Portfolio Grid</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="portfolio-2-columns.html">Portfolio 2 Columns</a></li>
                                                <li class="menu-item"><a href="portfolio-3-columns.html">Portfolio 3 Columns</a></li>
                                                <li class="menu-item"><a href="portfolio-4-columns.html">Portfolio 4 Columns</a></li>
                                                <li class="menu-item"><a href="portfolio-2-columns-with-frame.html">Portfolio 2 Columns With Frame</a></li>
                                                <li class="menu-item"><a href="portfolio-3-columns-with-frame.html">Portfolio 3 Columns With Frame</a></li>
                                                <li class="menu-item"><a href="portfolio-4-columns-with-frame.html">Portfolio 4 Columns With Frame</a></li>
                                                <li class="menu-item"><a href="portfolio-2-columns-no-space.html">Portfolio 2 Columns No Space</a></li>
                                                <li class="menu-item"><a href="portfolio-3-columns-no-space.html">Portfolio 3 Columns No Space</a></li>
                                                <li class="menu-item"><a href="portfolio-4-columns-no-space.html">Portfolio 4 Columns No Space</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children" data-size="60"><a class="sf-with-ul-pre">Portfolio Side Thumbnail</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="portfolio-left-right-large-thumbnail.html">Portfolio Left &#038; Right Large Thumbnail</a></li>
                                                <li class="menu-item"><a href="portfolio-left-large-thumbnail.html">Portfolio Left Large Thumbnail</a></li>
                                                <li class="menu-item"><a href="portfolio-right-large-thumbnail.html">Portfolio Right Large Thumbnail</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li> -->
                                <!--<li class="menu-item menu-item-has-children  mediz-normal-menu"><a href="blog-full-right-sidebar.html" class="sf-with-ul-pre">Blog</a>
                                     <ul class="sub-menu">
                                        <li class="menu-item menu-item-has-children" data-size="60"><a href="blog-full-right-sidebar-with-frame.html" class="sf-with-ul-pre">Blog Full</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="blog-full-right-sidebar-with-frame.html">Blog Full Right Sidebar With Frame</a></li>
                                                <li class="menu-item"><a href="blog-full-left-sidebar-with-frame.html">Blog Full Left Sidebar With Frame</a></li>
                                                <li class="menu-item"><a href="blog-full-both-sidebar-with-frame.html">Blog Full Both Sidebar With Frame</a></li>
                                                <li class="menu-item"><a href="blog-full-right-sidebar.html">Blog Full Right Sidebar</a></li>
                                                <li class="menu-item"><a href="blog-full-left-sidebar.html">Blog Full Left Sidebar</a></li>
                                                <li class="menu-item"><a href="blog-full-both-sidebar.html">Blog Full Both Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children" data-size="60"><a href="blog-3-columns-with-frame.html" class="sf-with-ul-pre">Blog Columns</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="blog-2-columns-with-frame.html">Blog 2 Columns With Frame</a></li>
                                                <li class="menu-item"><a href="blog-3-columns-with-frame.html">Blog 3 Columns With Frame</a></li>
                                                <li class="menu-item"><a href="blog-4-columns-with-frame.html">Blog 4 Columns With Frame</a></li>
                                                <li class="menu-item"><a href="blog-2-columns.html">Blog 2 Columns</a></li>
                                                <li class="menu-item"><a href="blog-3-columns.html">Blog 3 Columns</a></li>
                                                <li class="menu-item"><a href="blog-4-columns.html">Blog 4 Columns</a></li>
                                                <li class="menu-item"><a href="blog-3-columns-with-frame-post-format.html">Blog Columns With Post Format</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item" data-size="60"><a href="standard-post-type.html">Single Posts</a></li>
                                    </ul>
                                </li>  -->
                            </ul>
                            <div class="mediz-navigation-slide-bar  mediz-navigation-slide-bar-style-2" data-size-offset="0" id="mediz-navigation-slide-bar"></div>
                        </div>
                        <div class="mediz-main-menu-right-wrap clearfix ">
                            <div class="mediz-main-menu-search" id="mediz-top-search"><i class="icon-magnifier"></i></div>
                            <div class="mediz-top-search-wrap">
                                <div class="mediz-top-search-close"></div>

                                <div class="mediz-top-search-row">
                                    <div class="mediz-top-search-cell">
                                        <form role="search" method="post" id="search-frm" class="search-form" action="{{ route('drugs') }}">
                                            @csrf
                                            <input type="text" class="search-field mediz-title-font" placeholder="Search name of drug..." value="" name="search-txt" id="drug-search">
                                            <div class="mediz-top-search-submit"><i class="fa fa-search"></i></div>
                                            <input type="submit" class="search-submit">
                                            <input type="hidden" name="drug_id" id="id_area">
                                            <div class="mediz-top-search-close"><i class="icon_close"></i></div>
                                            {{-- Suggestion Area --}}
                                            <table id="suggestions" class="table dt-responsive sugg-scroll" style="">
                                               
                                            </table>
                                            {{-- suggestion ends --}}
                                        </form>
                                    </div>
                                </div>

                            </div>

                            <div class="mediz-main-menu-search" id="mediz-top-search"><i class="fa fa-shopping-bag" data-toggle="modal" data-target="#exampleModalCenter"></i>
                                <span class="badge badge-pill badge-danger">{{ $cartCount }}</span>
                            </div>

                            <a class="mediz-main-menu-right-button mediz-button-1 mediz-style-round" href="{{ route('contact-us') }}" target="_self">Contact Now</a>
                        </div>
                    </div>
                    <!-- mediz-navigation -->

                </div>
                <!-- mediz-header-container -->
            </div>
            <!-- mediz-navigation-bar-wrap -->

            @yield('content')

    <footer>
                <div class="mediz-footer-wrapper ">
                    <div class="mediz-footer-container mediz-container clearfix">
                        <div class="mediz-footer-column mediz-item-pdlr mediz-column-15">
                            <div id="text-1" class="widget widget_text mediz-widget">
                                <div class="textwidget">
                                    <p><img class="alignnone size-full wp-image-6129" src="{{ asset('assets/frontend/upload/logo-1.png') }}" alt="" width="170" />
                                        <br />
                                        <span class="gdlr-core-space-shortcode" style="margin-top: -27px ;"></span>
                                        <br /> Neighbourhood Shopping Complex,
                                        <br /> Area 3, Garki - Abuja
                                        <br /> 
                                        <br />D'Preferred Plaza Esa Akpan Road by RCC Road,
                                        <br />Eket LGA, Akwa Ibom State
                                        <br />
                                        <span class="gdlr-core-space-shortcode" style="margin-top: 0px ;"></span>
                                        <br />
                                        <i class="icon-phone" style="font-size: 19px ;color: #17449E ;margin-right: 10px ;"></i><span style="color: #17449e;">07016669930</span>
                                        <br />
                                        <span class="gdlr-core-space-shortcode" style="margin-top: -15px ;"></span>
                                        <br />
                                        <i class="icon-envelope" style="font-size: 19px ;color: #17449E ;margin-right: 10px ;"></i><a href="mailto:dpreferredpharmacyltd@gmail.com" style="color: #17449E;"><span class="__cf_email__">dpreferredpharmacyltd@gmail.com</span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="mediz-footer-column mediz-item-pdlr mediz-column-15">
                            <div id="nav_menu-3" class="widget widget_nav_menu mediz-widget">
                                <h3 class="mediz-widget-title">Quick Links</h3><span class="clear"></span>
                                <div class="menu-about-us-container">
                                    <ul id="menu-about-us" class="menu">
                                        {{-- <li class="menu-item"><a href="know-your-drugs.html">Know Your Drugs</a></li> --}}
                                        <li class="menu-item"><a href="#newsletter-section">Subscribe to Newsletter</a></li>
                                        <li class="menu-item"><a href="{{ route('about') }}">About Us</a></li>
                                        <li class="menu-item"><a href="#our-team-section">Our Team</a></li>
                                        <li class="menu-item"><a href="#gdlr-core-column-25407">Make an Appointment</a></li>
                                        <li class="menu-item"><a href="{{asset('assets/frontend/DEEPEE-PHARMACY-CoC.pdf')}}" download>Code of Conduct</a></li>
                                        <!-- <li class="menu-item"><a href="#">Policies &#038; Procedures</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mediz-footer-column mediz-item-pdlr mediz-column-15">
                            <div id="nav_menu-2" class="widget widget_nav_menu mediz-widget">
                                <h3 class="mediz-widget-title">Our Services</h3><span class="clear"></span>
                                <div class="menu-our-services-container">
                                    <ul id="menu-our-services" class="menu">
                                        <li class="menu-item"><a href="{{ route('services') }}">24/7 Home Delivery</a></li>
                                        <li class="menu-item"><a href="{{ route('services') }}">Pharmacy-on-the-wheel</a></li>
                                        <li class="menu-item"><a href="{{ route('services') }}">Drug info. & Mgt.</a></li>
                                        <li class="menu-item"><a href="{{ route('services') }}">Pharm. Rep. & Feedback</a></li>
                                        <li class="menu-item"><a href="{{ route('services') }}">First Aid</a></li>
                                        <li class="menu-item"><a href="{{ route('services') }}">Health & Lifestyle Mgt.</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mediz-footer-column mediz-item-pdlr mediz-column-15">
                            <div id="gdlr-core-opening-hour-widget-3" class="widget widget_gdlr-core-opening-hour-widget mediz-widget">
                                <h3 class="mediz-widget-title">Opening Hours</h3><span class="clear"></span>
                                <div class="gdlr-core-opening-hour-widget" style="color: #17449e ;">
                                    <div class="gdlr-core-opening-hour-widget-list clearfix"><span class="gdlr-core-head"><i class="icon-clock" ></i>Monday - Friday</span><span class="gdlr-core-tail">24 Hrs</span></div>
                                    <div class="gdlr-core-opening-hour-widget-list clearfix"><span class="gdlr-core-head"><i class="icon-clock" ></i>Saturday</span><span class="gdlr-core-tail">24 Hrs</span></div>
                                    <div class="gdlr-core-opening-hour-widget-list clearfix"><span class="gdlr-core-head"><i class="icon-clock" ></i>Sunday</span><span class="gdlr-core-tail">24 Hrs</span></div>
                                </div>
                            </div>
                            <div id="text-9" class="widget widget_text mediz-widget">
                                <div class="textwidget">
                                    <p><span class="gdlr-core-space-shortcode" style="margin-top: -23px ;"></span><a class="gdlr-core-button gdlr-core-button-shortcode  gdlr-core-button-solid gdlr-core-button-no-border" href="contact.html" target="_blank" style="box-shadow: 0px 0px 30px rgba(0, 0, 0,0.1); -moz-box-shadow: 0px 0px 30px rgba(0, 0, 0,0.1); -webkit-box-shadow: 0px 0px 30px rgba(0, 0, 0,0.1); font-size: 16px ;font-weight: 700 ;letter-spacing: 0px ;color: #17449E ;padding: 14px 50px 17px 50px;text-transform: none ;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;background: #ffffff ;" rel="noopener noreferrer"><span class="gdlr-core-content" >Emergency : 24 hours</span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mediz-copyright-wrapper">
                    <div class="mediz-copyright-container mediz-container clearfix">
                        <div class="mediz-copyright-left mediz-item-pdlr">
                            <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" style="padding-bottom: 0px ;"><a href="#url" target="_blank" class="gdlr-core-social-network-icon" title="facebook" style="font-size: 17px ;color: #17449E ;"><i class="fa fa-facebook" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="linkedin" style="font-size: 17px ;color: #17449E ;"><i class="fa fa-linkedin" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="skype" style="font-size: 17px ;color: #17449E ;"><i class="fa fa-skype" ></i></a><a href="#url" target="_blank" class="gdlr-core-social-network-icon" title="twitter" style="font-size: 17px ;color: #17449E ;"><i class="fa fa-twitter" ></i></a></div>
                        </div>
                        <div class="mediz-copyright-right mediz-item-pdlr">Copyright 2021 Deepee Pharmacy & Stores Ltd. All Right Reserved</div>
                        <span class="mediz-item-pdlr">
                            Made with <i class="fa fa-heart pulse" style="color: red;"></i> by <a href="#" target="_blank">Wingphix DC</a>
                        </span>
                    </div>
                </div>
            </footer>
        </div>
    </div>



    <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle" style="color: #17449e;">Order Summary</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body scroll-bar cart-card">
                    <div class="row">
                    @if (\Cart::isEmpty())
                         <p class="badge badge-pill badge-warning no-item" style="text-align: center; margin: 0 auto;">Your shopping cart is empty.</p>
                    @else
                        <div class="col-md-12">
                            <div class="card border-0">
                                <div class="card-header pb-0" style="background-color: #fff;
                                border-bottom: 0px solid #aaa !important">
                                    <h4 class="card-title space ">Product Details</h4>
                                    <hr class="my-0">
                                </div>
                                <div class="card-body ">
                                    <div class="row cart-items">
                                        @foreach(\Cart::getContent() as $item)
                                            <div class="col-auto mt-0">
                                                <button type="button" class="btn btn-md btn-info item-btn">
                                                    {{ $item->name }} <small>({{ $item->quantity }})</small>
                                                    <a href="" data-toggle="tooltip" title="Remove {{ $item->name }}" style="font-size: 11px; color: red;" class="rem-item" data-id="{{ $item->id }}">
                                                        <i class="fa fa-times-circle close-item" aria-hidden="true"></i></a>
                                                </button>
                                            </div>
                                             
                                           {{--  <div class="">
                                               
                                            </div> --}}
                                        @endforeach
                                    </div>
                                    <hr>
                                    <div class="row mt-4">
                                        <div class="col">
                                            <h4>Total: <span class="badge badge-pill badge-success">&#8358;{{ number_format(\Cart::getSubTotal()) }}</span> </h4>
                                            <hr class="mt-0">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mt-4">
                                        <div class="col">
                                            <h4 >Customer Details</h4>
                                            <hr class="mt-0">
                                        </div>
                                    </div>
                                    <form action="" method="post" id="buyer-order-frm">
                                        @csrf
                                        <div class="form-group"> <label for="NAME" class="small text-muted mb-1">FULL NAME</label> <input type="text" class="form-control form-control-sm" name="first_name" id="NAME" aria-describedby="helpId" placeholder="First and Last Name"> </div>
                                        <div class="form-group"> <label for="EMAIL" class="small text-muted mb-1">EMAIL ADDRESS</label> <input type="text" class="form-control form-control-sm" name="email" id="EMAIL" aria-describedby="EMAIL" placeholder="example@example.com"> </div>
                                        <div class="form-group"> <label for="phone" class="small text-muted mb-1">PHONE NUMBER</label> <input type="tel" class="form-control form-control-sm" name="phone" id="PHONE" aria-describedby="helpId" placeholder="08050000000"> </div>
                                        <div class="form-group"> <label for="phone" class="small text-muted mb-1">ADDRESS</label> <input type="tel" class="form-control form-control-sm" name="address" id="ADDRESS" aria-describedby="helpId" placeholder="No 30, That Street, Somewhere"> </div>
                                        <input type="hidden" name="amount" value="{{ \Cart::getSubTotal()*100 }}">
                                        <input type="hidden" name="currency" value="NGN">
                                        <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                                        <input type="hidden" name="metadata" id="paystack-meta">
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer cart-options">
                            <button type="button" class="btn" style="background: #359b49; color: #fff;" id="on-delv">Pay on Delivery</button>
                            <button type="button" class="btn" style="background: #17449e; color: #fff;" id="paystack">Card Payment</button>
                            <button class="btn btn-md btn-danger" onclick="window.location.href='{{ route('clear') }}'">Clear Cart</button>
                        </div>
                        {{-- <a href="{{ route('clear') }}" style="font-weight: bold;">Clear cart</a> --}}
                    @endif
                  </div>
                </div>
              </div>
            </div>



    <script type='text/javascript' src='{{ asset('assets/frontend/js/jquery/jquery.js') }}'></script>
    <script type='text/javascript' src='{{ asset('assets/frontend/js/jquery/jquery-migrate.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('assets/frontend/plugins/revslider/public/assets/js/revolution.tools.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('assets/frontend/plugins/revslider/public/assets/js/rs6.min.js') }}'></script>

    <style type="text/css">
        .swal-modal .swal-text {
            text-align: center !important;
        }

        .swal-text {
            text-align: center !important;
        }
    </style>


    <script type="text/javascript">
        function setREVStartSize(t) {
            try {
                var h, e = document.getElementById(t.c).parentNode.offsetWidth;
                if (e = 0 === e || isNaN(e) ? window.innerWidth : e, t.tabw = void 0 === t.tabw ? 0 : parseInt(t.tabw), t.thumbw = void 0 === t.thumbw ? 0 : parseInt(t.thumbw), t.tabh = void 0 === t.tabh ? 0 : parseInt(t.tabh), t.thumbh = void 0 === t.thumbh ? 0 : parseInt(t.thumbh), t.tabhide = void 0 === t.tabhide ? 0 : parseInt(t.tabhide), t.thumbhide = void 0 === t.thumbhide ? 0 : parseInt(t.thumbhide), t.mh = void 0 === t.mh || "" == t.mh || "auto" === t.mh ? 0 : parseInt(t.mh, 0), "fullscreen" === t.layout || "fullscreen" === t.l) h = Math.max(t.mh, window.innerHeight);
                else {
                    for (var i in t.gw = Array.isArray(t.gw) ? t.gw : [t.gw], t.rl) void 0 !== t.gw[i] && 0 !== t.gw[i] || (t.gw[i] = t.gw[i - 1]);
                    for (var i in t.gh = void 0 === t.el || "" === t.el || Array.isArray(t.el) && 0 == t.el.length ? t.gh : t.el, t.gh = Array.isArray(t.gh) ? t.gh : [t.gh], t.rl) void 0 !== t.gh[i] && 0 !== t.gh[i] || (t.gh[i] = t.gh[i - 1]);
                    var r, a = new Array(t.rl.length),
                        n = 0;
                    for (var i in t.tabw = t.tabhide >= e ? 0 : t.tabw, t.thumbw = t.thumbhide >= e ? 0 : t.thumbw, t.tabh = t.tabhide >= e ? 0 : t.tabh, t.thumbh = t.thumbhide >= e ? 0 : t.thumbh, t.rl) a[i] = t.rl[i] < window.innerWidth ? 0 : t.rl[i];
                    for (var i in r = a[0], a) r > a[i] && 0 < a[i] && (r = a[i], n = i);
                    var d = e > t.gw[n] + t.tabw + t.thumbw ? 1 : (e - (t.tabw + t.thumbw)) / t.gw[n];
                    h = t.gh[n] * d + (t.tabh + t.thumbh)
                }
                void 0 === window.rs_init_css && (window.rs_init_css = document.head.appendChild(document.createElement("style"))), document.getElementById(t.c).height = h, window.rs_init_css.innerHTML += "#" + t.c + "_wrapper { height: " + h + "px }"
            } catch (t) {
                console.log("Failure at Presize of Slider:" + t)
            }
        };
    </script>
    <script type="text/javascript">
        if (typeof revslider_showDoubleJqueryError === "undefined") {
            function revslider_showDoubleJqueryError(sliderID) {
                var err = "<div class='rs_error_message_box'>";
                err += "<div class='rs_error_message_oops'>Oops...</div>";
                err += "<div class='rs_error_message_content'>";
                err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
                err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
                err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
                err += "</div>";
                err += "</div>";
                jQuery(sliderID).show().html(err);
            }
        }
    </script>
    <script type='text/javascript' src='{{ asset('assets/frontend/plugins/goodlayers-core/plugins/script.js') }}'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var gdlr_core_pbf = {
            "admin": "",
            "video": {
                "width": "640",
                "height": "360"
            },
            "ajax_url": "#"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset('assets/frontend/plugins/goodlayers-core/include/js/page-builder.js') }}'></script>
    <script type='text/javascript' src='{{ asset('assets/frontend/plugins/zeno-font-resizer/js/js.cookie.js') }}'></script>
    <script type='text/javascript' src='{{ asset('assets/frontend/plugins/zeno-font-resizer/js/jquery.fontsize.js') }}'></script>
    <script type='text/javascript' src='{{ asset('assets/frontend/plugins/google-map-plugin/assets/js/maps.js') }}'></script>
    <script type='text/javascript' src='{{ asset('assets/frontend/js/jquery/ui/effect.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('assets/frontend/js/jquery.mmenu.js') }}'></script>
    <script type='text/javascript' src='{{ asset('assets/frontend/js/jquery.superfish.js') }}'></script>
    <script type='text/javascript' src='{{ asset('assets/frontend/js/plugins.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('assets/js/bootstrap.min.js') }}'></script>
    <script src="{{ asset('assets/js/sweetalert.min.js')}}"></script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>
    <script type="text/javascript">
        setREVStartSize({
            c: 'rev_slider_2_1',
            rl: [1240, 1240, 1240, 480],
            el: [700, 700, 700, 500],
            gw: [1280, 1280, 1280, 480],
            gh: [700, 700, 700, 500],
            layout: 'fullwidth',
            mh: "0"
        });
        var revapi2,
            tpj;
        jQuery(function() {
            tpj = jQuery;
            if (tpj("#rev_slider_2_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_2_1");
            } else {
                revapi2 = tpj("#rev_slider_2_1").show().revolution({
                    jsFileLocation: "{{ asset('assets/frontend/plugins/revslider/public/assets/js/') }}",
                    sliderLayout: "fullwidth",
                    visibilityLevels: "1240,1240,1240,480",
                    gridwidth: "1280,1280,1280,480",
                    gridheight: "700,700,700,500",
                    minHeight: "",
                    editorheight: "700,768,960,500",
                    responsiveLevels: "1240,1240,1240,480",
                    disableProgressBar: "on",
                    navigation: {
                        onHoverStop: false,
                        touch: {
                            touchenabled: true
                        },
                        arrows: {
                            enable: true,
                            style: "uranus",
                            hide_onmobile: true,
                            hide_under: "415px",
                            hide_onleave: true,
                            left: {
                                h_offset: 30
                            },
                            right: {
                                h_offset: 30
                            }
                        },
                        bullets: {
                            enable: true,
                            tmp: "<span class=\"tp-bullet-inner\"></span>",
                            style: "uranus",
                            hide_over: "416px",
                            v_offset: 37,
                            space: 6
                        }
                    },
                    fallbacks: {
                        allowHTML5AutoPlayOnAndroid: true
                    },
                });
            }

        });
    </script>
    <script>
        var htmlDivCss = unescape("%40media%20only%20screen%20and%20%28max-width%3A%20767px%29%7B%0Ars-sbg%20%7B%0A%20%20%20%20opacity%3A%200.4%20%21important%3B%0A%09filter%3A%20alpha%28opacity%3D40%29%20%21important%3B%0A%7D%0A%7D");
        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement('div');
            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
    <script>
        var htmlDivCss = unescape("%23rev_slider_2_1_wrapper%20.uranus.tparrows%20%7B%0A%20%20width%3A50px%3B%0A%20%20height%3A50px%3B%0A%20%20background%3Argba%28255%2C255%2C255%2C0%29%3B%0A%20%7D%0A%20%23rev_slider_2_1_wrapper%20.uranus.tparrows%3Abefore%20%7B%0A%20width%3A50px%3B%0A%20height%3A50px%3B%0A%20line-height%3A50px%3B%0A%20font-size%3A40px%3B%0A%20transition%3Aall%200.3s%3B%0A-webkit-transition%3Aall%200.3s%3B%0A%20%7D%0A%20%0A%20%20%23rev_slider_2_1_wrapper%20.uranus.tparrows%3Ahover%3Abefore%20%7B%0A%20%20%20%20opacity%3A0.75%3B%0A%20%20%7D%0A%23rev_slider_2_1_wrapper%20.uranus%20.tp-bullet%7B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20box-shadow%3A%200%200%200%202px%20rgba%28255%2C255%2C255%2C0%29%3B%0A%20%20-webkit-transition%3A%20box-shadow%200.3s%20ease%3B%0A%20%20transition%3A%20box-shadow%200.3s%20ease%3B%0A%20%20background%3Atransparent%3B%0A%20%20width%3A15px%3B%0A%20%20height%3A15px%3B%0A%7D%0A%23rev_slider_2_1_wrapper%20.uranus%20.tp-bullet.selected%2C%0A%23rev_slider_2_1_wrapper%20.uranus%20.tp-bullet%3Ahover%20%7B%0A%20%20box-shadow%3A%200%200%200%202px%20rgba%28255%2C255%2C255%2C1%29%3B%0A%20%20border%3Anone%3B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20background%3Atransparent%3B%0A%7D%0A%0A%23rev_slider_2_1_wrapper%20.uranus%20.tp-bullet-inner%20%7B%0A%20%20-webkit-transition%3A%20background-color%200.3s%20ease%2C%20-webkit-transform%200.3s%20ease%3B%0A%20%20transition%3A%20background-color%200.3s%20ease%2C%20transform%200.3s%20ease%3B%0A%20%20top%3A%200%3B%0A%20%20left%3A%200%3B%0A%20%20width%3A%20100%25%3B%0A%20%20height%3A%20100%25%3B%0A%20%20outline%3A%20none%3B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20background-color%3A%20rgba%28255%2C255%2C255%2C0%29%3B%0A%20%20background-color%3A%20rgba%28255%2C255%2C255%2C0.3%29%3B%0A%20%20text-indent%3A%20-999em%3B%0A%20%20cursor%3A%20pointer%3B%0A%20%20position%3A%20absolute%3B%0A%7D%0A%0A%23rev_slider_2_1_wrapper%20.uranus%20.tp-bullet.selected%20.tp-bullet-inner%2C%0A%23rev_slider_2_1_wrapper%20.uranus%20.tp-bullet%3Ahover%20.tp-bullet-inner%7B%0A%20transform%3A%20scale%280.4%29%3B%0A%20-webkit-transform%3A%20scale%280.4%29%3B%0A%20background-color%3Argba%28255%2C255%2C255%2C1%29%3B%0A%7D%0A");
        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement('div');
            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
    <script>
        var htmlDivCss = unescape("%0A%0A%0A%0A");
        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement('div');
            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
</body>
</html>