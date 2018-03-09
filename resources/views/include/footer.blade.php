

<div class="w3lsnewsletter" id="w3lsnewsletter">
        <div class="container">
            <div class="w3lsnewsletter-grids">
                <div class="col-md-5 w3lsnewsletter-grid w3lsnewsletter-grid-1 subscribe">
                    <h2>Subscribe to our Newsletter</h2>
                </div>
                <div class="col-md-7 w3lsnewsletter-grid w3lsnewsletter-grid-2 email-form">
                    <form action="#" method="post">
                        <input class="email" type="email" name="Email" placeholder="Email Address" required="">
                        <input type="submit" class="submit" value="SUBSCRIBE">
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

<div class="agileinfofooter">
        <div class="agileinfofooter-grids">

            <div class="col-md-4 agileinfofooter-grid agileinfofooter-grid1">
                <ul>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="mens.html">MEN'S</a></li>
                    <li><a href="mens_accessories.html">MEN'S ACCESSORIES</a></li>
                    <li><a href="womens.html">WOMEN'S</a></li>
                    <li><a href="womens_accessories.html">WOMEN'S ACCESSORIES</a></li>
                </ul>
            </div>

            <div class="col-md-4 agileinfofooter-grid agileinfofooter-grid2">
                <ul>
                    <li><a href="stores.html">STORE LOCATOR</a></li>
                    <li><a href="faq.html">FAQs</a></li>
                    <li><a href="codes.html">CODES</a></li>
                    <li><a href="icons.html">ICONS</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </div>

            <div class="col-md-4 agileinfofooter-grid agileinfofooter-grid3">
                <address>
                    <ul>
                        <li>40019 Parma Via Modena</li>
                        <li>Sant'Agata Bolognese</li>
                        <li>BO, Italy</li>
                        <li>+1 (734) 123-4567</li>
                        <li><a class="mail" href="mailto:mail@example.com">info@example.com</a></li>
                    </ul>
                </address>
            </div>
            <div class="clearfix"></div>

        </div>
    </div>
    
<!-- Copyright -->
    <div class="w3lscopyrightaits">
        <div class="col-md-8 w3lscopyrightaitsgrid w3lscopyrightaitsgrid1">
            <p>© 2017 Groovy Apparel. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="=_blank"> W3layouts </a></p>
        </div>
        <div class="col-md-4 w3lscopyrightaitsgrid w3lscopyrightaitsgrid2">
            <div class="agilesocialwthree">
                <ul class="social-icons">
                    <li><a href="#" class="facebook w3ls" title="Go to Our Facebook Page"><i class="fa w3ls fa-facebook-square" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="twitter w3l" title="Go to Our Twitter Account"><i class="fa w3l fa-twitter-square" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="googleplus w3" title="Go to Our Google Plus Account"><i class="fa w3 fa-google-plus-square" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="instagram wthree" title="Go to Our Instagram Account"><i class="fa wthree fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="youtube w3layouts" title="Go to Our Youtube Channel"><i class="fa w3layouts fa-youtube-square" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //Copyright -->



    <!-- Custom-JavaScript-File-Links -->

<!-- Default-JavaScript --><script src="{{ asset('/public/display/js/jquery-2.2.3.js') }}"></script>
<script src="{{ asset('/public/display/js/modernizr.custom.js') }}"></script>
    <!-- Custom-JavaScript-File-Links -->

    <!-- cart-js -->
    <script src="{{ asset('/public/display/js/minicart.js') }}"></script>
    <script>
        w3l.render();

        w3l.cart.on('w3agile_checkout', function (evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) { 
                }
            }
        });
    </script>  
    <!-- //cart-js --> 
        <!-- Shopping-Cart-JavaScript -->

        <!-- Header-Slider-JavaScript-Files -->
            <script type='text/javascript' src="{{ asset('/public/display/js/jquery.easing.1.3.js') }}"></script>
            <script type='text/javascript' src="{{ asset('/public/display/js/fluid_dg.min.js') }}"></script>
            <script type='text/javascript' src="{{ asset('/public/display/js/myscipt.js') }}"></script>
            <script src="{{ asset('/public/display/js/modernizr.custom.js') }}"></script>
            <script src="{{ asset('/public/display/js/minicart.js' ) }}"></script>
            <script>
                w3l.render();

                w3l.cart.on('w3agile_checkout', function (evt) {
                    var items, len, i;

                    if (this.subtotal() > 0) {
                        items = this.items();

                        for (i = 0, len = items.length; i < len; i++) { 
                        }
                    }
                });
            </script>  
            <script>jQuery(document).ready(function(){
                    jQuery(function(){
                        jQuery('#fluid_dg_wrap_4').fluid_dg({
                            height: 'auto',
                            loader: 'bar',
                            pagination: false,
                            thumbnails: true,
                            hover: false,
                            opacityOnGrid: false,
                            imagePath: '',
                            time: 4000,
                            transPeriod: 2000,
                        });
                    });
                })
            </script>
        <!-- //Header-Slider-JavaScript-Files -->

        <!-- Dropdown-Menu-JavaScript -->
            <script>
                $(document).ready(function(){
                    $(".dropdown").hover(
                        function() {
                            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                            $(this).toggleClass('open');
                        },
                        function() {
                            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                            $(this).toggleClass('open');
                        }
                    );
                });
            </script>
        <!-- //Dropdown-Menu-JavaScript -->

        <!-- Pricing-Popup-Box-JavaScript -->
            <script src="{{ asset('/public/display/js/jquery.magnific-popup.js') }}" type="text/javascript"></script>
            <script>
                $(document).ready(function() {
                    $('.popup-with-zoom-anim').magnificPopup({
                        type: 'inline',
                        fixedContentPos: false,
                        fixedBgPos: true,
                        overflowY: 'auto',
                        closeBtnInside: true,
                        preloader: false,
                        midClick: true,
                        removalDelay: 300,
                        mainClass: 'my-mfp-zoom-in'
                    });
                });
            </script>
        <!-- //Pricing-Popup-Box-JavaScript -->

        <!-- Model-Slider-JavaScript-Files -->
            <script src="{{ asset('/public/display/js/jquery.film_roll.js') }}"></script>
            <script>
                (function() {
                    jQuery(function() {
                        this.film_rolls || (this.film_rolls = []);
                        this.film_rolls['film_roll_1'] = new FilmRoll({
                            container: '#film_roll_1',
                            height: 560
                        });
                        return true;
                    });
                }).call(this);
            </script>
        <!-- //Model-Slider-JavaScript-Files -->

    <!-- //Custom-JavaScript-File-Links -->
            <script defer src="{{ asset('/public/display/js/jquery.flexslider.js') }}"></script>
            <script>
                $(window).load(function() {
                    $('.flexslider').flexslider({
                        animation: "slide",
                        controlNav: "thumbnails"
                    });
                });
            </script>


        <script src="{{ asset('/public/display/js/imagezoom.js') }}"></script>
        <!-- Bootstrap-JavaScript --> <script src="{{ asset('/public/display/js/bootstrap.js') }}"></script>

        <script type="text/javascript">
            function sale(id) {
                //alert(id);
                jQuery.ajax({
                type: "GET",
                url: "{{ route('cart.sale') }}", //"/gym-collection/admin/auth/products/search",
                data: "id=" +id,
                success: function(data,status) {
                    // alert(status);
                    $('#show-cart').html(data);
                }

    });
            }
            $(document).ready(function() {
                <?php
                    $count = Cart::content()->count();
                    for($i = 1; $i <= $count ; $i++) {         
                ?>
                $(".updatecart<?php echo $i?>").click(function () {
                    var rowid = $(this).attr('id');
                    var qty = $(this).parent().parent().find(".qty").val();
                    var token = $("input[name = '_token']").val();

                    if(qty == "") {
                        alert('Quanlity not allow null!!');
                    } else if(isNaN(qty)) {
                        alert('Quanlity must be a number'); 
                    } else if(qty < 1) {
                        alert('Quanlity must more than 1!!!');
                    } else {
                        $.ajax({
                            url:"{{ route('cart.update') }}",
                            type:'POST',
                            cache:false,
                            data:{"_token":token, "id":rowid, "qty":qty},
                            success:function(data, status) {
                                var kq = data;
                                var s = kq.split("/");
                                document.getElementById("total-pro<?php echo $i?>").innerHTML = s[0];
                                document.getElementById("total-cart").innerHTML = "Total:"+s[1].toString();
                            }
                        });
                    }
                });
                <?php
                }
                ?>
            });


            



        </script>

</body>
<!-- //Body -->



</html>