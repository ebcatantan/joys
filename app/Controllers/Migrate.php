<?php
namespace App\Controllers;

//use App\Database\Seeds;

class Migrate extends \CodeIgniter\Controller
{
    public function index()
    {
        $migrate = \Config\Services::migrations();

        try
        {
          if($migrate->latest())
          {
            echo "Successfully migrated";
          }
        }
        catch (\Exception $e)
        {
          die("error in migrations");
        }
    }

    public function movedown($regressBatchLevel)
    {
        $migrate = \Config\Services::migrations();
        try
        {
          if($migrate->regress($regressBatchLevel))
          {
            echo "Successfully migrated down ".$version;
          }
        }
        catch (\Exception $e)
        {
          die("error in migrations");
        }
    }

    public function seeder()
    {
        $seeder = \Config\Database::seeder();
        $seeder->call('RolesSeeder');
        $seeder->call('UsersSeeder');
        $seeder->call('ModuleSeeder');
        $seeder->call('PermissionSeeder');
        $seeder->call('PermissionPatientSeeder');
        $seeder->call('PermissionSupplyStocksSeeder');
        $seeder->call('PermissionMedicineSeeder');
        $seeder->call('PermissionSuppliesSeeder');
        $seeder->call('PermissionDiseaseSeeder');
        $seeder->call('PermissionDental_conditionsSeeder');
        $seeder->call('PermissionProcedureSeeder');
        $seeder->call('MedstockSeeder');
        $seeder->call('PermissionDentistManagementSeeder');
        $seeder->call('PermissionPaymentManagementSeeder');
        $seeder->call('PermissionAllergiesSeeder');
        $seeder->call('PermissionConsultationSeeder');
    }
}
