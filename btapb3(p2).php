<?php
//Không dùng hàm có sẵn
// Câu 1. Kiểm tra số chẵn:
function checkEven($n){
    if ($n % 2 == 0){
        return true;
    } else {
        return false;
    }
}

$n = 11;
if (checkEven($n)){
    echo "Câu 1: $n là số chẵn <br>";
} else {
    echo "Câu 1: $n là số lẻ <br>";
}
?>




<?php
// Câu 2. Tính tổng các số từ 1 đến n:
function sumInteger($n){
    $sum = 0;
    for ($i = 1; $i <= $n; $i++){
        $sum += $i;
    }
    return $sum; }

$n = 12;
$sum = sumInteger($n);
echo "Câu 2: Tổng các số từ 1 đến $n: $sum <br>";
?>




<?php
// Câu 3. In bảng cửu chương từ 1 đến 10:
function multiplicationTable(){
    echo "<table>"; 
    echo "<tr>";
    for($i = 1; $i <= 9; $i ++){
        echo "<td>";
        for($j = 1; $j <= 10; $j ++){
            echo "$i x $j = " . ($i * $j);
            echo "<br>";
        }
        echo "</td>";
    }
    echo "</tr>";
    echo "</table>";
}

echo "Câu 3: Bảng cửu chương";
multiplicationTable();




// Câu 4. Kiểm tra chuỗi có chứa từ cụ thể:
function checkWord($string, $word){
    return stripos($string, $word) !== false;
}

$string = "boombaya yeah yeah yeah BOOMBAYA";
$word = "booMbaya";

echo "Câu 4: ";
if (checkWord($string, $word)){
    echo "Chuỗi '$string' có chứa từ '$word' <br>";
} else {
    echo "Chuỗi '$string' không chứa từ '$word' <br>";
}
?>




<?php
// Câu 5. Tìm giá trị lớn nhất và nhỏ nhất trong một mảng:
function maxValue($array){
    $maxValue = $array[0];
    $length = count($array);

    for ($i = 1; $i < $length; $i++){
        if ($array[$i] > $maxValue){
            $maxValue = $array[$i];
        }
    }
    return $maxValue;
}

function minValue($array){
    $minValue = $array[0];
    $length = count($array);

    for ($i = 1; $i < $length; $i++){
        if ($array[$i] < $minValue){
            $minValue = $array[$i];
        }
    }
    return $minValue;
}

$array = [4, 5, 8, 2, 9, 10];
$maxValue = maxValue($array);
$minValue = minValue($array);
echo "Câu 5: <br>";
echo "GTLN trong mảng là $maxValue <br>";
echo "GTNN trong mảng là $minValue <br>";
?>




<?php
// Câu 6: Sắp xếp mảng theo thứ tự tăng dần:
function Ascending($array){
    $length = count($array);

    for ($i = 0; $i < $length - 1; $i++){
        for ($j = $i + 1; $j < $length; $j++){
            if ($array[$i] > $array[$j]){
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    return $array;
}

$array = [4, 5, 8, 2, 9, 10];
$arrange = Ascending($array);
echo "Câu 6: Mảng sau khi sắp xếp tăng dần: " . implode(", ",$arrange). "<br>";
?>




<?php
//Câu 7: Tính giai thừa của một số nguyên dương:
function Factorial($n){
    $factorial = 1;
    for ($i = 1; $i <= $n; $i++){
        $factorial *= $i;
    }
    return $factorial;
}

$n = 5;
$factorial = Factorial($n);
echo "Câu 7: Giai thừa của $n là: $factorial <br>";
?>




<?php
//Câu 8: Tìm số nguyên tố trong một khoảng cho trước:
function checkPrime($n){
    if ($n < 2){
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++){
        if ($n % $i == 0){
            return false;
        }
    }
    return true;
}
function findPrimes($array){
    $primeNumbers =[];
    foreach ($array as $n){
        if(checkPrime($n)){
            $primeNumbers[] = $n;
        }
    }
    return $primeNumbers;
}

$array =[3,5,2,9,10];
$primeNumbers = findPrimes($array);
echo "Câu 8: Các số nguyên tố trong mảng là: " .implode(", ", $primeNumbers) . "<br>";
?>




<?php
//Câu 9: Tính tổng của các số trong một mảng:
function sumArray($array){
    $sum = 0;
    foreach ($array as $n){
        if(is_numeric($n)){
            $sum += $n;
        }
    }
    return $sum;
}

$array = [4.5, 5, 8, 4, 'a', 2, 9, 10];
$sum = sumArray($array);
echo "Câu 9: Tổng của các số trong mảng là: " . $sum . "<br>";
?>




<?php
//Câu 10: In ra các số Fibonacci trong một khoảng cho trước:
function findFibonacci($start, $end){
    $fibonacci =[];
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;
    for ($i = 2; $fibonacci[$i - 1] <= $end; $i++){
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    $array =[];
    foreach ($fibonacci as $n){
        if ($n >= $start && $n <= $end){
            $array[] = $n;
        }
    }
    return $array;
}

$start = 10;
$end = 100;
$findFibonacci = findFibonacci($start, $end);
echo "Câu 10: Các số Fibonacci trong khoảng từ $start đến $end là: " . implode(", ", $findFibonacci) . "<br>";
?>




<?php
//Câu 11: Kiểm tra số Armstrong: 
function checkArmstrong($n){
    $sum = 0;
    $temp = $n;
    $length = strlen($n);
    while ($temp > 0){
        $digit = $temp % 10;
        $sum += pow($digit, $length);
        $temp = (int)($temp / 10);
    }
    return $sum === $n;
}

$n = 153;
if (checkArmstrong($n)){
    echo "Câu 11: $n là số Armstrong<br>";
} else {
    echo "Câu 11: $n không là số Armstrong<br>";
}
?>




<?php
//Câu 12: Chèn một phần tử vào một mảng ở vị trí bất kỳ:
function insertElement($array, $element, $position){
    $length = count($array);
    $newArray = array();
    for ($i = 0; $i < $length; $i++){
        if ($i === $position){
            $newArray[] = $element;
        }
        $newArray[] = $array[$i];
    } 
    if ($position >= $length){
        $newArray[] = $element;
    }
    return $newArray;
}

$array = [1, 6, 8, 3, 'a'];
$element = 10;
$position = 3;
$newArray = insertElement($array, $element, $position);
echo "Câu 12: Mảng sau khi chèn: " . implode(", ", $newArray) . "<br>";
?>





<?php
//Câu 13: Loại bỏ các phần tử trùng lặp trong một mảng:
function removeDuplicates($array){
    $length = count($array);
    $newArray = array();
    for ($i = 0; $i < $length; $i++){
        $checkDuplicate = false;
        for ($j = 0; $j < count($newArray); $j++){
            if ($array[$i] === $newArray[$j]){
                $checkDuplicate = true;
                break;
                }
            }
        if (!$checkDuplicate){
            $newArray[] = $array[$i];
        }
    }
    return $newArray;
}

$array = [1, 2, 3, 4, 2, 3, 5];
$uniqueArray = removeDuplicates($array);
echo "Câu 13: Mảng sau khi loại bỏ các phần tử trùng lặp là: " . implode(", ", $uniqueArray) . "<br>";
?>




<?php
//Câu 14: Tìm vị trí của một phần tử trong một mảng:
function findElement($array, $element){
    $length = count($array);
    for ($i = 0; $i < $length; $i++){
        if ($array[$i] === $element){
            return $i;
        }
    }
    return false;
}

$array = [1,2,6,4,5];
$element = 3;
$position = findElement($array, $element);
if ($position !== false){
    echo "Câu 14: Phần tử $element được tìm thấy trong mảng " . implode(", ",$array) . " tại vị trí $position <br>";
} else {
    echo "Câu 14: Phần tử $element không được tìm thấy trong mảng " . implode(", ",$array) . "<br>";
}
?>





<?php
//Câu 15: Đảo ngược một chuỗi:
function reverseString($string){
    $length = strlen($string);
    $reversedString = '';
    for ($i = $length - 1; $i >= 0; $i--){
        $reversedString .= $string[$i];
    }
    return $reversedString;
}

$string = "boombaya yeah yeah yeah BOOMBAYA";
$reversedString = reverseString($string);
echo "Câu 15: Chuỗi đảo ngược của '$string' là: '$reversedString' <br>";
?>




<?php
//Câu 16: Tính số lượng phần tử trong một mảng:
function countElements($array){
    $count = 0;
    foreach ($array as $element){
        $count++;
    }
    return $count;
}

$array = [6, 3, 'b', 7, 0, 10];
$count = countElements($array);
echo "Câu 16: Số lượng phần tử trong mảng là: " . $count . "<br>";
?>



<?php
//Câu 17: Kiểm tra chuỗi Palindrome:
function isPalindrome($string){
    $string = strtolower(str_replace(' ', '', $string));
    $length = strlen($string);
    $isPalindrome = true;

    for ($i = 0; $i < $length / 2; $i++){
        if ($string[$i] !== $string[$length - $i - 1]){
            $isPalindrome = false;
            break;
        }
    } 
    return $isPalindrome;
}

$string = "A man a plan a canal Panama";
if (isPalindrome($string)){
    echo "Câu 17: Chuỗi '$string' là chuỗi Palindrome.<br>";
} else {
    echo "Câu 17: Chuỗi '$string' không phải là chuỗi Palindrome.<br>";
}
?>




<?php
//Câu 18: Đếm số lần xuất hiện của một phần tử trong một mảng:
function countOccurrences($array, $element){
    $count = 0;
    foreach ($array as $value){
        if ($value === $element){
            $count++;
        }
    }
    return $count;
}

$array = [1, 2, 3, 4, 2, 3, 5];
$element = 2;
$occurrences = countOccurrences($array, $element);
echo "Câu 18: Số lần xuất hiện của phần tử $element trong mảng là: $occurrences <br>";
?>




<?php
//Câu 19: Sắp xếp một mảng theo thứ tự giảm dần:
function Descending($a){
    $length = count($a);
    for ($i = 0; $i < $length - 1; $i++){
        for ($j = $i + 1; $j < $length; $j++){
            if ($a[$i] < $a[$j]){
                $temp = $a[$i];
                $a[$i] = $a[$j];
                $a[$j] = $temp;
            }
        }
    }
    return $a;
}

$a = [4, 5, 8, 2, 9, 10];
$arrange = Descending($a);
echo "Câu 19: Mảng sau khi sắp xếp giảm dần: " .implode(", ",$arrange). "<br>";
?>




<?php
//Câu 20: Thêm một phần tử vào đầu hoặc cuối của một mảng:
function addElement($array, $element, $position){
    if ($position === 'start'){
        $newArray = [$element];
        foreach ($array as $value){
            $newArray[] = $value;
        }
    } elseif ($position === 'end'){
        $newArray = $array;
        $newArray[] = $element;
    }
    return $newArray;
}

$array = [1, 2, 3, 4, 5];
$element = 0;
$newArray = addElement($array, $element, 'start');
echo "Câu 20: <br>";
echo "Mảng sau khi thêm phần tử $element vào đầu là: " . implode(", ", $newArray) . "<br>";
$newArray = addElement($array, $element, 'end');
echo "Mảng sau khi thêm phần tử $element vào cuối là: " . implode(", ", $newArray) . "<br>";
?>




<?php
//Câu 21: Tìm số lớn thứ hai trong một mảng:
function findSecondLargest($array){
    $largest = $secondLargest = PHP_INT_MIN;
    foreach ($array as $value){
        if ($value > $largest){
            $secondLargest = $largest;
            $largest = $value;
        } elseif ($value > $secondLargest && $value != $largest){
            $secondLargest = $value;
        }
    }
    return $secondLargest;
}

$array = [6, 7, 1, 3, 8, 2];
$secondLargest = findSecondLargest($array);
echo "Câu 21: Số lớn thứ hai trong mảng là: $secondLargest <br>";
?>




<?php
//Câu 22: Tìm ước số chung lớn nhất (USCLN) và bội số chung nhỏ nhất (BSCNN) của hai số nguyên dương:
function findGCD($a, $b){
    while ($b !== 0){
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function findLCM($a, $b){
    return ($a * $b) / findGCD($a, $b);
}

$number1 = 12;
$number2 = 18;
$gcd = findGCD($number1, $number2);
$lcm = findLCM($number1, $number2);
echo "Câu 22: <br>";
echo "UCLN($number1, $number2) = " . $gcd . "<br>";
echo "BCNN($number1, $number2) = " . $lcm . "<br>";
?>



<?php
//Câu 23: Kiểm tra số hoàn hảo:
function isPerfectNumber($number){
    $sum = 0;
    for ($i = 1; $i <= $number / 2; $i++){
        if ($number % $i === 0){
            $sum += $i;
        }
    }
    return $sum === $number;
}

$number = 28;
if (isPerfectNumber($number)){
    echo "Câu 23: Số $number là số hoàn hảo <br>";
} else {
    echo "Câu 23: Số $number không phải là số hoàn hảo <br>";
}
?>



<?php
//Câu 24: Tìm số lẻ lớn nhất trong một mảng:
function findLargestOdd($array){
    $maxOdd = NULL;
    foreach($array as $value){
        if($value % 2 != 0){
            if($maxOdd === NULL || $value > $maxOdd){
                $maxOdd = $value;
            }
        }
    }
    return $maxOdd;
}

$array = [5, 2, 9, 4, 3];
$maxOdd = findLargestOdd($array);
if ($maxOdd != NULL){
    echo "Câu 24: Số lẻ lớn nhất trong mảng là: $maxOdd <br>";
} else {
    echo "Câu 24: Không tìm thấy số lẻ trong mảng <br>";
}
?>




<?php
//Câu 25: Kiểm tra số nguyên tố:
function isPrime($n){
    if ($n < 2){
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++){
        if($n % $i == 0){
            return false;    
        }
    }
    return true;
}

$n = 15;
if (isPrime($n)){
    echo "Câu 25: $n là số nguyên tố <br>";
} else {
    echo "Câu 25: $n không là số nguyên tố <br>";
}
?>




<?php
//Câu 26: Tìm số dương lớn nhất trong một mảng:
function findLargestPositive($array){
    $maxPositive = null;
    foreach ($array as $n){
        if ($n > 0){
            if ($maxPositive === null){
                $maxPositive = $n;
            } else {
                if ($n > $maxPositive){
                    $maxPositive = $n;
                }
            }
        }
    }
    return $maxPositive;
}

$array = [-5, -2, 8, 1, 9];
$largestPositive = findLargestPositive($array);
if ($largestPositive !== null){
    echo "Câu 26: Số dương lớn nhất trong mảng " . implode(", ", $array) . " là: $largestPositive. <br>" ;
} else {
    echo "Câu 26: Không tìm thấy số dương trong mảng " . implode(", ", $array) . "<br>";
}
?>




<?php
//Câu 27: Tìm số âm lớn nhất trong một mảng:
function largerstNegative($array){
    $maxNegative = null;
    foreach ($array as $n){
        if ($n < 0){
            if ($maxNegative === null){
                $maxNegative = $n;
            } else {
                if ($n > $maxNegative){
                    $maxNegative = $n;
                }
            }
        }
    }
    return $maxNegative;
}

$array = [-5, -2, 8, 1, -9];
$largestNegative = largerstNegative($array);
if ($largestNegative !== null){
    echo "Câu 27: Số âm lớn nhất trong mảng là: " . implode(", ", $array) . " là: $largestNegative <br>";
} else {
    echo "Câu 27: Không tìm thấy số âm trong mảng " . implode(", ", $array) . "<br>";
}
?>




<?php
//Câu 28: Tính tổng các số lẻ từ 1 đến n:
function sumOdd($n){
    $sum = 0;
    for ($i = 1; $i <= $n; $i++){
        if ($i % 2 !== 0){
            $sum += $i;
        }
    }
    return $sum;
}

$n = 10;
$sum = sumOdd($n);
echo "Câu 28: Tổng các số lẻ từ 1 đến $n là: " . $sum . "<br>";
?>




<?php
//Câu 29: Tìm số chính phương trong một khoảng cho trước:
function checkPerfectSquare($n){
    $sqrt = sqrt($n);
    $floor = floor($sqrt);
    return $sqrt == $floor;
}
function findPerfectSquares($array){
    $perfectSquares =[];
    foreach ($array as $n){
        if (checkPerfectSquare($n)){
            $perfectSquares[] = $n;
        }
    }
    return $perfectSquares;
}

$array = [1, 4, 9, 15, 25];
$perfectSquares = findPerfectSquares($array);
echo "Câu 29: Các số chính phương trong mảng là: " . implode(", ", $perfectSquares) . "<br>";
?>




<?php
//Câu 30: Kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không:
function isSubstring($str, $subStr) {
    $strLength = strlen($str);
    $subStrLength = strlen($subStr);
    if ($strLength < $subStrLength) {
        return false;
    }
    for ($i = 0; $i <= $strLength - $subStrLength; $i++) {
        $match = true;
        for ($j = 0; $j < $subStrLength; $j++) {
            if ($str[$i + $j] !== $subStr[$j]) {
                $match = false;
                break;
            }
        }
        if ($match) {
            return true;
        }
    }
    return false;
}

$str = "boombaya yeah yeah yeah boombaya yeah yeah yeah boombaya BOOMBA";
$subStr = "boombayah";
if (isSubstring($str, $subStr)) {
    echo "Câu 30: Chuỗi '$subStr' là chuỗi con của '$str'";
} else {
    echo "Câu 30: Chuỗi '$subStr' không là chuỗi con của '$str'";
}
?>