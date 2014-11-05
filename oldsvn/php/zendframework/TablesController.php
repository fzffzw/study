<?php
class Admin_TablesController extends Ecg_Controller_Action{
	public function preDispatch()
	{
		header('Content-type:text/html;charset=utf-8');
		$this->tplDirectory = "admin/views/db/";
		$this->userAuth = new Zend_Session_Namespace("userAuth");
	}
	/**
	 * @author william-fan
	 * @todo 得到所有表名
	 */
	public function getTablesAction(){
		
		$tables = Admin_Service_TablesProcess::getAllTables();
		//echo $this->tplDirectory;exit;
		//$this->view->tables = $tables;
		$tpl = '<ul>';
		foreach($tables as $key=>$value){
			$tpl.="<li><a href='/admin/tables/put/table/$value' target='_blank'>$value</a></li>";
		}
		$tpl.="</ul>";
		echo $tpl;
		
		//echo Ecg::renderTpl($this->tplDirectory . "tables.tpl", 'admin-layout');
		//echo $this->view->render($this->tplDirectory.'tables.tpl');
	}
	/**
	 *
	 */
	public function putAction(){
		$table = $this->_request->getParam('table');
		//Admin_Service_TablesProcess::getAllTables();
		$columns = Admin_Service_TablesProcess::getColumns($table);

		echo "<pre>";
		print_r($columns);
		echo "</pre>";
		
		$this->view->columns = $columns;
		$tplContent = $this->view->render($this->tplDirectory.'createTpl.tpl');
		
		file_put_contents($table.'Create.tpl',$tplContent);
		//echo $this->view->render($this->tplDirectory.'createTpl.tpl');

	}
}