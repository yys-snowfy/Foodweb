<?php
 include '../layout/heading.php';
 ?>

<section>
            <div class="block">
				<div class="fixed-bg" style="background-image: url(../assets/images/bgi.jpg); background-size: 100%;"></div>
                <div class="page-title-wrapper text-center">
					<div class="col-md-12 col-sm-12 col-lg-12">
						<div class="page-title-inner">
							<h1 itemprop="headline">Search Your Favourite Food</h1>
							<form class="restaurant-search-form brd-rd2">
								<div class="row mrg10">
									<div class="col-md-6 col-sm-5 col-lg-5 col-xs-12">
										<div class="input-field brd-rd2"><input class="brd-rd2" type="text" placeholder="Restaurant Name"></div>
									</div>
									<div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
										<div class="input-field brd-rd2"><i class="fa fa-map-marker"></i><input class="brd-rd2" type="text" placeholder="Search Location"><i class="fa fa-location-arrow"></i></div>
									</div>
									<div class="col-md-2 col-sm-3 col-lg-3 col-xs-12">
										<button class="brd-rd2 red-bg" type="submit">SEARCH</button>
									</div>
								</div>
							</form>
						</div>
					</div>
                </div>
            </div>
        </section>
        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../file/index.php" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Search</a></li>
                    <li class="breadcrumb-item active">Restaurants Found</li>
                </ol>
            </div>
        </div>
        <section>
            <div class="block gray-bg bottom-padd210 top-padd30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="sec-box">
                                <div class="sec-wrapper">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-12 col-lg-3">
                                            <div class="sidebar left">
                                                <div class="widget style2 Search_filters wow fadeIn" data-wow-delay="0.2s">
                                                    <h4 class="widget-title2 sudo-bg-red" itemprop="headline">Search Filters</h4>
                                                    <div class="widget-data">
                                                        <ul>
                                                            <li><a href="#" title="" itemprop="url">Fast Food</a> <span>30</span></li>
                                                            <li><a href="#" title="" itemprop="url">North Indian</a> <span>28</span></li>
                                                            <li><a href="#" title="" itemprop="url">Chinese</a> <span>25</span></li>
                                                            <li><a href="#" title="" itemprop="url">Bakery</a> <span>11</span></li>
                                                            <li><a href="#" title="" itemprop="url">Mughlai</a> <span>7</span></li>
                                                            <li><a href="#" title="" itemprop="url">Pizza</a> <span>6</span></li>
                                                            <li><a href="#" title="" itemprop="url">Ice Cream</a> <span>6</span></li>
                                                            <li><a href="#" title="" itemprop="url">Rolls</a> <span>6</span></li>
                                                            <li><a href="#" title="" itemprop="url">Cafe</a> <span>5</span></li>
                                                            <li><a href="#" title="" itemprop="url">Italian</a> <span>5</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="widget style2 quick_filters wow fadeIn" data-wow-delay="0.2s">
                                                    <h4 class="widget-title2 sudo-bg-red" itemprop="headline">Quick Filters</h4>
                                                    <div class="widget-data">
                                                        <ul>
                                                            <li><span class="radio-box"><input type="radio" name="filter" id="filt1-1"><label for="filt1-1">Promotions</label></span></li>
                                                            <li><span class="radio-box"><input type="radio" name="filter" id="filt1-2"><label for="filt1-2">Bookmarked</label></span></li>
                                                            <li><span class="radio-box"><input type="radio" name="filter" id="filt1-3"><label for="filt1-3">Pure veg</label></span></li>
                                                            <li><span class="radio-box"><input type="radio" name="filter" id="filt1-4"><label for="filt1-4">Free Delivery</label></span></li>
                                                            <li><span class="radio-box"><input type="radio" name="filter" id="filt1-5"><label for="filt1-5">Online Payments</label></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="widget style2 quick_filters wow fadeIn" data-wow-delay="0.2s">
                                                    <h4 class="widget-title2 sudo-bg-red" itemprop="headline">Quick Filters</h4>
                                                    <div class="widget-data">
                                                        <ul>
                                                            <li><span class="radio-box"><input type="radio" name="filter2" id="filt2-1"><label for="filt2-1">No minimum order 6</label></span></li>
                                                            <li><span class="radio-box"><input type="radio" name="filter2" id="filt2-2"><label for="filt2-2">Up to ₹150 69</label></span></li>
                                                            <li><span class="radio-box"><input type="radio" name="filter2" id="filt2-3"><label for="filt2-3">Up to ₹250 72</label></span></li>
                                                            <li><span class="radio-box"><input type="radio" name="filter2" id="filt2-4"><label for="filt2-4">Up to ₹500</label></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!--Sidebar -->
                                        </div>
                                        <div class="col-md-9 col-sm-12 col-lg-9">
                                            <div class="title2-wrapper">
                                                <h3 class="marginb-0" itemprop="headline">Order food online in London</h3>
                                            </div>
                                            <div class="remove-ext">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                        <div class="featured-restaurant-box with-bg style2 brd-rd12 wow fadeIn" data-wow-delay="0.2s">
                                                            <div class="featured-restaurant-thumb">
                                                                <a href="restaurant-detail.html" title="" itemprop="url"><img src="../assets/images/resource/most-popular-img1.png" alt="most-popular-img1.png" itemprop="image"></a>
                                                            </div>
                                                            <div class="featured-restaurant-info">
                                                                <span class="red-clr">5th Avenue New York 68</span>
                                                                <h4 itemprop="headline"><a href="restaurant-detail.html" title="" itemprop="url">Domino's Pizza</a></h4>
                                                                <span class="food-types">Type of food: <a href="#" title="" itemprop="url">Apple Juice</a>, <a href="#" title="" itemprop="url">BB.Q</a></span>
                                                                <ul class="post-meta">
                                                                    <li><i class="fa fa-check-circle-o"></i> Min order $50</li>
                                                                    <li><i class="flaticon-transport"></i> 30min</li>
                                                                    <li><i class="flaticon-money"></i> Accepts cash & online payments</li>
                                                                </ul>
                                                                <!-- <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 4.25</span>
                                                                <span class="post-likes style2 red-clr"><i class="fa fa-heart-o"></i> 12</span> -->
                                                                <a class="brd-rd30" href="restaurant-detail.html" title="Order Online"><i class="fa fa-angle-double-right"></i> Order Online</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                        <div class="featured-restaurant-box with-bg style2 brd-rd12 wow fadeIn" data-wow-delay="0.3s">
                                                            <div class="featured-restaurant-thumb">
                                                                <a href="restaurant-detail.html" title="" itemprop="url"><img src="../assets/images/resource/most-popular-img2.png" alt="most-popular-img2.png" itemprop="image"></a>
                                                            </div>
                                                            <div class="featured-restaurant-info">
                                                                <span class="red-clr">5th Avenue New York 68</span>
                                                                <h4 itemprop="headline"><a href="restaurant-detail.html" title="" itemprop="url">Burger King</a></h4>
                                                                <span class="food-types">Type of food: <a href="#" title="" itemprop="url">Apple Juice</a>, <a href="#" title="" itemprop="url">BB.Q</a></span>
                                                                <ul class="post-meta">
                                                                    <li><i class="fa fa-check-circle-o"></i> Min order $50</li>
                                                                    <li><i class="flaticon-transport"></i> 30min</li>
                                                                    <li><i class="flaticon-money"></i> Accepts cash & online payments</li>
                                                                </ul>
                                                                <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 4.25</span>
                                                                <span class="post-likes style2 red-clr"><i class="fa fa-heart-o"></i> 12</span>
                                                                <a class="brd-rd30" href="restaurant-detail.html" title="Order Online"><i class="fa fa-angle-double-right"></i> Order Online</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                        <div class="featured-restaurant-box with-bg style2 brd-rd12 wow fadeIn" data-wow-delay="0.4s">
                                                            <div class="featured-restaurant-thumb">
                                                                <a href="restaurant-detail.html" title="" itemprop="url"><img src="../assets/images/resource/most-popular-img3.png" alt="most-popular-img3.png" itemprop="image"></a>
                                                            </div>
                                                            <div class="featured-restaurant-info">
                                                                <span class="red-clr">5th Avenue New York 68</span>
                                                                <h4 itemprop="headline"><a href="restaurant-detail.html" title="" itemprop="url">Wendy's Cafe</a></h4>
                                                                <span class="food-types">Type of food: <a href="#" title="" itemprop="url">Apple Juice</a>, <a href="#" title="" itemprop="url">BB.Q</a></span>
                                                                <ul class="post-meta">
                                                                    <li><i class="fa fa-check-circle-o"></i> Min order $50</li>
                                                                    <li><i class="flaticon-transport"></i> 30min</li>
                                                                    <li><i class="flaticon-money"></i> Accepts cash & online payments</li>
                                                                </ul>
                                                                <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 4.25</span>
                                                                <span class="post-likes style2 red-clr"><i class="fa fa-heart-o"></i> 12</span>
                                                                <a class="brd-rd30" href="restaurant-detail.html" title="Order Online"><i class="fa fa-angle-double-right"></i> Order Online</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                        <div class="featured-restaurant-box with-bg style2 brd-rd12 wow fadeIn" data-wow-delay="0.5s">
                                                            <div class="featured-restaurant-thumb">
                                                                <a href="restaurant-detail.html" title="" itemprop="url"><img src="../assets/images/resource/most-popular-img4.png" alt="most-popular-img4.png" itemprop="image"></a>
                                                            </div>
                                                            <div class="featured-restaurant-info">
                                                                <span class="red-clr">5th Avenue New York 68</span>
                                                                <h4 itemprop="headline"><a href="restaurant-detail.html" title="" itemprop="url">Restaurant</a></h4>
                                                                <span class="food-types">Type of food: <a href="#" title="" itemprop="url">Apple Juice</a>, <a href="#" title="" itemprop="url">BB.Q</a></span>
                                                                <ul class="post-meta">
                                                                    <li><i class="fa fa-check-circle-o"></i> Min order $50</li>
                                                                    <li><i class="flaticon-transport"></i> 30min</li>
                                                                    <li><i class="flaticon-money"></i> Accepts cash & online payments</li>
                                                                </ul>
                                                                <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 4.25</span>
                                                                <span class="post-likes style2 red-clr"><i class="fa fa-heart-o"></i> 12</span>
                                                                <a class="brd-rd30" href="restaurant-detail.html" title="Order Online"><i class="fa fa-angle-double-right"></i> Order Online</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                        <div class="featured-restaurant-box with-bg style2 brd-rd12 wow fadeIn" data-wow-delay="0.6s">
                                                            <div class="featured-restaurant-thumb">
                                                                <a href="restaurant-detail.html" title="" itemprop="url"><img src="../assets/images/resource/most-popular-img5.png" alt="most-popular-img5.png" itemprop="image"></a>
                                                            </div>
                                                            <div class="featured-restaurant-info">
                                                                <span class="red-clr">5th Avenue New York 68</span>
                                                                <h4 itemprop="headline"><a href="restaurant-detail.html" title="" itemprop="url">Domino's Pizza</a></h4>
                                                                <span class="food-types">Type of food: <a href="#" title="" itemprop="url">Apple Juice</a>, <a href="#" title="" itemprop="url">BB.Q</a></span>
                                                                <ul class="post-meta">
                                                                    <li><i class="fa fa-check-circle-o"></i> Min order $50</li>
                                                                    <li><i class="flaticon-transport"></i> 30min</li>
                                                                    <li><i class="flaticon-money"></i> Accepts cash & online payments</li>
                                                                </ul>
                                                                <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 4.25</span>
                                                                <span class="post-likes style2 red-clr"><i class="fa fa-heart-o"></i> 12</span>
                                                                <a class="brd-rd30" href="restaurant-detail.html" title="Order Online"><i class="fa fa-angle-double-right"></i> Order Online</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                        <div class="featured-restaurant-box with-bg style2 brd-rd12 wow fadeIn" data-wow-delay="0.7s">
                                                            <div class="featured-restaurant-thumb">
                                                                <a href="restaurant-detail.html" title="" itemprop="url"><img src="../assets/images/resource/most-popular-img6.png" alt="most-popular-img6.png" itemprop="image"></a>
                                                            </div>
                                                            <div class="featured-restaurant-info">
                                                                <span class="red-clr">5th Avenue New York 68</span>
                                                                <h4 itemprop="headline"><a href="restaurant-detail.html" title="" itemprop="url">Domino's Pizza</a></h4>
                                                                <span class="food-types">Type of food: <a href="#" title="" itemprop="url">Apple Juice</a>, <a href="#" title="" itemprop="url">BB.Q</a></span>
                                                                <ul class="post-meta">
                                                                    <li><i class="fa fa-check-circle-o"></i> Min order $50</li>
                                                                    <li><i class="flaticon-transport"></i> 30min</li>
                                                                    <li><i class="flaticon-money"></i> Accepts cash & online payments</li>
                                                                </ul>
                                                                <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 4.25</span>
                                                                <span class="post-likes style2 red-clr"><i class="fa fa-heart-o"></i> 12</span>
                                                                <a class="brd-rd30" href="restaurant-detail.html" title="Order Online"><i class="fa fa-angle-double-right"></i> Order Online</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                        <div class="featured-restaurant-box with-bg style2 brd-rd12 wow fadeIn" data-wow-delay="0.8s">
                                                            <div class="featured-restaurant-thumb">
                                                                <a href="restaurant-detail.html" title="" itemprop="url"><img src="../assets/images/resource/most-popular-img7.png" alt="most-popular-img7.png" itemprop="image"></a>
                                                            </div>
                                                            <div class="featured-restaurant-info">
                                                                <span class="red-clr">5th Avenue New York 68</span>
                                                                <h4 itemprop="headline"><a href="restaurant-detail.html" title="" itemprop="url">Domino's Pizza</a></h4>
                                                                <span class="food-types">Type of food: <a href="#" title="" itemprop="url">Apple Juice</a>, <a href="#" title="" itemprop="url">BB.Q</a></span>
                                                                <ul class="post-meta">
                                                                    <li><i class="fa fa-check-circle-o"></i> Min order $50</li>
                                                                    <li><i class="flaticon-transport"></i> 30min</li>
                                                                    <li><i class="flaticon-money"></i> Accepts cash & online payments</li>
                                                                </ul>
                                                                <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 4.25</span>
                                                                <span class="post-likes style2 red-clr"><i class="fa fa-heart-o"></i> 12</span>
                                                                <a class="brd-rd30" href="restaurant-detail.html" title="Order Online"><i class="fa fa-angle-double-right"></i> Order Online</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                        <div class="featured-restaurant-box with-bg style2 brd-rd12 wow fadeIn" data-wow-delay="0.9s">
                                                            <div class="featured-restaurant-thumb">
                                                                <a href="restaurant-detail.html" title="" itemprop="url"><img src="../assets/images/resource/most-popular-img8.png" alt="most-popular-img8.png" itemprop="image"></a>
                                                            </div>
                                                            <div class="featured-restaurant-info">
                                                                <span class="red-clr">5th Avenue New York 68</span>
                                                                <h4 itemprop="headline"><a href="restaurant-detail.html" title="" itemprop="url">Domino's Pizza</a></h4>
                                                                <span class="food-types">Type of food: <a href="#" title="" itemprop="url">Apple Juice</a>, <a href="#" title="" itemprop="url">BB.Q</a></span>
                                                                <ul class="post-meta">
                                                                    <li><i class="fa fa-check-circle-o"></i> Min order $50</li>
                                                                    <li><i class="flaticon-transport"></i> 30min</li>
                                                                    <li><i class="flaticon-money"></i> Accepts cash & online payments</li>
                                                                </ul>
                                                                <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 4.25</span>
                                                                <span class="post-likes style2 red-clr"><i class="fa fa-heart-o"></i> 12</span>
                                                                <a class="brd-rd30" href="restaurant-detail.html" title="Order Online"><i class="fa fa-angle-double-right"></i> Order Online</a>
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
                    </div>
                </div>
            </div>
        </section>
      
<?php 
include '../layout/footer.php';
?>