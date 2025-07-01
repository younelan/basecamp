<?php
$backend_dir = dirname(__DIR__) . "/backend";
require_once("$backend_dir/init.php");


$main = $framework->get_component("block");
/*
$auth = $framework->get_component("auth");
$auth->on_init_web();
if ($auth) {
  $auth->require_login();
} else {
  die("failed to load auth");
}
*/

$site = [ "routes" => [ "default"=> ["type"=>"block","content"=>"Hello World"] ] ];

$framework->load_external_plugins($external_plugin_paths);
$config_object->set("site",$site);

$app = [
  "content" => "Hello",
  'type' =>'block',
  'content' => "Hello world"
];

print $main->render($app);
