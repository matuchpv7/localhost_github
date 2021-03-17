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
            <a class="nav1" href="/pracownicy/pracownicy.php">Pracownicy</a>
            <a class="nav1" href="/pracownicy/pracownicyiorganizacja.php">Pracownicy i Organizacja</a>
            <a class="nav1 active" href="/pracownicy/funkcjeagregujace.php">Funkcje Agregujące</a>
                    <div class="orga1">
            <a class="nav3" href="/pracownicy/funkcjeagregujace.php">Funkcje</a>
            <a class="nav3" href="/pracownicy/funkcjeagregujace.php">Group By</a>
            <a class="nav3" href="/pracownicy/funkcjeagregujace.php">Having By</a>
            <a class="nav3" href="/pracownicy/funkcjeagregujace.php">Data i Czas</a>
                    </div>
                </nav>
                <div class="pracow">
                    <h2 class="h2gl">Funkcje</h2>
                <h2 class="h2za">SELECT sum(zarobki) as es FROM pracownicy</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select sum(zarobki) as es from pracownicy");
                echo("<table border=1>");
                    echo("<th>Sum(zarobki)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["es"]."</td>");
                            echo("</tr>");}
                echo("</table>");
        ?>         
                <h2 class="h2za">SELECT sum(zarobki) as es FROM pracownicy WHERE imie like '%a'</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select sum(zarobki) as es from pracownicy WHERE imie like '%a'");
                echo("<table border=1>");
                    echo("<th>Sum(zarobki)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["es"]."</td>");
                            echo("</tr>");}
                echo("</table>");
        ?>
           <h2 class="h2za">SELECT sum(zarobki) as es FROM pracownicy</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select sum(zarobki) as es from pracownicy WHERE imie not like '%a' AND (dzial=2 or dzial=3)");
                echo("<table border=1>");
                    echo("<th>Sum(zarobki)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["es"]."</td>");
                            echo("</tr>");}
                echo("</table>");
        ?>
        <h2 class="h2za">SELECT AVG(zarobki) as es FROM pracownicy WHERE imie not like '%a'</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select avg(zarobki) as es from pracownicy WHERE imie not like '%a'");
                echo("<table border=1>");
                    echo("<th>Avg(zarobki)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["es"]."</td>");
                            echo("</tr>");}
                echo("</table>");
        ?>
        <h2 class="h2za">SELECT AVG(zarobki) as es FROM pracownicy WHERE dzial=4</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select avg(zarobki) as es from pracownicy WHERE dzial=4");
                echo("<table border=1>");
                    echo("<th>Avg(zarobki)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["es"]."</td>");
                            echo("</tr>");}
                echo("</table>");
        ?> 
        <h2 class="h2za">SELECT AVG(zarobki) as es FROM pracownicy WHERE imie not like '%a' AND (dzial=1 or dzial=2)</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("SELECT AVG(zarobki) as es FROM pracownicy WHERE imie not like '%a' AND (dzial=1 or dzial=2)");
                echo("<table border=1>");
                    echo("<th>Avg(zarobki)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["es"]."</td>");
                            echo("</tr>");}
                echo("</table>");
        ?>
        <h2 class="h2za">SELECT count(imie) as es FROM pracownicy</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("SELECT count(imie) as es FROM pracownicy");
                echo("<table border=1>");
                    echo("<th>count(imie)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["es"]."</td>");
                            echo("</tr>");}
                echo("</table>");
        ?>
        <h2 class="h2za">SELECT count(imie) as es FROM pracownicy WHERE imie LIKE '%a' AND (dzial=1 or dzial=3)</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("SELECT count(imie) as es FROM pracownicy WHERE imie LIKE '%a' AND (dzial=1 or dzial=3)");
                echo("<table border=1>");
                    echo("<th>count(imie)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["es"]."</td>");
                            echo("</tr>");}
                echo("</table>");
        ?>                    
             <h2 class="h2gl">GROUP BY</h2>
        <h2 class="h2za">SELECT sum(zarobki),nazwa_dzial as es FROM pracownicy,organizacja WHERE dzial=id_org GROUP BY dzial</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("SELECT sum(zarobki),nazwa_dzial as es FROM pracownicy,organizacja WHERE dzial=id_org GROUP BY dzial");
                echo("<table border=1>");
                    echo("<th>sum(zarobki)</th>");
                    echo("<th>nazwa_dzial</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["es"]."</td><td>".$row["nazwa_dzial"]."</td>");
                            echo("</tr>");
                        }
                echo("</table>");
        ?>
                <h2 class="h2za">Select sum.(zarobki) as sz from pracownicy group by dzial</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select sum(zarobki) as sz from pracownicy group by dzial");
                echo("<table border=1>");
                    echo("<th>sum(zarobki)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["sz"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
            <h2 class="h2za">Select count(imie) as ci from pracownicy group by dzial</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select count(imie) as ci from pracownicy group by dzial");
                echo("<table border=1>");
                    echo("<th>count(imie)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["ci"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
            <h2 class="h2za">Select avg(zarobki) as az from pracownicy group by dzial</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select avg(zarobki) as az from pracownicy group by dzial");
                echo("<table border=1>");
                    echo("<th>avg(zarobki)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["az"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
            <h2 class="h2za">Select sum(zarobki) as sz from pracownicy group by imie not like '%a'</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select sum(zarobki) as sz from pracownicy group by imie not like '%a'");
                echo("<table border=1>");
                    echo("<th>sum(zarobki)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["sz"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
            <h2 class="h2za">Select avg(zarobki) as az from pracownicy group by imie not like '%a'</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select avg(zarobki) as az from pracownicy group by imie not like '%a'");
                echo("<table border=1>");
                    echo("<th>avg(zarobki)</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["az"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
           <h2 class="h2gl">HAVING BY</h2>
            <h2 class="h2za">Select sum(zarobki) as sz, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by nazwa_dzial having sum(zarobki)<28</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select sum(zarobki) as sz, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by nazwa_dzial having sum(zarobki)<28");
                echo("<table border=1>");
                    echo("<th>sum(zarobki)</th>");
                    echo("<th>nazwa_dzial</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["sz"]."</td><td>".$row["nazwa_dzial"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
            <h2 class="h2za">Select avg(zarobki) as az, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by nazwa_dzial having avg(zarobki)>30</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select avg(zarobki) as az, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by nazwa_dzial having avg(zarobki)>30");
                echo("<table border=1>");
                    echo("<th>avg(zarobki)</th>");
                    echo("<th>nazwa_dzial</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["az"]."</td><td>".$row["nazwa_dzial"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
            <h2 class="h2za">Select count(imie) as ci, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by nazwa_dzial having avg(zarobki)>2</h2>
        <?php
                require_once("../assets/connect.php");
                $result=$conn->query("Select count(imie) as ci, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by nazwa_dzial having avg(zarobki)>2");
                echo("<table border=1>");
                    echo("<th>count(imie)</th>");
                    echo("<th>nazwa_dzial</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["ci"]."</td><td>".$row["nazwa_dzial"]."</td>");
                            echo("</tr>");}
                echo("</table>");
            ?>
               </div>
             <footer>PHP-SQL-Wprowadzenie-Matuszek Tomasz</footer>
           </div>
      </body>
</html>
