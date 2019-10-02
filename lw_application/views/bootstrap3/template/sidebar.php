<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

?>

<div class="col-xl-3 col-lg-4 col-md-5">
    <div class="panel panel-default">
        <div class="panel-heading" id="Parcourir"> <h5>Parcourir les catégories</h5></div>
        <div class="list-group">
            <a class="list-group-item <?php echo (isset($currentCategory) and ($currentCategory == 0)) ? 'active' : ''; ?>" href="<?php echo site_url('product/'); ?>"><?php echo __('All Products'); ?> <i class="glyphicon glyphicon-arrow-right pull-right"></i></a>
            <?php if(isset($categories)): foreach($categories as $row): ?>
                <a class="list-group-item <?php echo (!empty($currentCategory) and ($currentCategory == $row->id)) ? 'active' : ''; ?>" href="<?php echo site_url('product/category/'.$row->id.'/'.url_title($row->name,"-",true)); ?>"><?php echo $row->name; ?> <i class="glyphicon glyphicon-arrow-right pull-right"></i></a>
            <?php endforeach; endIf; ?>
        </div>

    </div>


    <div class="sidebar-filter mt-50">
        <div class="top-filter-head">Filtre de produits</div>
        <div class="common-filter">
            <div class="head">Marques</div>
            <form action="#">
                <ul>
                    <li class="filter-list"><input class="pixel-radio" type="radio" id="apple" name="brand"><label for="apple">Apple<span>(29)</span></label></li>
                    <li class="filter-list"><input class="pixel-radio" type="radio" id="asus" name="brand"><label for="asus">Asus<span>(29)</span></label></li>
                    <li class="filter-list"><input class="pixel-radio" type="radio" id="gionee" name="brand"><label for="gionee">Gionee<span>(19)</span></label></li>
                    <li class="filter-list"><input class="pixel-radio" type="radio" id="micromax" name="brand"><label for="micromax">Micromax<span>(19)</span></label></li>
                    <li class="filter-list"><input class="pixel-radio" type="radio" id="samsung" name="brand"><label for="samsung">Samsung<span>(19)</span></label></li>
                </ul>
            </form>
        </div>
        <div class="common-filter">
            <div class="head">Couleur</div>
            <form action="#">
                <ul>
                    <li class="filter-list"><input class="pixel-radio" type="radio" id="black" name="color"><label for="black">Noir<span>(29)</span></label></li>
                    <li class="filter-list"><input class="pixel-radio" type="radio" id="blackred" name="color"><label for="blackred">Rouge<span>(19)</span></label></li>
                    <li class="filter-list"><input class="pixel-radio" type="radio" id="gold" name="color"><label for="gold">Argenté<span>(19)</span></label></li>
                    <li class="filter-list"><input class="pixel-radio" type="radio" id="spacegrey" name="color"><label for="spacegrey">Gris<span>(19)</span></label></li>
                </ul>
            </form>
        </div>
        <div class="common-filter">
            <div class="head">Prix</div>
            <div class="price-range-area">
                <div id="price-range"></div>
                <div class="value-wrapper d-flex">
                    <div class="price">Price:</div>
                    <span>Fcfa</span>
                    <div id="lower-value"></div>
                    <div class="to">to</div>
                    <span>Fcfa</span>
                    <div id="upper-value"></div>
                </div>
            </div>
        </div>
    </div>
</div>





















