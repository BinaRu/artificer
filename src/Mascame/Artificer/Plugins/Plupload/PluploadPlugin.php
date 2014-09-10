<?php namespace Mascame\Artificer\Plugins\Plupload;

use Mascame\Artificer\Plugin;


class PluploadPlugin extends Plugin {


	public function __construct($namespace, $model = null)
	{
		parent::__construct($namespace, __DIR__);

		$this->version = '1.0';
		$this->name = 'Plupload';
		$this->description = 'Plupload widget and field for uploading images';
		$this->author = 'Marc Mascarell';
		$this->options = array();
	}

}