import { fetchBackend } from "./fetchBackend";

const respuestaContenedor = document.getElementById("respuesta-contenedor");
const respuestaForm = document.getElementById("crear-respuesta-form");

console.log(new Date().toLocaleString().replace(",", "").slice(0, -3));

function crearRespuesta(evento) {
    evento.preventDefault();

    const data = Object.fromEntries([...new FormData(evento.target).entries()]);

    console.log(data);

    fetchBackend("/crear-respuesta-action", data, "POST")
        .then((respuesta) => {
            console.log(respuesta);
        })
        .catch(() => {
            console.log("error");
        });
    respuestaForm.reset();

    const fecha = new Date().toLocaleString().replace(",", "").slice(0, -3);

    const primeraDiv = document.createElement("div");
    primeraDiv.className =
        "bg-gray-50 border border-gray-200 rounded p-4 hover:shadow";
    primeraDiv.innerHTML = `<div class="flex items-center mb-2">
    <img class="w-10 h-10 rounded-full ring-2 ring-gray-300"
        src="/storage/${window.user.imagen}"
        alt="Avatar del usuario">
    <div class="ml-4">
        <h3 class="text-lg font-semibold text-orange-600">${window.user.name}</h3>
        <p class="text-sm text-gray-500">Publicado el: ${fecha}</p>
    </div>
</div>
<p class="text-gray-700">${data.contenido}</p>`;

    respuestaContenedor.appendChild(primeraDiv);
}

respuestaForm.addEventListener("submit", crearRespuesta);
