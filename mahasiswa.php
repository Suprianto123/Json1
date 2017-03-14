<?php
$json_data=file_get_contents("mahasiswa.json");
$obj = json_decode($json_data);
echo "Nim : "; echo $obj->nim;
echo "<br>";
echo "Nama : ";echo $obj->nama;
echo "<br>";
echo "alamat: ";echo $obj->alamat;
echo "<br>";
echo "No_Hp: ";echo $obj->No_Hp;
echo "<br>";
echo "Mata_Kuliah: ";echo $obj->Mata_Kuliah[0];;
echo "<br>";
echo "Mata_Kuliah: ";echo $obj->Mata_Kuliah[1];;
echo "<br>";
echo "Mata_Kuliah: ";echo $obj->Mata_Kuliah[2];;
?>