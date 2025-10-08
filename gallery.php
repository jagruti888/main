<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>She Palatin - Gallery</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f0f0f0;
            text-align: center;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
        }

        .img-wrapper {
            position: relative;
            width: 350px;
            height: 250px;
            overflow: hidden;
            border: 2px solid #ccc;
        }

        .img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            cursor: pointer;
            transition: transform 0.3s ease;
            display: block;
        }

        .img-wrapper:hover img {
            transform: scale(1.08) rotateZ(1.5deg);
        }

        .overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.45);
            transform: translate(-50%, -50%);
            opacity: 0;
            transition: opacity 0.3s ease;
            pointer-events: none;
        }

        .img-wrapper:hover .overlay {
            opacity: 1;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100vw;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.9);
            justify-content: center;
            align-items: center;
            animation: fadeIn 0.5s;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .modal img {
            width: 700px;
            height: 600px;
            max-width: 100vw;
            max-height: 100vh;
            object-fit: contain;
            display: block;
            cursor: zoom-out;
        }

        .modal-buttons {
            position: absolute;
            width: 100%;
            top: 50%;
            display: flex;
            justify-content: space-between;
            padding: 0 30px;
            transform: translateY(-50%);
        }

        .modal-buttons button {
            background: #ffffff88;
            border: none;
            font-size: 24px;
            padding: 10px;
            cursor: pointer;
            border-radius: 50%;
            color: black;
        }

        .close-btn {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 30px;
            color: white;
            cursor: pointer;
        }

        .filter-btn {
            background-color: white;
            border: 2px solid #cb8670;
            padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
            border-radius: 4px;
            font-weight: bold;
            transition: 0.3s;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background-color:#cb8670;
            color: white;
            border: 2px solid  #4e4c4cff;
        }
    </style>
</head>
<body>

<!-- Banner Section -->
<section class="breadcumb-area d-flex align-items-center justify-content-center"
  style="position: relative; overflow: hidden; height: 500px;">

  <!-- Background Image with blur -->
  <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
              background: url('images/ab (3).jpeg') center/cover no-repeat;
              filter: blur(1px); z-index: 0;"></div>

  <!-- Overlay color -->
  <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
              background-color: rgba(97, 97, 97, 0.33); z-index: 1;"></div>

  <!-- Text Content -->
  <div class="bradcumbContent" style="position: relative; z-index: 2;">
    <h2 style="color: white;">Gallery</h2>
  </div>
</section>

<div class="container">
    <br><br>
    <center><h1>Gallery</h1></center>

    <!-- Filter Buttons -->
    <center>
        <div style="margin: 20px 0;">
            <button class="filter-btn active" onclick="filterImages('all', event)">ALL</button>
            <button class="filter-btn" onclick="filterImages('empowerment', event)">Empowerment</button>
            <button class="filter-btn" onclick="filterImages('training', event)">Training</button>
            <button class="filter-btn" onclick="filterImages('awareness', event)">Awareness</button>
            <button class="filter-btn" onclick="filterImages('legal', event)">Legal Info</button>
        </div>
    </center>

    <!-- Gallery Grid -->
    <div class="gallery">
        <?php
        $categories = array(
            'empowerment' => 'gallery/empowerment/*.{jpg,jpeg,png,gif,avif,webp}',
            'training' => 'gallery/training/*.{jpg,jpeg,png,gif,avif,webp}',
            'awareness' => 'gallery/awareness/*.{jpg,jpeg,png,gif,avif,webp}',
            'legal' => 'gallery/legal/*.{jpg,jpeg,png,gif,avif,webp}',
        );

        $all_images = array();

        foreach ($categories as $category => $pattern) {
            $images = glob($pattern, GLOB_BRACE);
            foreach ($images as $img) {
                $all_images[] = $img;
                $index = count($all_images) - 1;
                echo "
                <div class='img-wrapper' data-category='$category'>
                    <img src='$img' alt='Gallery Image' onclick='openModal($index)'>
                    <div class='overlay'></div>
                </div>";
            }
        }
        ?>
    </div>

    <!-- Modal -->
    <div class="modal" id="modal">
        <span class="close-btn" onclick="closeModal()">&times;</span>
        <img id="modal-img" src="" alt="Preview">
        <div class="modal-buttons">
            <button onclick="prevImage()">&#8249;</button>
            <button onclick="nextImage()">&#8250;</button>
        </div>
    </div>
</div>

<script>
    let images = <?php echo json_encode($all_images); ?>;
    let currentIndex = 0;

    function openModal(index) {
        currentIndex = index;
        document.getElementById("modal-img").src = images[currentIndex];
        document.getElementById("modal").style.display = "flex";
    }

    function closeModal() {
        document.getElementById("modal").style.display = "none";
    }

    function prevImage() {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        document.getElementById("modal-img").src = images[currentIndex];
    }

    function nextImage() {
        currentIndex = (currentIndex + 1) % images.length;
        document.getElementById("modal-img").src = images[currentIndex];
    }

    document.getElementById("modal-img").addEventListener("click", closeModal);

    function filterImages(category, event) {
        const buttons = document.querySelectorAll('.filter-btn');
        buttons.forEach(btn => btn.classList.remove('active'));
        event.target.classList.add('active');

        const wrappers = document.querySelectorAll('.img-wrapper');
        wrappers.forEach(wrapper => {
            const imgCat = wrapper.getAttribute('data-category');
            if (category === 'all' || imgCat === category) {
                wrapper.style.display = 'block';
            } else {
                wrapper.style.display = 'none';
            }
        });
    }
</script>

<br><br>

</body>
</html>
<?php include("footer.php"); ?>
