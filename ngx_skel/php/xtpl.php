<?php
echo "Input the module name(ngx_http_XXX_module, only XXX): ";
$name = preg_replace("/[^a-z]/i", "", trim(fgets(STDIN)));

if (!$name) exit("NAME must be set.\n");

$module_name = "ngx_http_".$name."_module";
if (file_exists($module_name)) {
    exit("Module already exists, move it first.\n");
}
mkdir($module_name."/src", 0777, true);

$tpl = file_get_contents("templates/ngx_http.tpl.c");
$newfile = $module_name."/src/".$module_name.".c";
file_put_contents($newfile, str_replace("%NAME%", $name, $tpl));

$cfgtpl = file_get_contents("templates/config.tpl");
$cfgfile = $module_name."/config";
file_put_contents($cfgfile, str_replace("%NAME%", $name, $cfgtpl));

echo "Done.\n";


