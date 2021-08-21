<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Hridoy/config.php');

use Bitm\Banner;

$_banner = new Banner();

$banners = $_banner->getActiveBanners();
//var_dump($_banner);
?>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">

        <?php
        $active = 'active';
        foreach ($banners as $banner):
        ?>
        <div class="carousel-item <?=$active?>">
            <img src="<?=$webroot?>/upload/<?=$banner['picture']?>" class="d-block w-100" alt="Slider Image">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>
        <?php
            $active = '';
        endforeach;
        ?>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>