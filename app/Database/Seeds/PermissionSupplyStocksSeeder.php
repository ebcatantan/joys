<?php namespace App\Database\Seeds;

class PermissionSupplyStocksSeeder extends \CodeIgniter\Database\Seeder
{
        public $table = 'permissions';

        public function run()
        {
                $data = [
                  [
                      'function_name' => 'show supply stocks details',
                      'function_description' => 'show supply stocks details',
                      'slugs' => 'show-supply-stocks',
                      'name_on_class' => 'show_supply_stocks',
                      'page_title' => 'supply stocks details',
                      'module_id' => '3',
                      'link_icon' => '',
                      'order' => '201',
                      'table_name' => 'supply_stocks',
                      'func_action' => 'show',
                      'func_type' => 3,
                      'allowed_roles' => "[1]",
                      'status' => 'a',
                      'created_at' => date('Y-m-d H:i:s')
                  ],
                  [
                      'function_name' => 'create supply stocks account',
                      'function_description' => 'create supply stocks account',
                      'slugs' => 'add-supply-stocks',
                      'name_on_class' => 'add_supply_stocks',
                      'page_title' => 'create a supply stocks account',
                      'module_id' => '3',
                      'link_icon' => '',
                      'order' => '202',
                      'table_name' => 'supply_stocks',
                      'func_action' => 'add',
                      'func_type' => 3,
                      'allowed_roles' => "[1]",
                      'status' => 'a',
                      'created_at' => date('Y-m-d H:i:s')
                  ],
                  [
                      'function_name' => 'list of supply stocks',
                      'function_description' => 'list of supply stocks',
                      'slugs' => 'list-supply-stocks',
                      'name_on_class' => 'index',
                      'page_title' => 'list of supply stocks',
                      'module_id' => '3',
                      'link_icon' => '<i class="fas fa-boxes"></i>',
                      'order' => '203',
                      'table_name' => 'supply_stocks',
                      'func_action' => 'link',
                      'func_type' => 1,
                      'allowed_roles' => "[1]",
                      'status' => 'a',
                      'created_at' => date('Y-m-d H:i:s')
                  ],
                  [
                      'function_name' => 'edit supply stocks account',
                      'function_description' => 'edit supply stocks account',
                      'slugs' => 'edit-supply-stocks',
                      'name_on_class' => 'edit_supply_stocks',
                      'page_title' => 'edit supply stocks account',
                      'module_id' => '3',
                      'link_icon' => '',
                      'order' => '204',
                      'table_name' => 'supply_stocks',
                      'func_action' => 'edit',
                      'func_type' => 3,
                      'allowed_roles' => "[1]",
                      'status' => 'a',
                      'created_at' => date('Y-m-d H:i:s')
                  ],
                  [
                      'function_name' => 'delete supply stocks account',
                      'function_description' => 'delete supply stocks account',
                      'slugs' => 'delete-supply-stocks',
                      'name_on_class' => 'delete_supply_stocks',
                      'page_title' => 'delete supply stocks account',
                      'module_id' => '3',
                      'link_icon' => '',
                      'order' => '205',
                      'table_name' => 'supply_stocks',
                      'func_action' => 'delete',
                      'func_type' => 3,
                      'allowed_roles' => "[1]",
                      'status' => 'a',
                      'created_at' => date('Y-m-d H:i:s')
                  ],

                ];
                $db      = \Config\Database::connect();
                $builder = $db->table($this->table);
                $builder->insertBatch($data);
        }
}
