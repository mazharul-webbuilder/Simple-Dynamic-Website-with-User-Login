<?php

namespace App\classes;
class Series
{
    private $staringNumber;
    private $endingNumber;
    public  $mySeries = [];

    public function __construct($post = null)
    {
        $this->staringNumber = $post['starting_number'];
        $this->endingNumber  = $post['ending_number'];
    }
    public function mySeries()
    {
        for ($i = $this->staringNumber; $i <= $this->endingNumber; $i++)
        {
            $this->mySeries[] = $i;
        }
        return $this->mySeries;
    }

}