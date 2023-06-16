
function worngpas(){
    const pass = document.getElementById('pass').value;
    const cpass = document.getElementById('cpass').value;

    if(pass !== cpass){
        alert('password do not match ..  pless Enter the crect password');
    }else{
        alert('your data saved');
    }
};
