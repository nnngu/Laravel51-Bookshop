<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

//    protected $fillable = ['username', 'age'];
    protected $guarded = ['user_id'];

    protected $hidden = [];

    protected $primaryKey = 'user_id';

    public $timestamps = false;

    // 查
    public function userRead() {
        return $this->get();
    }

    // 增
    public function userAdd() {
        $user_data = ['username'=>'user2', 'age'=>30];
        $this->fill($user_data);
        $this->save();
    }

    // 改
    public function userUpdate() {
        $users = $this->where('user_id','<','5');
        $users->update(['username'=>'大白', 'age'=>20]);
//        $users->save();
    }

    // 删
    public function userDelete() {
        $user = $this->find(4);
        $user->delete();
    }
}
