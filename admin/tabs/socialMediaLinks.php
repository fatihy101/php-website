<?php 
require_once("../config.php");
$SQL = "SELECT * FROM SocialMedia";
$results = $conn->query($SQL);

?>

<?php 
require_once("../config.php");
$sql = "SELECT * FROM InstagramPosts";
$insta_posts = $conn->query($sql);

?>

<div class="container">
<table class="table table-borderless">
    <div class="py-1 pt-2 mt-5" style="background-color: #ededed; text-align: center; font-weight: bold;">Sosyal Medya Linkleri  <br><small class="text-muted">Not: Linklerin başına <b> http://</b> veya <b>https://</b> yazmayı unutmayın.</small></div>
    <thead style="background-color: #ededed;">
        <tr>
            <th scope="col">Platform</th>
            <th scope="col">URL</th>
            <th scope="col ">Aktif</th>
        </tr>
    </thead>
    <tbody>
        <?php while($result = mysqli_fetch_array($results))
        { ?>
        <tr>
            <th scope="row"><?php echo $result["platform"];?></th>
            <td><input type="text" class="url-input form-control ml-n3" data-field="<?php echo $result["platform"];?>" name="url" placeholder="url//" value="<?php echo $result["url"]; ?>"></td>
            <td><input class="form-check-input ml-2" name ="visibility" type="checkbox" value="<?php echo $result["platform"];?>"
             id="defaultCheck1" style="width: 20px; height: 20px;" <?php if($result["visibility"]==1) echo "checked";?>></td>
        </tr>
        
      <?php } ?> 
        
    </tbody>
</table>

<table class="table table-borderless mb-5">
    <div class="py-1 pt-2 mt-5" style="background-color: #ededed; text-align: center; font-weight: bold;">Instagram Postları</div>
    <thead style="background-color: #ededed;">
        <tr>
            <th scope="col">#</th>
            <th scope="col">URL</th>
           
        </tr>
    </thead>
    <tbody>
        <?php while($insta_post = mysqli_fetch_array($insta_posts)){ ?>
        <tr>
            <th scope="row"><?php echo $insta_post["id"]; ?></th>
            <td><input type="text" class="instagram-input form-control ml-n3 " placeholder="url//" 
            data-field="<?php echo $insta_post["id"]; ?>" value="<?php echo $insta_post["url"];?>"></td>
           
        </tr>
        <?php } ?>
        
    </tbody>
</table>

</div>

<script>
    feather.replace()

    $(".form-check-input").on("click", function(){
        var isVisible;
        if($(this).is(':checked')) isVisible = 1;
        else isVisible = 0;

        var data = {"vis_update": "yes", "visible": isVisible, "platform": $(this).val()}
    
        $.post("socialMediaDB.php", data,
                function (data, status) {
                    if(data.success == false){
                    alert("Hata! \nDurum: " +data + status);
                }
            }
        );
    })

    $(".url-input").on('change', function(){
        var data = {"url_update": "yes", "platform": $(this).attr("data-field"), "url": $(this).val()}
        $.post("socialMediaDB.php", data,
                function (data, status) {
                    if(data.success == false){
                    alert("Hata! \nDurum: " +data + status);
                }
            }
        );
    })

    $(".instagram-input").on('change', function(){
        var data = {"insta_post_update": "yes", "id": $(this).attr("data-field"), "insta_url": $(this).val()}

        $.post("socialMediaDB.php", data,
                function (data, status) {
                    if(data.success == false){
                    alert("Hata! \nDurum: " +data + status);
                }
            }
        );
    })
</script>