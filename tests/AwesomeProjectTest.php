<?php

declare(strict_types=1);

namespace Koriym\AwesomeProject;

use PHPUnit\Framework\TestCase;

final class AwesomeProjectTest extends TestCase
{
    protected AwesomeProject $awesomeProject;

    protected function setUp(): void
    {
        $this->awesomeProject = new AwesomeProject();
    }

    public function testIsInstanceOfAwesomeProject(): void
    {
        $actual = $this->awesomeProject;
        $this->assertInstanceOf(AwesomeProject::class, $actual);
    }
}
