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

//    function getWaterSupportMonsters(): array
//    {
//
//
//        $url = "https://summonerswar.fandom.com/wiki/Water_Monsters#5-Star";
//
//
//        $html = file_get_contents($url);
//
//
//        $crawler = new Crawler($html);
//
//
//        $supportMonsters = [];
//
//
//        $crawler->filter('.mw-redirect')->each(function (Crawler $node) use (&$supportMonsters) {
//                $type = trim($node->filter('.headerSort')->text());
//
//
//        if ($type === 'Support') {
//
//
//            $name = trim($node->text());
//
//
//            $supportMonsters[] = $name;
//            }
//        });
//
//        return $supportMonsters;
//}




}



