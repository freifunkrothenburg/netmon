<?php

require_once('runtime.php');
require_once('lib/classes/core/Event.class.php');

//get messages of the message system
$smarty->assign('message', Message::getMessage());

//get data
$event = new Event((int)$_GET['event_id']);
$smarty->assign('event', $event);

//load the temlate
$smarty->display("header.tpl.php");
$smarty->display("event.tpl.php");
$smarty->display("footer.tpl.php");

?>