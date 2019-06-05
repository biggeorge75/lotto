<?
ob_start();
header("Content-Type: text/html; charset=utf-8");
?>

<html>

  <head>
    <style>
      .golyo {
        width:47px;
        height:47px;
        text-align:center;
        position:relative;
        top:-30px;
        left:57px;
        font-size:34pt;
        font-family:cursive;
      }
    </style>
  </head>

  <body>

    <br><br>

    <?

    $szamok = range(1, 90);

    shuffle($szamok);
    $nyeroszamok[] = array_shift($szamok);

    shuffle($szamok);
    $nyeroszamok[] = array_shift($szamok);

    shuffle($szamok);
    $nyeroszamok[] = array_shift($szamok);

    shuffle($szamok);
    $nyeroszamok[] = array_shift($szamok);

    shuffle($szamok);
    $nyeroszamok[] = array_shift($szamok);

    sort($nyeroszamok);

    ?>

    <table>
      <tr height="150">
        <?
        $i = 0;
        foreach ($nyeroszamok as $szam) {
          $i++;
          ?>
          <td width="150" style="background:url(img/golyo_<?= $i?>.png)">
            <div class="golyo"><b><?= $szam?></b></div>
          </td>
          <?
        }
        ?>
      </tr>
    </table>

  </body>

</html>

<?


ob_end_flush();
?>
