
## Create composer.json
```
composer init
```


## Add Autoload
```
"autoload": {
	"psr-0": {
		"HelloWorld": "src/"
	}
}
```


## Create src/HelloWorld/Greeting.php
```
<?php

namespace HelloWorld;

class Greeting {
	
	public static function sayHelloWorld(){
		return "Hello World";
	}
}

?>
```

## Create src/Program.php
<?php

require_once __DIR__ . '/../vendor/autoload.php';

use HelloWorld\Greeting;

echo Greeting::sayHelloWorld();

?>
##

## Execute the Program.php
```
php src/Program.php
```

