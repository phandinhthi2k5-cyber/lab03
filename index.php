<?php
require_once "functions.php";

$action = $_GET['action'] ?? null;

echo "<h2>Mini Utilities</h2>";

switch ($action) {

    case "prime":
        $n = (int) ($_GET['n'] ?? 0);
        echo "Kiểm tra số nguyên tố: $n<br>";
        echo isPrime($n) ? " $n là số nguyên tố" : " $n KHÔNG phải số nguyên tố";
        break;

    case "fact":
        $n = (int) ($_GET['n'] ?? 0);
        echo "Giai thừa của $n<br>";
        $f = factorial($n);
        echo ($f === null) ? " Không tính giai thừa số âm" : " $n! = $f";
        break;

    case "gcd":
        $a = (int) ($_GET['a'] ?? 0);
        $b = (int) ($_GET['b'] ?? 0);
        echo "Ước chung lớn nhất của $a và $b<br>";
        echo " gcd($a, $b) = " . gcd($a, $b);
        break;

    case "max":
        $a = (float) ($_GET['a'] ?? 0);
        $b = (float) ($_GET['b'] ?? 0);
        echo " Max = " . myMax($a, $b);
        break;

    case "min":
        $a = (float) ($_GET['a'] ?? 0);
        $b = (float) ($_GET['b'] ?? 0);
        echo " Min = " . myMin($a, $b);
        break;

    default:
        echo "<p>Chọn chức năng bằng URL:</p>";
        echo "<ul>
            <li>?action=prime&n=17</li>
            <li>?action=fact&n=6</li>
            <li>?action=gcd&a=12&b=18</li>
            <li>?action=max&a=5&b=9</li>
            <li>?action=min&a=5&b=9</li>
        </ul>";
}
