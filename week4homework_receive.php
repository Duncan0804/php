<html>
<head>
<meta charset="UTF-8">
<title>接收表單數據</title>
</head>
<body>

<h1>接收到的表單數據：</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 檢查是否接收到名稱
    if (!empty($_POST["sName"])) {
        echo "姓名： " . $_POST["sName"] . "<br>";
    } else {
        echo "姓名未填寫。<br>";
    }
    
    // 檢查是否接收到科系
    if (!empty($_POST["sMajor"])) {
        echo "科系： " . $_POST["sMajor"] . "<br>";
    } else {
        echo "科系未填寫。<br>";
    }
    
    // 檢查是否接收到系級
    if (!empty($_POST["sLevel"])) {
        echo "系級： ";
        foreach($_POST["sLevel"] as $level) {
            echo $level . " ";
        }
        echo "<br>";
    } else {
        echo "系級未選擇。<br>";
    }
    
    // 檢查是否接收到性別
    if (!empty($_POST["sGender"])) {
        echo "性別： " . $_POST["sGender"] . "<br>";
    } else {
        echo "性別未選擇。<br>";
    }
    
    // 檢查是否接收到興奮程度
    if (!empty($_POST["rangeInput"])) {
        echo "興奮程度： " . $_POST["rangeInput"] . "<br>";
    } else {
        echo "興奮程度未填寫。<br>";
    }
    
    // 檢查是否接收到生日
    if (!empty($_POST["date"])) {
        echo "生日： " . $_POST["date"] . "<br>";
    } else {
        echo "生日未填寫。<br>";
    }
    
    // 檢查是否接收到飲食備註
    if (!empty($_POST["food"])) {
        echo "飲食備註： ";
        foreach($_POST["food"] as $food) {
            echo $food . " ";
        }
        echo "<br>";
    } else {
        echo "飲食備註未選擇。<br>";
    }
    
    // 檢查是否接收到其他特殊飲食習慣
    if (!empty($_POST["comment"])) {
        echo "其他特殊飲食習慣： " . $_POST["comment"] . "<br>";
    } else {
        echo "其他特殊飲食習慣未填寫。<br>";
    }
    
    // 檢查是否接收到 Email
    if (!empty($_POST["sEmail"])) {
        echo "Email： " . $_POST["sEmail"] . "<br>";
    } else {
        echo "Email未填寫。<br>";
    }
    
    // 檢查是否接收到填寫意見
    if (!empty($_POST["sComment"])) {
        echo "填寫意見： " . $_POST["sComment"] . "<br>";
    } else {
        echo "填寫意見未填寫。<br>";
    }
} else {
    echo "沒有收到來自表單的數據。";
}
?>

</body>
</html>
