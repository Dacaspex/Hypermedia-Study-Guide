<?php $this->layout('base'); ?>

<header class="top-header width-limit js-header">
    <div class="header-image js-header-image">
        <img src="https://virtualvisit.tue.nl/media/hotspot-data/science-park-1.jpg">
    </div>
    <div class="product js-product"><div>Studyguide</div></div>
</header>

<div class="card card-full visible width-limit">
    <nav class="study-selector js-carousel" clickable-menu="true">
        <div class="study-menu js-carousel-menu">
            <div class="study-menu-item active">Bachelor</div>
            <div class="study-menu-item">Pre-Master</div>
            <div class="study-menu-item">Master</div>
        </div>
        <div class="study-list js-expandable-list-body" closed-height="200px">
            <div class="js-carousel-slide hor-scroll">
                <div class="js-carousel-inner col-3-parent">
                    <div class="study-list-item col-3">
                        <h2>Bachelor</h2>
                        <!--Hier komt de lijst voor de bachelor studies-->
                        <ul>
                            <?php foreach ($programs['bachelors'] as $program): ?>
                                <li><a href="/bachelor/<?= $program['slug'] ?>/overview"><?= $program['name'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="study-list-item col-3">
                        <h2>Pre-Master</h2>
                        <!--Hier komt de lijst voor de Pre-Master studies-->
                        <ul>
                            <?php foreach ($programs['preMaster'] as $program): ?>
                                <li><a href="/bachelor/<?= $program['slug'] ?>/overview"><?= $program['name'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="study-list-item col-3">
                        <h2>Master</h2>
                        <!--Hier komt de lijst voor de Master studies-->
                        <ul>
                            <?php foreach ($programs['masters'] as $program): ?>
                                <li><a href="/bachelor/<?= $program['slug'] ?>/overview"><?= $program['name'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="study-list-expand js-expandable-list-bar">
            <div class="js-expandable-list-button"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
        </div>
    </nav>
</div>

<div class="card card-blue">
    <div class="width-limit">
        <div class="blue-bar">
            <header>
                <h1><i class="fa fa-book" aria-hidden="true"></i><?= $this->trans('guide_text_title') ?></h1>
            </header>
            <section>
                <p><?= $this->trans('guide_text_body') ?></p>
                <a href="#"><?= $this->trans('read_more') ?></a>
            </section>
        </div>
    </div>
</div>

<div class="card-cols width-limit">
    <main class="col-3-double">
        <div class="card">
            <header>
                <h1><?= $this->trans('studyguide') ?></h1>
            </header>
            <time>21-2-2017 | 18:00</time>
            <section>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur cursus sem sed faucibus malesuada. Nullam gravida interdum aliquet. Nam dignissim gravida leo, vitae bibendum erat bibendum in. Pellentesque eget mauris urna. Proin dictum tortor ut
                    ex posuere, et laoreet urna eleifend. Vivamus aliquam tempus turpis sit amet lobortis. Quisque bibendum velit id dui scelerisque, quis lobortis mi sollicitudin.</p>
            </section>
        </div>

        <div class="card">
            <header>
                <h1>TU/e news</h1>
            </header>
            <time>21-2-2017 | 18:00</time>
            <section>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur cursus sem sed faucibus malesuada. Nullam gravida interdum aliquet. Nam dignissim gravida leo, vitae bibendum erat bibendum in. Pellentesque eget mauris urna. Proin dictum tortor ut
                    ex posuere, et laoreet urna eleifend. Vivamus aliquam tempus turpis sit amet lobortis. Quisque bibendum velit id dui scelerisque, quis lobortis mi sollicitudin.</p>
            </section>
        </div>
    </main>

    <aside class="card col-3">
        <div class="card card-gray">
            <header>
                <h1>Contact</h1>
            </header>
            <section>
                <p>contact info</p>
            </section>
        </div>
        <div class="card card-gray">
            <header>
                <h1>Contact</h1>
            </header>
            <section>
                <p>contact info</p>
            </section>
        </div>
        <div class="card card-gray">
            <header>
                <h1>Contact</h1>
            </header>
            <section>
                <p>contact info</p>
            </section>
        </div>
        <div class="card card-gray">
            <header>
                <h1>Contact</h1>
            </header>
            <section>
                <p>contact info</p>
            </section>
        </div>
    </aside>
</div>