<?php

namespace Cedric\OssTd2;

class Scraper
{
    public function __construct(
        private HttpClientInterface $client,
    )
    {
    }

    public function fetchGitHubInformation(): array
    {
        $response = $this->client->request(
            'GET',
            'https://summonerswar.fandom.com/wiki/Water_Monsters#5-Star'
        );

        $statusCode = $response->getStatusCode();
        // $statusCode = 200
        $contentType = $response->getHeaders()['content-type'][0];
        // $contentType = 'application/json'
        $content = $response->getContent();
        // $content = '{"id":521583, "name":"symfony-docs", ...}'
        $content = $response->toArray();
        // $content = ['id' => 521583, 'name' => 'symfony-docs', ...]

        return $content;
    }
}