<?php

class Prices extends DatabaseObject
{

  static protected $table_name = "prices";
  static protected $db_columns = ['id', 'name', 'amount', 'fixed_rate', 'weight', 'state_id', 'region_id', 'deleted'];

  public $id;
  public $name;
  public $amount;
  public $fixed_rate;
  public $weight;
  public $state_id;
  public $region_id;
  public $deleted;


  public function __construct($args = [])
  {
    $this->name = $args['name'] ?? '';
    $this->amount = $args['amount'] ?? '';
    $this->fixed_rate = $args['fixed_rate'] ?? '';
    $this->weight = $args['weight'] ?? '';
    $this->state_id = $args['state_id'] ?? '';
    $this->region_id = $args['region_id'] ?? '';
    $this->deleted = $args['deleted'] ?? '';
  }

  protected function validate()
  {
    $this->errors = [];

    if (is_blank($this->name)) {
      $this->errors[] = "Range cannot be blank.";
    } elseif (!has_length($this->name, array('min' => 2, 'max' => 255))) {
      $this->errors[] = "Range must be between 2 and 255 characters.";
    }

    if (is_blank($this->amount)) {
      $this->errors[] = "Price cannot be blank.";
    }

    if (is_blank($this->weight)) {
      $this->errors[] = "Weight cannot be blank.";
    }

    return $this->errors;
  }

  static public function find_by_amount($options = [])
  {

    $region_id = $options['region_id'] ?? false;
    $weight = $options['weight'] ?? false;
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE (deleted IS NULL OR deleted = 0 OR deleted = '') ";

    if ($region_id) {
      $sql .= " AND `region_id` ='" . self::$database->escape_string($region_id) . "'";
    }

    if ($weight) {
      if ($weight <= 0.5) {
        $sql .= " AND `weight` BETWEEN " . 0 . " AND " . 0.5 . " ";
      } elseif ($weight <= 3) {
        $sql .= " AND `weight` BETWEEN " . 0.6 . " AND " . 3 . " ";
      } elseif ($weight <= 5) {
        $sql .= " AND `weight` BETWEEN " . 3.1 . " AND " . 5 . " ";
      } elseif ($weight <= 10) {
        $sql .= " AND `weight` BETWEEN " . 5.1 . " AND " . 10 . " ";
      } else {
        $sql .= " AND `weight` = 10 ";
      }
    }

    // echo $sql;
    $obj_array = static::find_by_sql($sql);
    if (!empty($obj_array)) {
      return array_shift($obj_array);
    } else {
      return false;
    }
  }

  static public function get_region_id($region_id)
  {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE region_id='" . self::$database->escape_string($region_id) . "'";
    $obj_array = static::find_by_sql($sql);
    if (!empty($obj_array)) {
      $result = array_shift($obj_array);
      return $result;
    } else {
      return false;
    }
  }

  static public function find_all_region()
  {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "ORDER BY id ASC ";
    return static::find_by_sql($sql);
  }
}
