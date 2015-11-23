# Config
A Config Implementation of our config PSR recommendation, inspired by mrjgreen/config

References:

https://github.com/mrjgreen/config

https://github.com/conformity/config-recommendation

This package conforms the recommendations set out the above package and implements the ```ConformityRecommendation\Config\RepositoryInterface```

Example file structure:

```
config
|
|____ production
|        |
|        |_______ server1
|        |       |___ redis.php
|        |       |___ database.php
|        |
|        |_______ server2
|        |       |___ database.php
|        |
|        |_______ database.php
|
|____ app.php
|____ database.php
|____ redis.php
```

Example usage

```php
$environment = '';

$config = new Conformity\Config\Repository(new Conformity\Config\FileLoader(__DIR__ . '/config'), $environment);

var_dump($config['database']);
/*
array(
   'config_value' => 'foo',
   'config_value2' => 'bar'
);
*/

//________________________________________________________________________

$environment = 'production.server1';

$config = new Conformity\Config\Repository(new Conformity\Config\FileLoader(__DIR__ . '/config'), $environment);

var_dump($config['database']);
/*
array(
   'config_value' => 'baz',
   'config_value2' => 'bar',
   'new_config_only_for_server1' => 'boo',
);
*/
```
