    
    <div class="contact-profile">
      <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
<!--       <p><?php echo $d->nama;?></p> -->
    </div>

    <div class="messages">
        <ul>
         <?php 
         $lastID = 0;
         foreach($isi as $d): ?>
          <?php

            $lastID = $d->id;
           if($d->pengirim == $this->session->userdata('nama')){?>
          <li class="sent">
            <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
            <p><?php echo $d->cht;?></p>
          </li>

          <?php } else {?>
          <li class=" replies">
            <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
            <p><?php echo $d->cht;?></p>
          </li>
          <?php }?>
          <?php endforeach;?>

      </ul>

    </div>

<script>
var lastID = "<?= $lastID; ?>";
$(document).ready(function(e){
  //alert(lastID);
  setTimeout(function(){
    refreshChat();
  }, 1000);
});

function refreshChat(){
  var url = "<?php echo base_url(); ?>Staf_chat/getChat/<?= $nim; ?>/" + lastID + "/1";
  
  $.ajax({
    method: "POST",
    url: url,
    dataType: "json",
    processData: false,
    contentType: false,
    success: function( result ) {
      if(result.length >0){
        $.each(result, function(index, array){
          lastID = array["id"];
          var item  = '<li class="'+array["class"]+'">';
              item += '<img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />';
              item += '<p>'+ array["cht"] +'</p>';
              item += '</li>';

          $(".messages > ul").append(item);
        });
        scrollChatToBottom();
      }
    },
    error: function( result ) {
      alert(JSON.stringify(result) );
    },
    complete: function() {
      setTimeout(function(){
        refreshChat("<?= $lastID; ?>");
      }, 1000);
    }
  });
}

</script>
