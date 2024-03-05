# Adv.Cake

Для использования:

require_once __DIR__ . '/revertText.php';

$reverObject = new RevertText();
echo $reverObject->makeRevert("Привет! Давно не виделись.");


Для тестирования:

    Установить зависимости:
        composer install
    Выполнить: 
        vendor/bin/phpunit tests/