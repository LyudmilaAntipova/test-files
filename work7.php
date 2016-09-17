<?php
class User {
    public $name;
    public $login;
    public $password;
    
    function __construct($name, $login, $password) {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
    }
            
    function showInfo() {
        echo '<p>Name:'. $this-> name;
        echo '<p> Login:'.$this-> login;
        echo '<p> Password:'.$this-> password;
        
    }
    
}
$user1 = new User('Mike Don','miked', '12345');
$user1 ->showInfo();

echo '<hr/>';

class superUser extends User {
    public $role;
    
    function __construct($name, $login, $password, $role) {
        parent::__construct($name, $login, $password);
        $this->role = $role;
    }
    
    function showInfo() {
        parent::showInfo();
        echo '<p>Role:'. $this-> role;
    }
    
}

$user2 = new superUser('Vasya', 'vas', '1234567', 'admin');
$user2->showInfo();