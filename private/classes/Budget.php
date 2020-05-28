<?php

class Budget 
{
    public static function addExpense($desc, $cost, $author)
    {
        global $db; 
        return $db->insert("budget", ['description'=>$desc, 'cost'=>$cost, 'author'=>$author, 'type'=>'expense']);

    }

    public static function addRevenue($desc, $cost, $author)
    {
        global $db; 
        return $db->insert("budget", ['description'=>$desc, 'cost'=>$cost, 'author'=>$author, 'type'=>'revenue']);

    }
}
