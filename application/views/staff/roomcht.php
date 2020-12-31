    
    <div class="contact-profile">
      <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
<!--       <p><?php echo $d->nama;?></p> -->
    </div>

    <div class="messages">
        <ul>
         <?php foreach($isi as $d): ?>
          <?php 
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
