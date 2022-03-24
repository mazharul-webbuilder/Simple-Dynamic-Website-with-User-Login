<?php


namespace App\classes;


class User
{
    public function getAllUser()
    {
        return [
            0 => [
                'userId'   => 1,
                'name'     => 'Mazharul',
                'email'    => 'mazharul@gmail.com',
                'password' => '1234'
            ],
            1 => [
                'userId'   => 2,
                'name'     => 'Afran',
                'email'    => 'afran@gmail.com',
                'password' => '1234'
            ],
        ];
    }

}