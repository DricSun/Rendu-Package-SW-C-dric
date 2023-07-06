<?php

use Cedric\OssTd2\Monster;
use PHPUnit\Framework\TestCase;

class MonsterTest extends TestCase
{
    public function testGetMonster()
    {
        $api = new Monster();

        $this->assertIsArray($api->getAllWatersMonsters());

        $this->assertNotEmpty($api->getAllWatersMonsters());
    }

    public function testGetMonsterByName()
    {

        $api = new Monster();

        $monsterName = 'Bolverk';

        $monster = $api->getMonsterByName($monsterName);

        $this->assertEquals($monsterName , $monster);
    }

}
