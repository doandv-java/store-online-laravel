<?php
declare(strict_types=1);

namespace App\Http\Controllers\Api\V1\Products;

use App\Http\Controllers\Controller;
use Domains\Catalog\Models\Product;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class IndexController extends Controller
{

    public function __invoke(Request $request)
    {
        $products= QueryBuilder::for(
            Product::class
        )->allowedIncludes(
            ['variants']
        )->active()->paginate();
        return response()->json(data:$products,status: 201);
    }
}
