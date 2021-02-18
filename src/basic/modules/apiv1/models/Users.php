<?php

namespace app\modules\apiv1\models;

class Users extends \app\models\Users
{
    public function fields(){
        return ['username','pass','id','auth_key','access_token'];
    }
    public function extraFields(){
        return ['cards'];
    }
}