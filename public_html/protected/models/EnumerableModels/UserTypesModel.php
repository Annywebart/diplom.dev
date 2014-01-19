<?php

class UserTypesModel extends CEnumerable
{

    const ADMIN = 1;
    const MANAGER = 2;
    const LECTURER = 3;
    const STUDENT = 4;
    const USER = 5;

    public static function listData()
    {
        return array(
            self::ADMIN => 'Администратор',
            self::MANAGER => 'Менеджер',
            self::LECTURER => 'Преподаватель',
            self::STUDENT => 'Студент',
            self::USER => 'Пользователь',
        );
    }

}
