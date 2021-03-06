<!--Loader-->
<div class="loader">
    <div class="cssload-container">
        <div class="cssload-circle"></div>
        <div class="cssload-circle"></div>
    </div>
</div>

<!--Top bar-->
<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="pull-left hidden-xs">Seafood, the Best in Bogor </p>
                <p class="pull-right"><i class="fa fa-phone"></i>contac 111-222-3333</p>
            </div>
        </div>
    </div>
</div>


<header id="main-navigation">
    <div id="navigation" data-spy="affix" data-offset-top="20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#fixed-collapse-navbar" aria-expanded="false">
                                <span class="icon-bar top-bar"></span> <span class="icon-bar middle-bar"></span> <span class="icon-bar bottom-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.php"><img src="/assets/images/favicon.png" alt="logo" class="img-responsive"></a>
                        </div>

                        <div id="fixed-collapse-navbar" class="navbar-collapse collapse navbar-right">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="<?= base_url('/'); ?>">Home</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('/pages/menu'); ?>">Menu</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('/makanan'); ?>">Review</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('/pages/location'); ?>">Profile</a>
                                </li>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>