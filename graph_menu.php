<?php
global $session, $route;
// Initial graph menu item placement
if ($session['admin'] || $route->controller=="graph") {
    $menu["setup"]["l2"]['graph'] = array(
        "name"=>"Graphs",
        "href"=>"graph",
        "order"=>3, 
        "icon"=>"show_chart"
    );
}
// Full level3 sidebar is added via javascript in graph.js

