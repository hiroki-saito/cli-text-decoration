<?php

namespace Gamu1012;

/**
 * Class CliTextDecoration
 *
 * @package Ggamu1012
 */
class CliTextDecoration
{
    const BOLD = 1;
    const ITALIC = 3;
    const UNDERLINE = 4;
    const BLINK = 5;
    const REVERSE = 7;
    const HIDDEN = 8;

    const BLACK = 30;
    const RED = 31;
    const GREEN = 32;
    const YELLOW = 33;
    const BLUE = 34;
    const MAGENTA = 35;
    const CYAN = 36;
    const WHITE = 37;

    const BLACK_BACKGROUND = 40;
    const RED_BACKGROUND = 41;
    const GREEN_BACKGROUND = 42;
    const YELLOW_BACKGROUND = 43;
    const BLUE_BACKGROUND = 44;
    const MAGENTA_BACKGROUND = 45;
    const CYAN_BACKGROUND = 46;
    const WHITE_BACKGROUND = 47;

    private $string;

    private $color = null;
    private $backgroundColor = null;
    private $attribute = null;

    private function __construct($string = '')
    {
        $this->string = $string;
    }

    /**
     * @param $string
     * @return CliTextDecoration
     */
    public static function setString($string)
    {
        return new CliTextDecoration($string);
    }

    /**
     * @return $this
     */
    public function bold()
    {
        if (isset($this->attribute)) {
            $this->attribute .= ';' . self::BOLD;
        } else {
            $this->attribute = self::BOLD;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function italic()
    {
        if (isset($this->attribute)) {
            $this->attribute .= ';' . self::ITALIC;
        } else {
            $this->attribute = self::ITALIC;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function underLine()
    {
        if (isset($this->attribute)) {
            $this->attribute .= ';' . self::UNDERLINE;
        } else {
            $this->attribute = self::UNDERLINE;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function blink()
    {
        if (isset($this->attribute)) {
            $this->attribute .= ';' . self::BLINK;
        } else {
            $this->attribute = self::BLINK;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function reverse()
    {
        if (isset($this->attribute)) {
            $this->attribute .= ';' . self::REVERSE;
        } else {
            $this->attribute = self::REVERSE;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function hidden()
    {
        if (isset($this->attribute)) {
            $this->attribute .= ';' . self::HIDDEN;
        } else {
            $this->attribute = self::HIDDEN;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function black()
    {
        $this->color = self::BLACK;
        return $this;
    }

    /**
     * @return $this
     */
    public function red()
    {
        $this->color = self::RED;
        return $this;
    }

    /**
     * @return $this
     */
    public function green()
    {
        $this->color = self::GREEN;
        return $this;
    }

    /**
     * @return $this
     */
    public function yellow()
    {
        $this->color = self::YELLOW;
        return $this;
    }

    /**
     * @return $this
     */
    public function blue()
    {
        $this->color = self::BLUE;
        return $this;
    }

    /**
     * @return $this
     */
    public function magenta()
    {
        $this->color = self::MAGENTA;
        return $this;
    }

    /**
     * @return $this
     */
    public function cyan()
    {
        $this->color = self::CYAN;
        return $this;
    }

    /**
     * @return $this
     */
    public function white()
    {
        $this->color = self::WHITE;
        return $this;
    }

    /**
     * @return $this
     */
    public function blackBackground()
    {
        $this->backgroundColor = self::BLACK_BACKGROUND;
        return $this;
    }

    /**
     * @return $this
     */
    public function redBackground()
    {
        $this->backgroundColor = self::RED_BACKGROUND;
        return $this;
    }

    /**
     * @return $this
     */
    public function greenBackground()
    {
        $this->backgroundColor = self::GREEN_BACKGROUND;
        return $this;
    }

    /**
     * @return $this
     */
    public function yellowBackground()
    {
        $this->backgroundColor = self::YELLOW_BACKGROUND;
        return $this;
    }

    /**
     * @return $this
     */
    public function blueBackground()
    {
        $this->backgroundColor = self::BLUE_BACKGROUND;
        return $this;
    }

    /**
     * @return $this
     */
    public function magentaBackground()
    {
        $this->backgroundColor = self::MAGENTA_BACKGROUND;
        return $this;
    }

    /**
     * @return $this
     */
    public function cyanBackground()
    {
        $this->backgroundColor = self::CYAN_BACKGROUND;
        return $this;
    }

    /**
     * @return $this
     */
    public function whiteBackground()
    {
        $this->backgroundColor = self::WHITE_BACKGROUND;
        return $this;
    }

    /**
     * @return string
     */
    public function decorate()
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