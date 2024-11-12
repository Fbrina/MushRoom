<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;



class ProductController extends Controller
{
        // Method to display products
        public function index(Request $request)
        {
            $products = Product::all(); // Retrieve all products
    
            if ($request->wantsJson()) {
                // For API requests, return a JSON response
                return response()->json([
                    'success' => true,
                    'data' => $products
                ]);
            }
    
            // For web requests, return a view
            return view('products.index', compact('products'));
        }








        public function store(Request $request)
        {
            try {
                // Validasi request
                $request->validate([
                    'product_name' => 'required',
                    'category' => 'required',
                    'price' => 'required|numeric',
                    'stock' => 'required|numeric',
                    'description' => 'nullable',
                    'file_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
                ]);
        
                // Proses unggah file jika ada
                $filePath = $request->file('file_path')->store('product_images', 'public'); // Tidak perlu pengecekan if karena file_path sudah wajib diupload
        
                // Menyimpan data produk ke database
                $product = Product::create([
                    'product_name' => $request->product_name,
                    'category' => $request->category,
                    'price' => $request->price,
                    'stock' => $request->stock,
                    'description' => $request->description,
                    'file_path' => $filePath,  // file_path tidak null karena sudah diupload
                ]);
        
                // Jika Anda menginginkan response JSON untuk API
                if ($request->wantsJson()) {
                    return response()->json([
                        'message' => 'Product added successfully',
                        'product' => $product
                    ], 201);
                }
        
                // Redirect kembali dengan pesan sukses
                return redirect()->route('products.index')->with('success', 'Product added successfully!');
            } catch (\Exception $e) {
                // Jika terjadi error, kembalikan dengan pesan error
                if ($request->wantsJson()) {
                    return response()->json([
                        'message' => 'Product creation failed',
                        'error' => $e->getMessage()
                    ], 500);
                }
        
                return redirect()->route('products.index')->with('error', 'Product creation failed');
            }
        }
        
        















    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product);
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'description' => 'nullable',
            'file_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    
        // Find product by ID
        $product = Product::findOrFail($id);
    
        // Handle file upload if a new file is uploaded
        if ($request->hasFile('file_path')) {
            // Delete old file from storage
            Storage::disk('public')->delete($product->file_path);
    
            // Upload new file and save the path
            $filePath = $request->file('file_path')->store('product_images', 'public');
        } else {
            // Use existing file path if no new file is uploaded
            $filePath = $product->file_path;
        }
    
        // Update product data
        $product->update([
            'product_name' => $request->product_name,
            'category' => $request->category,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
            'file_path' => $filePath,
        ]);
    

    // Kembali ke halaman produk dengan pesan sukses
    return redirect()->route('products.index')->with('success', 'Product updated successfully.');
}


 






    

    public function destroy($id)
    {
        // Temukan produk berdasarkan ID
        $product = Product::find($id);
    
        // Jika produk ditemukan, hapus produk
        if ($product) {
            $product->delete();
            return response()->json(['success' => 'Product deleted successfully.']);
        }
        else {
            return response()->json(['success' => false, 'error' => 'Product not found']);
        }
        // Jika produk tidak ditemukan, beri pesan error
        // return response()->json(['error' => 'Product not found.'], 404);
    }


}
        
        











