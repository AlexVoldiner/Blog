<?php

class User
{
    /**
     * Проверяет email
     * @param string $email
     * @return boolean
     */
    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
}