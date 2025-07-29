<?php

// namespace Classes\User;

class User
{
    private $id;
    private $username;
    private $email;
    private $password;
    private $birth_date;
    private $gender;
    private $register_time;

    public function toArray()
    {
        return [
            'id' => $this->id,
            'username' => $this->username,
            'email' => $this->email,
            'password' => $this->password,
            'birth_date' => $this->birth_date,
            'gender' => $this->gender,
            'register_time' => $this->register_time
        ];
    }


    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }
    public function getUsername()
    {
        return $this->username;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function setBirthDate($birth_date)
    {
        $this->birth_date = $birth_date;
    }
    public function getBirthDate()
    {
        return $this->birth_date;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }
    public function getGender()
    {
        return $this->gender;
    }
    public function getRegisterTime()
    {
        return $this->register_time;
    }
}