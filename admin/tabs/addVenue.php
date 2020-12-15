<div class="row d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2 class="col h3">Salon Ekle</h2> <p class="text-muted"><b>Not:</b> Salonu ekledikten sonra <b>Salonları Listele</b> sayfasına gidip sıralamayı unutmayın.</p>
</div>

<iframe width="0" height="0" border="0" name="dummyframe" id="dummyframe" hidden></iframe>

  <div class="container">
        <!--Upload area-->
        <div id="output" class="alert alert-warning" role="alert" style="display: none;"> </div>

        <form id ="articleForm" method="POST" action="VenueDB.php" target="dummyframe" enctype="multipart/form-data">
            <div class="col-md-6">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-btn">
                        <span class="btn theme-color btn-file text-white">

                            Fotoğrafı seç... <input type="file" name= "image" id="imgInp" accept="image/*">

                        </span>
                    </span>
                    <input type="text" class="form-control" id="image-name" readonly>
                </div>
                    <img class= "my-1 mt-2" id='img-upload'/>
                </div>
            </div>
            <div class="col-md-12">
                <input name="post-title" class="form-control-plaintext" style="border: 1px solid #cdcdcd; margin-bottom: 1em;
                font-weight: bold;" placeholder="Salon İsmi" type="text" required></input>

                <!--Summernote-->
                <textarea id="summernote" name="paragraph"></textarea>
            </div>
            <div class="col-md-3 mt-2">
                <button name="publish" class="btn white-text theme-color"> <i data-feather="plus"></i> Ekle</button>
            </div>
            
        </form>
  
  </div>

  <script src="js/addNewPost.js" defer></script>

<script>
    // Summernote + file upload button
    feather.replace()

    $(document).ready( function() {
        $('#summernote').summernote({
            placeholder: 'Salonun detaylarını yazınız...',
            disableDragAndDrop: true,
            tabsize:1,
            height:200,
            lang:'tr-TR',
            toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol']],
            ['height', ['height']]
        ]   
        });
    
	});
</script>

<style>
#post-title{
    border: 1px solid #cdcdcd;
    margin-bottom: 1em;
    font-weight: bold;
}

.btn-file {
position: relative;
overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

#img-upload{
    width: 100%;
}
</style>