<?php

class InternationaPrices extends Prices
{

  static protected $table_name = "international_prices";
  static protected $db_columns = ['id', 'name', 'amount', 'weight', 'region_id', 'service_type', 'deleted'];

  public $id;
  public $name;
  public $amount;
  public $weight;
  public $region_id;
  public $service_type;
  public $deleted;


  public function __construct($args = [])
  {
    $this->name = $args['name'] ?? '';
    $this->amount = $args['amount'] ?? '';
    $this->weight = $args['weight'] ?? '';
    $this->region_id = $args['region_id'] ?? '';
    $this->service_type = $args['service_type'] ?? '';
    $this->deleted = $args['deleted'] ?? '';
  }
}
