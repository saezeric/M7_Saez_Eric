<header>
    <div class="container-fluid bg-dark text-white py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="#">
                <img src="../data/assets/logo-mercadona.png" alt="Tienda Mercadona" style="height: 50px; width: auto;">
            </a>

            <!-- Mostrar mensaje de bienvenida si existen nombre y foto -->
            <?php if (isset($_POST['nombre']) && isset($_POST['foto'])) { ?>
                <div class="d-flex align-items-center">
                    <img src="<?php echo $_POST['foto'] ? $_POST['foto'] : 'https://cuv.upc.edu/ca/shared/imatges/fotos-professorat-i-professionals/anonimo.jpg'; ?>" alt="foto de perfil" class="rounded-circle me-3" style="width: 50px; height: 50px;">
                    <span>Bienvenido, <?php echo $_POST['nombre'] ? $_POST['nombre'] : 'Usuario'; ?></span>
                </div>
            <?php } ?>
        </div>
    </div>
</header>