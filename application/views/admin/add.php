<form method="POST" action="<?php echo base_url()."index.php/home/createProduct"; ?> " enctype="multipart/form-data">
    <div>  
        <h4>Tambah Data</h4> 
          <div>
              <span class="input-group-addon" id="basic-addon1" style="width: 70px;">Product ID</span>
              <input type = "text" name = "productID" >
          </div>
          <br>
          <div >
              <span id="basic-addon1" style="width: 70px;">Product Name</span>
              <input type = "text" name = "productName" >
          </div>
          <br>
            <div  >
              <span class="input-group-addon" style="width: 70px;">Product Category</span>
              <input type = "text" name = "productCategory"  >
          </div>
          <br>
           <div>
              <span class="input-group-addon" id="basic-addon1" style="width: 70px;">Product Overview</span>
              <input type = "text" name = "productOverview" >
          </div>
          <br>
          <div >
              <span id="basic-addon1" style="width: 70px;">Product Detail</span>
              <input type = "text" name = "productDetail" >
          </div>
          <br>
            <div  >
              <span class="input-group-addon" id="basic-addon1" style="width: 70px;">Product Cost</span>
              <input type = "text" name = "productCost"  >
          </div>
          <br>
           <div>
              <span class="input-group-addon" id="basic-addon1" style="width: 70px;">Product Discon</span>
              <input type = "text" name = "productDisc" >
          </div>
          <br>
          <div >
              <span id="basic-addon1" style="width: 70px;">Product Fix Cost</span>
              <input type = "text" name = "productFixCost" >
          </div>
          <br>
            
          <td>Gambar</td>
            <table class="table-responsive">
                <tr>
                    <input type="hidden" name="size" value="100000">
                    <div>
                        <input type="file" name="productPic1">
                    </div>
                </tr>
                <br>
                <tr>
                    <input type="hidden" name="size" value="100000">
                    <div>
                        <input type="file" name="productPic2">
                    </div>
                </tr>
                <br>
                <tr>
                    <input type="hidden" name="size" value="100000">
                    <div>
                        <input type="file" name="productPic3">
                    </div>
                </tr>
                <br>
            </table>

          <td>
              <input type = "submit" name = "btnSubmit" value="Simpan" />
          </td>
    </div>
</form>


