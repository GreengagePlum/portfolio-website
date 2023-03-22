<?php

$LANG_COOKIE = "lang";
$LANG_DEFAULT = "fr";

if (isset($_COOKIE[$LANG_COOKIE])) {
    $LANG_CURR = $_COOKIE[$LANG_COOKIE];
    if ($LANG_CURR == "fr") {
        require_once("assets/locales/fr.php");
    } else if ($LANG_CURR == "en") {
        require_once("assets/locales/en.php");
    }
} else {
    $LANG_CURR = "fr";
    setcookie($LANG_COOKIE, $LANG_DEFAULT, time() + 24 * 60 * 60, "/");
    require_once("assets/locales/fr.php");
}
