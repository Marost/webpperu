<?php
// you may use any pagination system that you like, including this one, because its independent from the table,
// but i strongly recomend the full version of creativePagerLite because it has lots of options, other types of paginations, much more flexible and it's extremely easy to use.
function getCreativePagerLite($id,$page,$total_items,$items_per_page,$info1=true){

    include_once('creativePagerLite.php');

    $cp=new CreativePager();

    // Data Gathering
    $params['selected_page']    = $page;
    $params['total_items']      = $total_items;
    $params['items_per_page']   = $items_per_page=='all' ? $total_items : $items_per_page;
    $params['url']              = 'javascript: ctPager(\''.$id.'\',\'#NUM_PAGE#\');';

    // Layout Configurations
    $params['id']               = $id.'_pager';
    $params['type']             = 'centered';
    $params['nav_pages']        = 5;
    $params['info1']            = $info1;

    $cp->pager($params);
    $out_pager=$cp->display();

    return $out_pager;
}


// function to check if an array as any value - for the real example and complex example
function filled_array($arr){

    for($i=0; $i<count($arr); $i++){
        if($arr[$i]!='')
            return true;
    }

    return false;

}

?>