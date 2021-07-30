<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>




<!--Page header & Title-->
<section id="page_header">
    <div class="page_title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Menu</h2>
                    <p>Various Kinds of Menu Below</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="gallery" class="padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="work-filter">
                    <ul class="text-center">
                        <li><a href="javascript:;" data-filter="all" class="active filter">All</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="zerogrid">
                <div class="wrap-container">
                    <div class="wrap-content clearfix">
                        <div class="col-1-3 mix work-item drinks heading_space">
                            <div class="wrap-col">
                                <div class="item-container">
                                    <div class="image">
                                        <img src="/assets/images/salmon2.jpg" alt="cook" />
                                        <a href="/asssets/images/salmon2.jpg" data-fancybox-group="gallery"></a>
                                    </div>
                                    <div class="gallery_content">
                                        <h3><a> Salmon Sushi</a></h3>
                                        <p>Chef Ridho's Choice of Salmon</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1-3 mix work-item starters heading_space">
                            <div class="wrap-col">
                                <div class="item-container">
                                    <div class="image">
                                        <img src="/assets/images/crab.jpg" alt="cook" />
                                        <a href="/assets/images/crab.jpg" data-fancybox-group="gallery"></a>
                                    </div>
                                    <div class="gallery_content">
                                        <h3><a>Lobster</a></h3>
                                        <p>Captured Directly By Chef Ridho</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1-3 mix work-item dinner heading_space">
                            <div class="wrap-col">
                                <div class="item-container">
                                    <div class="image">
                                        <img src="/assets/images/stick.jpg" alt="cook" />
                                        <a href="/assets/images/stick.jpg" data-fancybox-group="gallery"></a>
                                    </div>
                                    <div class="gallery_content">
                                        <h3><a>Crab Sticks</a></h3>
                                        <p>Made Directly By Famous Chef Ridho</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1-3 mix work-item drinks heading_space">
                            <div class="wrap-col">
                                <div class="item-container">
                                    <div class="image">
                                        <img src="/assets/images/Oyster.jpg" alt="cook" />
                                        <a href="/assets/images/Oyster.jpg" data-fancybox-group="gallery"></a>
                                    </div>
                                    <div class="gallery_content">
                                        <h3><a>Oyster</a></h3>
                                        <p>Chef Ridho's Favorite Sea Shells</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1-3 mix work-item dinner heading_space">
                            <div class="wrap-col">
                                <div class="item-container">
                                    <div class="image">
                                        <img src="/assets/images/river.jpg" alt="cook" />
                                        <a href="/assets/images/river.jpg" data-fancybox-group="gallery"></a>
                                    </div>
                                    <div class="gallery_content">
                                        <h3><a>River Prawns Grilled</a></h3>
                                        <p>Chef Ridho's Latest Processed Grilled Prawns Or Can Be Called Grilled Lobster</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1-3 mix work-item lunch heading_space">
                            <div class="wrap-col">
                                <div class="item-container">
                                    <div class="image">
                                        <img src="/assets/images/Jean.jpg" alt="cook" />
                                        <a href="/assets/images/Jean.jpg" data-fancybox-group="gallery"></a>
                                    </div>
                                    <div class="gallery_content">
                                        <h3><a>Frozen MilkyTea</a></h3>
                                        <p>Chef Ridho drinks at dusk</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<?= $this->endSection(''); ?>