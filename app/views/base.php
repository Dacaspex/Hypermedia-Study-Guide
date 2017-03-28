<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TU/e Study Guide</title>

    <link rel="stylesheet" type="text/css" href="/general.css">
    <link rel="stylesheet" type="text/css" href="/study.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open Sans:300" rel="stylesheet">


    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">
</head>
<body>
    <!-- Wizard -->
    <div class="preferences-wizard">

    </div>

    <!-- Nabar -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="study-menu-selector"><i class="fa fa-bars" aria-hidden="true"></i></div>
            <div class="product none">Studyguide</div>
            <div class="brand">TU/e</div>
            <div class="preferences">
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
                <i class="fa fa-flag-o" aria-hidden="true"></i>
                <i class="fa fa-user-o" aria-hidden="true"></i>
            </div>
        </div>
    </div>

    <main class="page-content">
        <?= $this->section('content') ?>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>
    <script src="https://use.fontawesome.com/6d6b522626.js"></script>
</body>
</html>
