<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\P199;

$std = new stdClass();
$std->NUM_PROC = 'G6Y51W82PUGE0GSJ5MEW';
$std->IND_PROC = '1';

try {
$p199 = new P199($std);
echo "{$p199}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|P199|G6Y51W82PUGE0GSJ5MEW|1|<br>';
