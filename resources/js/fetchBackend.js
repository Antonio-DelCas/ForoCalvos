export function fetchBackend(endpoint, data, method) {
    return fetch(endpoint, {
        method,
        body: JSON.stringify(data),
        headers: {
            Accept: "application/json",
            "Content-Type": "application/json",
            "X-Requested-With": "XMLHttpRequest",
        },
    }).then((respuesta) => {
        if (!respuesta.ok) {
            throw new Error(`Error en la respuesta`);
        }

        return respuesta.json();
    });
}
