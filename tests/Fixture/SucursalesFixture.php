<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SucursalesFixture
 */
class SucursalesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'biginteger', 'length' => null, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'direccion' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'comment' => '', 'precision' => null],
        'telefono' => ['type' => 'string', 'length' => 12, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'comment' => '', 'precision' => null],
        'departamento_id' => ['type' => 'biginteger', 'length' => null, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'municipio_id' => ['type' => 'biginteger', 'length' => null, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created_at' => ['type' => 'timestamp', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        'updated_at' => ['type' => 'timestamp', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'sucursales_departamento_id_foreign' => ['type' => 'index', 'columns' => ['departamento_id'], 'length' => []],
            'sucursales_municipio_id_foreign' => ['type' => 'index', 'columns' => ['municipio_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'sucursales_municipio_id_foreign' => ['type' => 'foreign', 'columns' => ['municipio_id'], 'references' => ['municipios', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'sucursales_departamento_id_foreign' => ['type' => 'foreign', 'columns' => ['departamento_id'], 'references' => ['departamentos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_unicode_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'direccion' => 'Lorem ipsum dolor sit amet',
                'telefono' => 'Lorem ipsu',
                'departamento_id' => 1,
                'municipio_id' => 1,
                'created_at' => 1606282335,
                'updated_at' => 1606282335,
            ],
        ];
        parent::init();
    }
}
