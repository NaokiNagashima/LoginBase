<?php
class CreateUsersTable extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'create_Users_table';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
                    'create_table' => array(
                        'users' => array(
                            'id' => array(
                                'type' => 'integer',
                                'null' => false,
                                'default' => null,
                                'key' => 'primary'
                            ),
                            'username' => array(
                                'type' =>'string',
                                'null' => false,
                                'default' => null
                            ),
                            'password' => array(
                                'type' => 'string',
                                'null' => false,
                                'default' => null
                            ),
                            'email' => array(
                                'type' => 'string',
                                'null' => false,
                                'default' => null
                            ),
                            'role' => array(
                                'type' => 'string',
                                'null' => false,
                                'default' => null
                            )
                        )
                    )
		),
		'down' => array(
                    'drop_table' => array(
                        'users'
                    )
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function after($direction) {
		return true;
	}
}
