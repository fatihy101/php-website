
<div class=" row d-flex ju,stify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2 class="h3 col">Yeni gönderi yayınla</h2>
</div>
<br>
  <div class="container">
        <!--Upload area-->
        <form action="POST">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn theme-color btn-file text-white">
                                Fotoğrafı seç... <input type="file" id="imgInp">
                            </span>
                        </span>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <img class= "my-1 mt-2" id='img-upload'/>
                </div>
            </div>
            <div class="col-md-12">
                <label for="post_title" class="form-label sr-only">Başlık</label>
                <input id="post-title" class="form-control-plaintext" placeholder="Gönderi başlığı" type="text"></input>

                <!--Summernote-->
                <div id="summernote"></div>
            </div>
            <div class="col-md-3 mt-2">
                <button class="btn white-text theme-color">Yayınla</button>
            </div>
            
        </form>
  
  </div>

  <script src="js/uploadFile.js" defer></script>

<script>
    // Summernote + file upload button
    feather.replace()
    $(document).ready( function() {
        $('#summernote').summernote({
            placeholder: 'Gönderinizi buraya yazınız...',
            disableDragAndDrop: true,
            tabsize:2,
            height:200,
            lang:'tr-TR',
            toolbar: [
            ['style', ['bold', 'italic', 'underline']],
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