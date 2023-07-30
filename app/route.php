<?php
// Define your SEO-friendly routes and their corresponding pages
$routes = array(
    '/' => 'Home Page',
    '/about' => 'About Us Page',
    '/contact' => 'Contact Us Page',
    '/products/(\d+)' => 'Product Page',
);

// Get the requested URL
$request_uri = $_SERVER['REQUEST_URI'];

// Find a matching route
$matched_route = null;
foreach ($routes as $route => $page) {
    if (preg_match('#^' . $route . '$#', $request_uri, $matches)) {
        $matched_route = $route;
        break;
    }
}

// If a matching route is found, extract the page title or product ID
if ($matched_route) {
    $title_or_id = isset($matches[1]) ? $matches[1] : '';
    // You can do anything you want with each page or product
    // For example, you can include a template file, query data from a database, etc.
    echo "<h1>{$routes[$matched_route]}</h1>";
    if ($title_or_id) {
        echo "ID or Title: " . $title_or_id;
    }
} else {
    // Handle non-existing routes (404 page)
    http_response_code(404);
    echo "<h1>Page not found</h1>";
}
