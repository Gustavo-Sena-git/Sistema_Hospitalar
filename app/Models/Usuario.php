<?php

class Usuario
{
    public $id;
    public $nome;
    public $email;
    public $senha;

    public function __construct(array $data = [])
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }
}
