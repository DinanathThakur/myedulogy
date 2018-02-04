<?php

namespace Modules\Home\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Course extends Model
{
    private static $_instance = null;

    protected $table = 'courses';
    protected $fillable = ['category', 'courseName', 'title', 'mainDescription', 'otherDescription', 'ratings', 'priority', 'userEnrolled', 'status', 'img'];

    public static function getInstance()
    {
        if (!is_object(self::$_instance))  //or if( is_null(self::$_instance) ) or if( self::$_instance == null )
            self::$_instance = new Course();
        return self::$_instance;
    }

    public function getRecordWhere($where)
    {
        $result = DB::table($this->table)
            ->where($where)
            ->first();
        return $result;
    }

    public function getRecordsWhere($where = [], $options = [])
    {
        $result = DB::table($this->table)
            ->where($where)
            ->offset(isset($options['page']) ? $options['page'] : 0)
            ->limit(isset($options['limit']) ? $options['limit'] : 999999999)
            ->get();
        return $result;
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
    public function updateUserWhere($data, $where)
    {
        try {
            $updatedResult = DB::table($this->table)
                ->where($where)
                ->update($data);
            return $updatedResult;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function getByID($id)
    {
        return Course::find($id);
    }
}
