<?php

declare(strict_types=1);

namespace PierreCours\Librairyawww;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\DomCrawler\Crawler;

class Api
{
    public function getCardsInfos(): array
    {

    $client = HttpClient::create();
    $response = $client->request(
        'GET',
        'https://www.awwwards.com/inspiration_search/?award=nominees&category=startups'
    );

    $content = $response->getContent();

    $crawler = new Crawler($content);

    $crawler = $crawler->filter('.card-site')->each(
        function(Crawler $node): array{
            return [
            "name"=>$node->filter('.avatar-name__title')->text("undefined"),
            "tags"=>$node->filter('.has-tooltip')->each(
                function(Crawler $tag): string{
                    return $tag->text("no tags");
                }
            )
            ];
        }
    );

    return $crawler;

    }
}

