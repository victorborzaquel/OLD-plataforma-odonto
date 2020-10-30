<?php 
    $pagina = "";
    include '../_include/head.html'; 
?>

    <section class="sectionBloco">
        <div id="divLogo">
            <img src="../images/Logo.png" alt="Plataforma Odonto" class="imgLogo">
            <h2>Bem Vindo a primeira plataforma feita para você, <br>estudante de Odontologia.</h2>
            <hr>
        </div><!--id="divLogo"-->
        
        <div id="divLogIn">
            <form action="entrar.php" method="POST" id="formlogIn">
                <input type="email" name="email" id="logInEmail" placeholder="Email">
                <input type="password" name="senha" id="logInSenha" placeholder="Senha">

                <div id="divLogInButton">
                    <button type="submit">Entrar</button>
                    <button>Criar Conta</button>
                </div>
                
            </form><!--id="formlogIn"-->
        </div><!--id="divLogIn"-->
    </section>

<?php 
    include '../_include/footer.html';
?>