<?php
namespace neTpyceB\TMCms\Modules\Tags;

use neTpyceB\TMCms\Modules\IModule;

defined('INC') or exit;

class ModuleTags implements IModule {
	/** @var $this */
	private static $instance;

	public static $tables = [
		'tags' => 'm_tags',
		'relations' => 'm_tags_relations'
	];

	public static function getInstance() {
		if (!self::$instance) self::$instance = new self;
		return self::$instance;
	}
}