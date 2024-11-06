<?php

function generarTablaProductos($productos)
{
    echo '<table class="table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio (€)</th>
                    <th>Disponibilidad</th>
                    <th>Categoría</th>
                </tr>
            </thead>
            <tbody>';

    foreach ($productos as $producto) {
        $rowClass = $producto['disponibilidad'] ? '' : 'table-danger';

        echo '<tr class="' . $rowClass . '">
                <td>' . ucfirst($producto['nombre']) . '</td>
                <td>' . number_format($producto['precio'], 2, ',', '') . '</td>
                <td>' . ($producto['disponibilidad'] ? 'En stock' : 'Agotado') . '</td>
                <td>' . $producto['categoria'] . '</td>
              </tr>';
    }

    echo '</tbody></table>';
}

function muestraInfoContacto($nombre, $telefono, $foto)
{
    echo '
    <button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#infoContactoModal">Ver Información de Contacto</button>
    <div class="modal fade" id="infoContactoModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="infoContactoModalLabel">Información de Contacto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="' . $foto . '" class="rounded-circle mb-3" alt="Foto de perfil" style="width: 100px; height: 100px;">
                    <h5>' . $nombre . '</h5>
                    <p>Teléfono: ' . $telefono . '</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>';
}
