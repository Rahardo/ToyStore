     <h2>
       PRODUCT LIST
     </h2>
     <a class="rigister" href="<?php echo base_url().'index.php/user_authentication/logout/'?>">LOGOUT <span> </span></a></li>    
      <div>
        <div >
          <table class="product table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Overview</th>
                <th>Detail</th>
                <th>Cost</th>
                <th>Sale</th>
                <th>Sell Cost</th>
                <th>Picture1</th>
                <th>Picture2</th>
                <th>Picture3</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach($product as $row)
              {
                echo '<tr>';
                echo '<td>'.$row['productID'].'</td>';
                echo '<td>'.$row['productName'].'</td>';
                echo '<td>'.$row['productCategory'].'</td>';
                echo '<td>'.$row['productOverview'].'</td>';
                echo '<td>'.$row['productDetail'].'</td>';
                echo '<td>'.$row['productCost'].'</td>';
                echo '<td>'.$row['productDisc'].'%</td>';
                echo '<td>'.$row['productFixCost'].'</td>';
              ?>
                <td> <img src="<?php echo base_url().$row['productPic1']; ?>" width="150" height="150"> </td>
                <td> <img src="<?php echo base_url().$row['productPic2']; ?>" width="150" height="150"> </td>
                <td> <img src="<?php echo base_url().$row['productPic3']; ?>" width="150" height="150"> </td>
              <?php 
                echo '<td class="crud-actions">
                  <a href="'.base_url()."index.php/home/adminadd/".$row['productID'].'" class="btn btn-info"> add <br> </a>  
                  <a href="'.base_url()."index.php/home/adminedit/".$row['productID'].'" class="btn btn-info">edit</a>  
                  <a href="'.base_url()."index.php/home/deleteProduct/".$row['productID'].'" class="btn btn-danger">delete</a>
                </td>';
                echo '</tr>';
              } ?>      
            </tbody>
          </table>

      </div>
    </div>