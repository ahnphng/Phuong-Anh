<?php
$str = "<b>boombaya</b> <i>yeah yeah yeah</i> <b>boombaya</b> <i>yeah yeah yeah</i> <b>boombaya</b> <b><i>BOOMBA</i></b>";
$result = "Chuỗi: " . $str . "<br>";
echo $result;

// Câu 1: Đếm số ký tự sử dụng hàm strlen()
$length = strlen($str);
$result .= "Câu 1: Số ký tự trong chuỗi là: " . $length . "<br>";

// Câu 2: Đếm số từ sử dụng hàm str_word_count()
$wordCount = str_word_count($str);
$result .= "Câu 2: Số từ trong chuỗi là: " . $wordCount . "<br>";

// Câu 3: Đảo ngược chuỗi sử dụng hàm strrev()
$revStr = strrev($str);
$result .= "Câu 3: Chuỗi đảo ngược: " . $revStr . "<br>";

// Câu 4: Tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos()
$searchStr = "yeah yeah yeah";
$searchPosition = strpos($str, $searchStr);
$result .= "Chuỗi con được tìm thấy tại vị trí: " . $searchPosition ."<br>";

// Câu 5: Thay thế một chuỗi con bằng một chuỗi khác sử dụng hàm str_replace()
$replaceStr = "BOOMBAYA";
$newStr = str_replace("boombaya", $replaceStr, $str);
$result .= "Câu 5: Chuỗi mới sau khi thay thế: " . $newStr . "<br>";

// Câu 6: Kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp()
$subStr = "boombayah";
if (strncmp($str, $subStr, strlen($subStr)) === 0) {
    $result .= "Câu 6: Chuỗi \"$str\" bắt đầu bằng chuỗi con \"$subStr\".<br>";
} else {
    $result .= "Câu 6: Chuỗi \"$str\" không bắt đầu bằng chuỗi con \"$subStr\".<br>";
}

// Câu 7: Chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper()
$upperStr = strtoupper($str);
$result .= "Câu 7: Chuyển thành chữ hoa: " . $upperStr . "<br>";

// Câu 8: Chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower()
$lowerStr = strtolower($str);
$result .= "Câu 8: Chuyển thành chữ thường: " . $lowerStr . "<br>";

// Câu 9: Chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords()
$ucwordsStr = ucwords($str);
$result .= "Câu 9: Chuyển thành chữ in hoa chữ cái đầu tiên: " . $ucwordsStr . "<br>";

// Câu 10: Loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim()
$trimStr = trim($str);
$result .= "Câu 10: Loại bỏ khoảng trắng ở đầu và cuối chuỗi: " . $trimStr . "<br>";

// Câu 11: Loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim()
$ltrimStr = ltrim($str);
$result .= "Câu 11: Loại bỏ ký tự đầu tiên của chuỗi: " . $ltrimStr . "<br>";

// Câu 12: Loại bỏ ký tự cuối cùng của chuỗi sử dụng hàm rtrim()
$rtrimStr = rtrim($str);
$result .= "Câu 12: Loại bỏ ký tự cuối cùng của chuỗi: " . $rtrimStr . "<br>";

// Câu 13: Tách chuỗi thành mảng sử dụng hàm explode()
$explodeStr = explode(" ", $str);
$result .= "Câu 13: Mảng sau khi tách chuỗi: " . implode(", ", $explodeStr) . "<br>";

// Câu 14: Nối các phần tử của mảng thành chuỗi sử dụng hàm implode()
$arrayStr = ["b", "o", "o", "m", "b", "a", "y", "a"];
$implodeStr = implode("", $arrayStr);
$result .= "Câu 14: Chuỗi sau khi nối các phần tử của mảng: " . $implodeStr . "<br>";

// Câu 15: Thêm ký tự đệm vào đầu và cuối chuỗi sử dụng hàm str_pad()
$addStr = "yeah yeah yeah yah yah yah";
$padStr = str_pad($str, strlen($str) + strlen($addStr), $addStr, STR_PAD_BOTH);
$result .= "Câu 15: Chuỗi sau khi thêm ký tự đệm: " . $padStr . "<br>";

// Câu 16: Kiểm tra một chuỗi có kết thúc bằng môt chuỗi con khác không sử dụng strrchr()
$endStr = "BOOMBA";
$check = strrchr($str, $endStr);
if ($subStr !== false && $check === substr($str, -strlen($subStr))) {
    $result .= "Câu 16: Chuỗi " .$str ." kết thúc bằng chuỗi con " . $endStr ."<br>";
} else {
    $result .= "Câu 16: Chuỗi " .$str ." không kết thúc bằng chuỗi con " . $endStr ."<br>";
}

//Câu 17: kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr()
$Str = "yeah yeah yeah";
if (strstr($str, $searchStr)) {
    $result .= "Câu 17: Chuỗi \"$str\" chứa chuỗi con \"$Str\".<br>";
} else {
    $result .= "Câu 17: Chuỗi \"$str\" không chứa chuỗi con \"$Str\".<br>";
}
// Câu 18: Thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace()
$pattern = '/[^a-zA-Z0-9]/';
$replacement = '-';
$newString = preg_replace($pattern, $replacement, $str);
$result .= "Câu 18: Chuỗi sau khi thay thế: " . $newString . "<br>";
// Câu 19: Kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng is_int()
$value = 123;
if (is_int($value)) {
    $result .= "Giá trị \"$value\" là một số nguyên.";
} else {
    $result .= "Giá trị \"$value\" không phải số nguyên.";
}
// Câu 20: Kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng filter_var()
$email = "nguyenlank56tmu@gmail.com";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $result .= "Email hợp lệ.";
} else {
    $result .= "Email không hợp lệ.";
}
echo $result;
?>
