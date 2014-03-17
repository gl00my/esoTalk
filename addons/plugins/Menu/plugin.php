<?php
// Copyright 2011 Toby Zerner, Simon Zerner
// This file is part of esoTalk. Please see the included license file for usage information.

if (!defined("IN_ESOTALK")) exit;

ET::$pluginInfo["Menu"] = array(
	"name" => "Menu",
	"description" => "Adds a menu on footer.",
	"version" => ESOTALK_VERSION,
	"author" => "Peter Kosyh",
	"authorEmail" => "gl00my@mail.ru",
	"authorURL" => "http://syscall.ru",
	"license" => "GPLv2"
);


/**
 * Debug Plugin
 *
 * Shows useful debugging information, such as SQL queries, to administrators.
 */
class ETPlugin_Menu extends ETPlugin {

/**
 * On all controller initializations, add the debug CSS file to the page.
 *
 * @return void
 */
public function handler_init($sender)
{
	$sender->addToMenu("main", "instead", "<a href='http://instead.syscall.ru' class='link-instead'>".T("INSTEAD")."</a>");
	$sender->addToMenu("main", "wiki", "<a href='http://instead.syscall.ru/wiki' class='link-wiki'>".T("WIKI")."</a>");
	$sender->addToMenu("main", "insteadgames", "<a href='http://instead-games.ru' class='link-insteadgames'>".T("Instead • games")."</a>");
	$sender->addToMenu("main", "oldforum", "<a href='http://instead.syscall.ru/forum' class='link-oldforum'>".T("Old Forum")."</a>");

	$sender->addToMenu("main", "github", "<a href='http://github.com/instead-hub/instead' class='link-github'>".T("GitHub")."</a>");

	$sender->addToMenu("meta", "instead", "<a href='http://instead.syscall.ru'>".T("INSTEAD")."</a>");
//	$sender->addToMenu("meta", "instead-games", "<a href='http://instead-games.ru'>".T("Instead • games")."</a>");
//	$sender->addToMenu("meta", "oldforum", "<a href='http://instead.syscall.ru/forum' target='_blank'>".T("Old Forum")."</a>");
	$sender->addToHead("<link href='/images/instead-favicon.png' rel='shortcut icon'>");
	$sender->addToHead("<link rel='alternate' type='application/rss+xml' title='INSTEAD Community' href='http://instead.syscall.ru/talk/feed.php'>");

}

}