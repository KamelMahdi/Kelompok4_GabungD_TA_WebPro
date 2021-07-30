<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<div class="container">
    <div class="row">
        <div class="col">
            <br><br><br>
            <h2 class="my-3">Add review</h2>
            <br>
            <form action="/makanan/save" method="post">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" autofocus>
                    </div>
                </div>
                <br>
                <div class="row mb-3">
                    <label for="image" class="col-sm-2 col-form-label">image</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="image" name="image">
                    </div>
                </div>
                <br>
                <div class="row mb-3">
                    <label for="coment" class="col-sm-2 col-form-label">Review</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="coment" name="coment">
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>



<?= $this->endSection(''); ?>