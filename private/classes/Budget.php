<?php

class Budget 
{
    public static function addExpense($desc, $cost, $author)
    {
        global $db; 
        return $db->insert("budget", ['description'=>$desc, 'cost'=>$cost, 'author'=>$author, 'type'=>'expense']);

    }

    static function updateRevenue($id, $desc, $cost, $author)
    {
        global $db;
        $data = [
            'description' => $desc,
            'cost' => $cost,
            'author' => $author
        ];
        return $db->update('budget', $data, ['id' => $id]);
    }

    static function updateExpense($id, $desc, $cost, $author)
    {
        global $db;
        $data = [
            'description' => $desc,
            'cost' => $cost,
            'author' => $author
        ];
        return $db->update('budget', $data, ['id' => $id]);
    }

    public static function addRevenue($desc, $cost, $author)
    {
        global $db; 
        return $db->insert("budget", ['description'=>$desc, 'cost'=>$cost, 'author'=>$author, 'type'=>'revenue']);

    }

    static function findBudget($id)
    {
        global $db;
        return $db -> select('budget', [], ['id' => $id ])->aResults[0];


    }

    static function deleteBudget($id)
    {
        global $db;
        return $db->delete('budget', ['id' => $id]);
    }
}
