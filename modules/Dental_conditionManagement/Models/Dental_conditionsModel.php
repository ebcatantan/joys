<?php
namespace Modules\Dental_conditionManagement\Models;

use CodeIgniter\Model;

class Dental_conditionsModel extends \CodeIgniter\Model
{
    protected $table = 'dental_conditions';

    protected $allowedFields = ['legend', 'condition_name', 'description','status', 'created_at','updated_at', 'deleted_at'];

    public function getDental_conditionWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getDental_conditionWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT * FROM dental_conditions WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		// print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

    public function getDental_conditions()
	{
	    return $this->findAll();
	}

    public function addDental_conditions($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	    return $this->save($val_array);
	}

    public function editDental_conditions($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}

    public function deleteDental_condition($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}
