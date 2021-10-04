<?php

class InternationalCountry extends DatabaseObject
{
    protected static $table_name = "international_countries";
    protected static $db_columns = ['id', 'name', 'iso3', 'numeric_code', 'iso2', 'phonecode', 'capital', 'currency', 'currency_symbol', 'tld', 'native', 'region', 'subregion', 'timezones', 'translations', 'latitude', 'longitude', 'emoji', 'emojiU', 'created_at', 'updated_at', 'flag', 'wikiDataId'];

    public $id;
    public $name;
    public $iso3;
    public $numeric_code;
    public $iso2;
    public $phonecode;
    public $capital;
    public $currency;
    public $currency_symbol;
    public $tld;
    public $native;
    public $region;
    public $subregion;
    public $timezones;
    public $translations;
    public $latitude;
    public $longitude;
    public $emoji;
    public $emojiU;
    public $created_at;
    public $updated_at;
    public $flag;
    public $wikiDataId;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? '';
        $this->name = $args['name'] ?? '';
        $this->iso3 = $args['iso3'] ?? '';
        $this->numeric_code = $args['numeric_code'] ?? '';
        $this->iso2 = $args['iso2'] ?? '';
        $this->phonecode = $args['phonecode'] ?? '';
        $this->capital = $args['capital'] ?? '';
        $this->currency = $args['currency'] ?? '';
        $this->currency_symbol = $args['currency_symbol'] ?? '';
        $this->tld = $args['tld'] ?? '';
        $this->native = $args['native'] ?? '';
        $this->region = $args['region'] ?? '';
        $this->subregion = $args['subregion'] ?? '';
        $this->timezones = $args['timezones'] ?? '';
        $this->translations = $args['translations'] ?? '';
        $this->latitude = $args['latitude'] ?? '';
        $this->longitude = $args['longitude'] ?? '';
        $this->emoji = $args['emoji'] ?? '';
        $this->emojiU = $args['emojiU'] ?? '';
        $this->created_at = $args['created_at'] ?? '';
        $this->updated_at = $args['updated_at'] ?? '';
        $this->flag = $args['flag'] ?? '';
        $this->wikiDataId = $args['wikiDataId'] ?? '';
    }

    public static function find_all_countries()
    {
        $sql = "SELECT * FROM " . static::$table_name . " ";
        $sql .= "ORDER BY name ASC ";
        return static::find_by_sql($sql);
    }
}
