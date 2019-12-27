<?php namespace App\Database\Migrations;

class CreateUsedsuppliess extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'consultation_id'       => [
                              'type'           => 'BIGINT',
                              'constraint'     => '20'
                        ],

                        'treatment_id'       => [
                              'type'           => 'BIGINT',
                              'constraint'     => '20'
                        ],

                        'supply_stock_id'       => [
                              'type'           => 'BIGINT',
                              'constraint'     => '20'
                        ],

                        'total_used'       => [
                              'type'           => 'INT',
                              'constraint'     => '11'
                        ],

                        'status' => [
                                'type'           => 'CHAR',
                                'constraint'     => '1',
                                'default'        => 'a'
                        ],

                        'created_at' => [
                                'type'           => 'DATETIME',
                                'comment'        => 'Date of creation',
                        ],

                        'updated_at' => [
                                'type'           => 'DATETIME',
                                'null'           => true,
                                'default'        => null,
                                'comment'        => 'Date last updated',
                        ],
                        'deleted_at' => [
                                'type'           => 'DATETIME',
                                'null'           => true,
                                'default'        => null,
                                'comment'        => 'Date of soft deletion',
                        ]
                ]);
                $this->forge->addKey('id', TRUE);
                $this->forge->createTable('used_supplies');
        }

        public function down()
        {
                $this->forge->dropTable('used_supplies');
        }
}
