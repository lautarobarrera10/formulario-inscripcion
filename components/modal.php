<div class="modal">
    <div class="form-container">
        <div class="close-button-container"><span class="close-button">X</span></div>
        <h1>LA CARRERA DEL AÑO</h1>
        <h3 class="subtext">INSCRIPCIÓN</h3>
        <form action="index.php" method="post">
            <?php if($status === 'success'): ?>
                <div class="alert success">
                    <p>¡Inscripción enviada con éxito!</p>
                </div>
            <?php endif; ?>
            <?php if($status === 'error'): ?>
            <div class="alert error">
                <p>Ha ocurrido un problema...</p>
            </div>
            <?php endif; ?>
            <?php if($status === 'incomplete'): ?>
                <div class="alert error">
                    <p>Por favor, completa todos los campos...</p>
                </div>
            <?php endif; ?>
            <?php if($status === 'name-number'): ?>
                <div class="alert error">
                    <p>El nombre no puede contener números o carácteres especiales.</p>
                </div>
            <?php endif; ?>
            <?php if($status === 'email-error'): ?>
                <div class="alert error">
                    <p>Por favor, ingresa un email válido...</p>
                </div>
            <?php endif; ?>
            <?php if($status === 'no-category'): ?>
                <div class="alert error">
                    <p>Por favor, selecciona una categoría...</p>
                </div>
            <?php endif; ?>
            <input class="input firts" placeholder="Nombre..." name="name" type="name">
            <input class="input" placeholder="Email..." name="email" type="email">
            <select class="input select" require name="category" id="category">
                <option value="category">Categoría</option>
                <option value="libre-masculino">Libre Masculino</option>
                <option value="masculino20">Masculino +20</option>
                <option value="masculino30">Masculino +30</option>
                <option value="libre-femenino">Libre Femenino</option>
                <option value="femenino20">Femenino +20</option>
                <option value="femenino30">Femenino +30</option>
            </select>
            <input class="enviar-inscripcion" type="submit" value="Enviar inscripción">
        </form>
    </div>
</div>