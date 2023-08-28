<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProdutosFixture
 */
class ProdutosFixture extends TestFixture
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
                'nome_produtos' => 'Lorem ipsum dolor sit amet',
                'categorias_produto_id' => 1,
                'created' => '2023-08-25 22:57:42',
                'modified' => '2023-08-25 22:57:42',
            ],
        ];
        parent::init();
    }
}
