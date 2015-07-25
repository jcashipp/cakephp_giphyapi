<?php
namespace App\Controller;
use Cake\Network\Http\Client as Client;

class SearchController extends AppController
{
    public function initialize()
    {
        $this->api_key = 'dc6zaTOxFJmzC';
    }

    public function index()
    {

    }

    public function results()
    {
        $client = new Client();

        $results = json_decode($client->get('http://api.giphy.com/v1/gifs/search?', ['q' => $this->request->data('search'), 'api_key' => $this->api_key])->body());
        $this->set('results', $results->data);
        $this->set('search_string', $this->request->data('search'));
    }
}