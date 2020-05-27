<?php
class User
{
    protected $login;
    protected $password;
    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
    public function show()
    {
        return $this->login;
    }

    public function isValid($login, $password)
    {
        if($this->login == $login && $this->password = $password)
        {
            return "Вход выполнен.";
        }else{
            return "Вход не выполнен.";
        }
    }
}