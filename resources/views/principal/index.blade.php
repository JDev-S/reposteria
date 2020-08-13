@extends('welcome')
@section('contenido')

<div class="wrap-breadcrumb parallax-breadcrumb">
        <div class="container"></div>
    </div>

    <!-- ======= Quick view JS ========= -->
    <script>
        function quickbox() {
            if ($(window).width() > 767) {
                $('.quickview-button').magnificPopup({
                    type: 'iframe',
                    delegate: 'a',
                    preloader: true,
                    tLoading: 'Loading image #%curr%...',
                });
            }
        }
        jQuery(document).ready(function() {
            quickbox();
        });
        jQuery(window).resize(function() {
            quickbox();
        });

    </script>
    <div class="content-top">

        <div class="main-slider">
            <div id="spinner"></div>
            <div class="swiper-viewport">
                <div id="slideshow0" class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide text-center"><a href="#"><img src="image\cache\catalog\main-banner-1-1903x1000.jpg" alt="Main Banner1" class="img-responsive"></a></div>
                        <div class="swiper-slide text-center"><a href="#"><img src="image\cache\catalog\main-banner-2-1903x1000.jpg" alt="Main Banner2" class="img-responsive"></a></div>
                    </div>
                </div>
                <div class="swiper-pagination slideshow0"></div>
                <div class="swiper-pager">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            <!--
            $('#slideshow0').swiper({
                mode: 'horizontal',
                slidesPerView: 1,
                pagination: '.slideshow0',
                paginationClickable: true,
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                spaceBetween: 0,
                autoplay: 5000,
                autoplayDisableOnInteraction: true,
                loop: true
            });

            -->
        </script>

        <script type="text/javascript">
            // Can also be used with $(document).ready()
            $(window).load(function() {
                $("#spinner").fadeOut("slow");
            });

        </script>
        <div id="czservicecmsblock">
            <div class="service_container container">
                <div class="service-area">
                    <div class="service-fourth service1">
                        <div class="service-icon icon1"></div>
                        <div class="service-content">
                            <div class="service-heading">Free shipping</div>
                            <div class="service-description">Lorem Ipsuming Simply Dummy Text</div>
                        </div>
                    </div>
                    <div class="service-fourth service2">
                        <div class="service-icon icon2"></div>
                        <div class="service-content">
                            <div class="service-heading">Online Support</div>
                            <div class="service-description">Lorem Ipsuming Simply Dummy Text</div>
                        </div>
                    </div>
                    <div class="service-fourth service3">
                        <div class="service-icon icon3"></div>
                        <div class="service-content">
                            <div class="service-heading">Special Gifts</div>
                            <div class="service-description">Lorem Ipsuming Simply Dummy Text</div>
                        </div>
                    </div>
                    <div class="service-fourth service4">
                        <div class="service-icon icon4"></div>
                        <div class="service-content">
                            <div class="service-heading">24/7 Need Us</div>
                            <div class="service-description">Lorem Ipsuming Simply Dummy Text</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="czcategory_listblock" class="czcategory_listblock">
            <div class="czcategory_block container">
                <div class="category_lists">
                    <ul id="ourcategory-carousel" class="owl-carousel">
                        <li class="category_item item">
                            <div class="cate_image">
                                <div class="cate-inner"><a href="#"><img src="image\catalog\category-image1.png" class="img-responsive" alt="category-image1.png"></a></div>
                            </div>
                            <div class="cate-details">
                                <div class="cate_title"><a href="#">Strawbarry Cake</a></div>
                                <div class="viewmore"><a class="view-more" href="#">View More</a></div>
                            </div>
                        </li>
                        <li class="category_item item">
                            <div class="cate_image">
                                <div class="cate-inner"><a href="#"><img src="image\catalog\category-image2.png" class="img-responsive" alt="category-image2.png"></a></div>
                            </div>
                            <div class="cate-details">
                                <div class="cate_title"><a href="#">Chocolate Cake</a></div>
                                <div class="viewmore"><a class="view-more" href="#">View More</a></div>
                            </div>
                        </li>
                        <li class="category_item item">
                            <div class="cate_image">
                                <div class="cate-inner"><a href="#"><img src="image\catalog\category-image3.png" class="img-responsive" alt="category-image3.png"></a></div>
                            </div>
                            <div class="cate-details">
                                <div class="cate_title"><a href="#">Fruit Cake</a></div>
                                <div class="viewmore"><a class="view-more" href="#">View More</a></div>
                            </div>
                        </li>
                        <li class="category_item item">
                            <div class="cate_image">
                                <div class="cate-inner"><a href="#"><img src="image\catalog\category-image4.png" class="img-responsive" alt="category-image4.png"></a></div>
                            </div>
                            <div class="cate-details">
                                <div class="cate_title"><a href="#">Pesrty Cake</a></div>
                                <div class="viewmore"><a class="view-more" href="#">View More</a></div>
                            </div>
                        </li>
                        <li class="category_item item">
                            <div class="cate_image">
                                <div class="cate-inner"><a href="#"><img src="image\catalog\category-image5.png" class="img-responsive" alt="category-image5.png"></a></div>
                            </div>
                            <div class="cate-details">
                                <div class="cate_title"><a href="#">Cup Cake</a></div>
                                <div class="viewmore"><a class="view-more" href="#">View More</a></div>
                            </div>
                        </li>
                        <li class="category_item item">
                            <div class="cate_image">
                                <div class="cate-inner"><a href="#"><img src="image\catalog\category-image6.png" class="img-responsive" alt="category-image6.png"></a></div>
                            </div>
                            <div class="cate-details">
                                <div class="cate_title"><a href="#">Macarons</a></div>
                                <div class="viewmore"><a class="view-more" href="#">View More</a></div>
                            </div>
                        </li>
                        <li class="category_item item">
                            <div class="cate_image">
                                <div class="cate-inner"><a href="#"><img src="image\catalog\category-image7.png" class="img-responsive" alt="category-image7.png"></a></div>
                            </div>
                            <div class="cate-details">
                                <div class="cate_title"><a href="#">Desert</a></div>
                                <div class="viewmore"><a class="view-more" href="#">View More</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>




    </div>

    <div class="row home_row">

        <div id="content" class="col-sm-12">
            <div class="hometab box">
                <div class="container">
                    <div class="tab-head">
                        <div class="hometab-heading box-heading">New Products</div>
                        <div id="tabs" class="htabs">
                            <ul class='etabs'>
                                <li class='tab'>
                                    <a href="#tab-latest">Latest</a>
                                </li>
                                <li class='tab'>
                                    <a href="#tab-bestseller">Best sellers</a>
                                </li>
                                <li class='tab'>
                                    <a href="#tab-special">Special</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div id="tab-latest" class="tab-content">
                        <div class="box">
                            <div class="box-content">


                                <div class="box-product  productbox-grid" id="tablatest-grid">
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="index-33.html?route=product/product&amp;product_id=48">
                                                        <img src="image\cache\catalog\15-277x277.jpg" title="Voluptates Repudiandae" alt="Voluptates Repudiandae" class="img-responsive reg-image">
                                                        <img class="img-responsive hover-image" src="image\cache\catalog\06-277x277.jpg" title="Voluptates Repudiandae" alt="Voluptates Repudiandae">
                                                    </a>
                                                    





                                                    <div class="button-group">
                                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('48 ');">
                                                            <i class="fa fa-heart"></i></button>
                                                        <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index-34.html?route=product/quick_view&amp;product_id=48">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('48 ');">
                                                            <i class="fa fa-exchange"></i></button>
                                                        <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('48 ');"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>
                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="index-33.html?route=product/product&amp;product_id=48 ">Voluptates Repudiandae </a></h4>


                                                        <p class="price">
                                                            $140.00
                                                            <span class="price-tax">Ex Tax: $115.00</span>
                                                        </p>

                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="index-35.html?route=product/product&amp;product_id=47">
                                                        <img src="image\cache\catalog\01-277x277.jpg" title="Accusantium Doloremque" alt="Accusantium Doloremque" class="img-responsive reg-image">
                                                        <img class="img-responsive hover-image" src="image\cache\catalog\05-277x277.jpg" title="Accusantium Doloremque" alt="Accusantium Doloremque">
                                                    </a>






                                                    <div class="button-group">
                                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('47 ');">
                                                            <i class="fa fa-heart"></i></button>
                                                        <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index-36.html?route=product/quick_view&amp;product_id=47">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('47 ');">
                                                            <i class="fa fa-exchange"></i></button>
                                                        <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('47 ');"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>
                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="index-35.html?route=product/product&amp;product_id=47 ">Accusantium Doloremque </a></h4>


                                                        <p class="price">
                                                            $104.00
                                                            <span class="price-tax">Ex Tax: $85.00</span>
                                                        </p>

                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="index-37.html?route=product/product&amp;product_id=45">
                                                        <img src="image\cache\catalog\10-277x277.jpg" title="Neque Porro Quisquam" alt="Neque Porro Quisquam" class="img-responsive reg-image">
                                                        <img class="img-responsive hover-image" src="image\cache\catalog\01-277x277.jpg" title="Neque Porro Quisquam" alt="Neque Porro Quisquam">
                                                    </a>






                                                    <div class="button-group">
                                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('45 ');">
                                                            <i class="fa fa-heart"></i></button>
                                                        <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index-38.html?route=product/quick_view&amp;product_id=45">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('45 ');">
                                                            <i class="fa fa-exchange"></i></button>
                                                        <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('45 ');"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>
                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="index-37.html?route=product/product&amp;product_id=45 ">Neque Porro Quisquam </a></h4>


                                                        <p class="price">
                                                            $118.00
                                                            <span class="price-tax">Ex Tax: $118.00</span>
                                                        </p>

                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="index-39.html?route=product/product&amp;product_id=43">
                                                        <img src="image\cache\catalog\02-277x277.jpg" title="Aliquam Quaerat" alt="Aliquam Quaerat" class="img-responsive reg-image">
                                                        <img class="img-responsive hover-image" src="image\cache\catalog\07-277x277.jpg" title="Aliquam Quaerat" alt="Aliquam Quaerat">
                                                    </a>






                                                    <div class="button-group">
                                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('43 ');">
                                                            <i class="fa fa-heart"></i></button>
                                                        <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index-40.html?route=product/quick_view&amp;product_id=43">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('43 ');">
                                                            <i class="fa fa-exchange"></i></button>
                                                        <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('43 ');"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>
                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="index-39.html?route=product/product&amp;product_id=43 ">Aliquam Quaerat </a></h4>


                                                        <p class="price">
                                                            $108.80
                                                            <span class="price-tax">Ex Tax: $89.00</span>
                                                        </p>

                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="index-41.html?route=product/product&amp;product_id=42">
                                                        <img src="image\cache\catalog\04-277x277.jpg" title="Consectetur Hampden" alt="Consectetur Hampden" class="img-responsive reg-image">
                                                        <img class="img-responsive hover-image" src="image\cache\catalog\10-277x277.jpg" title="Consectetur Hampden" alt="Consectetur Hampden">
                                                    </a>


                                                    <span class="saleicon sale">Sale</span>

                                                    <div class="percentsaving">8% off</div>



                                                    <div class="button-group">
                                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('42 ');">
                                                            <i class="fa fa-heart"></i></button>
                                                        <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index-42.html?route=product/quick_view&amp;product_id=42">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('42 ');">
                                                            <i class="fa fa-exchange"></i></button>
                                                        <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42 ');"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>
                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="index-41.html?route=product/product&amp;product_id=42 ">Consectetur Hampden </a></h4>


                                                        <p class="price">
                                                            <span class="price-new">$110.00</span> <span class="price-old">$119.60</span>
                                                            <span class="price-tax">Ex Tax: $90.00</span>
                                                        </p>

                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="index-43.html?route=product/product&amp;product_id=41">
                                                        <img src="image\cache\catalog\11-277x277.jpg" title="Nostrud Exercitation" alt="Nostrud Exercitation" class="img-responsive reg-image">
                                                        <img class="img-responsive hover-image" src="image\cache\catalog\02-277x277.jpg" title="Nostrud Exercitation" alt="Nostrud Exercitation">
                                                    </a>


                                                    <span class="saleicon sale">Sale</span>

                                                    <div class="percentsaving">6% off</div>



                                                    <div class="button-group">
                                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('41 ');">
                                                            <i class="fa fa-heart"></i></button>
                                                        <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index-44.html?route=product/quick_view&amp;product_id=41">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('41 ');">
                                                            <i class="fa fa-exchange"></i></button>
                                                        <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('41 ');"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>
                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="index-43.html?route=product/product&amp;product_id=41 ">Nostrud Exercitation </a></h4>


                                                        <p class="price">
                                                            <span class="price-new">$78.80</span> <span class="price-old">$83.60</span>
                                                            <span class="price-tax">Ex Tax: $64.00</span>
                                                        </p>

                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="index-45.html?route=product/product&amp;product_id=40">
                                                        <img src="image\cache\catalog\13-277x277.jpg" title="Praesentium Voluptatum" alt="Praesentium Voluptatum" class="img-responsive reg-image">
                                                        <img class="img-responsive hover-image" src="image\cache\catalog\14-277x277.jpg" title="Praesentium Voluptatum" alt="Praesentium Voluptatum">
                                                    </a>


                                                    <span class="saleicon sale">Sale</span>

                                                    <div class="percentsaving">5% off</div>



                                                    <div class="button-group">
                                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('40 ');">
                                                            <i class="fa fa-heart"></i></button>
                                                        <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index-46.html?route=product/quick_view&amp;product_id=40">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('40 ');">
                                                            <i class="fa fa-exchange"></i></button>
                                                        <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('40 ');"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>
                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="index-45.html?route=product/product&amp;product_id=40 ">Praesentium Voluptatum </a></h4>


                                                        <p class="price">
                                                            <span class="price-new">$122.00</span> <span class="price-old">$128.00</span>
                                                            <span class="price-tax">Ex Tax: $100.00</span>
                                                        </p>

                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="index-47.html?route=product/product&amp;product_id=36">
                                                        <img src="image\cache\catalog\09-277x277.jpg" title="Necessitatibus" alt="Necessitatibus" class="img-responsive reg-image">
                                                        <img class="img-responsive hover-image" src="image\cache\catalog\15-277x277.jpg" title="Necessitatibus" alt="Necessitatibus">
                                                    </a>






                                                    <div class="button-group">
                                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('36 ');">
                                                            <i class="fa fa-heart"></i></button>
                                                        <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index-48.html?route=product/quick_view&amp;product_id=36">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('36 ');">
                                                            <i class="fa fa-exchange"></i></button>
                                                        <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('36 ');"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>
                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="index-47.html?route=product/product&amp;product_id=36 ">Necessitatibus </a></h4>


                                                        <p class="price">
                                                            $119.60
                                                            <span class="price-tax">Ex Tax: $98.00</span>
                                                        </p>

                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="index-49.html?route=product/product&amp;product_id=35">
                                                        <img src="image\cache\catalog\03-277x277.jpg" title="Commodi Consequatur" alt="Commodi Consequatur" class="img-responsive reg-image">
                                                        <img class="img-responsive hover-image" src="image\cache\catalog\04-277x277.jpg" title="Commodi Consequatur" alt="Commodi Consequatur">
                                                    </a>


                                                    <span class="saleicon sale">Sale</span>

                                                    <div class="percentsaving">2% off</div>



                                                    <div class="button-group">
                                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('35 ');">
                                                            <i class="fa fa-heart"></i></button>
                                                        <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index-50.html?route=product/quick_view&amp;product_id=35">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('35 ');">
                                                            <i class="fa fa-exchange"></i></button>
                                                        <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('35 ');"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>
                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="index-49.html?route=product/product&amp;product_id=35 ">Commodi Consequatur </a></h4>


                                                        <p class="price">
                                                            <span class="price-new">$134.00</span> <span class="price-old">$136.40</span>
                                                            <span class="price-tax">Ex Tax: $110.00</span>
                                                        </p>

                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="index-51.html?route=product/product&amp;product_id=34">
                                                        <img src="image\cache\catalog\12-277x277.jpg" title="Occasion Praesentium" alt="Occasion Praesentium" class="img-responsive reg-image">
                                                        <img class="img-responsive hover-image" src="image\cache\catalog\02-277x277.jpg" title="Occasion Praesentium" alt="Occasion Praesentium">
                                                    </a>






                                                    <div class="button-group">
                                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('34 ');">
                                                            <i class="fa fa-heart"></i></button>
                                                        <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index-52.html?route=product/quick_view&amp;product_id=34">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('34 ');">
                                                            <i class="fa fa-exchange"></i></button>
                                                        <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('34 ');"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>
                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="index-51.html?route=product/product&amp;product_id=34 ">Occasion Praesentium </a></h4>


                                                        <p class="price">
                                                            $105.20
                                                            <span class="price-tax">Ex Tax: $86.00</span>
                                                        </p>

                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="index-53.html?route=product/product&amp;product_id=32">
                                                        <img src="image\cache\catalog\14-277x277.jpg" title="Reprehenderit Aliquam" alt="Reprehenderit Aliquam" class="img-responsive reg-image">
                                                        <img class="img-responsive hover-image" src="image\cache\catalog\05-277x277.jpg" title="Reprehenderit Aliquam" alt="Reprehenderit Aliquam">
                                                    </a>


                                                    <span class="saleicon sale">Sale</span>

                                                    <div class="percentsaving">7% off</div>



                                                    <div class="button-group">
                                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('32 ');">
                                                            <i class="fa fa-heart"></i></button>
                                                        <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index-54.html?route=product/quick_view&amp;product_id=32">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('32 ');">
                                                            <i class="fa fa-exchange"></i></button>
                                                        <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('32 ');"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>
                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="index-53.html?route=product/product&amp;product_id=32 ">Reprehenderit Aliquam </a></h4>


                                                        <p class="price">
                                                            <span class="price-new">$110.00</span> <span class="price-old">$118.40</span>
                                                            <span class="price-tax">Ex Tax: $90.00</span>
                                                        </p>

                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="index-55.html?route=product/product&amp;product_id=31">
                                                        <img src="image\cache\catalog\08-277x277.jpg" title="Laudant Doloremque" alt="Laudant Doloremque" class="img-responsive reg-image">
                                                        <img class="img-responsive hover-image" src="image\cache\catalog\13-277x277.jpg" title="Laudant Doloremque" alt="Laudant Doloremque">
                                                    </a>


                                                    <span class="saleicon sale">Sale</span>

                                                    <div class="percentsaving">6% off</div>



                                                    <div class="button-group">
                                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('31 ');">
                                                            <i class="fa fa-heart"></i></button>
                                                        <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index-56.html?route=product/quick_view&amp;product_id=31">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('31 ');">
                                                            <i class="fa fa-exchange"></i></button>
                                                        <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('31 ');"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>
                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="index-55.html?route=product/product&amp;product_id=31 ">Laudant Doloremque </a></h4>


                                                        <p class="price">
                                                            <span class="price-new">$92.00</span> <span class="price-old">$98.00</span>
                                                            <span class="price-tax">Ex Tax: $75.00</span>
                                                        </p>

                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="index-57.html?route=product/product&amp;product_id=30">
                                                        <img src="image\cache\catalog\05-277x277.jpg" title="Exercitat Virginia" alt="Exercitat Virginia" class="img-responsive reg-image">
                                                        <img class="img-responsive hover-image" src="image\cache\catalog\11-277x277.jpg" title="Exercitat Virginia" alt="Exercitat Virginia">
                                                    </a>


                                                    <span class="saleicon sale">Sale</span>

                                                    <div class="percentsaving">11% off</div>



                                                    <div class="button-group">
                                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('30 ');">
                                                            <i class="fa fa-heart"></i></button>
                                                        <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index-58.html?route=product/quick_view&amp;product_id=30">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('30 ');">
                                                            <i class="fa fa-exchange"></i></button>
                                                        <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('30 ');"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>
                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="index-57.html?route=product/product&amp;product_id=30 ">Exercitat Virginia </a></h4>


                                                        <p class="price">
                                                            <span class="price-new">$104.00</span> <span class="price-old">$116.00</span>
                                                            <span class="price-tax">Ex Tax: $85.00</span>
                                                        </p>

                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="index-59.html?route=product/product&amp;product_id=29">
                                                        <img src="image\cache\catalog\06-277x277.jpg" title="Laborum Eveniet" alt="Laborum Eveniet" class="img-responsive reg-image">
                                                        <img class="img-responsive hover-image" src="image\cache\catalog\11-277x277.jpg" title="Laborum Eveniet" alt="Laborum Eveniet">
                                                    </a>






                                                    <div class="button-group">
                                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('29 ');">
                                                            <i class="fa fa-heart"></i></button>
                                                        <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index-60.html?route=product/quick_view&amp;product_id=29">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('29 ');">
                                                            <i class="fa fa-exchange"></i></button>
                                                        <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('29 ');"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>
                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="index-59.html?route=product/product&amp;product_id=29 ">Laborum Eveniet </a></h4>


                                                        <p class="price">
                                                            $97.99
                                                            <span class="price-tax">Ex Tax: $79.99</span>
                                                        </p>

                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="index-61.html?route=product/product&amp;product_id=28">
                                                        <img src="image\cache\catalog\14-277x277.jpg" title="Voluptas Assumenda" alt="Voluptas Assumenda" class="img-responsive reg-image">
                                                        <img class="img-responsive hover-image" src="image\cache\catalog\05-277x277.jpg" title="Voluptas Assumenda" alt="Voluptas Assumenda">
                                                    </a>






                                                    <div class="button-group">
                                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('28 ');">
                                                            <i class="fa fa-heart"></i></button>
                                                        <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index-62.html?route=product/quick_view&amp;product_id=28">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('28 ');">
                                                            <i class="fa fa-exchange"></i></button>
                                                        <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('28 ');"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>
                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="index-61.html?route=product/product&amp;product_id=28 ">Voluptas Assumenda </a></h4>


                                                        <p class="price">
                                                            $122.00
                                                            <span class="price-tax">Ex Tax: $100.00</span>
                                                        </p>

                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cz-status">
                                <i class="fa fa-frown-o"></i>
                                No more products found!
                            </div>
                            <div class="viewmore">
                                <button class="btn btn-default gridcount">All Products</button>
                            </div>

                        </div>
                        <span class="tablatest_default_width" style="display:none; visibility:hidden"></span>
                    </div>

                    <div id="tab-bestseller" class="tab-content">
                        <div class="box">
                            <div class="box-content">


                                <div class="box-product  productbox-grid" id="tabbestseller-grid">
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="index-35.html?route=product/product&amp;product_id=47">
                                                        <img src="image\cache\catalog\01-277x277.jpg" title="Accusantium Doloremque" alt="Accusantium Doloremque" class="img-responsive reg-image">
                                                        <img class="img-responsive hover-image" src="image\cache\catalog\05-277x277.jpg" title="Accusantium Doloremque" alt="Accusantium Doloremque">
                                                    </a>




                                                    <div class="button-group">
                                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('47 ');">
                                                            <i class="fa fa-heart"></i></button>
                                                        <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index-36.html?route=product/quick_view&amp;product_id=47">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('47 ');">
                                                            <i class="fa fa-exchange"></i></button>
                                                        <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('47 ');"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>

                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="index-35.html?route=product/product&amp;product_id=47 ">Accusantium Doloremque </a></h4>

                                                        <p class="price">
                                                            $104.00
                                                            <span class="price-tax">Ex Tax: $85.00</span>
                                                        </p>

                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="index-37.html?route=product/product&amp;product_id=45">
                                                        <img src="image\cache\catalog\10-277x277.jpg" title="Neque Porro Quisquam" alt="Neque Porro Quisquam" class="img-responsive reg-image">
                                                        <img class="img-responsive hover-image" src="image\cache\catalog\01-277x277.jpg" title="Neque Porro Quisquam" alt="Neque Porro Quisquam">
                                                    </a>




                                                    <div class="button-group">
                                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('45 ');">
                                                            <i class="fa fa-heart"></i></button>
                                                        <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index-38.html?route=product/quick_view&amp;product_id=45">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('45 ');">
                                                            <i class="fa fa-exchange"></i></button>
                                                        <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('45 ');"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>

                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="index-37.html?route=product/product&amp;product_id=45 ">Neque Porro Quisquam </a></h4>

                                                        <p class="price">
                                                            $118.00
                                                            <span class="price-tax">Ex Tax: $118.00</span>
                                                        </p>

                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="index-33.html?route=product/product&amp;product_id=48">
                                                        <img src="image\cache\catalog\15-277x277.jpg" title="Voluptates Repudiandae" alt="Voluptates Repudiandae" class="img-responsive reg-image">
                                                        <img class="img-responsive hover-image" src="image\cache\catalog\06-277x277.jpg" title="Voluptates Repudiandae" alt="Voluptates Repudiandae">
                                                    </a>




                                                    <div class="button-group">
                                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('48 ');">
                                                            <i class="fa fa-heart"></i></button>
                                                        <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index-34.html?route=product/quick_view&amp;product_id=48">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('48 ');">
                                                            <i class="fa fa-exchange"></i></button>
                                                        <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('48 ');"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>

                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="index-33.html?route=product/product&amp;product_id=48 ">Voluptates Repudiandae </a></h4>

                                                        <p class="price">
                                                            $140.00
                                                            <span class="price-tax">Ex Tax: $115.00</span>
                                                        </p>

                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="index-45.html?route=product/product&amp;product_id=40">
                                                        <img src="image\cache\catalog\13-277x277.jpg" title="Praesentium Voluptatum" alt="Praesentium Voluptatum" class="img-responsive reg-image">
                                                        <img class="img-responsive hover-image" src="image\cache\catalog\14-277x277.jpg" title="Praesentium Voluptatum" alt="Praesentium Voluptatum">
                                                    </a>


                                                    <span class="saleicon sale">Sale</span>

                                                    <div class="percentsaving">5% off</div>

                                                    <div class="button-group">
                                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('40 ');">
                                                            <i class="fa fa-heart"></i></button>
                                                        <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index-46.html?route=product/quick_view&amp;product_id=40">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('40 ');">
                                                            <i class="fa fa-exchange"></i></button>
                                                        <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('40 ');"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>

                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="index-45.html?route=product/product&amp;product_id=40 ">Praesentium Voluptatum </a></h4>

                                                        <p class="price">
                                                            <span class="price-new">$122.00</span> <span class="price-old">$128.00</span>
                                                            <span class="price-tax">Ex Tax: $100.00</span>
                                                        </p>

                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="index-47.html?route=product/product&amp;product_id=36">
                                                        <img src="image\cache\catalog\09-277x277.jpg" title="Necessitatibus" alt="Necessitatibus" class="img-responsive reg-image">
                                                        <img class="img-responsive hover-image" src="image\cache\catalog\15-277x277.jpg" title="Necessitatibus" alt="Necessitatibus">
                                                    </a>




                                                    <div class="button-group">
                                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('36 ');">
                                                            <i class="fa fa-heart"></i></button>
                                                        <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index-48.html?route=product/quick_view&amp;product_id=36">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('36 ');">
                                                            <i class="fa fa-exchange"></i></button>
                                                        <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('36 ');"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>

                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="index-47.html?route=product/product&amp;product_id=36 ">Necessitatibus </a></h4>

                                                        <p class="price">
                                                            $119.60
                                                            <span class="price-tax">Ex Tax: $98.00</span>
                                                        </p>

                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="index-57.html?route=product/product&amp;product_id=30">
                                                        <img src="image\cache\catalog\05-277x277.jpg" title="Exercitat Virginia" alt="Exercitat Virginia" class="img-responsive reg-image">
                                                        <img class="img-responsive hover-image" src="image\cache\catalog\11-277x277.jpg" title="Exercitat Virginia" alt="Exercitat Virginia">
                                                    </a>


                                                    <span class="saleicon sale">Sale</span>

                                                    <div class="percentsaving">11% off</div>

                                                    <div class="button-group">
                                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('30 ');">
                                                            <i class="fa fa-heart"></i></button>
                                                        <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index-58.html?route=product/quick_view&amp;product_id=30">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('30 ');">
                                                            <i class="fa fa-exchange"></i></button>
                                                        <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('30 ');"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>

                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="index-57.html?route=product/product&amp;product_id=30 ">Exercitat Virginia </a></h4>

                                                        <p class="price">
                                                            <span class="price-new">$104.00</span> <span class="price-old">$116.00</span>
                                                            <span class="price-tax">Ex Tax: $85.00</span>
                                                        </p>

                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="index-55.html?route=product/product&amp;product_id=31">
                                                        <img src="image\cache\catalog\08-277x277.jpg" title="Laudant Doloremque" alt="Laudant Doloremque" class="img-responsive reg-image">
                                                        <img class="img-responsive hover-image" src="image\cache\catalog\13-277x277.jpg" title="Laudant Doloremque" alt="Laudant Doloremque">
                                                    </a>


                                                    <span class="saleicon sale">Sale</span>

                                                    <div class="percentsaving">6% off</div>

                                                    <div class="button-group">
                                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('31 ');">
                                                            <i class="fa fa-heart"></i></button>
                                                        <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index-56.html?route=product/quick_view&amp;product_id=31">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('31 ');">
                                                            <i class="fa fa-exchange"></i></button>
                                                        <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('31 ');"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>
                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="index-55.html?route=product/product&amp;product_id=31 ">Laudant Doloremque </a></h4>

                                                        <p class="price">
                                                            <span class="price-new">$92.00</span> <span class="price-old">$98.00</span>
                                                            <span class="price-tax">Ex Tax: $75.00</span>
                                                        </p>

                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="index-43.html?route=product/product&amp;product_id=41">
                                                        <img src="image\cache\catalog\11-277x277.jpg" title="Nostrud Exercitation" alt="Nostrud Exercitation" class="img-responsive reg-image">
                                                        <img class="img-responsive hover-image" src="image\cache\catalog\02-277x277.jpg" title="Nostrud Exercitation" alt="Nostrud Exercitation">
                                                    </a>


                                                    <span class="saleicon sale">Sale</span>

                                                    <div class="percentsaving">6% off</div>

                                                    <div class="button-group">
                                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('41 ');">
                                                            <i class="fa fa-heart"></i></button>
                                                        <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index-44.html?route=product/quick_view&amp;product_id=41">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('41 ');">
                                                            <i class="fa fa-exchange"></i></button>
                                                        <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('41 ');"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>

                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="index-43.html?route=product/product&amp;product_id=41 ">Nostrud Exercitation </a></h4>

                                                        <p class="price">
                                                            <span class="price-new">$78.80</span> <span class="price-old">$83.60</span>
                                                            <span class="price-tax">Ex Tax: $64.00</span>
                                                        </p>

                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="index-39.html?route=product/product&amp;product_id=43">
                                                        <img src="image\cache\catalog\02-277x277.jpg" title="Aliquam Quaerat" alt="Aliquam Quaerat" class="img-responsive reg-image">
                                                        <img class="img-responsive hover-image" src="image\cache\catalog\07-277x277.jpg" title="Aliquam Quaerat" alt="Aliquam Quaerat">
                                                    </a>




                                                    <div class="button-group">
                                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('43 ');">
                                                            <i class="fa fa-heart"></i></button>
                                                        <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index-40.html?route=product/quick_view&amp;product_id=43">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('43 ');">
                                                            <i class="fa fa-exchange"></i></button>
                                                        <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('43 ');"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>

                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="index-39.html?route=product/product&amp;product_id=43 ">Aliquam Quaerat </a></h4>

                                                        <p class="price">
                                                            $108.80
                                                            <span class="price-tax">Ex Tax: $89.00</span>
                                                        </p>

                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cz-status">
                                <i class="fa fa-frown-o"></i>
                                No more products found!
                            </div>
                            <div class="viewmore">
                                <button class="btn btn-default gridcount">All Products</button>
                            </div>

                        </div>
                        <span class="tabbestseller_default_width" style="display:none; visibility:hidden"></span>
                    </div>

                    <div id="tab-special" class="tab-content">
                        <div class="box">
                            <div class="box-content">



                                <div class="box-product  productbox-grid" id="tabspecial-grid">
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="index-49.html?route=product/product&amp;product_id=35">
                                                        <img src="image\cache\catalog\03-277x277.jpg" title="Commodi Consequatur" alt="Commodi Consequatur" class="img-responsive reg-image">
                                                        <img class="img-responsive hover-image" src="image\cache\catalog\04-277x277.jpg" title="Commodi Consequatur" alt="Commodi Consequatur">
                                                    </a>


                                                    <span class="saleicon sale">Sale</span>

                                                    <div class="percentsaving">2% off</div>

                                                    <div class="button-group">
                                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('35 ');">
                                                            <i class="fa fa-heart"></i></button>
                                                        <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index-50.html?route=product/quick_view&amp;product_id=35">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('35 ');">
                                                            <i class="fa fa-exchange"></i></button>
                                                        <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('35 ');"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>
                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="index-49.html?route=product/product&amp;product_id=35 ">Commodi Consequatur </a></h4>


                                                        <p class="price">
                                                            <span class="price-new">$134.00</span> <span class="price-old">$136.40</span>
                                                            <span class="price-tax">Ex Tax: $110.00</span>
                                                        </p>


                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="index-41.html?route=product/product&amp;product_id=42">
                                                        <img src="image\cache\catalog\04-277x277.jpg" title="Consectetur Hampden" alt="Consectetur Hampden" class="img-responsive reg-image">
                                                        <img class="img-responsive hover-image" src="image\cache\catalog\10-277x277.jpg" title="Consectetur Hampden" alt="Consectetur Hampden">
                                                    </a>


                                                    <span class="saleicon sale">Sale</span>

                                                    <div class="percentsaving">8% off</div>

                                                    <div class="button-group">
                                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('42 ');">
                                                            <i class="fa fa-heart"></i></button>
                                                        <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index-42.html?route=product/quick_view&amp;product_id=42">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('42 ');">
                                                            <i class="fa fa-exchange"></i></button>
                                                        <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42 ');"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>
                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="index-41.html?route=product/product&amp;product_id=42 ">Consectetur Hampden </a></h4>


                                                        <p class="price">
                                                            <span class="price-new">$110.00</span> <span class="price-old">$119.60</span>
                                                            <span class="price-tax">Ex Tax: $90.00</span>
                                                        </p>


                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="index-57.html?route=product/product&amp;product_id=30">
                                                        <img src="image\cache\catalog\05-277x277.jpg" title="Exercitat Virginia" alt="Exercitat Virginia" class="img-responsive reg-image">
                                                        <img class="img-responsive hover-image" src="image\cache\catalog\11-277x277.jpg" title="Exercitat Virginia" alt="Exercitat Virginia">
                                                    </a>


                                                    <span class="saleicon sale">Sale</span>

                                                    <div class="percentsaving">11% off</div>

                                                    <div class="button-group">
                                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('30 ');">
                                                            <i class="fa fa-heart"></i></button>
                                                        <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index-58.html?route=product/quick_view&amp;product_id=30">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('30 ');">
                                                            <i class="fa fa-exchange"></i></button>
                                                        <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('30 ');"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>
                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="index-57.html?route=product/product&amp;product_id=30 ">Exercitat Virginia </a></h4>


                                                        <p class="price">
                                                            <span class="price-new">$104.00</span> <span class="price-old">$116.00</span>
                                                            <span class="price-tax">Ex Tax: $85.00</span>
                                                        </p>


                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="index-55.html?route=product/product&amp;product_id=31">
                                                        <img src="image\cache\catalog\08-277x277.jpg" title="Laudant Doloremque" alt="Laudant Doloremque" class="img-responsive reg-image">
                                                        <img class="img-responsive hover-image" src="image\cache\catalog\13-277x277.jpg" title="Laudant Doloremque" alt="Laudant Doloremque">
                                                    </a>


                                                    <span class="saleicon sale">Sale</span>

                                                    <div class="percentsaving">6% off</div>

                                                    <div class="button-group">
                                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('31 ');">
                                                            <i class="fa fa-heart"></i></button>
                                                        <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index-56.html?route=product/quick_view&amp;product_id=31">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('31 ');">
                                                            <i class="fa fa-exchange"></i></button>
                                                        <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('31 ');"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>
                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="index-55.html?route=product/product&amp;product_id=31 ">Laudant Doloremque </a></h4>


                                                        <p class="price">
                                                            <span class="price-new">$92.00</span> <span class="price-old">$98.00</span>
                                                            <span class="price-tax">Ex Tax: $75.00</span>
                                                        </p>


                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="index-43.html?route=product/product&amp;product_id=41">
                                                        <img src="image\cache\catalog\11-277x277.jpg" title="Nostrud Exercitation" alt="Nostrud Exercitation" class="img-responsive reg-image">
                                                        <img class="img-responsive hover-image" src="image\cache\catalog\02-277x277.jpg" title="Nostrud Exercitation" alt="Nostrud Exercitation">
                                                    </a>


                                                    <span class="saleicon sale">Sale</span>

                                                    <div class="percentsaving">6% off</div>

                                                    <div class="button-group">
                                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('41 ');">
                                                            <i class="fa fa-heart"></i></button>
                                                        <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index-44.html?route=product/quick_view&amp;product_id=41">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('41 ');">
                                                            <i class="fa fa-exchange"></i></button>
                                                        <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('41 ');"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>
                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="index-43.html?route=product/product&amp;product_id=41 ">Nostrud Exercitation </a></h4>


                                                        <p class="price">
                                                            <span class="price-new">$78.80</span> <span class="price-old">$83.60</span>
                                                            <span class="price-tax">Ex Tax: $64.00</span>
                                                        </p>


                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="index-45.html?route=product/product&amp;product_id=40">
                                                        <img src="image\cache\catalog\13-277x277.jpg" title="Praesentium Voluptatum" alt="Praesentium Voluptatum" class="img-responsive reg-image">
                                                        <img class="img-responsive hover-image" src="image\cache\catalog\14-277x277.jpg" title="Praesentium Voluptatum" alt="Praesentium Voluptatum">
                                                    </a>


                                                    <span class="saleicon sale">Sale</span>

                                                    <div class="percentsaving">5% off</div>

                                                    <div class="button-group">
                                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('40 ');">
                                                            <i class="fa fa-heart"></i></button>
                                                        <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index-46.html?route=product/quick_view&amp;product_id=40">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('40 ');">
                                                            <i class="fa fa-exchange"></i></button>
                                                        <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('40 ');"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>
                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="index-45.html?route=product/product&amp;product_id=40 ">Praesentium Voluptatum </a></h4>


                                                        <p class="price">
                                                            <span class="price-new">$122.00</span> <span class="price-old">$128.00</span>
                                                            <span class="price-tax">Ex Tax: $100.00</span>
                                                        </p>


                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="index-53.html?route=product/product&amp;product_id=32">
                                                        <img src="image\cache\catalog\14-277x277.jpg" title="Reprehenderit Aliquam" alt="Reprehenderit Aliquam" class="img-responsive reg-image">
                                                        <img class="img-responsive hover-image" src="image\cache\catalog\05-277x277.jpg" title="Reprehenderit Aliquam" alt="Reprehenderit Aliquam">
                                                    </a>


                                                    <span class="saleicon sale">Sale</span>

                                                    <div class="percentsaving">7% off</div>

                                                    <div class="button-group">
                                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('32 ');">
                                                            <i class="fa fa-heart"></i></button>
                                                        <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index-54.html?route=product/quick_view&amp;product_id=32">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                        <button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('32 ');">
                                                            <i class="fa fa-exchange"></i></button>
                                                        <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('32 ');"><span>Add to Cart</span></button>
                                                    </div>
                                                </div>
                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="index-53.html?route=product/product&amp;product_id=32 ">Reprehenderit Aliquam </a></h4>


                                                        <p class="price">
                                                            <span class="price-new">$110.00</span> <span class="price-old">$118.40</span>
                                                            <span class="price-tax">Ex Tax: $90.00</span>
                                                        </p>


                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cz-status">
                                <i class="fa fa-frown-o"></i>
                                No more products found!
                            </div>
                            <div class="viewmore">
                                <button class="btn btn-default gridcount">All Products</button>
                            </div>

                        </div>
                        <span class="tabspecial_default_width" style="display:none; visibility:hidden"></span>
                    </div>

                </div>
            </div>

            <script type="text/javascript">
                $('#tabs a').tabs();

            </script>
            <div id="carousel-0" class="banners-slider-carousel box">
                <div class="container">
                    <div class="box-heading">Top Brands</div>
                    <div class="carousel-block">
                        <div class="customNavigation">
                            <a class="prev fa fa-arrow-left">&nbsp;</a>
                            <a class="next fa fa-arrow-right">&nbsp;</a>
                        </div>
                        <div class="product-carousel" id="module-0-carousel">
                            <div class="slider-item">
                                <div class="product-block">
                                    <div class="product-block-inner">
                                        <img src="image\cache\catalog\1-130x87.png" alt="NFL">
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="product-block">
                                    <div class="product-block-inner">
                                        <img src="image\cache\catalog\2-130x87.png" alt="RedBull">
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="product-block">
                                    <div class="product-block-inner">
                                        <img src="image\cache\catalog\3-130x87.png" alt="Sony">
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="product-block">
                                    <div class="product-block-inner">
                                        <img src="image\cache\catalog\4-130x87.png" alt="Coca Cola">
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="product-block">
                                    <div class="product-block-inner">
                                        <img src="image\cache\catalog\5-130x87.png" alt="Burger King">
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="product-block">
                                    <div class="product-block-inner">
                                        <img src="image\cache\catalog\6-130x87.png" alt="Canon">
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="product-block">
                                    <div class="product-block-inner">
                                        <img src="image\cache\catalog\7-130x87.png" alt="Harley Davidson">
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="product-block">
                                    <div class="product-block-inner">
                                        <img src="image\cache\catalog\1-130x87.png" alt="Dell">
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="product-block">
                                    <div class="product-block-inner">
                                        <img src="image\cache\catalog\2-130x87.png" alt="Disney">
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="product-block">
                                    <div class="product-block-inner">
                                        <img src="image\cache\catalog\3-130x87.png" alt="Starbucks">
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="product-block">
                                    <div class="product-block-inner">
                                        <img src="image\cache\catalog\4-130x87.png" alt="Nintendo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="module_default_width" style="display:none; visibility:hidden"></span>
            <div id="cztestimonialcmsblock">
                <div class="parallax czparallax_2" data-source-url="image/catalog/testimonial_parallax.jpg">
                    <div class="testimonial_container container">
                        <div class="testimonial_wrapper">
                            <div class="testimonial-area">
                                <ul id="testimonial-carousel" class="owl-carousel">
                                    <li class="item">
                                        <div class="testimonial-item">
                                            <div class="item cms_face">
                                                <div class="testimonial-image"><img src="image\catalog\user1.jpg" alt="testimonial-user1" title="testimonial-user1" width="95" height="95"></div>
                                            </div>
                                            <div class="product_inner_cms">
                                                <div class="title">
                                                    <div class="name"><a href="#">Din Desuza</a></div>
                                                    <span class="subheading">Manager</span>
                                                </div>
                                                <div class="des">Here are many variations of passages of Lorem Ipsum available, but the majority have suffered alte ation in some form, by injected humouror randomised don't look even.but the majority have suffered alte ation in some form, by injected humouror randomised
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="testimonial-item">
                                            <div class="item cms_face">
                                                <div class="testimonial-image"><img src="image\catalog\user2.jpg" alt="testimonial-user2" title="testimonial-user2" width="95" height="95"></div>
                                            </div>
                                            <div class="product_inner_cms">
                                                <div class="title">
                                                    <div class="name"><a href="#">luies charls</a></div>
                                                    <span class="subheading">Webdesigner</span>
                                                </div>
                                                <div class="des">Here are many variations of passages of Lorem Ipsum available, but the majority have suffered alte ation in some form, by injected humouror randomised don't look even.but the majority have suffered alte ation in some form, by injected humouror randomised

                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="testimonial-item">
                                            <div class="item cms_face">
                                                <div class="testimonial-image"><img src="image\catalog\user3.jpg" alt="testimonial-user3" title="testimonial-user3" width="95" height="95"></div>
                                            </div>
                                            <div class="product_inner_cms">
                                                <div class="title">
                                                    <div class="name"><a href="#">jecob goeckno</a></div>
                                                    <span class="subheading">Webdeveloper</span>
                                                </div>
                                                <div class="des">Here are many variations of passages of Lorem Ipsum available, but the majority have suffered alte ation in some form, by injected humouror randomised don't look even.but the majority have suffered alte ation in some form, by injected humouror randomised
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box blogs">
                <div class="container">

                    <div class="box-head">
                        <div class="box-heading">Latest Blog</div>
                    </div>
                    <div class="box-content">
                        <div class="customNavigation">
                            <a class="fa prev czblog_prev"></a>
                            <a class="fa next czblog_next"></a>
                        </div>

                        <div class="box-product  owl-carousel blogcarousel " id="blog-carousel">

                            <div class="blog-item">
                                <div class="product-block">
                                    <div class="product-block-inner">

                                        <div class="blog-left">
                                            <div class="blog-image">
                                                <img src="image\cache\catalog\blog-6-874x500.jpg" alt="Latest Blog" title="Latest Blog" class="img-thumbnail">
                                                <div class="post-image-hover"> </div>
                                                <p class="post_hover"><a class="icon zoom" title="Click to view Full Image " href="image\cache\catalog\blog-6-874x500.jpg" data-lightbox="example-set"><i class="fa fa-search-plus"></i> </a>
                                                    <a class="icon readmore_link" title="Click to view Read More " href="index-63.html?route=information/blogger&amp;blogger_id=6"><i class="fa fa-link"></i></a>
                                                </p>
                                            </div>

                                        </div>


                                        <div class="blog-right">
                                            <h4 class="blog_title"><a href="index-63.html?route=information/blogger&amp;blogger_id=6">Necessitatibus Saepe Eveniet</a> </h4>

                                            <div class="date-comment">
                                                <div class="date-time"> <i class="fa fa-calendar"></i>25 May </div>
                                                <div class="write-comment"> <a href="index-63.html?route=information/blogger&amp;blogger_id=6"> 0 Comments</a> </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="blog-item">
                                <div class="product-block">
                                    <div class="product-block-inner">

                                        <div class="blog-left">
                                            <div class="blog-image">
                                                <img src="image\cache\catalog\blog-5-874x500.jpg" alt="Latest Blog" title="Latest Blog" class="img-thumbnail">
                                                <div class="post-image-hover"> </div>
                                                <p class="post_hover"><a class="icon zoom" title="Click to view Full Image " href="image\cache\catalog\blog-5-874x500.jpg" data-lightbox="example-set"><i class="fa fa-search-plus"></i> </a>
                                                    <a class="icon readmore_link" title="Click to view Read More " href="index-64.html?route=information/blogger&amp;blogger_id=5"><i class="fa fa-link"></i></a>
                                                </p>
                                            </div>

                                        </div>


                                        <div class="blog-right">
                                            <h4 class="blog_title"><a href="index-64.html?route=information/blogger&amp;blogger_id=5">Urna pretium elit mauris cursus</a> </h4>

                                            <div class="date-comment">
                                                <div class="date-time"> <i class="fa fa-calendar"></i>25 May </div>
                                                <div class="write-comment"> <a href="index-64.html?route=information/blogger&amp;blogger_id=5"> 0 Comments</a> </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="blog-item">
                                <div class="product-block">
                                    <div class="product-block-inner">

                                        <div class="blog-left">
                                            <div class="blog-image">
                                                <img src="image\cache\catalog\blog-4-874x500.jpg" alt="Latest Blog" title="Latest Blog" class="img-thumbnail">
                                                <div class="post-image-hover"> </div>
                                                <p class="post_hover"><a class="icon zoom" title="Click to view Full Image " href="image\cache\catalog\blog-4-874x500.jpg" data-lightbox="example-set"><i class="fa fa-search-plus"></i> </a>
                                                    <a class="icon readmore_link" title="Click to view Read More " href="index-65.html?route=information/blogger&amp;blogger_id=4"><i class="fa fa-link"></i></a>
                                                </p>
                                            </div>

                                        </div>


                                        <div class="blog-right">
                                            <h4 class="blog_title"><a href="index-65.html?route=information/blogger&amp;blogger_id=4">Nullam ullamcorper ornare </a> </h4>

                                            <div class="date-comment">
                                                <div class="date-time"> <i class="fa fa-calendar"></i>25 May </div>
                                                <div class="write-comment"> <a href="index-65.html?route=information/blogger&amp;blogger_id=4"> 0 Comments</a> </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="blog-item">
                                <div class="product-block">
                                    <div class="product-block-inner">

                                        <div class="blog-left">
                                            <div class="blog-image">
                                                <img src="image\cache\catalog\blog-3-874x500.jpg" alt="Latest Blog" title="Latest Blog" class="img-thumbnail">
                                                <div class="post-image-hover"> </div>
                                                <p class="post_hover"><a class="icon zoom" title="Click to view Full Image " href="image\cache\catalog\blog-3-874x500.jpg" data-lightbox="example-set"><i class="fa fa-search-plus"></i> </a>
                                                    <a class="icon readmore_link" title="Click to view Read More " href="index-66.html?route=information/blogger&amp;blogger_id=3"><i class="fa fa-link"></i></a>
                                                </p>
                                            </div>

                                        </div>


                                        <div class="blog-right">
                                            <h4 class="blog_title"><a href="index-66.html?route=information/blogger&amp;blogger_id=3">Turpis at eleifend Aenean porta</a> </h4>

                                            <div class="date-comment">
                                                <div class="date-time"> <i class="fa fa-calendar"></i>25 May </div>
                                                <div class="write-comment"> <a href="index-66.html?route=information/blogger&amp;blogger_id=3"> 0 Comments</a> </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="blog-item">
                                <div class="product-block">
                                    <div class="product-block-inner">

                                        <div class="blog-left">
                                            <div class="blog-image">
                                                <img src="image\cache\catalog\blog-2-874x500.jpg" alt="Latest Blog" title="Latest Blog" class="img-thumbnail">
                                                <div class="post-image-hover"> </div>
                                                <p class="post_hover"><a class="icon zoom" title="Click to view Full Image " href="image\cache\catalog\blog-2-874x500.jpg" data-lightbox="example-set"><i class="fa fa-search-plus"></i> </a>
                                                    <a class="icon readmore_link" title="Click to view Read More " href="index-67.html?route=information/blogger&amp;blogger_id=2"><i class="fa fa-link"></i></a>
                                                </p>
                                            </div>

                                        </div>


                                        <div class="blog-right">
                                            <h4 class="blog_title"><a href="index-67.html?route=information/blogger&amp;blogger_id=2">Morbi condimentum molestie Nam</a> </h4>

                                            <div class="date-comment">
                                                <div class="date-time"> <i class="fa fa-calendar"></i>25 May </div>
                                                <div class="write-comment"> <a href="index-67.html?route=information/blogger&amp;blogger_id=2"> 0 Comments</a> </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="blog-item">
                                <div class="product-block">
                                    <div class="product-block-inner">

                                        <div class="blog-left">
                                            <div class="blog-image">
                                                <img src="image\cache\catalog\blog-1-874x500.jpg" alt="Latest Blog" title="Latest Blog" class="img-thumbnail">
                                                <div class="post-image-hover"> </div>
                                                <p class="post_hover"><a class="icon zoom" title="Click to view Full Image " href="image\cache\catalog\blog-1-874x500.jpg" data-lightbox="example-set"><i class="fa fa-search-plus"></i> </a>
                                                    <a class="icon readmore_link" title="Click to view Read More " href="index-68.html?route=information/blogger&amp;blogger_id=1"><i class="fa fa-link"></i></a>
                                                </p>
                                            </div>

                                        </div>


                                        <div class="blog-right">
                                            <h4 class="blog_title"><a href="index-68.html?route=information/blogger&amp;blogger_id=1">Curabitur at elit Vestibulum</a> </h4>

                                            <div class="date-comment">
                                                <div class="date-time"> <i class="fa fa-calendar"></i>25 May </div>
                                                <div class="write-comment"> <a href="index-68.html?route=information/blogger&amp;blogger_id=1"> 0 Comments</a> </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="buttons text-center">
                            <button type="button" onclick="location='https://codezeel.com/opencart/OPC03/OPC030066/index.php?route=information/blogger/blogs ';" class="btn btn-primary">See all Blogs</button>
                        </div>
                    </div>
                </div>
            </div>
            <span class="blog_default_width" style="display:none; visibility:hidden"></span>

            <script type="text/javascript">
                <!--
                $(document).ready(function() {
                    $('.blogcarousel').owlCarousel({
                        items: 3,
                        singleItem: false,
                        navigation: false,
                        pagination: false,
                        itemsDesktop: [1199, 2],
                        itemsDesktopSmall: [991, 2],
                        itemsTablet: [575, 1]
                    });
                    // Custom Navigation Events
                    $(".czblog_next").click(function() {
                        $('.blogcarousel').trigger('owl.next');
                    })
                    $(".czblog_prev").click(function() {
                        $('.blogcarousel').trigger('owl.prev');
                    });
                });

                -->
            </script>
            <script>
                function subscribe() {
                    var emailpattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                    var email = $('#txtemail').val();
                    if (email != "") {
                        if (!emailpattern.test(email)) {
                            $('.text-danger').remove();
                            var str = '<span class="error">Invalid Email</span>';
                            $('#txtemail').after('<div class="text-danger">Invalid Email</div>');

                            return false;
                        } else {
                            $.ajax({
                                url: 'index.php?route=extension/module/newsletters/news',
                                type: 'post',
                                data: 'email=' + $('#txtemail').val(),
                                dataType: 'json',


                                success: function(json) {

                                    $('.text-danger').remove();
                                    $('#txtemail').after('<div class="text-danger">' + json.message + '</div>');

                                }

                            });
                            return false;
                        }
                    } else {
                        $('.text-danger').remove();
                        $('#txtemail').after('<div class="text-danger">Email Is Require</div>');
                        $(email).focus();

                        return false;
                    }
                }

            </script>

            <div class="newsletter">
                <div class="container">
                    <h5 class="news-title">Get Daily Update</h5>
                    <div class="newsright">
                        <form action="" method="post">
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-firstname">Email</label>
                                <div class="input-news">
                                    <input type="email" name="txtemail" id="txtemail" value="" placeholder="Enter Your Email Address" class="form-control input-lg">
                                </div>
                                <div class="subscribe-btn">
                                    <button type="submit" class="btn btn-default btn-lg" onclick="return subscribe();"></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>



@stop