<?php

namespace app\modules\apiv1\models;

class UsersCards extends \app\models\UsersCards
{
    public function fields(){
        return ['users_id','cards_id'];
    }
    public function extraFields(){
        return ['id','name'];
    }
}
