<?
namespace Model;
use DB;

class Version extends \Model {

    public static function get_version()
    {
        // データベースに対する処理
        $query = DB::query('SELECT version();');
        $rows = $query->execute()->as_array();
	return $rows;
    }
}
