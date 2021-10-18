<html>

<kepala>
    <title > Tampil Data Matakuliah </title >
</kepala>

<tubuh>
    <tengah>
        <tabel>
            <tr>
                <th  colspan =" 3 " >
                    <jam>
                </th>
            </tr>
            <tr>
                <th> Kode MTK </th >
                <th> : </th >
                <td>
                    <?=  $ kode ; ?>
                </td >
            </tr >
            <tr >
                <td> Nama MTK </td >
                <td> : </td >
                <td>
                    <?=  $ nama ; ?>
                </td >
            </tr>
            <tr>
                <td> SKS </td>
                <td> : </td>
                <td>
                    <?=  $ sk ; ?>
                </td>
            </tr>
            <tr>
                <td  colspan =' 3 ' sejajar =" center " >
                    < a  href =" <?=  base_url ( 'matakuliah' );
?> " > Kembali </a>
                </td >
            </tr >
        </tabel >
    </tengah >
</tubuh >

</html >