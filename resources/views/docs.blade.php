<!DOCTYPE html><html><head><meta charset="utf-8"><title>TODO ITK</title><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"><style>@import url('https://fonts.googleapis.com/css?family=Roboto:400,700|Inconsolata|Raleway:200');.hljs-comment,.hljs-title{color:#8e908c}.hljs-variable,.hljs-attribute,.hljs-tag,.hljs-regexp,.ruby .hljs-constant,.xml .hljs-tag .hljs-title,.xml .hljs-pi,.xml .hljs-doctype,.html .hljs-doctype,.css .hljs-id,.css .hljs-class,.css .hljs-pseudo{color:#c82829}.hljs-number,.hljs-preprocessor,.hljs-pragma,.hljs-built_in,.hljs-literal,.hljs-params,.hljs-constant{color:#f5871f}.ruby .hljs-class .hljs-title,.css .hljs-rules .hljs-attribute{color:#eab700}.hljs-string,.hljs-value,.hljs-inheritance,.hljs-header,.ruby .hljs-symbol,.xml .hljs-cdata{color:#718c00}.css .hljs-hexcolor{color:#3e999f}.hljs-function,.python .hljs-decorator,.python .hljs-title,.ruby .hljs-function .hljs-title,.ruby .hljs-title .hljs-keyword,.perl .hljs-sub,.javascript .hljs-title,.coffeescript .hljs-title{color:#4271ae}.hljs-keyword,.javascript .hljs-function{color:#8959a8}.hljs{display:block;background:white;color:#4d4d4c;padding:.5em}.coffeescript .javascript,.javascript .xml,.tex .hljs-formula,.xml .javascript,.xml .vbscript,.xml .css,.xml .hljs-cdata{opacity:.5}.right .hljs-comment{color:#969896}.right .css .hljs-class,.right .css .hljs-id,.right .css .hljs-pseudo,.right .hljs-attribute,.right .hljs-regexp,.right .hljs-tag,.right .hljs-variable,.right .html .hljs-doctype,.right .ruby .hljs-constant,.right .xml .hljs-doctype,.right .xml .hljs-pi,.right .xml .hljs-tag .hljs-title{color:#c66}.right .hljs-built_in,.right .hljs-constant,.right .hljs-literal,.right .hljs-number,.right .hljs-params,.right .hljs-pragma,.right .hljs-preprocessor{color:#de935f}.right .css .hljs-rule .hljs-attribute,.right .ruby .hljs-class .hljs-title{color:#f0c674}.right .hljs-header,.right .hljs-inheritance,.right .hljs-name,.right .hljs-string,.right .hljs-value,.right .ruby .hljs-symbol,.right .xml .hljs-cdata{color:#b5bd68}.right .css .hljs-hexcolor,.right .hljs-title{color:#8abeb7}.right .coffeescript .hljs-title,.right .hljs-function,.right .javascript .hljs-title,.right .perl .hljs-sub,.right .python .hljs-decorator,.right .python .hljs-title,.right .ruby .hljs-function .hljs-title,.right .ruby .hljs-title .hljs-keyword{color:#81a2be}.right .hljs-keyword,.right .javascript .hljs-function{color:#b294bb}.right .hljs{display:block;overflow-x:auto;background:#1d1f21;color:#c5c8c6;padding:.5em;-webkit-text-size-adjust:none}.right .coffeescript .javascript,.right .javascript .xml,.right .tex .hljs-formula,.right .xml .css,.right .xml .hljs-cdata,.right .xml .javascript,.right .xml .vbscript{opacity:.5}body{color:black;background:white;font:400 14px / 1.42 'Roboto',Helvetica,sans-serif}header{border-bottom:1px solid #f2f2f2;margin-bottom:12px}h1,h2,h3,h4,h5{color:black;margin:12px 0}h1 .permalink,h2 .permalink,h3 .permalink,h4 .permalink,h5 .permalink{margin-left:0;opacity:0;transition:opacity .25s ease}h1:hover .permalink,h2:hover .permalink,h3:hover .permalink,h4:hover .permalink,h5:hover .permalink{opacity:1}.triple h1 .permalink,.triple h2 .permalink,.triple h3 .permalink,.triple h4 .permalink,.triple h5 .permalink{opacity:.15}.triple h1:hover .permalink,.triple h2:hover .permalink,.triple h3:hover .permalink,.triple h4:hover .permalink,.triple h5:hover .permalink{opacity:.15}h1{font:200 36px 'Raleway',Helvetica,sans-serif;font-size:36px}h2{font:200 36px 'Raleway',Helvetica,sans-serif;font-size:30px}h3{font-size:100%;text-transform:uppercase}h5{font-size:100%;font-weight:normal}p{margin:0 0 10px}p.choices{line-height:1.6}a{color:#428bca;text-decoration:none}li p{margin:0}hr.split{border:0;height:1px;width:100%;padding-left:6px;margin:12px auto;background-image:linear-gradient(to right, rgba(0,0,0,0) 20%, rgba(0,0,0,0.2) 51.4%, rgba(255,255,255,0.2) 51.4%, rgba(255,255,255,0) 80%)}dl dt{float:left;width:130px;clear:left;text-align:right;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;font-weight:700}dl dd{margin-left:150px}blockquote{color:rgba(0,0,0,0.5);font-size:15.5px;padding:10px 20px;margin:12px 0;border-left:5px solid #e8e8e8}blockquote p:last-child{margin-bottom:0}pre{background-color:#f5f5f5;padding:12px;border:1px solid #cfcfcf;border-radius:6px;overflow:auto}pre code{color:black;background-color:transparent;padding:0;border:none}code{color:#444;background-color:#f5f5f5;font:'Inconsolata',monospace;padding:1px 4px;border:1px solid #cfcfcf;border-radius:3px}ul,ol{padding-left:2em}table{border-collapse:collapse;border-spacing:0;margin-bottom:12px}table tr:nth-child(2n){background-color:#fafafa}table th,table td{padding:6px 12px;border:1px solid #e6e6e6}.text-muted{opacity:.5}.note,.warning{padding:.3em 1em;margin:1em 0;border-radius:2px;font-size:90%}.note h1,.warning h1,.note h2,.warning h2,.note h3,.warning h3,.note h4,.warning h4,.note h5,.warning h5,.note h6,.warning h6{font-family:200 36px 'Raleway',Helvetica,sans-serif;font-size:135%;font-weight:500}.note p,.warning p{margin:.5em 0}.note{color:black;background-color:#f0f6fb;border-left:4px solid #428bca}.note h1,.note h2,.note h3,.note h4,.note h5,.note h6{color:#428bca}.warning{color:black;background-color:#fbf1f0;border-left:4px solid #c9302c}.warning h1,.warning h2,.warning h3,.warning h4,.warning h5,.warning h6{color:#c9302c}header{margin-top:24px}nav{position:fixed;top:24px;bottom:0;overflow-y:auto}nav .resource-group{padding:0}nav .resource-group .heading{position:relative}nav .resource-group .heading .chevron{position:absolute;top:12px;right:12px;opacity:.5}nav .resource-group .heading a{display:block;color:black;opacity:.7;border-left:2px solid transparent;margin:0}nav .resource-group .heading a:hover{text-decoration:none;background-color:bad-color;border-left:2px solid black}nav ul{list-style-type:none;padding-left:0}nav ul a{display:block;font-size:13px;color:rgba(0,0,0,0.7);padding:8px 12px;border-top:1px solid #d9d9d9;border-left:2px solid transparent;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}nav ul a:hover{text-decoration:none;background-color:bad-color;border-left:2px solid black}nav ul>li{margin:0}nav ul>li:first-child{margin-top:-12px}nav ul>li:last-child{margin-bottom:-12px}nav ul ul a{padding-left:24px}nav ul ul li{margin:0}nav ul ul li:first-child{margin-top:0}nav ul ul li:last-child{margin-bottom:0}nav>div>div>ul>li:first-child>a{border-top:none}.preload *{transition:none !important}.pull-left{float:left}.pull-right{float:right}.badge{display:inline-block;float:right;min-width:10px;min-height:14px;padding:3px 7px;font-size:12px;color:#000;background-color:#f2f2f2;border-radius:10px;margin:-2px 0}.badge.get{color:#70bbe1;background-color:#d9edf7}.badge.head{color:#70bbe1;background-color:#d9edf7}.badge.options{color:#70bbe1;background-color:#d9edf7}.badge.put{color:#f0db70;background-color:#fcf8e3}.badge.patch{color:#f0db70;background-color:#fcf8e3}.badge.post{color:#93cd7c;background-color:#dff0d8}.badge.delete{color:#ce8383;background-color:#f2dede}.collapse-button{float:right}.collapse-button .close{display:none;color:#428bca;cursor:pointer}.collapse-button .open{color:#428bca;cursor:pointer}.collapse-button.show .close{display:inline}.collapse-button.show .open{display:none}.collapse-content{max-height:0;overflow:hidden;transition:max-height .3s ease-in-out}nav{width:220px}.container{max-width:940px;margin-left:auto;margin-right:auto}.container .row .content{margin-left:244px;width:696px}.container .row:after{content:'';display:block;clear:both}.container-fluid nav{width:22%}.container-fluid .row .content{margin-left:24%}.container-fluid.triple nav{width:16.5%;padding-right:1px}.container-fluid.triple .row .content{position:relative;margin-left:16.5%;padding-left:24px}.middle:before,.middle:after{content:'';display:table}.middle:after{clear:both}.middle{box-sizing:border-box;width:51.5%;padding-right:12px}.right{box-sizing:border-box;float:right;width:48.5%;padding-left:12px}.right a{color:#428bca}.right h1,.right h2,.right h3,.right h4,.right h5,.right p,.right div{color:white}.right pre{background-color:#1d1f21;border:1px solid #1d1f21}.right pre code{color:#c5c8c6}.right .description{margin-top:12px}.triple .resource-heading{font-size:125%}.definition{margin-top:12px;margin-bottom:12px}.definition .method{font-weight:bold}.definition .method.get{color:#2e8ab8}.definition .method.head{color:#2e8ab8}.definition .method.options{color:#2e8ab8}.definition .method.post{color:#56b82e}.definition .method.put{color:#b8a22e}.definition .method.patch{color:#b8a22e}.definition .method.delete{color:#b82e2e}.definition .uri{word-break:break-all;word-wrap:break-word}.definition .hostname{opacity:.5}.example-names{background-color:#eee;padding:12px;border-radius:6px}.example-names .tab-button{cursor:pointer;color:black;border:1px solid #ddd;padding:6px;margin-left:12px}.example-names .tab-button.active{background-color:#d5d5d5}.right .example-names{background-color:#444}.right .example-names .tab-button{color:white;border:1px solid #666;border-radius:6px}.right .example-names .tab-button.active{background-color:#5e5e5e}#nav-background{position:fixed;left:0;top:0;bottom:0;width:16.5%;padding-right:14.4px;background-color:#fbfbfb;border-right:1px solid #f0f0f0;z-index:-1}#right-panel-background{position:absolute;right:-12px;top:-12px;bottom:-12px;width:48.6%;background-color:#333;z-index:-1}@media (max-width:1200px){nav{width:198px}.container{max-width:840px}.container .row .content{margin-left:224px;width:606px}}@media (max-width:992px){nav{width:169.4px}.container{max-width:720px}.container .row .content{margin-left:194px;width:526px}}@media (max-width:768px){nav{display:none}.container{width:95%;max-width:none}.container .row .content,.container-fluid .row .content,.container-fluid.triple .row .content{margin-left:auto;margin-right:auto;width:95%}#nav-background{display:none}#right-panel-background{width:48.6%}}.back-to-top{position:fixed;z-index:1;bottom:0;right:24px;padding:4px 8px;color:rgba(0,0,0,0.5);background-color:#f2f2f2;text-decoration:none !important;border-top:1px solid #d9d9d9;border-left:1px solid #d9d9d9;border-right:1px solid #d9d9d9;border-top-left-radius:3px;border-top-right-radius:3px}.resource-group{padding:12px;margin-bottom:12px;background-color:white;border:1px solid #d9d9d9;border-radius:6px}.resource-group h2.group-heading,.resource-group .heading a{padding:12px;margin:-12px -12px 12px -12px;background-color:#f2f2f2;border-bottom:1px solid #d9d9d9;border-top-left-radius:6px;border-top-right-radius:6px;white-space:nowrap;text-overflow:ellipsis;overflow:hidden}.triple .content .resource-group{padding:0;border:none}.triple .content .resource-group h2.group-heading,.triple .content .resource-group .heading a{margin:0 0 12px 0;border:1px solid #d9d9d9}nav .resource-group .heading a{padding:12px;margin-bottom:0}nav .resource-group .collapse-content{padding:0}.action{margin-bottom:12px;padding:12px 12px 0 12px;overflow:hidden;border:1px solid transparent;border-radius:6px}.action h4.action-heading{padding:6px 12px;margin:-12px -12px 12px -12px;border-bottom:1px solid transparent;border-top-left-radius:6px;border-top-right-radius:6px;overflow:hidden}.action h4.action-heading .name{float:right;font-weight:normal;padding:6px 0}.action h4.action-heading .method{padding:6px 12px;margin-right:12px;border-radius:3px;display:inline-block}.action h4.action-heading .method.get{color:#000;background-color:#337ab7}.action h4.action-heading .method.head{color:#000;background-color:#337ab7}.action h4.action-heading .method.options{color:#000;background-color:#337ab7}.action h4.action-heading .method.put{color:#000;background-color:#ed9c28}.action h4.action-heading .method.patch{color:#000;background-color:#ed9c28}.action h4.action-heading .method.post{color:#000;background-color:#5cb85c}.action h4.action-heading .method.delete{color:#000;background-color:#d9534f}.action h4.action-heading code{color:#444;background-color:#f5f5f5;border-color:#cfcfcf;font-weight:normal;word-break:break-all;display:inline-block;margin-top:2px}.action dl.inner{padding-bottom:2px}.action .title{border-bottom:1px solid white;margin:0 -12px -1px -12px;padding:12px}.action.get{border-color:#bce8f1}.action.get h4.action-heading{color:#337ab7;background:#d9edf7;border-bottom-color:#bce8f1}.action.head{border-color:#bce8f1}.action.head h4.action-heading{color:#337ab7;background:#d9edf7;border-bottom-color:#bce8f1}.action.options{border-color:#bce8f1}.action.options h4.action-heading{color:#337ab7;background:#d9edf7;border-bottom-color:#bce8f1}.action.post{border-color:#d6e9c6}.action.post h4.action-heading{color:#5cb85c;background:#dff0d8;border-bottom-color:#d6e9c6}.action.put{border-color:#faebcc}.action.put h4.action-heading{color:#ed9c28;background:#fcf8e3;border-bottom-color:#faebcc}.action.patch{border-color:#faebcc}.action.patch h4.action-heading{color:#ed9c28;background:#fcf8e3;border-bottom-color:#faebcc}.action.delete{border-color:#ebccd1}.action.delete h4.action-heading{color:#d9534f;background:#f2dede;border-bottom-color:#ebccd1}</style></head><body class="preload"><a href="#top" class="text-muted back-to-top"><i class="fa fa-toggle-up"></i>&nbsp;Back to top</a><div class="container"><div class="row"><nav><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#">Resource Group</a></div><div class="collapse-content"><ul><li><a href="#users-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Me</a></li><li><a href="#todos">Todos</a><ul><li><a href="#todos-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>List of todos</a></li><li><a href="#todos-post"><span class="badge post"><i class="fa fa-plus"></i></span>Create a todo</a></li><li><a href="#todos-get-1"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Display the specified todo.</a></li><li><a href="#todos-put"><span class="badge put"><i class="fa fa-pencil"></i></span>Update todo</a></li><li><a href="#todos-delete"><span class="badge delete"><i class="fa fa-times"></i></span>Remove todo</a></li></ul></li><li><a href="#authentication">Authentication</a><ul><li><a href="#authentication-post"><span class="badge post"><i class="fa fa-plus"></i></span>Login</a></li><li><a href="#authentication-post-1"><span class="badge post"><i class="fa fa-plus"></i></span>Register</a></li></ul></li></ul></div></div></nav><div class="content"><header><h1 id="top">TODO ITK</h1></header><section id="" class="resource-group"><h2 class="group-heading">Resource Group <a href="#" class="permalink">&para;</a></h2><div id="users" class="resource"><h3 class="resource-heading">Users <a href="#users" class="permalink">&nbsp;&para;</a></h3><p>Users endpoints. User can receive data about him.</p>
<div id="users-get" class="action get"><h4 class="action-heading"><div class="name">Me</div><a href="#users-get" class="method get">GET</a><code class="uri">/v1/users/me</code></h4><p>Get info about current user.</p>
<h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/v1/users/me</span></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">apikey</span>: <span class="hljs-string">442195b3-6389-4d8c-a283-4d1d7313d6da</span><br><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2FwaS50b2RvaXRrLmRldlwvdjFcL2xvZ2luIiwiaWF0IjoxNDc0ODI4NTA2LCJleHAiOjE0NzQ4MzIxMDYsIm5iZiI6MTQ3NDgyODUwNiwianRpIjoiNTdkYjNjZTg0NWRlYmZkNDNkMTQyZTMzNWYyYzU3ZTEifQ.mO5ZlKvZNo_Kr8aIceDtUHtN4DYhpuBJnm0xow_5Yq8</span></code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"users"</span></span>,
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"cbbae68f-55bd-4dd3-8264-c367ce7d8446"</span></span>,
    "<span class="hljs-attribute">attributes</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"John Smith"</span></span>,
      "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"john.smith@example.com"</span></span>,
      "<span class="hljs-attribute">created_at</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">date</span>": <span class="hljs-value"><span class="hljs-string">"2016-09-29 16:43:20.000000"</span></span>,
        "<span class="hljs-attribute">timezone_type</span>": <span class="hljs-value"><span class="hljs-number">3</span></span>,
        "<span class="hljs-attribute">timezone</span>": <span class="hljs-value"><span class="hljs-string">"UTC"</span>
      </span>}
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{}</span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Users data object."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"data"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>401</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Failed to authenticate because of bad credentials or an invalid authorization header."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">401</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Error message."</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"HTTP Status Code."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"message"</span>,
    <span class="hljs-string">"status_code"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>403</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Api key is not valid."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">403</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Error message in case sent Api Key isn't valid."</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"HTTP Status Code."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"message"</span>,
    <span class="hljs-string">"status_code"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"500 Internal Server Error"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">500</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Error message."</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"HTTP Status Code."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"message"</span>,
    <span class="hljs-string">"status_code"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="todos" class="resource"><h3 class="resource-heading">Todos <a href="#todos" class="permalink">&nbsp;&para;</a></h3><p>Todos endpoints. User can list, request one, inster, update or delete todos for him.</p>
<div id="todos-get" class="action get"><h4 class="action-heading"><div class="name">List of todos</div><a href="#todos-get" class="method get">GET</a><code class="uri">/v1/todos</code></h4><p>Retreive a listing of the todos for current user.</p>
<h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/v1/todos</span></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">apikey</span>: <span class="hljs-string">442195b3-6389-4d8c-a283-4d1d7313d6da</span><br><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2FwaS50b2RvaXRrLmRldlwvdjFcL2xvZ2luIiwiaWF0IjoxNDc0ODI4NTA2LCJleHAiOjE0NzQ4MzIxMDYsIm5iZiI6MTQ3NDgyODUwNiwianRpIjoiNTdkYjNjZTg0NWRlYmZkNDNkMTQyZTMzNWYyYzU3ZTEifQ.mO5ZlKvZNo_Kr8aIceDtUHtN4DYhpuBJnm0xow_5Yq8</span></code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"todos"</span></span>,
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"a207329e-6264-4960-a377-5b6dc8995d19"</span></span>,
    "<span class="hljs-attribute">attributes</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">content</span>": <span class="hljs-value"><span class="hljs-string">"Ab quae quod consequatur itaque porro est corporis rerum. Deserunt quos ab cupiditate."</span></span>,
      "<span class="hljs-attribute">is_active</span>": <span class="hljs-value"><span class="hljs-literal">false</span></span>,
      "<span class="hljs-attribute">is_completed</span>": <span class="hljs-value"><span class="hljs-literal">false</span></span>,
      "<span class="hljs-attribute">created_at</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">date</span>": <span class="hljs-value"><span class="hljs-string">"2016-09-25 19:34:16.000000"</span></span>,
        "<span class="hljs-attribute">timezone_type</span>": <span class="hljs-value"><span class="hljs-number">3</span></span>,
        "<span class="hljs-attribute">timezone</span>": <span class="hljs-value"><span class="hljs-string">"UTC"</span>
      </span>}</span>,
      "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">date</span>": <span class="hljs-value"><span class="hljs-string">"2016-09-25 19:34:16.000000"</span></span>,
        "<span class="hljs-attribute">timezone_type</span>": <span class="hljs-value"><span class="hljs-number">3</span></span>,
        "<span class="hljs-attribute">timezone</span>": <span class="hljs-value"><span class="hljs-string">"UTC"</span>
      </span>}
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{}</span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"List of all todos for the logged in user. NOTE THAT DATA PROPERTY IS AN ARRAY OF TODO OBJECTS."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"data"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>401</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Failed to authenticate because of bad credentials or an invalid authorization header."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">401</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Error message."</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"HTTP Status Code."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"message"</span>,
    <span class="hljs-string">"status_code"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>403</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Api key is not valid."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">403</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Error message in case sent Api Key isn't valid."</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"HTTP Status Code."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"message"</span>,
    <span class="hljs-string">"status_code"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>404</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"404 Not Found."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">404</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"No todos were found."</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"HTTP Status Code."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"message"</span>,
    <span class="hljs-string">"status_code"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"500 Internal Server Error"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">500</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Error message."</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"HTTP Status Code."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"message"</span>,
    <span class="hljs-string">"status_code"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div id="todos-post" class="action post"><h4 class="action-heading"><div class="name">Create a todo</div><a href="#todos-post" class="method post">POST</a><code class="uri">/v1/todos</code></h4><p>Store a newly created todo in storage.</p>
<h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname"></span>/v1/todos</span></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">apikey</span>: <span class="hljs-string">442195b3-6389-4d8c-a283-4d1d7313d6da</span><br><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2FwaS50b2RvaXRrLmRldlwvdjFcL2xvZ2luIiwiaWF0IjoxNDc0ODI4NTA2LCJleHAiOjE0NzQ4MzIxMDYsIm5iZiI6MTQ3NDgyODUwNiwianRpIjoiNTdkYjNjZTg0NWRlYmZkNDNkMTQyZTMzNWYyYzU3ZTEifQ.mO5ZlKvZNo_Kr8aIceDtUHtN4DYhpuBJnm0xow_5Yq8</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">todo</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"todos"</span></span>,
    "<span class="hljs-attribute">attributes</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">content</span>": <span class="hljs-value"><span class="hljs-string">"Lorem ipsum dolor sit amet."</span></span>,
      "<span class="hljs-attribute">is_active</span>": <span class="hljs-value"><span class="hljs-literal">false</span></span>,
      "<span class="hljs-attribute">is_completed</span>": <span class="hljs-value"><span class="hljs-literal">false</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">todo</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{}</span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Todo object with set type, content, is_active and is_completed properties."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"todo"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>201</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">Location</span>: <span class="hljs-string">http://api.todoitk.dev/v1/todos/bf809138-8c0e-4cb5-b194-f649d7f4a1a5</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"todos"</span></span>,
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"bf809138-8c0e-4cb5-b194-f649d7f4a1a5"</span></span>,
    "<span class="hljs-attribute">attributes</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">content</span>": <span class="hljs-value"><span class="hljs-string">"Lorem ipsum dolor sit amet."</span></span>,
      "<span class="hljs-attribute">is_active</span>": <span class="hljs-value"><span class="hljs-literal">false</span></span>,
      "<span class="hljs-attribute">is_completed</span>": <span class="hljs-value"><span class="hljs-literal">false</span></span>,
      "<span class="hljs-attribute">created_at</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">date</span>": <span class="hljs-value"><span class="hljs-string">"2016-09-29 18:08:37.000000"</span></span>,
        "<span class="hljs-attribute">timezone_type</span>": <span class="hljs-value"><span class="hljs-number">3</span></span>,
        "<span class="hljs-attribute">timezone</span>": <span class="hljs-value"><span class="hljs-string">"UTC"</span>
      </span>}</span>,
      "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">date</span>": <span class="hljs-value"><span class="hljs-string">"2016-09-29 18:08:37.000000"</span></span>,
        "<span class="hljs-attribute">timezone_type</span>": <span class="hljs-value"><span class="hljs-number">3</span></span>,
        "<span class="hljs-attribute">timezone</span>": <span class="hljs-value"><span class="hljs-string">"UTC"</span>
      </span>}
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{}</span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Todo object for the created todo."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"data"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>401</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Failed to authenticate because of bad credentials or an invalid authorization header."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">401</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Error message."</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"HTTP Status Code."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"message"</span>,
    <span class="hljs-string">"status_code"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>403</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Api key is not valid."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">403</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Error message in case sent Api Key isn't valid."</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"HTTP Status Code."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"message"</span>,
    <span class="hljs-string">"status_code"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>422</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"422 Unprocessable Entity"</span></span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">is_completed</span>": <span class="hljs-value"><span class="hljs-string">"The is completed field is required."</span>
  </span>}</span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">422</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Error message."</span>
    </span>}</span>,
    "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{}</span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Key value pairs of validation errors. Key represents a field name, and value is a validation error."</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"HTTP Status Code."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"message"</span>,
    <span class="hljs-string">"errors"</span>,
    <span class="hljs-string">"status_code"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"500 Internal Server Error"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">500</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Error message."</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"HTTP Status Code."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"message"</span>,
    <span class="hljs-string">"status_code"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div id="todos-get-1" class="action get"><h4 class="action-heading"><div class="name">Display the specified todo.</div><a href="#todos-get-1" class="method get">GET</a><code class="uri">/v1/todos/{id}</code></h4><p>Retreive a specified todo for current user.</p>
<h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/v1/todos/<span class="hljs-attribute" title="id">a207329e-6264-4960-a377-5b6dc8995d19</span></span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>a207329e-6264-4960-a377-5b6dc8995d19</span></span><p>The id of the todo.</p>
</dd></dl></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">apikey</span>: <span class="hljs-string">442195b3-6389-4d8c-a283-4d1d7313d6da</span><br><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2FwaS50b2RvaXRrLmRldlwvdjFcL2xvZ2luIiwiaWF0IjoxNDc0ODI4NTA2LCJleHAiOjE0NzQ4MzIxMDYsIm5iZiI6MTQ3NDgyODUwNiwianRpIjoiNTdkYjNjZTg0NWRlYmZkNDNkMTQyZTMzNWYyYzU3ZTEifQ.mO5ZlKvZNo_Kr8aIceDtUHtN4DYhpuBJnm0xow_5Yq8</span></code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"todos"</span></span>,
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"a207329e-6264-4960-a377-5b6dc8995d19"</span></span>,
    "<span class="hljs-attribute">attributes</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">content</span>": <span class="hljs-value"><span class="hljs-string">"Ab quae quod consequatur itaque porro est corporis rerum. Deserunt quos ab cupiditate."</span></span>,
      "<span class="hljs-attribute">is_active</span>": <span class="hljs-value"><span class="hljs-literal">false</span></span>,
      "<span class="hljs-attribute">is_completed</span>": <span class="hljs-value"><span class="hljs-literal">false</span></span>,
      "<span class="hljs-attribute">created_at</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">date</span>": <span class="hljs-value"><span class="hljs-string">"2016-09-25 19:34:16.000000"</span></span>,
        "<span class="hljs-attribute">timezone_type</span>": <span class="hljs-value"><span class="hljs-number">3</span></span>,
        "<span class="hljs-attribute">timezone</span>": <span class="hljs-value"><span class="hljs-string">"UTC"</span>
      </span>}</span>,
      "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">date</span>": <span class="hljs-value"><span class="hljs-string">"2016-09-25 19:34:16.000000"</span></span>,
        "<span class="hljs-attribute">timezone_type</span>": <span class="hljs-value"><span class="hljs-number">3</span></span>,
        "<span class="hljs-attribute">timezone</span>": <span class="hljs-value"><span class="hljs-string">"UTC"</span>
      </span>}
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{}</span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Todo object."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"data"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>401</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Failed to authenticate because of bad credentials or an invalid authorization header."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">401</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Error message."</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"HTTP Status Code."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"message"</span>,
    <span class="hljs-string">"status_code"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>403</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Api key is not valid."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">403</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Error message in case sent Api Key isn't valid."</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"HTTP Status Code."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"message"</span>,
    <span class="hljs-string">"status_code"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>404</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"404 Not Found."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">404</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"No todos were found."</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"HTTP Status Code."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"message"</span>,
    <span class="hljs-string">"status_code"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"500 Internal Server Error"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">500</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Error message."</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"HTTP Status Code."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"message"</span>,
    <span class="hljs-string">"status_code"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div id="todos-put" class="action put"><h4 class="action-heading"><div class="name">Update todo</div><a href="#todos-put" class="method put">PUT</a><code class="uri">/v1/todos/{id}</code></h4><p>Update the specified resource in storage.</p>
<h4>Example URI</h4><div class="definition"><span class="method put">PUT</span>&nbsp;<span class="uri"><span class="hostname"></span>/v1/todos/<span class="hljs-attribute" title="id">a207329e-6264-4960-a377-5b6dc8995d19</span></span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>a207329e-6264-4960-a377-5b6dc8995d19</span></span><p>The id of the todo.</p>
</dd></dl></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">apikey</span>: <span class="hljs-string">442195b3-6389-4d8c-a283-4d1d7313d6da</span><br><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2FwaS50b2RvaXRrLmRldlwvdjFcL2xvZ2luIiwiaWF0IjoxNDc0ODI4NTA2LCJleHAiOjE0NzQ4MzIxMDYsIm5iZiI6MTQ3NDgyODUwNiwianRpIjoiNTdkYjNjZTg0NWRlYmZkNDNkMTQyZTMzNWYyYzU3ZTEifQ.mO5ZlKvZNo_Kr8aIceDtUHtN4DYhpuBJnm0xow_5Yq8</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">todo</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"todos"</span></span>,
    "<span class="hljs-attribute">attributes</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">content</span>": <span class="hljs-value"><span class="hljs-string">"Lorem ipsum dolor sit amet."</span></span>,
      "<span class="hljs-attribute">is_active</span>": <span class="hljs-value"><span class="hljs-literal">false</span></span>,
      "<span class="hljs-attribute">is_completed</span>": <span class="hljs-value"><span class="hljs-literal">false</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">todo</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{}</span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Todo object with set type, and any of content, is_active and is_completed properties."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"todo"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">Location</span>: <span class="hljs-string">http://api.todoitk.dev/v1/todos/bf809138-8c0e-4cb5-b194-f649d7f4a1a5</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"todos"</span></span>,
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"bf809138-8c0e-4cb5-b194-f649d7f4a1a5"</span></span>,
    "<span class="hljs-attribute">attributes</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">content</span>": <span class="hljs-value"><span class="hljs-string">"Lorem ipsum dolor sit amet."</span></span>,
      "<span class="hljs-attribute">is_active</span>": <span class="hljs-value"><span class="hljs-literal">false</span></span>,
      "<span class="hljs-attribute">is_completed</span>": <span class="hljs-value"><span class="hljs-literal">false</span></span>,
      "<span class="hljs-attribute">created_at</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">date</span>": <span class="hljs-value"><span class="hljs-string">"2016-09-29 18:08:37.000000"</span></span>,
        "<span class="hljs-attribute">timezone_type</span>": <span class="hljs-value"><span class="hljs-number">3</span></span>,
        "<span class="hljs-attribute">timezone</span>": <span class="hljs-value"><span class="hljs-string">"UTC"</span>
      </span>}</span>,
      "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">date</span>": <span class="hljs-value"><span class="hljs-string">"2016-09-29 18:08:37.000000"</span></span>,
        "<span class="hljs-attribute">timezone_type</span>": <span class="hljs-value"><span class="hljs-number">3</span></span>,
        "<span class="hljs-attribute">timezone</span>": <span class="hljs-value"><span class="hljs-string">"UTC"</span>
      </span>}
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{}</span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Todo object for the created todo."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"data"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>401</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Failed to authenticate because of bad credentials or an invalid authorization header."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">401</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Error message."</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"HTTP Status Code."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"message"</span>,
    <span class="hljs-string">"status_code"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>403</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Api key is not valid."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">403</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Error message in case sent Api Key isn't valid."</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"HTTP Status Code."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"message"</span>,
    <span class="hljs-string">"status_code"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>422</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"422 Unprocessable Entity"</span></span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">is_active</span>": <span class="hljs-value"><span class="hljs-string">"The is active field must be true or false."</span>
  </span>}</span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">422</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Error message."</span>
    </span>}</span>,
    "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{}</span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Key value pairs of validation errors. Key represents a field name, and value is a validation error."</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"HTTP Status Code."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"message"</span>,
    <span class="hljs-string">"errors"</span>,
    <span class="hljs-string">"status_code"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"500 Internal Server Error"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">500</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Error message."</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"HTTP Status Code."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"message"</span>,
    <span class="hljs-string">"status_code"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div id="todos-delete" class="action delete"><h4 class="action-heading"><div class="name">Remove todo</div><a href="#todos-delete" class="method delete">DELETE</a><code class="uri">/v1/todos/{id}</code></h4><p>Remove the specified todo from storage.</p>
<h4>Example URI</h4><div class="definition"><span class="method delete">DELETE</span>&nbsp;<span class="uri"><span class="hostname"></span>/v1/todos/<span class="hljs-attribute" title="id">a207329e-6264-4960-a377-5b6dc8995d19</span></span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;<span class="text-muted example"><strong>Example:&nbsp;</strong><span>a207329e-6264-4960-a377-5b6dc8995d19</span></span><p>The id of the todo.</p>
</dd></dl></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">apikey</span>: <span class="hljs-string">442195b3-6389-4d8c-a283-4d1d7313d6da</span><br><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2FwaS50b2RvaXRrLmRldlwvdjFcL2xvZ2luIiwiaWF0IjoxNDc0ODI4NTA2LCJleHAiOjE0NzQ4MzIxMDYsIm5iZiI6MTQ3NDgyODUwNiwianRpIjoiNTdkYjNjZTg0NWRlYmZkNDNkMTQyZTMzNWYyYzU3ZTEifQ.mO5ZlKvZNo_Kr8aIceDtUHtN4DYhpuBJnm0xow_5Yq8</span></code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>204</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>401</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Failed to authenticate because of bad credentials or an invalid authorization header."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">401</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Error message."</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"HTTP Status Code."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"message"</span>,
    <span class="hljs-string">"status_code"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>403</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Api key is not valid."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">403</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Error message in case sent Api Key isn't valid."</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"HTTP Status Code."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"message"</span>,
    <span class="hljs-string">"status_code"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"500 Internal Server Error"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">500</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Error message."</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"HTTP Status Code."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"message"</span>,
    <span class="hljs-string">"status_code"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="authentication" class="resource"><h3 class="resource-heading">Authentication <a href="#authentication" class="permalink">&nbsp;&para;</a></h3><p>Authentication endpoints. User can login or register.</p>
<div id="authentication-post" class="action post"><h4 class="action-heading"><div class="name">Login</div><a href="#authentication-post" class="method post">POST</a><code class="uri">/v1/login</code></h4><p>Login user by sending his email and password in JSON format.</p>
<h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname"></span>/v1/login</span></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">apikey</span>: <span class="hljs-string">442195b3-6389-4d8c-a283-4d1d7313d6da</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"john.smith@example.com"</span></span>,
  "<span class="hljs-attribute">password</span>": <span class="hljs-value"><span class="hljs-string">"123456789"</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">email</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"User's email. Must be valid email."</span>
    </span>}</span>,
    "<span class="hljs-attribute">password</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"User's password. Must be at least 8 characters long."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"email"</span>,
    <span class="hljs-string">"password"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">token</span>": <span class="hljs-value"><span class="hljs-string">"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2FwaS50b2RvaXRrLmRldlwvdjFcL2xvZ2luIiwiaWF0IjoxNDc0ODI4NTA2LCJleHAiOjE0NzQ4MzIxMDYsIm5iZiI6MTQ3NDgyODUwNiwianRpIjoiNTdkYjNjZTg0NWRlYmZkNDNkMTQyZTMzNWYyYzU3ZTEifQ.mO5ZlKvZNo_Kr8aIceDtUHtN4DYhpuBJnm0xow_5Yq8"</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">token</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Authorization JWT Token."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"token"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>403</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Api key is not valid."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">403</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Error message in case sent Api Key isn't valid."</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"HTTP Status Code."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"message"</span>,
    <span class="hljs-string">"status_code"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>404</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"404 Not Found"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">404</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Error message."</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"HTTP Status Code."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"message"</span>,
    <span class="hljs-string">"status_code"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>422</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"422 Unprocessable Entity"</span></span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">password</span>": <span class="hljs-value"><span class="hljs-string">"The password must be at least 8 characters."</span>
  </span>}</span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">422</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Error message."</span>
    </span>}</span>,
    "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{}</span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Key value pairs of validation errors. Key represents a field name, and value is a validation error."</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"HTTP Status Code."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"message"</span>,
    <span class="hljs-string">"errors"</span>,
    <span class="hljs-string">"status_code"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"500 Internal Server Error"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">500</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Error message."</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"HTTP Status Code."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"message"</span>,
    <span class="hljs-string">"status_code"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div></div><div id="authentication-post-1" class="action post"><h4 class="action-heading"><div class="name">Register</div><a href="#authentication-post-1" class="method post">POST</a><code class="uri">/v1/register</code></h4><p>Register user by sending his name, email and password in JSON format.</p>
<h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname"></span>/v1/register</span></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">apikey</span>: <span class="hljs-string">442195b3-6389-4d8c-a283-4d1d7313d6da</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"John Smith"</span></span>,
  "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"john.smith@example.com"</span></span>,
  "<span class="hljs-attribute">password</span>": <span class="hljs-value"><span class="hljs-string">"123456789"</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">name</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"User's name."</span>
    </span>}</span>,
    "<span class="hljs-attribute">email</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"User's email. Must be valid email."</span>
    </span>}</span>,
    "<span class="hljs-attribute">password</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"User's password. Must be at least 8 characters long."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"name"</span>,
    <span class="hljs-string">"email"</span>,
    <span class="hljs-string">"password"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>201</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span><br><span class="hljs-attribute">Location</span>: <span class="hljs-string">http://api.todoitk.dev/v1/users/me</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"users"</span></span>,
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"69c66dbc-16f1-4aca-8f5b-67258d9f4d71"</span></span>,
    "<span class="hljs-attribute">attributes</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"John Smith"</span></span>,
      "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"john.smit1h@example.com"</span></span>,
      "<span class="hljs-attribute">created_at</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">date</span>": <span class="hljs-value"><span class="hljs-string">"2016-09-29 16:45:30.000000"</span></span>,
        "<span class="hljs-attribute">timezone_type</span>": <span class="hljs-value"><span class="hljs-number">3</span></span>,
        "<span class="hljs-attribute">timezone</span>": <span class="hljs-value"><span class="hljs-string">"UTC"</span>
      </span>}
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>403</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Api key is not valid."</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">403</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Error message in case sent Api Key isn't valid."</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"HTTP Status Code."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"message"</span>,
    <span class="hljs-string">"status_code"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>422</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"422 Unprocessable Entity"</span></span>,
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"The email has already been taken."</span>
  </span>}</span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">422</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Error message."</span>
    </span>}</span>,
    "<span class="hljs-attribute">errors</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{}</span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Key value pairs of validation errors. Key represents a field name, and value is a validation error."</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"HTTP Status Code."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"message"</span>,
    <span class="hljs-string">"errors"</span>,
    <span class="hljs-string">"status_code"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"500 Internal Server Error"</span></span>,
  "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">500</span>
</span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
  "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
  "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"Error message."</span>
    </span>}</span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span></span>,
      "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"HTTP Status Code."</span>
    </span>}
  </span>}</span>,
  "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
    <span class="hljs-string">"message"</span>,
    <span class="hljs-string">"status_code"</span>
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></section></div></div></div><p style="text-align: center;" class="text-muted">Generated by&nbsp;<a href="https://github.com/danielgtaylor/aglio" class="aglio">aglio</a>&nbsp;on 29 Sep 2016</p><script>/* eslint-env browser */
/* eslint quotes: [2, "single"] */
'use strict';

/*
  Determine if a string ends with another string.
*/
function endsWith(str, suffix) {
    return str.indexOf(suffix, str.length - suffix.length) !== -1;
}

/*
  Get a list of direct child elements by class name.
*/
function childrenByClass(element, name) {
  var filtered = [];

  for (var i = 0; i < element.children.length; i++) {
    var child = element.children[i];
    var classNames = child.className.split(' ');
    if (classNames.indexOf(name) !== -1) {
      filtered.push(child);
    }
  }

  return filtered;
}

/*
  Get an array [width, height] of the window.
*/
function getWindowDimensions() {
  var w = window,
      d = document,
      e = d.documentElement,
      g = d.body,
      x = w.innerWidth || e.clientWidth || g.clientWidth,
      y = w.innerHeight || e.clientHeight || g.clientHeight;

  return [x, y];
}

/*
  Collapse or show a request/response example.
*/
function toggleCollapseButton(event) {
    var button = event.target.parentNode;
    var content = button.parentNode.nextSibling;
    var inner = content.children[0];

    if (button.className.indexOf('collapse-button') === -1) {
      // Clicked without hitting the right element?
      return;
    }

    if (content.style.maxHeight && content.style.maxHeight !== '0px') {
        // Currently showing, so let's hide it
        button.className = 'collapse-button';
        content.style.maxHeight = '0px';
    } else {
        // Currently hidden, so let's show it
        button.className = 'collapse-button show';
        content.style.maxHeight = inner.offsetHeight + 12 + 'px';
    }
}

function toggleTabButton(event) {
    var i, index;
    var button = event.target;

    // Get index of the current button.
    var buttons = childrenByClass(button.parentNode, 'tab-button');
    for (i = 0; i < buttons.length; i++) {
        if (buttons[i] === button) {
            index = i;
            button.className = 'tab-button active';
        } else {
            buttons[i].className = 'tab-button';
        }
    }

    // Hide other tabs and show this one.
    var tabs = childrenByClass(button.parentNode.parentNode, 'tab');
    for (i = 0; i < tabs.length; i++) {
        if (i === index) {
            tabs[i].style.display = 'block';
        } else {
            tabs[i].style.display = 'none';
        }
    }
}

/*
  Collapse or show a navigation menu. It will not be hidden unless it
  is currently selected or `force` has been passed.
*/
function toggleCollapseNav(event, force) {
    var heading = event.target.parentNode;
    var content = heading.nextSibling;
    var inner = content.children[0];

    if (heading.className.indexOf('heading') === -1) {
      // Clicked without hitting the right element?
      return;
    }

    if (content.style.maxHeight && content.style.maxHeight !== '0px') {
      // Currently showing, so let's hide it, but only if this nav item
      // is already selected. This prevents newly selected items from
      // collapsing in an annoying fashion.
      if (force || window.location.hash && endsWith(event.target.href, window.location.hash)) {
        content.style.maxHeight = '0px';
      }
    } else {
      // Currently hidden, so let's show it
      content.style.maxHeight = inner.offsetHeight + 12 + 'px';
    }
}

/*
  Refresh the page after a live update from the server. This only
  works in live preview mode (using the `--server` parameter).
*/
function refresh(body) {
    document.querySelector('body').className = 'preload';
    document.body.innerHTML = body;

    // Re-initialize the page
    init();
    autoCollapse();

    document.querySelector('body').className = '';
}

/*
  Determine which navigation items should be auto-collapsed to show as many
  as possible on the screen, based on the current window height. This also
  collapses them.
*/
function autoCollapse() {
  var windowHeight = getWindowDimensions()[1];
  var itemsHeight = 64; /* Account for some padding */
  var itemsArray = Array.prototype.slice.call(
    document.querySelectorAll('nav .resource-group .heading'));

  // Get the total height of the navigation items
  itemsArray.forEach(function (item) {
    itemsHeight += item.parentNode.offsetHeight;
  });

  // Should we auto-collapse any nav items? Try to find the smallest item
  // that can be collapsed to show all items on the screen. If not possible,
  // then collapse the largest item and do it again. First, sort the items
  // by height from smallest to largest.
  var sortedItems = itemsArray.sort(function (a, b) {
    return a.parentNode.offsetHeight - b.parentNode.offsetHeight;
  });

  while (sortedItems.length && itemsHeight > windowHeight) {
    for (var i = 0; i < sortedItems.length; i++) {
      // Will collapsing this item help?
      var itemHeight = sortedItems[i].nextSibling.offsetHeight;
      if ((itemsHeight - itemHeight <= windowHeight) || i === sortedItems.length - 1) {
        // It will, so let's collapse it, remove its content height from
        // our total and then remove it from our list of candidates
        // that can be collapsed.
        itemsHeight -= itemHeight;
        toggleCollapseNav({target: sortedItems[i].children[0]}, true);
        sortedItems.splice(i, 1);
        break;
      }
    }
  }
}

/*
  Initialize the interactive functionality of the page.
*/
function init() {
    var i, j;

    // Make collapse buttons clickable
    var buttons = document.querySelectorAll('.collapse-button');
    for (i = 0; i < buttons.length; i++) {
        buttons[i].onclick = toggleCollapseButton;

        // Show by default? Then toggle now.
        if (buttons[i].className.indexOf('show') !== -1) {
            toggleCollapseButton({target: buttons[i].children[0]});
        }
    }

    var responseCodes = document.querySelectorAll('.example-names');
    for (i = 0; i < responseCodes.length; i++) {
        var tabButtons = childrenByClass(responseCodes[i], 'tab-button');
        for (j = 0; j < tabButtons.length; j++) {
            tabButtons[j].onclick = toggleTabButton;

            // Show by default?
            if (j === 0) {
                toggleTabButton({target: tabButtons[j]});
            }
        }
    }

    // Make nav items clickable to collapse/expand their content.
    var navItems = document.querySelectorAll('nav .resource-group .heading');
    for (i = 0; i < navItems.length; i++) {
        navItems[i].onclick = toggleCollapseNav;

        // Show all by default
        toggleCollapseNav({target: navItems[i].children[0]});
    }
}

// Initial call to set up buttons
init();

window.onload = function () {
    autoCollapse();
    // Remove the `preload` class to enable animations
    document.querySelector('body').className = '';
};
</script></body></html>