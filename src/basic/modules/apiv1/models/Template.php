<?php

namespace app\modules\apiv1\models;

class Template extends \app\models\Template
{
    public function fields(){
      return ['id','name_id','cost_id','health_id','atk_id','description','type','faccion'];
    }
    //public function extraFields(){}
}