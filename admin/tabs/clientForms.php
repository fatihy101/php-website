<?php 
require_once("../config.php");

// TODO: unarchive
?>
<!--Top-->
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2 class="h3">Gelen Mesajlar</h2>
    <div class="btn-toolbar mb-2 mb-md-0" id="test">

        <button id="refresh_button" type="button" class="btn btn-sm btn-outline-secondary mr-2"> 
            <i data-feather="refresh-cw"></i> Yenile</button>

        <button id="archived_ones_button" type="button" class="btn btn-sm btn-outline-secondary mr-2"> 
            <i data-feather="archive"></i> Arşivlenmiş</button>

        <button id="unreads_button" type="button" class="btn btn-sm btn-outline-secondary mr-2"> 
            <i data-feather="eye-off"></i> Okunmayanlar</button>

        <div class="dropdown">
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" 
            id="date-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i data-feather="calendar"></i>
                Tümü
            </button>
           
        </div>
    </div>
    
</div>

<!--forms-->

<div id="form_list">
    
</div>

    
 


<!--forms-->

<script>
    feather.replace()
    
</script>

<script src="js/clientFormActions.js" defer></script>

