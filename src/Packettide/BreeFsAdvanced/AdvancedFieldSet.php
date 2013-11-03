<?php namespace Packettide\BreeFsAdvanced;

use Packettide\Bree\FieldSet;

class AdvancedFieldSet extends FieldSet {

	public $name = 'advanced';

	protected static $assets = array(
			'packettide/bree-fs-advanced/jquery.min.js',
			'packettide/bree-fs-advanced/handlebars.js'
		);

}