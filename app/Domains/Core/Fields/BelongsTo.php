<?php

namespace Mehnat\Core\Fields;

class BelongsTo {
    public $key;
    public $value;
    public $label;
    public $type = 'belongsToField';
    public $relation_name;

    public static function make(string $key, $relation_name = ''): self
    {
        $obj = new self;
        $obj->key = $key;
        $obj->relation_name = $relation_name;
        $obj->label = $key;
        $obj->value = '';
        return $obj;
    }

    public function toArray(){

        return [
            'type' => $this->type,
            'key' => $this->key,
            'label' => $this->label,
            'value' => $this->value,
        ];
    }
}
