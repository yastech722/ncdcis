<?php

//CONNECTORS
// <editor-fold defaultstate="collapsed" desc="open database connection">
function open_conn() {
    $host = "localhost";
    $user = "root";
    $password = "";
    $databaseName = "ncdcis";

    $conn = new mysqli($host, $user, $password, $databaseName);
    return $conn;
}

// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="close database connection">
function close_conn() {
    open_conn()->close();
}

