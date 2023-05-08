<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./aset/data.css">
    <title>Document</title>
</head>
<body>
    <div class="filter">

    </div>
    <?php
    include 'koneksi.php';
    if(isset($_POST['filter'])){
        $mulai = $_POST['mulai'];
        $akhir = $_POST['akhir'];
        echo "dari tanggal".$mulai."sampai tanggal".$akhir;

    }
    ?>
    <table>
        <tr>
        <div class="row mt-4">
        <div class="col">
            
            <form method="post" class="form-inline">
                <td>
                <input type="date" name="mulai" class="form-control ml-3">
                </td>
            <td>
                <input type="date" name="akhir" class="form-control">
            </td>
            <td colspan="2">   
                <button type="submit" name="filter" class="btn btn-info">cari</button>
            </td>
            </form>

        </div>

    </div>
    <?php
    include 'koneksi.php';
    if(isset($_POST['filter'])){
        $mulai = $_POST['mulai'];
        $akhir = $_POST['akhir'];
        include 'koneksi.php';
        $ambildata = mysqli_query($koneksi,"select * from waktu where tanggal BETWEEN '$mulai' AND  '$akhir'");
    }else{
        $ambildata =  mysqli_query($koneksi,"select * from waktu");
    }
       
    ?>
        </tr>
        <tr>
            <th>id</th>
            <th>username</th>
            <th>hari</th>
            <th>waktu</th>
        </tr>
        <?php 
                    include 'koneksi.php';
                    
                 
                    while($no  = mysqli_fetch_array($ambildata)){
                        
                        ?>
                        <tr>
                        <td><?php echo $no['id']?></td>
                        <td><?php echo $no['username']?></td>
                        <td><?php echo $no['hari']?></td>
                        <td><?php echo $no['tanggal']?></td>
                <?php
                    }
                ?>
    </table>
    
</body>
</html>