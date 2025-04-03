async function obtenerUsuarios() {
    try {
        const respuesta = await fetch("./backend/routes/api.php");
        const usuarios = await respuesta.json();

        const contenedorUsuarios = document.getElementById("contenedor-usuarios");
        contenedorUsuarios.innerHTML = mostrarUsuarios(usuarios);
    } catch (error) {
        console.error("Error al obtener los usuarios", error);
        document.getElementById("contenedor-usuarios").innerHTML = "<p>Error al cargar los usuarios.</p>";
    }
}

function mostrarUsuarios(usuarios) {
    let texto = "";

    usuarios.forEach(usuario => {
        texto += `<h4>${usuario.nombre}</h4>`;
        texto += `<p>Email: ${usuario.email}</p>`;
        texto += `<p>Rol: ${usuario.rol}</p>`;
        texto += "<hr>";
    });

    return texto;
}

obtenerUsuarios();
