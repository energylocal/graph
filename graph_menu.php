<?php
global $session;
// Initial graph menu item placement
if ($session['admin']) {
$menu["setup"]["l2"]['graph'] = array(
    "name"=>"Graphs",
    "href"=>"graph",
    "order"=>3, 
    "icon"=>"show_chart"
);
}
// Full level3 sidebar is added via javascript in graph.js

