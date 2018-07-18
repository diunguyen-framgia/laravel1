<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function user(){
        $this->belongsTo('App\User');
    }
    public function getTittle(){
        return $this->title;
    }
    public function getId(){
        return $this->id;
    }public function getContent(){
        return $this->content;
    }
    public function getSlug(){
    return $this->slug;
    }
    public function getStatus(){
    return $this->status;
    }
    public function getUser_id(){
    return $this->user_id;
    }
}
