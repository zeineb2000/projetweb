<?php
// INIT

require __DIR__ . DIRECTORY_SEPARATOR  . "lib" . DIRECTORY_SEPARATOR . "2a-config.php";
require PATH_LIB . "2b-lib-reactions.php";
$rLib = new Reactions();

// HANDLE AJAX REQUESTS
if ($_POST['req']) { switch ($_POST['req']) {
  // INVALID REQUEST
  default:
    echo json_encode([
      "status" => 0,
      "msg" => "Invalid request"
    ]);
    break;

  // TOTAL LIKES & DISLIKES
  case "total":
    echo json_encode([
      "status" => 1,
      "msg" => $rLib->get($_POST['post_id'], is_array($_SESSION['user']) ? $_SESSION['user']['id'] : null)
    ]);
    break;

  // ADD/REMOVE/CHANGE REACTION
  case "update":
    // Registered users only
    if (!is_array($_SESSION['user'])) {
      die(json_encode([
        "status" => 0,
        "msg" => "Please login first"
      ]));
    }

    // Update reaction
    $pass = $rLib->update($_POST['post_id'], $_SESSION['user']['id'], $_POST['react']);

    // Result
    echo json_encode([
      "status" => $pass ? 1 : 0,
      "mag" => $pass ? "OK" : $rLib->error
    ]);
    break;
}}