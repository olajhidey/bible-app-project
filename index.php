<?php
session_start();
include 'db.php';
if (isset($_POST['search'])) {
    
     $books = $_POST['book'];
    $chapter =$_POST['chapter'];
    $verses = $_POST['verses'];
    $query =  "SELECT v verses, t texts  "
            . "FROM t_kjv t "
            . "JOIN key_english k on t.b = k.b "
            . "WHERE k.n = '$books' "
            . "AND t.c = '$chapter'";
    if($verses != ""){
        $query .= " AND t.v >= '$verses'";
    }
    $q = mysqli_query($conn, $query);
       while($result = mysqli_fetch_assoc($q)){
           $resultArray[] = $result;
       }
       die(var_dump($resultArray));
    } 
   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
             <th>Book:</th>
             <td><input type="text" name="book"></td>
             <th> Chapters:</th>
             <td><input type="text" name="chapter"></td>
             <th>verses:</th><td><input type="text" name="verses"></td>
             <td> <input type="submit" name="search" value="search"></td>
            </table>
        </form>
    </body>
</html>
