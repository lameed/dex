<?php

class ConsumablepropertyController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='/layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'consumablesContext + create', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('create', 'update', 'admin', 'delete', 'index','view'),
				'roles'=>array('superuser'),
			),
			
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Consumableproperty;
		$model->consumables_id = $this->_consumables->id;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Consumableproperty']))
		{
			$model->attributes=$_POST['Consumableproperty'];
			$model->DateCreated=new CDbExpression('NOW()');
			$model->LastUpdated=new CDbExpression('NULL');
			 $model->drawing=CUploadedFile::getInstance($model,'drawing');
			 $ext=substr($model->drawing,-4);
			if($model->save())
			{
				$model->drawing->saveAs( 'images/' . $model->drawing);
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Consumableproperty']))
		{
			$model->attributes=$_POST['Consumableproperty'];
			$model->drawing=CUploadedFile::getInstance($model,'drawing');
			if($model->save())
				{
				$model->drawing->saveAs( 'images/' . $model->drawing);
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Consumableproperty');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Consumableproperty('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Consumableproperty']))
			$model->attributes=$_GET['Consumableproperty'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Consumableproperty the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Consumableproperty::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Consumableproperty $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='consumableproperty-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	private $_consumables = null;

	/**
	* Protected method to load the associated Project model class
	* @project_id the primary identifier of the associated Project
	* @return object the Project data model based on the primary key
	*/
	protected function loadConsumables($consumables_id) {
	//if the project property is null, create it based on input id
	if($this->_consumables===null)
	{
		$this->_consumables=Consumables::model()->findbyPk($consumables_id);
		if($this->_consumables===null)
		{
	throw new CHttpException(404,'The requested equipment does not exist.');
	}

	}
return $this->_consumables;
}
/**
* In-class defined filter method, configured for use in the above filters() method
* It is called before the actionCreate() action method is run in order to ensure a proper project context
*/
public function filterConsumablesContext($filterChain)
{
//set the project identifier based on either the GET or POST input
//request variables, since we allow both types for our actions
$consumablesId = null;
if(isset($_GET['pid']))
$consumablesId = $_GET['pid'];
else
if(isset($_POST['pid']))
$consumablesId = $_POST['pid'];
$this->loadConsumables($consumablesId);
//complete the running of other filters and execute the requested action
$filterChain->run();
}
}
