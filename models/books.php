<?php

class Books extends \DB\SQL\Mapper {
    public function __construct() {
        parent::__construct( \Base::instance()->get('DB'), 'books', array('id', 'author','title','genre', 'date'));
    }

    public static function renderAsJson($result) {
        $list = array_map(array($user,'cast'),$user->find($filter,$option));
    }
}