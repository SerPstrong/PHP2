<?php

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('/');
$twig = new \Twig\Environment($loader, [
    'cache' => 'cache',
    'debug' => true,
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());

//Базовое использование
echo $twig->render('example1.twig', [
    'name' => 'Alex2',
    'code' => '<b>big</b>',
    'arr' => ['id' => 1]
]);

//Условия
echo $twig->render('example2.twig', [
    'auth' => false,
    'name' => 'Alex',
    'value' => 24,
    'test' => 1
]);

//Циклы
echo $twig->render('example3.twig', [
    'menuItems' => [
        'Открыть',
        'Сохранить',
        'Выход'
    ],
    'arrKeys' => [
        'id' => 1,
        'name' => 'Чай'
    ]
]);

//Объекты

class User
{

    public function __get($name)
    {
        return $this->$name;
    }

    public function __isset($name)
    {
        return isset($this->name);
    }

    protected $name = 'Alex';
}

$user = new User();


echo $twig->render('example4.twig', [
    'user' => $user
]);


