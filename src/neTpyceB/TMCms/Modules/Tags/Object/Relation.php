<?php
namespace neTpyceB\TMCms\Modules\Tags\Object;

use neTpyceB\TMCms\Modules\CommonObject;

/**
 * Class Tag
 * @package neTpyceB\TMCms\Modules\Tags\Object
 */
class Relation extends CommonObject {
    protected $db_table = 'm_tags_relations';

    protected $item_type = '';
    protected $item_id = 0;
}