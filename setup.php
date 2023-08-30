<?php
include('config.php');

function setupdb()
{
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = 'create database ' . DB_NAME;
    $conn->query($sql);
    $sql = 'use ' . DB_NAME;
    $conn->query($sql);
    $sql = 'create table timer(name varchar(255),id int,exp int,time varchar(32));';
    if ($conn->query($sql)) {
        $sql = "INSERT INTO timer (name,id,exp,time) VALUES ('kali',0,0,'000000');";
        $conn->query($sql);
        return $conn;
    } else {
        die("init Error!");
    }
}