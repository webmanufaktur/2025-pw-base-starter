<?php

namespace ProcessWire;

$wire->addHook('/api/cart/add/', function ($event) {
  // $response = $event->return;
  // $input = $event->wire->input;

  // // Process the cart addition here
  // // For example:
  // $productId = $input->post->int('productId');
  // $quantity = $input->post->int('quantity', 1);

  // // Add your cart logic here

  // $response->setHeader('Content-Type', 'application/json');
  // $response->json([
  //   'success' => true,
  //   'message' => 'Product added to cart',
  //   'productId' => $productId,
  //   'quantity' => $quantity
  // ]);

  return 'asd';
});
