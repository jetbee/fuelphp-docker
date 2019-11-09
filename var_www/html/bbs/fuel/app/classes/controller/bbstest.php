<?php
/**
 * BBS Test Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Bbstest extends Controller
{
	/**
	 * Bbstest Index
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		return Response::forge(View::forge('bbstest/index'));
	}

}
