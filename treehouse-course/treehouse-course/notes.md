# Introduction
- **Unit tests** test only classes methods
- **Integration tests** making sure individual modules can work together
- **Functional tests** veirfies that the application is actually meeting the requirements
- **Aceptance testing**

# Writing first tests
- It's not recommended to install phpunit globally.

# Running the Example
- --bootstrap vendor/autoload.php
- php vendor/bin/phpunit --bootstrap vendor/autoload.php tests/EmailTest --color
- php vendor/bin/phpunit tests/EmailTest.php --color
- folder - php vendor/bin/phpunit tests --color
- with testdox php vendor/bin/phpunit --bootstrap vendor/autoload.php tests/EmailTest --color --testdox 
  
# Configuration
- https://phpunit.readthedocs.io/en/8.1/configuration.html
- https://packagist.org/packages/codedungeon/phpunit-result-printer
- https://github.com/mikeerickson/phpunit-pretty-result-printer

# Test driven development
- Pig Latin

# Testing Existing Projects
- instanceOf
- equals('', $obj->title)
- <filter> code coverage from phpunit.xml 
- Fixtures
    - setUp method
- expectExceptionMethod('') for no exception 