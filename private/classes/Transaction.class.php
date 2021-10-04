<?php
class Transaction extends DatabaseObject
{
  static protected $table_name = "transactions";
  static protected $db_columns = ['id', 'customer_id', 'customer_type', 'rider_id', 'waybill_no', 'manifest_no', 'courier', 'status', 'priority', 'o_address', 'o_state', 'o_lga', 'o_country', 'd_first_name', 'd_last_name', 'd_phone', 'd_address', 'd_address2', 'd_state', 'postal_code', 'city', 'd_lga', 'd_country', 'weight', 'ReceiverName', 'ReceiverPhone', 'service_type', 'shipment_type', 'rate', 'price', 'distance', 'promo_code', 'discount', 'payment_method', 'payment_category', 'insured', 'insurance', 'delivery_code', 'created_by', 'created_at', 'manifested', 'manifest_date', 'updated_at', 'deleted'];

  public $id;
  public $customer_id;
  public $customer_type;
  public $rider_id;
  public $waybill_no;
  public $manifest_no;
  public $courier;
  public $status;
  public $priority;
  public $o_address;
  public $o_state;
  public $o_lga;
  public $o_country;
  public $d_first_name;
  public $d_last_name;
  public $d_phone;
  public $d_address;
  public $d_address2;
  public $d_state;
  public $postal_code;
  public $city;
  public $d_lga;
  public $d_country;
  public $weight;
  public $ReceiverName;
  public $ReceiverPhone;
  public $service_type;
  public $shipment_type;
  public $rate;
  public $price;
  public $distance;
  public $promo_code;
  public $discount;
  public $payment_method;
  public $payment_category;
  public $insured;
  public $insurance;
  public $delivery_code;
  public $created_by;
  public $created_at;
  public $manifested;
  public $manifest_date;
  public $updated_at;
  public $deleted;

  public $counts;

  const PICKUP_TIME = [
    1 => '8AM - 10AM',
    2 => '10AM - 12PM',
    3 => '12PM - 2PM'
  ];

  const PAYMENT_MODE = [
    1 => 'Wallet Account',
    2 => 'Card Transaction'
  ];

  const PAYMENT_CATEGORY = [
    1 => 'Cash',
    2 => 'Bank',
    3 => 'Credit',
    // 4 => 'Cash Payment'
  ];

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

  const STATUS = [
    0 => 'New',
    1 => 'Accept',
    2 => 'Decline',
    3 => 'Start',
    4 => 'In-progress',
    5 => 'Not Available',
    6 => 'cancelled',
    7 => 'Returned',
    8 => 'Complete Task',
    9 => 'Delivered'
  ];
  const SHIPMENT_TYPE = [
    1 => 'local',
    2 => 'Inter-State',
    3 => 'Cargo',
  ];
  const COURIER = [
    1 => 'AAJ EXPRESS',
    2 => 'DHL',
    3 => 'FEDEX',
    4 => 'GIG EXPRESS',
  ];

  public function __construct($args = [])
  {
    $this->customer_id = $args['customer_id'] ?? '';
    $this->customer_type = $args['customer_type'] ?? '';
    $this->rider_id = $args['rider_id'] ?? '';
    $this->waybill_no = $args['waybill_no'] ?? '';
    $this->manifest_no = $args['manifest_no'] ?? '';
    $this->courier = $args['courier'] ?? '';
    $this->status = $args['status'] ?? 1;
    $this->priority = $args['priority'] ?? 0;
    $this->o_address = $args['o_address'] ?? '';
    $this->o_state = $args['o_state'] ?? '';
    $this->o_lga = $args['o_lga'] ?? '';
    $this->o_country = $args['o_country'] ?? '';
    $this->d_first_name = $args['d_first_name'] ?? '';
    $this->d_last_name = $args['d_last_name'] ?? '';
    $this->d_phone = $args['d_phone'] ?? '';
    $this->d_address = $args['d_address'] ?? '';
    $this->d_address2 = $args['d_address2'] ?? '';
    $this->d_state = $args['d_state'] ?? '';
    $this->postal_code = $args['postal_code'] ?? '';
    $this->city = $args['city'] ?? '';
    $this->d_lga = $args['d_lga'] ?? '';
    $this->d_country = $args['d_country'] ?? '';
    $this->weight = $args['weight'] ?? '';
    $this->ReceiverName = $args['ReceiverName'] ?? '';
    $this->ReceiverPhone = $args['ReceiverPhone'] ?? '';
    $this->service_type = $args['service_type'] ?? '';
    $this->shipment_type = $args['shipment_type'] ?? 1;
    $this->rate = $args['rate'] ?? '';
    $this->price = $args['price'] ?? '';
    $this->distance = $args['distance'] ?? '';
    $this->promo_code = $args['promo_code'] ?? '';
    $this->discount = $args['discount'] ?? '';
    $this->payment_method = $args['payment_method'] ?? '';
    $this->payment_category = $args['payment_category'] ?? 0;
    $this->insured = $args['insured'] ?? 0;
    $this->insurance = $args['insurance'] ?? 0;
    $this->delivery_code = $args['delivery_code'] ?? 0;
    $this->created_by = $args['created_by'] ?? '';
    $this->created_at = $args['created_at'] ?? date('Y-m-d H:i:s');
    $this->manifested = $args['manifested'] ?? 0;
    $this->manifest_date = $args['manifest_date'] ?? date('Y-m-d H:i:s');
    $this->updated_at = $args['updated_at'] ??  date('Y-m-d H:i:s');
    $this->deleted = $args['deleted'] ?? 0;
  }

  public function full_name()
  {
    return $this->d_first_name . " " . $this->d_last_name;
  }


  protected function validate()
  {
    $this->errors = [];

    if (is_blank($this->d_first_name)) {
      $this->errors[] = "Receiver's first name cannot be blank.";
    }
    if (is_blank($this->customer_id)) {
      $this->errors[] = "Client Name is required.";
    }

    if (is_blank($this->d_phone)) {
      $this->errors[] = "Receiver's phone number is required.";
    }

    if (is_blank($this->payment_method)) {
      $this->errors[] = "Payment method is required.";
    }
    // if (is_blank($this->payment_category)) {
    //   $this->errors[] = "Payment category is required.";
    // }

    if (is_blank($this->service_type)) {
      $this->errors[] = "Service Type is required.";
    }
    // if (is_blank($this->delivery_code)) {
    //   $this->errors[] = "Delivery Code is required.";
    // }

    return $this->errors;
  }

  static public function find_all_customer_transactions($customer_id)
  {
    $sql = "SELECT t.id, t.customer_id, t.waybill_no, t.manifest_no, t.weight, t.price, td.item_type, td.weight, td.quantity, td.description, td.declared_total_cost FROM transactions as t, transaction_details as td WHERE t.waybill_no = td.waybill_no";
    $sql .= " AND customer_id='" . self::$database->escape_string($customer_id) . "'";
    $sql .= " ORDER BY id DESC";
    return static::find_by_sql($sql);
  }


  static public function find_by_customer_id($customer_id)
  {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE customer_id='" . self::$database->escape_string($customer_id) . "'";
    $sql .= " ORDER BY id DESC";
    return static::find_by_sql($sql);
  }

  static public function find_by_customer_type($customer_type)
  {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE customer_type='" . self::$database->escape_string($customer_type) . "'";
    $sql .= " AND manifested='" . self::$database->escape_string(0) . "'";
    $sql .= " ORDER BY id DESC";
    $result = static::find_by_sql($sql);
    return $result;
  }

  static public function find_waybill_no($waybill_no)
  {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE waybill_no='" . self::$database->escape_string($waybill_no) . "'";
    $result = static::find_by_sql($sql);
    return $result;
  }

  static public function find_transaction($waybill_no)
  {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE waybill_no='" . self::$database->escape_string($waybill_no) . "'";
    $result = static::find_by_sql($sql);
    return $result;
  }

  static public function find_manifest($manifested, $options = [])
  {
    $mn = $options['noman'] ?? false;
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE manifested='" . self::$database->escape_string($manifested) . "'";
    if (!$mn) {
      $sql .= " GROUP BY manifest_no ORDER BY id DESC ";
    }
    $result = static::find_by_sql($sql);
    return $result;
  }

  static public function find_by_manifest_no($m_no)
  {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE manifest_no='" . self::$database->escape_string($m_no) . "'";
    $result = static::find_by_sql($sql);
    return $result;
  }

  static public function find_single_transaction($customer_id, $waybill_no)
  {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE customer_id='" . self::$database->escape_string($customer_id) . "'";
    $sql .= " AND waybill_no='" . self::$database->escape_string($waybill_no) . "'";
    $obj_array = static::find_by_sql($sql);
    if (!empty($obj_array)) {
      return array_shift($obj_array);
    } else {
      return false;
    }
  }

  static public function find_status_by_rider($id, $from, $to, $status)
  {
    // $status = $options['status'] ?? false;
    // $priority = $options['priority'] ?? false;
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE rider_id ='" . self::$database->escape_string($id) . "'";

    if ($from && $to) {
      if ($from == $to) {
        $sql .= " AND DATE(manifest_date) = '" . self::$database->escape_string($from) . "' ";
      } elseif ($from > $to) {
        $sql .= " AND DATE(manifest_date) BETWEEN '" . self::$database->escape_string($to) . "' AND '" . self::$database->escape_string($from) . "' ";
      } elseif ($from < $to) {
        $sql .= " AND DATE(manifest_date) BETWEEN '" . self::$database->escape_string($from) . "' AND '" . self::$database->escape_string($to) . "' ";
      }
    } elseif ($from && !$to) {
      $sql .= " AND DATE(manifest_date) = '" . self::$database->escape_string($from) . "' ";
    } elseif (!$from && $to) {
      $sql .= " AND DATE(manifest_date) = '" . self::$database->escape_string($to) . "' ";
    }

    if ($status) {
      $sql .= " AND status='" . self::$database->escape_string($status) . "'";
    }
    $sql .= "  AND (deleted IS NULL OR deleted = 0 OR deleted = '') ";
    $sql .= " ORDER BY id dESC ";
    // echo $sql;
    $obj_array = static::find_by_sql($sql);

    return $obj_array;
  }

  static public function find_by_status($options = [])
  {
    $status = $options['status'] ?? false;
    $priority = $options['priority'] ?? false;
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE (deleted IS NULL OR deleted = 0 OR deleted = '') ";

    if ($status == 1) {
      $sql .= " AND status='" . self::$database->escape_string($status) . "'";
    } elseif ($status == 2) {
      $sql .= " AND status='" . self::$database->escape_string($status) . "'";
    } elseif ($status == 3) {
      $sql .= " AND status='" . self::$database->escape_string($status) . "'";
    } elseif ($status == 4) {
      $sql .= " AND status='" . self::$database->escape_string($status) . "'";
    } elseif ($status == 5) {
      $sql .= " AND status='" . self::$database->escape_string($status) . "'";
    } elseif ($status == 6) {
      $sql .= " AND status='" . self::$database->escape_string($status) . "'";
    }
    $sql .= " ORDER BY id DESC";
    $obj_array = static::find_by_sql($sql);

    return $obj_array;
  }

  static public function find_cust_trans($c_id)
  {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= " WHERE (deleted IS NULL OR deleted = 0 OR deleted = '') ";
    $sql .= " AND customer_id='" . self::$database->escape_string($c_id) . "'";
    $sql .= " ORDER BY id DESC";
    return static::find_by_sql($sql);
  }

  static public function assign_shipment($id)
  {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE rider_id ='" . self::$database->escape_string($id) . "'";
    $sql .= " AND (deleted IS NULL OR deleted = 0 OR deleted = '') ";
    $sql .= " ORDER BY id dESC ";
    // echo $sql;
    return static::find_by_sql($sql);
  }

  static public function find_assign_shipment($id, $getdate)
  {

    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE rider_id ='" . self::$database->escape_string($id) . "'";
    $sql .= " AND (deleted IS NULL OR deleted = 0 OR deleted = '') ";
    $sql .= " AND manifest_date LIKE '%$getdate%' ";
    $sql .= " ORDER BY id dESC ";
    echo $sql;
    return static::find_by_sql($sql);
  }

  static public function find_assigned_by_date($id, $from, $to)
  {
    // $from = $options['from'] ?? false;
    // $to = $options['to'] ?? false;

    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE rider_id ='" . self::$database->escape_string($id) . "'";

    if ($from && $to) {
      if ($from == $to) {
        $sql .= " AND DATE(manifest_date) = '" . self::$database->escape_string($from) . "' ";
      } elseif ($from > $to) {
        $sql .= " AND DATE(manifest_date) BETWEEN '" . self::$database->escape_string($to) . "' AND '" . self::$database->escape_string($from) . "' ";
      } elseif ($from < $to) {
        $sql .= " AND DATE(manifest_date) BETWEEN '" . self::$database->escape_string($from) . "' AND '" . self::$database->escape_string($to) . "' ";
      }
    } elseif ($from && !$to) {
      $sql .= " AND DATE(manifest_date) = '" . self::$database->escape_string($from) . "' ";
    } elseif (!$from && $to) {
      $sql .= " AND DATE(manifest_date) = '" . self::$database->escape_string($to) . "' ";
    }
    $sql .= "  AND (deleted IS NULL OR deleted = 0 OR deleted = '') ";
    $sql .= " ORDER BY id dESC ";
    // echo $sql;
    $obj_array = static::find_by_sql($sql);

    return $obj_array;
  }

  public static function sales($options = [])
  {
    $admin_id = $options['admin_id'] ?? false;
    $customer_id = $options['customer_id'] ?? false;
    // $customer_cat = $options['customer_cat'] ?? false;
    $from = $options['from'] ?? false;
    $to = $options['to'] ?? false;
    $modeOfPayment = $options['modeOfPayment'] ?? false;
    $cash_total = $options['cash_total'] ?? false;
    $states = $options['states'] ?? false;

    if ($cash_total) {

      $sql = "SELECT COUNT(*), SUM(CASE WHEN modeOfPayment = 5 OR codType IN(1,3) THEN `amountPaid` ELSE `total_trans_charge` END) AS total_charges FROM " . static::$table_name . " ";
    } else {
      $sql = "SELECT COUNT(*) AS counts, SUM(`total_trans_charge`) as total_charges FROM " . static::$table_name . " ";
    }

    if ($admin_id) {
      $sql .= "WHERE `createdBy` = " . self::$database->escape_string($admin_id) . " ";
    } elseif ($customer_id) {
      $sql .= "WHERE `clientId` = " . self::$database->escape_string($customer_id) . " ";
      // $sql .= "AND `clientcat` = '" . self::$database->escape_string($customer_cat) . "' ";
    } else {
      $sql .= "WHERE status IN(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16) ";
    }

    //********** this part is for duration*******//
    if ($from && $to) {
      if ($from == $to) {
        $sql .= " AND DATE(timeCreated) = '" . self::$database->escape_string($from) . "' ";
      } elseif ($from > $to) {
        $sql .= " AND DATE(timeCreated) BETWEEN '" . self::$database->escape_string($to) . "' AND '" . self::$database->escape_string($from) . "' ";
      } elseif ($from < $to) {
        $sql .= " AND DATE(timeCreated) BETWEEN '" . self::$database->escape_string($from) . "' AND '" . self::$database->escape_string($to) . "' ";
      }
    } elseif ($from && !$to) {
      $sql .= " AND DATE(timeCreated) = '" . self::$database->escape_string($from) . "' ";
    } elseif (!$from && $to) {
      $sql .= " AND DATE(timeCreated) = '" . self::$database->escape_string($to) . "' ";
    }

    //****** this part is used to separate credit, bank and cash for sales person******/
    if ($modeOfPayment == 'credit') {
      $sql .= "AND `clientcat` = 'credit' ";
    } elseif ($modeOfPayment == 'bank') {
      $sql .= "AND `clientcat` != 'credit' AND modeOfPayment IN(2,3,4) ";
    } elseif ($modeOfPayment === 'cash') {
      $sql .= "AND `clientcat` != 'credit' AND modeOfPayment IN(1,5) ";
    }

    //****** this part is used to remove transaction tagged as customers COD only ******/
    if ($cash_total) {
      $sql .= " AND codType NOT IN(2) ";
    }

    //****** this part is to query sales per state ******/
    if ($states) {
      $sql .= "OR `AssociatedRouteOriginating`  IN('" . self::sanitize_states($states) . "' ) ";
    }

    //****** this part is remove deleted rows from the calculation ******/
    $sql .= "  AND (deleted IS NULL OR deleted = 0 OR deleted = '') ";

    // $sql .= "ORDER BY `transaction`.`id` DESC ";
    // echo $sql;
    $obj_array = static::find_by_sql($sql);
    if (!empty($obj_array)) {
      return array_shift($obj_array);
    } else {
      return false;
    }
  }

  static public function find_sales($options = [])
  {
    $admin_id = $options['admin_id'] ?? false;
    $customer_id = $options['customer_id'] ?? false;
    // $customer_cat = $options['customer_cat'] ?? false;
    $from = $options['from'] ?? false;
    $to = $options['to'] ?? false;
    $payment_method = $options['payment_method'] ?? false;
    $payment_category = $options['payment_category'] ?? false;
    $cash_total = $options['cash_total'] ?? false;
    $states = $options['states'] ?? false;

    $sales_rep = $options['sales_rep'] ?? false;
    $category = $options['category'] ?? false;

    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE created_by ='" . self::$database->escape_string($admin_id) . "'";

    if ($from == $to) {
      $sql .= " AND DATE(created_at) = '" . self::$database->escape_string($from) . "' ";
    } elseif ($from > $to) {
      $sql .= " AND DATE(created_at) BETWEEN '" . self::$database->escape_string($to) . "' AND '" . self::$database->escape_string($from) . "' ";
    } elseif ($from < $to) {
      $sql .= " AND DATE(created_at) BETWEEN '" . self::$database->escape_string($from) . "' AND '" . self::$database->escape_string($to) . "' ";
    }

    if ($category) {
      $sql .= "  AND payment_method='" . self::$database->escape_string($category) . "'";
    }

    $sql .= "  AND (deleted IS NULL OR deleted = 0 OR deleted = '') ";

    // echo $sql;
    $obj_array = static::find_by_sql($sql);

    return $obj_array;
  }

  public static function find_t_request($c_id, $options = [])
  {
    $status = $options['status'] ?? false;
    $payment_method = $options['payment_method'] ?? false;

    $sql = "SELECT COUNT(*) as counts, SUM(price) as price FROM " . static::$table_name . " ";
    $sql .= "WHERE customer_id='" . self::$database->escape_string($c_id) . "'";

    if ($status) {
      $sql .= " AND status='" . self::$database->escape_string($status) . "'";
    }

    if (!empty($payment_method)) {
      $sql .= " AND payment_method='" . self::$database->escape_string($payment_method) . "'";
    }

    $result = static::find_by_sql($sql);
    if (!empty($result)) {
      return array_shift($result);
    } else {
      return false;
    }
  }
}
