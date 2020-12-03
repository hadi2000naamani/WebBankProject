<?php
function is_validemail($email) 
{
     return preg_match('/^[\w.-]+@([\w.-]+\.)+[a-z]{2,6}$/is', $email);
}

$email = $_POST['email'];

if(is_validemail($email)) { echo ("email validated"); } else { echo ("invalid email given"); }
