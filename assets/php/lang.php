<?php

$LANG_COOKIE = "lang";
$LANG_DEFAULT = "fr";
$LANG_CURR = $_COOKIE[$LANG_COOKIE];

if (isset($LANG_CURR)) {
    if ($LANG_CURR == "fr") {
        require("assets/locales/fr.php");
    } else if ($LANG_CURR == "en") {
        require("assets/locales/en.php");
    }
} else {
    setcookie($LANG_COOKIE, $LANG_DEFAULT, time() + 24 * 60 * 60, "/");
    require("assets/locales/fr.php");
}
