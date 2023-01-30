           <?php
           require"classes.php";
           ?>
           <!--COLUNA 1-->
           <?php
           if(odbc_fetch_row($arvore->getColunas(1,$_SESSION["IDOco"]))){
            $col = $arvore->getColunas(1,$_SESSION["IDOco"]);
            $titulo = odbc_result($col,"NMColuna");
            $identity = odbc_result($col,"ID");
           ?> 
           <div class="coluna" data-id="1" identity="<?=$identity?>">
                <!--BOTÃO DE ADICIONAR LINHA-->
                <h3>
                 <?=$titulo?>
                </h3>
                <br>
                <!--LINHAS-->
                <?php
                $c1 = $arvore->getLinhas(1,$_SESSION["IDOco"]);
                while(odbc_fetch_row($c1)){
                ?>
                <div class="linha" data-id="<?=odbc_result($c1,"ID")?>" style="border-color:<?=odbc_result($c1,"NMCor");?>">
                <input type="hidden" value="<?=odbc_result($c1,"NMCor");?>">
                    <p>
                        <?php echo odbc_result($c1,"NMConteudo");?>
                    </p>
                </div>
                <?php
                }
                ?>
                <!--/LINHAS-->
            </div>
            <?php
           }
            ?>
            <!--COLUNA 2-->
            <?php
           if(odbc_fetch_row($arvore->getColunas(2,$_SESSION["IDOco"]))){
            $col = $arvore->getColunas(2,$_SESSION["IDOco"]);
            $titulo = odbc_result($col,"NMColuna");
            $identity = odbc_result($col,"ID");
           ?> 
           <div class="coluna" data-id="2" identity="<?=$identity?>">
                <!--BOTÃO DE ADICIONAR LINHA-->
                <h3>
                    <?=$titulo?>
                </h3>
                <br>
                <!--LINHAS-->
                <?php
                $c1 = $arvore->getLinhas(2,$_SESSION["IDOco"]);
                while(odbc_fetch_row($c1)){
                ?>
                <div class="linha" data-id="<?=odbc_result($c1,"ID")?>" style="border-color:<?=odbc_result($c1,"NMCor");?>">
                <input type="hidden" value="<?=odbc_result($c1,"NMCor");?>">
                    <p>
                        <?php echo odbc_result($c1,"NMConteudo");?>
                    </p>
                </div>
                <?php
                }
                ?>
                <!--/LINHAS-->
            </div>
            <?php
           }
            ?>
            <!--COLUNA 3-->
            <?php
           if(odbc_fetch_row($arvore->getColunas(3,$_SESSION["IDOco"]))){
            $col = $arvore->getColunas(1,$_SESSION["IDOco"]);
            $titulo = odbc_result($col,"NMColuna");
            $identity = odbc_result($col,"ID");
           ?> 
           <div class="coluna" data-id="3" identity="<?=$identity?>">
                <!--BOTÃO DE ADICIONAR LINHA-->
                <h3>
                    <?=$titulo?>
                </h3>
                <br>
                <!--LINHAS-->
                <?php
                $c1 = $arvore->getLinhas(3,$_SESSION["IDOco"]);
                while(odbc_fetch_row($c1)){
                ?>
                <div class="linha" data-id="<?=odbc_result($c1,"ID")?>" style="border-color:<?=odbc_result($c1,"NMCor");?>">
                <input type="hidden" value="<?=odbc_result($c1,"NMCor");?>">
                    <p>
                        <?php echo odbc_result($c1,"NMConteudo");?>
                    </p>
                </div>
                <?php
                }
                ?>
                <!--/LINHAS-->
            </div>
            <?php
           }
            ?>
            <!--COLUNA 4-->
            <?php
           if(odbc_fetch_row($arvore->getColunas(4,$_SESSION["IDOco"]))){
            $col = $arvore->getColunas(4,$_SESSION["IDOco"]);
            $titulo = odbc_result($col,"NMColuna");
            $identity = odbc_result($col,"ID");
           ?> 
           <div class="coluna" data-id="4" identity="<?=$identity?>">
                <!--BOTÃO DE ADICIONAR LINHA-->
                <h3>
                    <?=$titulo?>
                </h3>
                <br>
                <!--LINHAS-->
                <?php
                $c1 = $arvore->getLinhas(4,$_SESSION["IDOco"]);
                while(odbc_fetch_row($c1)){
                ?>
                <div class="linha" data-id="<?=odbc_result($c1,"ID")?>" style="border-color:<?=odbc_result($c1,"NMCor");?>">
                <input type="hidden" value="<?=odbc_result($c1,"NMCor");?>">
                    <p>
                        <?php echo odbc_result($c1,"NMConteudo");?>
                    </p>
                </div>
                <?php
                }
                ?>
                <!--/LINHAS-->
            </div>
            <?php
           }
            ?>
            <!--COLUNA 5-->
            <?php
           if(odbc_fetch_row($arvore->getColunas(5,$_SESSION["IDOco"]))){
            $col = $arvore->getColunas(5,$_SESSION["IDOco"]);
            $titulo = odbc_result($col,"NMColuna");
            $identity = odbc_result($col,"ID");
           ?> 
           <div class="coluna" data-id="5" identity="<?=$identity?>">
                <!--BOTÃO DE ADICIONAR LINHA-->
                <h3>
                    <?=$titulo?>
                </h3>
                <br>
                <!--LINHAS-->
                <?php
                $c1 = $arvore->getLinhas(5,$_SESSION["IDOco"]);
                while(odbc_fetch_row($c1)){
                ?>
                <div class="linha" data-id="<?=odbc_result($c1,"ID")?>" style="border-color:<?=odbc_result($c1,"NMCor");?>">
                <input type="hidden" value="<?=odbc_result($c1,"NMCor");?>">
                    <p>
                        <?php echo odbc_result($c1,"NMConteudo");?>
                    </p>
                </div>
                <?php
                }
                ?>
                <!--/LINHAS-->
            </div>
            <?php
           }
            ?>
            <!--COLUNA 6-->
            <?php
           if(odbc_fetch_row($arvore->getColunas(6,$_SESSION["IDOco"]))){
            $col = $arvore->getColunas(6,$_SESSION["IDOco"]);
            $titulo = odbc_result($col,"NMColuna");
            $identity = odbc_result($col,"ID");
           ?> 
           <div class="coluna" data-id="6" identity="<?=$identity?>">
                <!--BOTÃO DE ADICIONAR LINHA-->
                <h3>
                    <?=$titulo?>
                </h3>
                <br>
                <!--LINHAS-->
                <?php
                $c1 = $arvore->getLinhas(6,$_SESSION["IDOco"]);
                while(odbc_fetch_row($c1)){
                ?>
                <div class="linha" data-id="<?=odbc_result($c1,"ID")?>" style="border-color:<?=odbc_result($c1,"NMCor");?>">
                <input type="hidden" value="<?=odbc_result($c1,"NMCor");?>">
                    <p>
                        <?php echo odbc_result($c1,"NMConteudo");?>
                    </p>
                </div>
                <?php
                }
                ?>
                <!--/LINHAS-->
            </div>
            <?php
           }
            ?>
            <!--COLUNA 7-->
            <?php
           if(odbc_fetch_row($arvore->getColunas(7,$_SESSION["IDOco"]))){
            $col = $arvore->getColunas(7,$_SESSION["IDOco"]);
            $titulo = odbc_result($col,"NMColuna");
            $identity = odbc_result($col,"ID");
           ?> 
           <div class="coluna" data-id="7" identity="<?=$identity?>">
                <!--BOTÃO DE ADICIONAR LINHA-->
                <h3>
                    <?=$titulo?>
                </h3>
                <br>
                <!--LINHAS-->
                <?php
                $c1 = $arvore->getLinhas(7,$_SESSION["IDOco"]);
                while(odbc_fetch_row($c1)){
                ?>
                <div class="linha" data-id="<?=odbc_result($c1,"ID")?>" style="border-color:<?=odbc_result($c1,"NMCor");?>">
                <input type="hidden" value="<?=odbc_result($c1,"NMCor");?>">
                    <p>
                        <?php echo odbc_result($c1,"NMConteudo");?>
                    </p>
                </div>
                <?php
                }
                ?>
                <!--/LINHAS-->
            </div>
            <?php
           }
            ?>
            <!--COLUNA 8-->
            <?php
           if(odbc_fetch_row($arvore->getColunas(8,$_SESSION["IDOco"]))){
            $col = $arvore->getColunas(8,$_SESSION["IDOco"]);
            $titulo = odbc_result($col,"NMColuna");
            $identity = odbc_result($col,"ID");
           ?> 
           <div class="coluna" data-id="8" identity="<?=$identity?>">
                <!--BOTÃO DE ADICIONAR LINHA-->
                <h3>
                    <?=$titulo?>
                </h3>
                <br>
                <!--LINHAS-->
                <?php
                $c1 = $arvore->getLinhas(8,$_SESSION["IDOco"]);
                while(odbc_fetch_row($c1)){
                ?>
                <div class="linha" data-id="<?=odbc_result($c1,"ID")?>" style="border-color:<?=odbc_result($c1,"NMCor");?>">
                <input type="hidden" value="<?=odbc_result($c1,"NMCor");?>">
                    <p>
                        <?php echo odbc_result($c1,"NMConteudo");?>
                    </p>
                </div>
                <?php
                }
                ?>
                <!--/LINHAS-->
            </div>
            <?php
           }
            ?>
            <!--COLUNA 9-->
            <?php
           if(odbc_fetch_row($arvore->getColunas(9,$_SESSION["IDOco"]))){
            $col = $arvore->getColunas(9,$_SESSION["IDOco"]);
            $titulo = odbc_result($col,"NMColuna");
            $identity = odbc_result($col,"ID");
           ?> 
           <div class="coluna" data-id="9" identity="<?=$identity?>">
                <!--BOTÃO DE ADICIONAR LINHA-->
                <h3>
                    <?=$titulo?>
                </h3>
                <br>
                <!--LINHAS-->
                <?php
                $c1 = $arvore->getLinhas(9,$_SESSION["IDOco"]);
                while(odbc_fetch_row($c1)){
                ?>
                <div class="linha" data-id="<?=odbc_result($c1,"ID")?>" style="border-color:<?=odbc_result($c1,"NMCor");?>">
                <input type="hidden" value="<?=odbc_result($c1,"NMCor");?>">
                    <p>
                        <?php echo odbc_result($c1,"NMConteudo");?>
                    </p>
                </div>
                <?php
                }
                ?>
                <!--/LINHAS-->
            </div>
            <?php
           }
            ?>
            <!--COLUNA 10-->
            <?php
           if(odbc_fetch_row($arvore->getColunas(10,$_SESSION["IDOco"]))){
            $col = $arvore->getColunas(10,$_SESSION["IDOco"]);
            $titulo = odbc_result($col,"NMColuna");
            $identity = odbc_result($col,"ID");
           ?> 
           <div class="coluna" data-id="10" identity="<?=$identity?>">
                <!--BOTÃO DE ADICIONAR LINHA-->
                <h3>
                    <?=$titulo?>
                </h3>
                <br>
                <!--LINHAS-->
                <?php
                $c1 = $arvore->getLinhas(10,$_SESSION["IDOco"]);
                while(odbc_fetch_row($c1)){
                ?>
                <div class="linha" data-id="<?=odbc_result($c1,"ID")?>" style="border-color:<?=odbc_result($c1,"NMCor");?>">
                <input type="hidden" value="<?=odbc_result($c1,"NMCor");?>">
                    <p>
                        <?php echo odbc_result($c1,"NMConteudo");?>
                    </p>
                </div>
                <?php
                }
                ?>
                <!--/LINHAS-->
            </div>
            <?php
           }
            ?>
            <script>
                $(".coluna:first-child h3").text("Efeito")
            </script>