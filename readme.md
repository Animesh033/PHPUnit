# PHPUnit Installation

# Installing PHPUnit with Composer
```
$composer require --dev phpunit/phpunit
```

# Running PHPUnit and adding an alias (macOS, Linux)
```
./vendor/phpunit/phpunit/phpunit
$alias phpunit="./vendor/phpunit/phpunit/phpunit"
```

# Running PHPUnit and adding a shortcut (Windows)
```
php vendor\phpunit\phpunit\phpunit
echo @php "%~dp0vendor\phpunit\phpunit\phpunit" %* > phpunit.cmd
```

[Test doubles](https://medium.com/@kashwin95kumar/what-do-you-mean-by-test-doubles-b57a2a792973)