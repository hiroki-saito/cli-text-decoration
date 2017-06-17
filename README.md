# CliTextDecoration
String decoration library for PHP CLI output

## Installation
```
composer require gamu1012/cli-text-decoration
```

## Basic Usage
```
<?php

require __DIR__ . '/vendor/autoload.php';

echo \Gamu1012\CliTextDecoration::setString("RED")->red()->decorate() . "\n";
echo \Gamu1012\CliTextDecoration::setString("MAGENTA-WHITE_BACKGROUND-UNDERLINE")->magenta()->whiteBackground()->underLine()->decorate() . "\n";

```

To decorate a character string, first set the target string with setString

The setString method returns a CliTextDecoration instance

Use this to connect chain of decoration information.

Finally, we use the decorate method to get the result

## Method List
### Front Color
- black()
- red()
- green()
- yellow()
- magenta()
- cyan()
- white()

### Background Color
- blackBackground()
- redBackground()
- greenBackground()
- yellowBackground()
- magentaBackground()
- cyanBackground()
- whiteBackground()

### Attribute
- bold()
- italic()
- underLine()
- blink()
- hidden()