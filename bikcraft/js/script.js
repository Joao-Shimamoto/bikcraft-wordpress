if(window.SimpleSlide){

    new SimpleSlide({
        slide: 'quote', // nome do atributo data-slide="principal"
    // nav: true, // se deve ou não mostrar a navegação //
    // auto: true, // se o slide deve passar automaticamente  Já é true por padrão //
        time: 5000, // tempo de transição dos slides, significa 5 segundos.
        pauseOnHover: true, // pausa a transição automática
    })

    new SimpleSlide({
        slide: 'portfolio',
        time: 5000, 
        nav: true,
        pauseOnHover: true,
    })

}

if(window.SimpleAnime){
    new SimpleAnime();    
}

if(window.SimpleForm){
    new SimpleForm({
        form: ".formphp", // seletor do formulário
        button: "#enviar", // seletor do botão
        erro: "<div id='form-erro'><h2>Erro no envio!</h2><p>Um erro ocorreu, tente para o email contato@bikcraft.com.</p></div>", // mensagem de erro
        sucesso: "<div id='form-sucesso'><h2>Formulário enviado com sucesso</h2><p>Em breve eu entro em contato com você.</p></div>", // mensagem de sucesso
    });
}