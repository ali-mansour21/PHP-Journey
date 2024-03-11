<?php
function validate($email, $pass)
{
    $emailPattern  = '/^[a-zA-Z0-9._%+-]+@(gmail\.com|hotmail\.com|email\.com)$/';
    $passwordPattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
    if (preg_match($email, $emailPattern) && preg_match($pass, $passwordPattern)) {
        return true;
    } else {
        return false;
    }
}
