<?php


class Movies
{
    private ?string $apikey = null;

    public function __construct(string $apikey)
    {
        $this->apikey = $apikey;
    }

    public function getMovies(string $movieName)
    {
        return $this->callAPI('Search/', $movieName);
    }

    public function getPopularMovies()
    {
        return $this->callAPI('MostPopularMovies/');
    }

    public function callAPI(string $typeChearch, string $movieName = null)
    {
        $url = 'https://imdb-api.com/it/API/' . $typeChearch . $this->apikey;
        if ($movieName === null) {
            $url .= '/' . $movieName;
        }

        $curl = curl_init($url);

        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 5,
            CURLOPT_SSL_VERIFYPEER => 1
        ]);

        $response = curl_exec($curl);

        if (!$response || curl_getinfo($curl, CURLINFO_HTTP_CODE) !== 200) {
            curl_close($curl);
            throw new Exception($response);
        }
        curl_close($curl);
        return json_decode($response, true);
    }
}