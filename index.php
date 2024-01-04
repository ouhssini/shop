<?php
$produits = [
    "p1" => [
        "id" => 1,
        "name" => "Clasic Spring",
        "price" => 250,
        "description" => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions,",
        "image" => "./img/m1.jpg",
    ],
    "p2" => [
        "id" => 2,
        "name" => "Air Force 1",
        "price" => 260,
        "description" => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions,",
        "image" => "./img/m2.jpg",
    ],
    "p3" => [
        "id" => 3,
        "name" => "Love Nona 20",
        "price" => 270,
        "description" => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions,",
        "image" => "./img/m3.jpg",
    ],
    "p4" => [
        "id" => 4,
        "name" => "New Green jacket",
        "price" => 280,
        "description" => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions,",
        "image" => "./img/w1.jpg",
    ],
    "p5" => [
        "id" => 5,
        "name" => "Classic dress",
        "price" => 290,
        "description" => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions,",
        "image" => "./img/w2.jpg",
    ],
    "p6" => [
        "id" => 6,
        "name" => "Spring Collection",
        "price" => 300,
        "description" => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions,",
        "image" => "./img/w3.jpg",
    ],
];
?>
<?php require_once('./include/header.php'); ?>

<div class="container">
    <div class="row">

        <div class="col-md-3">



            <ul class="nav nav-pills nav-stacked">
                <li role="presentation" class="active"><a href="#">Menu</a></li>
                <li role="presentation"><a href="/">Home</a></li>
                <li role="presentation"><a href="#">T-shirts</a></li>
                <li role="presentation"><a href="#">Hoodies</a></li>
            </ul>

            <div id="custom-search-input" style="margin: 15px 0px;">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control" placeholder="Search" />
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </span>
                </div>
            </div>

            <label for="price-range" class="form-label">Price:</label>
            <input type="range" class="form-range" min="0" max="5" id="price-range">

        </div>
        <div class="col-md-9">
            <h1 class="text-primary display-2 fw-bold">Products List</h1>
            <div class="row">

                <?php foreach ($produits as $key => $product) : ?>
                    <div class="col-md-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading text-center"><?= $product["name"] ?></div>
                            <div class="panel-body">
                                <img src="<?= $product["image"] ?>" class="img-fluid" alt="<?= $product["name"] ?>">
                                <div class="prd-info">
                                    <p class="prd-desc" style="color:white;"><?= $product["description"] ?></p>
                                    <i class="fa-regular fa-heart text-primary" style="font-size:30px; cursor:pointer;"></i>
                                </div>
                            </div>
                            <div class="panel-footer text-center">
                                <span><?= $product["price"] ?> $ &ThickSpace;</span>
                                <button type="button" class="add-btn btn btn-primary">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
           <div class="paginations text-center">
           <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>

           </div>
        </div>
    </div>

</div>



<?php require_once('./include/footer.php'); ?>