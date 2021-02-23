<?php

namespace app\modules\apiv1\models;

class Cards extends \app\models\Cards
{
    public function fields(){
        return ['id','name','cost','health','atk','description','type','faccion','template_id'];
    }
    //public function extraFields(){}
}