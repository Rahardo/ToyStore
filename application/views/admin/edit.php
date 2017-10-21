<h4>Edit Berita</h4>

<form method="POST" action="<?php echo base_url()."index.php/home/editProduct"; ?>">
    <table> 

        <?php foreach($product as $d){ ?>
        
        <div>
            <span style="width: 70px;">Product ID</span>
            <input type="text" name="productID" value="<?php echo $d['productID']; ?>" readonly />
        </div>
        <br>

        <div>
            <span style="width: 70px;">Product Name</span>
            <input type = "text"  name="productName" value="<?php echo $d['productName']; ?>" />
        </div>
        <br>

        <div >
            <span style="width: 70px;">Product Category</span>
            <input type = "text" name="productCategory" value="<?php echo $d['productCategory']; ?>" />
        </div>
        <br>

        <div>
            <span style="width: 70px;">Product Overview</span>
            <input type="text" name="productOverview" value="<?php echo $d['productOverview']; ?>" readonly />
        </div>
        <br>

        <div>
            <span style="width: 70px;">Product Detail</span>
            <input type = "text"  name="productDetail" value="<?php echo $d['productDetail']; ?>" />
        </div>
        <br>

        <div>
            <span style="width: 70px;">Product Cost</span>
            <input type="text" name="productCost" value="<?php echo $d['productCost']; ?>" readonly />
        </div>
        <br>

        <div>
            <span style="width: 70px;">Product Discon</span>
            <input type = "text"  name="productDisc" value="<?php echo $d['productDisc']; ?>" />
        </div>
        <br>

        <div >
            <span style="width: 70px;">Product Fix Cost</span>
            <input type = "text" name="isiBerita" value="<?php echo $d['productFixCost']; ?>" />
        </div>
        <br>

        <?php } ?>

        <input type="submit" name="btnSubmit" value="Simpan" />
    </table>
</form>
