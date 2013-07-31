<?php

class NotificationController extends Controller
{
        /*
         * @author Nguyen Van Cuong
         */
	public function actionIndex()
	{
           $id = $this->current_user->id; 
	   $this->render('index');
	}
        /*
         * @author Nguyen Van Cuong
         */
	public function filters()
	{
            return array(
                'accessControl', // perform access control for CRUD operations
                'postOnly + delete', // we only allow deletion via POST request
            );
	}
        
        /*
         * @author Nguyen Van Cuong
         */
        public function actionDelete($id) //delete Poll where id = $id
        {
            $notification = $this->loadModel($id);
            $notification->delete();
            $this->redirect(array('notification/index'));
        }
}