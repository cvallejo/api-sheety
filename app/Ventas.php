<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Sushi\Sushi;

class Ventas extends Model
{
    use Sushi;

    public function getRows()
    {
        return Http::withToken(env('API_TOKEN'))->get(env('URL_API'));
    }
}
