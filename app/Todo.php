<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    //
	// protected $connection = 'mysql';
    protected $table = 'todo';


    static function insert_todo($desctipion, $is_done){
    	return DB::table('todo')->insert([
			    [
			    	'description' => $desctipion, 
			    	'is_done' => $is_done,
			    	'character_count' => strlen( $desctipion ),
			    ],
			]);
    }

    static function update_todo($id, $desctipion, $is_done){
    	return DB::table('todo')->where('id', $id)->update([
			    	'description' => $desctipion, 
			    	'is_done' => $is_done,
			    	'character_count' => strlen( $desctipion ),
			    ]);
    }

    static function delete_todo($id){
    	return DB::table('todo')->where('id', '=', $id)->delete();
    }



}
