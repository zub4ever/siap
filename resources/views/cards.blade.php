@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Cards
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card_with_image">
                <div class="blog_card_image">
                    <a href="javascript:void(0);">
                        <img src="{{asset('assets/images/blog-listing/03.jpg')}}" alt="" class="img-responsive ">
                    </a>
                </div>
                <div class="rt_post_data">
                    <div class="blog_card_date">
                        <h3>25</h3>
                        <p>APR</p>
                        <div class="blog_chat_icon">
                            <ul>
                                <li>
                                    <i class="icon-chat"></i>
                                    <span>5</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog_card_description">
                        <div class="blog_data">
                            <h3>There are many variations of passages of Lorem</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standardbook.</p>
                            <a href="javascript:void(0)" class="btn btn-primary">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card_with_image">
                <div class="blog_card_image">
                    <a href="javascript:void(0);">
                        <img src="{{asset('assets/images/blog-listing/04.jpg')}}" alt="" class="img-responsive ">
                    </a>
                </div>
                <div class="rt_post_data">
                    <div class="blog_card_date">
                        <h3>25</h3>
                        <p>APR</p>
                        <div class="blog_chat_icon">
                            <ul>
                                <li>
                                    <i class="icon-chat"></i>
                                    <span>5</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog_card_description">
                        <div class="blog_data">
                            <h3>There are many variations of passages of Lorem</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standardbook.</p>
                            <a href="javascript:void(0)" class="btn btn-primary">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row grid-masonry">
        <!--=== Card Item ===-->
        <div class="col-md-4 mb-4 col-sm-12 grid-item">
            <div class="image_card">
                <div class="card_img_hover">
                    <div class="card_info">
                        <svg class="card_clock"  viewBox="0 0 24 24"><path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                        </svg><span class="card_date">15 - Dec</span>
                    </div>

                </div>
                <div class="card_img" style="background-image: url('{{asset('assets/images/blog/post-1.jpg')}}')"></div>
                <a href="#" class="card_link">
                    <div class="card_img_hover_sec" style="background-image: url('{{asset('assets/images/blog/post-1.jpg')}}')"></div>
                </a>
                <div class="card__info">
                    <h3 class="card_title">Crisp Spanish tortilla Matzo brei</h3>
                    <span class="card_by">by <a href="#" class="card_author" title="author">Celeste Mills</a></span>
                </div>
            </div>
        </div>
        <!--=== End Card Item ===-->
        <!--=== Card Item ===-->
        <div class="col-md-4 mb-4 col-sm-12 grid-item">
            <div class="team_member">
                <img src="{{asset('assets/images/team/member1.jpg')}}" alt="Team Member">
                <div class="member_name">
                    <h3>JHON DOE</h3>
                    <span>CEO/Founder</span>
                </div>
                <p>It is a long established fact that a reader will be distracted by the readable content distracted by the readable content.</p>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
        <!--=== End Card Item ===-->
        <!--=== Card Item ===-->
        <div class="col-md-4 mb-4 col-sm-12 grid-item">
            <figure class="article_card">
                <div class="image"><img src="{{asset('assets/images/blog-listing/04.jpg')}}" alt="Post Image" /></div>
                <figcaption>
                    <h5>Food</h5>
                    <h3>
                        <a href="javascript:void(0)">
                            Everything has beauty, but not everyone sees it
                        </a>
                    </h3>
                    <footer>
                        <div class="date">October 30, 2015</div>
                        <div class="icons">
                            <div class="views"><i class="ion-eye"></i>2,907</div>
                            <div class="love"><i class="ion-heart"></i>623</div>
                        </div>
                    </footer>
                </figcaption>
            </figure>
        </div>
        <!--=== End Card Item ===-->
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-6">
            <div class="card text-white bg-card-primary">
                <div class="card-body">
                    <h4 class="">Background Primary Card</h4>
                    <hr>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="javascript:void(0)" class="btn btn-light">
                        Learn More
                    </a>
                </div>
            </div>
            <div class="card text-white bg-card-secondary mt-3">
                <div class="card-body">
                    <h4 class="">Background Success Card</h4>
                    <hr>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title.</p>
                    <a href="javascript:void(0)" class="btn btn-light">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6 mt-mob-4">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-icon text-center">
                        <div class="card-body">
                            <i class="ti-download"></i>
                            <p>Total Downloads</p>
                            <span>670</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-mob-4">
                    <div class="card card-icon text-center">
                        <div class="card-body">
                            <i class="ti-shopping-cart-full"></i>
                            <p>Products Sold</p>
                            <span>9869</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-mob-4">
                    <div class="card card-icon text-center">
                        <div class="card-body">
                            <i class="ti-user"></i>
                            <p>Total users</p>
                            <span>4567</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card card-icon text-center">
                        <div class="card-body">
                            <i class="ti-image"></i>
                            <p>Total Images</p>
                            <span>4568</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card card-icon text-center">
                        <div class="card-body">
                            <i class="ti-stats-up"></i>
                            <p>Statics</p>
                            <span>9873</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card card-icon text-center">
                        <div class="card-body">
                            <i class="ti-cup"></i>
                            <p>Achievements</p>
                            <span>6543</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-4">
                    <div class="card card-icon text-center">
                        <div class="card-body">
                            <i class="ti-check-box"></i>
                            <p>Approvals</p>
                            <span>45676</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="card card-icon text-center">
                        <div class="card-body">
                            <i class="ti-server"></i>
                            <p>Space Left</p>
                            <span>4567</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
