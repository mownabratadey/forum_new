<?php

/**
* @package   s9e\TextFormatter
* @copyright Copyright (c) 2010-2022 The s9e authors
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/
class Renderer_06c65aa98c1cfc9e311f0f41d92052435471c5b1 extends \s9e\TextFormatter\Renderers\PHP
{
	protected $params=['DISCUSSION_URL'=>'http://localhost/forum1/forum_new/d/','PROFILE_URL'=>'http://localhost/forum1/forum_new/u/'];
	protected function renderNode(\DOMNode $node)
	{
		switch($node->nodeName){case'C':$this->out.='<code>';$this->at($node);$this->out.='</code>';break;case'CODE':$this->out.='<pre><code';if($node->hasAttribute('lang'))$this->out.=' class="language-'.htmlspecialchars($node->getAttribute('lang'),2).'"';$this->out.='>';$this->at($node);$this->out.='</code></pre>';break;case'DEL':$this->out.='<del>';$this->at($node);$this->out.='</del>';break;case'E':switch($node->textContent){case':\'(':$this->out.='😢';break;case':(':$this->out.='🙁';break;case':)':$this->out.='🙂';break;case':D':$this->out.='😃';break;case':O':$this->out.='😮';break;case':P':$this->out.='😛';break;case':|':$this->out.='😐';break;case';)':$this->out.='😉';break;case'>:(':$this->out.='😡';break;default:$this->out.=htmlspecialchars($node->textContent,0);}break;case'EM':$this->out.='<em>';$this->at($node);$this->out.='</em>';break;case'EMAIL':$this->out.='<a href="mailto:'.htmlspecialchars($node->getAttribute('email'),2).'" rel="'.htmlspecialchars($node->getAttribute('rel'),2).'" target="'.htmlspecialchars($node->getAttribute('target'),2).'">';$this->at($node);$this->out.='</a>';break;case'ESC':$this->at($node);break;case'H1':$this->out.='<h1>';$this->at($node);$this->out.='</h1>';break;case'H2':$this->out.='<h2>';$this->at($node);$this->out.='</h2>';break;case'H3':$this->out.='<h3>';$this->at($node);$this->out.='</h3>';break;case'H4':$this->out.='<h4>';$this->at($node);$this->out.='</h4>';break;case'H5':$this->out.='<h5>';$this->at($node);$this->out.='</h5>';break;case'H6':$this->out.='<h6>';$this->at($node);$this->out.='</h6>';break;case'HR':$this->out.='<hr>';break;case'IMG':$this->out.='<img src="'.htmlspecialchars($node->getAttribute('src'),2).'"';if($node->hasAttribute('alt'))$this->out.=' alt="'.htmlspecialchars($node->getAttribute('alt'),2).'"';if($node->hasAttribute('title'))$this->out.=' title="'.htmlspecialchars($node->getAttribute('title'),2).'"';$this->out.='>';break;case'ISPOILER':$this->out.='<span class="spoiler" onclick="removeAttribute(\'class\')">';$this->at($node);$this->out.='</span>';break;case'LI':$this->out.='<li>';$this->at($node);$this->out.='</li>';break;case'LIST':if(!$node->hasAttribute('type')){$this->out.='<ul>';$this->at($node);$this->out.='</ul>';}else{$this->out.='<ol';if($node->hasAttribute('start'))$this->out.=' start="'.htmlspecialchars($node->getAttribute('start'),2).'"';$this->out.='>';$this->at($node);$this->out.='</ol>';}break;case'POSTMENTION':if($node->getAttribute('deleted')!=1)$this->out.='<a href="'.htmlspecialchars($this->params['DISCUSSION_URL'].$node->getAttribute('discussionid'),2).'/'.htmlspecialchars($node->getAttribute('number'),2).'" class="PostMention" data-id="'.htmlspecialchars($node->getAttribute('id'),2).'" rel="'.htmlspecialchars($node->getAttribute('rel'),2).'" target="'.htmlspecialchars($node->getAttribute('target'),2).'">'.htmlspecialchars($node->getAttribute('displayname'),0).'</a>';else$this->out.='<span class="PostMention PostMention--deleted" data-id="'.htmlspecialchars($node->getAttribute('id'),2).'">'.htmlspecialchars($node->getAttribute('displayname'),0).'</span>';break;case'QUOTE':$this->out.='<blockquote>';$this->at($node);$this->out.='</blockquote>';break;case'SPOILER':$this->out.='<details class="spoiler">';$this->at($node);$this->out.='</details>';break;case'STRONG':$this->out.='<strong>';$this->at($node);$this->out.='</strong>';break;case'SUB':$this->out.='<sub>';$this->at($node);$this->out.='</sub>';break;case'SUP':$this->out.='<sup>';$this->at($node);$this->out.='</sup>';break;case'UPL-FILE':$this->out.='<div class="ButtonGroup" data-fof-upload-download-uuid="'.htmlspecialchars($node->getAttribute('uuid'),2).'"><div class="Button hasIcon Button--icon Button--primary"><i class="fas fa-download"></i></div><div class="Button">'.htmlspecialchars($node->getAttribute('content'),0).'</div><div class="Button">'.htmlspecialchars($node->getAttribute('size'),0).'</div></div>';break;case'UPL-IMAGE':$this->out.='<div class="fof-download row" data-fof-upload-download-uuid="'.htmlspecialchars($node->getAttribute('uuid'),2).'"><div class="card"><div class="wrapper" style="background:url('.htmlspecialchars($node->getAttribute('url'),2).') center / cover no-repeat"><div class="header"><ul class="menu-content"><li><div class="far fa-hdd"><span>'.htmlspecialchars($node->getAttribute('size'),0).'</span></div></li></ul></div><div class="data"><div class="content"><h4 class="title">'.htmlspecialchars($node->getAttribute('content'),0).'</h4><div class="Button Button--primary Button-icon Button--block"><i class="fas fa-download"></i></div></div></div></div></div></div>';break;case'UPL-IMAGE-PREVIEW':$this->out.='<img src="'.htmlspecialchars($node->getAttribute('url'),2).'" title="'.htmlspecialchars($node->getAttribute('base_name'),2).'" alt="'.htmlspecialchars($node->getAttribute('base_name'),2).'">';break;case'UPL-TEXT-PREVIEW':$this->out.='<figure class="FofUpload-TextPreview" data-loading="false" data-expanded="false" data-hassnippet="'.htmlspecialchars($node->getAttribute('has_snippet'),2).'"><figcaption class="FofUpload-TextPreviewTitle"><i aria-hidden="true" class="icon far fa-file"></i> '.htmlspecialchars($node->getAttribute('content'),0).'</figcaption><div class="FofUpload-TextPreviewSnippet"><pre><code data-preview-text="&lt;preview will appear here after posting&gt;" data-nosnippet-text="&lt;no preview snippet available&gt;">'.htmlspecialchars($node->getAttribute('snippet'),0).'</code></pre></div><div class="FofUpload-TextPreviewFull"></div><button type="button" class="Button hasIcon FofUpload-TextPreviewToggle"><i aria-hidden="true" class="icon fas fa-chevron-down Button-icon FofUpload-TextPreviewExpandIcon"></i><span class="Button-label FofUpload-TextPreviewExpand">
            Expand preview        </span><i aria-hidden="true" class="icon fas fa-chevron-up Button-icon FofUpload-TextPreviewCollapseIcon"></i><span class="Button-label FofUpload-TextPreviewCollapse">
            Collapse preview        </span><div data-size="small" class="FofUpload-TextPreviewToggleLoading LoadingIndicator-container LoadingIndicator-container--inline LoadingIndicator-container--small"><div aria-hidden="true" class="LoadingIndicator"></div></div></button><div class="FofUpload-TextPreviewError"><p><i aria-hidden="true" class="icon fas fa-exclamation-circle"></i>
            Error previewing file. It may have been deleted, or the provided file ID is invalid.
        </p></div><script>
        {
            const figure = document.currentScript.parentElement;

            const previewEl = figure.querySelector(\'.FofUpload-TextPreviewFull\');
            const snippetEl = figure.querySelector(\'.FofUpload-TextPreviewSnippet\');
            const loadingEl = figure.querySelector(\'.FofUpload-TextPreviewLoading\');
            const toggleBtn = figure.querySelector(\'.FofUpload-TextPreviewToggle\');

            const snippetText = \'\';

            const testUrl = new URL(location.origin);
            const url = new URL(\''.$node->getAttribute('url').'\');

            if (testUrl.origin !== url.origin) {
              // Prevent cross-origin requests
              handleError(new Error(\'Attempted to fetch a cross-origin file in text preview.\'));
            }

            function createCodeHtml(text) {
                const codeEl = document.createElement(\'code\');
                codeEl.innerText = text;

                return `<pre>${codeEl.outerHTML}`;
            }

            function handleError(e) {
                figure.setAttribute(\'data-error\', \'true\');

                console.group(\'[FoF Upload] Failed to preview text file.\');
                console.error(\'Failed to load text file: \' + url);
                console.log(e);
                console.groupEnd();
            }

            let fileContent = null;

            // Only allow toggling preview if showing a snippet
            if ('.$node->getAttribute('has_snippet').' && testUrl.origin === url.origin) {
                toggleBtn.addEventListener(\'click\', () => {
                    if (fileContent !== null) {
                        const expanded = figure.getAttribute(\'data-expanded\') === \'true\';
                        figure.setAttribute(\'data-expanded\', !expanded);
                        return;
                    }

                    figure.setAttribute(\'data-loading\', \'true\');

                    fetch(url)
                        .then(response => {
                            if (!response.ok) {
                                figure.setAttribute(\'data-loading\', \'false\');
                                throw response;
                            }

                            return response.text();
                        })
                        .then(text => {
                            fileContent = text;
                            previewEl.innerHTML = createCodeHtml(text);

                            figure.setAttribute(\'data-loading\', \'false\');
                            const expanded = figure.getAttribute(\'data-expanded\') === \'true\';
                            figure.setAttribute(\'data-expanded\', !expanded);
                        })
                        .catch(handleError);
                });
            }
        }
    </script></figure>';break;case'URL':$this->out.='<a href="'.htmlspecialchars($node->getAttribute('url'),2).'" rel="'.htmlspecialchars($node->getAttribute('rel'),2).'" target="'.htmlspecialchars($node->getAttribute('target'),2).'"';if($node->hasAttribute('rel'))$this->out.=' rel="'.htmlspecialchars($node->getAttribute('rel'),2).'"';if($node->hasAttribute('target'))$this->out.=' target="'.htmlspecialchars($node->getAttribute('target'),2).'"';$this->out.='>';$this->at($node);$this->out.='</a>';break;case'USERMENTION':if($node->getAttribute('deleted')!=1)$this->out.='<a href="'.htmlspecialchars($this->params['PROFILE_URL'].$node->getAttribute('slug'),2).'" class="UserMention" rel="'.htmlspecialchars($node->getAttribute('rel'),2).'" target="'.htmlspecialchars($node->getAttribute('target'),2).'">@'.htmlspecialchars($node->getAttribute('displayname'),0).'</a>';else$this->out.='<span class="UserMention UserMention--deleted">@'.htmlspecialchars($node->getAttribute('displayname'),0).'</span>';break;case'br':$this->out.='<br>';break;case'e':case'i':case's':break;case'p':$this->out.='<p>';$this->at($node);$this->out.='</p>';break;default:$this->at($node);}
	}
	/** {@inheritdoc} */
	public $enableQuickRenderer=true;
	/** {@inheritdoc} */
	protected $static=['/C'=>'</code>','/CODE'=>'</code></pre>','/DEL'=>'</del>','/EM'=>'</em>','/EMAIL'=>'</a>','/ESC'=>'','/H1'=>'</h1>','/H2'=>'</h2>','/H3'=>'</h3>','/H4'=>'</h4>','/H5'=>'</h5>','/H6'=>'</h6>','/ISPOILER'=>'</span>','/LI'=>'</li>','/QUOTE'=>'</blockquote>','/SPOILER'=>'</details>','/STRONG'=>'</strong>','/SUB'=>'</sub>','/SUP'=>'</sup>','/URL'=>'</a>','C'=>'<code>','DEL'=>'<del>','EM'=>'<em>','ESC'=>'','H1'=>'<h1>','H2'=>'<h2>','H3'=>'<h3>','H4'=>'<h4>','H5'=>'<h5>','H6'=>'<h6>','HR'=>'<hr>','ISPOILER'=>'<span class="spoiler" onclick="removeAttribute(\'class\')">','LI'=>'<li>','QUOTE'=>'<blockquote>','SPOILER'=>'<details class="spoiler">','STRONG'=>'<strong>','SUB'=>'<sub>','SUP'=>'<sup>'];
	/** {@inheritdoc} */
	protected $dynamic=['EMAIL'=>['(^[^ ]+(?> (?!(?:email|rel|target)=)[^=]+="[^"]*")*(?> email="([^"]*)")?(?> (?!(?:rel|target)=)[^=]+="[^"]*")*(?> rel="([^"]*)")?(?> (?!target=)[^=]+="[^"]*")*(?> target="([^"]*)")?.*)s','<a href="mailto:$1" rel="$2" target="$3">'],'IMG'=>['(^[^ ]+(?> (?!(?:alt|src|title)=)[^=]+="[^"]*")*( alt="[^"]*")?(?> (?!(?:src|title)=)[^=]+="[^"]*")*(?> src="([^"]*)")?(?> (?!title=)[^=]+="[^"]*")*( title="[^"]*")?.*)s','<img src="$2"$1$3>'],'UPL-IMAGE-PREVIEW'=>['(^[^ ]+(?> (?!(?:base_name|url)=)[^=]+="[^"]*")*(?> base_name="([^"]*)")?(?> (?!url=)[^=]+="[^"]*")*(?> url="([^"]*)")?.*)s','<img src="$2" title="$1" alt="$1">'],'URL'=>['(^[^ ]+(?> (?!(?:rel|target|url)=)[^=]+="[^"]*")*( rel="([^"]*)")?(?> (?!(?:target|url)=)[^=]+="[^"]*")*( target="([^"]*)")?(?> (?!url=)[^=]+="[^"]*")*(?> url="([^"]*)")?.*)s','<a href="$5" rel="$2" target="$4"$1$3>']];
	/** {@inheritdoc} */
	protected $quickRegexp='(<(?:(?!/)((?:HR|IMG|POSTMENTION|U(?:PL-(?:FILE|IMAGE(?:-PREVIEW)?|TEXT-PREVIEW)|SERMENTION)))(?: [^>]*)?>.*?</\\1|(/?(?!br/|p>)[^ />]+)[^>]*?(/)?)>)s';
	/** {@inheritdoc} */
	protected $quickRenderingTest='((?<=<)(?:[!?]|E[ />]))';
	/** {@inheritdoc} */
	protected function renderQuickTemplate($id, $xml)
	{
		$attributes=$this->matchAttributes($xml);
		$html='';switch($id){case'/LIST':$attributes=array_pop($this->attributes);if(!isset($attributes['type']))$html.='</ul>';else$html.='</ol>';break;case'CODE':$html.='<pre><code';if(isset($attributes['lang']))$html.=' class="language-'.$attributes['lang'].'"';$html.='>';break;case'LIST':if(!isset($attributes['type']))$html.='<ul>';else{$html.='<ol';if(isset($attributes['start']))$html.=' start="'.$attributes['start'].'"';$html.='>';}$this->attributes[]=$attributes;break;case'POSTMENTION':$attributes+=['deleted'=>null,'discussionid'=>null,'number'=>null,'id'=>null,'rel'=>null,'target'=>null,'displayname'=>null];if(htmlspecialchars_decode($attributes['deleted']??'')!=1)$html.='<a href="'.htmlspecialchars($this->params['DISCUSSION_URL'].htmlspecialchars_decode($attributes['discussionid']??''),2).'/'.$attributes['number'].'" class="PostMention" data-id="'.$attributes['id'].'" rel="'.$attributes['rel'].'" target="'.$attributes['target'].'">'.str_replace('&quot;','"',$attributes['displayname']??'').'</a>';else$html.='<span class="PostMention PostMention--deleted" data-id="'.$attributes['id'].'">'.str_replace('&quot;','"',$attributes['displayname']??'').'</span>';break;case'UPL-FILE':$attributes+=['uuid'=>null,'content'=>null,'size'=>null];$html.='<div class="ButtonGroup" data-fof-upload-download-uuid="'.$attributes['uuid'].'"><div class="Button hasIcon Button--icon Button--primary"><i class="fas fa-download"></i></div><div class="Button">'.str_replace('&quot;','"',$attributes['content']??'').'</div><div class="Button">'.str_replace('&quot;','"',$attributes['size']??'').'</div></div>';break;case'UPL-IMAGE':$attributes+=['uuid'=>null,'url'=>null,'size'=>null,'content'=>null];$html.='<div class="fof-download row" data-fof-upload-download-uuid="'.$attributes['uuid'].'"><div class="card"><div class="wrapper" style="background:url('.$attributes['url'].') center / cover no-repeat"><div class="header"><ul class="menu-content"><li><div class="far fa-hdd"><span>'.str_replace('&quot;','"',$attributes['size']??'').'</span></div></li></ul></div><div class="data"><div class="content"><h4 class="title">'.str_replace('&quot;','"',$attributes['content']??'').'</h4><div class="Button Button--primary Button-icon Button--block"><i class="fas fa-download"></i></div></div></div></div></div></div>';break;case'UPL-TEXT-PREVIEW':$attributes+=['has_snippet'=>null,'content'=>null,'snippet'=>null,'url'=>null];$html.='<figure class="FofUpload-TextPreview" data-loading="false" data-expanded="false" data-hassnippet="'.$attributes['has_snippet'].'"><figcaption class="FofUpload-TextPreviewTitle"><i aria-hidden="true" class="icon far fa-file"></i> '.str_replace('&quot;','"',$attributes['content']??'').'</figcaption><div class="FofUpload-TextPreviewSnippet"><pre><code data-preview-text="&lt;preview will appear here after posting&gt;" data-nosnippet-text="&lt;no preview snippet available&gt;">'.str_replace('&quot;','"',$attributes['snippet']??'').'</code></pre></div><div class="FofUpload-TextPreviewFull"></div><button type="button" class="Button hasIcon FofUpload-TextPreviewToggle"><i aria-hidden="true" class="icon fas fa-chevron-down Button-icon FofUpload-TextPreviewExpandIcon"></i><span class="Button-label FofUpload-TextPreviewExpand">
            Expand preview        </span><i aria-hidden="true" class="icon fas fa-chevron-up Button-icon FofUpload-TextPreviewCollapseIcon"></i><span class="Button-label FofUpload-TextPreviewCollapse">
            Collapse preview        </span><div data-size="small" class="FofUpload-TextPreviewToggleLoading LoadingIndicator-container LoadingIndicator-container--inline LoadingIndicator-container--small"><div aria-hidden="true" class="LoadingIndicator"></div></div></button><div class="FofUpload-TextPreviewError"><p><i aria-hidden="true" class="icon fas fa-exclamation-circle"></i>
            Error previewing file. It may have been deleted, or the provided file ID is invalid.
        </p></div><script>
        {
            const figure = document.currentScript.parentElement;

            const previewEl = figure.querySelector(\'.FofUpload-TextPreviewFull\');
            const snippetEl = figure.querySelector(\'.FofUpload-TextPreviewSnippet\');
            const loadingEl = figure.querySelector(\'.FofUpload-TextPreviewLoading\');
            const toggleBtn = figure.querySelector(\'.FofUpload-TextPreviewToggle\');

            const snippetText = \'\';

            const testUrl = new URL(location.origin);
            const url = new URL(\''.htmlspecialchars_decode($attributes['url']??'').'\');

            if (testUrl.origin !== url.origin) {
              // Prevent cross-origin requests
              handleError(new Error(\'Attempted to fetch a cross-origin file in text preview.\'));
            }

            function createCodeHtml(text) {
                const codeEl = document.createElement(\'code\');
                codeEl.innerText = text;

                return `<pre>${codeEl.outerHTML}`;
            }

            function handleError(e) {
                figure.setAttribute(\'data-error\', \'true\');

                console.group(\'[FoF Upload] Failed to preview text file.\');
                console.error(\'Failed to load text file: \' + url);
                console.log(e);
                console.groupEnd();
            }

            let fileContent = null;

            // Only allow toggling preview if showing a snippet
            if ('.htmlspecialchars_decode($attributes['has_snippet']??'').' && testUrl.origin === url.origin) {
                toggleBtn.addEventListener(\'click\', () => {
                    if (fileContent !== null) {
                        const expanded = figure.getAttribute(\'data-expanded\') === \'true\';
                        figure.setAttribute(\'data-expanded\', !expanded);
                        return;
                    }

                    figure.setAttribute(\'data-loading\', \'true\');

                    fetch(url)
                        .then(response => {
                            if (!response.ok) {
                                figure.setAttribute(\'data-loading\', \'false\');
                                throw response;
                            }

                            return response.text();
                        })
                        .then(text => {
                            fileContent = text;
                            previewEl.innerHTML = createCodeHtml(text);

                            figure.setAttribute(\'data-loading\', \'false\');
                            const expanded = figure.getAttribute(\'data-expanded\') === \'true\';
                            figure.setAttribute(\'data-expanded\', !expanded);
                        })
                        .catch(handleError);
                });
            }
        }
    </script></figure>';break;case'USERMENTION':$attributes+=['deleted'=>null,'slug'=>null,'rel'=>null,'target'=>null,'displayname'=>null];if(htmlspecialchars_decode($attributes['deleted']??'')!=1)$html.='<a href="'.htmlspecialchars($this->params['PROFILE_URL'].htmlspecialchars_decode($attributes['slug']??''),2).'" class="UserMention" rel="'.$attributes['rel'].'" target="'.$attributes['target'].'">@'.str_replace('&quot;','"',$attributes['displayname']??'').'</a>';else$html.='<span class="UserMention UserMention--deleted">@'.str_replace('&quot;','"',$attributes['displayname']??'').'</span>';}

		return $html;
	}
}