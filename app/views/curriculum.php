<?php $this->layout('base'); ?>

<?php $this->start('styles'); ?>
<link rel="stylesheet" type="text/css" href="/study.css">
<?php $this->stop(); ?>

<div class="navigation-drawer" id="menu-drawer" align-property="left" align-value="-100%">
    <div class="navigation-drawer-inner">
        <header>
            <h2>Menu</h2>
        </header>
        <ul>
            <?php foreach ($links as $link): ?>
                <li <?= $this->activeLink($link->getDestination()) ?>>
                    <a href="/<?= $content->getProgram()->getType() ?>/<?= $content->getProgram()->getSlug() ?>/<?= $link->getDestination() ?>"><?= $link->getName() ?></a>
                    <?php $children = $link->getChildren(); ?>
                    <?php if (count($children) > 0): ?>
                        <ul>
                            <?php foreach ($children as $child): ?>
                                <li><a href="/<?= $content->getProgram()->getType() ?>/<?= $content->getProgram()->getSlug() ?>/<?= $child->getDestination() ?>"><?= $child->getName() ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<div class="study-drawer width-limit" id="bachelor-drawer" align-property="top" align-value="-100%">
    <h1>Bachelor studies</h1>
    <div class="study-drawer-close js-navigation-drawer-button" drawer-id="bachelor-drawer">
        <i class="fa fa-times"></i>
    </div>
    <ul>
        <?php foreach($programs['bachelors'] as $program): ?>
            <li><a href="/bachelor/<?= $program['slug'] ?>/overview"><?= $program['name'] ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>

<div class="study-drawer width-limit" id="pre-master-drawer" align-property="top" align-value="-100%">
    <h1>Pre Master studies</h1>
    <div class="study-drawer-close js-navigation-drawer-button" drawer-id="pre-master-drawer">
        <i class="fa fa-times"></i>
    </div>
    <ul>
        <?php foreach($programs['preMaster'] as $program): ?>
            <li><a href="/pre-master/<?= $program['slug'] ?>/curriculum"><?= $program['name'] ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>

<div class="study-drawer width-limit" id="master-drawer" align-property="top" align-value="-100%">
    <h1>Master studies</h1>
    <div class="study-drawer-close js-navigation-drawer-button" drawer-id="master-drawer">
        <i class="fa fa-times"></i>
    </div>
    <ul>
        <?php foreach($programs['masters'] as $program): ?>
            <li><a href="/master/<?= $program['slug'] ?>/overview"><?= $program['name'] ?></a></li>
        <?php endforeach; ?>
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
    <div class="card breadcrumb">
        <a href="/">Home</a><span>/</span>
        <a href="#"><?= ucfirst($content->getProgram()->getType()) ?></a><span>/</span>
        <a href="#"><?= $content->getProgram()->getName() ?></a>
    </div>
    <div class="search-bar">
        <form method="get" action="/search">
            <input type="text" name="query" placeholder="<?= $this->trans('search') ?>">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
    </div>
    <div class="clear"></div>
    <aside class="navigation-drawer col-5">
        <div class="navigation-drawer-inner">
            <header>
                <h2>Menu</h2>
            </header>
            <ul>
                <?php foreach ($links as $link): ?>
                    <li <?= $this->activeLink($link->getDestination()) ?>>
                        <a href="/<?= $content->getProgram()->getType() ?>/<?= $content->getProgram()->getSlug() ?>/<?= $link->getDestination() ?>"><?= $link->getName() ?></a>
                        <?php $children = $link->getChildren(); ?>
                        <?php if (count($children) > 0): ?>
                            <ul>
                                <?php foreach ($children as $child): ?>
                                    <li><a href="/<?= $content->getProgram()->getType() ?>/<?= $content->getProgram()->getSlug() ?>/<?= $child->getDestination() ?>"><?= $child->getName() ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
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
                <div class="curr-outer">
                    <table class="curr-table">
                        <tbody>
                        <?php

                        $numYears = 3;

                        for ($year = 1; $year <= $numYears; $year++) {

                            ?>
                            <tr>
                               <td colspan="4" class="curr-year">Year <?= $year ?></td>
                            </tr>
                            <?php

                            for ($i = 0; $i <= 2; $i++) {

                                $row = $curriculum->getSubjectsRow($year, $i);

                                echo '<tr>';

                                foreach ($row as $subject) {
                                    echo '<td>' . $subject->getSubjectName() . '</td>';
                                }

                                echo '</tr>';

                            }

                            if ($year != 3) {
                                ?>
                                <tr>
                                    <td colspan="4" class="curr-divider"></td>
                                </tr>
                                <?php
                            }
                        }

                        ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </main>

    <aside class="card col-5">
        <div class="card card-gray card-statistics">
            <header>
                <h1><?= $this->trans('program_stats_title') ?></h1>
            </header>
            <section>
                <table class="course-stats">
                    <tr>
                        <td><?= $this->trans('program_stats_num_students') ?></td>
                        <td><?= $content->getProgram()->getNumStudents() ?></td>
                    </tr>
                    <tr>
                        <td><?= $this->trans('program_stats_num_courses') ?></td>
                        <td><?= $content->getProgram()->getNumCourses() ?></td>
                    </tr>
                    <tr>
                        <td><?= $this->trans('program_stats_num_grads') ?></td>
                        <td><?= $content->getProgram()->getNumGrads() ?></td>
                    </tr>
                </table>
            </section>
        </div>
        <div class="card card-gray">
            <header>
                <h1>Contact</h1>
            </header>
            <section>
                <p><i class="fa fa-envelope-o" aria-hidden="true"></i> <?= $content->getProgram()->getContactLink() ?></p>
            </section>
        </div>
        <?php if(count($content->getProgram()->getLinks())): ?>
            <div class="card card-gray">
                <header>
                    <h1>Additional Links</h1>
                </header>
                <section>
                    <?php foreach($content->getProgram()->getLink() as $link): ?>
                        <a href="<?= $link->getDestination() ?>"><?= $link->getName() ?></a>
                    <?php endforeach; ?>
                </section>
            </div>
        <?php endif; ?>
    </aside>
</div>
