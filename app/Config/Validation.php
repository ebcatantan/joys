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
		public $allergies = [
        'med_name' => [
            'label'  => 'Medicine Name',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Medicine Name field is required.'
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
