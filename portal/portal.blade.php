<!DOCTYPE html>
<html lang="pt">
    @include("portal.item._head")
    <body>
        <div class="nav-section">
            <ul class="nav">
                <li><a href="#login" class="scroll login">Login</a></li>
                <li><a href="#contato" class="scroll contato">Contato</a></li>
                <li><a href="#work" class="scroll work">Work</a></li>
            </ul>
        </div>
        
        {{--- PAINEL ABERTURA MODAL 

        <div class="panel">
	       @include("portal.item.work")
        </div>

        --}}

        <div class="container-narrow">


            {{-- ---- MENU --- --}}
            @if(false)
	        <div class="menu">
	            <div class="nav-bar"></div>
	            <div class="nav-bar"></div>
	            <div class="nav-bar"></div>
	        </div>
            @endif

			{{-- INICIO DAS LINHAS--}}

	        <div class="row">

                {{-- Bloco 01 - Logo --}}
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> 
                    <div class="well azul">
                        <img src="assets/img/logo-big.png">
                        <div class="row marca">
                            <h1>WebGeop</h1>
                            <p class="marca-desc">Sistema on-line para Gestão de Facilities</p>
                        </div>                        
                        <div class="row">
                            <p class="copy">&copy; webgeop, 2013</p>
                        </div>          
                    </div>
                </div>
                {{-- FIM - Bloco 01 --}}

                {{-- Bloco 02 - Descrição do Sistema --}}
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 hidden-xs">
				    <div class="imagebg-2 well fixed-height">
				        <p class="desc-sis">
                        Ferramenta colaborativa, que permite controlar, monitorar e fazer uma gestão dos processos compartilhados envolvidos na área operacional e de manutenção.
                        </p>				    	
				    </div>
				</div>	 
                {{-- FIM - Bloco 02 --}}

                {{-- Bloco 03 - LOGIN --}}
	            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
	                <div class="blueberry well overflow-show fixed-height" id="login">
	                    <h1 class="login">Login</h1>
	                    <form id="tab">
                            <div class="outer-login">
                                <input name="id" type="text" placeholder="Usuário" value="" class="input-block-level input-login">
                                <input name="pass" type="password" placeholder="Senha" value="" class="input-block-level input-login">
                                <input type="button" class="btn blue btn-block btn-login pull-right" value="Fazer Login" onClick="login(this.form)"</input>
    	                    </div>
                        </form>
                        <div class="pull-right login-ajuda">
                            <a href="/blank">Precisa de Ajuda ?</a>
                        </div>
	                </div>
                </div>
            </dic>
            {{-- FIM - Bloco 03 --}}

            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 hidden-xs">
			    @include("portal.item.content_slider")
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                @include("portal.item.contato")
            </div>

        </div>
    </body>
    @include("portal.item._scripts")
</html>


</script>
