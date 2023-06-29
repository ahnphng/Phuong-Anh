//Create
<?php
$server_name = "localhost";
$user_name = "root";
$password = "12345678";
$database_name = "BTB4";

// Kết nối với MySQL Server
$db_handle = mysqli_connect($server_name, $user_name, $password, $database_name);

// Kiểm tra kết nối
if (!$db_handle) {
    die("Kết nối không thành công: " . mysqli_connect_error());
} else {
    echo "Kết nối thành công!";
}

// Dữ liệu cần thêm vào bảng
$full_name = "Phuong Anh";
$email = "pgah1422@gmail.com";
$age = 22;

// Tạo câu truy vấn INSERT
$query = "INSERT INTO users (full_name, email, age) VALUES ('$full_name', '$email', '$age')";

// Thực thi câu truy vấn
if (mysqli_query($db_handle, $query)) {
    echo "Thêm dữ liệu thành công";
} else {
    echo "Lỗi: " . mysqli_error($db_handle);
}

// Đóng kết nối
mysqli_close($db_handle);
?>





//Update
<?php
$server_name = "localhost";
$user_name = "root";
$password = "12345678";
$database_name = "BTB4";

// Kết nối với MySQL Server
$db_handle = mysqli_connect($server_name, $user_name, $password, $database_name);

// Kiểm tra kết nối
if (!$db_handle) {
    die("Kết nối không thành công: " . mysqli_connect_error());
}

// Dữ liệu cần cập nhật
$user_id = 1;
$new_email = "newemail@example.com";

// Tạo câu truy vấn UPDATE
$query = "UPDATE users SET email='$new_email' WHERE id=$user_id";

// Thực thi câu truy vấn
if (mysqli_query($db_handle, $query)) {
    echo "Cập nhật dữ liệu thành công";
} else {
    echo "Lỗi: " . mysqli_error($db_handle);
}

// Đóng kết nối
mysqli_close($db_handle);
?>



//Delete
<?php
$server_name = "localhost";
$user_name = "root";
$password = "12345678";
$database_name = "BTB4";

// Kết nối với MySQL Server
$db_handle = mysqli_connect($server_name, $user_name, $password, $database_name);

// Kiểm tra kết nối
if (!$db_handle) {
    die("Kết nối không thành công: " . mysqli_connect_error());
}

// ID của dữ liệu cần xoá
$user_id = 1;

// Tạo câu truy vấn DELETE
$query = "DELETE FROM users WHERE id=$user_id";

// Thực thi câu truy vấn
if (mysqli_query($db_handle, $query)) {
    echo "Xoá dữ liệu thành công";
} else {
    echo "Lỗi: " . mysqli_error($db_handle);
}

// Đóng kết nối
mysqli_close($db_handle);
?>




//Read
<?php
$server_name = "localhost";
$user_name = "root";
$password = "12345678";
$database_name = "BTB4";

// Kết nối với MySQL Server
$db_handle = mysqli_connect($server_name, $user_name, $password, $database_name);

// Kiểm tra kết nối
if (!$db_handle) {
    die("Kết nối không thành công: " . mysqli_connect_error());
}

// Tạo câu truy vấn SELECT
$query = "SELECT * FROM users";

// Thực thi câu truy vấn
$result = mysqli_query($db_handle, $query);

// Kiểm tra và hiển thị dữ liệu
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo 'ID: ' . $row['id'] . '<br>';
        echo 'Full Name: ' . $row['full_name'] . '<br>';
        echo 'Email: ' . $row['email'] . '<br>';
        echo 'Age: ' . $row['age'] . '<br><br>';
    }
} else {
    echo "Không có dữ liệu";
}

// Đóng kết nối
mysqli_close($db_handle);
?>
