<?php
    $speakers = [
        [
            name => "Fernanda Frandsen",
            img => "/static/images/speakers/fernanda.jpg",
            bio => ""
        ],
        [
            name => "Oliver Yatsugafu",
            img => "/static/images/speakers/oliver.jpg",
            bio => ""
        ],
        [
            name => "Ciranda de Morais",
            img => "/static/images/speakers/ciranda.jpg",
            bio => ""
        ],
        [
            name => "José Humberto",
            img => "/static/images/speakers/jose.jpg",
            bio => ""
        ],
        [
            name => "Carlos Pirovani",
            img => "/static/images/speakers/carlos.jpg",
            bio => ""
        ],
        [
            name => "Erinete Leite",
            img => "/static/images/speakers/erinete.jpg",
            bio => "Psicologa, Neurocientista por vocação e Professora. Vinda de família muito pobre e sem suporte familiar, formou-se convivendo com Transtorno de Personalidade Borderline, que agrava muito a convivência com outras pessoas e pressões sociais. Contra todas as expectativas, ganhou a participação em curso de Neurociências na UFRGS, apresentou trabalho sobre ansiedade em congresso internacional, fundou o primeiro curso de extensão em Neurociências do MT e graduou-se na UFMT antes do tempo, simultaneamente nos papéis de paciente e terapeuta.",
            links => [
                linkedin => "https://www.linkedin.com/in/erinete-leite-14a110137"
            ]
        ],
        /*[
            name => "Clara Vaz",
            img => "/static/images/speakers/clara.jpg",
            bio => ""
        ],*/
        [
            name => "Flavio Tampeline",
            img => "/static/images/speakers/flavio.jpg",
            bio => ""
        ],
        /*[
            name => "Carolina Joana",
            img => "/static/images/speakers/carolina.jpg",
            bio => ""
        ],*/ 
        [
            name => "João Lucas Neves",
            img => "/static/images/speakers/joao.jpg",
            bio => ""
        ]
    ];
    $index = 0;
?>
<div id="fh5co-about-us" data-section="speakers">
    <div class="container">
        <div class="row" id="team-us">
             <div class="row" id="team">
                <div class="col-md-12 section-heading text-center to-animate">
                    <h2>Palestrantes</h2>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="row row-bottom-padded-lg">
                        <?php foreach($speakers as $member){ $index++;?>                            
                            <div class="col-md-3 text-center to-animate fadeInUp animated">
                                <div class="card">
                                    <img src="<?php echo $member["img"] ?>" alt="<?php echo $member["name"] ?>" style="width:100%;border-radius: 6px;">
                                    <h1 style="font-size: 25px;"><?php echo $member["name"] ?></h1>
                                    <p style="font-size: 11px; text-align: center; margin-left: 14px; margin-right: 14px;">
                                        <?php echo $member["bio"] ?>
                                    </p>
                                </div>
                            </div>
                        <?php if($index % 4 == 0){ ?>
                                </div>
                            </div>
                            <div class="clearfix visible-md-block visible-lg-block"></div>
                            <div class="col-md-12">
                                <div class="row row-bottom-padded-lg">
                        <?php }
                            } ?>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>