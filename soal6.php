<?php
$siswa = [
  ["nama" => "Andi", "nilai" => 85],
  ["nama" => "Budi", "nilai" => 70],
  ["nama" => "Citra", "nilai" => 90],
  ["nama" => "Dina", "nilai" => 78],
  ["nama" => "Eka", "nilai" => 95],
];

$nilai_saja = [85, 70, 90, 78, 95];
$rata = array_sum($nilai_saja) / count($nilai_saja);

echo "<table border='1'><tr><th>Nama</th><th>Nilai</th></tr>";
foreach ($siswa as $s) {
  echo "<tr><td>{$s['nama']}</td><td>{$s['nilai']}</td></tr>";
}
echo "</table>";
echo "Rata-rata: $rata<br>";
echo "Tertinggi: " . max($nilai_saja) . "<br>";
echo "Terendah: " . min($nilai_saja);
?>

