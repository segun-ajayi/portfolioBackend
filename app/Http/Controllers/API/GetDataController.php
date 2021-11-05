<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\DataResource;
use App\Http\Resources\PortfolioCollection;
use App\Models\Introduction;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class GetDataController extends Controller
{
    public function index() {
        return new DataResource(Introduction::first());
    }

    public function sendEmail(Request $request) {
        return json_encode($request->name);
    }
}
