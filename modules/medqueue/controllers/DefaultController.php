<?php

namespace app\modules\medqueue\controllers;

use Yii;
use yii\web\Controller;
use app\modules\medqueue\models\Medqueue;

/**
 * Default controller for the `medqueue` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $model = new Medqueue();

        if($model->load(Yii::$app->request->post()) && $model->save())
            $this->redirect(Yii::$app->request->url);

        return $this->render('insert', ['model' => $model]);
    }
}
