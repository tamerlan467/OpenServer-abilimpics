<?php
/**
 * Plugin Name: send
 * Author: Tamerlan Zhargasov
 * Description: Плагин обратной связи

 */

add_shortcode('send','me');
function me() {
    $form_send = ' 
    <div class="aside_section border-t-2 border-b-2 py-1.5">
    <form id="reg" action="" method="post" class="flex flex-col items-center space-y-2">
        <h2>Форма отправки</h2>
        <input type="text" name="fam" placeholder="Имя">
        <input type="text" name="email" placeholder="E-MAIL">
        <input type="tel" name="phone" placeholder="Номер"> 
        <label style="text-align:center;">Способ получения сообщений: почта, SMS, WhatsApp сообщение;</label>
        <label style="text-align:center;" for="email">Email</label><input type="radio" id="email" name="radio" value="EMAIL">    
        <label style="text-align:center;" for="sms">SMS</label><input type="radio" id="sms" value="SMS" name="radio">
        <label style="text-align:center;" for="whatsapp">WhatsApp</label> <input  type="radio" id="whatsapp"name="radio" value="WhatsApp" >
           
        
       
        <label style="margin-left: 10px;"for="send">Сообщение</label>
        <textarea  style="height:100px;"placeholder="Сообщение" id="send" name="send"></textarea>
        <input class="cursor-pointer" type="submit" placeholder="Отправить" id="enter">
    </form>
</div>
<dialog>
   <div style="    display: flex;
   align-items: center;
   justify-content: space-between;width:400px;" class="dialogdiv">
   <h3 style="text-align: center;">Ваше сообщение отправлено</h3>
   <p id="close">X</p>
   </div>
   </dialog>
   <script>  const openBtn = document.querySelector("#enter")
   const closeBtn  = document.querySelector("#close")
   const dialog  = document.querySelector("dialog")
   var input  = document.querySelectorAll("input")
   openBtn.onclick = () => dialog.showModal()
   closeBtn.onclick = () => dialog.close()
   </script>
    ';
    echo $form_send;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $mysqli = new mysqli('localhost','quadra','12345','send');

        $phone1 = $_POST['phone'];
        $email1 = $_POST['email'];
        $name1 = $_POST['fam'];
        $send1 = $_POST['send'];
        $radio1 = $_POST['radio'];
        $mysqli -> query("INSERT INTO `send me`(`phone`, `email`, `name`, `send`, `button`) VALUES ('$phone1','$email1','$name1','$send1','$radio1')");
     }
  }
  add_action("admin_menu","admin_page1");
  function admin_page1(){
     add_menu_page("Заявка","Заявка","4",__FILE__,"main3");
  }
  function main3() {
    $mysqli = new mysqli('localhost','quadra','12345','send');
    $pages = 'SELECT  * FROM `send me` ';  
  
     if($rose = $mysqli->query($pages)) {
         echo "<table border='1' width='100%' cellpadding='12'>";
         echo "<tr>";
  echo "<th>Удалить</th>";
  echo "<th>Номер телефона</th>";
  echo "<th>Email</th>";
  echo "<th>Имя</th>";
  echo "<th>Сообщение</th>";
  echo "<th>Способ отправки</th>";
             echo "</tr>";
  
             foreach ($rose as $page) {
                 echo "<tr>";
                 echo "<th> <form method='POST'>
                 <input type='hidden' name= 'id' value=" . $page['id'] . ">
                 <input type='submit' name='na' value='Нажмите'>
          
                </form>
                </th>";
                echo "<th>".$page['phone']."</th>";
                echo "<th>".$page['email']."</th>";    
                 echo "<th>".$page['name']."</th>";    
                  echo "<th>".$page['send']."</th>";
                    echo "<th>".$page['button']."</th>";
                 echo "</tr>";
             }
             echo "</table>";
             
             foreach ($rose as $page) {
                 if( isset( $_POST["na"] ) ) {
                 
                 $mysqli->query('DELETE FROM `send me` WHERE id = "'.$_POST["id"] .'"');
                     echo "<script>window.location.reload();</script>";
        
                 }
             }
         
           
            
             }
     
     
  
  }


?>