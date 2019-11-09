<?php
use \Model\Version;

class Controller_Version extends Controller
{
    public function action_get_version() {
        // モデルから取得したデータを表示
        $data['rows'] = Version::get_version();
	return Response::forge(View::forge('version/get_version',$data));
    }
}
