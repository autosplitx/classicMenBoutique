<?php
class WalletDetail extends Wallet
{
  static protected $table_name = "wallet_details";
  static protected $db_columns = ['id', 'ref_no', 'wallet_credit', 'wallet_debit', 'approved_by', 'created_at', 'update_at', 'deleted'];

  public $id;
  public $ref_no;
  public $wallet_credit;
  public $wallet_debit;
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
    $this->wallet_credit = $args['wallet_credit'] ?? '';
    $this->wallet_debit = $args['wallet_debit'] ?? '';
    $this->approved_by = $args['approved_by'] ?? '';
    $this->updated_at = $args['update_at'] ?? date('Y-m-d H:i:s');
    $this->created_at = $args['created_at'] ?? date('Y-m-d H:i:s');
  }

  protected function validate()
  {
    $this->errors = [];

    // if (is_blank($this->name)) {
    //   $this->errors[] = "Name may not be empty.";
    // }
    // if (is_blank($this->mode_of_payment)) {
    //   $this->errors[] = "Kindly Select a mode of payment.";
    // }
    return $this->errors;
  }

  static public function find_all_wallet()
  {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "ORDER BY id DESC ";
    return static::find_by_sql($sql);
  }

  static public function find_by_ref_no($refNo)
  {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE ref_no='" . self::$database->escape_string($refNo) . "'";
    $obj_array = static::find_by_sql($sql);
    if (!empty($obj_array)) {
      return array_shift($obj_array);
    } else {
      return false;
    }
  }
}
