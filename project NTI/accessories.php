<?php
include_once("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <title>Document</title>
</head>
<body>
  <?php
$accessories = [
    // Headphones
    [
        "category" => "Headphones",
        "name" => "Sony WH-1000XM5",
        "img" => "images/11.PNG",
        "feature1" => "Over-Ear Wireless",
        "feature2" => "30 hours",
        "feature3" => "Bluetooth 5.2",
        "feature4" => "Active Noise Cancelling",
        "price" => 349
    ],
    [
        "category" => "Headphones",
        "name" => "Bose QuietComfort 45",
        "img" => "images/10.PNG",
        "feature1" => "Over-Ear Wireless",
        "feature2" => "24 hours",
        "feature3" => "Bluetooth 5.1",
        "feature4" => "Active Noise Cancelling",
        "price" => 329
    ],
    [
        "category" => "Headphones",
        "name" => "Apple AirPods Pro 2",
        "img" => "images/9.PNG",
        "feature1" => "In-Ear True Wireless",
        "feature2" => "6 hours (30 w/ case)",
        "feature3" => "Bluetooth 5.3",
        "feature4" => "Active Noise Cancelling",
        "price" => 249
    ],
    [
        "category" => "Headphones",
        "name" => "JBL Tune 760NC",
        "img" => "images/8.PNG",
        "feature1" => "Over-Ear Wireless",
        "feature2" => "35 hours",
        "feature3" => "Bluetooth 5.0",
        "feature4" => "Active Noise Cancelling",
        "price" => 129
    ],

    // Smartwatches
    [
        "category" => "Smartwatches",
        "name" => "Apple Watch Series 9",
        "img" => "images/7.PNG",
        "feature1" => "1.9\" Retina LTPO OLED",
        "feature2" => "18 hours",
        "feature3" => "iOS",
        "feature4" => "GPS, ECG, Blood Oxygen",
        "price" => 399
    ],
    [
        "category" => "Smartwatches",
        "name" => "Samsung Galaxy Watch 6",
        "img" => "images/6.PNG",
        "feature1" => "1.5\" Super AMOLED",
        "feature2" => "40 hours",
        "feature3" => "Android",
        "feature4" => "GPS, ECG, Sleep Tracking",
        "price" => 329
    ],
    [
        "category" => "Smartwatches",
        "name" => "Garmin Venu 3",
        "img" => "images/5.PNG",
        "feature1" => "1.4\" AMOLED",
        "feature2" => "14 days",
        "feature3" => "Android / iOS",
        "feature4" => "GPS, Heart Rate, Sports Modes",
        "price" => 449
    ],
    [
        "category" => "Smartwatches",
        "name" => "Xiaomi Mi Watch",
        "img" => "images/4.PNG",
        "feature1" => "1.39\" AMOLED",
        "feature2" => "16 days",
        "feature3" => "Android / iOS",
        "feature4" => "GPS, Heart Rate, 117 Sport Modes",
        "price" => 129
    ],

    // Cameras
    [
        "category" => "Cameras",
        "name" => "Canon EOS R50",
        "img" => "images/3.PNG",
        "feature1" => "24.2MP APS-C",
        "feature2" => "6000 x 4000",
        "feature3" => "18-45mm Kit Lens",
        "feature4" => "4K 30fps",
        "price" => 679
    ],
    [
        "category" => "Cameras",
        "name" => "Sony Alpha a6400",
        "img" => "images/2.PNG",
        "feature1" => "24.2MP APS-C",
        "feature2" => "6000 x 4000",
        "feature3" => "Interchangeable E-Mount",
        "feature4" => "4K 30fps",
        "price" => 899
    ],
    [
        "category" => "Cameras",
        "name" => "Nikon Z50",
        "img" => "images/1.PNG",
        "feature1" => "20.9MP APS-C",
        "feature2" => "5568 x 3712",
        "feature3" => "16-50mm Kit Lens",
        "feature4" => "4K 30fps",
        "price" => 799
    ],
    [
        "category" => "Cameras",
        "name" => "GoPro HERO12 Black",
        "img" => "images/2023-10-27-product.webp",
        "feature1" => "27MP 1/1.9\"",
        "feature2" => "5312 x 4648",
        "feature3" => "Fixed Wide-Angle",
        "feature4" => "5.3K 60fps",
        "price" => 399
    ],
];
?>

<div class="container mt-5">
  <h2 class="text-center mb-4">Accessories</h2>

  <div class="row">

    <?php foreach($accessories as $index => $lap){ ?>

    <div class="col-md-4 mb-4">
      <div class="card h-100 shadow position-relative">

        <span class="badge bg-danger position-absolute m-2">Sale</span>

        <img src="<?php echo $lap['img']; ?>" class="card-img-top">

        <div class="card-body text-center">
          <h5><?php echo $lap['name']; ?></h5>
            <h6><?php echo $lap['category']; ?></h6>
          <ul class="list-unstyled small">

            <li> <?php echo $lap['feature1']; ?></li>
            <li> <?php echo $lap['feature2']; ?></li>
            <li> <?php echo $lap['feature3']; ?></li>
            <li> <?php echo $lap['feature4']; ?></li>
          </ul>

          <p class="text-warning">⭐⭐⭐⭐☆</p>

          <h6 class="text-primary">$<?php echo $lap['price']; ?></h6>

          <button class="btn btn-outline-primary w-100"
            data-bs-toggle="modal"
            data-bs-target="#lap<?php echo $index; ?>">
            View Details
          </button>
        </div>

      </div>
    </div>

    <div class="modal fade" id="lap<?php echo $index; ?>">
      <div class="modal-dialog modal-lg">
        <div class="modal-content p-3">

          <div class="row">
            <div class="col-md-6">
              <img src="<?php echo $lap['img']; ?>" class="img-fluid">
            </div>

            <div class="col-md-6">
              <h4><?php echo $lap['name']; ?></h4>

              <ul>
                <li>Processor: <?php echo $lap['cpu']; ?></li>
                <li>RAM: <?php echo $lap['ram']; ?></li>
                <li>Storage: <?php echo $lap['storage']; ?></li>
                <li>Display: <?php echo $lap['display']; ?></li>
              </ul>

              <h5 class="text-success">$<?php echo $lap['price']; ?></h5>

              <button class="btn btn-success">Add to Cart</button>
            </div>
          </div>

        </div>
      </div>
    </div>

    <?php } ?>

  </div>
</div>

<?php
include_once("footer.php");
?>
</body>
</html>
<style>
.card-img-top {
  height: 300px;
  object-fit: cover;
}

.modal img {
  height: 300px;
  width: 100%;
  object-fit: cover;
}
</style>

