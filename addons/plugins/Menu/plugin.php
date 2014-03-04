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
	$sender->addToMenu("meta", "INSTEAD", "<a href='http://instead.libcode.org'>".T("INSTEAD")."</a>");
	$sender->addToMenu("meta", "Old Forum", "<a href='http://instead.libcode.org/forum' target='_blank'>".T("Old Forum")."</a>");
}

}