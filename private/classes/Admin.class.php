<?php
class Admin extends DatabaseObject
{
    protected static $table_name = "admins";
    protected static $db_columns = ['id', 'first_name', 'last_name', 'phone', 'email', 'role', 'gender', 'address', 'hashed_password', 'active', 'terms', 'created_at', 'updated_at', 'deleted'];

    public $id;
    public $first_name;
    public $last_name;
    public $phone;
    public $email;
    public $role;
    public $gender;
    public $address;
    public $hashed_password;
    public $active;
    public $terms;
    public $created_at;
    public $updated_at;
    public $deleted;

    public $password;
    public $confirm_password;
    protected $password_required = true;

    public $admin_level;
    public $counts;

    const ADMIN_LEVEL = [
        1 => 'Super Admin',
        2 => 'Customer',
    ];

    public function __construct($args = [])
    {
        $this->first_name = $args['first_name'] ?? '';
        $this->last_name = $args['last_name'] ?? '';
        $this->phone = $args['phone'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->role = $args['role'] ?? '';
        $this->gender = $args['gender'] ?? '';
        $this->address = $args['address'] ?? '';
        $this->active = $args['active'] ?? '';
        $this->terms = $args['terms'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->confirm_password = $args['confirm_password'] ?? '';
        $this->updated_at = $args['updated_at'] ?? date('Y-m-d H:i:s');
        $this->created_at = $args['created_at'] ?? date('Y-m-d H:i:s');
        $this->deleted = $args['deleted'] ?? '';
    }

    public function full_name()
    {
        return $this->first_name . " " . $this->last_name;
    }


    protected function set_hashed_password()
    {
        $this->hashed_password = password_hash($this->password, PASSWORD_BCRYPT);
    }

    public function verify_password($password)
    {
        return password_verify($password, $this->hashed_password);
    }

    protected function create()
    {
        $this->set_hashed_password();
        return parent::create();
    }

    protected function update()
    {
        if ($this->password != '') {
            $this->set_hashed_password();
        } else {
            $this->password_required = false;
        }
        return parent::update();
    }

    protected function validate()
    {
        $this->errors = [];

        if (is_blank($this->terms)) {
            $this->errors[] = "Kindly agree to our terns and conditions.";
        }
        if (is_blank($this->first_name)) {
            $this->errors[] = "First name cannot be blank.";
        } elseif (!has_length($this->first_name, array('min' => 2, 'max' => 50))) {
            $this->errors[] = "First name must be between 2 and 50 characters.";
        }

        if (is_blank($this->last_name)) {
            $this->errors[] = "Last name cannot be blank.";
        } elseif (!has_length($this->last_name, array('min' => 2, 'max' => 50))) {
            $this->errors[] = "Last name must be between 2 and 50 characters.";
        }

        if (is_blank($this->email)) {
            $this->errors[] = "Email cannot be blank.";
        } elseif (!has_length($this->email, array('max' => 50))) {
            $this->errors[] = "Last name must be less than 50 characters.";
        } elseif (!has_valid_email_format($this->email)) {
            $this->errors[] = "Email must be a valid format.";
        } elseif (!has_unique_email_admin($this->email, $this->id ?? 0)) {
            $this->errors[] = "Email already exist. Try another.";
        }

        if ($this->password_required) {
            if (is_blank($this->password)) {
                $this->errors[] = "Password cannot be blank.";
            } elseif (!has_length($this->password, array('min' => 8))) {
                $this->errors[] = "Password must contain 8 or more characters";
            }

            if (is_blank($this->confirm_password)) {
                $this->errors[] = "Confirm password cannot be blank.";
            } elseif ($this->password !== $this->confirm_password) {
                $this->errors[] = "Password and confirm password must match.";
            }
        }

        return $this->errors;
    }

    public static function find_by_email($email)
    {
        $sql = "SELECT * FROM " . static::$table_name . " ";
        $sql .= "WHERE email='" . self::$database->escape_string($email) . "'";
        $obj_array = static::find_by_sql($sql);
        if (!empty($obj_array)) {
            return array_shift($obj_array);
        } else {
            return false;
        }
    }
}
