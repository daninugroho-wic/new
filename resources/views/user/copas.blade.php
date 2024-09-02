<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work List</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="work-list-container">
        <div class="work-list">
            <div class="work">
                <img src="img/n1.png" alt="Project Image">
                <div class="layer">
                    <h3>Hasil Project 1</h3>
                    <p class="sub-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem numquam, ullam
                        accusamus impedit officiis, </p>
                    <a href="#"><i class='bx bx-add-to-queue'></i></a>
                </div>
            </div>
            <div class="work">
                <img src="img/n1.png" alt="Project Image">
                <div class="layer">
                    <h3>Hasil Project 1</h3>
                    <p class="sub-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem numquam, ullam
                        accusamus impedit officiis, </p>
                    <a href="#"><i class='bx bxl-github'></i></a>
                </div>
            </div>
            <div class="work">
                <img src="img/n2.png" alt="Project Image">
                <div class="layer">
                    <h3>Hasil Project 2</h3>
                    <p class="sub-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem numquam, ullam
                        accusamus impedit officiis, </p>
                    <a href="https://github.com/daninugroho-wic/E-Commerce"><i class='bx bxl-github'></i></a>
                </div>
            </div>
            <div class="work">
                <img src="img/n3.png" alt="Project Image">
                <div class="layer">
                    <h3>Hasil Project 3</h3>
                    <p class="sub-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem numquam, ullam
                        accusamus impedit officiis, </p>
                    <a href="#"><i class='bx bxl-github'></i></a>
                </div>
            </div>
        </div>
        <button id="see-more-btn">See More</button>
        <div id="additional-content" class="hidden">
            <!-- Additional content goes here -->
            <p>Additional project details or other content can go here.</p>
        </div>
    </div>
    <script src="script.js"></script>
</body>

<style>
    body {
    font-family: Arial, sans-serif;
}

.work-list-container {
    text-align: center;
}

.work-list {
    display: flex;
    justify-content: center;
    flex-wrap: nowrap;
    overflow-x: auto;
}

.work {
    position: relative;
    margin: 10px;
    width: 200px;
    height: 300px;
    overflow: hidden;
}

.work img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.layer {
    position: absolute;
    bottom: 0;
    background: rgba(0, 0, 0, 0.6);
    color: #fff;
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    transition: transform 0.3s ease;
    transform: translateY(100%);
}

.work:hover .layer {
    transform: translateY(0);
}

h3, .sub-p {
    margin: 0;
    padding: 5px 0;
}

button {
    margin-top: 20px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
}

.hidden {
    display: none;
}

#additional-content {
    margin-top: 20px;
    padding: 10px;
    background: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 4px;
}

</style>

<script>
    document.getElementById('see-more-btn').addEventListener('click', function() {
    var content = document.getElementById('additional-content');
    if (content.classList.contains('hidden')) {
        content.classList.remove('hidden');
        this.textContent = 'See Less';
    } else {
        content.classList.add('hidden');
        this.textContent = 'See More';
    }
});

</script>
</html>
