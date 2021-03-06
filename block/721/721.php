<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/721.less', 'css/721.css');
        ?>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/721.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="type-721">
            <div class="tabberlive_outer_sub">
                <div class=" container-width">
                    <div class="htabs">
                        <ul class="tabbernav_product">
                            <li><a class="tab-text selected"  data-toggle="tab" title="tab_product" href="#newproducts"  data-text="Latest"><span>Latest</span></a></li>
                            <li><a class="tab-text "  data-toggle="tab"  title="tab_product" href="#newproducts"  data-text="Best Seller"><span>Best Seller</span></a></li>
                            <li><a class="tab-text " data-toggle="tab"  title="tab_product" href="#newproducts"  data-text="Special"><span>Special</span></a></li>
                            <li><a class="tab-text" data-toggle="tab"  title="tab_product" href="#newproducts"  data-text="featured"><span>featured</span></a></li>
                        </ul>
                    </div>
                    <div class="tabs">    
                        <div class="tab-content">
                            <div class="tab-pane fade in active">
                                <ul class="products-grid">
                                    <li class="item">
                                        <!------div class product-block-inner----->
                                        <div class="product-block">
                                            <!---------div class product-block----------->
                                            <div class="product-block-inner">
                                                <div class="product-image-block-inner">
                                                    <div class="product-image-block">
                                                        <div class="new-label">New</div>
                                                        <a href="#" title="Donec semper sem nec available" class="product-image">
                                                            <img src="images/23_2.jpg" alt=""/>
                                                            <img class="hover-image" src="images/19_3_2.jpg" alt="Donec semper sem nec available">
                                                        </a>
                                                        <div class="product_hover-block">
                                                            <div class="actions">
                                                                <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#donec-semper-sem-nec-available.html?options=cart')"><span>Add to Cart</span></button>
                                                                <ul class="add-to-links">
                                                                    <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                    <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product_desc">
                                                    <h2 class="product-name"><a href="#" title="Donec semper sem nec available">Donec semper sem nec available</a></h2>
                                                    <div class="price-box">
                                                        <span class="regular-price" >
                                                            <span class="price">$360.00</span> </span>
                                                    </div>
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating"></div>
                                                        </div>
                                                        <span class="amount">1 Review(s)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End div class product-block-->
                                        </div>
                                        <!-- End div class product-block-inner -->
                                    </li>
                                    <li class="item">
                                        <!-----------div class product-block-inner-------------->
                                        <div class="product-block">
                                            <!-----div class product-block---------->
                                            <div class="product-block-inner">
                                                <div class="product-image-block-inner">
                                                    <div class="product-image-block">
                                                        <div class="new-label">New</div>
                                                        <a href="#" title="Justo neque Ipsum" class="product-image">
                                                            <img src="images/9_4_5.jpg" alt="">
                                                            <img class="hover-image" src="images/10_4_5.jpg" alt="Justo neque Ipsum">
                                                        </a>
                                                        <div class="product_hover-block">
                                                            <div class="actions">
                                                                <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#justo-neque-ipsum.html?options=cart')"><span>Add to Cart</span></button>
                                                                <ul class="add-to-links">
                                                                    <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                    <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product_desc">
                                                    <h2 class="product-name">
                                                        <a href="#" title="Justo neque Ipsum">Justo neque Ipsum</a>
                                                    </h2>
                                                    <div class="price-box">
                                                        <span class="regular-price" >
                                                            <span class="price">$625.00</span>
                                                        </span>
                                                    </div>
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End div class product-block-->
                                        </div>
                                        <!-- End div class product-block-inner -->
                                    </li>
                                    <li class="item">
                                        <!-----------div class product-block-inner-------------->
                                        <div class="product-block">
                                            <!-----div class product-block---------->
                                            <div class="product-block-inner">
                                                <div class="product-image-block-inner">
                                                    <div class="product-image-block">
                                                        <div class="new-label">New</div>
                                                        <div class="sale-label">Sale</div>
                                                        <a href="#" title="Ifashion ipsum dolor amet" class="product-image">
                                                            <img src="images/8_1_10.jpg" alt="">
                                                            <img class="hover-image" src="images/9_4_5.jpg" alt="Ifashion ipsum dolor amet">
                                                        </a>
                                                        <div class="product_hover-block">
                                                            <div class="actions">
                                                                <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#consectetur-adipiscing-ipsum-available-56.html?options=cart')"><span>Add to Cart</span></button>
                                                                <ul class="add-to-links">
                                                                    <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                    <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product_desc">
                                                    <h2 class="product-name"><a href="#" title="Ifashion ipsum dolor amet">Ifashion ipsum dolor amet</a></h2>
                                                    <div class="price-box">
                                                        <span class="price old-price" >$970.00 </span>
                                                        <span class="price" >$860.00 </span>
                                                    </div>
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End div class product-block-->
                                        </div>
                                        <!-- End div class product-block-inner -->
                                    </li>
                                    <li class="item">
                                        <!-----------div class product-block-inner-------------->
                                        <div class="product-block">
                                            <!-----div class product-block---------->
                                            <div class="product-block-inner">
                                                <div class="product-image-block-inner">
                                                    <div class="product-image-block">
                                                        <div class="new-label">New</div>
                                                        <a href="#" title="feminine designs delivering stylish" class="product-image">
                                                            <img src="images/4_1_8.jpg" alt="">
                                                            <img class="hover-image" src="images/5_10.jpg" alt="feminine designs delivering stylish">
                                                        </a>
                                                        <div class="product_hover-block">
                                                            <div class="actions">
                                                                <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#feminine-designs-delivering-stylish.html?options=cart')"><span>Add to Cart</span></button>

                                                                <ul class="add-to-links">
                                                                    <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                    <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product_desc">
                                                    <h2 class="product-name"><a href="#" title="feminine designs delivering stylish">feminine designs delivering stylish</a></h2>
                                                    <div class="price-box">
                                                        <span class="regular-price" >
                                                            <span class="price">$580.00</span>
                                                        </span>
                                                    </div>
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End div class product-block-->
                                        </div>
                                        <!-- End div class product-block-inner -->
                                    </li>
                                    <li class="item">
                                        <!-----------div class product-block-inner-------------->
                                        <div class="product-block">
                                            <!-----div class product-block---------->
                                            <div class="product-block-inner">
                                                <div class="product-image-block-inner">
                                                    <div class="product-image-block">
                                                        <div class="new-label">New</div>
                                                        <a href="#" title="expound the actual teachings ofgreat" class="product-image">

                                                            <img src="images/7_3_4.jpg" alt="">
                                                            <img class="hover-image" src="images/8_1_10.jpg" alt="expound the actual teachings ofgreat">

                                                        </a>
                                                        <div class="product_hover-block">
                                                            <div class="actions">
                                                                <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#expound-the-actual-teachings-ofgreat.html?options=cart')"><span>Add to Cart</span></button>
                                                                <ul class="add-to-links">
                                                                    <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                    <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product_desc">
                                                    <h2 class="product-name">
                                                        <a href="#" title="expound the actual teachings ofgreat">expound the actual teachings ofgreat</a>
                                                    </h2>
                                                    <div class="price-box">
                                                        <span class="regular-price" >
                                                            <span class="price">$300.00</span> 
                                                        </span>
                                                    </div>
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End div class product-block-->
                                        </div>
                                        <!-- End div class product-block-inner -->
                                    </li>
                                    <li class="item">
                                        <!-----------div class product-block-inner-------------->
                                        <div class="product-block">
                                            <!-----div class product-block---------->
                                            <div class="product-block-inner">
                                                <div class="product-image-block-inner">
                                                    <div class="product-image-block">
                                                        <div class="new-label">New</div>
                                                        <div class="sale-label">Sale</div>
                                                        <a href="#" title="established fact variations of passages" class="product-image">
                                                            <img src="images/5_10.jpg" alt="">
                                                            <img class="hover-image" src="images/6_1_2.jpg" alt="established fact variations of passages">
                                                        </a>
                                                        <div class="product_hover-block">
                                                            <div class="actions">
                                                                <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#established-fact-variations-of-passages-44.html?options=cart')"><span>Add to Cart</span></button>
                                                                <ul class="add-to-links">
                                                                    <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                    <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product_desc">
                                                    <h2 class="product-name"><a href="#" title="established fact variations of passages">established fact variations of passages</a></h2>
                                                    <div class="price-box">
                                                        <span class="price old-price" >$400.00 </span>
                                                        <span class="price" >$325.00 </span>
                                                    </div>
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End div class product-block-->
                                        </div><!-- End div class product-block-inner -->
                                    </li>
                                    <li class="item">
                                        <!-----------div class product-block-inner-------------->
                                        <div class="product-block">
                                            <!-----div class product-block---------->
                                            <div class="product-block-inner">
                                                <div class="product-image-block-inner">
                                                    <div class="product-image-block">
                                                        <div class="new-label">New</div>
                                                        <div class="sale-label">Sale</div>
                                                        <a href="#" title="Lorem ipsum dolor simply sed" class="product-image">
                                                            <img src="images/2_10.jpg" alt="">
                                                            <img class="hover-image" src="images/4_1_8.jpg" alt="Lorem ipsum dolor simply sed">
                                                        </a>
                                                        <div class="product_hover-block">
                                                            <div class="actions">
                                                                <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#?options=cart')"><span>Add to Cart</span></button>
                                                                <ul class="add-to-links">
                                                                    <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                    <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product_desc">
                                                    <h2 class="product-name"><a href="#" title="Lorem ipsum dolor simply sed">Lorem ipsum dolor simply sed</a></h2>
                                                    <div class="price-box">
                                                        <span class="price old-price" >$780.00 </span>
                                                        <span class="price" >$680.00 </span>
                                                    </div>
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End div class product-block-->
                                        </div>
                                        <!-- End div class product-block-inner -->
                                    </li>
                                    <li class="item">
                                        <!-----------div class product-block-inner-------------->
                                        <div class="product-block">
                                            <!-----div class product-block---------->
                                            <div class="product-block-inner">
                                                <div class="product-image-block-inner">
                                                    <div class="product-image-block">
                                                        <div class="new-label">New</div>
                                                        <div class="sale-label">Sale</div>
                                                        <a href="#" title="Arcu vitae imperdiet simply" class="product-image">
                                                            <img src="images/1_4.jpg" alt="">
                                                            <img class="hover-image" src="images/2_10.jpg" alt="Arcu vitae imperdiet simply">
                                                        </a>
                                                        <div class="product_hover-block">
                                                            <div class="actions">
                                                                <button type="button" title="Add to Cart" class="button btn-cart" onclick="setLocation('#arcu-vitae-imperdiet-simply.html?options=cart')"><span>Add to Cart</span></button>
                                                                <ul class="add-to-links">
                                                                    <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a></li>
                                                                    <li><a href="#" class="link-compare" title="Add to Compare">Add to Compare</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product_desc">
                                                    <h2 class="product-name"><a href="#" title="Arcu vitae imperdiet simply">Arcu vitae imperdiet simply</a></h2>
                                                    <div class="price-box">
                                                        <span class="price old-price" >$860.00 </span>
                                                        <span class="price" >$800.00 </span>
                                                    </div>
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End div class product-block-->
                                        </div>
                                        <!-- End div class product-block-inner -->
                                    </li>
                                </ul>
                                <div class="view_actions"><a href="#newproducts">View All Products</a></div>
                            </div>
                        </div>

                        
                    </div>

                </div>
            </div>
        </div>

    </body>
</html>
