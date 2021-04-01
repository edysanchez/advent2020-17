<?php declare(strict_types=1);

namespace Kata\Tests;

use Kata\Point;
use PHPUnit\Framework\TestCase;

class PointTest extends TestCase
{
    /** @test */
    public function aPointShouldHaveCoordinates(): void
    {
        $point = new Point(13, 12, 14);
        $this->assertEquals(13, $point->x());
        $this->assertEquals(12, $point->y());
        $this->assertEquals(14, $point->z());
    }

    /** @test */
    public function pointsAreAdjacentIfCoordinatesHaveDistanceOfOne(): void
    {
        $point = new Point(0, 0, 0);
        $this->assertTrue($point->isAdjacent(new Point(0, 0, 1)));
        $this->assertTrue($point->isAdjacent(new Point(1, 0, 1)));
        $this->assertTrue($point->isAdjacent(new Point(0, 1, 1)));
        $this->assertTrue($point->isAdjacent(new Point(1, 1, 1)));
        $this->assertTrue($point->isAdjacent(new Point(-1, 1, 1)));
    }

    /** @test */
    public function pointsAreNotAdjacentIfCoordinatesHaveDistanceGreaterThanOne(): void
    {
        $point = new Point(0, 0, 0);
        $this->assertFalse($point->isAdjacent(new Point(0, 0, 2)));
        $this->assertFalse($point->isAdjacent(new Point(0, 0, -2)));
        $this->assertFalse($point->isAdjacent(new Point(-4, 0, 0)));
        $this->assertFalse($point->isAdjacent(new Point(0, -40, -2)));
        $this->assertFalse($point->isAdjacent(new Point(-10, 0, -2)));
    }

    /** @test */
    public function pointsWithEqualCoordinatesAreNotAdjacent(): void
    {
        $point = new Point(0, 0, 0);
        $this->assertFalse($point->isAdjacent($point));
    }
}
