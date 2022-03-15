<?php


namespace App\classes;


class Calculator
{
    private $starting_number;
    private $ending_number;
    private $action;
    private $result;

    public function __construct($post = null)
    {
        $this->starting_number = $post['starting_number'];
        $this->ending_number   = $post['ending_number'];
        $this->action          = $post['action'];
    }

    public function myCalculator()
    {
        switch ($this->action)
        {
            case '+':
                $this->result = $this->starting_number + $this->ending_number;
                break;

            case '-':
                $this->result = $this->starting_number - $this->ending_number;
                break;

            case '*':
                $this->result = $this->starting_number * $this->ending_number;
                break;

            case '/':
                $this->result = $this->starting_number / $this->ending_number;
                break;

            case '%':
                $this->result = $this->starting_number % $this->ending_number;
                break;

        }
        return $this->result;
    }

}