async function obtenerLibros() {

    try {
        const respuesta = await fetch("./backend/routes/api.php");
        const libros = await respuesta.json();

        const contenedorLibros = document.getElementById("contenedor-libros");
        contenedorLibros.innerHTML = mostrarLibros(libros);
    } catch (error) {
        console.error("Error al obtener los libros", error);
        document.getElementById("contenedor-libros").innerHTML = "<p>Error al cargar los libros.</p>";
    }
}

function mostrarLibros(libros) {
    let texto = "";

    libros.forEach(libro => {
        texto += `<h4>${libro.titulo}</h4>`;
        texto += `<p>Autor: ${libro.autor}</p>`;
        texto += `<p>Género: ${libro.genero}</p>`;
        texto += "<hr>";


    });

    return texto;
}

obtenerLibros();