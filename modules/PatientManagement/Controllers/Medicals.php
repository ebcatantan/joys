<?php
namespace Modules\PatientManagement\Controllers;

use Modules\PatientManagement\Models\MedicalsModel;
use Modules\UserManagement\Models\PermissionsModel;
use Modules\PatientManagement\Models\PatientsModel;
use App\Controllers\BaseController;

class Medicals extends BaseController
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
			$this->hasPermissionRedirect('list-medical');

    	$model = new MedicalsModel();
    	//kailangan ito para sa pagination
			//$data['medicals'] = $model->get([],[],['limit' => PERPAGE, 'offset' => $offset]);
       	$data['all_items'] = $model->get([],[],['status'=> 'a'],[]);
       	$data['offset'] = $offset;

				$fields = [
					'last_name' => 'patients',
					'first_name' => 'patients',
					'middle_name' => 'patients',
					'ext_name' => 'patients'
				];

				$tables = [
					'patients' => [
						'medical_history.patient_id' => 'patients.id'
					],
				];

				$conditions = [
						'medical_history.status' => 'a'
				];
        $data['medicals'] = $model->get($fields, $tables, $conditions, ['limit' => PERPAGE, 'offset' => $offset]);
				//die("here");
        $data['function_title'] = "Medical History";
        $data['viewName'] = 'Modules\PatientManagement\Views\medicals\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_medical($id)
	{
		$this->hasPermissionRedirect('show-medical');
		$data['permissions'] = $this->permissions;

		$model = new MedicalsModel();

		$data['medicals'] = $model->get([],[],['patient_id'=>$id],[]);

		$fields = [
			'last_name' => 'patients',
			'first_name' => 'patients',
			'middle_name' => 'patients',
			'ext_name' => 'patients'
		];

		$tables = [
			'patients' => [
				'medical_history.patient_id' => 'patients.id'
			],
		];

		$conditions = [
				'medical_history.patient_id' => $id
		];

		$data['medicals'] = $model->get($fields, $tables, $conditions);

		$data['function_title'] = "Medical History";
    $data['viewName'] = 'Modules\PatientManagement\Views\medicals\medicalsDetails';
    echo view('App\Views\theme\index', $data);
	}

    public function add_medical()
    {
			//	die("here");
    	$this->hasPermissionRedirect('add-medical');

    	$permissions_model = new PermissionsModel();
    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new MedicalsModel();

			$PatientsModel = new PatientsModel();
			$data['patients'] = $PatientsModel->getPatients();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('medical'))
		    {
		    	  $data['errors'] = \Config\Services::validation()->getErrors();

		        $data['function_title'] = "Adding Medical History";
		        $data['viewName'] = 'Modules\PatientManagement\Views\medicals\frmMedicals';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addMedicals($_POST))
		        {
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('medical-history'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('medical-history'));
		        }
		    }
    	}
    	else
    	{
					//start of id
					//$PatientsModel = new PatientsModel();
					//$data['patients'] = $PatientsModel->getPatients();
					// end of id
	    		$data['function_title'] = "Adding Medical History";
	        $data['viewName'] = 'Modules\PatientManagement\Views\medicals\frmMedicals';
	        echo view('App\Views\theme\index', $data);
					    }
		}
    public function edit_medical($id)
    {
    	$this->hasPermissionRedirect('edit-medical');
    	helper(['form', 'url']);
    	$model = new MedicalsModel();

			//$data['rec'] = $model->get([],[],['id' => $id],[]);
			$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();
			$data['permissions'] = $this->permissions;

			$PatientsModel = new PatientsModel();
			$data['patients'] = $PatientsModel->getPatients();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('medical'))
		    {
		    		$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of Medical History";
		        $data['viewName'] = 'Modules\PatientManagement\Views\medicals\frmMedicals';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editMedicals($_POST, $id))
		        {
		        	$_SESSION['success'] = 'You have updated a record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('medical-history'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an error in updating a record';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('medical-history'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing Medical History";
	      $data['viewName'] = 'Modules\PatientManagement\Views\medicals\frmMedicals';
	      echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_medical($id)
    {
		 	$this->hasPermissionRedirect('delete-medical');

    	$model = new MedicalsModel();
    	$model->deleteMedicals($id);
    }

}
