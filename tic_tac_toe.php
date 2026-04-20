<?php
  session_start();
  if (!isset($_SESSION['grid'])) {
    $_SESSION['grid'] = array(
        array(" ", " ", " "),
        array(" ", " ", " "),
        array(" ", " ", " ")
    );
}

if (!isset($_SESSION['potez'])) {
    $_SESSION['potez'] = 0;
}

$grid = $_SESSION['grid'];
$potez = $_SESSION['potez'];

if (!isset($_SESSION['winner'])) {
    $_SESSION['winner'] = "";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['reset'])) {
        unset($_SESSION['grid']);
        unset($_SESSION['potez']);
        unset($_SESSION['winner']);
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }

     if (isset($_POST['cell']) && $_SESSION['winner'] == "") {
        $cell = $_POST['cell'];
        list($row, $col) = explode('-', $cell);

        if ($grid[$row][$col] === " ") {
            $grid[$row][$col] = "X";

            $potez++;
            $_SESSION['potez'] = $potez;

            $c = 0;
            if($potez < 5){
              while (TRUE) {
                  $c++;
                  $rand_row = random_int(0, 2);
                  $rand_col = random_int(0, 2);

                  if ($grid[$rand_row][$rand_col] === " ") {
                      $grid[$rand_row][$rand_col] = "O";
                      break;
                  }
              }
            }
        }

      $winner = "";

      $_SESSION['grid'] = $grid;
      if($grid[0][0] != " " && $grid[0][0] == $grid[0][1] && $grid[0][0] == $grid[0][2]){$winner = $grid[0][0];};
      if($grid[1][0] != " " && $grid[1][0] == $grid[1][1] && $grid[1][0] == $grid[1][2]){$winner = $grid[1][0];};
      if($grid[2][0] != " " && $grid[2][0] == $grid[2][1] && $grid[2][0] == $grid[2][2]){$winner = $grid[2][0];};
      if($grid[0][0] != " " && $grid[0][0] == $grid[1][0] && $grid[0][0] == $grid[2][0]){$winner = $grid[0][0];};
      if($grid[0][1] != " " && $grid[0][1] == $grid[1][1] && $grid[0][1] == $grid[2][1]){$winner = $grid[0][1];};
      if($grid[0][2] != " " && $grid[0][2] == $grid[1][2] && $grid[0][2] == $grid[2][2]){$winner = $grid[0][2];};
      if($grid[0][0] != " " && $grid[0][0] == $grid[1][1] && $grid[0][0] == $grid[2][2]){$winner = $grid[0][0];};
      if($grid[0][2] != " " && $grid[0][2] == $grid[1][1] && $grid[0][2] == $grid[2][0]){$winner = $grid[0][2];};
      {
        if($potez >= 5 && $winner == ""){$winner = "Y";}
      }

      if ($winner != "") {
      $_SESSION['winner'] = $winner;
      }
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tic Tac Toe</title>
</head>
<style>
    body {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin: 0;
}

    .grid {
      display: grid;
      grid-template-columns: repeat(3, 80px);
      gap: 10px;
    }

    button {
      padding: 20px;
      font-size: 16px;
      cursor: pointer;
    }

    button:disabled {
      background-color: #ccc;
      cursor: not-allowed;
    }

</style>
<body>
    <p>Vi ste 'X'! Prvi ste na potezu.</p><br><br>
    
    <form method="POST">
  <div class="grid"> 

    <!-- Row 0 -->
    <button type="submit" name="cell" value="0-0"> <?php echo $grid[0][0] ?> </button>
    <button type="submit" name="cell" value="0-1"> <?php echo $grid[0][1] ?> </button>
    <button type="submit" name="cell" value="0-2"> <?php echo $grid[0][2] ?> </button>

    <!-- Row 1 -->
    <button type="submit" name="cell" value="1-0"> <?php echo $grid[1][0] ?> </button>
    <button type="submit" name="cell" value="1-1"> <?php echo $grid[1][1] ?> </button>
    <button type="submit" name="cell" value="1-2"> <?php echo $grid[1][2] ?> </button>

    <!-- Row 1 -->
    <button type="submit" name="cell" value="2-0"> <?php echo $grid[2][0] ?> </button>
    <button type="submit" name="cell" value="2-1"> <?php echo $grid[2][1] ?> </button>
    <button type="submit" name="cell" value="2-2"> <?php echo $grid[2][2] ?> </button>

  </div>

    <?php if ($_SESSION['winner'] != "" && $_SESSION['winner'] != 'Y'): ?>
    <p>Pobijedio je <?php echo $_SESSION['winner']; ?></p>
  <?php endif; ?>

    <?php if ($_SESSION['winner'] == 'Y'): ?>
    <?php echo "Neriješeno je!"; ?></p>
  <?php endif; ?>

  <br><br>
  <button type="submit" name="reset">Reset</button>
</form>

</body>
</html>