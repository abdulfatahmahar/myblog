@extends('layout.main')
@section('single-portfolio-page')

        <!-- start portfolio details Section -->
        <section>
            <div class="container">
                <div class="row">

                    <!--  start portfolio left-->
                    <div class="col-lg-8 col-md-12 sm-margin-50px-bottom">
                        <div>
                            <img src="{{ url('style/img/portfolio/portfolio1.jpg')}}" class="margin-30px-bottom" alt="...">
                            <span class="font-size14">Fashion</span>
                            <h5 class="font-size24">Nutrition Chocolate</h5>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                            <div class="row margin-30px-bottom">
                                <div class="col-md-4 xs-margin-20px-bottom">
                                    <img src="{{ url('style/img/portfolio/portfolio2.jpg')}}" alt="..." />
                                </div>
                                <div class="col-md-4">
                                    <img src="{{ url('style/img/portfolio/portfolio3.jpg')}}" alt="..." />
                                </div>
                                <div class="col-md-4 xs-display-none">
                                    <img src="{{ url('style/img/portfolio/portfolio4.jpg')}}" alt="..." />
                                </div>
                            </div>
                            <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                            <p>Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <div class="border-top padding-20px-top">
                                <div class="d-flex align-items-center justify-content-center">
                                    <label class="font-weight-bold mr-3 mb-0">Share this:</label>
                                    <ul class="social-links mb-0">
                                        <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  end portfolio left-->

                    <!--  start portfolio right-->
                    <div class="col-lg-4 col-md-12">
                        <div class="side-bar padding-30px-left md-no-padding-left">
                            <div class="widget search padding-30px-all md-padding-20px-all shadow-theme">
                                <div class="widget-title margin-35px-bottom">
                                    <h3>Search</h3>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Type here..." aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button" id="button-addon2"><span class="ti-search"></span></button>
                                    </div>
                                </div>
                            </div>

                            <div class="widget padding-30px-all md-padding-20px-all shadow-theme">
                                <div class="widget-title margin-35px-bottom">
                                    <h3>Categories</h3>
                                </div>
                                <ul class="widget-list no-margin-bottom">
                                    <li>
                                        <a href="#">Entertainment
                                        </a>

                                    </li>
                                    <li>
                                        <a href="#">Business 
                                        </a>

                                    </li>
                                    <li>
                                        <a href="#">Adventure
                                        </a>

                                    </li>
                                    <li>
                                        <a href="#">Decorating
                                        </a>

                                    </li>
                                    <li>
                                        <a href="#">Travelling
                                        </a>

                                    </li>
                                    <li>
                                        <a href="#">Shopping
                                        </a>

                                    </li>
                                </ul>
                            </div>

                            <div class="widget padding-30px-all md-padding-20px-all shadow-theme">
                                <div class="widget-title margin-35px-bottom">
                                    <h3>Recent Posts</h3>
                                </div>
                                <div class="media margin-20px-bottom">
                                    <img src="{{ url('style/img/blog/blog-6.jpg')}}" class="mr-4" alt="" />
                                    <div class="media-body">
                                        <h5 class="no-margin-top margin-5px-bottom font-size15 font-weight-500"><a href="#" class="text-extra-dark-gray">She is known for playing</a></h5>
                                        <span class="font-size14">20 Mar, 2020</span>
                                    </div>
                                </div>
                                <div class="media margin-20px-bottom">
                                    <img src="{{ url('style/img/blog/blog-7.jpg')}}" class="mr-4" alt="" />
                                    <div class="media-body">
                                        <h5 class="no-margin-top margin-5px-bottom font-size15 font-weight-500"><a href="#" class="text-extra-dark-gray">Craft a life you love</a></h5>
                                        <span class="font-size14">12 Mar, 2020</span>
                                    </div>
                                </div>
                                <div class="media margin-20px-bottom">
                                    <img src="{{ url('style/img/blog/blog-8.jpg')}}" class="mr-4" alt="" />
                                    <div class="media-body">
                                        <h5 class="no-margin-top margin-5px-bottom font-size15 font-weight-500"><a href="#" class="text-extra-dark-gray">Wonderland of ice place</a></h5>
                                        <span class="font-size14">17 Feb, 2020</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <img src="{{ url('style/img/blog/blog-5.jpg')}}" class="mr-4" alt="" />
                                    <div class="media-body">
                                        <h5 class="no-margin-top margin-5px-bottom font-size15 font-weight-500"><a href="#" class="text-extra-dark-gray">Publish your passions</a></h5>
                                        <span class="font-size14">12 Jan, 2020</span>
                                    </div>
                                </div>
                            </div>

                            <div class="widget padding-30px-all md-padding-20px-all shadow-theme">
                                <div class="widget-title margin-35px-bottom">
                                    <h3>Tags</h3>
                                </div>
                                <ul class="tags no-margin-bottom">
                                    <li><a href="jvascript:void(0)">Lifestyle</a></li>
                                    <li><a href="jvascript:void(0)">Food</a></li>
                                    <li><a href="jvascript:void(0)">Kids</a></li>
                                    <li><a href="jvascript:void(0)">Fashion</a></li>
                                    <li><a href="jvascript:void(0)">Travel</a></li>
                                    <li><a href="jvascript:void(0)">DIY</a></li>
                                    <li><a href="jvascript:void(0)">Music</a></li>
                                    <li><a href="jvascript:void(0)">Crafts</a></li>
                                    <li><a href="jvascript:void(0)">Business</a></li>
                                    <li><a href="jvascript:void(0)">Career</a></li>
                                </ul>
                            </div>

                            <div class="widget padding-30px-all md-padding-20px-all shadow-theme">
                                <div class="widget-title margin-35px-bottom">
                                    <h3>Instagram</h3>
                                </div>
                                <ul class="insta-link text-center no-margin-bottom">
                                    <li>
                                        <a href="#"><img src="{{ url('style/img/blog/insta-1.jpg')}}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{ url('style/img/blog/insta-2.jpg')}}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{ url('style/img/blog/insta-3.jpg')}}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{ url('style/img/blog/insta-4.jpg')}}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{ url('style/img/blog/insta-5.jpg')}}" alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{ url('style/img/blog/insta-6.jpg')}}" alt=""></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="widget padding-30px-all md-padding-20px-all shadow-theme">
                                <div class="widget-title margin-35px-bottom">
                                    <h3>Follow us</h3>
                                </div>
                                <div class="bg-light padding-20px-all">
                                    <ul class="social-links no-margin text-center">
                                        <li>
                                            <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)"><i class="fab fa-dribbble"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="widget">
                                <div class="bg-img text-center padding-30px-all cover-background" data-overlay-dark="5" data-background="{{ url('style/img/content/testimonial.jpg')}}">
                                    <div class="owl-carousel owl-theme" id="testmonials-carousel">
                                        <div>
                                            <i class="fas fa-quote-left font-size24 text-white margin-30px-bottom"></i>
                                            <p class="text-white">Stotam rem aperiam, eaquelim ipsa quae ab illo inventore veritatis et architecto.</p>
                                            <h6 class="no-margin-bottom text-white font-size18 font-weight-400">- John Mariya</h6>
                                        </div>
                                        <div>
                                            <i class="fas fa-quote-left font-size24 text-white margin-30px-bottom"></i>
                                            <p class="text-white">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit onsequuntur.</p>
                                            <h6 class="no-margin-bottom text-white font-size18 font-weight-400">- Maria Parker</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--  end portfolio right-->

                </div>
            </div>
        </section>
        <!-- end portfolio details section -->

        <!-- start portfolio section -->
        <section class="no-padding">
            <div class="container-fluid no-padding">
                <div class="owl-carousel owl-theme" id="portfolio-carousel">
                    <div class="insta-photo">
                        <a href="#">
                            <img src="{{ url('style/img/portfolio/1.jpg')}}" alt="" />
                        </a>
                        <div class="overlay"></div>
                    </div>
                    <div class="insta-photo">
                        <a href="#">
                            <img src="{{ url('style/img/portfolio/2.jpg')}}" alt="" />
                        </a>
                        <div class="overlay"></div>
                    </div>
                    <div class="insta-photo">
                        <a href="#">
                            <img src="{{ url('style/img/portfolio/3.jpg')}}" alt="" />
                        </a>
                        <div class="overlay"></div>
                    </div>
                    <div class="insta-photo">
                        <a href="#">
                            <img src="{{ url('style/img/portfolio/4.jpg')}}" alt="" />
                        </a>
                        <div class="overlay"></div>
                    </div>
                    <div class="insta-photo">
                        <a href="#">
                            <img src="{{ url('style/img/portfolio/5.jpg')}}" alt="" />
                        </a>
                        <div class="overlay"></div>
                    </div>
                    <div class="insta-photo">
                        <a href="#">
                            <img src="{{ url('style/img/portfolio/6.jpg')}}" alt="" />
                        </a>
                        <div class="overlay"></div>
                    </div>
                    <div class="insta-photo">
                        <a href="#">
                            <img src="{{ url('style/img/portfolio/7.jpg')}}" alt="" />
                        </a>
                        <div class="overlay"></div>
                    </div>
                    <div class="insta-photo">
                        <a href="#">
                            <img src="{{ url('style/img/portfolio/8.jpg')}}" alt="" />
                        </a>
                        <div class="overlay"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end portfolio section -->
        @endsection