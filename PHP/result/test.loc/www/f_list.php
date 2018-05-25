<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/css.css" type="text/css"
    </head>
    <body>
        <div class="container5">
            <h2 align="center">List of figures </h2>
        <div class="scrolltable">
        <table  class="scrolltable">
            <thead>
            <tr>
            <th>Type</th>
            <th>S</th>
            </tr>
            </thead> 
            <tbody >
            <?php
    $db = new PDO('sqlite:figure.db');
            
            if (!$db) {exit("could not create database or open");}
    $tablesquery = $db->query("SELECT type, S FROM S_figure");
    $tables = $tablesquery->fetch(PDO::FETCH_ASSOC);
    while ($table = $tablesquery->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr><td>". $table['type']."</td><td>".$table['S']."</td></tr>";
    }
?>
            </tbody>
        </table>  
        </div>
            <div >
                   <br>
                        <a class="s_href" href="/index.php" >Home</a>  <br>
                   </div>
        </div>

    </body>
</html>
