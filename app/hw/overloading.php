<?php

/*
 Створіть клас User, який буде мати private поля name, age, email і матиме __call метод. Так само клас буде мати приватні методи: setName, setAge і так далі.
Отримати дані користувача я можу через (email лишіть пустим в даним, метода хай повертає масив властивостей)
Метод __call повинен перевірити, що якщо ви викликаєте не існуючий метод, наприклад setEmail, то він вам виведе повідомлення що такого методу не існує, в інших випадках методи повинні виконатися.
Повідомлення має бути кастомним
Всю конструкцію викликів використовувати в try/catch
 * */

class User{
    private string $name;
    private int $age;
    private string $email = '';

    public function __call(string $name, array $arguments)   {
            if(!method_exists($this, $name)){
                throw new Exception('Method ' . $name . ' does not exist');
            }
        return call_user_func_array([$this, $name], $arguments);

    }

    private function setName(string $name):void
    {
        $this->name = (string)$name;
    }
    private function setAge(int $age)
    {
        $this->age = (int)$age;
    }
    private function setEmail(string $email)
    {
        return get_object_vars($this);
    }
};

$user = new User();

try{
    $user->setName('John Doe');
    $user->setA3ge(18);
    var_dump($user->setEmail("John Doe"));
}catch (Exception $e){
    echo $e->getMessage();
}

