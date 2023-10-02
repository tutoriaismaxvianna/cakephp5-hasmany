<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SocialNetworksFixture
 */
class SocialNetworksFixture extends TestFixture
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
                'user_id' => 1,
                'link' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-10-02 00:25:44',
                'modified' => '2023-10-02 00:25:44',
            ],
        ];
        parent::init();
    }
}
