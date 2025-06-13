<?php

function getLatestRepos(string $username, int $limit = 6): array
{
    $url = "https://api.github.com/users/{$username}/repos?sort=updated";

    $options = [
        'http' => [
            'header' => [
                'User-Agent: HydePHP',
            ],
        ],
    ];

    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);

    if ($response === false) {
        return [];
    }

    $repos = json_decode($response, true);

    if (!is_array($repos)) {
        return [];
    }

    return array_slice($repos, 0, $limit);
}
