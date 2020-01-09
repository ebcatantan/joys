<?php
namespace Modules\Inventory\Controllers;

use Modules\UserManagement\Models\PermissionsModel;
use Modules\Inventory\Models\Medicine_StocksModel;
use App\Controllers\BaseController;

class Medicine_Stocks extends BaseController
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
    	$this->hasPermissionRedirect('list_medicine_stock');

    	$model = new Medicine_StocksModel();

    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getMedicineStocksWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;

        $data['medicine_stocks'] = $model->getMedicineStocksWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

        $data['function_title'] = "Medicine Stocks List";
        $data['viewName'] = 'Modules\Inventory\Views\medstocks\index';
        echo view('App\Views\theme\index', $data);
				// die("here");
    }

    public function show_medicine_stocks($id)
	{
		$this->hasPermissionRedirect('show_medicine_stock');
		$data['permissions'] = $this->permissions;

		$model = new Medicine_StocksModel();

		$data['medicine_stocks'] = $model->getMedicineStocksWithCondition(['id' => $id]);

		$data['function_title'] = "Medicine Stocks Details";
        $data['viewName'] = 'Modules\Inventory\Views\medstocks\medstockDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_medicine_stocks()
    {
    	$this->hasPermissionRedirect('add_medicine_stock');
    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new Medicine_StocksModel();

    	if(!empty($_POST))
    	{
				// die("here");
	    	if (!$this->validate('medicine_stock'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Medicine Stocks";
		        $data['viewName'] = 'Modules\Inventory\Views\medstocks\frmMedStock';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addMedicineStocks($_POST))
		        {
		        	// $role_id = $model->insertID();
		        	// $permissions_model->update_permitted_role($role_id, $_POST['function_id']);
		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('medicine-stocks'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('medicine-stocks'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Medicine Stocks";
	        $data['viewName'] = 'Modules\Inventory\Views\medstocks\frmMedStock';
	        echo view('App\Views\theme\index', $data);
					// die("here");
    	}

    }

    public function edit_medicine_stocks($id)
    {
    	$this->hasPermissionRedirect('edit_medicine_stock');
    	helper(['form', 'url']);
    	$model = new Medicine_StocksModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('medicine_stock'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of Medicine Stocks";
		        $data['viewName'] = 'Modules\Inventory\Views\medstocks\frmMedStock';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editMedicineStocks($_POST, $id))
		        {
		        //	$permissions_model->update_permitted_role($id, $_POST['function_id'], $data['rec']['function_id']);
		        	$_SESSION['success'] = 'You have updated a record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('medicine-stocks'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an errot in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('medicine-stocks'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing of Medicine Stocks";
	        $data['viewName'] = 'Modules\Inventory\Views\medstocks\frmMedStock';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_medicine_stocks($id)
    {
    	$this->hasPermissionRedirect('delete_medicine_stock');

    	$model = new Medicine_StocksModel();
    	$model->deleteMedicineStocks($id);
    }

}
