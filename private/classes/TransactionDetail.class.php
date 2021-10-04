<?php
class TransactionDetail extends DatabaseObject
{

  static protected $table_name = "transaction_details";
  static protected $db_columns = ['id', 'customer_type', 'waybill_no', 'item_type', 'weight', 'quantity', 'description', 'policy', 'declared_unit_cost', 'declared_total_cost', 'deleted'];




  public $id;
  public $customer_type;
  public $waybill_no;
  public $item_type;
  public $weight;
  public $quantity;
  public $description;
  public $policy;
  public $declared_unit_cost;
  public $declared_total_cost;
  public $deleted;

  const ITEM_TYPE = [
    1  =>  'Books',
    2  =>  'Letters or Documents',
    3  =>  'Computers or Electronics',
    4  =>  'Phones',
    5  =>  'Tablets or Gadget',
    6  =>  'Electrical Appliances',
    7  =>  'Shoes',
    8  =>  'Clothings',
    9  =>  'Hand Bags',
    10 =>  'Kitchen ware',
    11 =>  'Watches, Jewelry & Trinkets',
    12 =>  'Toys',
    13 =>  'Perfume',
    14 =>  'Cosmetics or Makeup',
    15 =>  'Pharmaceuticals',
    16 =>  'Beverages',
    17 =>  'Fees or Additional Charges',
    18 =>  'Other',
  ];

  public function __construct($args = [])
  {
    $this->customer_type = $args['customer_type'] ?? '';
    $this->waybill_no = $args['waybill_no'] ?? '';
    $this->item_type = $args['item_type'] ?? '';
    $this->weight = $args['weight'] ?? '';
    $this->quantity = $args['quantity'] ?? '';
    $this->description = $args['description'] ?? '';
    $this->policy = $args['policy'] ?? '';
    $this->declared_unit_cost = $args['declared_unit_cost'] ?? '';
    $this->declared_total_cost = $args['declared_total_cost'] ?? '';
    $this->deleted = $args['deleted'] ?? NULL;
  }

  protected function validate()
  {
    $this->errors = [];

    // if (is_blank($this->payment_method)) {
    //   $this->errors[] = "Payment method is required.";
    // }


    return $this->errors;
  }

  static public function find_by_waybill($waybill_no)
  {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE waybill_no='" . self::$database->escape_string($waybill_no) . "'";
    $result = static::find_by_sql($sql);
    return $result;
  }
}
