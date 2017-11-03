## basic-silex

Using the silex-skeleton as a starting point, add docker and some good practices
to show how this framework can be combined with TDD.

## Known issues

Using PHP-fpm for the application results in every application log line being
* wrapped in another message by PHP-fpm
* can be truncated
* multi-line logs split into separate messages (I don't like multi-line logs but stack traces come out this way)

