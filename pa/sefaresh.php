        
<p>مدیریت سفارشات:</p>
      

<div class="asli">
        <table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <th scope="col">شماره</th>
      <th scope="col">نام</th>
      <th scope="col">نام خانوادگی</th>
      <th scope="col">استان</th>
      <th scope="col">شهر</th>
      <th scope="col">همراه</th>
      <th scope="col">ایمیل</th>
      <th scope="col">شماره تراکنش</th>
      <th scope="col">آدرس</th>
        <th scope="col">جمع کل</th>
    </tr>
<?php
 
      $sql="select * from `sefaresh_tbl` where pardakht=1 ";
      $result=$oop->select($sql,array());
      foreach( $result as $row){
      ?>
          <tr id="<?php echo $row['id'];?>">
      <td  class="id"><?php echo $row['id'];?></td>
      <td><input type="text" value="<?php echo $row['name'];?>"></td>
      <td><?php echo $row['family'];?></td>
     <td><?php echo $row['ostan'];?></td>
    <td><?php echo $row['shahr'];?></td>
    <td><?php echo $row['hamrah'];?></td>
    <td><?php echo $row['email'];?></td>
    
     <td><?php echo $row['idcart'];?></td>
    <td><?php echo $row['address'];?></td>
               <td><?php echo $row['jamekol'];?></td>
      <th scope="col"><i id="edit" class="fa fa-pencil-square-o" aria-hidden="true"><i id="delete" class="fa fa-times-circle" aria-hidden="true"></i></i></th>
    </tr>
      <?php
}
        ?>
  </tbody>
</table>
</div><!--asli-->
<script>
$('.asli #edit').click(function(){
    var id=$(this).parents('tr').find('.id').text();
    alert(id);
    $.ajax({
        url:'ajax.php',
        type:'Post',
        data:{id:id,ajax:"editsefaesh"},
        success:function(data){
           alert(data); 
        }
    })
   
})
    $('.asli #delete').click(function(){
    var id=$(this).parents('tr').find('.id').text();
    $.ajax({
        url:'ajax.php',
        type:'Post',
        data:{id:id,ajax:"deletesefaresh"},
        success:function(data){
           $('.asli #'+id+' ').remove();
        }
    })
   
})
</script>

