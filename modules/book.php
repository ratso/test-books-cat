<?php

class Book implements RestModel
{

    public function beforeRoute()
    {
        header("Content-Type: application/json");
    }

    public function get($f3)
    {
        $start = ($f3->exists('GET.start')) ? $f3->get('GET.start') : 0;
        $book_id = $f3->get('PARAMS.book_id');
        $limit = 5;
        $book = new Books();
        if ($book_id) {
            $result = $book->load(array('id = ?', $book_id));
            $result = $result ? $result->cast() : $result;
        } else {
            $cond = (int)$start > 0 ? array("id > ?", (int)$start) : null;
            $result = array_map(array($book, 'cast'), $book->find($cond, array('order' => "id asc", 'limit' => $limit)));

        }
        echo json_encode($result);
    }
}