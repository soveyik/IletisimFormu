<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta hhtp-equiv ="Content-Type" content="text/html; chatset=uft-8">
    <meta hhtp-equiv ="Content-Language" content="tr">
    <meta chatset="uft-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ILETSIM FORMU</title>
    <style>
        input{ /*input alanlarını düzenle demek */
            width: 100%;
            height: 15px;
            margin: 0; /*dıs genişlik */
            padding: 5px 10px 5px 10px; /*iç genişlik */
        }
        .TextAreaAlani{
            width: 100%;
            height: 50px;
            margin: 0; 
            padding: 5px 10px 5px 10px; /*iç genişlik*/

        }
        .GonderButonu{
            height: 30px;
            margin: 0; 
            padding: 5px 30px 5px 30px; /*iç genişlik*/
            border: 1px solid #009900;
            background: #00FF00;
            color: #FFFFFF;

        }
        .GonderButonu:hover{ /*mouse butonnun üstune gelirse */
            border: 1px solid #000000;
            background: #00FF00;
            color: #000000;
            cursor: pointer; /*mouse imleci oktan parmağa döndü */

        }

    </style>
</head>
<body>
    <form action="sonuc.php"method = "post">
        <table width ="500"  aling="center" cellpadding="0" cellspacing="0">
            <tr>
                <td width = "150" height = "30">Adınız Soyadınız</td>
                <td width ="20" height ="30">:</td>
                <td width ="330" height ="30"><input type="text" class ="InputAlani"name = "adisoyadi"></td>

            </tr>
            <tr>
                <td width = "150" height = "30">Telefon Numaranız</td>
                <td width ="20" height ="30" >:</td>
                <td width ="330" height ="30"><input type="text" class ="InputAlani" name = "telefon"></td>

            </tr>
            <tr>
                <td width = "150" height = "30" >Email adresiniz</td>
                <td width ="20" height ="30">:</td>
                <td width ="330" height ="30"><input type="text" class ="InputAlani" name = "email"></td>

            </tr>
            <tr>
                <td width = "150" height = "30">Konu</td>
                <td width ="20" height ="30">:</td>
                <td width ="330" height ="30"><input type="text" class ="InputAlani" name = "konu"></td>

            </tr>
            <tr>
                <td width = "150" height = "30" valing="top" >Mesaj</td>
                <td width ="20" height ="30" valing="top">:</td>
                <td width ="330" height ="30"><textarea class="TextAreaAlani" name = "mesaj"></td>

            </tr>
            <tr>
                <td width ="150" height="30">&nbsp;</td>
                <td width ="20" height="30">&nbsp;</td>
                <td width ="330" height="30" aling="right"><input type ="submit" class="GonderButonu" value = "Gönder"></td>

            </tr>
        </table>
    </form>
</body>
</html>