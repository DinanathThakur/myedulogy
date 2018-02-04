<?php

namespace Modules\Home\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    private static $_instance = null;

    protected $table = 'category';
    protected $fillable = ['category', 'priority', 'status'];

    public static function getInstance()
    {
        if (!is_object(self::$_instance))  //or if( is_null(self::$_instance) ) or if( self::$_instance == null )
            self::$_instance = new Category();
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
        return Category::find($id);
    }
}
