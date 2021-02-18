<?php

namespace app\modules\apiv1\models;

class Cards extends \app\models\Cards
{
    public function fields(){
        return ['name','cost','description'];
    }
    public function extraFields(){
        return ['health','atk','type','faccion','bg_color','border_color','image'];
    }
}
