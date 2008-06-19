<?php 

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'protector' ;
$constpref = '_MI_' . strtoupper( $mydirname ) ;

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {

define( $constpref.'_LOADED' , 1 ) ;

// The name of this module
define($constpref."_NAME","Protector");

// A brief description of this module
define($constpref."_DESC","Módulo para proteção do XOOPS contra ataques mal-intencionados, em especial: ataques DoS, SQL Injection e contaminações por variável.");

// Menu
define($constpref."_ADMININDEX","Central de proteção");
define($constpref."_ADVISORY","Guia de segurança");
define($constpref."_PREFIXMANAGER","Gerenciador de PREFIXO");
define($constpref.'_ADMENU_MYBLOCKSADMIN','Permissões');

// Configs
define($constpref.'_GLOBAL_DISBL',"Interrupção temporária de funcionamento");
define($constpref.'_GLOBAL_DISBLDSC',"Suspende temporariamente o funcionamento de todas as proteções.<br />Após resolver os problemas, não se esqueça de desativá-la.");

define($constpref.'_RELIABLE_IPS',"IPs confiáveis");
define($constpref.'_RELIABLE_IPSDSC',"Indique os endereços IP que não passarão por examinação para ataques DoS, separados por |. ^ para o inválido, e  $ para o final do string.");

define($constpref.'_LOG_LEVEL',"Nível de gravação de log");
define($constpref.'_LOG_LEVELDSC',"");

define($constpref.'_BANIP_TIME0','IP Banido será suspenso pelo tempo (segundos)');

define($constpref.'_LOGLEVEL0',"Não gerar log");
define($constpref.'_LOGLEVEL15',"Gerar log apenas de elementos de alto risco");
define($constpref.'_LOGLEVEL63',"Não gerar log de elementos de baixo risco");
define($constpref.'_LOGLEVEL255',"Gerar log de todos os elementos");

define($constpref.'_HIJACK_TOPBIT',"Proteção de IP bits contra renovação de sessão");
define($constpref.'_HIJACK_TOPBITDSC',"Prevenção à session hijack:<br />O padrão é 32(bit) e protege de todos os bits.<br />Caso use Proxy ou seu endereço IP mude a cada acesso, defina o intervalo de bits mais longo possível à invariação.<br />Ex.: Se houver possibilidade de variação dentro de 192.168.0.0~192.168.0.255, defina esta opção como 24(bit).");
define($constpref.'_HIJACK_DENYGP',"Grupos proibidos de mudança de IP");
define($constpref.'_HIJACK_DENYGPDSC',"Prevenção à session hijack:<br />Escolha os grupos cujos usuários proibidos de alteração de endereço IP durante uma sessão.<br />(Recomendado: \"Administradores\")");
define($constpref.'_SAN_NULLBYTE',"Substituição de caracteres nulos por espaços");
define($constpref.'_SAN_NULLBYTEDSC',"O caracter \"\\0\" fatal é usado freqüentemente em ataques maliciosos.<br />Sempre que detectado, ele será substituição por um espaço.<br />(Recomendado)");
define($constpref.'_DIE_NULLBYTE',"Encerramento forçado de sessão em caso de detecção de caracteres nulos");
define($constpref.'_DIE_NULLBYTEDSC',"O caracter \"\\0\" fatal é usado frequentemente em ataques maliciosos.<br />(Recomendado)");
define($constpref.'_DIE_BADEXT',"Encerramento forçado de sessão em caso de uploads com extensões proibidas");
define($constpref.'_DIE_BADEXTDSC',"Caso houver uploads de arquivos com extensões como .php ou outros arquivos executáveis no servidor, a sessão será apagada.<br />(Não recomendado se você for usuário de B-Wiki ou PukiWikiMod e anexar códigos-fonte em PHP.)");
define($constpref.'_CONTAMI_ACTION',"Solução em caso de detecção de contaminações por variável");
define($constpref.'_CONTAMI_ACTIONDS',"Escolha o tipo de solução quando uma tentativa de alteração das globais de sistema do XOOPS for detectada.<br />(Padrão: \"Encerramento forçado de sessão\")");
define($constpref.'_ISOCOM_ACTION',"Solução em caso de detecção de comentários isolados");
define($constpref.'_ISOCOM_ACTIONDSC',"Prevenîåo à SQL injection:<br />Escolha o tipo de solução quando um comentário isolado /* for detectado sem seu par */.<br />Processo de sanitização: */ é inserido no final.<br />(Recomendado: \"Sanitização\")");
define($constpref.'_UNION_ACTION',"Solução em caso de detecção de UNION");
define($constpref.'_UNION_ACTIONDSC',"Prevenção à SQL injection:<br />Escolha o tipo de soluîåo quando uma sintaxe UNION do SQL for detectada.<br />Processo de sanitizaîåo: UNION é alterado para uni-on.<br />(Recomendado: \"Sanitizaîåo\")");
define($constpref.'_ID_INTVAL',"Conversão forçada de variável ID");
define($constpref.'_ID_INTVALDSC',"Força valores numéricos e variáveis com nomes terminados em \"id\". É eficaz, principalmente, com módulos derivados do myLinks. Protege também de alguns XSS e SQL injection. Entretanto, pode entrar em conflito com alguns módulos.");
define($constpref.'_FILE_DOTDOT',"Proibido de DirectoryTraversal");
define($constpref.'_FILE_DOTDOTDSC',"Numa tentativa de DirectoryTraversal, o pedido é analisado, e a pattern \"..\" é removida.");

define($constpref.'_BF_COUNT',"Prevenção à Brute Force");
define($constpref.'_BF_COUNTDSC',"Contra round-robin. Se, dentro de 10 minutos, o nº de tentativas de login incorreto definido nesta opção for excedido, o IP será banido.");

define($constpref.'_DOS_SKIPMODS',"Módulos excluídos de observação de alvo de DoS");
define($constpref.'_DOS_SKIPMODSDSC',"Defina os módulos que quiser excluir, separados por |. Ative para módulos de chat e similares.");

define($constpref.'_DOS_EXPIRE',"Tempo de observação para ataques DoS (em segundos)");
define($constpref.'_DOS_EXPIREDSC',"Tempo de observação para acompanhar a frequência dos acessos de DoS e crawlers maliciosos.");

define($constpref.'_DOS_F5COUNT',"Nº de vezes para ser reconhecido como ataque F5");
define($constpref.'_DOS_F5COUNTDSC',"Defesa contra ataques DoS:<br />Se houver muitos acessos à uma mesma URL dentro do tempo de observação definido acima e do nº de vezes definidas nesta opîåo, será reconhecido como um ataque.");
define($constpref.'_DOS_F5ACTION',"Medidas contra ataques F5");

define($constpref.'_DOS_CRCOUNT',"Nº de vezes para ser reconhecido como um crawler malicioso");
define($constpref.'_DOS_CRCOUNTDSC',"Prevenção à crawlers maliciosos (como bots catadores de e-mails):<br />Se forem realizadas buscas dentro do site dentro do tempo de observação definido acima e do nº de vezes definidas nesta opção, será reconhecido como um crawler malicioso.");
define($constpref.'_DOS_CRACTION',"Solução para crawlers maliciosos");

define($constpref.'_DOS_CRSAFE',"User-Agent permitidos");
define($constpref.'_DOS_CRSAFEDSC',"Descreva incondicionalmente o nome dos prováveis crawlers com uma perl regex pattern.<br />Ex.: /(msnbot|Googlebot|Yahoo! Slurp)/i");

define($constpref.'_OPT_NONE',"Nenhuma (apenas gerar log)");
define($constpref.'_OPT_SAN',"Sanitização");
define($constpref.'_OPT_EXIT',"Encerramento forçado de sessão");
define($constpref.'_OPT_BIP',"Banimento por IP");
define($constpref.'_OPT_BIPTIME0','Banir o IP (moratória)');

define($constpref.'_DOSOPT_NONE',"Nenhuma (apenas gerar log)");
define($constpref.'_DOSOPT_SLEEP',"Dormir");
define($constpref.'_DOSOPT_EXIT',"Sair");
define($constpref.'_DOSOPT_BIP',"Adicionar à lista de IPs banidos");
define($constpref.'_DOSOPT_HTA',"Registrar DENY através de .htaccess (experimental)");
define($constpref.'_DOSOPT_BIPTIME0','Banir o IP (moratória)');

define($constpref.'_BIP_EXCEPT',"Grupos livres de banimento por IP");
define($constpref.'_BIP_EXCEPTDSC',"Mesmo quando a condição for satisfeita, os usuários dos grupos indicados nesta opção nãp serão adicionados à lista de IPs banidos. Entretanto, se estes usuários não fizerem login, o efeito desta opção será anulado. TENHA CUIDADO!<br />(Recomendado: \"Administradores\")");

define($constpref.'_DISABLES',"Desativar opções inseguras");

define($constpref.'_BIGUMBRELLA','ativar anti-XSS (BigUmbrella)');
define($constpref.'_BIGUMBRELLADSC','Isto protege seu site contra ataques por vulnerabilidades via XSS. Mas não é 100% garantido');

define($constpref.'_SPAMURI4U','anti-SPAM: URLs para usuários normais');
define($constpref.'_SPAMURI4UDSC','Se este número de URLs são encontrados em dados de MENSAGENS provenientes de utilizadores não admin, a mensagem será considerada como spam. 0 (zero) significa desativar esse recurso.');
define($constpref.'_SPAMURI4G','anti-SPAM: URLs para visitantes');
define($constpref.'_SPAMURI4GDSC','Se este número de URLs for encontrado em MENSAGENS de hóspedes (visitantes), a mensagem será considerada como spam. 0 (zero) significa desativar esse recurso.');

}

?>