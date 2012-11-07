<?PHP
///////////////////// TEMPLATE Default /////////////////////
$template_active = <<<HTML
<div style="width:420px; margin-bottom:30px;">
<div><strong>{title}</strong></div>

<div style="text-align:justify; padding:3px; margin-top:3px; margin-bottom:5px; border-top:1px solid #D3D3D3;">{short-story}</div>

[full-link]<div style="float: right; font-size:12px; font-weight:bold;color:#b51729;" onmouseover="this.style.cursor='hand'">Read more</div>[/full-link] 

</div>
HTML;


$template_full = <<<HTML
<div style="width:420px; margin-bottom:15px;">

<div style="text-align:justify; padding:1px; margin-top:1px; margin-bottom:5px;">{full-story}</div>
HTML;


$template_comment = <<<HTML

HTML;


$template_form = <<<HTML
 
HTML;


$template_prev_next = <<<HTML
<p align="center">[prev-link]<< Previous[/prev-link] {pages} [next-link]Next >>[/next-link]</p>
HTML;
$template_comments_prev_next = <<<HTML
<p align="center">[prev-link]<< Older[/prev-link] ({pages}) [next-link]Newest >>[/next-link]</p>
HTML;
?>
