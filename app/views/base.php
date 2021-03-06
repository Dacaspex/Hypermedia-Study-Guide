<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TU/e Study Guide</title>

    <link rel="stylesheet" type="text/css" href="/index.css">
    <link rel="stylesheet" type="text/css" href="/general.css">
    <link rel="stylesheet" media="screen and (min-width: 700px)" href="/general_desktop.css">
    <link rel="stylesheet" type="text/css" href="/curriculum.css">
    <link rel="stylesheet" type="text/css" href="/search.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open Sans:300" rel="stylesheet">

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">
    <?= $this->section('styles') ?>
</head>
<body>
    <!-- Wizard -->
    <div class="card preferences-wizard width-limit"id="preferences-wizard" align-property="top" align-value="-100%">
        <div class="wizard-top">
            <div class="wizard-close js-navigation-drawer-button" drawer-id="preferences-wizard">
                <i class="fa fa-times"></i>
            </div>
        </div>
        <div class="wizard-main">
            <div class="wizard-option">
                <h1>Language selection</h1>
                <p>Choose your desired language / Kies je taal</p>
                <div class="option-cards" pref-type="lang">
                    <div class="option-card js-option" pref-val="nl">
                        <div class="option-icon">
                            <img src="/flags/dutch-flag.svg">
                        </div>
                        <div class="option-name">Nederlands</div>
                    </div>
                    <div class="option-card js-option" pref-val="en">
                        <div class="option-icon">
                            <img src="/flags/uk-flag.svg">
                        </div>
                        <div class="option-name">English</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wizard-save">
            <div>Save</div>
        </div>
    </div>
    <div class="navigation-drawer-bg"></div>

    <!-- Nabar -->
    <div class="navbar js-navbar">
        <div class="navbar-inner width-limit">
            <div class="navigation-drawer-button js-navigation-drawer-button" drawer-id="menu-drawer">
              <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <div class="product js-product"><a href="/"><?= $this->trans('studyguide') ?></a></div>
            <div class="brand js-brand"><a href="https://tue.nl" target="_blank">TU<span class="accent">/</span>e</a></div>
            <div class="preferences">
                <div class="js-navigation-drawer-button" drawer-id="preferences-wizard"><i class="fa fa-flag-o" aria-hidden="true"></i></div>
            </div>
        </div>
    </div>

    <main class="page-content">
        <?= $this->section('content') ?>
    </main>

    <div class="card card-blue">
        <footer class="width-limit">
            <div class="col-4">
                <div class="bold"><?= $this->trans('about') ?></div>
                <p>
                    <?= $this->trans('about_content') ?>
                </p>
            </div>
            <div class="col-4 footer-social">
                <div class="bold"><?= $this->trans('social_media') ?></div>
                <a href="#"><i class="fa fa-facebook-square"></i></a>
                <a href="#"><i class="fa fa-twitter-square"></i></a>
                <a href="#"><i class="fa fa-youtube-square"></i></a>
            </div>
            <div class="col-4">
                <div class="bold"><?= $this->trans('address') ?></div>
                <div>Straatnaam 12</div>
                <div>1234 AB</div>
                <div>Eindhoven</div>
            </div>
            <div class="col-4">
                <div class="bold">Contact</div>
                <div>emailaddress@tue.nl</div>
                <div>040 123456</div>
            </div>
            <div class="footer-bottom">
                <div>&copy; Copyright 2017</div>
                <div class="language navigation-drawer-button js-navigation-drawer-button"
                     drawer-id="preferences-wizard">Language: <span><?= Language::getLocale() == Language::EN ? 'English' : 'Nederlands' ?></span></div>
            </div>
        </footer>
    </div>

    <script src="https://use.fontawesome.com/6d6b522626.js"></script>
    <!--<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />-->
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <!--<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>-->
    <script src="/js/jquery.mobile.custom.min.js"></script>
    <script src="/js/carousel.js"></script>
    <script src="/js/fadeHeader.js"></script>
    <script src="/js/listHandler.js"></script>
    <script src="/js/navigationDrawer.js"></script>
    <script src="/js/preferencesWizard.js"></script>
    <script src="/js/stretchText.js"></script>
</body>
</html>
