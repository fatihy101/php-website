<div
    class="row d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2 class="col h3">Galeriye fotoğraf ekle</h2>
</div>

<form id= "image-uploader" method="POST" action="uploadPhoto.php">
    <div class="container">
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
                <img class="my-1 mt-2" id='img-upload' />
            </div>
        </div>
        <button type="submit" class="btn theme-color text-white"><i data-feather="plus"></i> Yükle</button>
    </div>
</form>

<script src="js/uploadFile.js" defer></script>
<script>
    feather.replace()
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