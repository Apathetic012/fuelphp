<?php

_env()->register_app('oil', 'Oil');

// Forge and return your Application Package object
return _forge('Package')
	->set_path(__DIR__)
	->set_namespace('Fuel\\Oil')
	->add_class_aliases(array(
		'Classes\\Route\\Oil'  => 'Fuel\\Oil\\Route\\Oil',
	));
