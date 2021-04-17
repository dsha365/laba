<?php
namespace ignateva;

class ignatevaExeption extends \RuntimeException
{
   public function __construct($message = "")
    {
        parent::__construct($message);
    }
}