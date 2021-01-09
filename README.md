composer install

php -S localhost:8000 -t public

<p>If any error there or page is blank then do following: </p>
<p>Go to `/vendor/zendframework/zend-session/src/AbstractContainer.php` file and change function name `offsetGet` to `&offsetGet`</p>


Valid Username and passwords:

user1 / user1

user2 / user2

test / test