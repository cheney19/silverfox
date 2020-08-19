<?php
/**
 * project index.
 * User: cheney
 * Date: 2020/8/11
 * Time: 2:19 PM
 */
require_once './vendor/autoload.php'; // 加载自动加载文件
//use AppleSignIn\ASDecoder;
use Silverfox\Rose;
/*use Silverfox\Rose\Rose;
use Silverfox\Lily;

$rose = new Rose();
$lily = new Lily();

$a = $rose->index();
echo $a;*/

$rose = new Rose();
$a = $rose->index();
echo $a;
?>
