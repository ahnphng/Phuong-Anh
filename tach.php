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
    echo "Chuỗi '$subStr' là chuỗi con của '$str'";
} else {
    echo "Chuỗi '$subStr' không là chuỗi con của '$str'";
}
?>