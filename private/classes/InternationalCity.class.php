<?php

class InternationalCity extends DatabaseObject
{
    protected static $table_name = "international_cities";
    protected static $db_columns = ['id', 'name', 'state_id', 'state_code', 'country_id', 'country_code', 'latitude', 'longitude', 'created_at', 'updated_at', 'flag', 'wikiDataId'];

    public $id;
    public $name;
    public $state_id;
    public $state_code;
    public $country_id;
    public $country_code;
    public $latitude;
    public $longitude;
    public $created_at;
    public $updated_at;
    public $flag;
    public $wikiDataId;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? '';
        $this->name = $args['name'] ?? '';
        $this->state_id = $args['state_id'] ?? '';
        $this->state_code = $args['state_code'] ?? '';
        $this->country_id = $args['country_id'] ?? '';
        $this->country_code = $args['country_code'] ?? '';
        $this->latitude = $args['latitude'] ?? '';
        $this->longitude = $args['longitude'] ?? '';
        $this->created_at = $args['created_at'] ?? '';
        $this->updated_at = $args['updated_at'] ?? '';
        $this->flag = $args['flag'] ?? '';
        $this->wikiDataId = $args['wikiDataId'] ?? '';
    }

    public static function find_all_cities()
    {
        $sql = "SELECT * FROM " . static::$table_name . " ";
        $sql .= "ORDER BY name ASC ";
        return static::find_by_sql($sql);
    }

    public static function get_all_cities_via_state_id($stateId)
    {
        $sql = "SELECT * FROM " . static::$table_name . " ";
        $sql .= "WHERE state_id='" . self::$database->escape_string($stateId) . "'";
        return static::find_by_sql($sql);
    }

    public static function get_all_countries_via_country_id($countryId)
    {
        $sql = "SELECT * FROM " . static::$table_name . " ";
        $sql .= "WHERE country_id='" . self::$database->escape_string($countryId) . "'";
        return static::find_by_sql($sql);
    }
}
