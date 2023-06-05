<?php
//Hàm có sẵn
// Câu 1. Kiểm tra số chẵn:
function isEven($number) {
    if ($number %2 == 0){
        return true;
    } else {
        return false;
    }
}

$number = 11;
if (isEven($number)){
    echo "$number là số chẵn <br>";
} else {
    echo "$number là số lẻ <br>";
}





// Câu 2. Tính tổng các số từ 1 đến n:
function Sum($n){
    $sum = 0;
    for ($i = 1; $i <= $n; $i++){
        $sum += $i;
    }
    return $sum; }

$n = 12;
$sum = Sum($n);
echo "Tổng các số từ 1 đến $n: $sum <br>";





// Câu 3. In bảng cửu chương từ 1 đến 10:
function multiplicationTable(){
    echo "<table>"; 
    echo "<tr>";
    for($i = 1; $i < 10; $i ++) {
        echo "<td>";
        for($j = 1; $j <= 10; $j ++) {
            echo "$i x $j = " . ($i * $j);
            echo "<br>";
        }
        echo "</td>";
}
}
multiplicationTable();





// Câu 4. Kiểm tra chuỗi có chứa từ cụ thể:
function checkWord($string, $word) {
    return stripos($string, $word) !== false;
}
$string = "boombaya yeah yeah yeah BOOMBAYA";
$word = "booMbaya";
if (checkWord($string, $word)) {
    echo "Chuỗi có chứa từ $word <br>";
} else {
    echo "Chuỗi không chứa từ $word <br>";
}
// checkWord($string, $word): định nghĩa để kiểm tra xem chuỗi $string có chứa từ $word hay không
// stripos(): tìm kiếm 1 chuỗi con trong chuỗi mẹ mà không phân biệt chữ hoa, chữ thường




// Câu 5. Tìm giá trị lớn nhất và nhỏ nhất trong một mảng:

//Cách 1: Hàm có sẵn:
function maxValue($array){
    return max($array);
}
function minValue($array){
    return min($array);
}

$array = [4,5,8,2,9,10];
$maxValue = maxValue($array);
$minValue = minValue($array);
echo "GTLN trong mảng là $maxValue <br>";
echo "GTLN trong mảng là $minValue <br>";


// Câu 6: Sắp xếp mảng theo thứ tự tăng dần:
function Ascending($array) {
    sort($array);
    return $array;
}

$array = [5, 3, 8, 2, 1, 9];
$arrange = Ascending($array);
echo "Mảng sau khi sắp xếp theo thứ tự tăng dần: " . implode(", ", $arrange) . "<br>";


//Câu 7: Tính giai thừa của một số nguyên dương:
function Factorial($n) {
    $factorial = 1;
    for ($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

$n = 5;
$factorial = Factorial($n);
echo "Giai thừa của $n là: " . $factorial ."<br>";

//Câu 8: Tìm số nguyên tố trong một khoảng cho trước:
function checkPrime($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function findPrimes($start, $end) {
    $primes = [];
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }
    return $primes;
}

$start = 1;
$end = 20;
$primeNumbers = findPrimes($start, $end);
echo "Các số nguyên tố trong khoảng từ $start đến $end là: " . implode(", ", $primeNumbers);

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
echo "Tổng của các số trong mảng là: " . $sum . "<br>";

//Câu 10: In ra các số Fibonacci trong một khoảng cho trước:
function Fibonancci($n){
    $array = [];
    $array[0] = 0;
    $array[1] = 1;
    for ($i = 2; $i < $n; $i++){
        $array[$i] = $array[$i-1] + $array[$i-2];
    }
    return $array;
}


$n = 10;
$fibonacciNumbers = Fibonancci($n);
echo "$n số Fibonancci đầu tiên là: " . implode(", ", $fibonacciNumbers);




//Câu 11: Kiểm tra số Armstrong: 
function checkArmstrong($n) {
    $sum = 0;
    $temp = $n;
    $length = strlen($n);

    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $length);
        $temp = (int)($temp / 10);
    }

    return $sum === $n;
}

$n = 153;
if (checkArmstrong($n)) {
    echo "$n là số Armstrong<br>";
} else {
    echo "$n không là số Armstrong<br>";
}

//Câu 12: Chèn một phần tử vào một mảng ở vị trí bất kỳ:
function insertElement($array, $element, $position) {
    array_splice($array, $position, 0, $element);
    return $array;
}

$array = [1, 2, 3, 4, 5];
$element = 10;
$position = 2;
$newArray = insertElement($array, $element, $position);
echo "Mảng sau khi chèn là: " . implode(", ", $newArray);

//Câu 13: Loại bỏ các phần tử trùng lặp trong một mảng:
function removeDuplicates($array) {
    return array_unique($array);
}
$array = [1, 2, 3, 4, 2, 3, 5];
$uniqueArray = removeDuplicates($array);
echo "Mảng sau khi loại bỏ các phần tử trùng lặp là: " . implode(", ", $uniqueArray);

//Câu 14: Tìm vị trí của một phần tử trong một mảng:
function findElement($array, $element) {
    $index = array_search($element, $array);
    return $index !== false ? $index : -1;
}

$array = [1, 2, 3, 4, 5];
$element = 3;
$positionElement = findElement($array, $element);
if ($positionElement != -1) {
    echo "Phần tử $element được tìm thấy tại vị trí $positionElement trong mảng.";
} else {
    echo "Phần tử $element không có trong mảng.";
}

//Câu 15: Đảo ngược một chuỗi:
function reverseString($string) {
    return strrev($string);
}

$string = "<b>boombaya</b> <i>yeah yeah yeah</i> <b>boombaya</b> <i>yeah yeah yeah</i> <b>boombaya</b> <b><i>BOOMBA</i></b>";
$reversedString = reverseString($string);
echo "Chuỗi đảo ngược là: " . $reversedString;

//Câu 16: Tính số lượng phần tử trong một mảng:
function countElements($array) {
    return count($array);
}

$array = [1, 2, 3, 4, 5];
$count = countElements($array);
echo "Số lượng phần tử trong mảng là: " . $count;

//Câu 17: Kiểm tra chuỗi Palindrome:
function isPalindrome($string) {
    $string = strtolower(str_replace(' ', '', $string));
    return $string === strrev($string);
}

$string = "A man a plan a canal Panama";
if (isPalindrome($string)) {
    echo "Chuỗi '$string' là chuỗi Palindrome";
} else {
    echo "Chuỗi '$string' không phải là chuỗi Palindrome";
}

//Câu 18: Đếm số lần xuất hiện của một phần tử trong một mảng:
function countOccurrences($array, $element) {
    return count(array_keys($array, $element));
}

$array = [1, 2, 3, 4, 2, 3, 5];
$element = 2;
$occurrences = countOccurrences($array, $element);
echo "Số lần xuất hiện của phần tử $element trong mảng là: " . $occurrences;

//Câu 19: Sắp xếp một mảng theo thứ tự giảm dần:
function Descending($array) {
    rsort($array);
    return $array;
}

$array = [5, 2, 8, 1, 9];
$arrangeDescending = Descending($array);
echo "Mảng sau khi sắp xếp giảm dần là: " . implode(", ", $arrangeDescending);

//Câu 20: Thêm một phần tử vào đầu hoặc cuối của một mảng:
function addElement($array, $element, $position) {
    if ($position === 'start') {
        array_unshift($array, $element);
    } elseif ($position === 'end') {
        array_push($array, $element);
    }
    return $array;
}

$array = [1, 2, 3, 4, 5];
$element = 0;
$newArray = addElement($array, $element, 'start');
echo "Mảng sau khi thêm phần tử $element vào đầu là: " . implode(", ", $newArray);

$newArray = addElement($array, $element, 'end');
echo "Mảng sau khi thêm phần tử $element vào cuối là: " . implode(", ", $newArray);

//Câu 21: Tìm số lớn thứ hai trong một mảng:
function findSecondLargestNumber($array) {
    $uniqueArray = array_unique($array);
    rsort($uniqueArray);
    if (count($uniqueArray) >= 2) {
        return $uniqueArray[1];
    }
    return null;
}

$array = [5, 2, 8, 1, 9];
$secondLargest = findSecondLargestNumber($array);
if ($secondLargest !== null) {
    echo "Số lớn thứ hai trong mảng là: " . $secondLargest;
} else {
    echo "Không tìm thấy số lớn thứ hai trong mảng.";
}

//Câu 22: Tìm ước số chung lớn nhất (USCLN) và bội số chung nhỏ nhất (BSCNN) của hai số nguyên dương:
function findGCD($a, $b) {
    while ($b !== 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function findLCM($a, $b) {
    return ($a * $b) / findGCD($a, $b);
}

$number1 = 12;
$number2 = 18;
$gcd = findGCD($number1, $number2);
$lcm = findLCM($number1, $number2);

echo "Ước số chung lớn nhất của $number1 và $number2 là: " . $gcd;
echo "Bội số chung nhỏ nhất của $number1 và $number2 là: " . $lcm;

//Câu 23: Kiểm tra số hoàn hảo:
function isPerfectNumber($number) {
    $sum = 0;
    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            $sum += $i;
        }
    }
    return $sum === $number;
}

$number = 28;
if (isPerfectNumber($number)) {
    echo "Số $number là số hoàn hảo";
} else {
    echo "Số $number không phải là số hoàn hảo";
}

//Câu 24: Tìm số lẻ lớn nhất trong một mảng:
function findLargestOddNumber($array) {
    $maxOddNumber = null;
    foreach ($array as $number) {
        if ($number % 2 !== 0 && ($maxOddNumber === null || $number > $maxOddNumber)) {
            $maxOddNumber = $number;
        }
    }
    return $maxOddNumber;
}

$array = [5, 2, 8, 1, 9];
$largestOddNumber = findLargestOddNumber($array);
if ($largestOddNumber !== null) {
    echo "Số lẻ lớn nhất trong mảng là: " . $largestOddNumber;
} else {
    echo "Không tìm thấy số lẻ trong mảng.";
}

//Câu 25: Kiểm tra số nguyên tố:
function isPrime($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

$number = 17;
if (isPrime($number)) {
    echo "Số $number là số nguyên tố";
} else {
    echo "Số $number không phải là số nguyên tố";
}

//Câu 26: Tìm số dương lớn nhất trong một mảng:
function findLargestPositiveNumber($array) {
    $maxPositiveNumber = null;
    foreach ($array as $number) {
        if ($number > 0) {
            if ($maxPositiveNumber === null) {
                $maxPositiveNumber = $number;
            } else {
                if ($number > $maxPositiveNumber) {
                    $maxPositiveNumber = $number;
                }
            }
        }
    }
    return $maxPositiveNumber;
}

$array = [-5, -2, 8, 1, 9];
$largestPositiveNumber = findLargestPositiveNumber($array);
if ($largestPositiveNumber !== null) {
    echo "Số dương lớn nhất trong mảng là: " . $largestPositiveNumber;
} else {
    echo "Không tìm thấy số dương trong mảng.";
}


//Câu 27: Tìm số âm lớn nhất trong một mảng:
function findLargestNegativeNumber($array) {
    $maxNegativeNumber = null;
    foreach ($array as $number) {
        if ($number < 0 && ($maxNegativeNumber === null || $number > $maxNegativeNumber)) {
            $maxNegativeNumber = $number;
        }
    }
    return $maxNegativeNumber;
}

$array = [-5, -2, 8, 1, -9];
$largestNegativeNumber = findLargestNegativeNumber($array);
if ($largestNegativeNumber !== null) {
    echo "Số âm lớn nhất trong mảng là: " . $largestNegativeNumber;
} else {
    echo "Không tìm thấy số âm trong mảng.";
}

//Câu 28: Tính tổng các số lẻ từ 1 đến n:
function sumOdd($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 !== 0) {
            $sum += $i;
        }
    }
    return $sum;
}

$n = 10;
$sum = sumOdd($n);
echo "Tổng các số lẻ từ 1 đến $n là: " . $sum;

//Câu 29: Tìm số chính phương trong một khoảng cho trước:
function findPerfectSquares($start, $end) {
    $perfectSquares = [];
    for ($i = $start; $i <= $end; $i++) {
        if (sqrt($i) === intval(sqrt($i))) {
            $perfectSquares[] = $i;
        }
    }
    return $perfectSquares;
}

$start = 1;
$end = 20;
$perfectSquares = findPerfectSquares($start, $end);
echo "Các số chính phương trong khoảng từ $start đến $end là: " . implode(", ", $perfectSquares);

//Câu 30: Kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không:
function isSubstring($str, $subStr) {
    if (strpos($str, $subStr) !== false) {
        return true;
    } else {
        return false;
    }
}

$str = "<b>boombaya</b> <i>yeah yeah yeah</i> <b>boombaya</b> <i>yeah yeah yeah</i> <b>boombaya</b> <b><i>BOOMBA</i></b>";
$subStr = "boombayah";
if (isSubstring($str, $subStr)) {
    echo "Chuỗi '$subStr' là chuỗi con của '$str'";
} else {
    echo "Chuỗi '$subStr' không là chuỗi con của '$str'";
}

?>