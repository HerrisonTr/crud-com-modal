<script>
        setTimeout(function() {
            var msg = document.getElementById("mytoast");
            msg.parentNode.removeChild(msg);
        }, 3000);
    </script>
    <?php
    if (isset($_GET['msg'])) {
        $msg = $_GET['msg'];
    ?>
        <div id="mytoast" class="my-toast">
            <div class="title-toast">
                <?php echo $msg; ?>
            </div>
        </div>
    <?php     
}
    ?>