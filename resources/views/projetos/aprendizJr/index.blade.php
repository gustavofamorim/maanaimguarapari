@extends('layouts.project', ['aditional' => 'Projeto Aprendiz Júnior',
                             'breadcrumb' => 'aprendiz-jr',
                             'ogpDescription'=> 'Projeto Aprendiz Júnior, ensinando nossas crianças a tocarem para o Senhor Jesus!',
                             'ogpImage' => asset('img/projeto-aprendiz-jr.png')])

@section('title', 'Projeto Aprendiz Júnior')

@section('content')
<div class="background-img">
    <img src="{{ asset('img/aprendiz-jr-page-background.jpg') }}"></img>
</div>
<div class="container projeto-aprendiz-jr-container">
    <div class="row">
        <div class="col-md-12">
            <h1>Projeto Aprendiz Júnior</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 presentation">
            <div class="presentation-title">
                <h2>A Paz do Senhor Jesus</h2>
                <h4>Seja bem-vindo!</h4>
            </div>
            <div class="presentation-content">
                <p>O Projeto Aprendiz Júnior iniciou- se em Guarapari em 2010, com uma pequena turma de flauta doce, ministrado por duas professoras de classe, que objetivavam ensinar crianças e adolescentes a aprenderem um instrumento para tocar em suas Igrejas. A turma de alunos era composta por 30  cias de  07  Igrejas da Área de Guarapari. Em 2012, o Senhor orientou a capacitar professoras para que essas ministrassem o ensino musical e espiritual em suas Igrejas, tornando o Projeto muito mais  abrangente. Além do ensino da flauta doce, hoje os aprendizes são contemplados com ensino de instrumentos de percussão e, dando continuidade ao Projeto Aprendiz Júnior, eles são inseridos no Projeto Aprendiz da Área de Guarapari recebendo aulas de instrumentos melódicos como violino, flauta transversal, saxofone, trombone, clarinete entre outros.</p>
                <p>Todos os aprendizes se reúnem periodicamente  para  ensaios, cultos, evangelizações nos bairros. Cada Igreja tem um monitor responsável. Todo o material de ensaio é  disponibilizado  em capacitações onde o Senhor tem dado  o  entendimento  de  Corpo e muito tem acrescentado na vida espiritual das CIAS e professores de toda a  área de  Guarapari.</p>
                <p>Atualmente, 29 Igrejas da nossa área fazem parte do Projeto. Temos um Pastor responsável, um diácono como  coordenador  e 142 monitores sendo capacitados e ministrando essa herança maravilhosa que é o louvor para  as  414 cias  que  temos  distribuídas nessas 29  Igrejas.</p>
                <p>Muito o Senhor nos abençoou nesses 07 anos de Projeto Aprendiz Júnior!</p>
            </div>
        </div>
        <div class="col-sm-6 directives">
            <div class="col-md-12">
                <div class="directives-title">
                    <h1>Diretrizes do Projeto</h1>
                </div>
                <div class="directives-content">
                        
                        @component('components.modal')
                            @slot('btnClass', 'btn-primary')
                            @slot('id', 'modal-objetivos')
                            @slot('title', 'Objetivo')
                            @slot('content')
                                <p>O objetivo desse Projeto é dar às CIAS  uma  condição  de terem uma vida espiritual diante do  Senhor através do compromisso com o  louvor da casa do  Senhor.    </p>
                                <p>Esse trabalho visa levar à prática os  ensinamentos  e doutrinas que são transmitidos pela Igreja tais como o louvor agradável ao Senhor, o levar a "preciosa semente" que são as evangelizações, a reverência na casa do Senhor, a vida de testemunho, o sacerdócio universal do crente e tantos outros ensinamentos maravilhosos revelados pelo Senhor que  temos vivido na prática através desse  Projeto.</p>
                                <p>Esse trabalho é a oportunidade de as CIAS atuarem efetivamente na Igreja durante todo o ano, não apenas nos meses de março e outubro.</p>
                                <p>Fazendo esse trabalho, ao longo dos anos temos colhido bons frutos que são CIAS  com  entendimento do  louvor agradável  ao Senhor, preparados musicalmente e que têm se tornado jovens integrados no louvor das Igrejas; e também o envolvimento e o compromisso das famílias dos nossos alunos, sempre  apoiando  esse trabalho.</p>
                                <p>Vale a pena ressaltar que o trabalho do Projeto Aprendiz Júnior não se resume apenas ao louvor mas é de suma importância o cuidado com a criança, o intermediário e o adolescente dia a dia.</p>
                            @endslot
                        @endcomponent
                    
                    
                        @component('components.modal')
                            @slot('btnClass', 'btn-success')
                            @slot('id', 'modal-monitores')
                            @slot('title', 'Monitores')
                            @slot('content')
                                <p>Para ministrar o ensino "musical” nas Igrejas, temos contado com professoras de classes, pois essas estão mais próximas das crianças e geralmente possuem didática para lidar com as necessidades de cada CIA. Entretanto nada impede  que  pais, jovens batizados, instrumentistas, com vida espiritual e comprometidos com o  Espirito Santo participem desse  trabalho.</p>
                                <p><strong>Características dos monitores:</strong></p>
                                <ul>
                                    <li>Servos(as) de oração, comprometidos com o Espirito Santo;</li>
                                    <li>Que amem as  CIAS;</li>
                                    <li>Irmãos pacientes;</li>
                                    <li>Irmãos que tenham sabedoria para lidar com as CIAS e com os pais.</li>
                                </ul>
                                <p>Para o bom desenvolvimento do Projeto, o ideal é que em cada Igreja haja uma monitora responsável por cada naipe: uma para as flautas, outra para os toquinhos, outra para os tambores e assim por diante. Uma delas poderá ser a responsável geral pelo trabalho na sua Igreja.</p>
                                <p>Lembramos que a função do monitor é transmitir para o seu grupo o que foi passado nas capacitações. Não é objetivo do  Projeto contar com instrumentistas isolados, que comparecem apenas para tocar os  louvores, cada  monitor deve ter a  sua turma   e  se dedicar a ela.</p>
                                <p>A igreja que possui apenas uma irmã como monitora não deve iniciar o trabalho com a percussão. As CIAS  devem  ser direcionadas para a turma de flauta doce. Ressaltamos que a irmã professora deve aprender a flauta doce para ela mesma ensinar na sua própria Igreja. Esse aprendizado é simples, fácil e com  um pouco de  perseverança a  monitora já  estará tocando os  louvores.  O Senhor acrescentará mais irmãs e então poderão iniciar  o  trabalho com a  percussão.</p>
                            @endslot
                        @endcomponent
                    
                    
                        @component('components.modal')
                            @slot('btnClass', 'btn-warning')
                            @slot('id', 'modal-instrumentos')
                            @slot('title', 'Instrumentos')
                            @slot('content')
                                <p><strong>A percussão</strong></p>
                                <p>São usados instrumentos como o chocalho (ovinho/ ganzá), o toquinho (clave), a meia-lua e o tambor. São 4 (quatro) naipes diferentes, cada um com sua própria maneira de tocar e seus arranjos.</p>
                                <p>A faixa etária apropriada para tocar cada um desses instrumentos de percussão é  a  seguinte:</p>
                                <ul>
                                    <li>3 a 5 anos: Chocalho (é um instrumento mais leve e  não requer muito da  criança)</li>
                                    <li>6 a 8 anos: Clave/toquinho (precisa de um grau de dedicação maior)</li>
                                    <li>9 anos em diante: Meia-lua e tambor (são instrumentos que exigem muito mais empenho  para  tocá- los).</li>
                                </ul>
                                <p><strong>OBS:</strong> Não há uma regra. O que precisamos ter é bom senso e saber administrar as condições de cada criança para tocar determinado instrumento. Percebe-se, por exemplo, que um adolescente se sente deslocado tocando um   chocalho.</p>
                                <p>A grande maioria das crianças e intermediários que tocam instrumento de percussão, à medida que vão se tornando adolescentes, devem ser encaminhados a aprenderem um instrumento melódico (flauta transversal, violino, etc).  Dessa forma, vão crescendo e sendo integrados ao grupo  de instrumentistas da Igreja e ao grupo de  monitores  do  próprio  Projeto Aprendiz Júnior. Alguns meninos da percussão devem ser encaminhados para aulas de bateria, eles serão os futuros bateristas da Igreja e  também professores de bateria   futuramente.</p>
                                <p><strong>A aquisição dos instrumentos de percussão:</strong> os instrumentos de percussão podem ser confeccionados pelas  próprias professoras juntamente com seus alunos e até mesmo os pais em uma atividade lúdica e prazerosa, usando materiais reciclados, não ocasionando assim despesas financeiras. Os chocalhos podem ser feitos com garrafinhas pet com um pouquinho de arroz dentro; os toquinhos, de cabos de vassoura com aproximadamente 20 cm; e os tambores, de latas vazias (de  Mocilon, por exemplo, que são maiores). Todos os instrumentos podem ser decorados com E.V.A., durex colorido e outros materiais, de acordo com o gosto e a habilidade do grupo. Essa é mais uma maneira de integrar a criança ao trabalho.</p>
                                <p>Por outro lado, os maiores sentem a necessidade de tocar instrumentos profissionais. O ganzá (ovinho/chocalho), a clave, a meia-lua e  o  tambor estão disponíveis para compra no  mercado.   Os kits de percussão que são vendidos nas lojas de instrumentos musicais devem ser evitados, pois os arranjos para a percussão do Projeto Aprendiz Júnior exigem instrumentos específicos.</p>
                                <p>As CIAS que tocam os tambores e as meias-luas devem ser em menor quantidade por se tratarem de instrumentos com um som mais alto. O grupo de toquinhos deve ser sempre maior, mas principalmente o de flauta doce.</p>
                                <p>Ressaltamos que nem todos os louvores devem ter arranjos percussivos. Há louvores mais suaves onde não se deve acrescentar a percussão. Esses louvores deverão ser tocados apenas pelas flautas doces na parte da introdução e  no  instrumental e cantados por todo o  grupo,  principalmente  pelas CIAS da percussão.</p>
                                <p><strong>A flauta doce</strong></p>
                                <p><strong>A flauta doce é a porta de entrada para outros instrumentos melódicos</strong>, por se tratar de um instrumento de baixo custo, de fácil manuseio e de fácil aprendizagem. O modelo mais adequado é a flauta doce soprano barroca da marca Yamaha. A criança para iniciar nesse instrumento deve ser alfabetizada e ter no mínimo 7 anos. Crianças menores, na maioria dos casos, não apresentam a maturidade necessária que a aprendizagem desse instrumento requer. Esses menores, como dissemos, devem ser encaminhados para a turma do chocalho até que tenham  a  condição necessária para iniciar na turma de flauta  doce.</p>
                                <p>À medida que os alunos da flauta doce vão crescendo, eles também vão sendo encaminhados para o aprendizado de instrumentos melódicos mais elaborados como a flauta transversal,  o violino, o saxofone, a clarineta, o trompete, o violão. Percebe- se que o adolescente se sente deslocado e até desanimado tocando uma simples flauta doce. É interessante que sejam rapidamente direcionados para a aula desses instrumentos. Muitas vezes, é a professora que estimula a família a adquirir esses instrumentos por se tratar de um investimento financeiro. Há casos de  irmãos que  têm prazer em doar uma flauta transversal, um violino, para alunos carentes e  o  nome do Senhor tem sido grandemente  glorificado.</p>
                                <p>A turma de flauta doce pode ter apenas um aluno, o Senhor com certeza acrescentará mais CIAS, e no dia de tocar na Igreja, a professora responsável se sentará ao lado  dele  para  tocarem juntos o louvor ensaiado, passando assim segurança  para  quem está iniciando.</p>
                                <p>A turma de flauta doce, como dissemos, deve ter sempre a maior quantidade de CIAS, pois são eles que sustentam o louvor cantando e  fazendo os gestinhos.</p>
                            @endslot
                        @endcomponent
                    
                    
                        @component('components.modal')
                            @slot('btnClass', 'btn-info')
                            @slot('id', 'modal-pais')
                            @slot('title', 'Pais')
                            @slot('content')
                                <p>Os pais têm papel fundamental nesse trabalho, pois são eles que apoiam diretamente as CIAs. É a família que incentiva cada aluno a participar dos ensaios, a treinar em casa, a comparecer nos dias de tocar, etc. Os monitores e as famílias estão sempre juntos.</p>
                            @endslot
                        @endcomponent
                    
                    
                        @component('components.modal')
                            @slot('btnClass', 'btn-danger')
                            @slot('id', 'modal-cias')
                            @slot('title', 'Cias')
                            @slot('content')
                                <p>Cada criança, intermediário e adolescente deve tocar apenas um instrumento, de acordo com a sua faixa etária e maturidade cognitiva. A CIA que toca flauta doce durante a introdução de um louvor não deve passar a tocar a clave, por exemplo,  tocando  os dois instrumentos ao mesmo tempo, um melódico e  um  de percussão. Quem toca flauta doce deve se dedicar somente a ela e ter compromisso participando das aulas desse instrumento. Quem toca um instrumento de percussão deve agir da mesma forma, pois cada instrumento de percussão tem seu próprio  arranjo,  sua própria maneira de tocar e para cada louvor o Senhor tem dado um arranjo diferente.</p>
                                <p>Mas, à medida que a CIA vai crescendo e se desenvolvendo, é natural que ela queira aprender outro instrumento com o  qual vai  se identificando.</p>
                                <p>Cabe ao monitor tentar instruir a CIA da melhor maneira possível sobre o instrumento a ser aprendido. <em>“Instrui o menino no caminho em que deve andar e, até quando envelhecer, não se desviara dele” PV  22,6</em></p>
                                <p>Como monitores, o nosso papel é lançar a semente, regar todos os dias, pois o Espirito Santo dará o crescimento e a Igreja colherá os frutos desse trabalho.</p>
                                <p>Se a Igreja não estava realizando o trabalho com percussão   e passou a realizar, as CIAS da flauta doce não devem abandonar seus instrumentos para agora atuarem na percussão, nem devem tocar os dois ao mesmo tempo. Cada CIA deve se dedicar ao seu próprio instrumento.</p>
                            @endslot
                        @endcomponent
                    
                    
                        @component('components.modal')
                            @slot('btnClass', 'btn-default')
                            @slot('id', 'modal-capacitacoes')
                            @slot('title', 'Capacitações')
                            @slot('content')
                                <p>As capacitações são encontros quinzenais ou mensais com os monitores das Igrejas. Há a necessidade desses encontros pois o Projeto Aprendiz Júnior não se resume apenas em cada Igreja isoladamente pegar o seu material e repassar para as suas CIAS. Isso pode ser feito facilmente via internet.</p>
                                <p>Há a necessidade de todos os monitores das Igrejas se reunirem para orarem pelas necessidades do Projeto, trocarem experiências, aprenderem novos arranjos para depois repassarem nas Igrejas, tirarem dúvidas que surgem, definirem datas e locais para ensaios gerais, evangelizações, cultos especiais, vigílias, etc. Até mesmo para conhecer se o Projeto está se desenvolvendo bem nas Igrejas locais.  Sempre destacando que somos um Corpo unido e não Igrejas isoladas. Quando os monitores de alguma Igreja não comparecem, é importante saber se estão bem ou se precisam de algum tipo de ajuda. Dessa forma o trabalho torna-se unificado. Quando surge uma oportunidade de eles  atuarem em  algum evento, estão prontos, aptos para  fazê-lo.</p>
                            @endslot
                        @endcomponent
                    
                    
                        @component('components.modal')
                            @slot('btnClass', 'btn-danger')
                            @slot('id', 'modal-trabalho')
                            @slot('title', 'O trabalho na Área')
                            @slot('content')
                                <p>Há a necessidade de todos os monitores das Igrejas se reunirem para orarem pelas necessidades do Projeto, trocarem experiências, aprenderem novos arranjos para depois repassarem nas Igrejas, tirarem dúvidas que surgem, definirem datas e locais para ensaios gerais, evangelizações, cultos especiais, vigílias, etc. Até mesmo para conhecer se o Projeto está se desenvolvendo bem nas Igrejas locais.  Sempre destacando que somos um Corpo unido e não Igrejas isoladas. Quando os monitores de alguma Igreja não comparecem, é importante saber se estão bem ou se precisam de algum tipo de ajuda. Dessa forma o trabalho torna-se unificado. Quando surge uma oportunidade de eles  atuarem em  algum evento, estão prontos, aptos para  fazê-lo.</p>
                            @endslot
                        @endcomponent
                    
                    
                        @component('components.modal')
                            @slot('btnClass', 'btn-info')
                            @slot('id', 'modal-ensaios')
                            @slot('title', 'Ensaios')
                            @slot('content')
                                <p>Os ensaios deverão ser semanais, ministrados pelas professoras, repassando o que foi aprendido nas  capacitações.</p>
                                <p>É importante ressaltar que em cada ensaio se faça um  período de oração com as CIAS. É nesse momento que elas vão aprendendo mais sobre a adoração ao Senhor, e  que  louvar não é  só o tocar do instrumento, mas sim uma vida  de  oração  e dedicação.“ Mas a hora está  chegando, e  de  fato  já  chegou, em que os verdadeiros adoradores adorarão ao pai em espirito e em verdade” João 4;23 .</p>
                                <p>É importante explicar para as CIAS o sentido do que estão cantando para que entendam o direcionamento doutrinário e profético de cada  louvor.</p>
                                <p>Nos primeiros encontros é muito comum a euforia dos alunos, mas isso deve ser mantido sob controle pela monitora.</p>
                                <p>Se algum aluno não acompanhar o  desenvolvimento  da  turma, ele deverá receber aulas de   reforço.</p>
                                <p>Há também os ensaios gerais quando todas as CIAS e monitores envolvidos no Projeto ensaiam juntos para se  prepararem para algum evento do Polo ou da Área.</p>
                                <p>Deve-se primeiramente ensinar louvores com arranjos mais fáceis e depois ir aumentando o nível  de  dificuldade.  Nunca se deve começar com um louvor difícil ou com um arranjo mais elaborado. A sugestão é iniciar com o louvor “A noiva amada do Cordeiro”. Depois pode ser “É tão triste não ver a luz”. Depois “Brilhando, brilhando”, por exemplo.</p>
                            @endslot
                        @endcomponent
                    
                    
                        @component('components.modal')
                            @slot('btnClass', 'btn-success')
                            @slot('id', 'modal-tocar')
                            @slot('title', 'O Tocar nos Cultos')
                            @slot('content')
                                <p>O objetivo desse Projeto é dar às CIAS  uma  condição  de terem uma vida espiritual diante do  Senhor através do compromisso com o  louvor da casa do  Senhor.    </p>
                                <p>Esse trabalho visa levar à prática os  ensinamentos  e doutrinas que são transmitidos pela Igreja tais como o louvor agradável ao Senhor, o levar a "preciosa semente" que são as evangelizações, a reverência na casa do Senhor, a vida de testemunho, o sacerdócio universal do crente e tantos outros ensinamentos maravilhosos revelados pelo Senhor que  temos vivido na prática através desse  Projeto.</p>
                                <p>Esse trabalho é a oportunidade de as CIAS atuarem efetivamente na Igreja durante todo o ano, não apenas nos meses de março e outubro.</p>
                                <p>Fazendo esse trabalho, ao longo dos anos temos colhido bons frutos que são CIAS  com  entendimento do  louvor agradável  ao Senhor, preparados musicalmente e que têm se tornado jovens integrados no louvor das Igrejas; e também o envolvimento e o compromisso das famílias dos nossos alunos, sempre  apoiando  esse trabalho.</p>
                                <p>Vale a pena ressaltar que o trabalho do Projeto Aprendiz Júnior não se resume apenas ao louvor mas é de suma importância o cuidado com a criança, o intermediário e o adolescente dia a dia.</p>
                            @endslot
                        @endcomponent
                    
                    
                        @component('components.modal')
                            @slot('btnClass', 'btn-primary')
                            @slot('id', 'modal-evangelizacoes')
                            @slot('title', 'Evangelizações')
                            @slot('content')
                                <p>As CIAS ofertam ao Senhor o seu louvor e a sua adoração todos os dias, e esse momento é único na vida da Igreja pois é o momento em que ouvimos o perfeito louvor “E perguntaram-lhe: Ouves o que estes estão dizendo? Respondeu- lhes Jesus: Sim; nunca lestes: Da boca de pequeninos e de criancinhas de peito tiraste perfeito louvor? Mateus  21;16.</p>
                                <p>Sugerimos que seja destinado um dia na semana (sugestão: domingo à noite) para que eles toquem um ou mais  louvores  naquele culto. O tocar na Igreja para eles  precisa  ser algo  especial, um evento muito importante onde ele vai vestir a “melhor roupa”, vai convidar a família e os amigos para participarem de um momento especial de adoração ao Senhor. (Experiência – Uma adolescente servia ao Senhor com a sua mãe, e o seu pai sempre dizia a ela que nunca iria numa Igreja evangélica. A Igreja dessa adolescente começou a fazer o  trabalho  e  essa  adolescente passou a ensaiar em casa todos os dias. No  primeiro culto que ela  foi  tocar  na  Igreja,  ela  convidou  o  seu  pai  para  vê- la  tocar. Ele ficou, maravilhado com o louvor da casa do Senhor e passou a frequentar a  Igreja junto com a  sua  família).</p>
                                <p>É importante que as CIAS não percam as características de crianças e adolescentes. Devem fazer o gestinho e sentar nos bancos direcionados para elas. Por isso orientamos  que  eles toquem apenas uma vez na semana para não prejudicar essas orientações. As crianças e intermediários que tocam instrumentos melódicos devem apenas tocar na introdução  e  no  instrumental  para que nas demais partes do louvor se concentrem apenas em cantar e  fazer os gestinhos.</p>
                                <p>É importante também ressaltar que os adolescentes que já tocam nos cultos devem ter dias específicos para tocar,  não devendo tocar todos os dias, ou no dia que quiserem, não devem também tocar para o Grupo de Louvor, pois não são batizados. Adolescentes não são instrumentistas, portanto não devemos cobrá- los e  sim instrui-los a  fazerem o  melhor para o  Senhor.</p>
                                <p>Os instrumentistas da Igreja são uma bênção para toda a Obra, mas é interessante que a bateria não toque enquanto a percussão estiver atuando. É o momento deles. Se a bateria for tocar, deve fazer isso suavemente, acompanhando os arranjos entoados pelas CIAs. É necessário apenas violão para fazer a base do louvor. Outros instrumentos melódicos da Igreja como violinos, sax, etc. também não devem tocar enquanto as flautas doces tocam para, da mesma forma, não abafar o som delas que é tão suave. O teclado fazendo apenas a base do louvor bem suavemente fica muito bonito. Mas no momento em que a flauta doce não estiver atuando, todos os instrumentistas da Igreja podem e  devem  tocar  os louvores das CIAS.</p>
                            @endslot
                        @endcomponent
                    
                    
                        @component('components.modal')
                            @slot('btnClass', 'btn-default')
                            @slot('id', 'modal-continuidade')
                            @slot('title', 'Continuidade do Trabalho')
                            @slot('content')
                                <p>O Projeto Aprendiz Júnior e o Projeto Aprendiz, que já é desenvolvido em algumas Áreas, como em Guarapari, são bem diferenciados. O Projeto Aprendiz Júnior abrange crianças, intermediários e adolescentes. O Projeto Aprendiz contempla adolescentes, jovens e adultos. No Projeto Júnior, as CIAS podem começar aos 3 (três) anos de idade tocando chocalho. Quando atingem 7 anos, ao serem alfabetizadas, podem iniciar na flauta doce, por exemplo. Mais à frente, na adolescência, ou até antes disso, ingressam na aula de um outro instrumento melódico, como a f lauta transversal, ministrada por algum instrumentista da Igreja ou  monitor do  Projeto Aprendiz da sua Área.</p>
                                <p>Quando esse nosso adolescente se tornar jovem, ele poderá ingressar no corpo de instrumentistas da sua Igreja.  Ele estará apto a ser um monitor do próprio Projeto Aprendiz Júnior ou poderá ser um monitor do Projeto Aprendiz, ministrando aos iniciantes aquilo que ele recebeu do Senhor. Eles aprendem e  podem ensinar o  que aprenderam, sendo usados como  monitores.</p>
                            @endslot
                        @endcomponent
                    
                    
                        @component('components.modal')
                            @slot('btnClass', 'btn-primary')
                            @slot('id', 'modal-experiencias')
                            @slot('title', 'Experiências')
                            @slot('content')
                                <p>Um adolescente fazia tratamento para uma doença psiquiátrica, tinha crises sérias e chegou a ser levado às pressas várias vezes ao hospital para tomar doses fortes de medicação. Mesmo assim ele sempre esteve integrado ao naipe dos tambores participando ativamente dos ensaios, cultos e encontros do Projeto Aprendiz Júnior. Em uma dessas ocasiões, o Senhor mostrou que a cura dele viria através do louvor. Ele passou a estudar violão nas aulas do Projeto Aprendiz e hoje já é um jovem, batizado, usado nos dons e toca violão nos cultos.</p>
                                <hr/>
                                <p>Um grupo de CIAs sempre usava uma mesma topik como transporte para ir aos encontros do Projeto. O motorista dessa topik havia se afastado do Senhor juntamente com toda a sua família.</p>
                                <p>Mas como estava sempre envolvido com a alegria das CIAs indo e voltando, ouvindo as bênçãos, ao final do ano ele retornou para o Senhor e disse: “Esse Projeto foi o fio de ligação que me manteve perto do Senhor e não deixou que eu me perdesse de vez”. Toda a sua família foi restaurada, sua esposa agora é monitora do Projeto e seus dois filhos estão integrados participando com muita alegria de todas as atividades.</p>
                                <hr/>                                
                                <p>Uma igreja havia parado de fazer os ensaios com os instrumentos durante uns três anos e infelizmente as CIAs pararam também de ir aos cultos. Depois disso, o trabalho do Projeto Aprendiz Júnior foi resgatado e começou outra vez mas com apenas 4 CIAs. Ao findar do ano, através das orações de todos, e também dos alunos, já estavam com 27 CIAs integradas, participando dos ensaios e tocando nos cultos para a glória do Senhor. Em muitas igrejas o número de CIAs também aumentou significativamente.</p>
                                <hr/>
                                <p>Uma família composta pelo casal e mais 4 filhos quase não participam dos cultos mas no dia do ensaio do chocalho, eles vieram. A filha de 5 anos toca chocalho. A mãe disse para a monitora: “Tive que vir por causa do ensaio, ela quase chorou pedindo que viéssemos”. Era uma quinta-feira, culto de oração. Toda a família recebeu uma bênção.</p>
                                <p>Relato de uma monitora: “O que fica marcado em nós é o desejo das CIAs  participarem de todas as atividades da igreja. Elas mesmas chamam os pais.”</p>
                                <hr/>
                                <p>Os adolescentes de uma de nossas igrejas quase não frequentavam as aulas da classe e também não vinham para a EBD. Isso era motivo de muitas preocupações nas reuniões quinzenais de professoras. Depois que passaram a fazer parte dos ensaios do Projeto, eles não faltam mais às aulas e também participam ativamente da EBD.</p>
                                <p>Uma monitora relatou algo simples mas muito importante: “O que nos move a realizar esse trabalho é ver os nossos adolescentes, que antes ficavam tão dispersos, agora sendo usados no louvor, cantando e tocando, sentindo a comunhão com o Senhor e a sensibilidade com o Espírito Santo, desejando participar dos ensaios e outras atividades realizadas.” Aliás, esse é o relato de muitos monitores do Projeto.</p>
                                <hr/>
                                <p>As CIAs de uma igreja saíram para evangelizar com seus instrumentos cantando e tocando pelas ruas do bairro. Um menino em especial foi alcançado naquela evangelização e foi integrado aos trabalhos do Projeto. Apesar de os pais dele não serem da igreja, ele passou a participar dos cultos, cantando e tocando seu instrumento, vestido de terno e gravatinha e ainda traz um irmão com ele. </p>
                                <hr/>
                                <p>Pouco tempo depois que se iniciaram os trabalhos com o Projeto  em uma de nossas igrejas, as CIAs começaram a se interessar pelo culto profético. Em especial dois intermediários e dois adolescentes: são usados nos dons, consultam a palavra, escolhem louvores... Há também duas intermediárias que não eram da igreja e são vizinhas de uma adolescente da bandinha. Elas mesmas pediram para fazerem parte do Projeto. No dia seguinte já estavam com todo o material necessário.</p>
                                <p>Agora as três vão juntas para o culto, apesar de a mãe delas nunca ter ido.</p>
                                <hr/>
                                <p>Uma família com três crianças esfriou espiritualmente e não quis mais participar dos cultos nem das atividades da igreja. Quando essas crianças souberam que o grupo do Projeto da igreja delas ia sair para cantar em outra igreja, essas crianças ficaram muito tristes por perderem esse evento e pediram insistentemente aos pais que retornassem para o Senhor, pois elas queriam voltar a participar do Projeto. Para glória do Senhor, toda a família retornou, estão integrados aos cultos e agora essas crianças são as primeiras a “cobrarem” os ensaios das monitoras.</p>
                                <hr/>
                                <p>Outro relato interessante: “Apesar de algumas CIAs terem se mudado de bairro e passarem a fazer parte de outra igreja, o numero de alunos integrados ao Projeto aumentou e os pais, que amam esse trabalho, têm nos ajudado muito. Esse apoio é fundamental”.</p>
                                <p>“É maravilhoso ver Deus operando no meio da igreja na hora em que nossas CIAs cantam e tocam seus instrumentos!”</p>
                                <hr/>
                                <p>Uma família começou a vir para a igreja mas o filho adolescente já visitava pois vinha junto com outro adolescente do Projeto que toca saxofone. Ele passou a fazer parte dos ensaios porém veio a enfermar e ficou muito ausente das atividades. Ao findar do ano, houve a entrega dos certificados de participação no Projeto e essa família estava presente neste culto especial. Foi um momento muito lindo onde a igreja estava toda envolvida e o ministério pode dar uma palavra valorizando ainda mais todo o trabalho. A família ficou maravilhada pois as monitoras fizeram questão de entregar o certificado para ele, mesmo que estivesse ausente em função da enfermidade.</p>
                                <p>No dia seguinte, a mãe relatou que aquele foi o momento mais feliz da vida dela pois não esperava que seu filho fosse chamado ali na frente, afinal ele havia faltado muito. Disse que aquilo moveu toda a família pois ao sair de casa havia pedido ao Senhor um sinal que mostrasse em qual igreja ela realmente deveria ficar e através desse acontecimento toda a família se definiu na presença do Senhor.</p>
                                <hr/>
                                <p>Uma intermediária, integrada ao Projeto, após cantar num culto especial, logo no final do louvor, ficou séria. Depois maravilhada ela explicou que tinha tido uma visão. Ela via que Deus enviava salvação para a mãe de uma adolescente do Projeto.</p>
                                <p>As CIAs integradas ao Projeto Aprendiz Júnior de uma de nossas igrejas começaram a ser usadas nos dons espirituais de forma intensa.</p>
                                <hr/>
                                <p>Uma criança de 7 anos, integrada ao Projeto, participou de um culto especial, cantando e tocando flauta doce. Nesse culto Deus operou grandemente. Ela disse: “Me senti um vaso nas mãos do Senhor!”</p>
                                <hr/>
                                <p>Um intermediário de 10 anos integrante do Projeto tem como seu grande sonho ser pastor. Ele passou por dias difíceis pois achava que Deus não estava ouvindo a sua oração pela salvação da sua avó,  até mesmo disse que não iria orar mais, pois Deus não estava ouvindo a sua oração. A mãe desse menino pediu que um diácono conversasse com ele e foi dada uma palavra sobre a oração, a oração de Jesus no Getsêmani. Durante toda a semana aquele menino orou ao Senhor e meditou naquele texto. Na quinta-feira, no culto de oração, ele foi usado para orar por toda a Igreja e naquele momento o Espírito Santo visitou profundamente o coração dos servos. No sábado, a avó dele foi ao culto e continuou indo por muitos dias. Ele teve sua fé renovada com a certeza de que Deus ouviu a sua oração.</p>
                                <hr/>
                                <p>Uma criança de 6 anos, cuja família não era da igreja, passou a fazer parte da turma de flauta doce. Assim, toda a família veio para a presença do Senhor apoiando o envolvimento dela no Projeto e recebendo dos monitores toda a assistência. Um dia eles estavam em outro município e quando a noite se aproximava, ela disse: “Mãe, precisamos voltar pois hoje é o dia de tocarmos e eu fiz um compromisso com o Senhor.” A família voltou, ela tocou no culto e o nome do Senhor foi glorificado na vida daquela criança tão pequena mas tão comprometida com Deus.</p>
                                <hr/>
                                <p>Uma intermediária conheceu o Senhor em outro Estado e quando veio para uma igreja do nosso município logo quis participar do Projeto. A mãe, por ser usuária de drogas, não tinha como levá-la aos ensaios e cultos. Então a menina pediu para sua mãe: “Mãe, se você não quer ter um compromisso com Deus, tenha pelo menos comigo e me leve para os ensaios pois eu quero a minha bênção”. Essa intermediária continua firme, participando de tudo com o apoio dos monitores e todos estão orando pela salvação da sua mãe.</p>
                                <hr/>
                                <p>Um intermediário de 9 anos ia com sua mãe e o padrasto a outra denominação e começou a visitar esporadicamente nossa igreja. Ele viu as CIAs do Projeto tocando num culto, se interessou e passou a fazer parte do trabalho. Assim os três passaram a vir sempre aos cultos e o menino assumiu um compromisso com o ensaio do louvor do Senhor edificando assim toda a família. </p>
                                <hr/>
                                <p>Uma família com 3 crianças estava começando a se desligar da igreja, os irmãos da igreja ficaram preocupados, orando ao Senhor. Foi quando o Projeto Aprendiz Júnior começou. Essas crianças passaram a participar dos ensaios, a tocar nos cultos, a mãe percebeu que o comportamento deles foi melhorando, a família foi envolvida e para honra e glória do Senhor, todos estão firmes na igreja, mesmo morando longe e vindo a pé. A própria mãe disse: “Realmente eu estava para sair da igreja, mas esse trabalho trouxe um renovo para nós”.</p>
                                <hr/>
                                <p>Um intermediário da bandinha estava sendo rejeitado pela família, a mãe e a avó iam pagar uma babá para morar com ele em outro bairro distante, mas as CIAs do Projeto o abraçaram, oraram muito para que Deus entrasse com uma providência pois não queriam perdê-lo dessa forma tão triste. Deus respondeu a oração do grupo movendo o coração de um familiar, que mesmo sem ter condições financeiras, tomou-o como se fosse filho. Hoje ele está num lar de servos, cercado de amor, e o melhor, continua participando dos ensaios e tocando nos cultos.</p>
                                <hr/>
                                <p>Havia um senhor de 82 anos que estava enfermo há alguns dias. As CIAs do Projeto foram lhe fazer uma visita surpresa a pedido da sua esposa. Elas cantaram, tocaram, oraram, leram a palavra, foi uma alegria naquele lar. Deus operou poderosamente e no dia seguinte esse idoso estava de pé no culto glorificando a Deus.</p>
                                <hr/>
                                <p>Um intermediário do Projeto, menino usado nos dons, sempre voltava da escola passando mal. Buscando a Deus, foi descoberta a causa: a professora da classe falava mal do Senhor, dizendo que Deus não respondia orações, etc. Isso o deixava triste e confuso. Em constante oração, instruindo o filho, a mãe, que é monitora do Projeto, pediu que ele sempre clamasse pelo sangue de Jesus. Assim ele fez e Deus fechou os lábios daquela professora. Ele ainda teve oportunidade de convidá-la para participar de um culto na sua igreja. Ela, que não entrava em igreja evangélica, compareceu e sentiu a presença do Senhor</p>
                                <hr/>
                                <p>Uma criança estava doente, com 38,5 de febre e tinha um ensaio no Maanaim para ir. A mãe dela preocupada, não queria deixá-la ir. Ela disse para a mãe: eu vou para o ensaio porque lá o Senhor vai me curar. Ela foi para o ensaio, participou, tocou, cantou e ao findar do ensaio disse o “Senhor me curou”. E ela voltou para casa restaurada. A criança passou a entender que no corpo, no ensaio, no culto, Deus cura. Que Deus tem uma bênção para o enfermo quando ele vai à CASA DO SENHOR.</p>
                                <hr/>
                                <p>Uma criança de 6 anos passou a visitar a Igreja sozinha por conta dos ensaios das CIAs. Ela queria fazer parte do grupo de crianças que tocam instrumentos. A mãe dessa criança é usuária de drogas e ao findar dos cultos essa criança sempre pedia oração para que Deus colocasse no coração da mãe dela a mesma alegria que ela sentia por estar na casa do Senhor. Deus salvou essa criança de um futuro incerto e certamente dará uma bênção a essa mãe.</p>
                                <hr/>
                                <p>No mês de março de 2015, as CIAS saíram às ruas para evangelizar cantando e tocando os louvores da Orquestra. Três crianças de uma família aceitaram o convite e foram ao evento, maravilharam-se com o culto e através desse trabalho elas continuam indo à Igreja e participando do ensaio da Orquestra. Seus pais passaram a visitar a Igreja para ver os filhos tocarem no culto e mais à frente deram seus nomes para serem candidatos ao batismo.</p>
                                <hr/>
                                <p>Uma senhora e seus dois filhos começaram a ir à Igreja, ele intermediário e ela uma jovem, o pai é pastor em outra denominação, mas a jovem sempre quis ser da ICM. A assistência foi dada e o convite foi feito ao filho para que fizesse parte do Projeto. A jovem, que já estava aprendendo violão em casa, interessou-se muito pelo trabalho e começou a participar do ensaio junto com as monitoras. Por aqueles dias, as CIAs foram convocadas para uma evangelização em Vila Velha. Essa senhora disse que queria participar e que levaria os filhos com ela, a única preocupação era que a filha se decepcionasse.</p>
                                <p>Ela orou ao Senhor e levou o violão mesmo não sabendo tocar louvor nenhum, ela  queria uma experiência. As monitoras foram no clamor, para que o milagre fosse operado. Para honra e glória do Senhor, essa jovem tocou junto com os outros violonistas e hoje já é uma instrumentista da casa do Senhor. Essa senhora, serva, teve sua decisão tomada naquela evangelização, conversando com seu esposo, que a partir de então faria parte desse trabalho e o mais importante, dessa Obra gloriosa que o Senhor tem realizado. Seu esposo participou da evangelização  em um dos nossos bairros e gostou muito do trabalho.</p>
                                <hr/>
                                <p>Uma família em uma de nossas Igrejas estava desanimada espiritualmente e a mãe de uma intermediária já não ia mais para os cultos. As monitoras dessa igreja a envolveram no trabalho da bandinha e através da ida dessa intermediária às convocações e o envolvimento no trabalho, o Senhor restaurou toda a família.</p>
                                <hr/>
                                <p>Em uma das convocações, um intermediário tímido estava com muita vergonha de tocar. Ele fechou os olhos e teve uma visão de notas musicais envolvendo toda a Igreja. Ele abriu os olhos, não mais sentiu vergonha e conseguiu tocar.</p>
                                <hr/>
                                <p>Em um culto onde as CIAS estavam tocando, um adolescente fechou os seus olhos e teve uma visão. Terminado o culto ficou sentado no banco com os olhos cheios de lagrimas, feliz porque teve uma visão.</p>
                                <hr/>
                                <p>Uma adolescente integrante desse trabalho, que participa com frequência do culto profético, chamou um diácono para consultar acerca de uma necessidade, pois  ela queria ouvir a voz do Senhor, e quando ela abriu a palavra o Senhor falou profundamente ao seu coração.</p>
                                <hr/>
                                <p>Durante a gravação do CD para divulgação dos louvores das CIAS, que ocorreu em janeiro de 2016, na Igreja de Praia do Morro I – Guarapari, o Senhor concedeu uma visão. Durante o louvor A JESUS IREI LOUVAR, a irmã via que alguns anjos se posicionavam nas laterais e no final da Igreja como colunas e resplandeciam iluminando a Igreja, eles também nos guardavam de todo o mal. Outros anjos estavam junto das crianças e cantavam com elas. Eram muitos anjos. Mas havia ainda um outro anjo maior. Ele se posicionava junto ao púlpito. Enquanto o irmão regia as crianças, intermediários e adolescentes, aquele anjo regia os anjos que cantavam com elas. O irmão regendo as crianças e o anjo regendo os anjos que cantavam. Isso acontecia em todos os louvores. Era um só coro. As CIAS e os anjos louvando ao Senhor.</p>
                                <hr/>
                                <p><strong>Louvado seja o nome do Senhor!</strong></p>
                            @endslot
                        @endcomponent
                    
                    
                        @component('components.modal')
                            @slot('btnClass', 'btn-warning')
                            @slot('id', 'modal-conclusao')
                            @slot('title', 'Conclusão')
                            @slot('content')
                                <p>Buscamos realizar um projeto dentro dos padrões do Espírito Santo, com ajuda e conhecimento pedagógico (o trabalho tem acompanhamento constante de pedagogas e de irmãos especializadas em musicalização infantil). Esse trabalho tem gerado grandes resultados na vida espiritual e comportamental das nossas CIAS.</p>
                                <p>Temos muitas outras experiências para contar, entretanto deixamos aqui um breve resumo do que o Senhor tem nos ensinado nesses últimos 7  anos.</p>
                                <p>A paz do Senhor Jesus!</p>
                            @endslot
                        @endcomponent
                        
                    </div>
                <div class="material-content">
                    <h1>Material</h1>
                    <p>Acesse o material do Projeto Aprendiz em nosso <a target="_blank" href="https://drive.google.com/drive/folders/0BwuioFg__yU_X2FFaHVGNVMwVEk?usp=sharing"><i class="fa fa-folder-open" aria-hidden="true"></i> Google Drive</a></p>    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection