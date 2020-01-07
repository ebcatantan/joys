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

		public $dentists = [
        'last_name' => [
            'label'  => 'Lastname',
            'rules'  => 'required|alpha',
            'errors' => [
                'required' => 'Last Name field is required.'
            ]
        ],

        'first_name' => [
            'label'  => 'Firstname',
            'rules'  => 'required|alpha',
            'errors' => [
                'required' => 'First Name field is required.'
            ]
        ],

        'middle_name' => [
            'label'  => 'Middlename',
            'rules'  => 'required|alpha',
            'errors' => [
                'required' => 'Middle Name field is required.'
            ]
        ],

				'birthdate' => [
            'label'  => 'Birthdate',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Birthdate field is required.'
            ]
        ],

				'licence_number' => [
            'label'  => 'Licence Number',
            'rules'  => 'required|numeric',
            'errors' => [
                'required' => 'Licence Number field is required.'
            ]
        ],

				'address' => [
            'label'  => 'Address',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Address field is required.'
            ]
        ],

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

    ];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}
