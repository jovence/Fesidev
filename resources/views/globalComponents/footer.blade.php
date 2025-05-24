<!-- main-footer -->
<section class="main-footer mt-3">
    <div class="footer-top-two">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget about-widget">
                        <div class="widget-title">
                            <h3>About CMFI</h3>
                        </div>
                        <div class="widget-content">
                            <p>Christian Missionary Fellowship International (CMFI) was founded by Professor Zacharias Tanee Fomum (ZTF), dedicated to raising disciples who are totally committed to the Lord Jesus Christ.</p>
                            <div class="inner">
                                <div class="icon-box"><i class="icon-charity"></i></div>
                                <p>&copy; 2025 <a href="{{ route('home') }}">CMFI Fesidev,</a> All Rights Reserved.</p>
                            </div>
                            <div class="links">
                                <a href=""><i class="far fa-angle-right"></i>More About CMFI</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget">
                        <div class="widget-title">
                            <h3>Quick Links</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="">About CMFI</a></li>
                                <li><a href="">Join Our Ministry</a></li>
                                <li><a href="">Prayer Chains & Events</a></li>
                                <li><a href="https://ztfbooks.com" target="_blank">ZTF Books</a></li>
                                <li><a href="">Our Mission Work</a></li>
                                <li><a href="">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget post-widget">
                        <div class="widget-title">
                            <h3>Recent Publications</h3>
                        </div>
                        <div class="post-inner">
                            <div class="post">
                                <figure class="post-thumb">
                                    <a href="https://ztfbooks.com"><img src="{{ asset('assets/images/ztf/book1.jpg') }}" alt="ZTF Book"></a>
                                </figure>
                                <h4><a href="https://ztfbooks.com">The Way of Discipleship</a></h4>
                                <span>By Prof. ZTF</span>
                            </div>
                            <div class="post">
                                <figure class="post-thumb">
                                    <a href="https://ztfbooks.com"><img src="{{ asset('assets/images/ztf/book2.jpg') }}" alt="ZTF Book"></a>
                                </figure>
                                <h4><a href="https://ztfbooks.com">The Way of Christian Service</a></h4>
                                <span>By Prof. ZTF</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget gallery-widget">
                        <div class="widget-title">
                            <h3>Ministry Gallery</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="image-list clearfix">
                                @foreach($ministryImages ?? [] as $image)
                                <li>
                                    <figure class="image">
                                        <img src="{{ asset('assets/images/ministry/' . $image) }}" alt="CMFI Ministry">
                                        <a href="{{ asset('assets/images/ministry/' . $image) }}" data-fancybox="gallery">
                                            <i class="fas fa-expand-alt"></i>
                                        </a>
                                    </figure>
                                </li>
                                @endforeach
                            </ul>
                            <div class="more-links">
                                <a href=""><i class="far fa-angle-right"></i>View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-two">
        <div class="auto-container">
            <ul class="social-links clearfix">
                <li><a href="https://www.facebook.com/cmfi.official" target="_blank"><i class="fab fa-facebook-square"></i>Facebook</a></li>
                <li><a href="https://www.youtube.com/c/cmfimedia" target="_blank"><i class="fab fa-youtube"></i>YouTube</a></li>
                <li><a href="https://www.ztfbooks.com" target="_blank"><i class="fas fa-book"></i>ZTF Books</a></li>
                <li><a href="https://www.cmfi.net" target="_blank"><i class="fas fa-globe"></i>Official Website</a></li>
            </ul>
        </div>
    </div>
</section>
<!-- main-footer end -->
