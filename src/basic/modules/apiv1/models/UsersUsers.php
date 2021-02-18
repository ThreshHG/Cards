<?php

namespace app\modules\apiv1\models;

class UsersUsers extends \app\models\UsersUsers
{
    public function fields(){
        return ['users_id','users2_id'];
    }
    public function extraFields(){
        return ['id','usr1_blocked_usr2','usr2_blocked_usr1'];
    }
}
