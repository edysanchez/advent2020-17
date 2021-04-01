<?php declare(strict_types=1);

namespace Kata;

class Point
{
    private int $x;
    private int $y;
    private int $z;

    public function __construct(int $x, int $y, int $z)
    {

        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function x(): int
    {
        return $this->x;
    }

    public function y(): int
    {
        return $this->y;
    }

    public function z(): int
    {
        return $this->z;
    }

    public function isAdjacent(Point $point): bool
    {
        if($this->equals($point)) {
            return false;
        }

        return abs($this->x()-$point->x()) <= 1 && abs($this->Y()-$point->y()) <= 1 && abs($this->z()-$point->z()) <= 1;
    }

    private function equals(Point $point): bool
    {
        return $this->x() === $point->x() && $this->y() === $point->y() && $this->z() === $point->z();
    }
}
