<?php

namespace Gamu1012;

/**
 * Class CliTextDecoration
 *
 * @package Gamu1012
 */
class CliTextDecoration
{
    public const BOLD = 1;
    public const ITALIC = 3;
    public const UNDERLINE = 4;
    public const BLINK = 5;
    public const REVERSE = 7;
    public const HIDDEN = 8;

    public const BLACK = 30;
    public const RED = 31;
    public const GREEN = 32;
    public const YELLOW = 33;
    public const BLUE = 34;
    public const MAGENTA = 35;
    public const CYAN = 36;
    public const WHITE = 37;

    public const BLACK_BACKGROUND = 40;
    public const RED_BACKGROUND = 41;
    public const GREEN_BACKGROUND = 42;
    public const YELLOW_BACKGROUND = 43;
    public const BLUE_BACKGROUND = 44;
    public const MAGENTA_BACKGROUND = 45;
    public const CYAN_BACKGROUND = 46;
    public const WHITE_BACKGROUND = 47;

    private string $string;

    private ?int $color = null;
    private ?int $backgroundColor = null;
    private int|string|null $attribute = null;

    private function __construct(string $string = '')
    {
        $this->string = $string;
    }

    public static function setString(string $string): self
    {
        return new CliTextDecoration($string);
    }

    public function bold(): self
    {
        if (isset($this->attribute)) {
            $this->attribute .= ';' . self::BOLD;
        } else {
            $this->attribute = self::BOLD;
        }
        return $this;
    }

    public function italic(): self
    {
        if (isset($this->attribute)) {
            $this->attribute .= ';' . self::ITALIC;
        } else {
            $this->attribute = self::ITALIC;
        }
        return $this;
    }

    public function underLine(): self
    {
        if (isset($this->attribute)) {
            $this->attribute .= ';' . self::UNDERLINE;
        } else {
            $this->attribute = self::UNDERLINE;
        }
        return $this;
    }

    public function blink(): self
    {
        if (isset($this->attribute)) {
            $this->attribute .= ';' . self::BLINK;
        } else {
            $this->attribute = self::BLINK;
        }
        return $this;
    }

    public function reverse(): self
    {
        if (isset($this->attribute)) {
            $this->attribute .= ';' . self::REVERSE;
        } else {
            $this->attribute = self::REVERSE;
        }
        return $this;
    }

    public function hidden(): self
    {
        if (isset($this->attribute)) {
            $this->attribute .= ';' . self::HIDDEN;
        } else {
            $this->attribute = self::HIDDEN;
        }
        return $this;
    }

    public function black(): self
    {
        $this->color = self::BLACK;
        return $this;
    }

    public function red(): self
    {
        $this->color = self::RED;
        return $this;
    }

    public function green(): self
    {
        $this->color = self::GREEN;
        return $this;
    }

    public function yellow(): self
    {
        $this->color = self::YELLOW;
        return $this;
    }

    public function blue(): self
    {
        $this->color = self::BLUE;
        return $this;
    }

    public function magenta(): self
    {
        $this->color = self::MAGENTA;
        return $this;
    }

    public function cyan(): self
    {
        $this->color = self::CYAN;
        return $this;
    }

    public function white(): self
    {
        $this->color = self::WHITE;
        return $this;
    }

    public function blackBackground(): self
    {
        $this->backgroundColor = self::BLACK_BACKGROUND;
        return $this;
    }

    public function redBackground(): self
    {
        $this->backgroundColor = self::RED_BACKGROUND;
        return $this;
    }

    public function greenBackground(): self
    {
        $this->backgroundColor = self::GREEN_BACKGROUND;
        return $this;
    }

    public function yellowBackground(): self
    {
        $this->backgroundColor = self::YELLOW_BACKGROUND;
        return $this;
    }

    public function blueBackground(): self
    {
        $this->backgroundColor = self::BLUE_BACKGROUND;
        return $this;
    }

    public function magentaBackground(): self
    {
        $this->backgroundColor = self::MAGENTA_BACKGROUND;
        return $this;
    }

    public function cyanBackground(): self
    {
        $this->backgroundColor = self::CYAN_BACKGROUND;
        return $this;
    }

    public function whiteBackground(): self
    {
        $this->backgroundColor = self::WHITE_BACKGROUND;
        return $this;
    }

    public function decorate(): string
    {
        $formattedColorString = "\e[";
        if (isset($this->color)) {
            $formattedColorString .= "{$this->color};";
        }
        if (isset($this->backgroundColor)) {
            $formattedColorString .= "{$this->backgroundColor};";
        }
        if (isset($this->attribute)) {
            $formattedColorString .= "{$this->attribute};";
        }
        $formattedColorString .= "m{$this->string}\e[0m";
        return $formattedColorString;
    }
}
