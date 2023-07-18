<?php

namespace app\SupportBot\entities;

use app\toolkit\components\Entity;
use app\toolkit\components\repository\Repository;
use app\SupportBot\repository\ContactsRepository;


class Contact extends Entity
{
    public $id;
    public $name;
    public $step;
    public $phone;
    public $status;
    public $created;



    public static function fields(): array
    {
        return [
            'integer' => ['id', 'status'],
            'string' => ['name', 'step', 'phone', 'created'],
        ];
    }


    public static function repository(): Repository
    {
        return new ContactsRepository(self::class);
    }
}