<?php
/*
 * うーにゃー言語
 * 仕様自体はここからいただいてきました(・ω<)
 * http://kissaten-no-heya.blogspot.jp/2012/04/blog-post_8719.html
 */
require __DIR__ . '/../vendor/autoload.php';

/**
 * オブジェクト生成用のクロージャ
 */
$c = function($class,$params = null,$ns = 'Polidog\\Brainfuck\\') {
	$class = $ns.$class;
	return new $class($params);
};

if (isset($argv[1])) {
	$c('Interpreter',__DIR__)->setMemory($c('Memory')->init(100))->setReplaceCommand(['(」・ω・)」うー(／・ω・)／にゃー' => '>','(」・ω・)」うー!!(／・ω・)／にゃー!!' => '<','(」・ω・)」うー!(／・ω・)／にゃー!' => '+','(」・ω・)」うー!!!(／・ω・)／にゃー!!!' => '-',"Let's＼(・ω・)／にゃー" => '.','cosmic!' => ',','CHAOS☆CHAOS!' => '[','I WANNA CHAOS!' => ']',	])->setFile($argv[1])->exec();
}
else {
	$c('Interpreter',__DIR__)->setMemory($c('Memory')->init(100))->setReplaceCommand(['(」・ω・)」うー(／・ω・)／にゃー' => '>','(」・ω・)」うー!!(／・ω・)／にゃー!!' => '<','(」・ω・)」うー!(／・ω・)／にゃー!' => '+','(」・ω・)」うー!!!(／・ω・)／にゃー!!!' => '-',"Let's＼(・ω・)／にゃー" => '.','cosmic!' => ',','CHAOS☆CHAOS!' => '[','I WANNA CHAOS!' => ']',	])->setCommand($argv[1])->exec();
}
