

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
      <?php

$mi = 1;
$max = 5;

$co = mt_rand($mi,$max);
$sorte = $_POST["digito"] ?? 0;

if($sorte > 5)
{
  echo "<strong>$sorte</strong> Nao e valido, escolha um valor de <strong>1 a 5</strong>!";
}
else
{
  if(!empty($sorte))
  {
    if($co == $sorte)
    {
      echo "<strong><p>Parabens!</p>Tu es grade vecedor</strong>";
      echo "<p>O teu numero de sorte e <strong>$co!</strong></p>";
    }
    else
    {
      echo "Tete novamete com outro valor";
      echo "<p>O valor sorteado foi <strong>$co!</strong></p>";
    }
  }
}
?>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <h1>Casa de Apostas</h1>
            <label for="digito">Digite o seu numero da sorte</label><br>
            <input type="number" name="digito" <?php echo "$sorte" ?> placeholder="Digite um valor"><br><br>
            <input type="submit" value="Jogar">
            
            <h5>Criado por: <u><i>Eng. Bilton Guambe</i></u></h5>
        </form>
    </main>
</body>
</html>