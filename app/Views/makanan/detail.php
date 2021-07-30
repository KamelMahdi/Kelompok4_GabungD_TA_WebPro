<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>



<div class="container">
    <div class="row">
        <div class="col">

            <div class="card mb-3">
                <img src="/assets/images/<?= $review['image']; ?>" class="card-img-top" alt="..." width="500">
                <div class="card-body">
                    <h5 class="card-title"><?= $review['name']; ?></h5>
                    <p class="card-text"><?= $review['coment']; ?></p>
                    <a href="" class="btn btn-warning">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                    <a href="<?= base_url('/makanan'); ?>" class="btn btn-success">Go Back</a>

                    <p class="card-text"><small class="text-muted"><?= $review['created_at']; ?></small></p>
                </div>
            </div>

        </div>
    </div>
</div>







<?= $this->endSection(''); ?>