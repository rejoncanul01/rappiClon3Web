<?php

    if(!isset($_SESSION["usuario"])) {
        echo '
            <script>
                alert("Primero inicia sesion");
                window.location = "../index.php"
            </script>
        ';
        session_destroy();
        die();
    }

    // session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../assets/css/carousel.css">
</head>
<body>
  
<!-- Inicio carousel    -->
<div class="Carousel">
        <h2>Top</h2>
        <div class="slick-list" id="slick-list">
            <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
            </button>
            <div class="slick-track" id="track">
                <div class="slick">
                    <div>
                        <a href="#">
                        <h4>
                                La abuela
                                <small>
                                    <h6 style="color: gray;" >
                                        Centro <br>
                                        <h6>
                                            <i style="color: yellow;" class="fa-solid fa-star"></i> 4.8 
                                        </h6>
                                    </h6>
                                </small>
                            </h4>
                            <picture>
                                <img src="https://images.unsplash.com/photo-1499028344343-cd173ffc68a9?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="#">
                            <h4>
                                La abuela
                                <small>
                                    <h6 style="color: gray;" >
                                        Centro <br>
                                        <h6>
                                            <i style="color: yellow;" class="fa-solid fa-star"></i> 4.8 
                                        </h6>
                                    </h6>
                                </small>
                            </h4>
                            <picture>
                                <img src="https://images.unsplash.com/photo-1499028344343-cd173ffc68a9?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="#">
                            <h4>
                                La abuela
                                <small>
                                    <h6 style="color: gray;" >
                                        Centro <br>
                                        <h6>
                                            <i style="color: yellow;" class="fa-solid fa-star"></i> 4.8 
                                        </h6>
                                    </h6>
                                </small>
                            </h4>
                            <picture>
                                <img src="https://images.unsplash.com/photo-1499028344343-cd173ffc68a9?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="#">
                            <h4>
                                La abuela
                                <small>
                                    <h6 style="color: gray;" >
                                        Centro <br>
                                        <h6>
                                            <i style="color: yellow;" class="fa-solid fa-star"></i> 4.8 
                                        </h6>
                                    </h6>
                                </small>
                            </h4>
                            <picture>
                                <img src="https://images.unsplash.com/photo-1499028344343-cd173ffc68a9?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="#">
                            <h4>
                                La abuela
                                <small>
                                    <h6 style="color: gray;" >
                                        Centro <br>
                                        <h6>
                                            <i style="color: yellow;" class="fa-solid fa-star"></i> 4.8 
                                        </h6>
                                    </h6>
                                </small>
                            </h4>
                            <picture>
                                <img src="https://images.unsplash.com/photo-1499028344343-cd173ffc68a9?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="#">
                            <h4>
                                La abuela
                                <small>
                                    <h6 style="color: gray;" >
                                        Centro <br>
                                        <h6>
                                            <i style="color: yellow;" class="fa-solid fa-star"></i> 4.8 
                                        </h6>
                                    </h6>
                                </small>
                            </h4>
                            <picture>
                                <img src="https://images.unsplash.com/photo-1499028344343-cd173ffc68a9?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="#">
                            <h4>
                                La abuela
                                <small>
                                    <h6 style="color: gray;" >
                                        Centro <br>
                                        <h6>
                                            <i style="color: yellow;" class="fa-solid fa-star"></i> 4.8 
                                        </h6>
                                    </h6>
                                </small>
                            </h4>
                            <picture>
                                <img src="https://images.unsplash.com/photo-1499028344343-cd173ffc68a9?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="#">
                            <h4>
                                La abuela
                                <small>
                                    <h6 style="color: gray;" >
                                        Centro <br>
                                        <h6>
                                            <i style="color: yellow;" class="fa-solid fa-star"></i> 4.8 
                                        </h6>
                                    </h6>
                                </small>
                            </h4>
                            <picture>
                                <img src="https://images.unsplash.com/photo-1499028344343-cd173ffc68a9?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="#">
                            <h4>
                                La abuela
                                <small>
                                    <h6 style="color: gray;" >
                                        Centro <br>
                                        <h6>
                                            <i style="color: yellow;" class="fa-solid fa-star"></i> 4.8 
                                        </h6>
                                    </h6>
                                </small>
                            </h4>
                            <picture>
                                <img src="https://images.unsplash.com/photo-1499028344343-cd173ffc68a9?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="#">
                            <h4>
                                La abuela
                                <small>
                                    <h6 style="color: gray;" >
                                        Centro <br>
                                        <h6>
                                            <i style="color: yellow;" class="fa-solid fa-star"></i> 4.8 
                                        </h6>
                                    </h6>
                                </small>
                            </h4>
                            <picture>
                                <img src="https://images.unsplash.com/photo-1499028344343-cd173ffc68a9?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="#">
                            <h4>
                                La abuela
                                <small>
                                    <h6 style="color: gray;" >
                                        Centro <br>
                                        <h6>
                                            <i style="color: yellow;" class="fa-solid fa-star"></i> 4.8 
                                        </h6>
                                    </h6>
                                </small>
                            </h4>
                            <picture>
                                <img src="https://images.unsplash.com/photo-1499028344343-cd173ffc68a9?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="#">
                            <h4>
                                La abuela
                                <small>
                                    <h6 style="color: gray;" >
                                        Centro <br>
                                        <h6>
                                            <i style="color: yellow;" class="fa-solid fa-star"></i> 4.8 
                                        </h6>
                                    </h6>
                                </small>
                            </h4>
                            <picture>
                                <img src="https://images.unsplash.com/photo-1499028344343-cd173ffc68a9?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="#">
                            <h4>
                                La abuela
                                <small>
                                    <h6 style="color: gray;" >
                                        Centro <br>
                                        <h6>
                                            <i style="color: yellow;" class="fa-solid fa-star"></i> 4.8 
                                        </h6>
                                    </h6>
                                </small>
                            </h4>
                            <picture>
                                <img src="https://images.unsplash.com/photo-1499028344343-cd173ffc68a9?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="#">
                            <h4>
                                La abuela
                                <small>
                                    <h6 style="color: gray;" >
                                        Centro <br>
                                        <h6>
                                            <i style="color: yellow;" class="fa-solid fa-star"></i> 4.8 
                                        </h6>
                                    </h6>
                                </small>
                            </h4>
                            <picture>
                                <img src="https://images.unsplash.com/photo-1499028344343-cd173ffc68a9?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="#">
                            <h4>
                                La abuela
                                <small>
                                    <h6 style="color: gray;" >
                                        Centro <br>
                                        <h6>
                                            <i style="color: yellow;" class="fa-solid fa-star"></i> 4.8 
                                        </h6>
                                    </h6>
                                </small>
                            </h4>
                            <picture>
                                <img src="https://images.unsplash.com/photo-1499028344343-cd173ffc68a9?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
            <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
            </button>
        </div>
            </div>

                <!-- fin Carousel -->

    <script defer src="../js/carousel.js"></script>
    <script src="https://kit.fontawesome.com/f95b83b698.js" crossorigin="anonymous"></script>
</body>
</html>