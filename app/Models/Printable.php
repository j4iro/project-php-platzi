<?php
namespace App\Models;
interface Printable
{
    //Cualquier cosa que quiera usar esta interfaz debe tener estos metodos
    public function getDescription();
}