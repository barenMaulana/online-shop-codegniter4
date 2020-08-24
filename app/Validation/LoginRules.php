<?php

namespace App\Validation;

use App\Models\AuthModel;

class LoginRules
{
    public function userValidate(string $str, string $fields, array $data)
    {
        $model = new AuthModel();
        $user = $model->where('username', $data['username'])
            ->first();

        if (!$user) return false;

        return password_verify($data['password'], $user['password']);
    }
}
