<?php

namespace app\modules\apiv1\models;

class Element extends \app\models\Element
{
    public function fields(){
        return ['id','name','axisx1','axisy1','axisx2','axisy2','axisz','borderwidth','bordercolor','innercolor','gridrows','gridcolumns','radiolt','radiort','radiolb','radiorb'];
    }
    public function extraFields(){
        return ['image'];
    }
}