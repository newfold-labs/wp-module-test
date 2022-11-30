<?php

use NewfoldLabs\WP\ModuleLoader\Container;
use function NewfoldLabs\WP\ModuleLoader\register;

if ( function_exists( 'add_action' ) ) {

	add_action(
		'plugins_loaded',
		function () {

			register(
				[
					'name'     => 'test',
					'label'    => __( 'Test', 'newfold-test-module' ),
					'callback' => function ( Container $container ) {
						new Test( $container );
					},
					'isActive' => false,
					'isHidden' => true,
				]
			);

		}
	);

}
