<?php
	requirePHPLib('form');
	$config = array('page_len' => 100);
?>
<?php echoUOJPageHeader(UOJLocale::get('acranklist')) ?>

<?php echoACRanklist($config) ?>
<?php echoUOJPageFooter() ?>
