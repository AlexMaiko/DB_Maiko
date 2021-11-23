<?php

/*Class Shopcard{


}

$product1 = new Shopcard();
$product2 = new Shopcard();
$product3 = new Shopcard();

var_dump($product1);

*/

/*class Shop{
    private $name;
    private $lastname;


    public function naming(){
        $this->name = "Adidas - ";
        echo $this->name;
    }
    function lastName(){
        $this->lastname="Company";
        echo $this->lastname;
    }
}

$product = new Shop;
$product->naming();
$product->lastName();

*/



// Свойства класа - хранят в себе даные

 /*class User{
    public $name = "Name";
    public $pass = "Pass";
    public $mail = "E-mail";
    public $city = "City";

}

$admin = new User();
$admin->name="Alex ";
$admin->city="Kyiv";

$user1 = new User();
$user1->name="Oleg ";
$user1->surname="Maiko";

echo $admin->name . $admin->city . "<br>";
echo $user1->name;
echo $user1->surname;
*/
// Методи класа - выполнять задачи. Методы - футкции которые обявляются внутри класа

/*class User {
    public $name = "Name";
    public $pass = "Pass";
    public $mail = "E-mail";
    public $city = "City";

    function  getInfo() {
        return "{$this->name }" . 'Живет в городе ' . "{$this->city}";
    }
    function mailPass() {
        return 'Почта - ' . "{$this->mail}" . 'Пароль - ' . "{$this->pass}";
    }
}
$admin = new User;
$admin->name="Alex ";
$admin->city="Kyiv";
$admin->mail="aswel@mail.ru / ";
$admin->pass="12345";
echo "Пользователь {$admin->getInfo()}" . "<br>" . "{$admin->mailPass()}";
*/

// Конструкторы + деструкторы

/*class User
{

    function __construct($name, $pass, $city, $mail)
    {
        $this->name = $name;
        $this->pass = $pass;
        $this->city = $city;
        $this->mail = $mail;

    }

    function getInfo(){
        return "{$this->name}"."{$this->pass}"."{$this->city}"."{$this->mail}";
    }


}

$User1 = new User("Alex ", "12345 ", "Kyiv ", "al@mai.ru");
echo $User1->getInfo();
*/

/*class Destruct{
    function __construct()
    {
        echo "Конструктор";
        $this->name = "Destruct";
    }

    function __destruct()
    {
        echo "Уничтожение " . $this->name;

    }
}

$obj = new Destruct();
*/

//Переменная this

/*class User
{
    public $name;
    public $pass;
    public $mail;
    public $city;

    public function getname(){
        echo $this->name;
        $this->test();
    }
    public function test(){
        echo 'Test';
    }
}

$user1 = new User();
$user1->name="Alex";
$user1->getname();

$user2 = new User();
$user2->name="Ivan";
$user2->getname();
*/

// Self

/*class User
{

private static $name;

    public static function setName($name1)
    {
        self::$name = $name1;

    }

    public static function getName()
    {
        return self::$name;
    }
}

User::setName('Ivan / ');
echo User:: getName();

User::setName('Alex / ');
echo User:: getName();

User::setName('Petro');
echo User:: getName();
*/


// Наследование

/*class User
{

    function __construct($name, $pass, $city, $mail)
    {
        $this->name = $name;
        $this->pass = $pass;
        $this->city = $city;
        $this->mail = $mail;

    }

    function getInfo(){
        $information = "{$this->name}"."{$this->pass}"."{$this->city}"."{$this->mail}";
        return $information;

    }

}

$User1 = new User("Alex ", "12345 ", "Kyiv ", "al@mai.ru");
echo $User1->getInfo();

class Moderator extends User{

    public  $info;
    public $prava;
    function  __construct($name, $pass, $city, $mail, $info, $prava)
    {
        parent::__construct($name, $pass, $city, $mail);
        $this->info = $info;
        $this->prava = $prava;
    }

    function getInfo(){
        $information = parent::getInfo();
        $information .= "{$this->info}"."{$this->prava}";
        return $information;

    }
}

$moder = new Moderator('Sascha ', '9999 ', 'Stanislaw ', 'Sas@gmai.com ', 'Moderator ', 'True ');
echo '<br>' . $moder->getInfo();

*/

// Инкапсуляция и полиморфизм

/*class Name {
    function funct() {
        echo "<h2>Alex Maiko</h2>";
    }

    function base_name() {
        $this->funct();
    }
}

class Brat extends Name {
    function funct() {
        echo "<h3>Kurii Anatoliy</h3>";
    }
}

$b = new Name();
$d = new Brat();

$b->base_name();
$d->funct();
$d->base_name();

*/

// Static - звертатися до класу не створюючи його екземпляр

/*class user {
    public static $name;

    public static function hallo(){
        echo 'Hallo ' . self::$name;
    }

}

user::$name='Alex ';
echo user::$name . '<br>';
user::hallo();
*/

//Константи класа

/*class user {
    const SOME_CONST = 314;
}

echo user::SOME_CONST;
*/

// Абстрактные классы - клас для якого не можуть бути створены його екземпляри.Шаблони.


/*abstract class user {
    public $name;
    public $status;

    abstract public function getStatus();

}

class Admin extends user {
    public function getStatus()
    {
        echo 'Admin Alex';
    }

}
$user1 = new Admin;
$user1->getStatus();
*/

//Интерфейсы в ООП. Шаблони. Клас обовязково повинен мати реалізацію ВСІХ методів перерахованих в інтерфейсі

/*/interface FirstInterFace {
    public function getName();
}

interface SecondInterFace {
    public function getStatus();
}

class Test implements FirstInterFace, SecondInterFace {

    public $name = "Alex ";
    public $status = "Maiko";

    public function getName()
    {
        echo $this->name;
    }

    public function getStatus()
    {
        echo $this->status;
    }
}

$user1 = new Test();
$user1->name="Petro";
$user1->getName();
$user1->getStatus();

$user2 = new Test();
$user2->name="Alex";
$user2->getName();
$user2->getStatus();
*/

// Трейты php.


/*trait Hallo {
    public function sayHallo(){
        echo "Halloooo";
    }
}
trait World {
    public function sayWorld(){
        echo "Worldddd";
    }
}

class myHalloWorld {
    use World, Hallo;
}

$obj = new myHalloWorld();
$obj->sayHallo();
$obj->sayWorld();
*/

/*class Base{
    public function sayHallo() {
        echo "Hallo";
    }
}

trait sayWorld {
    public function sayHallo() {
        parent::sayHallo();
        echo "World";
    }
}
class myHalloWorld extends Base {
    use sayWorld;
}
$obj = new myHalloWorld();
$obj->sayHallo();
*/

// Магические методы get,set,clone

/*class User {

    private $name;
    private $city;
    private $id;

    function __construct($name, $city)
    {
     $this->name=$name;
     $this->city=$city;
    }

    function setId($id) {
        $this->id=$id;
        echo $this->id;
    }

    public function __clone()
    {
        $this->id = 0;
    }
}

$user1 = new User("Alex", "Kyiv");
$user1->setId(15);
$user2 = clone $user1;
$user2->setId(20);

*/

//  Пространства имен

/*namespace Home;

class User
{

    function __construct($name, $pass, $city, $mail)
    {
        $this->name = $name;
        $this->pass = $pass;
        $this->city = $city;
        $this->mail = $mail;

    }

    function getInfo(){
        $information = "{$this->name}"."{$this->pass}"."{$this->city}"."{$this->mail}";
        return $information;

    }

}

$User1 = new User("Alex ", "12345 ", "Kyiv ", "al@mai.ru");
echo $User1->getInfo();

*/

// Исключения (Exceptions)

/*$file = 'namespacew.php';


try {
    if (!file_exists($file)) {
        throw new Exception('File not foundd');
    }
}catch(Exception $e) {
    echo $e ->getMessage();
}
*/



