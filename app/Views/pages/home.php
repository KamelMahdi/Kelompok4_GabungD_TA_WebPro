<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<!-- REVOLUTION SLIDER -->
<section class="rev_slider_wrapper">
    <div id="rev_slider" class="rev_slider" data-version="5.0">
        <ul>
            <!-- SLIDE  -->
            <li data-transition="fade">
                <!-- MAIN IMAGE -->
                <div class="image_container">
                    <img src="/assets/images/sea.jpg" class="img-responsive" alt="blog post">
                </div>
                <!-- LAYER NR. 1             -->
                <h1 class="tp-caption tp-resizeme text-center" data-x="center" data-hoffset="15" data-y="170" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none" style="z-index: 6;">

                </h1>
                </p>
            </li>

        </ul>
    </div>
</section>

<!-- END REVOLUTION SLIDER -->




<!--Features Section-->
<section class="feature_wrap padding-half" id="specialities">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="heading ">Our &nbsp; Specialities</h2>
                <hr class="heading_space">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 feature text-center">
                <i class="icon-glass"></i>
                <h3><a href="#">Dinner &amp; Dessert</a></h3>
                <p> we can make you a very delicious dinner and dessert.</p>
            </div>
            <div class="col-md-3 col-sm-6 feature text-center">
                <i class="icon-coffee"></i>
                <h3><a href="#">Breakfast</a></h3>
                <p> a good breakfast is everyone's desire before doing daily activities.</p>
            </div>
            <div class="col-md-3 col-sm-6 feature text-center">
                <i class="icon-glass"></i>
                <h3><a href="#">Ice Shakes</a></h3>
                <p> cold ice shake can keep you stamina during your busy day.</p>
            </div>
            <div class="col-md-3 col-sm-6 feature text-center">
                <i class="icon-coffee"></i>
                <h3><a href="#">Beverges</a></h3>
                <p> our beverges quench thirst for a long time.</p>
            </div>
        </div>

    </div>
</section>

<!-- testinomial -->
<section id="testinomial" class="padding">
    <div class="container">

        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="heading">Our &nbsp; happy &nbsp; Customers</h2>
                <hr class="heading_space">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="testinomial-slider" class="owl-carousel text-center">
                    <div class="item">
                        <h3>Seafood dishes, chicken pecel, cheap catfish in the area of ​​Jalan Raya Bogor in front of Planet Ban. the sauce bounces, the price is affordable and the variety of food is quite complete, there are pomfret, carp also cah kale which challenges the spicy there is a parking lot, unfortunately it can't be eaten on the spot because of the PSBB.</h3>
                        <p>Zulkifli</p>
                    </div>
                    <div class="item">
                        <h3>The place is quite big, there are 2 shophouses but separate, the place to eat is only on the ground floor. Car park in the shop next door & under the Transjakarta flyover. The shop is quite popular so it is very full, in pandemic conditions it is a bit risky. The food is delicious, the price is not expensive either.</h3>
                        <p>Kamel</p>
                    </div>
                    <div class="item">
                        <h3>Family favorite seafood restaurant, large parking area and cheap prices. For the quality of fresh seafood and lots of choices. For friendly and fast service. Good and cheap seafood restaurant, go to Bogor again</h3>
                        <p>Ridho</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?= $this->endSection(''); ?>