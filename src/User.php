<?php

namespace App;

class User
{

    /**
     * use systems
     */
    use System;

    /**
     * Crypt password
     * 
     * @param string $password
     * @return string
     */
    private function cryptPassword($password)
    {
        return md5($password);
    }

    /**
     * @return type
     */
    public function saveUser(array $user)
    {
        if (isset($user['username'])) {
            $user['created']  = $this->createObject('\DateTime')->getTimestamp();
            $user['password'] = $this->cryptPassword($user['password']);
        }
        if (!$this->save($user)) {
            $this->log("Couldn't save user: " . json_encode($user), 'error');
            return false;
        }
        return true;
    }

}
