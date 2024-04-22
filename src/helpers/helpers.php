<?php

function is_logged_in()
{
    return isset($_SESSION['user']);
}

function auth()
{
    return (object)$_SESSION['user'];
}
