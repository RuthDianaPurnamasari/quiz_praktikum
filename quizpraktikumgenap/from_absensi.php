<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Mahasiswa</title>
</head>
<body>
    <header>
        <h3>Absensi Mahasiswa | POLTEKPOS</h3>
    </header>

    <form action="proses_absensi.php" method="POST">
    <fieldset>
        <p>
            <label for="nama">Nama: </lable>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="npm">NPM: </label>
            <textarea name="npm"></textarea>
        </p>
        <p>
            <label for="jurusan">Jurusan: </label>
            <select name="jurusan">
                <option>D3 Akuntansi</option>
                <option>D3 Manajemen Bisnis</option>
                <option>D3 Manajemen Logistik</option>
                <option>D3 Sistem Informasi</option>
                <option>D3 Teknik Informatika</option>
                <option>D4 Manajemen Bianis</option>
                <option>D4 Akuntansi</option>
                <option>D4 Logistik Bisnis</option>
                <option>D4 Teknik Informatika</option>
                <option>D4 E-Commerce Logistik</option>
            </select>
        </p>
        <p>
            <label for="tanggal">Tanggal: </label>
            <select name="tanggal">
                <option>1</option>    
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
                <option>14</option>
                <option>15</option>
                <option>16</option>
                <option>17</option>
                <option>18</option>
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>22</option>
                <option>23</option>
                <option>24</option>
                <option>25</option>
                <option>26</option>
                <option>27</option>
                <option>28</option>
                <option>29</option>
                <option>30</option>
                <option>31</option>
            </select>
        </p>  
        <p>
            <label for="bulan">Bulan: </label>
            <select name="bulan">
                <option>Januari</option>    
                <option>Februari</option>
                <option>Maret</option>
                <option>April</option>
                <option>Mei</option>
                <option>Juni</option>
                <option>Juli</option>
                <option>Agustud</option>
                <option>September</option>
                <option>Oktober</option>
                <option>November</option>
                <option>Desember</option>
            </select>
        </p>
        <p>
                <input type="submit" value="Absen" name="absensi" />
        </p>
    </fieldset>
    </form>
</body>
</html>