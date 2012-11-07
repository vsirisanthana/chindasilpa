<?PHP
///////////////////// TEMPLATE Default /////////////////////
$template_active = <<<HTML
<div style="width:100%;">
<div><strong>{title}</strong></div>

<div style="margin-top:3px; border-top:1px solid #D3D3D3;">{short-story}</div>

[full-link]<div style="float: right; font-size:12px; font-weight:bold" onmouseover="this.style.cursor='hand'">Read more</div>[/full-link] 

</div>
HTML;


$template_full = <<<HTML
<div style="width:100%;">
<div><strong>{title}</strong></div>

<div style="margin-top:3px; border-top:1px solid #D3D3D3;">{full-story}</div>

</div>
HTML;


$template_comment = <<<HTML

HTML;


$template_form = <<<HTML

HTML;


$template_prev_next = <<<HTML
<p align="center">[prev-link]<< Previous[/prev-link] {pages} [next-link]Next >>[/next-link]</p>
HTML;
$template_comments_prev_next = <<<HTML

HTML;
?>
