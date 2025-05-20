<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

class ProductController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/product/get",
     *     summary="Get product detail",
     *     tags={"Product"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="sku",
     *         in="query",
     *         required=true,
     *         description="Product SKU",
     *         @OA\Schema(type="string")
     *     ),
     *   @OA\Response(response=200, description="Success"),
     *   @OA\Response(response=401, description="Unauthorized"),
     *   @OA\Response(response=404, description="Product not found")
     * )
     */
    public function get(Request $request)
    {
        $sku = $request->query('sku');

        if (!$sku) {
            return response()->json(['error' => 'Missing product SKU'], 400);
        }

        // ตัวอย่าง mock data
        return response()->json([
            'sku' => $sku,
            'name' => 'Demo Product',
            'price' => 999.99,
            'description' => 'This is a sample product.',
        ]);
    }
}
