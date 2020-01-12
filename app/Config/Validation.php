<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	public $nodes = [
        'title' => [
            'label'  => 'Node Title',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Node title field is required.'
            ]
        ],

        'description' => [
            'label'  => 'Node Description',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Node desciption field is required.'
            ]
        ],

    ];

    public $role = [
        'role_name' => [
            'label'  => 'Role Name',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Role Name field is required.'
            ]
        ],

        'description' => [
            'label'  => 'Role Description',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Role desciption field is required.'
            ]
        ],

        'function_id' => [
            'label'  => 'Landing Page',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Landing Page field is required.'
            ]
        ],

    ];



	public $user = [
				'lastname' => [
            'label'  => 'Lastname',
            'rules'  => 'required|alpha',
            'errors' => [
                'required' => 'Lastname field is required.',
                'alpha' => 'Lastname must not have numbers.'
            ]
        ],
        'firstname' => [
            'label'  => 'Firstname',
            'rules'  => 'required|alpha',
            'errors' => [
                'required' => 'Firstname field is required.',
                'alpha' => 'Lastname must not have numbers.'
            ]
        ],
        'username' => [
            'label'  => 'Username',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Username field is required.'
            ]
        ],
        'email' => [
            'label'  => 'Email',
            'rules'  => 'required|valid_email',
            'errors' => [
                'required' => 'Email field is required.',
                'valid_email' => 'You must provide a valid email address.'
            ]
        ],
        'password' => [
            'label'  => 'Password',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Password field is required.'
            ]
        ],

        'password_retype' => [
            'label'  => 'Password Retype',
            'rules'  => 'required|matches[password]',
            'errors' => [
                'required' => 'Password field is required.',
                'matches' => 'Password Retype field must match password.'
            ]
        ],
        'birthdate' => [
            'label'  => 'Birthdate',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Birthdate field is required.'
            ]
        ],
        'role_id' => [
            'label'  => 'Role',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Role field is required.'
            ]
        ],

    ];

    public $user_edit = [
        'lastname' => [
            'label'  => 'Lastname',
            'rules'  => 'required|alpha',
            'errors' => [
                'required' => 'Lastname field is required.',
                'alpha' => 'Lastname must not have numbers.'
            ]
        ],
        'firstname' => [
            'label'  => 'Firstname',
            'rules'  => 'required|alpha',
            'errors' => [
                'required' => 'Firstname field is required.',
                'alpha' => 'Lastname must not have numbers.'
            ]
        ],
        'username' => [
            'label'  => 'Username',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Username field is required.'
            ]
        ],
        'email' => [
            'label'  => 'Email',
            'rules'  => 'required|valid_email',
            'errors' => [
                'required' => 'Email field is required.',
                'valid_email' => 'You must provide a valid email address.'
            ]
        ],

        'password_retype' => [
            'label'  => 'Password Retype',
            'rules'  => 'matches[password]',
            'errors' => [
                'required' => 'Password field is required.',
                'matches' => 'Password Retype field must match password.'
            ]
        ],

        'birthdate' => [
            'label'  => 'Birthdate',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Birthdate field is required.'
            ]
        ],
        'role_id' => [
            'label'  => 'Role',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Role field is required.'
            ]
        ],

    ];
     public $supplies = [
        'supply_name' => [
            'label'  => 'Supply Name',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Supply Name field is required.'
            ]
        ],

        'description' => [
            'label'  => 'Supply Description',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Supply desciption field is required.'
            ]
        ],

        'unit_of_measure' => [
            'label'  => 'Unit of measurement',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Unit of measurement Page field is required.'
            ]
        ],
        'item_per_unit' => [
            'label'  => 'Item per Unit',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Item per Unit Page field is required.'
            ]
        ],
        'unit_on_stocks' => [
            'label'  => 'Unit on Stocks',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Unit on Stocks Page field is required.'
            ]
        ],
        'reorder_level' => [
            'label'  => 'Reorder Level',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Reorder Level Page field is required.'
            ]
        ],

			];

				public $diseases = [
		        'dn_name' => [
		            'label'  => 'Name',
		            'rules'  => 'required',
		            'errors' => [
		                'required' => 'Name field is required.',

		            ]
		        ],
		        'description' => [
		            'label'  => 'Description ',
		            'rules'  => 'required',
		            'errors' => [
		                'required' => 'Description field is required.',

		            ]
		        ],
				];

		public $dental_condition = [
        'legend' => [
            'label'  => 'Legend',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Legend field is required.'
            ]
        ],

				// 'condition_name' => [
        //     'label'  => 'Condition Name',
        //     'rules'  => 'required',
        //     'errors' => [
        //         'required' => 'Condition Name field is required.'
        //     ]
        // ],
				//
        // 'description' => [
        //     'label'  => 'Description',
        //     'rules'  => 'required',
        //     'errors' => [
        //         'required' => 'Desciption field is required.'
        //     ]
        // ],

    ];

		// public $dentists = [
    //     'last_name' => [
    //         'label'  => 'Lastname',
    //         'rules'  => 'required|alpha',
    //         'errors' => [
    //             'required' => 'Last Name field is required.'
    //         ]
    //     ],
		// 	];
		//
		// public $patient = [
    //     'last_name' => [
    //         'label'  => 'Lastname',
    //         'rules'  => 'required',
    //         'errors' => [
    //             'required' => 'Lastname field is required.'
		// 						[
		// 			],
		//
    //     'first_name' => [
    //         'label'  => 'Firstname',
    //         'rules'  => 'required',
    //         'errors' => [
    //             'required' => 'Firstname field is required.'
    //         ]
    //     ],
		//
    //     'middle_name' => [
    //         'label'  => 'Middlename',
    //         'rules'  => 'required',
    //         'errors' => [
    //             'required' => 'Middlename field is required.'
    //         ]
    //     ],
		//
		// 		'birthdate' => [
    //         'label'  => 'Birthdate',
    //         'rules'  => 'required',
    //         'errors' => [
    //             'required' => 'Birthdate field is required.'
    //         ]
    //     ],
		//
		// 		'gender' => [
    //         'label'  => 'Gender',
    //         'rules'  => 'required',
    //         'errors' => [
    //             'required' => 'Gender field is required.'
    //         ]
    //     ],
		//
		// 		'occupation' => [
    //         'label'  => 'Occupation',
    //         'rules'  => 'required',
    //         'errors' => [
    //             'required' => 'Occupation field is required.'
    //         ]
    //     ],
		//
		// 		'religion' => [
    //         'label'  => 'Religion',
    //         'rules'  => 'required',
    //         'errors' => [
    //             'required' => 'Religion field is required.'
    //         ]
    //     ],
		//
		// 		'nationality' => [
    //         'label'  => 'Nationality',
    //         'rules'  => 'required',
    //         'errors' => [
    //             'required' => 'Nationality field is required.'
    //         ]
    //     ],
		//
		// 		'contact_number' => [
    //         'label'  => 'Contact Number',
    //         'rules'  => 'required',
    //         'errors' => [
    //             'required' => 'Contact Number field is required.'
		// 		'licence_number' => [
    //         'label'  => 'Licence Number',
    //         'rules'  => 'required|numeric',
    //         'errors' => [
    //             'required' => 'Licence Number field is required.'
    //         ]
    //     ],
		//
		// 		'address' => [
    //         'label'  => 'Address',
    //         'rules'  => 'required',
    //         'errors' => [
    //             'required' => 'Address field is required.'
    //         ]
    //     ],
		//
		// 		'email' => [
    //         'label'  => 'Email Address',
    //         'rules'  => 'required',
    //         'errors' => [
    //             'required' => 'Email Address field is required.'
    //         ]
    //     ],
		//
		// 		'dental_insurance' => [
    //         'label'  => 'Dental Insurance',
    //         'rules'  => 'required',
    //         'errors' => [
    //             'required' => 'Dental Insurance field is required.'
    //         ]
    //     ],
		//
		// 		'guardian_name' => [
    //         'label'  => 'Guardian Name',
    //         'rules'  => 'required',
    //         'errors' => [
    //             'required' => 'Guardian Name field is required.'
    //         ]
    //     ],
		//
		// 		'guardian_relation' => [
    //         'label'  => 'Guardian Relation',
    //         'rules'  => 'required',
    //         'errors' => [
    //             'required' => 'Guardian Relation field is required.'
    //         ]
    //     ],
		//
		// 		'previous_dentist' => [
    //         'label'  => 'Previous Dentist',
    //         'rules'  => 'required',
    //         'errors' => [
    //             'required' => 'Previous Dentist field is required.'
    //         ]
    //     ],
		//
		// 		'last_dental_visit' => [
    //         'label'  => 'Last Dental Visit',
    //         'rules'  => 'required',
    //         'errors' => [
    //             'required' => 'Last Dental Visit field is required.'
    //         ]
    //     ],
		// 	];

    public $medicine  	 = [
        'medicine_name' => [
            'label'  => 'Medicine Name',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Medicine Name field is required.'
            ]
        ],
        'generic_name' => [
            'label'  => 'Generic Name',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Generic Name field is required.'
            ]
        ],
           'description' => [
            'label'  => 'Description',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Description field is required.'
            ]
        ],
           'unit_of_measure' => [
            'label'  => 'Unit of measure',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Unit of measure field is required.'
            ]
        ],
           'item_per_unit' => [
            'label'  => 'Item for unit',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Item per unit field is required.'
            ]
        ],
           'unit_on_stocks' => [
            'label'  => 'Unit on stocks',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Unit on stocks field is required.'
            ]
        ],
           'reorder_level' => [
            'label'  => 'Reorder level',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Reorder level field is required.'
            ]
        ],
			];

		public $medicine_stock = [

				'brand_name' => [
            'label'  => 'Brand Name',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Brand Name field is required.'
            ]
        ],

        'date_purchased' => [
            'label'  => 'Date Purchased',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Date Purchased field is required.'
            ]
        ],

        'total_unit_purchased' => [
            'label'  => 'Total Unit Purchased',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Total Unit Purchased field is required.'
            ]
        ],

				'total_item_used' => [
            'label'  => 'Total Item Used',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Total Item Used field is required.'
            ]
        ],

				'unit_on_stock' => [
            'label'  => 'Unit on Stock',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Unit on Stock field is required.'
            ]
        ],

				'expiration_date' => [
            'label'  => 'Expiration Date',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Expiration Date field is required.'
            ]
        ],

    ];

		public $stocks = [
				'supply_name' => [
						'label'  => 'Supply Name',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Supply Name field is required.'
						]
				],
				'brand_name' => [
						'label'  => 'Brand Name',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Brand Name field is required.'
						]
				],
				'description' => [
						'label'  => 'Description',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Description field is required.'
						]
				],
				'date_purchased' => [
						'label'  => 'Date Purchased',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Date Purchased field is required.'
						]
				],
				'total_unit_purchased' => [
						'label'  => 'Total Unit Purchased',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Total unit Purchased field is required.'
						]
				],
				'total_item_used' => [
						'label'  => 'Total Item Used',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Total Item Used field is required.'
						]
				],
				'unit_on_stocks' => [
						'label'  => 'Unit on Stocks',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Unit on Stocks field is required.'
						]
				],
				'expiration_date' => [
						'label'  => 'Expiration Date',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Expiration Date field is required.'
						]
				],

			];

		public $medical = [
							'patient_id' => [
									'label'  => 'Patient Name',
									'rules'  => 'required|min_length[1]',
									'errors' => [
											'required' => 'Patient Name field is required.',
											'min_length' => 'Patient Name field is required'
									]
							],

							'is_healthy' => [
			            'label'  => 'Healthy',
			            'rules'  => 'required',
			            'errors' => [
			                'required' => 'This field requires an answer.'
			            ]
			        ],

							'is_taking_medicine_now' => [
									'label'  => 'Taking Medicine Now',
									'rules'  => 'required',
									'errors' => [
											'required' => 'This field requires an answer.'
									]
							],

							'med_taken_now' => [
									'label'  => 'Taken Medicine Now',
									'rules'  => 'required',
									'errors' => [
											'required' => 'This field requires an answer.'
									]
							],

							'had_illness_operation' => [
									'label'  => 'Illness Operation',
									'rules'  => 'required',
									'errors' => [
											'required' => 'This field requires an answer.'
									]
							],

							'illness_operation' => [
									'label'  => 'Operation Illness',
									'rules'  => 'required',
									'errors' => [
											'required' => 'This field requires an answer.'
									]
							],

							'is_hospitalized' => [
									'label'  => 'Hospitalized',
									'rules'  => 'required',
									'errors' => [
											'required' => 'This field requires an answer.'
									]
							],

							'hospitalized_details' => [
									'label'  => 'Hospitalized Details',
									'rules'  => 'required',
									'errors' => [
											'required' => 'This field requires an answer.'
									]
							],

							'is_taking_sprescription' => [
									'label'  => 'Taking Prescription',
									'rules'  => 'required',
									'errors' => [
											'required' => 'This field requires an answer.'
									]
							],

							'nprescription_details' => [
									'label'  => 'Prescription Details',
									'rules'  => 'required',
									'errors' => [
											'required' => 'This field requires an answer.'
									]
							],

							'is_pregnant' => [
									'label'  => 'Pregnant',
									'rules'  => 'required',
									'errors' => [
											'required' => 'This field requires an answer.'
									]
							],

							'patient_alergies' => [
									'label'  => 'Patient Allergies',
									'rules'  => 'required',
									'errors' => [
											'required' => 'This field requires an answer.'
									]
							],

							'patient_medical_diseases' => [
									'label'  => 'Patient Medical Diseases',
									'rules'  => 'required',
									'errors' => [
											'required' => 'This field requires an answer.'
									]
							],
		];

    public $procedure = [
        'procedure_name' => [
            'label'  => ' Dental Procedure Name',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Dental Procedure field is required.'
            ]
        ],

         // 'price' => [
         //     'label'  => 'Procedure Price',
         //     'rules'  => 'required',
         //     'errors' => [
         //         'required' => 'Price field is required.'
         //     ]
         // ],
				 //
         // 'description' => [
         //     'label'  => 'Dental Procedure Description',
         //     'rules'  => 'required',
         //     'errors' => [
         //         'required' => 'Dental Procedure field is required.'
         //     ]
         // ],

				'gender' => [
						'label'  => 'Gender',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Gender field is required.'
						]
				],

				'contact_number' => [
						'label'  => 'Contact Number',
						'rules'  => 'required|numeric|regex_match[/^[0-9]{11}$/]',
						'errors' => [
								'required' => 'Contact Number field is required.'
						]
				],

    ];

		public $payments = [
        'consultation_id' => [
            'label'  => 'Consulatation ID',
            'rules'  => 'required|numeric',
            'errors' => [
                'required' => 'Consulatation ID field is required.',
								'numeric' => 'Consulatation ID are numbers only.'
            ]
        ],

        'payment_date' => [
            'label'  => 'Payment Date',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Payment Date field is required.'
            ]
        ],

        'paid_amount' => [
            'label'  => 'Paid Amount',
            'rules'  => 'required|numeric',
            'errors' => [
                'required' => 'Paid Amount field is required.',
								'numeric' => 'Paid Amount are numbers only.'
            ]
        ],

				'recieved_by' => [
            'label'  => 'Recieved By',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Recieved By field is required.',
            ]
        ],


        'description' => [
            'label'  => 'Medicine Description',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Medicine description field is required.'
            ]
        ],
    ];

		public $schedules = [
        'patient_id' => [
            'label'  => 'Patient',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Patient field is required.'
            ]
        ],

        'target_date_start' => [
            'label'  => 'Target Date Start',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Target Date Start field is required.'
            ]
        ],

        'target_date_end' => [
            'label'  => 'Target Date End',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Target Date End field is required.'
            ]
        ],

        'venue' => [
            'label'  => 'Venue',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Venue field is required.'
            ]
        ],

        'dentist_id' => [
            'label'  => 'Dentist',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Dentist field is required.'
            ]
        ],

        'consultation_sched' => [
            'label'  => 'Consultation Schedules',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Consultation Schedules field is required.'
            ]
        ],


        'is_approved' => [
            'label'  => 'Approved by',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Approved by field is required.'
            ]
        ],
    ];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}
