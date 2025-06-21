<?php
$backend_dir = dirname(__DIR__) . "/backend";
require_once("$backend_dir/init.php");



$main = $handler->get_plugin("basecamp");

/*
$auth = $handler->get_plugin("auth");
$auth->on_init_web();
if ($auth) {
  $auth->require_login();
} else {
  die("failed to load auth");
}
*/

$app = [
  'page' => $_REQUEST['page'] ?? $config['defaultpage'] ?? "",
  'plugin' => $_REQUEST['plugin'] ?? $config['defaultplugin'] ?? "",
  'action' => $_REQUEST['action'] ?? ""
];

$main->on_web_page($app);
