  <script src="ckeditor/ckeditor.js"></script>
    <script src="ckeditor/adapters/jquery.js"></script>
    <script src="ckeditor/ckfinder/ckfinder.js"></script>
<link href="ckeditor/contents.css" rel="stylesheet">
<style>
     .asli input,.asli select,.asli option{
         float: right;
         height: 25px;
         border: 1px solid #aaa;
         text-align: right;
         direction: rtl;
         font-size: 12px;
         color: #777;
     }
       .asli label{
         float: right;
          direction: rtl;
         text-align: left;
         margin:0px 5px;
           width: 131px;
     }
     .asli div{
         float: right;
         width: 100%;
         
     }
     .additem{
       background: #0f0;
        border-radius: 5px;
         direction: rtl;
         float: right;
         font-size: 14px;
         height: 30px;
         line-height: 30px;
         margin: 10px;
         padding: 5px;
     }
    .gallerypro{
        position: relative;
        margin-top: 80px;
    }
    #imggallery{
        position: absolute;
        left: 68px;
        width: 100px;
        height: 100px;
        top: -35px;
    }
    .asli{
        width: 90%;
        height: auto;
        background: #eee;
        float: right;
        margin: 5%;
        padding-bottom: 71px;
    }
   
    .asli h4{
        float: right;
        width: 95%;
        margin-right: 10px;
        color: #777;
    }
</style>
  
        



<p>مدیریت محصولات:</p>
<div class="asli">
 
    <?php 
    if(isset($_GET['add'])){
        if(!isset($_GET['gallery']) and !isset($_GET['vijegi'])){
            $pishnehad='';
                 $name='';
                $valed='';
                 $subvaled='';
            $img='';
                $gheymata='';
                $gheymatb='';
                $bazdid='';
                $color='';
                $emtiaz='';
                $keyfiat='';
                $tozih='';
                $mojood='';
            $edit=0;
            $idmahsool='';
            if(isset($_GET['edit'])){
                $idmahsool=$_GET['idmahsool'];
              $sqledit="select * from mahsool_tbl where id=?;";
                $dataedit=array($idmahsool);
                $resultedit=$oop->select($sqledit,$dataedit);
                $res=$resultedit[0];
                 $pishnehad=$res['pishnehad'];
                 $name=$res['name'];
                $valed=$res['valed'];
                 $subvaled=$res['subvaled'];
                $img=$res['img'];
                $gheymata=$res['gheymata'];
                $gheymatb=$res['gheymatb'];
                $bazdid=$res['bazdid'];
                $color=$res['color'];
                $emtiaz=$res['emtiaz'];
                $keyfiat=$res['keyfiat'];
                $tozih=$res['tozih'];
                $mojood=$res['mojood'];
                $edit=1;
            }
    ?>
       <form action="server.php?server=add&edit=<?php echo $edit?>&idmahsool=<?php echo $idmahsool?>" method="post">
      <div><label>پیشنهاد کالا:</label><input name="pishnehad" type="text" value="<?php echo $pishnehad?>"></div>
     <div><label>نام کالا:</label><input type="text" value="<?php echo $name?>" name="name"></div>
     <div><label>دسته کالا:</label>
    <select id="menu" name="menu">
    <?php
     $sql="select * from `menu_tbl` where valed=0";
        $res=$oop->select($sql,array());
            
        foreach($res as $row){
            $selected='';
            if($row['id']==$valed){
                
                $selected='selected';
            }
            
           echo '<option  value="'.$row['id'].'" '.$selected.'>'.$row['name'].'</option>';
        }
        ?>
         
         
    </select>
    
    </div>
     <div><label>زیر دسته کالا:</label>
        <select id="submenu" name="submenu">
   <option >انتخاب کنید...</option>
         
         
    </select></div>
     <div><label>تصویر کالا:</label>
         <!--<input id="inputurl1" type="text" readonly>
         <input onClick="upload(1)"  type="submit">-->
         <input type="file" name="url" value="<?php echo $img?>">
    </div>
     <div><label>قیمت اولیه کالا:</label><input name="gheymata" type="text" value="<?php echo $gheymata?>"></div>
     <div><label>قیمت نهایی کالا:</label><input name="gheymatb" type="text" value="<?php echo $gheymatb?>"></div>
     <div><label>بازدید کالا:</label><input name="bazdid" type="text" value="<?php echo $bazdid?>"></div>
     <div><label>رنگ کالا:</label><input name="color" type="text" value="<?php echo $color?>"></div>
     <div><label>امتیاز کالا:</label><input name="emtiaz" type="text" value="<?php echo $emtiaz?>"></div>
    <div><label>کیفیت کالا:</label><input name="keyfiat" type="text" value="<?php echo $keyfiat?>"></div>
   <div><label>توضیح کالا:</label><textarea name="tozih" id="tozihat"><?php echo $tozih?></textarea></div>
    <div><label>موجودیت کالا:</label><input name="mojood" type="text" value="<?php echo $mojood?>"></div>
    
    <input type="submit" value="ثبت اطلاعات">
     </form>      
<?php
    }
    else if(isset($_GET['gallery'])){
        $edit=0;
         $idmahsool=$_GET['idmahsool'];
     if(isset($_GET['edit'])){
         $edit=1;
     }?>
    <form action="server.php?server=gallery&edit=<?php echo $edit?>&idmahsool=<?php echo $idmahsool ?>" method="post">
    
    </form>
    <form action="server.php?server=gallery&idmahsool=<?php echo $_GET['idmahsool'] ?>" method="post">
      <div ><a id="addgallery"  class="additem" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i>اضافه کردن تصویر محصول</a>
          
          <input type="submit"  value="ثبت گالری" style="margin: 10px;padding: 10px 0px;line-height: 5px;height: 41px;
          width: 70px;text-align: center;border-radius: 5px;">
         </div>
    <span id="gallery">
    <div id="gallerypro" class="gallerypro"><label>تصویر اولیه کالا:</label>
       
         <input type="file" name="url[]" id="img">
        <img id="imggallery" src="img/indeximg.png"/>
    </div>
   </span>
          </form>
   <?php
    }//gallery
  
      else if(isset($_GET['vijegi'])){?>
    
    <form action="server.php?server=moshakhasat&idmahsool=<?php echo $_GET['idmahsool'] ?>" method="post">
    <p>bakhshe vijegi</p>
    <?php
          $sql="select * from mahsool_tbl where id=? ";
          $data=array($_GET['idmahsool']);
          $res=$oop->select($sql,$data);
          $subvaled=$res[0]['subvaled'];
          
          $sql2="select * from moshakhasat_tbl where submenu=? and parent=0 ";
          $data2=array($subvaled);
          $res2=$oop->select($sql2,$data2);
         foreach($res2 as $row2){
          ?>
    <h4><?php echo $row2['name'];?></h4>
    <?php
          $sql3="select * from moshakhasat_tbl where parent=? ";
          $data3=array($row2['id']);
          $res3=$oop->select($sql3,$data3);
             foreach($res3 as $row3){
             ?>
    <div><label><?php echo $row3['name'];?></label><input name="<?php echo $row3['id'];?>" type="text" value=""></div>
    <?php
         }//moshakhasat
         }
    ?>
        <input type="submit" value="ثبت ویژگی">
        </form>
    <?php
      }//vijegi
          ?>
    
    
    <?php
        }//add
    else{
    ?>
     <div><a id="addgallery"  class="additem" href="dashbord.php?page=mahsool&add"><i class="fa fa-plus-circle" aria-hidden="true"></i>اضافه کردن  محصول</a></div>
            <table width="100%" border="1" cellspacing="0" cellpadding="0">

  <tbody>
    <tr>
        <th scope="col">شماره </th>
      <th scope="col">پیشنهاد </th>
      <th scope="col">نام</th>
      <th scope="col">دسته </th>
      <th scope="col">زیر دسته </th>
      <th scope="col">تصویر</th>
      <th scope="col">قیمت اولیه</th>
      <th scope="col">قیمت نهایی</th>
      <th scope="col">بازدید</th>
      <th scope="col">رنگ</th>
        <th scope="col">امتیاز</th>
        <th scope="col">کیفیت</th>
        <th scope="col">توضیح</th>
        <th scope="col">موجودیت</th>
    </tr>
<?php
 
      $sql="select * from `mahsool_tbl` ";
      $result=$oop->select($sql,array());
      foreach( $result as $row){
         $idmahsool=$row['id'];
      ?>
          <tr id="<?php echo $row['id'];?>">
      <td  class="id"><?php echo $row['id'];?></td>
      
      <td><?php echo $row['pishnehad'];?></td>
      <td><input type="text" value="<?php echo $row['name'];?>"></td>
      <td><?php echo $row['valed'];?></td>
     <td><?php echo $row['subvaled'];?></td>
  <td><img src="<?php echo $row['img'];?>" width="50"></td>
    <td><?php echo $row['gheymata'];?></td>
    <td><?php echo $row['gheymatb'];?></td>
    <td><?php echo $row['bazdid'];?></td>
     <td><?php echo $row['color'];?></td>
    <td><?php echo $row['emtiaz'];?></td>
              <td><?php echo $row['keyfiat'];?></td>
              <td><?php echo $row['tozih'];?></td>
              <td><?php echo $row['mojood'];?></td>
      <th scope="col">
          <a href="dashbord.php?page=mahsool&add&edit&idmahsool=<?php echo $idmahsool?>"><i id="edit" class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
              <i id="delete" class="fa fa-times-circle" aria-hidden="true"></i></th>
    </tr>
      <?php
}
        ?>
  </tbody>
</table>
    <?php
    
    }
    ?>
    
            </div><!--asli-->

<script>
$('#addgallery').click(function(){
    $("#gallery").append('<div id="gallerypro" class="gallerypro"><label>تصویر اولیه کالا:</label><input type="file" name="url[]" id="img"<img id="imggallery" src="img/indeximg.png"/></div>');
    })
    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imggallery').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#img").change(function(){
    readURL(this);
});
</script>
<script>

    $('#tozihat').ckeditor();
/*
    var x='';
    var actupload='';
    function upload(x){
        actupload=x;
        var finder=new CKFinder;
        finder.basePath="../";
        finder.selectActionFunction=setFileFeild;
        finder.popup();
    }//upload
    function setFileFeild(filterurl){
        document.getElementById("inputurl"+actupload+"").value=filterurl;
    }*/
</script>
<script>
    
$('.asli #submenu').click(function(){
  var idmenu=$('.asli #menu').find('option:selected').val();
    //alert(idmenu);
    
    $.post("ajax.php",{idmenu:idmenu,ajax:"submenu"},function(data){
        $('.asli #submenu').empty();
           $('.asli #submenu').append(data);});
})
</script>

<script>
$('.asli #edit').click(function(){
    var id=$(this).parents('tr').find('.id').text();
    $.ajax({
        url:'ajax.php',
        type:'Post',
        data:{id:id,ajax:"editusers"},
        success:function(data){
            
        }
    })
   
})
    $('.asli #delete').click(function(){
    var id=$(this).parents('tr').find('.id').text();
    $.ajax({
        url:'ajax.php',
        type:'Post',
        data:{id:id,ajax:"deleteusers"},
        success:function(data){
           $('.asli #'+id+' ').remove();
        }
    })
   
})
</script>

