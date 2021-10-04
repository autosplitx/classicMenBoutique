<?php
class FileUpload extends DatabaseObject
{
  static protected $table_name = "admin_upload";
  static protected $db_columns = ['id', 'admin_id', 'avatar', 'created_at', 'deleted'];

  public $id;
  public $admin_id;
  public $avatar;
  public $created_at;
  public $deleted;

  public function __construct($args = [])
  {
    $this->admin_id = $args['admin_id'] ?? '';
    $this->avatar = $args['avatar'] ?? '';
    $this->created_at = $args['created_at'] ?? date('Y-m-d H:i:s');
    $this->deleted = $args['deleted'] ?? '';
  }

  protected function validate()
  {
    $this->errors = [];

    if (is_blank($this->avatar)) {
      $this->errors[] = "Profile image is required.";
    }

    return $this->errors;
  }

  static public function find_by_user($admin_id)
  {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE admin_id='" . self::$database->escape_string($admin_id) . "'";
    $obj_array = static::find_by_sql($sql);
    if (!empty($obj_array)) {
      return array_shift($obj_array);
    } else {
      return false;
    }
  }
}
