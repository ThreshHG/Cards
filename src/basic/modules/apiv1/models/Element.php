<?php

namespace app\modules\apiv1\models;

class Element extends \app\models\Element
{
    public function fields(){
        return ['id','name','axisx1','axisy1','axisx2','axisy2','axisz','borderwidth','bordercolor','innercolor','radiolt','radiort','radiolb','radiorb','fontcolor','fontsize','textalign'];
    }
    public function extraFields(){
        return ['image'];
    }
}