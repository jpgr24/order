<?php

// src/AppBundle/Entity/Task.php
namespace AppBundle\Entity;

class Task
{
    protected $name;

    protected $lastname;
    protected $email;
    protected $phone;
    protected $msg;
    

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    

    public function setEmail($email){
    	$this->email=$email;
    }
    public function getEmail(){
    	return $this->email;
    }

    public function getMsg()
    {
        return $this->msg;
    }

    public function setMsg($msg)
    {
        $this->msg = $msg;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
   
}