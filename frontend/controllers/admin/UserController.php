<?php
namespace frontend\controllers\admin;


use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class UserController extends Controller{

  public function actionIndex()
  {
    return $this-> render('index');
  }
}
?>
