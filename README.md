# PHPUnit Tutorial - Calculator

[![Software License](https://img.shields.io/aur/license/yaourt.svg)](LICENSE.txt)
[![Build Status](https://travis-ci.org/zvoanhkietz/phpunit_tutorial.svg?branch=master)](https://travis-ci.org/zvoanhkietz/phpunit_tutorial)
[![Coverage Status](https://img.shields.io/codecov/c/github/zvoanhkietz/phpunit_tutorial.svg?style=flat-square)](https://codecov.io/gh/zvoanhkietz/phpunit_tutorial)
[![Latest Stable Version](https://img.shields.io/packagist/v/zvoanhkietz/phpunit_tutorial.svg?style=flat-square&label=stable)](https://packagist.org/packages/zvoanhkietz/phpunit_tutorial#1.0.0)

## NetBeans PHP Sample Application

### What is Calculator?

Calculator is a simple calculator that supports basic arithmetical operations. This PHP application is created to highlight PHP features supported by NetBeans IDE.

**This sample is not intented to be used in a production environment without any changes.**

### This sample demonstrates the following features:

*   unit testing using PHPUnit
*   creating unit tests using PHPUnit Skeleton Generator
*   code coverage of project files

### Requirements

Follow these before you run the sample:

*   Install NetBeans IDE with PHP support
*   Install and configure PHP Runtime
*   Install all dependencies using [Composer](https://getcomposer.org/) (click on project and invoke _Composer_ > _Install (dev)_)  
    _Note:_ PHPUnit can also be installed [globally as PHAR file](https://github.com/sebastianbergmann/phpunit/#installation)
*   Install and configure [PHPUnit Skeleton Generator](https://github.com/sebastianbergmann/phpunit-skeleton-generator)
*   For debugging and code coverage, [Xdebug](http://www.xdebug.org/) PHP extension is required

### What is included?

*   NetBeans _PHP Application_ Project

### Before the start

*   If you want to try the sample out, follow [Getting Started](#getting_started) guidelines.
*   In case if you want to try debugging features of the NetBeans IDE, follow the [Debugging](#debugging) guidelines.

### Getting Started

1.  For the very first run, PHPUnit must be installed via Composer and PHPUnit Skeleton Generator globally (see Requirements).
2.  Now, create a unit test for Calculator class - open it in the editor and select _Tools > Create Tests_.
3.  Simply test the project. Right-click the project node and select _Test_. IDE will inform you about the test results (window with test results can be opened manually).
4.  For code coverage, open its report (right-click the project node and select _Code Coverage > Show Report..._) and _Run All Tests_ if there are no data available yet. Open _Calculator.php_ file from the list of the files to see which lines are and which lines are not tested.
5.  Play futher with the sample :)

### Debugging

These steps should enable you the debugging option at the sample project, [if you already have PHP debugger (Xdebug) installed and configured](http://wiki.netbeans.org/HowToConfigureXDebug).  
For demonstrating the PHP debugger in NetBeans, try the following:

1.  Open source class _Calculator.php_ or generated _CalculatorTest.php_ in the editor.
2.  Put breakpoint on some line with PHP code.
3.  To debug, right-click _CalculatorTest.php_ and select _Debug_.

[NetBeans PHP team](https://blogs.oracle.com/netbeansphp/), 2013 © Copyright Oracle corp., All rights reserved
