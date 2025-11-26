<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    /**
     * Display the cart page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $cartItems = Cart::content();
        $subtotal = Cart::subtotal();
        $tax = Cart::tax();
        $total = Cart::total();

        return view('website.cart', compact('cartItems', 'subtotal', 'tax', 'total'));
    }

    /**
     * Add a product to the cart.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $product = Product::findOrFail($request->product_id);

        // Check if product is in stock
        if ($product->stock_qty < $request->quantity) {
            return redirect()->back()->with('error', 'Insufficient stock for this product.');
        }

        // Add to cart
        Cart::add([
            'id' => $product->id,
            'name' => $product->title,
            'qty' => $request->quantity,
            'price' => $product->sale_price ?? $product->price,
            'options' => [
                'slug' => $product->slug,
                'image' => $product->thumbnail,
                'original_price' => $product->price,
                'sale_price' => $product->sale_price,
            ]
        ]);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    /**
     * Update cart item quantity.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request)
    {
        $request->validate([
            'rowId' => 'required|string',
            'quantity' => 'required|integer|min:1'
        ]);

        $rowId = $request->rowId;
        $quantity = $request->quantity;

        // Get the cart item
        $cartItem = Cart::get($rowId);

        if (!$cartItem) {
            return response()->json(['success' => false, 'message' => 'Cart item not found.']);
        }

        // Check stock availability
        $product = Product::find($cartItem->id);
        if ($product && $product->stock_qty < $quantity) {
            return response()->json(['success' => false, 'message' => 'Insufficient stock for this product.']);
        }

        Cart::update($rowId, $quantity);

        return response()->json(['success' => true, 'message' => 'Cart updated successfully!']);
    }

    /**
     * Remove an item from the cart.
     *
     * @param  string  $rowId
     * @return \Illuminate\Http\JsonResponse
     */
    public function remove($rowId)
    {
        Cart::remove($rowId);

        return response()->json(['success' => true, 'message' => 'Item removed from cart!']);
    }

    /**
     * Clear the entire cart.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy()
    {
        Cart::destroy();

        return redirect()->back()->with('success', 'Cart cleared successfully!');
    }

    /**
     * Get cart count for AJAX requests.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function count()
    {
        return response()->json([
            'count' => Cart::count()
        ]);
    }

    /**
     * Get cart subtotal for AJAX requests.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function subtotal()
    {
        return response()->json([
            'subtotal' => Cart::subtotal()
        ]);
    }
}
