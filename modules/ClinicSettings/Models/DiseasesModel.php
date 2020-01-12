<?php
namespace Modules\ClinicSettings\Models;

use CodeIgniter\Model;

class DiseasesModel extends \CodeIgniter\Model
{
    protected $table = 'disease_medical_conditions';

    protected $allowedFields = ['dn_name', 'description','status', 'created_at','updated_at', 'deleted_at'];

    public function getDiseasesWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getDiseasesWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		$str = "SELECT * FROM disease_medical_conditions WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		// print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

    public function getDiseases()
	{
	    return $this->findAll();
	}

    public function addDiseases($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	  return $this->save($val_array);
	}

    public function editDiseases($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}

    public function deleteDiseases($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}
