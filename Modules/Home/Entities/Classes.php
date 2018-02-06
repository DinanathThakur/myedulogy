<?php

namespace Modules\Home\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Classes extends Model
{
    private static $_instance = null;

    protected $table = 'classes';
    protected $fillable = ['name', 'courseID', 'startDate', 'endDate', 'startTime', 'endTime', 'type', 'price', 'discountType', 'discountValue', 'offerExpireOn', 'status'];

    public static function getInstance()
    {
        if (!is_object(self::$_instance))  //or if( is_null(self::$_instance) ) or if( self::$_instance == null )
            self::$_instance = new Classes();
        return self::$_instance;
    }

    public function getRecordWhere($where)
    {
        $result = DB::table($this->table)
            ->where($where)
            ->first();
        return $result;
    }

    public function getRecordsWhere($where = [])
    {
        $result = DB::table($this->table)
            ->where($where)
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
        return Classes::find($id);
    }

}
