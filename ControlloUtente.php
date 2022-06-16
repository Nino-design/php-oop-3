<?php

trait ControllUtente {
    public $nome;
    public $email;


    public function registrato() {
        if ($this->email && $this->name) {
            return true;
        }
        return false;
    }
}

?>