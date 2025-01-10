<?php

use Dat\Product\Models\Products;


Route::get('/api/dataProducts', function () {
    $data = Products::all();
    return $data;
});


Route::post('/api/dataProducts/{id}', function (Request $request, $id) {
    $data = Products::where('id', $id)->first();
    if ($data) {
        return response()->json(['data' => $data, 'status' => 1]);
    } else {
        return response()->json(['data' => 'No data', 'status' => 0]);
    }
});
