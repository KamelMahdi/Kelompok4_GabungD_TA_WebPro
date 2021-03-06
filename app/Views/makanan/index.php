<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<!--Page header & Title-->
<section id="page_header">
    <div class="page_title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Review</h2>
                    <p>here are comments about the menu that we have served</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Blogs -->
<section id="blog" class="padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7">
                <div class="blog_item padding-bottom">
                    <h2>Review</h2>
                    <ul class="comments">
                        <li><a href="#.">Jan 10, 2021</a></li>
                        <li><a href="#."><i class="icon-chat-2"></i>5</a></li>
                    </ul>
                    <div class="image_container">
                        <img src="/assets/images/salmon2.jpg" class="img-responsive" alt="blog post">
                    </div>
                    <p>This typical Japanese food will never die! When talking about sushi, what comes to mind is sushi with pieces of salmon on top. The taste that feels fresh and a little sweet is indeed craving. No wonder this menu is a favorite of Ichiban loyal visitors. For those of you who are trying sushi for the first time. There's nothing wrong with trying this sushi.</p>
                    <a href="/makanan/create/" class="btn btn-primary mb-3">Review</a>
                    <?php if (session()->getFlashdata('pesan')) : ?>

                        <div class="alert alert-info" role="alert">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>

                    <?php endif; ?>
                    <div class="tabel1">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($review as $k) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><img src="/assets/images/<?= $k['image']; ?>" alt="" class="gambarz"></td>
                                        <td><?= $k['name']; ?></td>
                                        <td>
                                            <a href="/makanan/<?= $k['slug']; ?>" class="btn btn-success">Detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                    <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

</section>



<?= $this->endSection(''); ?>