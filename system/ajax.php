<?php
require_once 'lib/global.php';

if (!isset($_GET['type'])) {
	$id = $_GET['m'];

	$sql = "select *, (select name from skill where id = skill_id) skill_name, (select name from skill where id = skill_id2) skill_name2, (select name from skill where id = skill_id2) skill_name2 from enemy_role where id = $id";

	$roles = db_query($db, $sql);

	echo mission_enemy_tip_render($roles[0]);
} else {
	$type = $_GET['type'];

	if ($type == 'save_skill_config') {
		$sql = "update `skill` set `config`='".$_POST['config']."' where `id` = ".$_POST['id'];

		db_execute($db, $sql);
	} else if ($type == 'load_skill_config') {
		$sql = "select `config` from `skill` where `id` = ".$_GET['id'];

		$data = db_query($db, $sql);
		error_log($sql);

		if (empty($data[0]['config'])) {
			echo "{}";
		} else {
			echo $data[0]['config'];
		}
	}
}
?>
