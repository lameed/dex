<?php

class SubequipmentController extends Controller
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
			//'subcategoryContext + create', // we only allow deletion via POST request
			'postOnly + delete', // we only allow deletion via POST request
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
		$movementDataProvider=new CActiveDataProvider('Movement', 
			array('criteria'=>array('condition'=>'subequipment_id=:subequipmentId','params'=>array(':subequipmentId'=>$this->loadModel($id)->id),),
			'pagination'=>array('pageSize'=>1,),
			));
		$maintenanceDataProvider=new CActiveDataProvider('Maintenance', 
			array('criteria'=>array('condition'=>'subequipment_id=:subequipmentId','params'=>array(':subequipmentId'=>$this->loadModel($id)->id),),
			'pagination'=>array('pageSize'=>1,),
			));
		$propertyDataProvider=new CActiveDataProvider('Property', 
			array('criteria'=>array('condition'=>'subequipment_id=:subequipmentId','params'=>array(':subequipmentId'=>$this->loadModel($id)->id),),
			'pagination'=>array('pageSize'=>1,),
			));

		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'movementDataProvider'=>$movementDataProvider,
			'maintenanceDataProvider'=>$maintenanceDataProvider,
			'propertyDataProvider'=>$propertyDataProvider,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Subequipment;
		// $model->subcategory_id = $this->_subcategory->id;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Subequipment']))
		{
			$model->attributes=$_POST['Subequipment'];
			$model->subcategory_id = $_POST['Subcategory']['id'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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

		if(isset($_POST['Subequipment']))
		{
			$model->attributes=$_POST['Subequipment'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
		$dataProvider=new CActiveDataProvider('Subequipment');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Subequipment('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Subequipment']))
			$model->attributes=$_GET['Subequipment'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Subequipment the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Subequipment::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Subequipment $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='subequipment-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	private $_subcategory = null;

	/**
	* Protected method to load the associated Project model class
	* @project_id the primary identifier of the associated Project
	* @return object the Project data model based on the primary key
	*/
	protected function loadsubcategory($subcategory_id) {
	//if the project property is null, create it based on input id
	if($this->_subcategory===null)
	{
		$this->_subcategory=Subcategory::model()->findbyPk($subcategory_id);
		if($this->_subcategory===null)
		{
	throw new CHttpException(404,'The requested subcategory does not exist.');
	}

	}
return $this->_subcategory;
}
/**
* In-class defined filter method, configured for use in the above filters() method
* It is called before the actionCreate() action method is run in order to ensure a proper project context
*/
public function filterSubcategoryContext($filterChain)
{
//set the project identifier based on either the GET or POST input
//request variables, since we allow both types for our actions
$subcategoryId = null;
if(isset($_GET['pid']))
$subcategoryId = $_GET['pid'];
else
if(isset($_POST['pid']))
$subcategoryId = $_POST['pid'];
$this->loadSubcategory($subcategoryId);
//complete the running of other filters and execute the requested action
$filterChain->run();
}
}
