@extends('base')

@section('body')
        <table border="1">

            <tr>
            <th>ID</th>
        <th>Nama</th>
        <th>Telepon</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Action</th>
            </tr>
            
            <?php
foreach($results as $row){
?>
    <tr>
        <td><?php echo $row->data1?></td>
        <td><?php echo $row->data2?></td>
        <td><?php echo $row->data3?></td>
        <td><?php echo $row->data4?></td>
        <td><?php echo $row->data5?></td>
        <td><?php echo $row->data6?></td>
    </tr>
<?php   
}
?>

            <div> 
                <tr>
                    
                </tr>
            </div>
        </table>
        <th><input type="button" value="back" onclick="location.href='/todo'"></th>

@endsection