# Speed test of backslash in standard functions with opcache enabled in composer
Since PHP 7.0, some functions are replaced by opcodes, producing much faster code.
Yet, for this to work, these functions need to be referenced in the root namespace at compile time
See https://github.com/FriendsOfPHP/PHP-CS-Fixer/issues/3048

Also if not set to global namespace using psr-4 it needs to navigate up the namespace tree.
https://dev.to/elabftw/optimizing-your-php-app-speed-3hd4

### Prerequisites

You will need php with opcache enabled and composer installed

### Installing
 
```
git clone https://github.com/SSHVersionControl/php-backslash-test.git
cd php-backslash-test
composer install -a
```

### Results
![Result for php 7.1.19](doc/result.php.7.1.19.png?raw=true "Result Example")

### Conclusion
The speed difference is very minor and there is probably more going on under the hood, but there does seem to be a 
difference with backslash vs without so its worth getting into the habit of adding backslashes to opcode supported functions:

```php
"array_slice"
"assert"
"boolval"
"call_user_func"
"call_user_func_array"
"chr"
"count"
"defined"
"doubleval"
"floatval"
"func_get_args"
"func_num_args"
"get_called_class"
"get_class"
"gettype"
"in_array"
"intval"
"is_array"
"is_bool"
"is_double"
"is_float"
"is_int"
"is_integer"
"is_long"
"is_null"
"is_object"
"is_real"
"is_resource"
"is_string"
"ord"
"strlen"
"strval"
```
