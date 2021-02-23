<?php

namespace app\modules\apiv1\models;

class UsersCards extends \app\models\UsersCards
{
    public function fields(){
       return ['id','users_id','cards_id','name']; 
    }
    //public function extraFields(){}
}