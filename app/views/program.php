<?php $this->layout('base'); ?>

<div class="navigation-drawer" id="menu-drawer" align-property="left" align-value="-100%">
    <div class="navigation-drawer-inner">
        <header>
            <h2>Menu</h2>
        </header>
        <ul>
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Curriculum</a>
                <ul>
                    <li><a href="#">Basic Courses</a></li>
                    <li><a href="#">Elective Courses and Packages</a></li>
                </ul>
            </li>
            <li><a href="#">Program Learning Objectives</a></li>
            <li><a href="#">Proffesional skills</a></li>
            <li><a href="#">Etc...</a></li>
        </ul>
    </div>
</div>

<div class="study-drawer width-limit" id="bachelor-drawer" align-property="top" align-value="-100%">
    <h1>Bachelor studies</h1>
    <ul>
        <li><a href="#">Computer Science and Engineering</a></li>
        <li><a href="#">Psychology and Technology</a></li>
        <li><a href="#">Data Science</a></li>
        <li><a href="#">Data Science</a></li>
        <li><a href="#">Data Science</a></li>
        <li><a href="#">Data Science</a></li>
        <li><a href="#">Data Science</a></li>
        <li><a href="#">Data Science</a></li>
        <li><a href="#">Data Science</a></li>
        <li><a href="#">Data Science</a></li>
    </ul>
</div>

<div class="subnavbar">
    <div class="width-limit">
        <span class="js-navigation-drawer-button" drawer-id="bachelor-drawer">Bachelors</span>
        <span class="js-navigation-drawer-button" drawer-id="pre-master-drawer">Pre-masters</span>
        <span class="js-navigation-drawer-button" drawer-id="master-drawer">Masters</span>
    </div>
</div>

<header class="top-header width-limit js-header">
    <div class="header-image js-header-image">
        <img src="https://virtualvisit.tue.nl/media/hotspot-data/science-park-1.jpg">
    </div>
</header>

<div class="card-cols width-limit">
    <aside class="navigation-drawer col-5">
        <div class="navigation-drawer-inner">
            <header>
                <h2>Menu</h2>
            </header>
            <ul>
<!--                <li class="active"><a href="#">Home</a></li>-->
<!--                <li><a href="#">Curriculum</a>-->
<!--                    <ul>-->
<!--                        <li><a href="#">Basic Courses</a></li>-->
<!--                        <li><a href="#">Elective Courses and Packages</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li><a href="#">Program Learning Objectives</a></li>-->
<!--                <li><a href="#">Proffesional skills</a></li>-->
<!--                <li><a href="#">Etc...</a></li>-->

                <?php foreach ($links as $link): ?>
                    <li><a href="/<?= $content->getProgram()->getType() ?>/<?= $content->getProgram()->getSlug() ?>/<?= $link->getDestination() ?>"><?= $link->getName() ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </aside>
    <main class="study-info col-5-triple">
        <div class="card">
            <header>
                <h1><?= $content->getProgram()->getName() ?></h1>
            </header>
            <section>
                <?= $content->getBody() ?>
            </section>
        </div>
    </main>

    <aside class="card col-5">
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