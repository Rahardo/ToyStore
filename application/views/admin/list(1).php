<!DOCTYPE html>
<html>
  <head>
    <title> Admin | Product List </title>
    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <!--load DataTables dan Bootstrap dari CDN-->
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
    </head>
  <body>
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <h1> PRODUCTS LIST </h1>
          <table id="ToyStoreTable" class="table table-striped table bordered table-hover">
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
                <!--<th>Actions</th>-->
                  <?=anchor('home/createProduct', 'Add Product', ['class'=>'btn btn-primary btn-sm'])?>
                </th> 
              </tr>
            </thead>
            <tbody>
             <!-- <?php
              //foreach($product as $row)
              {
               /* echo '<tr>';
                echo '<td>'.$row['productID'].'</td>';
                echo '<td>'.$row['productName'].'</td>';
                echo '<td>'.$row['productCategory'].'</td>';
                echo '<td>'.$row['productOverview'].'</td>';
                echo '<td>'.$row['productDetail'].'</td>';
                echo '<td>'.$row['productCost'].'</td>';
                echo '<td>'.$row['productDisc'].'%</td>';
                echo '<td>'.$row['productFixCost'].'</td>';*/
              ?> -->
              <?php foreach ($product as $row) : ?>
              <tr>
                <td><?=$row->productID?></td>
                <td><?=$row->productName?></td>
                <td><?=$row->productCategory?></td>
                <td><?=$row->productOverview?></td>
                <td><?=$row->productDetail?></td>
                <td><?=$row->productCost?></td>
                <td><?=$row->productDisc?></td>
                <td><?=$row->productFixCost?></td>
                <td> <img src="<?php echo base_url().$row['productPic1']; ?>" width="150" height="150"> </td>
                <td> <img src="<?php echo base_url().$row['productPic2']; ?>" width="150" height="150"> </td>
                <td> <img src="<?php echo base_url().$row['productPic3']; ?>" width="150" height="150"> </td>

                <td> 
                  <?=anchor('home/editProduct/' . $row->productID, 'Edit', ['class'=>'btn btn-default btn-sm'])?>
                  <?=anchor('home/deleteProduct/' . $row->productID, 'Delete', ['class'=>'btn btn-danger btn-sm', 'onclick'=>'return confirm(\'Apakah Anda Yakin?\')'])?>
                  </td>
                </tr>
              <?php endforeach; ?>

              <!--<?php 
                /*echo '<td class="crud-actions">
                  <a href="'.base_url()."index.php/home/adminadd/".$row['productID'].'" class="btn btn-info"> add <br> </a>  
                  <a href="'.base_url()."index.php/home/adminedit/".$row['productID'].'" class="btn btn-info">edit</a>  
                  <a href="'.base_url()."index.php/home/deleteProduct/".$row['productID'].'" class="btn btn-danger">delete</a>
                </td>';
                echo '</tr>'; */
              } ?>  -->   
            </tbody>
          </table>
      </div>
      <div class="col-md-1"></div>
    </div>
    <script>
      $(document).ready(function()
      {
        $('#ToyStoreTable'.DataTable();
      });
    </script>
  </body>
</html>