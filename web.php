<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>Web Page ด้วย PHP (3 Loop + โปรไฟล์ + ติดต่อ)</title>
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
    border-radius: 15px;
    box-shadow: 0px 2px 12px #ccc;
}
h2{
    margin-top: 0;
    color: #333;
}
.profile-box{
    display: flex;
    align-items: flex-start;
    gap: 20px;
    flex-wrap: wrap;
}
.profile-box img{
    width: 150px;
    height: 150px;
    object-fit: cover;
    border-radius: 20px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.2);
    border: 4px solid #fff;
}
.contact{
    margin-top: 15px;
}
.contact a{
    display: flex;
    align-items: center;
    gap: 5px;
    text-decoration: none;
    color: #333;
    margin-bottom: 5px;
}
.contact img{
    width: 24px;
    height: 24px;
}
.loop-container{
    display: flex;
    gap: 10px;
}
.col{
    width: 33%;
    border: 1px solid #000;
    padding: 10px;
    background: #fff;
}
.col h3{
    text-align: center;
    margin: 0 0 10px 0;
}
pre{
    font-size: 18px;
    white-space: pre-wrap;
}
button{
    cursor:pointer;
    padding: 5px 10px;
    margin-bottom: 10px;
}
</style>
</head>
<body>

<?php
$university = "มหาวิทยาลัยราชภัฏอุดรธานี";
$faculty = "คณะวิทยาศาสตร์";
$major = "สาขาเทคโนโลยีสารสนเทศ";
$fullname = "พิมพ์ชนก พันธุ์ภักดีนุพงษ์";
$nickname = "พราว";
$intro = "วาดรูปหารายได้เสริม";
$picture = "pic/praw.jpg"; 

// ข้อมูลติดต่อ
$facebook = "https://www.facebook.com/nong.praw.967";
$instagram = "https://www.instagram.com/direct/t/17842055330127433/";
$email = "nong.praw12345678@gmail.com";

// ไอคอนภาพ (คุณต้องมีไฟล์ไอคอนในโฟลเดอร์ pic/)
$icon_fb = "pic/Fb.jpg";
$icon_ig = "pic/ig.jpg";
$icon_email = "pic/email.jpg";
?>

<!-- หน้าโปรไฟล์ -->
<div id="profile-page" class="card">
    <h2>ข้อมูลนักศึกษา</h2>
    <div class="profile-box">
        <img src="<?= $picture ?>" alt="profile">
        <div>
            <p><b>มหาวิทยาลัย:</b> <?= $university ?></p>
            <p><b>คณะ:</b> <?= $faculty ?></p>
            <p><b>สาขา:</b> <?= $major ?></p>
            <p><b>ชื่อ–นามสกุล:</b> <?= $fullname ?></p>
            <p><b>ชื่อเล่น:</b> <?= $nickname ?></p>
            <p><b>งานอดิเรก:</b> <?= $intro ?></p>

            <!-- ข้อมูลติดต่อ -->
            <div class="contact">
                <a href="<?= $facebook ?>" target="_blank"><img src="<?= $icon_fb ?>" alt="FB"> Facebook</a>
                <a href="<?= $instagram ?>" target="_blank"><img src="<?= $icon_ig ?>" alt="IG"> Instagram</a>
                <a href="mailto:<?= $email ?>"><img src="<?= $icon_email ?>" alt="Email"> <?= $email ?></a>
            </div>

            <button onclick="showPage('loop-page')">กดดูงาน</button>
        </div>
    </div>
</div>

<!-- หน้า Loop -->
<div id="loop-page" class="card" style="display:none;">
    <h2>loop</h2>
    <button onclick="showPage('profile-page')">ย้อนกลับไปหน้าโปรไฟล์</button>
    <div class="loop-container">

        <!-- FOR -->
        <div class="col">
            <h3>Loop FOR</h3>
            <button onclick="toggleVisibility('for-loop')">ดูผลลัพธ์</button>
            <pre id="for-loop" style="display:none;">
<?php
for($i=1;$i<=4;$i++){
    echo str_repeat("*",$i)."\n";
}
for($i=1;$i<=3;$i++){
    echo str_repeat($i." ",4)."\n";
}
for($i=1;$i<=3;$i++){
    echo str_repeat("  ",$i-1).$i."\n";
}
$size=5;
for($r=1;$r<=$size;$r++){
    if($r==1 || $r==$size){
        echo str_repeat("* ",$size)."\n";
    }else{
        echo "* ".str_repeat("  ",$size-2)."* \n";
    }
}
for($i=3;$i>=1;$i--){
    echo str_repeat($i." ",$i)."\n";
}
?>
            </pre>
        </div>

        <!-- WHILE -->
        <div class="col">
            <h3>Loop WHILE</h3>
            <button onclick="toggleVisibility('while-loop')">ดูผลลัพธ์</button>
            <pre id="while-loop" style="display:none;">
<?php
$i=1;
while($i<=4){ echo str_repeat("*",$i)."\n"; $i++; }
$i=1;
while($i<=3){ echo str_repeat($i." ",4)."\n"; $i++; }
$i=1;
while($i<=3){ echo str_repeat("  ",$i-1).$i."\n"; $i++; }
$size=5; $r=1;
while($r<=$size){
    if($r==1 || $r==$size){ echo str_repeat("* ",$size)."\n"; }
    else{ echo "* ".str_repeat("  ",$size-2)."* \n"; }
    $r++;
}
$i=3;
while($i>=1){ echo str_repeat($i." ",$i)."\n"; $i--; }
?>
            </pre>
        </div>

        <!-- DO WHILE -->
        <div class="col">
            <h3>Loop DO WHILE</h3>
            <button onclick="toggleVisibility('do-loop')">ดูผลลัพธ์</button>
            <pre id="do-loop" style="display:none;">
<?php
$i=1; do{ echo str_repeat("*",$i)."\n"; $i++; }while($i<=4);
$i=1; do{ echo str_repeat($i." ",4)."\n"; $i++; }while($i<=3);
$i=1; do{ echo str_repeat("  ",$i-1).$i."\n"; $i++; }while($i<=3);
$size=5; $r=1;
do{
    if($r==1 || $r==$size){ echo str_repeat("* ",$size)."\n"; }
    else{ echo "* ".str_repeat("  ",$size-2)."* \n"; }
    $r++;
}while($r<=$size);
$i=3; do{ echo str_repeat($i." ",$i)."\n"; $i--; }while($i>=1);
?>
            </pre>
        </div>

    </div>
</div>

<script>
function toggleVisibility(id){
    const el = document.getElementById(id);
    el.style.display = (el.style.display === "none") ? "block" : "none";
}

function showPage(pageId){
    document.getElementById('profile-page').style.display = 'none';
    document.getElementById('loop-page').style.display = 'none';
    document.getElementById(pageId).style.display = 'block';
}
</script>

</body>
</html>
