<?php 
require_once("../config.php");
$SQL = "SELECT * FROM ContactUs";
$results = $conn->query($SQL);

?>

<div
    class="row d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2 class="col h3">İletişim Bilgilerini Güncelle</h2>
</div>

<div class="container">
    <table class="table table-borderless mb-5">
        <thead style="background-color: #ededed;">
            <tr>
                <th scope="col">Alan</th>
                <th scope="col">Yazı</th>
                <th scope="col">Görünürlülük</th>
            </tr>
        </thead>
        <tbody>
            <?php while($result = mysqli_fetch_array($results)){ ?>
            <tr>
                <th scope="row"><?php echo $result["cms_name"]; ?></th>
                <td><input type="text" class="header-element-text form-control ml-n3 " placeholder="Gerekli bilgiyi giriniz..."
                        data-field="<?php echo $result["attr_name"]; ?>" value='<?php echo $result["text"];?>'></td>
                <td><input class="form-check-input ml-2" name="visibility" type="checkbox"
                        value='<?php echo $result["attr_name"];?>'' id="defaultCheck1" style="width: 20px; height: 20px;"
                        <?php if($result["visibility"]==1) echo "checked";?>></td>
            </tr>
            <?php } ?>

        </tbody>
    </table>


</div>

<script>
    $(".header-element-text").on('change', function () {
        var data = {
            "element-text-update": "yes",
            "attr_name": $(this).attr("data-field"),
            "text": $(this).val()
        }

        $.post("editContactUsDB.php", data,
            function (data, status) {
                if (data.success == false) {
                    alert("Hata! \nDurum: " + data + status);
                }
            }
        );
    })

    $(".form-check-input").on("click", function () {
        var isVisible;
        if ($(this).is(':checked')) isVisible = 1;
        else isVisible = 0;

        var data = {
            "vis_update": "yes",
            "visibility": isVisible,
            "attr_name": $(this).val()
        }

        $.post("editContactUsDB.php", data,
            function (data, status) {
                if (data.success == false) {
                    alert("Hata! \nDurum: " + data + status);
                }
            }
        );
    })
</script>