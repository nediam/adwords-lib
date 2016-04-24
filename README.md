# adwords-lib
Copy of googleads/googleads-php-lib but with classes splited into separate files and added namespaces

# installation
via composer
```
$ composer require nediam/adwords-lib dev-master
```

# Future API versions
Can be added via @onema's [ClassyFile](https://github.com/onema/classyfile) using the official [googleads-php-lib](https://github.com/googleads/googleads-php-lib) e.g.
```
php classyfile convert vendor/adwords-php-lib/src/Google/Api/Ads/AdWords/v201603 --create-namespace --offset=3 --length=6 --code-destination=src/Google/Api/Ads/AdWords
```