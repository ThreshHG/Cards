<?php

namespace app\modules\apiv1\controllers;

use yii\rest\ActiveController;

/**
 * Default controller for the `apiv1` module
 */
class UsersController extends ActiveController
{
    public $modelClass = 'app\models\Users';
}