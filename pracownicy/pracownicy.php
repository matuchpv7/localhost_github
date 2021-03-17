<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Matuszek</title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
        <header>
                <div class="git">
            <h3><a href="https://github.com/SK-2019/PHP-SQL-Wprowadzenie-Matuszek-Tomasz">GITHUB</h3>
                </div>
          <div class="tomek">
           <div class="navigator">
                 <nav>
            <a class="nav1" href="../index.php">Strona główna</a>
            <a class="nav1 active" href="/pracownicy/pracownicy.php">Pracownicy</a>
            <a class="nav1" href="/pracownicy/pracownicyiorganizacja.php">Pracownicy i Organizacja</a>
            <a class="nav1" href="/pracownicy/funkcjeagregujace.php">Funkcje Agregujące</a>
                </nav>
              </div>
               <div class="pracow">
            <h2 class="h2z1">WSZYSCY PRACOWNICY:</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select * From pracownicy");
                echo("<table border=1>");
                    echo("<th>ID</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data_Urodzenia</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>            
           <h2 class="h2za">SELECT * FROM pracownicy WHERE dzial=2</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select * From pracownicy WHERE dzial=2");
                echo("<table border=1>");
                    echo("<th>ID</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data_Urodzenia</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
          <h2 class="h2zb">SELECT * FROM pracownicy WHERE (dzial=2 OR dzial=3)</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("SELECT * FROM pracownicy WHERE (dzial=3 or dzial=2)");
                echo("<table border=1>");
                    echo("<th>ID</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data_Urodzenia</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
            <h2 class="h2zc">SELECT * FROM pracownicy WHERE zarobki<30</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select * From pracownicy WHERE zarobki<30");
                echo("<table border=1>");
                    echo("<th>ID</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data_Urodzenia</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
                </div>
               <footer>PHP-SQL-Wprowadzenie-Matuszek Tomasz</footer>
           </div>
      </body>
</html>
