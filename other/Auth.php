<?php

class Auth 
{
    public function authenticate($user, $password)
    {
        if( $user == 'luiza' and $password == '123'){
            return true;
        }
        return false;
    }
}

class AuthApi extends Auth 
{
    public function authenticate($user, $password)
    {
        if( $user == 'luiza' and $password == '123'){
            return [
                'status'=> 'ok'
            ];
        }
        return [
            'status' => 'fail'
        ];
    }
}

$auth1 = new Auth;
$auth2 = new AuthApi;

$auth1 = $auth1->authenticate('luiza', '1234');
$auth2 = $auth2->authenticate('luiza', '123');

if($auth1){
    echo 'logado';
} else {
    echo 'não logado';
}