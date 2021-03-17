<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
<header>
<?php
$conn=new mysqli("db","root","root","tom");
$result=$conn->query('Select * from pracownicy');
    echo("<h1>Wszyscy pracownicy:</h1>");
    echo("<table border=1>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data urodzenia</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                echo("</tr>");    
            }
        echo("</table>");
        echo("<h1>Godzina i data</h1>");
        $d=strtotime("now");
            echo"<li>".date("Y-m-d h:i:sa",$d)."<br>";
    ?>
#        

    </header>
    </body>
    </html>
