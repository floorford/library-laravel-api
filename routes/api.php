<?php

// use the post method
// when the use request /articles - don't need the forward slash
// which will call the store method of the Articles controller


$router->group(["prefix" => "books"], function ($router) {
  $router->post("", "Books@store");
  $router->delete("{book}", "Books@destroy");
  $router->put("{book}", "Books@update");
  $router->get("", "Books@index");
});
