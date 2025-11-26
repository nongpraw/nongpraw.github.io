<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Web Page ด้วย PHP</title>

    <style>
        body{
            font-family: "TH Sarabun New", sans-serif;
            background: #f3f3f3;
            padding: 20px;
        }
        .card{
            background: white;
            padding: 20px;
            margin-bottom: 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #ccc;
        }
        h2{
            margin-top: 0;
            color: #333;
        }
        pre{
            background: #222;
            color: white;
            padding: 15px;
            border-radius: 10px;
            font-size: 18px;
        }
    </style>
</head>

<body>

<?php

$university = "มหาวิทยาลัยราชภัฏอุดรธานี";
$faculty = "คณะวิทยาศาสตร์";
$major = "สาขาเทคโนโลยีสารสนเทศ";
$name = "นางสาวพิมพ์ชนก พันธุ์ภักดีนุพงษ์";
$name = "ชื่อเล่น พราว";
$intro = "ชอบออกแบบ";
?>

<div class="card">
    <h2>ข้อมูลนักศึกษา</h2>
    <p><b>มหาวิทยาลัย:</b> <?= $university ?></p>
    <p><b>คณะ:</b> <?= $faculty ?></p>
    <p><b>สาขา:</b> <?= $major ?></p>
    <p><b>ชื่อนักศึกษา:</b> <?= $name ?></p>
    <p><b>แนะนำตัว:</b> <?= $intro ?></p>
</div>

<div class="card">
    <h2>ลูปแสดงรูปแบบต่าง ๆ</h2>

    <pre>
<?php
// =========================
// รูปที่ 1: ใช้ for
// =========================
echo "ใช้ Loop: for\n";
for($i=1; $i<=4; $i++){
    echo str_repeat("*", $i) . "\n";
}

// =========================
// รูปที่ 2: ใช้ while
// =========================
echo "\nใช้ Loop: while\n";
$line = 1;
while($line <= 3){
    echo $line." ".$line." ".$line." ".$line."\n";
    $line++;
}

// =========================
// รูปที่ 3: ใช้ do-while
// =========================
echo "\nใช้ Loop: do-while\n";
$n = 1;
do{
    echo str_repeat($n." ", $n) . "\n";
    $n++;
}while($n <= 3);

// =========================
// รูปที่ 4: กรอบ * และตัวเลข
// =========================
echo "\nใช้ Loop: for\n";
$h = 5; // ความสูง

for($i=1; $i <= $h; $i++){
    if($i == 1 || $i == $h){
        echo "* * * * * *\n";
    } else {
        $num = $i - 1;
        echo "* $num $num $num $num *\n";
    }
}

// =========================
// รูปที่ 5: ตัวเลขลดลง
// =========================
echo "\nใช้ Loop: while\n";
$x = 3;
while($x >= 1){
    echo str_repeat($x." ", $x)."\n";
    $x--;
}

?>
    </pre>
</div>

</body>
</html>
