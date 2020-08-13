<?php
$page = new HtmlTemplate ('templates/'.$config['tpl_name'].'/tac.tpl');
$page->SetParameter ('OVERALL_HEADER', create_header('Terms And Condition'));
$page->SetParameter ('OVERALL_FOOTER', create_footer());
$page->CreatePageEcho();
?>