<?php
/*
Câu 1: PHP là viết tắt của gì?
=> Đáp án: C. PHP: Hypertext Preprocessor

Câu 2: Để xuất dòng văn bản ra màn hình trong PHP, bạn sử dụng hàm nào?
=> Đáp án: B. echo()

Câu 3: Cách để khai báo một biến kiểu chuỗi trong PHP là gì?
=> Đáp án: A. $string = "Hello, World";

Câu 4: Hàm nào được sử dụng để lấy độ dài của một chuỗi trong PHP?
=> Đáp án: B. strlen()

Câu 5: Để kiểm tra xem một biến có phải là số nguyên hay không, bạn sử dụng hàm nào?
=> Đáp án: B. is_int()
*/





// Bai 1: In ra cac so chan tu 1 den 10

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . ' ';
    }
}


// Bai 2: Kiem tra mot so nguyen co phai la so nguyen to hay khong
$so = 17; // doi gia tri nay de test so khac
var_dump(is_int($so)); // kiem tra kieu du lieu, dung ham hoc o buoi 2

$laSoNguyenTo = true;

if ($so <= 1) {
    $laSoNguyenTo = false;
} else {
    for ($i = 2; $i <= sqrt($so); $i++) {
        if ($so % $i == 0) {
            $laSoNguyenTo = false;
            break;
        }
    }
}

if ($laSoNguyenTo) {
    echo $so . ' là số nguyên tố';
} else {
    echo $so . ' không phải là số nguyên tố';
}


// Bai 3: Ham inHinhChuNhat($chieuRong, $chieuCao)
// In ra hinh chu nhat bang dau sao (*) voi kich thuoc da cho

function inHinhChuNhat($chieuRong, $chieuCao)
{
    for ($hang = 1; $hang <= $chieuCao; $hang++) {
        for ($cot = 1; $cot <= $chieuRong; $cot++) {
            echo '*';
        }
        echo '<br>'; // xuong dong, dung "\n" neu chay tren terminal thay vi trinh duyet
    }
}

// goi ham in hinh chu nhat rong 5, cao 3
inHinhChuNhat(5, 3);