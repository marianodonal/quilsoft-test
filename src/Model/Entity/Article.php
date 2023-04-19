<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Article extends Entity
{
    protected $_accessible = [
        'user_id' => true,
        'title' => true,
        'body' => true,
        'image' => true,
        'created' => true,
        'modified' => true,
        //--
        'user' => true,
    ];
}
