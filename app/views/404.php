<?php $this->layout('base'); ?>

<div class="card-cols width-limit">
    <div class="card">
        <header>
            <h1>404 - <?= $this->trans('page_not_found') ?></h1>
        </header>
        <section>
            <p><?= $this->trans('404_desc') ?></p>
            <p><?= $this->trans('404_redirect_prefix') ?> <a href="/"><?= $this->trans('404_redirect_text') ?></a>.</p>
            <div class="search-bar">
                <form>
                    <input type="text" name="search" placeholder="<?= $this->trans('search') ?>">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
            <div class="clear"></div>
        </section>
    </div>
</div>