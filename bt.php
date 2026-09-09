<?php
// CÂU 1 C
//CÂU 2 B
//CÂU 3 A
//CÂU 4 B
//CÂU 5 C
?>
<?php
//CÂU 1
for ($i = 1; $i<=10;$i++){
  if ($i % 2 == 0) {
        echo $i . " ";
    }
}
?>
<?php
// câu 2 
$n = 17;
$isPrime = true;
if($n < 2){
   $isPrime = false;
} else {
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

if ($isPrime) {
    echo $n . " la so nguyen to";
} else {
    echo $n . " khong phai la so nguyen to";
}

?>

<?php
//câu 3 
function inHinhChuNhat($chieuRong, $chieuCao){
  for ($i = 1; $i<= $chieuCao; $i++) {
        for ($j = 1; $j <= $chieuRong; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}
echo "Cau 3 <br>"; 
inHinhChuNhat(5,3);
?>

  
