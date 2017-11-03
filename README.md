## basic-silex

Using the silex-skeleton as a starting point, add docker and some good practices
to show how this framework can be combined with TDD.

## Known issues

Using PHP-fpm for the application results in every application log line being
* wrapped in another message by PHP-fpm
* can be truncated (or if not truncated, split into multiple lines making impossible to parse)
* multi-line logs split into separate messages (I don't like multi-line logs but stack traces come out this way)

Workaround: https://github.com/docker-library/php/issues/207#issuecomment-276296087
Alternative: dedicated logging container of some kind

