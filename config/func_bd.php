<?php
function db_select(string $from,string $columns = '*',string $conditions = null ,string $order = null )
{
  $db = DB::connect();

  $query = "SELECT {$columns} FROM {$from}";
  $query .= $conditions ? " WHERE {$conditions}" : '';
  $query .= $order ? " ORDER BY {$order}" : '' ;

  $query = $db->prepare($query);
  $query->execute();

  return $query->fetchAll();
}

function db_find(string $from, string $id)
{
    $db = DB::connect();
    $query = "SELECT * FROM {$from} WHERE id = :id " ;

    $query = $db->prepare($query);

    $query->bindParam("id",$id,PDO::PARAM_INT);

    $query->execute();

    return $query->fetch();
}
