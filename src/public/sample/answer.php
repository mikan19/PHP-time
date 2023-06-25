<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use App\Hours;

$hours = filter_input(INPUT_POST, 'time');
try {
    $hoursObj = new Hours($hours);
    $seconds = $hoursObj->toSeconds()->value();
} catch (\Exception $e) {
    session_start();
    $_SESSION['errorMessage'] = $e->getMessage();
    header('Location: ./index.php');
    exit();
}
?>

<body>

  <h1><?php echo $seconds; ?></h1>
  
  <a href="./index.php">Top画面へ</a>

</body>






