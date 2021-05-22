<?php include './Includes/Header.php' ?>
<div class="contenedor-app">
    <aside>
        <h1>Tareas<span>PHP</span></h1>
        <div class="proyectos">
            <h2>Tus Proyectos</h2>
            <div class="contenedor-tareas">
                <button type="button" class="btn btn-block btn-primario" id="botonNuevoProyecto">Nuevo Proyecto</button>
                <form class="formulario-nuevo-proyecto">
                    <input type="text" class="input-text" placeholder="Nombre Proyecto" name="nombreProyecto" />
                    <input type="submit" class="btn btn-primario btn-block" value="Agregar Proyectos" name="añadirProyecto" />
                </form>
                <ul class="listado-proyectos">
                    <?php foreach ($rowset as $row) : ?>
                        <li>
                            <button type="button" class="btn btn-blank"> <?php echo $row['Nombre'] ?></button>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </aside>
    <div class="seccion-principal">
        <header class="app-header">
            <p class="nombre-usuario">Hola <span>Victor Reverte</span></p>
            <nav class="nav-principal">
                <a href="#!">Cerrar Sesion</a>
            </nav>
        </header>
        <main>
            <div class="formulario">
                <form action="">
                    <div name="contenedor-input">
                        <input type="text" class="input-text" placeholder="Nombre Tarea.." id="nombreTarea" name="nombreTarea" />
                    </div>
                    <div class="contenedor-input">
                        <input type="submit" class="btn btn-primario btn-submit btn-block" name="addTarea" />
                    </div>
                </form>
            </div>
        </main>
        <ul class="listado-tareas">
        </ul>
    </div>
</div>

<?php include './Includes/Footer.php' ?>