<?php
class Wallet extends DatabaseObject
{
  static protected $table_name = "wallets";
  static protected $db_columns = ['id', 'customer_id', 'ref_no', 'balance', 'created_at', 'update_at', 'deleted'];

  public $id;
  public $customer_id;
  public $ref_no;
  public $balance;
  public $approved_by;
  public $created_at;
  public $update_at;
  public $deleted;

  const MOD = [
    1 => 'Wallet Account',
    2 => 'Card Transaction'
  ];

  public function __construct($args = [])
  {
    $this->customer_id = $args['customer_id'] ?? '';
    $this->ref_no = $args['ref_no'] ?? '';
    $this->balance = $args['balance'] ?? '';
    $this->approved_by = $args['approved_by'] ?? '';
    $this->updated_at = $args['update_at'] ?? date('Y-m-d H:i:s');
    $this->created_at = $args['created_at'] ?? date('Y-m-d H:i:s');
  }

  // protected function validate()
  // {
  //   $this->errors = [];

  //   if (is_blank($this->name)) {
  //     $this->errors[] = "Name may not be empty.";
  //   }
  //   return $this->errors;
  // }

  static public function find_all_wallet()
  {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "ORDER BY id DESC ";
    return static::find_by_sql($sql);
  }

  static public function find_by_customer_id($c_id)
  {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE customer_id='" . self::$database->escape_string($c_id) . "'";
    $obj_array = static::find_by_sql($sql);
    if (!empty($obj_array)) {
      return array_shift($obj_array);
    } else {
      return false;
    }
  }
}
