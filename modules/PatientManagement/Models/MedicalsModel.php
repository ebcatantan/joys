<?php
namespace Modules\PatientManagement\Models;

use CodeIgniter\Model;

class MedicalsModel extends \CodeIgniter\Model
{
    protected $table = 'medical_history';

    protected $allowedFields = ['patient_id', 'is_healthy', 'is_taking_medicine_now', 'med_taken_now', 'had_illness_operation', 'illness_operation', 'is_hospitalized', 'hospitalized_details', 'is_taking_sprescription', 'nprescription_details', 'is_pregnant', 'patient_alergies', 'patient_medical_diseases', 'status', 'created_at','updated_at', 'deleted_at'];

  public function get($fields = [], $tables = [], $conditions = [], $args = [])
  {
    $this->select($this->$table.'*');
    foreach ($fields as $field => $table) {
      $this->select($table . '.' . $field);
    }
    foreach ($tables as $a => $array) {
      foreach ($array as $fk => $id) {
        $this->join($a, $fk .'='. $id);
      }
    }

    foreach($conditions as $field => $value) {
      $this->where($field, $value);
    }
    if (!empty($args)) {
      return $this->findAll($args['limit'], $args['offset']);
    }
    return $this->findAll();
  }

    public function addMedicals($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	  return $this->save($val_array);
	}

    public function editMedicals($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}

    public function deleteMedicals($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}
