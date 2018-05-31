<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Todos extends Model
{
    //
	// protected $connection = 'mysql';
    protected $table = 'todos';


    static function insert_todo($desctipion, $is_done){
    	return DB::table('todos')->insert([
			    [
			    	'description' => $desctipion, 
			    	'is_done' => $is_done,
			    	'character_count' => strlen( $desctipion ),
			    ],
			]);
    }

    static function update_todo($id, $desctipion, $is_done){
    	return DB::table('todos')->where('id', $id)->update([
			    	'description' => $desctipion, 
			    	'is_done' => $is_done,
			    	'character_count' => strlen( $desctipion ),
			    ]);
    }

    static function delete_todo($id){
    	return DB::table('todos')->where('id', '=', $id)->delete();
    }



}
