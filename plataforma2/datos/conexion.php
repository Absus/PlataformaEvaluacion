<?php

class conexion
{
    public function conectar()
    {
        return mysqli_connect("localhost", "root", "");
    }
}
