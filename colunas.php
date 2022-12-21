           <?php
           require"classes.php";
           ?>
           <!--COLUNA 1-->
           <?php
           if($arvore->getColunas(1,$_SESSION["IDOco"])){
           ?> 
           <div class="coluna" data-id="1">
                <!--BOTÃO DE ADICIONAR LINHA-->
                <h3>
                 Efeito
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
           if($arvore->getColunas(2,$_SESSION["IDOco"])){
           ?> 
           <div class="coluna" data-id="2">
                <!--BOTÃO DE ADICIONAR LINHA-->
                <h3>
                    Efeito
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
           if($arvore->getColunas(3,$_SESSION["IDOco"])){
           ?> 
           <div class="coluna" data-id="3">
                <!--BOTÃO DE ADICIONAR LINHA-->
                <h3>
                    Efeito
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
           if($arvore->getColunas(4,$_SESSION["IDOco"])){
           ?> 
           <div class="coluna" data-id="4">
                <!--BOTÃO DE ADICIONAR LINHA-->
                <h3>
                    Efeito
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
           if($arvore->getColunas(5,$_SESSION["IDOco"])){
           ?> 
           <div class="coluna" data-id="5">
                <!--BOTÃO DE ADICIONAR LINHA-->
                <h3>
                    Efeito
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
           if($arvore->getColunas(6,$_SESSION["IDOco"])){
           ?> 
           <div class="coluna" data-id="6">
                <!--BOTÃO DE ADICIONAR LINHA-->
                <h3>
                    Efeito
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
           if($arvore->getColunas(7,$_SESSION["IDOco"])){
           ?> 
           <div class="coluna" data-id="7">
                <!--BOTÃO DE ADICIONAR LINHA-->
                <h3>
                    Efeito
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
           if($arvore->getColunas(8,$_SESSION["IDOco"])){
           ?> 
           <div class="coluna" data-id="8">
                <!--BOTÃO DE ADICIONAR LINHA-->
                <h3>
                    Efeito
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
           if($arvore->getColunas(9,$_SESSION["IDOco"])){
           ?> 
           <div class="coluna" data-id="9">
                <!--BOTÃO DE ADICIONAR LINHA-->
                <h3>
                    Efeito
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
           if($arvore->getColunas(10,$_SESSION["IDOco"])){
           ?> 
           <div class="coluna" data-id="10">
                <!--BOTÃO DE ADICIONAR LINHA-->
                <h3>
                    Efeito
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