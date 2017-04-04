<?php $this->layout('base'); ?>

<div class="card-cols width-limit">
    <div class="card breadcrumb">
        <a href="/">Home</a><span>/</span>
        <a href="#"><?= $this->trans('search') ?></a>
    </div>
    <div class="search-bar">
        <form>
            <input type="text" name="query" placeholder="<?= $this->trans('search') ?>">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
    </div>
    <div class="clear"></div>
    <main class="col-3-double">
        <div class="card search-card">
            <p class="search-result"><?= $this->trans('search_results') ?> <span><?= isset($query) ? htmlentities($query) : '' ?></span></p>
            <ul class="search-list">
                <?php if (count($pages) > 0): ?>
                    <?php foreach ($pages as $result): ?>
                        <li>
                            <a href="<?= $result->getLink()->getDestination() ?>">
                                <h1><?= $result->getLink()->getName() ?></h1>
                                <p><?= substr($result->getBody(), 0, 80) ?>...</p>
                            </a>
                        </li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li><h2><?= $this->trans('search_no_results') ?></h2></li>
                <?php endif; ?>
            </ul>
        </div>
    </main>