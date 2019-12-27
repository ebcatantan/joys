<?php namespace App\Database\Migrations;

class CreatePatients extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'last_name'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                        ],

                        'first_name'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                        ],

                        'middle_name'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                        ],

                        'ext_name'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                        ],

                        'nickname'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                        ],

                        'birthdate'       => [
                                'type'           => 'DATE'
                        ],

                        'gender' => [
                          'type'           => 'CHAR',
                          'constraint'    => '1',
                          'comment'       => 'm for male f for female'
                        ],

                        'occupation' => [
                                'type'           => 'TEXT',
                        ],

                        'religion' => [
                                'type'           => 'TEXT',
                        ],

                        'nationality' => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                                'default'       => 'pilipino'
                        ],

                        'contact_number' => [
                          'type'           => 'VARCHAR',
                          'constraint'    => '20'
                        ],

                        'address' => [
                                'type'           => 'TEXT'
                        ],

                        'email' => [
                                'type'           => 'VARCHAR',
                                'constraint'    => '50'
                        ],

                        'dental_insurance' => [
                                'type'           => 'VARCHAR',
                                'constraint'    => '255'
                        ],

                        'guardian_name' => [
                                'type'           => 'VARCHAR',
                                'constraint'    => '200'
                        ],

                        'guardian_relation' => [
                                'type'           => 'VARCHAR',
                                'constraint'    => '200'
                        ],

                        'previous_dentist' => [
                                'type'           => 'VARCHAR',
                                'constraint'    => '200'
                        ],

                        'last_dental_visit' => [
                                'type'           => 'DATE'
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
                $this->forge->createTable('patients');
        }

        public function down()
        {
                $this->forge->dropTable('patients');
        }
}
