<?php

class Model_Post extends Orm\Model {
    protected static $_properties = [
        'id',
        'title',
        'author',
        'desc',
        'category',
        'tags',
        'date'
    ];
}

?>