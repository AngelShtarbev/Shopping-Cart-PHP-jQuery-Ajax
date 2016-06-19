<?php
//Autoload function
session_start(); // start session
function __autoload($classname) {
    require (__DIR__.'/system/'.$classname.'.php');
}
?>

<?php

//Add products to session
if(isset($_POST['product_code'])) {

    foreach($_POST as $key => $value){
        $new_product[$key] = filter_var($value, FILTER_SANITIZE_STRING); //create a new product array
    }

    $productsCollection = new ProductsCollection();
    $products = $productsCollection->getProductPriceName($_POST['product_code']);

    $new_product['product_name'] = $products[0]->getProductName();
    $new_product['product_price'] = $products[0]->getProductPrice();

        if(isset($_SESSION['products'])){  //if session var already exist

            if(isset($_SESSION['products'][$new_product['product_code']])) //check item exist in products array
            {
                unset($_SESSION['products'][$new_product['product_code']]); //unset old item
            }
        }

        $_SESSION['products'][$new_product['product_code']] = $new_product;	//update products with new item array

    $total_items = count($_SESSION['products']); //count total items
    die(json_encode(array('items'=>$total_items))); //output json

}

//List Products in cart
if(isset($_POST['load_cart']) && $_POST['load_cart'] == 1)
{

    if(isset($_SESSION['products']) && count($_SESSION['products'])>0){ //if we have session variable
        $cart_box = '<ul class="cart-products-loaded">';
        $total = 0;
        foreach($_SESSION['products'] as $product){ //loop though items and prepare html content

            //set variables to use them in HTML content below
            $product_name = $product['product_name'];
            $product_price = $product['product_price'];
            $product_code = $product['product_code'];
            $product_quantity = $product['product_quantity'];
            $product_genre = $product['product_genre'];

            $cart_box .=  "<li> $product_name (Qty : $product_quantity | $product_genre ) &mdash; ".sprintf("%01.2f", ($product_price * $product_quantity)). " <a href=\"#\" class=\"remove-item\" data-code=\"$product_code\">&times;</a></li>";
            $subtotal = ($product_price * $product_quantity);
            $total = ($total + $subtotal);
        }
        $cart_box .= "</ul>";
        $cart_box .= '<div class="cart-products-total">Total : '.sprintf("%01.2f",$total).'<a href="view_cart.php" class="alert-link" title="Review Cart and Check-Out">&nbsp;Check-out</a></div>';
        die($cart_box); //exit and output content
    }else{
        die("Your Cart is empty"); //we have empty cart
    }
}

//Remove item from shopping cart
if(isset($_GET['remove_code']) && isset($_SESSION['products']))
{
    $product_code   = filter_var($_GET['remove_code'], FILTER_SANITIZE_STRING); //get the product code to remove

    if(isset($_SESSION['products'][$product_code]))
    {
        unset($_SESSION['products'][$product_code]);
    }

    $total_items = count($_SESSION['products']);
    die(json_encode(array('items'=>$total_items)));
}
