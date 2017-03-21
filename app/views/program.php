<?php $this->layout('base') ?>

<div class="page">
    <div class="card card-image">
        <img src="<?= $content->getImageLink() ?>">
    </div>
</div>

<div class="page">
    <div class="card">
        <h1> <?= $content->getProgramName(); ?> <span class="small">/ major</span></h1>
        <?= $content->getBody(); ?>
    </div>
</div>
<div class="page">
    <div class="card">
        <div class="card card-gray">
            <h1>Contact</h1>
        </div>
        <div class="card card-gray">
            <h1>Zie ook</h1>
        </div>
        <div class="card card-gray">
            <h1>Gerelateerd</h1>
        </div>
    </div>
</div>