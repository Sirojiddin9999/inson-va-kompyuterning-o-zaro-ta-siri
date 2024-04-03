<?php
// Define your data
$data = array(
    array("Axmoq", "Aktyor", "Musiqa", "Sanat", "Sariq", "Tabiat partireti", "Klasikk", "Kamedia", "Kamedia"),
    array("Dangasa", "Shoir", "Kibir sport", "Musiqa", "Qora", "Qo`rqinchli", "Jaz", "Qo`rqinchli video", "Kamedia"),
    // Add more data here as needed
);

// Define a result set with your data
$result = new ArrayObject($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<table>
            <tr>
                <th>№</th>
                <th>Xarakteri</th>
                <th>Kasbi</th>
                <th>Hobbisi</th>
                <th>Faoliyati</th>
                <th>Rangi</th>
                <th>Shakillar va rasmlar</th>
                <th>Musiqasi</th>
                <th>Videosi</th>
                <th>Gif</th>
            </tr>
       <?php foreach ($result->fetchAll()as$key=>$row){?>
            <tr>
                <th>1</th>
                <th>Axmoq</th>
                <td>Aktyor</td>
                <td>Musiqa</td>
                <td>Sanat</td>
                <td>Sariq</td>
                <td>Tabiat partireti</td>
                <td>Klasikk</td>
                <td>Kamedia</td>
                <td>Kamedia</td>
            </tr>
            <tr>
                <th>2</th>
                <th>Dangasa</th>
                <td>Shoir</td>
                <td>Kibir sport</td>
                <td>Musiqa</td>
                <td>Qora</td>
                <td>Qo`rqinchli </td>
                <td>Jaz</td>
                <td>Qo`rqinchli video</td>
                <td>Kamedia</td>
            </tr>
            <tr>
                <th>3</th>
                <th>Uyantchang</th>
                <td>Hunarmand</td>
                <td>Maxsulot xarid qilish</td>
                <td>Dizayn</td>
                <td>Oq</td>
                <td>Tabiat manzaralari</td>
                <td>klasikk</td>
                <td>To`qima janrlar</td>
                <td>Musiqali</td>
            </tr>
            <tr>
                <th>4</th>
                <th>Ishchan</th>
                <td>Biznesmen</td>
                <td>Sport</td>
                <td>Yangi narsalarni o'rganish 
                    va rivojlantirish</td>
                <td>kul rang</td>
                <td>Raqamlar va statistik</td>
                <td>Kontemplativ</td>
                <td>Moliya va hisob-kitob</td>
                <td>Animatsiya va Harakat</td>
            </tr>
            <tr>
                <th>5</th>
                <th>Qayg`uli</th>
                <td>Grafik Dizayn</td>
                <td>Dizayn</td>
                <td>Rassomlik</td>
                <td>Oq</td>
                <td>Animatsiya</td>
                <td>Pop </td>
                <td>Karyera rivojlantirish</td>
                <td>Animatsion</td>
            </tr>
            <tr>
                <th>6</th>
                <th>Hushchaqchaq</th>
                <td>Dasturlash</td>
                <td>Sayohat qilish</td>
                <td>Ijtimoiy</td>
                <td>Turqoaz</td>
                <td>Harakatli</td>
                <td>Energetik</td>
                <td>Konsertlar</td>
                <td>qiziqarli</td>
            </tr>
            <tr>
                <th>7</th>
                <th>Kuchli</th>
                <td>Muhandislik</td>
                <td>Kitob o`qish</td>
                <td>Rivojlanish</td>
                <td>Qora</td>
                <td>kreativ</td>
                <td>Roc</td>
                <td>Kamediya</td>
                <td>kamediya</td>
            </tr>
            <tr>
                <th>8</th>
                <th>Mehribon</th>
                <td>O`qituvchi</td>
                <td>Musiqa</td>
                <td>Malaka oshirish 
                    kurslari</td>
                <td>Oq</td>
                <td>Tabiy</td>
                <td>Elektronika</td>
                <td>Yangilik</td>
                <td>Kamedia</td>
            </tr>
            <tr>
                <th>9</th>
                <th>Mehnatsevar</th>
                <td>Yuridik</td>
                <td>Sport</td>
                <td>O`quv sohasi</td>
                <td>Qizil</td>
                <td>Tabiat</td>
                <td>Pop</td>
                <td>ta`lim</td>
                <td>Kamedia</td>
            </tr>
            <tr>
                <th>10</th>
                <th>Yovuz</th>
                <td>Rahbarlik</td>
                <td>Sport</td>
                <td>ishonchlilik va 
                    qarshilik qaratishga qodir
                     bo'lgan faoliyatlar </td>
                     <td>Qora</td>
                     <td>Qo`rqinchlik</td>
                     <td>Roc</td>
                     <td>Qo`rqinchli</td>
                     <td>Qo`rqinchli</td>
                     
            </tr>
            <tr>
                <th>11</th>
                <th>Ayyor</th>
                <td>Dasturchilik</td>
                     <td>Kitob o`qish</td>
                     <td>Tanqidchi</td>
                     <td>To`q pushti</td>
                     <td>Giometrik</td>
                     <td>Klassik</td>
                     <td>mantiqiy</td>
                     <td>Kamedia</td>
            </tr>
            <tr>
                <th>12</th>
                <th>Zerikarli</th>
                <td>Yozuvchi</td>
                <td>Kitob o`ish</td>
                <td>Maslahatchi</td>
                <td>Neytral</td>
                <td>Minimalitik</td>
                <td>Klassik</td>
                <td>Ilmiy</td>
                <td>Ilmiy</td>
            </tr>
            <tr>
                <th>13</th>
                <th>Zaif</th>
                <td>Yozuvchi</td>
                <td>Yozuvchi</td>
                <td>San`at</td>
                <td>Oq</td>
                <td>Tabiat</td>
                <td>Klassik</td>
                <td>Ilmiy</td>
                <td>Kamedia</td>
            </tr>
            <tr>
                <th>14</th>
                <th>Aqilli</th>
                <td>Muharrirlik</td>
                <td>Matematika</td>
                <td>Ilmiy tadqiqot</td>
                <td>Oq</td>
                <td>Ilmiy</td>
                <td>Klassik</td>
                <td>Ilmiy</td>
                <td>Kamedia</td>
            </tr>
            <tr>
                <th>15</th>
                <th>Suhbatdosh</th>
                <td>Diplamat</td>
                <td>Sayohat</td>
                <td>Ishbilarmonlik</td>
                <td>Pushti</td>
                <td>Kamedia</td>
                <td>klassik</td>
                <td>Ilmiy</td>
                <td>Kamedia</td>
            </tr>
            <tr>
                <th>16</th>
                <th>Diqqatli</th>
                <td>Muharir</td>
                <td>Kitob o`qish</td>
                <td>Ilmiy tadqiqot</td>
                <td>Oq</td>
                <td>Ilmiy</td>
                <td>klassik</td>
                <td>Ilmiy</td>
                <td>Ilmiy</td>
            </tr>
	   <?php } ?>
        
<?php foreach ($result as $key => $row) { ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <?php foreach ($row as $value) { ?>
                    <td><?php echo $value; ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
