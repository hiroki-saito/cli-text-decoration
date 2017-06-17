<?php
/**
 * CliTextDecoration Sample
 *
 * Created by PhpStorm.
 * User: gamu1012
 * Date: 2017/06/17
 * Time: 23:39
 */

require __DIR__ . '/vendor/autoload.php';

echo \Gamu1012\CliTextDecoration::setString("RED")->red()->decorate() . "\n";
echo \Gamu1012\CliTextDecoration::setString("GREEN")->green()->decorate() . "\n";
echo \Gamu1012\CliTextDecoration::setString("YELLOW_BACKGROUND")->yellowBackground()->decorate() . "\n";
echo \Gamu1012\CliTextDecoration::setString("CYAN_BACKGROUND")->cyanBackground()->decorate() . "\n";
echo \Gamu1012\CliTextDecoration::setString("BOLD")->bold()->decorate() . "\n";
echo \Gamu1012\CliTextDecoration::setString("ITALIC")->italic()->decorate() . "\n";
echo \Gamu1012\CliTextDecoration::setString("BLUE-WHITE_BACKGROUND")->blue()->whiteBackground()->decorate() . "\n";
echo \Gamu1012\CliTextDecoration::setString("RED-GREEN_BACKGROUND")->red()->greenBackground()->decorate() . "\n";
echo \Gamu1012\CliTextDecoration::setString("MAGENTA-WHITE_BACKGROUND-UNDERLINE")->magenta()->whiteBackground()->underLine()->decorate() . "\n";
echo \Gamu1012\CliTextDecoration::setString("RED-GREEN_BACKGROUND-REVERSE")->red()->greenBackground()->reverse()->decorate() . "\n";