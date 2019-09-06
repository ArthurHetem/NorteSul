<div class="site-blocks-cover overlay"
    style="background-image: url(<?php echo SITE_URL;?>/lib/skins/nortesul/images/canvas/4.jpg);" data-aos="fade"
    data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-10">
                <span class="sub-text">Home > Membros > <strong>Nossas Awards</strong></span>
                <h1><strong>Nossas Awards</strong></h1>
            </div>
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table id="tabledlist" class="table table-striped">
                    <thead>
                        <tr>
                            <th class="quadro roxo">Award</th>
                            <th class="quadro roxo">Descrição</th>
                            <th class="quadro roxo">Imagem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
foreach($awards as $aw)
{
?>
                        <tr id="row<?php echo $aw->awardid;?>">
                            <td align="center"><?php echo $aw->name; ?></td>
                            <td align="center"><?php echo $aw->descrip; ?></td>

                            <td align="center"><img src="<?php echo $aw->image; ?>" width="200px" heihgt="200px" /></td>

                        </tr>
                        <?php
}
?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>