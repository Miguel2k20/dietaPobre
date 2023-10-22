import React from 'react';
import "./Login.css";
import image from "../../images/fruit-salad.svg";

function Login() {
  return (
<div className="Login-Container">

<div className="container">
<div className="Form-Container">

<div className="welcome">
<h1>Bem Vindo!</h1>
</div>

<form>
  <input type="email" placeholder="Email"/>
  <input  type="password" placeholder="Senha"/>

  <button href="#">Login</button>
</form>

  <a href="#">Esqueceu sua senha?</a>

</div>

  <div className='create-account'>
    <span>Não possui uma conta?</span> <a href="#">Criar conta</a>
  </div>
</div>


<div className="image">
<img src={image} alt="side-image"/>
</div>


</div>
  )
}

export default Login;
