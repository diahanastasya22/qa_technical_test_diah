<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();
        $transformedProducts = $products->map(function ($product) {
            return [
                'id' => $product->id,
                'productID' => $product->product_id,
                'productName' => $product->product_name,
                'amount' => $product->amount,
                'customerName' => $product->customer_name,
                'status' => (int) $product->status,
                'transactionDate' => $product->transaction_date,
                'createBy' => $product->created_by,
                'createOn' => $product->created_on,
            ];
        });

        $statusMapping = [
            ['id' => 0, 'name' => 'SUCCESS'],
            ['id' => 1, 'name' => 'FAILED']
        ];

        return response()->json([
            'data' => $transformedProducts,
            'status' => $statusMapping
        ]);
    }
}
