<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Solid State by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">

<!-- Page Wrapper -->
<div id="page-wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <h1><a href="index.html">Kalkulator rat</a></h1>
    </header>

    <!-- Banner -->
    <section id="banner">
        <div class="inner">
            <div class="logo"><span class="icon fa-gem"></span></div>
            <h2>Witaj</h2>
            <p>Obliczymy Twoje raty kredytowe już dziś. <h6>*A przynajmniej spróbujemy</h6></p>
        </div>
    </section>

    <!-- Footer -->
    <section id="footer">
        <div class="inner">
            <h2 class="major">Kalkulator</h2>

            <form method="post" action="#">
                <div class="fields">
                    <div class="field">
                        <label for="kwota">Kwota kredytu</label>
                        <input id="id_kwota" type="text" name="kwota" value="<?php out($kwota) ?>"/>
                    </div>
                    <div class="field">
                        <label for="message">Na ile lat:</label>
                        <input id="id_lata" type="text" name="lata" value="<?php out($lata) ?>"/>
                    </div>
                    <div class="field">
                        <label for="message">Oprocentowanie:</label>
                        <input id="id_procent" type="text" name="procent" value="<?php out($procent) ?>"/>
                    </div>
                </div>
                <ul class="actions">
                    <li><input id="oblicz" type="submit" value="Oblicz" /></li>
                </ul>
                <?php
                //wyświeltenie listy błędów, jeśli istnieją
                if (isset($messages)) {
                    if (count ( $messages ) > 0) {
                        echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;">';
                        foreach ( $messages as $key => $msg ) {
                            echo '<li>'.$msg.'</li>';
                        }
                        echo '</ol>';
                    }
                }
                ?>

                <?php if (isset($result)){ ?>
                    <h4>Twoja miesięczna rata to: </h4>
                    <h2 class="res">
                        <?php print($result . ' zł'); ?>
                    </h2>
                <?php } ?>
            </form>
            <ul class="copyright">
                <li>&copy; Untitled Inc. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP & Kamil Skupień</a></li>
            </ul>
        </div>

    </section>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>