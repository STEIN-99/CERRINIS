


if(document.querySelector('.contenedor-slider')){

    let index=1;
    let selectIndex=1;

    const slides=document.querySelector('.slider');
    const slide=slides.children;
    const slidesTotal=slides.childElementCount;

    console.log(slidesTotal);

    const prev=document.querySelector('.prev');
    const netx=document.querySelector('.next');

    mostrarSlider(index);

    setInterval(()=>{
        mostrarSlider(index=selectIndex)
    },3000);

    function mostrarSlider(num) {
        if(selectIndex > slidesTotal){
            selectIndex=1;
        }else{
            selectIndex++;
        }
        if(num > slidesTotal){
            index=1;
        }
        if(num < 1){
            index=slidesTotal;
        }

        for(let i=0; i < slidesTotal; i++){
            slide[i].classList.remove('active');
        }

        slide[index-1].classList.add('active');
    }

    netx.addEventListener('click',(e)=>{
        mostrarSlider(index +=1);
        selectIndex=index;
    });

    prev.addEventListener('click',(e)=>{
        mostrarSlider(index +=-1);
        selectIndex=index;
    });
}

const mostrarClave=document.querySelectorAll('.mostrarClave');
const inputPass=document.querySelectorAll('.clave');

for (let i = 0; i < mostrarClave.length; i++) {

    mostrarClave[i].addEventListener('click', ()=>{
        if(inputPass[i].type==="password"){
            inputPass[i].setAttribute('type','text');

            mostrarClave[i].classList.remove('fa-eye');

            mostrarClave[i].classList.add('fa-eye-slash');

            mostrarClave[i].classList.add('active');
        }else{
            inputPass[i].setAttribute('type','password');

            mostrarClave[i].classList.remove('fa-eye-slash');

            mostrarClave[i].classList.add('fa-eye');

            mostrarClave[i].classList.remove('active');
        }
    });
}


/*========================================
    Válidamos formulario de login
==========================================*/
if(document.getElementById('btnLogin')){

    const btnLogin=document.getElementById('btnLogin');

    btnLogin.addEventListener('click',(e)=>{

        e.preventDefault();

        const msError=document.querySelector('#formLogin .error-text');
        msError.innerHTML="";
        msError.classList.remove('active');

        correo=formLogin.correoe.value.trim();
        password=formLogin.pass.value.trim();

        if(correo=="" && password==""){
            mostrarError('Por favor ingrese su usuario/contraseña', msError);
            inputError([formLogin.correoe,formLogin.pass]);
            return false;
        }else{
            inputErrorRemove([formLogin.correoe,formLogin.pass]);
        }

        if(correo=="" || correo==null){
            mostrarError('Por favor ingrese su correo',msError);
            inputError([formLogin.correoe]);
            formLogin.correoe.focus();
            return false;
        }

        if(password=="" || password==null){
            mostrarError('Por favor ingrese su contraseña',msError);
            inputError([formLogin.pass]);
            formLogin.pass.focus();
            return false;
        }

        //enviamos el fromulario
        enviarform();
        return true;

    });
}


function enviarform(){
    const msError=document.querySelector('#formLogin .error-text');
    msError.innerHTML="";
    msError.classList.remove('active');

    var form = document.getElementById('formLogin');
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'funciones/ValidarSesion.php', true);
    var formData = new FormData(form);
    xhr.addEventListener('load', e =>{
        if (e.target.readyState == 4 && e.target.status == 200) {
            if (e.target.response == 'admin') {
                location.href = 'admin.php';

            }else if(e.target.response == 'usua') {
            
                location.href = 'admin.php';

            }else{
                mostrarError('Contraseña o Usuario no son validos', msError);
                inputError([formLogin.correoe,formLogin.pass]);

            }
        }
    })

    xhr.send(formData);
}

/*
    CREAMOS FUNCIONES PARA MOSTRAR ERROR EN PANTALLA Y ADEMAS VALIDAR SI LOS CAMPOS SON INGRESADOS CORECTAMENTE
*/

/*========================================
Mostrar Error
==========================================*/
function mostrarError(mensaje,msError){

    //agregamos la clase active
    msError.classList.add('active');

    msError.innerHTML='<p>'+mensaje+'</p>';
}

/*========================================
Agregar class error input
==========================================*/
//a esta funcion le pasamos un array

function inputError(datos){
    for (let i = 0; i < datos.length; i++) {

        //a cada input le agregamos una clase error
        datos[i].classList.add('input-error');

    }

}

//a esta funcion le pasamos un array
function inputErrorRemove(datos){
    for (let i = 0; i < datos.length; i++) {
        //removemos la clase
        datos[i].classList.remove('input-error');

    }

}

/*===============================================
    Válidamos solo letras y numeros
================================================*/
function validarLetrasNumeros(valor){
    if(!/^[a-zA-Z0-9]+$/.test(valor)){
        return false;
    }
    return true;
}


/*===============================================
    Válidamos solo letras
================================================*/
function validarSoloLetras(valor){
    if(!/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/.test(valor)){
        return false;
    }
    return true;
}

/*===============================================
    Válidamos un corrreo valido
================================================*/

function validarCorreo(valor){
    if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(valor)){
        return false;
    }

    return true;
}

/*===============================================
    Válidamos solo número
================================================*/

function validarSoloNumeros(valor){
    if(!/^([0-9]{8})*$/.test(valor)){
        return false;
    }
    return true;
}