<?php
    
    require('koneksi.php');
   
    
    if (isset($_GET['id_039'])) {

        
        $id = $_GET['id_039'];

    } else {
        
        header('Location:indexs.php');
    }

    
    $sql = "SELECT * FROM tabel_gajil WHERE id_039='$id'";

   
    $mhs = mysqli_query($link, $sql);

    if (mysqli_num_rows($mhs) > 0) {
        
        $data = mysqli_fetch_assoc($mhs);
    }

  
    if (isset($_POST['simpan'])) {
     
        
        $nim    = htmlentities(strip_tags(trim($_POST['txtnim_039'])));
        $nama   = htmlentities(strip_tags(trim($_POST['txtnama_039'])));
        $alamat  = htmlentities(strip_tags(trim($_POST['txtalamat_039'])));
        
        
        
        $sql    = "UPDATE tabel_gajil SET nim_039    ='$nim',
                                         nama_039    ='$nama',
                                         alamat_039  ='$alamat'
                    WHERE id_039='$id'";

        
        if (mysqli_query($link, $sql)) {

        
        header('location:indexs.php');

        } else {

        
        die("Query Error : " . mysqli_error($link));

        }
    }
    
?>

<!DOCTYPE html>
<html>
<head>
    <style >
            body{
            background-image: url(y.jpg);

        }
        label{
            display:block;
            margin-top:25px;

        }

        input {
            display:block;
            background-color: blue;
            margin-left: 50px;
            margin-top:5px;
        }
        textarea{
            background-color: blue;
            margin-left:  50px;
            margin-top:5px;

        }
       
        label{
            margin-left: 50px;
        }
        button{
            display: inline;
            background-color: white;
            margin-top: 30px;
        }
    </style>
    <title>Update</title>
   
</head>
<body>
    
            <h1>Ubah Data</h1>
            <h4>Tambah Data Ganjil</h4>   
        <hr>

        <form action="" method="post">
       
  
                <label for="nim_039">nim_039</label>
                <input type="text" name="txtnim_039" id="nim_039" value="<?php echo $data['id_039'];?>"><br>
           
            
                <label for="nama_039">nama_039</label>
                <input type="text" name="txtnama_039" id="nama_039"  value="<?php echo $data['nama_039'];?>"><br> 

                <label for="alamat_039">alamat_039</label>
                <textarea name="txtalamat_039" rows="5" cols="100"><?php echo $data['alamat_039'];?></textarea><br>
           
            
            <button class="simpan" type="submit" name="simpan" class="btn btn-success">Ubah</button>              


        </form>
   
   
</body>
</html>

