<?php
namespace neTpyceB\TMCms\Modules\Tags\Object;

use neTpyceB\TMCms\Modules\CommonObjectCollection;

class TagsRelationCollection extends CommonObjectCollection {
    protected $db_table = 'm_tags_relations';

    /**
     * @param int $item_id
     * @return $this
     */
    public function setWhereItemId($item_id)
    {
        $this->setFilterValue('item_id', $item_id);

        return $this;

    }
    /**
     * @param int $tag_id
     * @return $this
     */
    public function setWhereTagId($tag_id)
    {
        $this->setFilterValue('tag', $tag_id);

        return $this;

    }

    /**
     * @param string $item_type
     * @return $this
     */
    public function setWhereItemType($item_type) {
        $this->setFilterValue('item_type', $item_type);

        return $this;
    }
}