<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
<section class="content">
    <div class="row">
        <div class="col-lg-12 card">
            <div class="callout callout-info">
                <h4>Iniciando Download</h4>
                <p>Seu download iniciará em alguns segundos. Clique <a href="<?php echo $download->link;?>">aqui</a> para iniciar manualmente.</p>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    var delay=1000; //1 second
    setTimeout(function() {
        window.location = "<?php echo $download->link;?>";
    }, delay);
</script>