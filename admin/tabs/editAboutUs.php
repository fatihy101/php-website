<div class=" row d-flex ju,stify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2 class="h3 col"> Hakkımızda Sayfası </h2> 
      
</div>

<div class="jumbotron">
        <div class="container">
                <div class="row">
                        <img src="../images/blog-fullwidth.jpg" width="1140" height="440"></img>
                        <div class="col-md-12 mt-3">
                                <small>Önerilen boyut: <b> 1140x440</b></small>
                                <button class="btn theme-color white-text float-right"> <i data-feather="repeat"></i> Fotoğrafı değiştir</button>
                        </div>
                </div>   
                <div class="row">
                        <div class="col-md-12 mt-5">
                                <textarea name="body" id="summernote"></textarea>
                        </div>
                </div>           
                <button class="btn theme-color white-text float-right mt-1"><i data-feather="check"></i> Güncelle</button>

        </div>
</div>

<script>
        feather.replace()

        $(document).ready( function() {
        $('#summernote').summernote({
                placeholder: 'Hakkımızda yazısını bu boşluğa yazınız...',
                disableDragAndDrop: true,
                tabsize:1,
                height:300,
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