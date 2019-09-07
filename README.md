# inspirobot
An Inspirobot image URL generator. It generates a random Inspirobot image and returns the public URL.  
Uses Guzzle to connect to their API.


### Install

```
composer require xenokore/inspirobot
```


### Usage

```php
use Xenokore\Inspirobot\Inspirobot;

$url = Inspirobot::generateUrl();

var_dump($url); // string "https://generated.inspirobot.me/a/KD69rvVXeo.jpg"
```


### License

MIT
