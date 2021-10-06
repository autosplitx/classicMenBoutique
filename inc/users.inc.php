<?php
require_once('../private/initialize.php');


if (is_get_request()) {
  $users = Admin::find_by_undeleted();

  http_response_code(200);
  exit(json_encode(array('status' => 1, 'data' => $users)));
}
