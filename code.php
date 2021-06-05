<?php


class pwned
{
    public function pwn()
    {
        system($this->command);
    }
}

class ReadFile
{
    public function __tostring()
    {
        return file_get_contents($this->filename);
    }
    public function __destrut()
    {
        $this->secret->pwn();
    }
}

class User {
    public $username;
    public $isAdmin;

    public function printData() {
        if ($this->isAdmin) {
            echo $this->username . " is an admin\n";
        } else {
            echo $this->username . " is not an admin\n";
        }
    }
}

// $obj = new User();
// $obj->username = "Saravanan Vijayamuthu";
// $obj->isAdmin = TRUE;
// echo serialize($obj);
// O:4:"User":2:{s:8:"username";s:21:"Saravanan Vijayamuthu";s:7:"isAdmin";b:1;}

$obj  = unserialize($_POST['Saravanan Vijayamuthu']);
$obj->PrintData();

?>