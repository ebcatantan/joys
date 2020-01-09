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

		public $patient = [
        'last_name' => [
            'label'  => 'Lastname',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Lastname field is required.'
            ]
        ],

        'first_name' => [
            'label'  => 'Firstname',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Firstname field is required.'
            ]
        ],

        'middle_name' => [
            'label'  => 'Middlename',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Middlename field is required.'
            ]
        ],

				'birthdate' => [
            'label'  => 'Birthdate',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Birthdate field is required.'
            ]
        ],

				'gender' => [
            'label'  => 'Gender',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Gender field is required.'
            ]
        ],

				'occupation' => [
            'label'  => 'Occupation',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Occupation field is required.'
            ]
        ],

				'religion' => [
            'label'  => 'Religion',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Religion field is required.'
            ]
        ],

				'nationality' => [
            'label'  => 'Nationality',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Nationality field is required.'
            ]
        ],

				'contact_number' => [
            'label'  => 'Contact Number',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Contact Number field is required.'
            ]
        ],

				'address' => [
            'label'  => 'Address',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Address field is required.'
            ]
        ],

				'email' => [
            'label'  => 'Email Address',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Email Address field is required.'
            ]
        ],

				'dental_insurance' => [
            'label'  => 'Dental Insurance',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Dental Insurance field is required.'
            ]
        ],

				'guardian_name' => [
            'label'  => 'Guardian Name',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Guardian Name field is required.'
            ]
        ],

				'guardian_relation' => [
            'label'  => 'Guardian Relation',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Guardian Relation field is required.'
            ]
        ],

				'previous_dentist' => [
            'label'  => 'Previous Dentist',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Previous Dentist field is required.'
            ]
        ],

				'last_dental_visit' => [
            'label'  => 'Last Dental Visit',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Last Dental Visit field is required.'
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

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}
