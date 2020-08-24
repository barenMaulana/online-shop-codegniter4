<?php namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'admin';
    protected $allowedFields = ['username','password','updated_at'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    protected function passwordHash(array $data)
    {
        if(isset($data['data']['password']))
        {
            $data['data']['password'] = password_hash($data['data']['password'],PASSWORD_DEFAULT);
            return $data;
        }
        return $data;
    }

    protected function beforeInsert(array $data)
    {
        $data = $this->passwordHash($data);
        return $data;
    }

    protected function beforeUpdate(array $data)
    {
        $data = $this->passwordHash($data);
        return $data;
    }
}