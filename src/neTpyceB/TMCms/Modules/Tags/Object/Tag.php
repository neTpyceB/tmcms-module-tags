<?php
namespace neTpyceB\TMCms\Modules\Tags\Object;

use neTpyceB\TMCms\Modules\CommonObject;

/**
 * Class Tag
 * @package neTpyceB\TMCms\Modules\Tags\Object
 */
class Tag extends CommonObject {
    protected $db_table = 'm_tags';
    protected $multi_lng_fields = ['title'];

    protected $title = '';
}