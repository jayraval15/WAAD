// const pass = document.querySelector("pass");
//         const eyes = document.querySelector("show1");

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
    const show1 = document.getElementById('show1').value;

    if(pass !== show1){
        alert('password do not match ..  pless Enter the crect password');
    }else{
        alert('your data saved');
    }
}

const showpass = ()=> {
    const pass = document.getElementById('pass');
    const show1 = document.getElementById('show1');

    if(pass.type === 'password'){
        pass.type = 'text';
        show1.textContent = 'Hide';
    }else{
        pass.type = 'password';
        show1.textContent = 'Show';
    }
}