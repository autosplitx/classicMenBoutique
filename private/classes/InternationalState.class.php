<?php

class InternationalState extends DatabaseObject
{
    protected static $table_name = "international_states";
    protected static $db_columns = ['id', 'name', 'country_id', 'country_code', 'fips_code', 'iso2', 'latitude', 'longitude', 'created_at', 'updated_at', 'flag', 'wikiDataId'];


    public $id;
    public $name;
    public $country_id;
    public $country_code;
    public $fips_code;
    public $iso2;
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
        $this->country_id = $args['country_id'] ?? '';
        $this->country_code = $args['country_code'] ?? '';
        $this->fips_code = $args['fips_code'] ?? '';
        $this->iso2 = $args['iso2'] ?? '';
        $this->latitude = $args['latitude'] ?? '';
        $this->longitude = $args['longitude'] ?? '';
        $this->created_at = $args['created_at'] ?? '';
        $this->updated_at = $args['updated_at'] ?? '';
        $this->flag = $args['flag'] ?? '';
        $this->wikiDataId = $args['wikiDataId'] ?? '';
    }

    public static function find_all_states()
    {
        $sql = "SELECT * FROM " . static::$table_name . " ";
        $sql .= "ORDER BY name ASC ";
        return static::find_by_sql($sql);
    }

    public static function get_all_states_via_country_id($countryId)
    {
        $sql = "SELECT * FROM " . static::$table_name . " ";
        $sql .= "WHERE country_id='" . self::$database->escape_string($countryId) . "'";
        $sql .= "ORDER BY name ASC ";
        return static::find_by_sql($sql);
    }
}
