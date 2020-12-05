<!--Top-->
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2 class="h3">Gelen Mesajlar</h2>
    <div class="btn-toolbar mb-2 mb-md-0" id="test">
    
    <button type="button" class="btn btn-sm btn-outline-secondary mr-2"> 
        <i data-feather="archive"></i> Arşivlenmiş</button>
    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        Bu Hafta
    </button>
    </div>
    
</div>
<!--forms-->

<div id="client-message" class="alert mx-5" role="alert">
    <div class="row">    
        <div class="col align-baseline">
            <h5 style="margin-bottom: -1px;">Ali Koçak</h5>
            <a href="mailto:example@mail.com">example@mail.com</a>
        </div>
    
        <div class="col text-right">
        <small>Tarih: 04/12/2020, 20:20</small>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col">
            <p id="message">
                Aww yeah, you successfully read this important alert message. 
                This example text is going to run a bit longer so that you can see 
                how spacing within an alert works with this kind of content.
            </p>
        </div>
    </div>
    <div class="btn-toolbar align-items-sm-end" role="toolbar" aria-label="Toolbar with button groups">
        <button type="button" class="btn btn-secondary">1</button>
      
    </div>
</div>

<script>
    feather.replace()
</script>