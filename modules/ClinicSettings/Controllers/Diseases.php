<?php
namespace Modules\ClinicSettings\Controllers;

use Modules\ClinicSettings\Models\DiseasesModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Diseases extends BaseController
{
	//private $permissions;

	public function __construct()
	{
		parent:: __construct();

		$permissions_model = new PermissionsModel();
		$this->permissions = $permissions_model->getPermissionsWithCondition(['status' => 'a']);
	}

    public function index($offset = 0)
    {
    	$this->hasPermissionRedirect('list-disease');

    	$model = new DiseasesModel();

    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getDiseasesWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['diseases'] = $model->getDiseasesWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "Diseases List";
        $data['viewName'] = 'Modules\ClinicSettings\Views\diseases\index';
        echo view('App\Views\theme\index', $data);
				//die("here");
    }

    public function show_disease($id)
	{
		$this->hasPermissionRedirect('show-disease');
		$data['permissions'] = $this->permissions;

		$model = new DiseasesModel();

		$data['diseases'] = $model->getDiseasesWithCondition(['id' => $id]);

		$data['function_title'] = "Disease Details";
        $data['viewName'] = 'Modules\ClinicSettings\Views\diseases\diseaseDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_disease()
    {
    	$this->hasPermissionRedirect('add-disease');

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new DiseasesModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('diseases'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Disease";
		        $data['viewName'] = 'Modules\ClinicSettings\Views\diseases\frmDisease';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addDiseases($_POST))
		        {
		        	// $role_id = $model->insertID();
		        	// $permissions_model->update_permitted_role($role_id, $_POST['function_id']);
		        	 $_SESSION['success'] = 'You have added a new record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('diseases'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('diseases'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Disease";
	        $data['viewName'] = 'Modules\ClinicSettings\Views\diseases\frmDisease';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_disease($id)
    {
    	$this->hasPermissionRedirect('edit-disease');
    	helper(['form', 'url']);
    	$model = new DiseasesModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('diseases'))
		    {
		      	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of Disease";
		        $data['viewName'] = 'Modules\ClinicSettings\Views\diseases\frmDisease';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editDiseases($_POST, $id))
		        {
		        	//$permissions_model->update_permitted_role($id, $_POST['function_id'], $data['rec']['function_id']);
		        	$_SESSION['success'] = 'You have updated a record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('diseases'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an error in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('diseases'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing of Disease";
	        $data['viewName'] = 'Modules\ClinicSettings\Views\diseases\frmDisease';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_disease($id)
    {
    	$this->hasPermissionRedirect('delete-disease');

    	$model = new DiseasesModel();
    	$model->deleteDiseases($id);
    }

}
