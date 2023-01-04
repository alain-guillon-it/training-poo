<?php

/**
 * ========================================================================
 * IF DOES'NT ERROR SHOW
 * ========================================================================
 */
error_reporting(E_ALL);
ini_set("display_errors", "1");

/**
 * ========================================================================
 * COMPOSER
 * ========================================================================
 */
require_once __DIR__ . "/vendor/autoload.php";

/**
 * ========================================================================
 * VARIABLES
 * ========================================================================
 */
$_controller = null;
$_action = null;
$_id = null;

/**
 * ========================================================================
 * IF DOES'NT URL PARAMETER EXIST
 * ========================================================================
 */
switch ($_SERVER["REQUEST_URI"]) {
  case "/":
    $_controller = "home";
    break;
  case "/movies":
    $_controller = "movies";
    break;
  case "/series":
    $_controller = "series";
    break;
  case "/actors":
    $_controller = "actors";
    break;
  case "/directors":
    $_controller = "directors";
    break;
  default:
    $_controller = "error";
    break;
}

/**
 * ========================================================================
 * IF PAGE PARAMETER EXIST
 * ========================================================================
 */
if (isset($_GET["page"]) && !empty($_GET["page"])) {
  $getPage = trim(htmlspecialchars(strtolower($_GET["page"])));
  $checkGetPageValid = ["home", "actors", "movies", "directors", "series"];
  $_controller = in_array($getPage, $checkGetPageValid) ? $getPage : "error";
}

/**
 * ========================================================================
 * IF ACTION PARAMETER EXIST
 * ========================================================================
 */
if (isset($_GET["action"]) && !empty($_GET["action"])) {
  $getAction = trim(htmlspecialchars(strtolower($_GET["action"])));
  $checkGetActionValid = ["list", "detail"];
  $_action = in_array($getAction, $checkGetActionValid) ? $getAction : "error";
}

/**
 * ========================================================================
 * IF ID PARAMETER EXIST
 * ========================================================================
 */
if (isset($_GET["id"]) && !empty($_GET["id"])) {
  if (is_numeric($_GET["id"])) {
    $getID = trim($_GET["id"]);
    $checkGetIDValid = [is_numeric($_GET["id"])];
    $_id = in_array($getID, $checkGetIDValid) ? $getID : "error";
  } else {
    $_id = "error";
  }
}

/**
 * ========================================================================
 * CREATE A NEW INSTANCE WITH THE CONTROLLER SELECTED
 * ========================================================================
 */
$pageController = "Zyrass\\TrainingPoo\\controllers\\" . ucfirst($_controller) . "Controller";
$page = new $pageController;

/**
 * ========================================================================
 * SHOW THE VIEW IF DOES'NT ACTION EXIST
 * ========================================================================
 */
include_once __DIR__ . "/public/partials/_header.php";

if ($_action == null) {
  include_once __DIR__ . "/public/views/" . strtolower($_controller) . "/" . strtolower($_controller) . ".view.php";
} else {
  include_once __DIR__ . "/public/views/" . strtolower($_controller) . "/" . strtolower($_action) . ".view.php";
}

include_once __DIR__ . "/public/partials/_footer.php";

// echo "<pre>";
// var_dump($_controller, $_action, $_id, $pageController, $page);
// echo "</pre>";
