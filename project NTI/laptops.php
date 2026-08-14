<?php
include_once("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>laptops</title>
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
</head>
<body>
      <?php
    $laptops = [
      [
        "name" => "HP Pavilion",
        "img" => "https://www.hp.com/wcsstore/hpusstore/Treatment/mdps/Q2FY23_Probook_Series_G10_Redesign/Commercial.jpg",
        "cpu" => "Intel i7",
        "ram" => "16GB",
        "storage" => "512GB SSD",
        "display" => "15.6 FHD",
        "price" => 850
      ],
      [
        "name" => "Dell Inspiron",
        "img" => "https://tse2.mm.bing.net/th/id/OIP.wzOnT56JMFwfPflqwQog5QHaFj?r=0&rs=1&pid=ImgDetMain&o=7&rm=3",
        "cpu" => "Intel i5",
        "ram" => "8GB",
        "storage" => "256GB SSD",
        "display" => "14 HD",
        "price" => 700
      ],
      [
        "name" => "Lenovo IdeaPad",
        "img" => "https://tse2.mm.bing.net/th/id/OIP.fAAprhXvF8x5rsaat1TDvwHaGi?r=0&w=856&h=755&rs=1&pid=ImgDetMain&o=7&rm=3",
        "cpu" => "Ryzen 5",
        "ram" => "8GB",
        "storage" => "512GB SSD",
        "display" => "15.6 FHD",
        "price" => 750
      ],
      [
        "name" => "ASUS VivoBook",
        "img" => "https://th.bing.com/th/id/R.79324607772e9278cc70aede1dd7a616?rik=XY3snNAwwW7Gjw&pid=ImgRaw&r=0",
        "cpu" => "Intel i7",
        "ram" => "16GB",
        "storage" => "1TB SSD",
        "display" => "15.6 FHD",
        "price" => 900
      ],
      [
        "name" => "Acer Aspire",
        "img" => "https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6551/6551125_sd.jpg",
        "cpu" => "Intel i5",
        "ram" => "8GB",
        "storage" => "512GB SSD",
        "display" => "15.6 FHD",
        "price" => 720
      ],
      [
        "name" => "MacBook Air",
        "img" => "https://i.pinimg.com/736x/0c/1c/df/0c1cdf489f61931bda0458c3ca712c36.jpg",
        "cpu" => "Apple M1",
        "ram" => "8GB",
        "storage" => "256GB SSD",
        "display" => "13 Retina",
        "price" => 1100
      ],
      [
        "name" => "MSI Gaming",
        "img" => "https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6534/6534580_rd.jpg",
        "cpu" => "Intel i7",
        "ram" => "16GB",
        "storage" => "1TB SSD",
        "display" => "15.6 FHD",
        "price" => 1200
      ],
      [
        "name" => "Huawei MateBook",
        "img" => "https://th.bing.com/th/id/R.1541688ee331eb7f1efd9f4b918ee679?rik=dWS8FqQxQddDjg&pid=ImgRaw&r=0",
        "cpu" => "Intel i5",
        "ram" => "8GB",
        "storage" => "512GB SSD",
        "display" => "14 FHD",
        "price" => 800
      ],
      [
        "name" => "Samsung Book",
        "img" => "https://img.us.news.samsung.com/us/wp-content/uploads/2026/02/20163929/Book6-Pro-16-Product-Image-Gray-L-Perspective-scaled.jpg",
        "cpu" => "Intel i5",
        "ram" => "8GB",
        "storage" => "256GB SSD",
        "display" => "15.6 FHD",
        "price" => 680
      ]
    ];
    ?>

    <div class="container mt-5">
      <h2 class="text-center mb-4">Laptops</h2>

      <div class="row">

        <?php foreach($laptops as $index => $lap){ ?>

        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow position-relative">

            <span class="badge bg-danger position-absolute m-2">Sale</span>

            <img src="<?php echo $lap['img']; ?>" class="card-img-top">

            <div class="card-body text-center">
              <h5><?php echo $lap['name']; ?></h5>

              <ul class="list-unstyled small">
                <li>⚡ <?php echo $lap['cpu']; ?></li>
                <li>💾 <?php echo $lap['ram']; ?></li>
                <li>⚙️ <?php echo $lap['storage']; ?></li>
                <li>🖥️ <?php echo $lap['display']; ?></li>
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
  
</body>
</html>


<?php
include_once("footer.php");
?>

