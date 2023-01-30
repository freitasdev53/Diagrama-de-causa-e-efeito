<?php
session_start();
class DB{
    public static function conectarDatabase(){
        return odbc_connect("Driver={SQL Server Native Client 11.0};Server=DESKTOP-17GEC4J\SQLEXPRESS;Database=JSL_5;","sa","9126");
    }
}
?>