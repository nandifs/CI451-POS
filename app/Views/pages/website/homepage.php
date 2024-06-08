<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BASRENG SULTAN BANDUNG</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet" />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- App Style -->
    <link rel="stylesheet" href="/website/css/style.css" />
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">B<span>S</span>B</a>

        <div class="navbar-nav">
            <a href="#home">Beranda</a>
            <a href="#about">Tentang Kami</a>
            <a href="#bestsellers">Terlaris</a>
            <a href="#product">Produk</a>
            <a href="#contact">Kontak</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="search-button"><i data-feather="search"></i></a>
            <a href="#" id="shopping-cart-button"><i data-feather="shopping-cart"></i></a>
            <a href="sign-in" id="login-button"><i data-feather="user"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>

        <!-- Search Form Start -->
        <div class="search-form">
            <input type="search" id="search-box" placeholder="Cari product..." />
            <label for="search-box"><i data-feather="search"></i></label>
        </div>
        <!-- Search Form End -->

        <!-- Shopping Cart Start -->
        <div class="shopping-cart">
            <div class="cart-item">
                <img src="website/img/product/1.jpg" alt="Cart 1" />
                <div class="cart-item-detail">
                    <h3>Basreng Pedas Daun Jeruk</h3>
                    <div class="cart-item-price">IDR 40K</div>
                </div>
                <i data-feather="trash-2" class="cart-remove-item"></i>
            </div>

            <div class="cart-item">
                <img src="website/img/product/2.jpg" alt="Cart 1" />
                <div class="cart-item-detail">
                    <h3>Basreng Ori Daun Jeruk</h3>
                    <div class="cart-item-price">IDR 40K</div>
                </div>
                <i data-feather="trash-2" class="cart-remove-item"></i>
            </div>

            <div class="cart-item">
                <img src="website/img/product/4.jpg" alt="Cart 1" />
                <div class="cart-item-detail">
                    <h3>Kulit Crispy Pedas DJ</h3>
                    <div class="cart-item-price">IDR 40K</div>
                </div>
                <i data-feather="trash-2" class="cart-remove-item"></i>
            </div>
        </div>
        <!-- Shopping Cart End -->
    </nav>
    <!-- Navbar End -->

    <!-- Hero Section Start -->
    <section class="hero" id="home">
        <main class="content">
            <h1>Basreng <span>Sultan</span> Bandung</h1>
            <p>Harga Kaki Lima. Rasa Bintang Lima.</p>
        </main>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Start -->
    <section id="about" class="about">
        <h2><span>Tentang</span> Kami</h2>
        <div class="row">
            <div class="about-img">
                <img src="website/img/bsblogo-400px.png" alt="Tentang Kami" />
            </div>
            <div class="content">
                <h3>MENGAPA BASRENG SULTAN BANDUNG ?</h3>
                <p>
                    Dibuat dari bahan-bahan pilihan dan bumbu 100% rempah-rempah asli
                    indonesia.
                </p>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente
                    maiores optio fugiat ducimus nam reiciendis, magni perspiciatis
                    nihil rem hic alias sequi laboriosam corporis sit.
                </p>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Produk Section Start -->
    <section id="product" class="product">
        <h2><span>Produk</span> Kami</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione
            soluta, qui voluptas ipsum laboriosam nam?
        </p>

        <div class="row">
            <div class="product-card">
                <img class="product-card-img" src="website/img/product/1.jpg" alt="Basreng Pedas DJ" />
                <h3 class="product-card-title">- Basreng Pedas DJ -</h3>
                <p class="product-card-price">IDR 60K</p>
            </div>
            <div class="product-card">
                <img class="product-card-img" src="website/img/product/2.jpg" alt="Basreng Pedas DJ" />
                <h3 class="product-card-title">- Basreng Ori DJ -</h3>
                <p class="product-card-price">IDR 60K</p>
            </div>
            <div class="product-card">
                <img class="product-card-img" class="product-card-img" src="website/img/product/3.jpg" alt="Tempe Pedas DJ" />
                <h3 class="product-card-title">- Tempe Pedas DJ -</h3>
                <p class="product-card-price">IDR 60K</p>
            </div>
            <div class="product-card">
                <img class="product-card-img" class="product-card-img" src="website/img/product/4.jpg" alt="Usus Pedas DJ" />
                <h3 class="product-card-title">- Usus Pedas DJ -</h3>
                <p class="product-card-price">IDR 60K</p>
            </div>
        </div>
    </section>
    <!-- Produk Section End -->

    <!-- Produk Best Seller Section Start -->
    <section id="bestsellers" class="bestsellers">
        <h2><span>Penjualan</span> Terlaris</h2>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur
            illum excepturi dolore quaerat consectetur autem?
        </p>
        <div class="row">
            <div class="bestseller-card">
                <div class="bestseller-icon">
                    <a href="#"><i data-feather="shopping-cart"></i></a>
                    <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
                </div>
                <div class="bestseller-image">
                    <img src="website/img/product/bestseller/01.jpg" alt="BestSeller 1" />
                </div>
                <div class="bestseller-content">
                    <h3>Basreng Pedas Daun Jeruk</h3>
                    <div class="bestseller-stars">
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="bestseller-price">IDR 60K <span>IDR 90K</span></div>
                </div>
            </div>
            <div class="bestseller-card">
                <div class="bestseller-icon">
                    <a href="#"><i data-feather="shopping-cart"></i></a>
                    <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
                </div>
                <div class="bestseller-image">
                    <img src="website/img/product/bestseller/02.jpg" alt="BestSeller 1" />
                </div>
                <div class="bestseller-content">
                    <h3>Basreng Pedas Daun Jeruk</h3>
                    <div class="bestseller-stars">
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="bestseller-price">IDR 60K <span>IDR 90K</span></div>
                </div>
            </div>
            <div class="bestseller-card">
                <div class="bestseller-icon">
                    <a href="#"><i data-feather="shopping-cart"></i></a>
                    <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
                </div>
                <div class="bestseller-image">
                    <img src="website/img/product/bestseller/03.jpg" alt="BestSeller 1" />
                </div>
                <div class="bestseller-content">
                    <h3>Basreng Pedas Daun Jeruk</h3>
                    <div class="bestseller-stars">
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="bestseller-price">IDR 60K <span>IDR 90K</span></div>
                </div>
            </div>
            <div class="bestseller-card">
                <div class="bestseller-icon">
                    <a href="#"><i data-feather="shopping-cart"></i></a>
                    <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
                </div>
                <div class="bestseller-image">
                    <img src="website/img/product/bestseller/04.jpg" alt="BestSeller 1" />
                </div>
                <div class="bestseller-content">
                    <h3>Basreng Pedas Daun Jeruk</h3>
                    <div class="bestseller-stars">
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="bestseller-price">IDR 60K <span>IDR 90K</span></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Produk Best Seller Section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="contact">
        <h2><span>Kontak</span> Kami</h2>
        <p>Punya pertanyaan atau perlu bantuan, kami siap membantu.</p>

        <div class="row">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15843.037679157458!2d107.7514185!3d-6.9193389!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68dda373a50331%3A0x77c5b7906e4f06ab!2sBasreng%20Sultan%20Bandung!5e0!3m2!1sid!2sid!4v1703308240850!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <form action="">
                <div class="input-group">
                    <i data-feather="user"></i>
                    <input type="text" placeholder="Nama" />
                </div>

                <div class="input-group">
                    <i data-feather="mail"></i>
                    <input type="text" placeholder="Email" />
                </div>

                <div class="input-group">
                    <i data-feather="phone"></i>
                    <input type="text" placeholder="Nomor Telepon / HP" />
                </div>

                <div class="input-group">
                    <i data-feather="message-circle"></i>
                    <textarea placeholder="Ketikkan pesan anda disini" rows="4" cols="50"></textarea>
                </div>

                <button type="submit" class="btn">Kirim Pesan</button>
            </form>
        </div>
    </section>
    <!-- Contact Section End -->
    <!-- Footer Start -->
    <footer>
        <div class="socials">
            <a href="#"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="twitter"></i></a>
            <a href="#"><i data-feather="facebook"></i></a>
        </div>

        <div class="links">
            <a href="#home">Home</a>
            <a href="#about">Tentang kami</a>
            <a href="#product">Produk</a>
            <a href="#contact">Kontak</a>
        </div>

        <div class="credits">
            <p>Created by <a href="#">R3LSE</a>. | &copy; 2023</p>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Modal Box Item Detail Start -->
    <div class="modal" id="item-detail-modal">
        <div class="modal-container">
            <a href="#" class="close-button"><i data-feather="x"></i></a>
            <div class="modal-content">
                <img src="website/img/product/1.jpg" alt="" />
                <div class="product-content">
                    <h3>Basreng Pedas Daun Jeruk</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo
                        fugiat velit quis molestias sed reiciendis.
                    </p>
                    <div class="bestseller-stars">
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="bestseller-price">IDR 60K <span>IDR 90K</span></div>
                    <a href="#"><i data-feather="shopping-cart"></i><span>add to cart</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Box Item Detail End -->

    <!-- Feather Icons -->
    <script>
        feather.replace();
    </script>

    <!-- App Script -->
    <script src="website/js/app.js"></script>
</body>

</html>