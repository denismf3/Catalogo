<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\ProdutoResource;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();

        return ProdutoResource::collection($produtos);
    }
}
