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
            <a class="nav1 active" href="../index.php">Strona główna</a>
            </div>
            <h2 class="h2tm">Tomasz Matuszek</h2>
              <div class="pracow">
              <?php
        require_once("../assets/connect.php");

        $sql1 = ("SELECT * FROM bibliotekaAutor"); 
        $sql2 = ("SELECT * FROM bibliotekaTytul"); 
        $result=$conn->query($sql1);
        echo("<th><p>WYBIERZ AUTORA:</p></th>");
        echo("<select name='Autor' id='id_autor'>");
        while($row=$result->fetch_assoc()) 
        {
            echo("<option value=".$row['id_autor'].">".$row['Autor']."</option>");
        }
        echo("</select>");
        $result=$conn->query($sql2);
        echo("<label for='Tytuł'><p>WYBIERZ TYTUŁ:</p></label>");
        echo("<select name='Tytuł' id='id_tytuł'>");
        while($row=$result->fetch_assoc())
        {
            echo("<option value=".$row['id_tytuł'].">".$row['Tytuł']."</option>");
        }
        echo("</select>");
        echo("<input type='submit' value='Wypożycz'>'");
        echo("</form>");
          ?>
          <?php
          require_once("../assets/connect.php");
  $sql = ('SELECT * FROM bibliotekaAT, bibliotekaAutor, bibliotekaTytuł WHERE id_autor=bibliotekaAutor_ID AND id_tytuł=bibliotekaTytuł_ID');
  echo("</h1>Wyświetlenie pełnej bazy danych w blibiotece</h1>");
  
  $result=$conn->query($sql);
  echo("<table>");
  echo("<th>id</th>");
  echo("<th>Autor</th>");
  echo("<th>Tytuł</th>");
  while($row=$result->fetch_assoc())
  {
      echo("<tr>");
      echo("<td>".$row["id"]."</td><td>".$row["Autor"]."</td><td>".$row["Tytuł"]."</td>");
      echo("</tr>");
  }
  echo("</table>");
  ?>

            </div>
        </div>
    </header>
</body>
</html>

            
