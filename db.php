<?php
$conn = mysqli_connect("localhost", "root", "", "bible") or die("Error " . mysqli_error($conn));
ini_set('display_errors', 'on');

//$query = "select k.b book_id, n book, max(t.c) chapters 
//from t_kjv t 
//join key_english k on t.b = k.b 
//group by t.b";
//
//$run_query = mysqli_query($conn, $query);
//
//if($run_query) {
//    while ($result = mysqli_fetch_assoc($run_query)) {
//        $resultArray[] = $result;
//    }
////    die(var_dump($resultArray));
//     $results = json_encode($resultArray);
//         die(var_dump($results));
//} else {
//    return "error getting files from db" . mysqli_error($conn);
//}