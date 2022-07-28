<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body style="text-align:center;">
    <style>
        .pishfactor{
            background: #eee;
            border: 1px solid #ccc;
            border-radius:5px;
            height: 550px;
            margin: 0 auto;
            width: 450px;
        }
            
           
         
           
             .pishfactor span label{
                float: right;
                direction: rtl;
                font-family: byekan;
                float: right;
                margin-left: 5px;
                font-size: 20px;
                width: 20%;
                text-align: left;
                line-height: 35px;
            }
       
           
         
            .submit{
                    float: left;
    background: blue;
    color: #fff;
    padding: 5px 10px;
    font-family: byekan;
    border: 0;
    border-radius: 5px;
    width: 120px;
    height: 35px;
    font-weight: bold;
    margin-left: 20px;
                margin-top: 20px;
            }
            .pishfactor span{
                float: right;
                text-align: right;
                font-family: byekan;
                font-size: 15px;
                border-bottom: 1px solid #eee;
                padding:11px 3px;
                text-align: right;
                width: 100%;
                
    line-height: 37px;

            }
            .pishfactor input{
               width: 80px;
    float: right;
    border: 0;
    padding: 3px;
            }
             .pishfactor a{
               
                     line-height: 20px;
    background: blue;
    float: right;
    padding: 0px 12px;
    margin-top: 0px;
    color: #fff;
    border-radius: 5px 0 0 5px;
    height: 21px;
            }
            .pishfactor span label{
            direction: rtl;
                text-align: right;}
              .kharid{
          float: left!important;
    background:#40CA4C;
    color: #fff;
    padding: 5px 10px;
    font-family: byekan;
    border: 0;
    border-radius: 5px;
    width: 120px!important;
    height: 35px;
    font-weight: bold;
    margin-left: 20px;
    margin-top:10px;
            }
    
      

    
    </style>
    <div class="pishfactor">
          
            <span>
            <label >قیمت کل:</label>
            <label id="gheymatkol">1200</label> 
             تومان 
            </span>
            
              <span>
            <label>کد تخفیف:</label>
            <input id="input_bon" type="text"> 
              <a id="sabt_bon" >ثبت</a> 
            </span>
             <span>
            <label>مقدار تخفیف:</label>
            <label id="meghdartakhfif">1000</label> 
             تومان  
            </span>
                <span>
                    <span>
            <label>قیمت نهایی:</label>
            <label id="gheymatnahaee">0</label> 
             تومان  
            </span>
                <span>
            <label >مالیات:</label>
            <label id="maliyat">235000</label> 
              تومان 
            </span>
                <span>
            <label>هزینه پست:</label>
            <label>10000</label> 
              تومان 
            </span>
                 <span>
            <label>جمع:</label>
            <label id="jamekol">15300000</label> 
             تومان  
            </span>
            <a href="request.php" style="padding: 0;background: none;float: left;"><input type="submit" value="پرداخت و تکمیل خرید" class="kharid"></a>
            </div><!-- -->

    
  
    
</body>
</html>