<?php
namespace Modules\DentalProceduresManagement\Models;

use CodeIgniter\Model;

class ProceduresModel extends \CodeIgniter\Model
{
    protected $table = 'dental_procedures';

    protected $allowedFields = ['procedure_name', 'description', 'price', 'status', 'created_at','updated_at', 'deleted_at'];

    public function getProcedureWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getProcedureWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT * FROM dental_procedures WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		// print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

    public function getProcedures()
	{
	    return $this->findAll();
	}

    public function addProcedures($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	    return $this->save($val_array);
	}

    public function editProcedures($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}

    public function deleteProcedure($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}
