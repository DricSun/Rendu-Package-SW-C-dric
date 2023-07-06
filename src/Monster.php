<?php

declare(strict_types=1);

namespace Cedric\OssTd2;

use Symfony\Component\DomCrawler\Crawler;



class Monster
{

    function getAllWatersMonsters(): array
    {
        $url = "https://summonerswar.fandom.com/wiki/Water_Monsters#5-Star";
        $html = file_get_contents($url);
        $crawler = new Crawler($html);
        $monsters = [];

        $crawler->filter('.mw-redirect')->each(function (Crawler $node) use (&$monsters) {
            $name = trim($node->text());
            $monsters[] = $name;
        });

        return $monsters;
    }


    function getMonsterByName(string $monsterName): ?string
    {
        $monsters = $this->getAllWatersMonsters();

        foreach ($monsters as $monster) {
            if (strcasecmp($monsterName, $monster) === 0) {
                return $monster;
            }
        }

        return null;
    }




}



