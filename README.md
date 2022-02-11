composer install;

composer dump-autoload;

./vendor/bin/phpunit src/VendingMachineTest.php --bootstrap ./vendor/autoload.php
