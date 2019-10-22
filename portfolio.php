<div class="container pt-5" id="portfolio">
    <div class="col-sm">
        <h3 class=" text-center display-4 text-white">Portifolio</h3>
    </div>
    <!-- Full-width images with number text -->
    <div class="mySlides">
        <img src="portifolio/cap1.PNG" style="width:100%">
    </div>

    <div class="mySlides">
        <img src="portifolio/cap2.PNG" style="width:100%">
    </div>

    <div class="mySlides">
        <img src="portifolio/cap3.PNG" style="width:100%">
    </div>
    
    <div class="mySlides">
        <img src="portifolio/cap4.JPG" style="width:100%">
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Image text -->
    <div class="caption-container">
        <p id="caption"></p>
    </div>

    <!-- Thumbnail images -->
    <div class="row justify-content-center">
        <div class="column">
            <img class="demo cursor" src="portifolio/cap1.PNG" style="width:100%" onclick="currentSlide(1)" alt="Site Pessoal">
        </div>
        <div class="column">
            <img class="demo cursor" src="portifolio/cap2.PNG" style="width:100%" onclick="currentSlide(2)" alt="Aula Bootstrap">
        </div>
        <div class="column">
            <img class="demo cursor" src="portifolio/cap3.PNG" style="width:100%" onclick="currentSlide(3)" alt="Prova de JavaScript com CSS">
        </div>
        <div class="column">
            <img class="demo cursor" src="portifolio/cap4.JPG" style="width:100%" onclick="currentSlide(4)" alt="Estudo de Matrizes e Vetores">
        </div>
    </div>
</div>