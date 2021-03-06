@extends('include.layout')
@section('title','Home')
@section('content')
<!-- Latest-Arrivals -->
@include('include.slider')
    <div class="wthreehome-latest">
        <div class="container">

            <div class="wthreehome-latest-grids">
                <div class="col-md-6 wthreehome-latest-grid wthreehome-latest-grid1">
                    <div class="grid">
                        <figure class="effect-apollo">
                            <img src="{{ asset('/public/display/images/home-latest-1.jpg') }}" alt="Groovy Apparel">
                            <figcaption></figcaption>
                        </figure>
                    </div>
                    <h4>DENIM TOPS</h4>
                    <h5>Lorem Ipsum Dolor Site Amet</h5>
                    <h6><a href="womens.html">Shop Now</a></h6>
                </div>
                <div class="col-md-6 wthreehome-latest-grid wthreehome-latest-grid2">
                    <div class="grid">
                        <figure class="effect-apollo">
                            <img src="{{ asset('/public/display/images/home-latest-2.jpg') }}" alt="Groovy Apparel">
                            <figcaption></figcaption>
                        </figure>
                    </div>
                    <h4>LEATHER JACKETS</h4>
                    <h5>Lorem Ipsum Dolor Site Amet</h5>
                    <h6><a href="womens.html">Shop Now</a></h6>
                </div>
                <div class="col-md-6 wthreehome-latest-grid wthreehome-latest-grid3">
                    <div class="grid">
                        <figure class="effect-apollo">
                            <img src="{{ asset('/public/display/images/home-latest-3.jpg') }}" alt="Groovy Apparel">
                            <figcaption></figcaption>
                        </figure>
                    </div>
                    <h4>WATCHES</h4>
                    <h5>Lorem Ipsum Dolor Site Amet</h5>
                    <h6><a href="womens_accessories.html">Shop Now</a></h6>
                </div>
                <div class="col-md-6 wthreehome-latest-grid wthreehome-latest-grid4">
                    <div class="grid">
                        <figure class="effect-apollo">
                            <img src="{{ asset('/public/display/images/home-latest-4.jpg') }}" alt="Groovy Apparel">
                            <figcaption></figcaption>
                        </figure>
                    </div>
                    <h4>BEACH WEAR</h4>
                    <h5>Lorem Ipsum Dolor Site Amet</h5>
                    <h6><a href="mens.html">Shop Now</a></h6>
                </div>
            </div>
            <div class="clearfix"></div>

        </div>
    </div>
    <!-- //Latest-Arrivals -->



    <!-- Winter-Collection -->
    <div class="wthreewinter-coll">
        <div class="container">
            <h1>BRACE YOURSELVES! WINTER IS COMING...</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="wthreeshop-a">
                <a href="womens.html">SHOP WINTER COLLECTION</a>
            </div>
        </div>
    </div>
    <!-- //Winter-Collection -->



    <!-- Denim-Collection -->
    <div class="wthreedenim-coll">
        <div class="style-grids">
            <div class="col-md-6 style-grid style-grid-1">
                <img src="{{ asset('/public/display/images/style-1.jpg') }}" alt="Groovy Apparel">
                <div class="style-grid-1-text">
                    <h3>DENIM JEANS</h3>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.</p>
                    <div class="wthreeshop-a">
                        <a href="womens.html">SHOP DENIM COLLECTION</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 style-grid style-grid-2">
                <div class="style-image-1">
                    <img src="{{ asset('/public/display/images/style-2.jpg') }}" alt="Groovy Apparel">
                    <div class="style-grid-2-text">
                        <h3>WATER REPELLENT</h3>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
                    </div>
                </div>
                <div class="style-image-2">
                    <img src="{{ asset('/public/display/images/style-3.jpg') }}" alt="Groovy Apparel">
                    <div class="style-grid-2-text">
                        <h3>STITCHED TO PERFECTION</h3>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //Denim-Collection -->



    <!-- Clearance-Sale -->
    <div class="aitsclearance-sales">
        <div class="aitsclearance-sales-text">
            <h2>ALL CLEARANCE ITEMS</h2>
            <h4>BUY ONE AND GET ONE FREE</h4>
            <h5>50% OFF <small>On selected products<sup>*</sup></small></h5>
            <div class="wthreeshop-a">
                <a href="mens.html">SHOP NOW</a>
            </div>
        </div>
    </div>
    <!-- //Clearance-Sale -->



    <!-- Shopping -->
    <!-- <div class="agileshopping">
        <div class="container">

            <div class="agileshoppinggrids">
                <div class="col-md-6 agileshoppinggrid agileshoppinggrid1">
                    <div class="grid">
                        <figure class="effect-apollo">
                            <img src="{{ asset('/public/display/images/mens.jpg') }}" alt="Groovy Apparel">
                            <figcaption></figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-md-6 agileshoppinggrid agileshoppinggrid2">
                    <div class="grid">
                        <figure class="effect-apollo">
                            <img src="{{ asset('/public/display/images/womens.jpg') }}" alt="Groovy Apparel">
                            <figcaption></figcaption>
                        </figure>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="agileshoppinggrids-bottom">
                <h3>CHOOSE THE BEST FOR YOU</h3>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock.</p>
                <div class="agileshoppinggrids-bottom-grids">
                    <div class="col-md-6 agileshoppinggrids-bottom-grid agileshoppinggrids-bottom-grid1">
                        <div class="wthreeshop-a">
                            <a href="mens.html">SHOP MEN</a>
                        </div>
                    </div>
                    <div class="col-md-6 agileshoppinggrids-bottom-grid agileshoppinggrids-bottom-grid2">
                        <div class="wthreeshop-a">
                            <a href="womens.html">SHOP WOMEN</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
    </div> -->
    <!-- //Shopping -->



    


    
@endsection