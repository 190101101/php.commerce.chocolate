<?php 

return (object) [
    /*success*/
    'success' => 'Success of the operation',
    'created' => 'successfully created',
    'updated' => 'created successfully',
    'deleted' => 'deleted successfully',
    'confirmed' => 'confirmed successfully',
    'refused' => 'refused successfully',

    /*language*/
    'language' => 'language successfully changed to English',
    'language_fail' => 'such language does not exist or there is an error in the server',

    /*fail*/
    'fail' => 'not successful',
    'valitron' => 'fields must be filled in correctly',

    'status_success' => 'status updated successfully',
    'status_error' => 'failed to update status',
    
    /*clear*/
    'clear_success' => 'image cleared successfully',
    'clear_error' => 'clear failed',
    
    /*delete*/
    'delete_success' => ' deleted successfully',
    'delete_error' => 'failed to delete',

    /*permit*/
    'permit_status' => 'You dont have permission. update data on this number',
    'permit_search' => 'you only need to search through the search form',

    /*form*/
    'form_empty_field' => 'need to fill out all form fields!',

    /*comment*/
    'comment_creat' => 'comment added successfully',

    /*vote*/
    'vote' => 'thanks for the vote',

    /*create*/
    'upload' => 'files uploaded successfully',

    /*search*/
    'not_found' => 'not found',
    'not_found_anythink' => 'nothing found',
    'not_found_search' => 'nothing found',

    /*product*/
    'product_not_found' => 'product not found',
    'product_stock_few' => 'This quantity is not in stock',

    /*cart*/
    'cart_already_confirmed' => 'the order has already been confirmed by the administrator, the product cannot be added to the cart',
    'cart_already' => 'the product already exists in the cart or order sheet',
    'cart_updated' => 'Product Quantity Changed Successfully',
    'cart_added' => 'product added to cart successfully',
    'cart_deleted' => 'product removed from cart successfully',
    'cart_drop' => 'cart empty',
    'cart_limit' => 'cart limit exceeded',
    'cart_stock_few' => 'This quantity is not in stock',
    'cart_order_not_found' => 'There are no products in the cart for this order',
    'cannot_be_added' => 'You must be logged in to add a product to your shopping cart.',
    'cannot_after_confirm' => 'once the order is confirmed, you can not change the cart',
    'cart_stock_update' => 'there was a problem, there is not enough products in stock so your cart has been changed to the number of products as much as there is in stock',    
    'cart_active_not_found' => 'There are no active products in the cart for this order',

    /*profile*/
    'password_not_match' => 'passwords dont match each other',


    /*order*/
    'order_already' => 'you have already confirmed your order.. please wait for feedback',
    'order_need_confirm' => 'first confirm the order then to the checkout',
    'order_confirmed' => 'you have confirmed the users order',
    'order_cancel' => 'Cant cancel order after confirmation',
    'order_not_found' => 'the order does not exist',
    'orders_payment' => 'cannot add product to cart because you have already paid for your order, please wait for delivery.',

    /*sign*//*user*/
    'logined' => 'Oh, is that you? welcome...',
    'signout' => 'is it all?',
    'registered' => 'you have successfully registered - and logged into your account',
    'user_not_found' => 'such user does not exist, the username or password may not be correct',
    'user_already' => 'user with such login, email or phone number exists',
    'sign_up_in' => 'you have successfully registered and logged into your account',

    /*token* code encode/decode*/
    'old_token' => 'old token',
    'diff_token' => 'problem with CSRF',
    'time_over' => 'time out',
    'ssl_attack' => 'youre like a hacker right?',

    /*file error*/
    'type_error' => 'the file is empty or the type is not correct',
    'empty_error' => 'the file is empty or the type is not correct',
    'allow_error' => 'the file is empty or the type is not correct',
    'size_error' => 'file size is too large',

    /*post*/
    'already' => ' already exists under this name! ',
    'spam' => ' wait 10 seconds to exit the spam block... if you keep spamming. you will be blocked forever',

    /*error*/
    'error_db' => 'something went wrong in the server.. check back later',
    'error_http' => 'you need to go through the sites step by step',
    'error' => 'something needs to be changed in the form or in the server something went wrong...',
    'errors' => 'something went wrong in the server...',
];