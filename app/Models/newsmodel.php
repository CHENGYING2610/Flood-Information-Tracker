<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\Helper;
use Illuminate\Support\Arr;

class newsmodel extends Model
{
    use HasFactory;

    // /**
    //  * @param $newsSource
    //  * @return mixed
    //  * @throws \GuzzleHttp\Exception\GuzzleException
    //  */
    // public function fetchNewsFromSource($newsSource)
    // {
    //     $urlParams = 'top-headlines?sources=' . $newsSource;
    //     $response = (new Helper)->makeApiCalls($urlParams);
    //     return Arr::get($response,'articles');
    // }
    // /**
    //  * @return mixed
    //  * @throws \GuzzleHttp\Exception\GuzzleException
    //  */
    // public function getAllSources()
    // {
    //     $urlParams = 'sources?';
    //     $response = (new Helper)->makeApiCalls($urlParams);
    //     return Arr::get($response,'sources');
    // }

    // public function fetchAllNews()
    // {
    //     $urlParams = 'everything?q=news';
    //     $response = (new Helper)->makeApiCalls($urlParams);

    //     return Arr::get($response,'articles');

    // }

}
