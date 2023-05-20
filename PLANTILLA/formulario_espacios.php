<form id="form" action="" method="POST">
        <div class="mb-3">
            <h1>Crear espacio</h1>
        </div>

        <div class="mb-3">
            <label class="form-label">Tipo espacio</label>
            <select id="tipo_espacio" name="tipo_espacio" onchange="borrarCapacidad()"  class="form-select">
                <option value="">Escoje una opcion</option>
                <option value="APARTAMENTO">APARTAMENTO</option>
                <option value="PARQUEADERO">PARQUEADERO</option>
                <option value="SALON SOCIAL">SALON SOCIAL</option>
                <option value="ZONA HUMEDA">ZONA HUMEDA</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Espacio</label>
            <input type="text" id="espacio" name="espacio" onchange="this.value = this.value.toUpperCase()" class="form-control" placeholder="Ejemplo: 101">
        </div>
        <div id="divcapacidad" class="mb-3">
            <label class="form-label">Capacidad</label>
            <input type="number" id="capacidad" name="capacidad" class="form-control" min="0" placeholder="Ejemplo: 3">
        </div>

        <div class="mb-3">
            <label class="form-label">Estado</label>
            <select id="estado" name="estado" class="form-select">
                <option value="ACTIVO">ACTIVO</option>
                <option value="DESACTIVADO">INACTIVO</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Crear espacio</button>
        <button type="submit" id="volver" class="btn btn-light">Volver</button>

    </form>