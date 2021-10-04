<?php
require_once('../../private/initialize.php');
require_login();

$page_title = 'CMB | Profile'; ?>

<title><?php echo h($page_title); ?></title>

<?php include(SHARED_PATH . '/staff_header.php'); ?>

<h1>Welcome to Profile Page</h1>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>