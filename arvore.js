jQuery(function(){
    //INICIO DO JQUERY
    $(document).ready(function(){
        montarBotoes()
        adicionaLinha()
        editaLinha()
        adicionaColuna()
        listarDados()
    })

    function montarBotoes(){
        $(".bt_adicionar_coluna").on("click",function(){
            $("#ModalSalvaColuna").modal("show");
        })
        $(".bt_editar_nome").on("click",function(e){
            e.preventDefault()
            $("#ModalSalvaColuna").modal("show");
        })
        $(".bt_adiciona_linha").on("click",function(e){
            e.preventDefault()
            $("#ModalSalvaLinha").modal("show");
            $("#ModalSalvaLinha input[name=IDLinha]").val("")
            $("#ModalSalvaLinha textarea[name=NMConteudo]").val("")
        })
        $(".bt_editar_linha").on("click",function(e){
            e.preventDefault()
            $("#ModalSalvaLinha").modal("show");
        })
        $("#ModalOptionsColuna").on("hide.bs.modal",function(){
            $("#ModalSalvaLinha input[name=NUColuna]").val("")
            $("#ModalSalvaLinha input[name=IDLinha]").val("")
            $("#ModalSalvaLinha textarea[name=NMConteudo]").val("")
            $("#ModalSalvaLinha input[name=ligacaoColuna]").val("")
            window.location.href = "arvore.php";
        })
        $("#ModalSalvaColuna").on("hide.bs.modal",function(){
            $("#ModalSalvaColuna input[name=ligacaoColuna]").val("")
            window.location.href = "arvore.php";
        })
    }



   function listarDados(){ 
        $.ajax({
           url: "colunas.php", 
           async: true
       }).done(function (data) { 
           //a = true;
           $(".arvore").html(data); 
           adicionaLinha()
           editaLinha()
       });
   }

   function adicionaLinha(){
    $(".coluna h3").on("click",function(){
        $("#ModalOptionsColuna").modal("show");
            var NUColuna = $(this).parent(".coluna").attr("data-id")
            $(".bt_salvar_linha").on("click",function(){
                formLinha(NUColuna)
            })
            $(".bt_excluir_coluna").on("click",function(){
                excluirColuna(NUColuna);
            })
        })
   }

   function adicionaColuna(){
    
    $(".bt_salvar_coluna").on("click",function(){
        $("#ModalSalvaLinha").modal("show");
        var NUColuna = $(this).parent(".coluna").attr("data-id")
        if(!NUColuna){
            numero = $("input[name=numeroColuna]").val();
        }else{
            numero = "";
        }
        // alert(numero)
        // return false
        $.ajax({
            url : "enviaDados.php",
            method : "POST",
            data : {
                acao : "Coluna",
                nome : $("input[name=nomeColuna]").val(),
                numero  : numero
        }
        }).done(function(){
            $("#ModalSalvaColuna").modal("hide");
            $("#ModalOptionsColuna").modal("hide");
            listarDados();
        })
    })
        
   }

    function editaLinha(){
        $(".linha").on("click",function(){
            $("#ModalOptionsLinha").modal("show");
            var IDLinha = $(this).attr("data-id")
            var conteudo = $("p",this).text().trim();
            var NUColuna = $(this).parent(".coluna").attr("data-id");
            var ligacao = $('input',this).val();
            $("#ModalSalvaLinha input[name=NUColuna]").val(NUColuna)
            $("#ModalSalvaLinha input[name=IDLinha]").val(IDLinha)
            $("#ModalSalvaLinha input[name=ligacaoColuna]").val(ligacao)
            $("#ModalSalvaLinha textarea[name=NMConteudo]").val(conteudo)
            $(".bt_salvar_linha").on("click",function(){
                formLinha(NUColuna)
            })
            $(".bt_excluir_linha").on("click",function(){
                excluirLinha(IDLinha);
            })
        })
    }

    function excluirLinha(ID){
        $.ajax({
            url : "excluiDados.php",
            method : "POST",
            data : {
                acao : "Linha",
                ID  : ID
        }
        }).done(function(){
            $("#ModalSalvaLinha").modal("hide");
            $("#ModalOptionsLinha").modal("hide");
            listarDados();
        })
    }

    function excluirColuna(ID){
        $.ajax({
            url : "excluiDados.php",
            method : "POST",
            data : {
                acao : "Coluna",
                ID  : ID
        }
        }).done(function(){
            $("#ModalSalvaColuna").modal("hide");
            $("#ModalOptionsColuna").modal("hide");
            listarDados();
        })
    }

    function formLinha(NUColuna){
        $.ajax({
            url : "enviaDados.php",
            method : "POST",
            data : {
                acao : "Linha",
                conteudo : $("textarea[name=NMConteudo]").val(),
                ID      : $("input[name=IDLinha]").val(),
                ligacao : $("input[name=ligacaoColuna]").val(),
                numero  : NUColuna
        }
        }).done(function(){
            $("#ModalSalvaLinha").modal("hide");
            $("#ModalOptionsLinha").modal("hide");
            listarDados();
        })
    }

    //FIM DO JQUERY
})