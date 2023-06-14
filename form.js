// const pass = document.querySelector("pass");
//         const eyes = document.querySelector("toggle");

//         eyes.addEventListener("click", function() {

//             const type = pass.getAttribute("type") === "password" ? "text" : "password";
//   pass.setAttribute("type", type);
//   this.classList.toggle("bi-eye");
//         })

//         const pass1 = document.querySelector("cpass");
//         const eyes1 = document.querySelector("show2");

//         eyes.addEventListener("click", function() {
           
//             const type = pass1.getAttribute("type") === "password" ? "text" : "password";
//   pass1.setAttribute("type", type);
//   this.classList.toggle("bi-eye");
//         });

const resetpass = ()=> {
    const pass = document.getElementById('pass').value;
    const cpass = document.getElementById('cpass').value;

    if(pass !== cpass){
        return('password do not match ..  pless Enter the crect password');
    }else{
        alert('your data saved');
    }
};

// const pass = document.getElementById('pass');
// const toggle = document.getElementById('toggle');

// toggle.addEventListener('click', ()=> {
//     if(pass.type=='password'){
//         pass.type='text';
//         toggle.classList.remove('bi bi-eye');
//         toggle.classList.add('bi bi-eye-slash');
//     }else{
//         pass.type='password';
//         toggle.classList.remove('bi bi-eye-slash');
//         toggle.classList.add('bi bi-eye');
//     }
// });
// const pass1 = document.getElementById('cpass');
// const toggle1 = document.getElementById('toggle1');

// toggle1.addEventListener('click', ()=> {
//     if(pass1.type=='password'){
//         pass1.type='text';
//         toggle1.classList.remove('bi bi-eye');
//         toggle1.classList.add('bi bi-eye-slash');
//     }else{
//         pass1.type='password';
//         toggle1.classList.remove('bi bi-eye-slash');
//         toggle1.classList.add('bi bi-eye');
//     }
// });
