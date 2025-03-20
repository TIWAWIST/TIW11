<?php
if ($_FILES["file"]["error"] == 0) {
    $uploadDir = "uploads/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $fileName = basename($_FILES["file"]["name"]);
    $targetFile = $uploadDir . $fileName;

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
        echo "تم رفع الملف بنجاح!";
    } else {
        echo "فشل في رفع الملف.";
    }
} else {
    echo "خطأ في رفع الملف.";
}
?>
