<html>
    <head>
        <title>INVOICE</title>
        <link rel="stylesheet" href="assets/bootstrap.css">
        <script type="text/javascript" src="assets/jquery-3.3.1.slim.min.js"></script>
        <script src="assets/bootstrap.js"></script>
        <style rel="stylesheet">
            .container {
                padding-top : 20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2 class="text-center">INVOICE PELANGGAN</h2>
            <br>
            <a type="button" class="btn btn-secondary mb-3" href="index.php" role="button">Back</a>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form action="create_merk.php" method="post">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                
                <div class="modal-body">
                
                           
                </div>
               
                </div>
            </div>
            </form>
            </div>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Tanggal Trasnsaksi</th>
                    <th>Nama Pelanggan</th>
                    <th>Produk</th>
                    <th>Merk</th>
                    <th>Harga</th>
                </tr>
                <!-- datanya disini -->
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "toko";
                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    $sql = "SELECT id_merk,nama_merk FROM merk";
                   
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) { ?>
                            <tr><td> <?php echo $row["tanggal_transaksi"] ?> 
                            </td><td> <?php echo $row["nama_pelanggan"]; ?> 
                            </td><td> <?php echo $row["nama_produk"]; ?> 
                            </td><td> <?php echo $row["nama_merk"]; ?> 
                            </td><td> <?php echo $row["harga"]; ?> 
                            
                            
                        <?php }
                    } else { ?>
                        <tr><td colspan="5" class="text-center">Data tidak ditemukan</td></tr>
                    <?php }
                    mysqli_close($conn);
                    ?>
            </table>
        </div>
   
</body>
</html>