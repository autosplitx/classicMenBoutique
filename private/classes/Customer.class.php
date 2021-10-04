<?php
class Customer extends DatabaseObject
{

  static protected $table_name = "customers";
  static protected $db_columns = ['id', 'first_name', 'last_name', 'country', 'address', 'phone', 'email', 'hashed_password', 'customer_type', 'active', 'created_at', 'update_at', 'created_by', 'deleted'];

  public $id;
  public $first_name;
  public $last_name;
  public $country;
  public $address;
  public $phone;
  public $email;
  protected $hashed_password;
  public $password;
  public $confirm_password;
  protected $password_required = true;

  public $customer_type;
  public $active;
  public $created_at;
  public $update_at;
  public $created_by;
  public $deleted;

  public $counts;

  const CUSTOMER_TYPE = [
    1 => 'Account Customer',
    2 => 'walkin Customer'
  ];

  public function __construct($args = [])
  {
    $this->first_name = $args['first_name'] ?? '';
    $this->last_name = $args['last_name'] ?? '';
    $this->country = $args['country'] ?? '';
    $this->address = $args['address'] ?? '';
    $this->phone = $args['phone'] ?? '';
    $this->email = $args['email'] ?? '';
    $this->password = $args['password'] ?? '';
    $this->confirm_password = $args['confirm_password'] ?? '';
    // $this->hashed_password = $args['hashed_password'] ?? '';
    $this->customer_type = $args['customer_type'] ?? 1;
    $this->active = $args['active'] ?? 1;
    $this->created_by = $args['created_by'] ?? '';
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
      // validate password
    } else {
      // password not being updated, skip hashing and validation
      $this->password_required = false;
    }
    return parent::update();
  }

  protected function validate()
  {
    $this->errors = [];

    if (is_blank($this->first_name)) {
      $this->errors[] = "First name cannot be blank.";
    } elseif (!has_length($this->first_name, array('min' => 3, 'max' => 255))) {
      $this->errors[] = "First name must be between 3 and 255 characters.";
    }

    if (is_blank($this->last_name)) {
      $this->errors[] = "Last name cannot be blank.";
    } elseif (!has_length($this->last_name, array('min' => 3, 'max' => 255))) {
      $this->errors[] = "Last name must be between 3 and 255 characters.";
    }

    if(is_blank($this->country)) {
       $this->errors[] = "Country field required.";
    } 

    // if(is_blank($this->image)) {
    //    $this->errors[] = "Kindly Select a image.";
    // } 

    if (is_blank($this->email)) {
      $this->errors[] = "Email cannot be blank.";
    } elseif (!has_valid_email_format($this->email)) {
      $this->errors[] = "Email must be a valid format.";
    } elseif (!has_unique_email_customer($this->email, $this->id ?? 0)) {
      $this->errors[] = "Email already exist. Try another.";
    }

    if (is_blank($this->phone)) {
      $this->errors[] = "Phone Number cannot be blank.";
    } elseif (!has_unique_customer_phone($this->phone, $this->id ?? 0)) {
      $this->errors[] = "Phone already exist. Try another.";
    }

    if ($this->password_required) {
      if (is_blank($this->password)) {
        $this->errors[] = "Password cannot be blank.";
      }
      // elseif (!has_length($this->password, array('min' => 8))) {
      //   $this->errors[] = "Password must contain 8 or more characters";
      // } elseif (!preg_match('/[A-Z]/', $this->password)) {
      //   $this->errors[] = "Password must contain at least 1 uppercase letter";
      // } elseif (!preg_match('/[a-z]/', $this->password)) {
      //   $this->errors[] = "Password must contain at least 1 lowercase letter";
      // } elseif (!preg_match('/[0-9]/', $this->password)) {
      //   $this->errors[] = "Password must contain at least 1 number";
      // } elseif (!preg_match('/[^A-Za-z0-9\s]/', $this->password)) {
      //   $this->errors[] = "Password must contain at least 1 symbol";
      // }

      if (is_blank($this->confirm_password)) {
        $this->errors[] = "Confirm password cannot be blank.";
      } elseif ($this->password !== $this->confirm_password) {
        $this->errors[] = "Password and confirm password must match.";
      }
    }

    return $this->errors;
  }

  static public function find_by_username($username)
  {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE username='" . self::$database->escape_string($username) . "'";
    $obj_array = static::find_by_sql($sql);
    if (!empty($obj_array)) {
      return array_shift($obj_array);
    } else {
      return false;
    }
  }

  static public function find_by_email($email)
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

  static public function find_by_phone($phone)
  {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE phone='" . self::$database->escape_string($phone) . "'";
    $obj_array = static::find_by_sql($sql);
    if (!empty($obj_array)) {
      return array_shift($obj_array);
    } else {
      return false;
    }
  }

  static public function find_by_customer_type($customer_type)
  {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE customer_type='" . self::$database->escape_string($customer_type) . "'";
    $obj_array = static::find_by_sql($sql);
    return static::find_by_sql($sql);
  }

  static public function find_undeleted()
  {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= " WHERE (deleted IS NULL OR deleted = 0 OR deleted = '') ";
    $sql .= " ORDER BY first_name ";

    return static::find_by_sql($sql);
  }

  static public function find_by_undeleted($options = [])
  {

    $limit = $options['limit'] ?? '';
    $clientcat = $options['clientcat'] ?? false;

    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= " WHERE (deleted IS NULL OR deleted = 0 OR deleted = '') ";

    if ($clientcat == 'account') {
      $sql .= " AND customer_type = '1' ";
    } elseif ($clientcat == 'walkin') {
      $sql .= " AND customer_type = '2' ";
    }

    if ($limit) {
      $sql .= " ORDER BY id DESC LIMIT " . self::$database->escape_string($limit) . "  ";
    } else {
      $sql .= " ORDER BY id DESC ";
    }

    return static::find_by_sql($sql);
  }

  static public function count_by_undeleted($options = [])
  {

    $clientcat = $options['clientcat'] ?? false;

    $sql = "SELECT COUNT(*) FROM " . static::$table_name . " ";
    $sql .= " WHERE (deleted IS NULL OR deleted = 0 OR deleted = '') ";

    if ($clientcat == 'account') {
      $sql .= " AND customer_type = '1' ";
    } elseif ($clientcat == 'walkin') {
      $sql .= " AND customer_type = '2' ";
    }

    $result_set = self::$database->query($sql);
    $row = $result_set->fetch_array();

    return array_shift($row);
  }

  static public function find_by_branch($city)
  {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE city ='" . self::$database->escape_string($city) . "'";
    $obj_array = static::find_by_sql($sql);
    if (!empty($obj_array)) {
      return $obj_array;
    } else {
      return false;
    }
  }
}
