<?php
namespace Modules\Inventory\Models;

use CodeIgniter\Model;

class MedicinesModel extends \CodeIgniter\Model
{
    protected $table = 'medicine';

    protected $allowedFields = ['medicine_name', 'generic_name', 'description', 'unit_of_measure', 'item_per_unit', 'unit_on_stocks', 'reorder_level', 'status', 'created_at','updated_at', 'deleted_at'];

    public function getMedicineWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getMedicineWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT * FROM medicine WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		//print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}


    public function getUsers()
	{
	    return $this->findAll();
	}

    public function addMedicines($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';


	    return $this->save($val_array);
	}

    public function editMedicines($val_array = [], $id)
	{
		$user = $this->find($id);

		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		//print_r($val_array); die();

		return $this->update($id, $val_array);
	}

    public function deleteMedicine($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}
