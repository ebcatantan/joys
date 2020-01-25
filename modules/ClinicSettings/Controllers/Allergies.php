<?php
namespace Modules\ClinicSettings\Controllers;

use Modules\ClinicSettings\Models\AllergiesModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Allergies extends BaseController
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
    	$this->hasPermissionRedirect('list-medicine-allergies');

    	$model = new AllergiesModel();

    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getAllergiesWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['allergies'] = $model->getAllergiesWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "Medicine Allergies List";
        $data['viewName'] = 'Modules\ClinicSettings\Views\medicine\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_medicine_allergies($id)
	{

		$this->hasPermissionRedirect('show-medicine-allergies');
		$data['permissions'] = $this->permissions;

		$model = new AllergiesModel();

		$data['allergies'] = $model->getAllergiesWithCondition(['id' => $id]);

		$data['function_title'] = "Medicine Allergies Details";
        $data['viewName'] = 'Modules\ClinicSettings\Views\medicine\MedicineAllergiesDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_medicine_allergies()
    {
    	$this->hasPermissionRedirect('add-medicine-allergies');

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new AllergiesModel();
			//die("here");
    	if(!empty($_POST))
    	{
	    	if (!$this->validate('allergies'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Medicine Allergies";
		        $data['viewName'] = 'Modules\ClinicSettings\Views\medicine\frmAllergies';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addMedicineAllergies($_POST))
		        {
		        	$role_id = $model->insertID();
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('medicine-allergies'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					    $this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('medicine-allergies'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Medicine Allergies";
	        $data['viewName'] = 'Modules\ClinicSettings\Views\medicine\frmAllergies';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_medicine_allergies($id)
    {
			//die("here");
    	$this->hasPermissionRedirect('edit-medicine-allergies');
    	helper(['form', 'url']);
    	$model = new AllergiesModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('allergies'))
		    {

		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of Medicine Allergies";
		        $data['viewName'] = 'Modules\ClinicSettings\Views\medicine\frmAllergies';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editMedicineAllergies($_POST, $id))
		        {
		        	$_SESSION['success'] = 'You have updated a record';
				    	$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('medicine-allergies'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in updating a record';
					    $this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('medicine-allergies'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing of Medicine Allergies";
	        $data['viewName'] = 'Modules\ClinicSettings\Views\medicine\frmAllergies';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_medicine_allergies($id)
    {
    	$this->hasPermissionRedirect('delete-medicine-allergies');

    	$model = new AllergiesModel();
    	$model->deleteMedicineAllergies($id);
    }

}
