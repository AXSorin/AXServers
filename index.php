<?php
	require '../libs/Smarty.class.php';
	$dev_axs = new Smarty;
	$axs = new AXServers;
	
	$check_cart = axsdb()->prepare("SELECT * FROM cart");
	$check_cart->execute();
	$check_notifications = axsdb()->prepare("SELECT * FROM notifications");
	$check_notifications->execute();

	$dev_axs->force_compile = false;
	$dev_axs->debugging = false;
	$dev_axs->caching = true;
	$dev_axs->cache_lifetime = 120;

	$dev_axs->assign("settings", $axs->query_settings());
	
	$dev_axs->assign("Name", "AXServers", true);
	$dev_axs->assign("Title", "Home Page", true);
	$dev_axs->assign("carts", $check_cart->rowCount() , true);
	$dev_axs->assign("notifications", $check_notifications->rowCount() , true);
	$dev_axs->assign("lang", $axs->set_language());
	if(isset($_SESSION['login_email'])) {
		$dev_axs->assign("login", $_SESSION['login_email'], true);
		$dev_axs->assign("query", $axs->query($_SESSION['login_email']));
	} else {
		$dev_axs->assign("login", NULL, true);
		$dev_axs->assign("query", NULL);
	}

	$dev_axs->display(''.$axs->query_settings()['template'].'/index.tpl', $axs->set_cache_id());


