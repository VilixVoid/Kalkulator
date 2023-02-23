<!DOCTYPE html>
<html>
<head>
    <title>Tugas Live Session 6</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php 
        if(isset($_POST['hitung'])){
            $bil1    =$_POST['bil1'];
            $bil2    =$_POST['bil2'];
            $operasi=$_POST['operasi'];
        
            switch ($operasi) {
                case 'tambah':
                $hasil = $bil1+$bil2;
                break;
                case 'kurang':
                $hasil = $bil1-$bil2;
                break;
                case 'kali':
                $hasil = $bil1*$bil2;
                break;
                case 'bagi':
                $hasil = $bil1/$bil2;
                break; 
            }
        }
    ?>
    <div class="kalkulator">
        <h4 class="judul">KALKULATOR SEDERHANA</h4>
        <form method="post" action="./"> 
            <input type="text" name="bil1" class="bil" placeholder="Bilangan 1" required/>
            <input type="text" name="bil2" class="bil" placeholder="Bilangan 2" required/>
            <select class="opt" name="operasi">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">x</option>
                <option value="bagi">/</option>
            </select>
            <input type="submit" name="hitung" value="Hitung" class="tombol"/> 
            <a href="./" style="text-decoration:none;"><input type="button" value="Hapus" class="tombol"/></a> 
        </form>
        <?php if(isset($_POST['hitung'])){
        ?>
            <input type="text" value="<?php echo $hasil; ?>" class="hasil"/>
        <?php
        }
        else{
        ?>
            <input type="text" value="0" class="hasil"/>
        <?php
        }
        ?> 
    </div>
</body>

<style>

    body {
    background: #F2F2F2;
    font-family: sans-serif;
}

.kalkulator {
    width: 400px;
    background: #4CAF50;
    padding: 10px 20px 30px 20px;
    border-radius: 5px;
    box-shadow: 0px 10px 10px 0px #D1D1D1;
}

.bil {
    width: 280px;
    margin: 10px;
    border: none;
    font-size: 14pt;
    border-radius: 5px;
    padding: 10px;
}

.opt {
    font-size: 14pt;
    border: none;
    width: 280px;
    margin: 10px;
    border-radius: 5px;
    padding: 10px;
}

.tombol {
    background: #3e8e41;
    margin: 10px;
    border-top: none;
    border-right: none;
    border-left: none;
    border-radius: 5px;
    padding: 10px 20px;
    color: #eee;
    font-size: 15pt;
    border-bottom: 2px solid #fff;
}

.hasil {
    width: 280px;
    margin: 10px;
    border: none;
    font-size: 14pt;
    border-radius: 5px;
    padding: 10px;
    background: #eee;
}

.judul {
    text-align: center;
    color: #eee;
    font-weight: 300px;
}
</style>

</html>