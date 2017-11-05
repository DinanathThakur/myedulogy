<?php

namespace Modules\Home\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    private static $_instance = null;

    protected $table = 'users';
    protected $fillable = ['firstName', 'lastName', 'email', 'password', 'role', 'userName', 'profilePic'];
    protected $hidden = ['password', 'remember_token'];

    public static function getInstance()
    {
        if (!is_object(self::$_instance))  //or if( is_null(self::$_instance) ) or if( self::$_instance == null )
            self::$_instance = new User();
        return self::$_instance;
    }

    public function getUserWhere($email, $password)
    {
        $result = User::where('email', $email)
            ->where('password', bcrypt($password))
            ->first();
//        $result = User::all();
        return $result;
    }

    public function getUserDetailsWhere()
    {
        if (func_num_args() > 0) {
            $where = func_get_arg(0);
            $result = DB::table($this->table)
                ->join('usersmeta', 'users.id', '=', 'usersmeta.user_id')
                ->where($where)
                ->first();
            return $result;
        } else {
            throw new Exception('Argument Not Passed');
        }
    }

    /**
     * Update user data
     * @param array $data
     * @param array $where
     * @return mixed|int
     * @throws Exception
     * @since 09-12-2015
     * @author Dinanath Thakur <dinanaththakur@globussoft.in>
     */
    public function updateUserWhere()
    {
        if (func_num_args() > 0) {
            $data = func_get_arg(0);
            $where = func_get_arg(1);
            try {
                $updatedResult = DB::table($this->table)
                    ->where($where)
                    ->update($data);
                return $updatedResult;
            } catch (\Exception $e) {
                return $e->getMessage();
            }

        } else {
            throw new Exception('Argument Not Passed');
        }
    }

    public function getUserById($userId)
    {
        $result = User::find($userId);
        return $result;
    }
}
