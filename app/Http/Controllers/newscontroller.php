<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\newsmodel;
use Illuminate\Support\Facades\Cache;
use NewsAPI;
// $accessKey = '95cf811ec3d74c99bd88867e27799459';

// $endpoint = 'https://api.bing.microsoft.com/v7.0/news/search';

// $term = 'Microsoft';

class newscontroller extends Controller
{
    function index(){
        $response = NewsAPI::everything()->get([
            //'language' => 'en',
            //'sources'=> 'bbc-co-uk',
            //'domains'=> 'google-news,the-times-of-india',
            'from' => '2022-09-01',
            'to' => '2022-09-21',
            'sortBy' => 'publishedAt',
            'q'=>'malaysia banjir'
        ]);
        // $response = NewsAPI::topHeadlines()->get([
        //     'country' => 'my',
        //     'category'=>'general',
        //     //'q'=>'banjir'
        // ]);
        // $data = $response->articles;
        // $data = json_decode($response);
        // var_dump($response->articles[2]->title);
        // var_dump($response->articles[2]);
        // $array = json_decode(json_encode($response), true);
        //echo gettype($response);
        return view ('/news',['response'=>$response]);
    }





//     function BingNewsSearch ($url, $key, $query) {
//     // Prepare HTTP request
//     // NOTE: Use the key 'http' even if you are making an HTTPS request. See:
//     // https://php.net/manual/en/function.stream-context-create.php
//         $headers = "Ocp-Apim-Subscription-Key: $key\r\n";
//         $options = array ('http' => array (
//                           'header' => $headers,
//                           'method' => 'GET' ));

//     // Perform the Web request and get the JSON response
//         $context = stream_context_create($options);
//         $result = file_get_contents($url . "?q=" . urlencode($query), false, $context);

//     // Extract Bing HTTP headers
//         $headers = array();
//         foreach ($http_response_header as $k => $v) {
//             $h = explode(":", $v, 2);
//             if (isset($h[1]))
//                 if (preg_match("/^BingAPIs-/", $h[0]) || preg_match("/^X-MSEdge-/", $h[0]))
//                     $headers[trim($h[0])] = trim($h[1]);
//         }

//         print "Searching news for: " . $term . "\n";

//         list($headers, $json) = BingNewsSearch($endpoint, $accessKey, $term);

//         print "\nRelevant Headers:\n\n";
//         foreach ($headers as $k => $v) {
//             print $k . ": " . $v . "\n";
        
//     }
// }

    // 
    // //
    // /**
    //  * @param Request $request
    //  * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    //  */
    // public function displayNews(Request $request)
    // {
    //     $response = $this->determineMethodHandler($request);
    //     $apiModel = new newsmodel();
    //     $response['news'] = $apiModel->fetchNewsFromSource($response['sourceId']);
    //     $response['newsSources'] = $this->fetchAllNewsSources();
    //     return view('news', $response);
    // }
    // /**
    //  * @param $request
    //  * @return mixed
    //  */
    // protected function determineMethodHandler($request)
    // {
    //     if ($request->isMethod('get')) {
    //         $response['sourceName'] = config('app.default_news_source');
    //         $response['sourceId'] = config('app.default_news_source_id');
    //     } else {
    //         $request->validate([
    //             'source' => 'required|string',
    //         ]);
    //         $split_input = explode(':', $request->source);
    //         $response['sourceId'] = trim($split_input[0]);
    //         $response['sourceName'] = trim($split_input[1]);
    //     }
    //     return $response;
    // }
    // /**
    //  * @return mixed
    //  */
    // public function fetchAllNewsSources()
    // {
    //     $response = Cache::remember('allNewsSources', 22 * 60, function () {
    //         $api = new newsmodel;
    //         return $api->fetchAllNews();
    //     });
    //     return $response;
    // }
}
