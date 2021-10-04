<?php
class WalletTransaction extends DatabaseObject
{
  static protected $table_name = "wallet_transactions";
  static protected $db_columns = ['id', 'transaction_id', 'wallet_id', 'policy', 'sender_email', 'sender_name', 'sender_phone', 'receiver_email', 'created_at'];

  public $id;
  public $transaction_id;
  public $wallet_id;
  public $policy;
  public $sender_email;
  public $sender_name;
  public $sender_phone;
  public $receiver_email;
  public $created_at;

  public function __construct($args = [])
  {
    $this->transaction_id = $args['transaction_id'] ?? '';
    $this->wallet_id = $args['wallet_id'] ?? '';
    $this->policy = $args['policy'] ?? '';
    $this->sender_email = $args['sender_email'] ?? '';
    $this->sender_name = $args['sender_name'] ?? '';
    $this->sender_phone = $args['sender_phone'] ?? '';
    $this->receiver_email = $args['receiver_email'] ?? '';
    $this->created_at = $args['created_at'] ?? date('Y-m-d H:i:s');
  }

  static public function find_by_wallet_transaction($transId, $walletId)
  {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE transaction_id='" . self::$database->escape_string($transId) . "'";
    $sql .= "AND wallet_id='" . self::$database->escape_string($walletId) . "'";
    $obj_array = static::find_by_sql($sql);
    if (!empty($obj_array)) {
      return array_shift($obj_array);
    } else {
      return false;
    }
  }
}
