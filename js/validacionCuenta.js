// variable de objetos

const datos = {
    nombre: "",
    apellidop: "",
    apellidom: "",
    tecnologico: "",
    telefono: "",
    correo: "",
    contraseña: "",
    contraseñac: ""
};

const nombre = document.querySelector("#nombre");
const apellidop = document.querySelector("#apellidop");
const apellidom = document.querySelector("#apellidom");
const tecnologico = document.querySelector("#tecnologico");
const telefono = document.querySelector("#telefono");
const correo = document.querySelector("#correo");
const contraseña = document.querySelector("#passC");
const contraseñac = document.querySelector("#passCC");


nombre.addEventListener("input", leerTexto);
apellidop.addEventListener("input", leerTexto);
apellidom.addEventListener("input", leerTexto);
tecnologico.addEventListener("input", leerTexto);
telefono.addEventListener("input", leerTexto);
correo.addEventListener("input", leerTexto);
contraseña.addEventListener("input", leerTexto);
contraseñac.addEventListener("input", leerTexto);



const formulario = document.querySelector("#formulario");
formulario.addEventListener("submit", function (e) {
    const { nombre, apellidop, apellidom, tecnologico, telefono, correo, contraseña, contraseñac } = datos;

e.preventDefault();
    if (nombre === "" || apellidop === "" || apellidom === "" || tecnologico==="" || telefono==="" || correo==="") {
       
        mostrarError("Por Favor Llene Todos Los Campos");

        setTimeout(() => {
            location.reload();
        }, 5000);

        return;
    } else {

        mostrarEnviar("Datos Enviados Correctamente");
        setTimeout(() => {
            location.reload();
        }, 1000);

    }


});



//leer la informacion introducida en los campos
function leerTexto(e) {
    datos[e.target.id] = e.target.value;
}




//funcion para mostrar error en pantalla

function mostrarError(mensaje){
    const error=document.createElement("P");
    error.textContent=mensaje;
    error.classList.add("error");
    formulario.appendChild(error);
    setTimeout(() => {
        error.remove();
    }, 5000);






}

function mostrarEnviar(mensaje){
    const enviar=document.createElement("P");
    enviar.textContent=mensaje;
    enviar.classList.add("enviar");
    formulario.appendChild(enviar);
    setTimeout(() => {
        enviar.remove();
    }, 5000);






}



