<style>
.login-main-wrapper{
  /*background-image: url("<?php bloginfo('template_directory');?>/assets/images/gallery/W9k1.gif"); */
}
.thankyou-wrapper{
  width:100%;
  height:100%;
  margin:auto;
  padding:10px 0px 50px;
}
.thankyou-wrapper h1{
    font: 100px "Fira Sans", sans-serif;
    text-align: center;
    color: #333333;
    margin-bottom: 0px;
}
.thankyou-wrapper p{
  font:26px Arial, Helvetica, sans-serif;
  text-align:center;
  color:#333333;
  padding:5px 10px 10px;
}
.thankyou-wrapper a{
  font:26px Arial, Helvetica, sans-serif;
  text-align:center;
  display:block;
  text-decoration:none;
  width:250px;

  margin:10px auto 0px;
  padding:15px 20px 15px;

    transition: all 0.3s ease 0s;
    line-height: 30px;
    color: #ffffff;
    border-radius: 30px;
    overflow: hidden;
    vertical-align: middle;
    background: #fd4a36;
}
.thankyou-wrapper a:hover{
  font:26px Arial, Helvetica, sans-serif;
  webkit-transition: all .3s ease;
  text-align:center;
  color:#ffffff;
  display:block;
  text-decoration:none;
  width:250px;
  background:#212529;
  margin:10px auto 0px;
  padding:15px 20px 15px;
}
</style>
                     <?php if(isset($_POST['submit-form']))
                    {
                         $to = "asmath3026@gmail.com";
                         $name = $_POST['username'];
                         $email = $_POST['email'];
                         $phone= $_POST['phone'];
                         $subject= $_POST['subject'];
                         $message= $_POST['comment'];
                         $headers= "Qaximum";
    $body .="Name: ".$name."\r\n";
    $body .="Email: ".$email."\r\n";
    $body .="Phone: ".$phone."\r\n";
    $body .="Selection: ".$subject."\r\n";
    $body .="Message: ".$message."\r\n";
  
                 
                        wp_mail($to, $headers, $body);
                        
                        global $wpdb;
                        $sql=$wpdb->insert("contactdetails",array('name'=>$_POST['username'],
                        'email'=>$_POST['email'],
                        'phoneno'=>$_POST['phone'],
                        'selection'=>$_POST['subject'],
                        'message'=>$_POST['comment']));
                        
      

                    }

                    ?>
        <section class="login-main-wrapper">
      <div class="main-container">
          <div class="login-process">
              <div class="login-main-container">
                  <div class="thankyou-wrapper">
                      <h1>Thank You</h1>
                        <p>for contacting us, we will get in touch with you soon... </p>
                        <a href="https://qaximum.baboolsoft.com/">Back to home</a>
                        <div class="clr"></div>
                    </div>
                    <div class="clr"></div>
                </div>
            </div>
            <div class="clr"></div>
        </div>
    </section>


