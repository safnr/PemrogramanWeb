<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Biodata</title>
</head>
<body>
    <form method="POST" action="hasilBiodata.php">
        <table align="center" border="1" cellpadding="0">
            <tr>
                <td align="center">
                    <h2>Form Biodata</h2>
                </td>
            </tr>
            <tr>
                <td>
                <table width="600" align="center" cellpadding="2" cellspacing="2">
                <tr>
                    <td width="180">Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td width="180">Tempat dan Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="tempat" size="15">
                        <select name="tgl" id="tgl">
                            <option name=tgl>Tanggal</option>
                            <option name=tgl>1</option>
                            <option name=tgl>2</option>
                            <option name=tgl>3</option>
                            <option name=tgl>4</option>
                            <option name=tgl>5</option>
                            <option name=tgl>6</option>
                            <option name=tgl>7</option>
                            <option name=tgl>8</option>
                            <option name=tgl>9</option>
                            <option name=tgl>10</option>
                            <option name=tgl>11</option>
                            <option name=tgl>12</option>
                            <option name=tgl>13</option>
                            <option name=tgl>14</option>
                            <option name=tgl>15</option>
                            <option name=tgl>16</option>
                            <option name=tgl>17</option>
                            <option name=tgl>18</option>
                            <option name=tgl>19</option>
                            <option name=tgl>20</option>
                            <option name=tgl>21</option>
                            <option name=tgl>22</option>
                            <option name=tgl>23</option>
                            <option name=tgl>24</option>
                            <option name=tgl>25</option>
                            <option name=tgl>26</option>
                            <option name=tgl>27</option>
                            <option name=tgl>28</option>
                            <option name=tgl>29</option>
                            <option name=tgl>30</option>
                            <option name=tgl>31</option>
                        </select>
                        <select name="bln" id="bln">
                            <option name=bln>Bulan</option>
                            <option name=bln>Januari</option>
                            <option name=bln>Februari</option>
                            <option name=bln>Maret</option>
                            <option name=bln>April</option>
                            <option name=bln>Mei</option>
                            <option name=bln>Juni</option>
                            <option name=bln>Juli</option>
                            <option name=bln>Agustus</option>
                            <option name=bln>September</option>
                            <option name=bln>Oktober</option>
                            <option name=bln>November</option>
                            <option name=bln>Desember</option>
                        </select>
                        <select name="thn" id="thn">
                            <option name=thn>Tahun</option>
                            <option name=thn>1999</option>
                            <option name=thn>2000</option>
                            <option name=thn>2001</option>
                            <option name=thn>2002</option>
                            <option name=thn>2003</option>
                            <option name=thn>2004</option>
                            <option name=thn>2005</option>
                            <option name=thn>2006</option>
                            <option name=thn>2007</option>
                            <option name=thn>2008</option>
                            <option name=thn>2009</option>
                            <option name=thn>2010</option>
                            <option name=thn>2011</option>
                            <option name=thn>2012</option>
                            <option name=thn>2013</option>
                            <option name=thn>2014</option>
                            <option name=thn>2015</option>
                            <option name=thn>2016</option>
                            <option name=thn>2017</option>
                            <option name=thn>2018</option>
                            <option name=thn>2019</option>
                            <option name=thn>2020</option>
                        </select>
                    </td>                                        
                </tr>
                <tr>
                    <td width="180">Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" value="Laki-laki">Laki-laki
                        <input type="radio" name="jk" value="Perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                    <td width="180">Alamat</td>
                    <td>:</td>
                    <td>
                        <textarea rows="5" cols="26" name="alamat" id="alamat"></textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" name="btnLogin" value="Login">
                        <input type="reset" name="reset" value="Reset">
                    </td>
                </tr>
            </table>
                </td>
            </tr>

        </table>
    </form>
</body>
</html>