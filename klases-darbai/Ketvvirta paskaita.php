<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$target = "Pirmadienis";
switch ($target) {
    case "Pirmadienis";
        print "AntrAdienis";
        break;
    case "Antradienis";
        print "Antradienis";
        break;
    case "Treciadienis";
        print "Treciadienis";
        break;
    case "ketvirtadienis";
        print "ketvirtadinenis";
        break;
}