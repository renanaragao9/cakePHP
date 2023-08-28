<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CategoriasProdutosFixture
 */
class CategoriasProdutosFixture extends TestFixture
{
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
                'bome_categoria' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-08-25 22:56:34',
                'modified' => '2023-08-25 22:56:34',
            ],
        ];
        parent::init();
    }
}
