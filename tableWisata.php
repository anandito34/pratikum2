<?php
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$send = curl("http://localhost/pratikumrekayasaweb/getWisata.php");
$data = json_decode($send, TRUE);



// Membuat tabel
echo "<table border='1' cellspacing='0' cellpadding='8' style='width:50%; margin:auto; border-collapse:collapse;'>";
echo "<tr style='font-weight:bold; text-align:center;'>
        <td>KOTA</td>
        <td>LANDMARK</td>
        <td>TARIF</td>
      </tr>";

// Menampilkan isi data ke dalam tabel
foreach($data as $row){
    echo "<tr style='text-align:center;'>
            <td>{$row['kota']}</td>
            <td>{$row['landmark']}</td>
            <td>{$row['tarif']}</td>
          </tr>";
}

echo "</table><br>";
?>
