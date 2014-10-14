<?php namespace Mascame\Artificer\Plugins\Plupload;

use Mascame\Artificer\Plugin\Plugin;
use Event;
use Route;


class PluploadPlugin extends Plugin {


	public function meta()
	{
		$this->version = '1.0';
		$this->name = 'Plupload';
		$this->description = 'Plupload widget and field for uploading images';
		$this->author = 'Marc Mascarell';
		$this->routes = array();
	}

	public function boot()
	{
		// Todo: find a way to do sth like this
		Event::listen('artificer.routes.model', function() {
			Route::post('{slug}/{id}/upload', array('as' => 'admin.model.upload', 'uses' => 'Mascame\Artificer\Plugins\Plupload\PluploadController@plupload'));
		});
	}

}