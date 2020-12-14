<?php 
require_once("../config.php");
$SQL = "SELECT * FROM AboutUs";
$result = mysqli_fetch_array($conn->query($SQL));
?>

<div class=" row d-flex ju,stify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2 class="h3 col"> Hakkımızda Sayfası </h2>
</div>

<iframe width="0" height="0" border="0" name="dummyframe" id="dummyframe" hidden></iframe>

<div class="jumbotron">
        <div class="container">
                <form id="imageUpload" method="POST" action="aboutUsDB.php" target="dummyframe" enctype="multipart/form-data">
                        <div class="row">
                                <img src="<?php echo $result["photo"]; ?>" width="1140" height="440"></img>
                                <div class="col-md-12 mt-3">
                                        <small>Önerilen boyut: <b> 1140x440 </small>
                                        <span class="btn theme-color btn-file text-white float-right">
                                                <i data-feather="refresh-cw"></i>
                                                Değiştir <input id="image-input" type="file" name="image" accept="image/*">
                                        </span>
                                </div>
                        </div>
                </form>
                <form id="updateForm" method="POST" action="aboutUsDB.php" target="dummyframe">
                        <div class="row">
                                <div class="col-md-12 mt-5">
                                        <textarea name="body" id="summernote"></textarea>
                                </div>
                        </div>
                        <button id="update_paragraph" name="update" class="btn theme-color white-text float-right mt-1"><i data-feather="check"></i>
                                Güncelle</button>
                </form>
        </div>
</div>

<script>
        feather.replace()

        $(document).ready(function () {
                var oldText = '<?php echo ltrim($result["paragraph"]); ?>'
                        
                $('#summernote').summernote({
                        placeholder: 'Hakkımızda yazısını bu boşluğa yazınız...',
                        disableDragAndDrop: true,
                        tabsize: 1,
                        height: 300,
                        lang: 'tr-TR',
                        toolbar: [
                                ['style', ['bold', 'italic', 'underline', 'clear']],
                                ['fontsize', ['fontsize']],
                                ['color', ['color']],
                                ['para', ['ul', 'ol']],
                                ['height', ['height']]
                        ]
                }, oldText);
                $('#summernote').summernote('editor.pasteHTML', oldText);
               
        });
        

        $('#image-input').on('change', function(){
                
                var parent = $(this).parents("form")
                
                parent.submit()
                parent.slideUp(1500, function() {
                $('#main').load("tabs/editAboutUs.php")
                })
        })
        
        $('#updateForm').on('submit', function(){
                
                $(this).slideUp(1500, function() {
                $('#main').load("tabs/editAboutUs.php")
                })
        })

</script>

<style>

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

</style>
