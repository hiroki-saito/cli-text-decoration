<?php

namespace Gamu1012\Tests;

use Gamu1012\CliTextDecoration;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class CliTextDecorationTest extends TestCase
{
    public static function provideSingleDecorations(): array
    {
        return [
            'black' => ['black', 30],
            'red' => ['red', 31],
            'green' => ['green', 32],
            'yellow' => ['yellow', 33],
            'blue' => ['blue', 34],
            'magenta' => ['magenta', 35],
            'cyan' => ['cyan', 36],
            'white' => ['white', 37],
            'black background' => ['blackBackground', 40],
            'red background' => ['redBackground', 41],
            'green background' => ['greenBackground', 42],
            'yellow background' => ['yellowBackground', 43],
            'blue background' => ['blueBackground', 44],
            'magenta background' => ['magentaBackground', 45],
            'cyan background' => ['cyanBackground', 46],
            'white background' => ['whiteBackground', 47],
            'bold' => ['bold', 1],
            'italic' => ['italic', 3],
            'underline' => ['underLine', 4],
            'blink' => ['blink', 5],
            'reverse' => ['reverse', 7],
            'hidden' => ['hidden', 8],
        ];
    }

    #[DataProvider('provideSingleDecorations')]
    public function testWrapsTextWithSgrCode(string $method, int $code): void
    {
        $decorated = CliTextDecoration::setString('text')->{$method}()->decorate();

        $this->assertSame("\e[{$code}mtext\e[0m", $decorated);
    }

    public function testJoinsColorBackgroundAndAttributesInThisOrder(): void
    {
        $decorated = CliTextDecoration::setString('text')
            ->underLine()
            ->whiteBackground()
            ->magenta()
            ->decorate();

        $this->assertSame("\e[35;47;4mtext\e[0m", $decorated);
    }

    public function testStacksAttributes(): void
    {
        $decorated = CliTextDecoration::setString('text')->bold()->italic()->underLine()->decorate();

        $this->assertSame("\e[1;3;4mtext\e[0m", $decorated);
    }

    public function testLastColorWins(): void
    {
        $decorated = CliTextDecoration::setString('text')->red()->blue()->redBackground()->greenBackground()->decorate();

        $this->assertSame("\e[34;42mtext\e[0m", $decorated);
    }

    public function testReturnsTextAsIsWithoutDecoration(): void
    {
        $this->assertSame('text', CliTextDecoration::setString('text')->decorate());
    }
}
