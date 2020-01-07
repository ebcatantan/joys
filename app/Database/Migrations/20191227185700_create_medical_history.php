<?php namespace App\Database\Migrations;

class CreateMedicalHistory extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'constraint'     => '20',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'patient_id'       => [
                              'type'           => 'BIGINT',
                              'constraint'     => '20'
                        ],

                        'is_healthy'       => [
                                'type'           => 'TINYINT',
                                'constraint'     => '1',
                        ],

                        'is_taking_medicine_now'       => [
                                'type'           => 'TINYINT',
                                'constraint'     => '1',
                                'comment'       => 'is taking a medicine now'
                        ],

                        'med_taken_now'       => [
                                'type'           => 'TEXT',
                                'comment'       => 'list of medicine that patient is taking now'
                        ],

                        'had_illness_operation'       => [
                          'type'           => 'TINYINT',
                          'constraint'     => '1',
                          'comment'       => 'Had a serious illenss or medical operation'
                        ],

                        'illness_operation'       => [
                          'type'           => 'TEXT',
                          'comment'       => 'the name of illness of medical operation'
                        ],

                        'is_hospitalized'       => [
                          'type'           => 'TINYINT',
                          'constraint'     => '1',
                          'comment'       => 'had the patient been hospitalized'
                        ],

                        'hospitalized_details'       => [
                          'type'           => 'TEXT',
                          'comment'       => 'when and why the patient had been hospitalized'
                        ],

                        'is_taking_sprescription'       => [
                                'type'           => 'TINYINT',
                                'constraint'     => '1',
                                'comment'       => 'is the patient taking a presciption or non presciption'
                        ],

                        'nprescription_details'       => [
                          'type'           => 'TEXT',
                          'comment'       => 'presciption or non presciption details'
                        ],

                        'is_pregnant'       => [
                                'type'           => 'TINYINT',
                                'constraint'     => '1',
                        ],

                        'patient_alergies'       => [
                                'type'           => 'JSON',
                                'comment'        => 'medical allegies id of medicines that the patient is alergic with'
                        ],

                        'patient_medical_diseases'       => [
                                'type'           => 'JSON',
                                'comment'        => 'disease medical condition id of the patient'
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
                $this->forge->createTable('medical_history');
        }

        public function down()
        {
                $this->forge->dropTable('medical_history');
        }
}
