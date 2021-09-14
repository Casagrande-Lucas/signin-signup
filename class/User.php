<?php

class User
{
    public $id_user;
    public $username;
    public $password;
    public $first_name;
    public $last_name;

    public function __construct($id_user = false)
    {
        if($id_user) {
            $this->id_user = $id_user;
            $this->loadUser();
        }
    }

    public function signin($username, $password)
    {
        $connection = Connection::getConnection();
        $query = "SELECT * FROM erp.users WHERE username = '{$username}' AND password = md5('{$password}')";
        $query = $connection->prepare($query);
        $query->bindValue("username", $username);
        $query->bindValue("password", md5($password));
        $query->execute();

        if($query->rowCount() > 0) {
            $data = $query->fetch();

            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['password'] = $data['password'];
            $_SESSION['first_name'] = $data['first_name'];
            $_SESSION['last_name'] = $data['last_name'];
            return true;
        } else {
            return false;
        }
    }

    public function loadUser()
    {
        $query = "SELECT * FROM erp.users WHERE id_user = '$this->id_user'";
        $connection = Connection::getConnection();
        $resut = $connection->query($query);
        $list = $resut->fetchAll();
        foreach ($list as $line) {
            $this->username = $line['username'];
            $this->password = $line['password'];
            $this->first_name = $line['first_name'];
            $this->last_name = $line['last_name'];
        }
    }
}
