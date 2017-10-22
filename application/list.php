<!DOCTYPE html>
<html>
  <head>
    <title> Admin | Product List </title>
    <!--load JQuery dari CDN-->
    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <!--load DataTables dan Bootstrap dari CDN-->
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
    </head>
  <body><?php $this->load->view('admin/admin_menu')?> 
    <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <h1> PRODUCT LIST </h1>
        <table id="toystoreTable" class="table table-striped table bordered table-hover">    
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
                <th>
                <?=anchor('home/adminadd', 
                        'Add Product', 
                        ['class'=>'btn btn-primary btn-sm'])?></th>
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
                  <a href="'.base_url()."index.php/home/adminedit/".$row['productID'].'" class="btn btn-default btn-sm">Edit</a>  
                  <a href="'.base_url()."index.php/home/deleteProduct/".$row['productID'].'" class="btn btn-danger btn-sm">Delete</a>
                </td>';
                echo '</tr>';
              } ?>      
            </tbody>
          </table>
          </div>
      <div class="col-md-1"></div>
    </div>
    
    <script>
      $(document).ready(function()
      {
           $('#toystoreTable').DataTable();
      });
    </script>
  </body>
</html>
