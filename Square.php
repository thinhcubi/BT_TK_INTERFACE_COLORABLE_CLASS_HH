<?php
include_once "Colorable.php";
class Square implements Colorable
{
    public int $width;
    public function __construct(int $width)
    {
        $this->width = $width;
    }
    public function howToColor():string
    {
        return "Color all four sides..";
    }
    public function calculateArea(int $width): int
    {
        return $this->width * $this->width;
    }
}