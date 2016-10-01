<!DOCTYPE HTML><html><head><title>TODO API documentation</title><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta name="generator" content="https://github.com/raml2html/raml2html 4.0.0-beta5"><link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.3.0/styles/default.min.css"><script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script><script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.3.0/highlight.min.js"></script><script type="text/javascript">
      $(document).ready(function() {
        $('.page-header pre code, .top-resource-description pre code, .modal-body pre code').each(function(i, block) {
          hljs.highlightBlock(block);
        });

        $('[data-toggle]').click(function() {
          var selector = $(this).data('target') + ' pre code';
          $(selector).each(function(i, block) {
            hljs.highlightBlock(block);
          });
        });

        // open modal on hashes like #_action_get
        $(window).bind('hashchange', function(e) {
          var anchor_id = document.location.hash.substr(1); //strip #
          var element = $('#' + anchor_id);

          // do we have such element + is it a modal?  --> show it
          if (element.length && element.hasClass('modal')) {
            element.modal('show');
          }
        });

        // execute hashchange on first page load
        $(window).trigger('hashchange');

        // remove url fragment on modal hide
        $('.modal').on('hidden.bs.modal', function() {
          try {
            if (history && history.replaceState) {
                history.replaceState({}, '', '#');
            }
          } catch(e) {}
        });
      });
    </script><style>
      .hljs {
        background: transparent;
      }
      .parent {
        color: #999;
      }
      .list-group-item > .badge {
        float: none;
        margin-right: 6px;
      }
      .panel-title > .methods {
        float: right;
      }
      .badge {
        border-radius: 0;
        text-transform: uppercase;
        width: 70px;
        font-weight: normal;
        color: #f3f3f6;
        line-height: normal;
      }
      .badge_get {
        background-color: #63a8e2;
      }
      .badge_post {
        background-color: #6cbd7d;
      }
      .badge_put {
        background-color: #22bac4;
      }
      .badge_delete {
        background-color: #d26460;
      }
      .badge_patch {
        background-color: #ccc444;
      }
      .list-group, .panel-group {
        margin-bottom: 0;
      }
      .panel-group .panel+.panel-white {
        margin-top: 0;
      }
      .panel-group .panel-white {
        border-bottom: 1px solid #F5F5F5;
        border-radius: 0;
      }
      .panel-white:last-child {
        border-bottom-color: white;
        -webkit-box-shadow: none;
        box-shadow: none;
      }
      .panel-white .panel-heading {
        background: white;
      }
      .tab-pane ul {
        padding-left: 2em;
      }
      .tab-pane h1 {
        font-size: 1.3em;
      }
      .tab-pane h2 {
        font-size: 1.2em;
        padding-bottom: 4px;
        border-bottom: 1px solid #ddd;
      }
      .tab-pane h3 {
        font-size: 1.1em;
      }
      .tab-content {
        border-left: 1px solid #ddd;
        border-right: 1px solid #ddd;
        border-bottom: 1px solid #ddd;
        padding: 10px;
      }
      #sidebar {
        margin-top: 30px;
        padding-right: 5px;
        overflow: auto;
        height: 90%;
      }
      .top-resource-description {
        border-bottom: 1px solid #ddd;
        background: #fcfcfc;
        padding: 15px 15px 0 15px;
        margin: -15px -15px 10px -15px;
      }
      .resource-description {
        border-bottom: 1px solid #fcfcfc;
        background: #fcfcfc;
        padding: 15px 15px 0 15px;
        margin: -15px -15px 10px -15px;
      }
      .resource-description p:last-child {
        margin: 0;
      }
      .list-group .badge {
        float: left;
      }
      .method_description {
        margin-left: 85px;
      }
      .method_description p:last-child {
        margin: 0;
      }
      .list-group-item {
        cursor: pointer;
      }
      .list-group-item:hover {
        background-color: #f5f5f5;
      }

      pre code {
        overflow: auto;
        word-wrap: normal;
        white-space: pre;
      }
    </style></head><body data-spy="scroll" data-target="#sidebar"><div class="container"><div class="row"><div class="col-md-9" role="main"><div class="page-header"><h1>TODO API documentation <small>version v1</small></h1><p>http://api.todo.dev/v1</p></div><div class="panel panel-default"><div class="panel-heading"><h3 id="login" class="panel-title">/login</h3></div><div class="panel-body"><div class="panel-group"><div class="panel panel-white"><div class="panel-heading"><h4 class="panel-title"><a class="collapsed" data-toggle="collapse" href="#panel_login"><span class="parent"></span>/login</a> <span class="methods"><a href="#login_post"><span class="badge badge_post">post</span></a></span></h4></div><div id="panel_login" class="panel-collapse collapse"><div class="panel-body"><div class="list-group"><div onclick="window.location.href = '#login_post'" class="list-group-item"><span class="badge badge_post">post</span><div class="method_description"><p>Login user by sending his email and password in JSON format.</p></div><div class="clearfix"></div></div></div></div></div><div class="modal fade" tabindex="0" id="login_post"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title" id="myModalLabel"><span class="badge badge_post">post</span> <span class="parent"></span>/login</h4></div><div class="modal-body"><div class="alert alert-info"><p>Login user by sending his email and password in JSON format.</p></div><ul class="nav nav-tabs"><li class="active"><a href="#login_post_request" data-toggle="tab">Request</a></li><li><a href="#login_post_response" data-toggle="tab">Response</a></li></ul><div class="tab-content"><div class="tab-pane active" id="login_post_request"><h3>Headers</h3><ul><li><strong>apikey</strong>: <em>required (string - pattern: ^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$)</em><p>API Key used to authenticate used App.</p><p><strong>Examples</strong>:</p><pre>f4e68c61-9075-4512-b566-34be6501eef9</pre></li></ul><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Email</strong>: <em>required (string)</em><p>Unique email of user.</p></li><li><strong>Password</strong>: <em>required (string)</em><p>Password of user.</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "email": "john.smith@example.com",
  "password": "password123"
}</code></pre></div><div class="tab-pane" id="login_post_response"><h2>HTTP status code <a href="http://httpstatus.es/200" target="_blank">200</a></h2><p>User is logged in successfully.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>data</strong>: <em>required (object)</em></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "data": {
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2FwaS50b2RvaXRrLmRldlwvdjFcL2xvZ2luIiwiaWF0IjoxNDc0ODI4NTA2LCJleHAiOjE0NzQ4MzIxMDYsIm5iZiI6MTQ3NDgyODUwNiwianRpIjoiNTdkYjNjZTg0NWRlYmZkNDNkMTQyZTMzNWYyYzU3ZTEifQ.mO5ZlKvZNo_Kr8aIceDtUHtN4DYhpuBJnm0xow_5Yq8"
  }
}</code></pre><h2>HTTP status code <a href="http://httpstatus.es/403" target="_blank">403</a></h2><p>Response in case apikey header was not sent or is not valid.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Message</strong>: <em>required (string)</em><p>Error message</p></li><li><strong>Status code</strong>: <em>required (integer)</em><p>HTTP Status code</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "message": "Api key is not valid.",
  "status_code": 403
}</code></pre><h2>HTTP status code <a href="http://httpstatus.es/404" target="_blank">404</a></h2><p>Response in case requested resource doesn&#39;t exists.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Message</strong>: <em>required (string)</em><p>Error message</p></li><li><strong>Status code</strong>: <em>required (integer)</em><p>HTTP Status code</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "message": "404 Not Found",
  "status_code": 404
}</code></pre><h2>HTTP status code <a href="http://httpstatus.es/500" target="_blank">500</a></h2><p>Response in case of a server-side error.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Message</strong>: <em>required (string)</em><p>Error message</p></li><li><strong>Status code</strong>: <em>required (integer)</em><p>HTTP Status code</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "message": "500 Internal Server Error",
  "status_code": 500
}</code></pre></div></div></div></div></div></div></div></div></div></div><div class="panel panel-default"><div class="panel-heading"><h3 id="register" class="panel-title">/register</h3></div><div class="panel-body"><div class="panel-group"><div class="panel panel-white"><div class="panel-heading"><h4 class="panel-title"><a class="collapsed" data-toggle="collapse" href="#panel_register"><span class="parent"></span>/register</a> <span class="methods"><a href="#register_post"><span class="badge badge_post">post</span></a></span></h4></div><div id="panel_register" class="panel-collapse collapse"><div class="panel-body"><div class="list-group"><div onclick="window.location.href = '#register_post'" class="list-group-item"><span class="badge badge_post">post</span><div class="method_description"><p>Register user by sending his name, email and password in JSON format.</p></div><div class="clearfix"></div></div></div></div></div><div class="modal fade" tabindex="0" id="register_post"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title" id="myModalLabel"><span class="badge badge_post">post</span> <span class="parent"></span>/register</h4></div><div class="modal-body"><div class="alert alert-info"><p>Register user by sending his name, email and password in JSON format.</p></div><ul class="nav nav-tabs"><li class="active"><a href="#register_post_request" data-toggle="tab">Request</a></li><li><a href="#register_post_response" data-toggle="tab">Response</a></li></ul><div class="tab-content"><div class="tab-pane active" id="register_post_request"><h3>Headers</h3><ul><li><strong>apikey</strong>: <em>required (string - pattern: ^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$)</em><p>API Key used to authenticate used App.</p><p><strong>Examples</strong>:</p><pre>f4e68c61-9075-4512-b566-34be6501eef9</pre></li></ul><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Name</strong>: <em>required (string)</em><p>Name of the user.</p></li><li><strong>Email</strong>: <em>required (string)</em><p>Email of user. Must be unique.</p></li><li><strong>Password</strong>: <em>required (string - minLength: 8)</em><p>Password of user.</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "name": "John Smith",
  "email": "john.smith@example.com",
  "password": "password123"
}</code></pre></div><div class="tab-pane" id="register_post_response"><h2>HTTP status code <a href="http://httpstatus.es/201" target="_blank">201</a></h2><p>User has been registered successfully.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>User</strong>: <em>required (object)</em></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "data": {
    "id": "442195b3-6389-4d8c-a283-4d1d7313d6da",
    "name": "John Smith",
    "email": "john.smith@example.com",
    "created_at": {
      "date": "2016-10-01 11:38:24.000000",
      "timezone_type": 3,
      "timezone": "UTC"
    }
  }
}</code></pre><h2>HTTP status code <a href="http://httpstatus.es/403" target="_blank">403</a></h2><p>Response in case apikey header was not sent or is not valid.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Message</strong>: <em>required (string)</em><p>Error message</p></li><li><strong>Status code</strong>: <em>required (integer)</em><p>HTTP Status code</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "message": "Api key is not valid.",
  "status_code": 403
}</code></pre><h2>HTTP status code <a href="http://httpstatus.es/422" target="_blank">422</a></h2><p>Response in case of a validation error.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Message</strong>: <em>required (string)</em><p>Error message</p></li><li><strong>Status code</strong>: <em>required (integer)</em><p>HTTP Status code</p></li><li><strong>Errors</strong>: <em>required (object)</em><p>List of errors</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "message": "422 Unprocessable Entity",
  "errors": {
    "password": [
      "The password must be at least 8 characters."
    ]
  },
  "status_code": 422
}</code></pre><h2>HTTP status code <a href="http://httpstatus.es/500" target="_blank">500</a></h2><p>Response in case of a server-side error.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Message</strong>: <em>required (string)</em><p>Error message</p></li><li><strong>Status code</strong>: <em>required (integer)</em><p>HTTP Status code</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "message": "500 Internal Server Error",
  "status_code": 500
}</code></pre></div></div></div></div></div></div></div></div></div></div><div class="panel panel-default"><div class="panel-heading"><h3 id="users" class="panel-title">/users</h3></div><div class="panel-body"><div class="panel-group"><div class="panel panel-white"><div class="panel-heading"><h4 class="panel-title"><a class="collapsed" data-toggle="collapse" href="#panel_users_me"><span class="parent">/users</span>/me</a> <span class="methods"><a href="#users_me_get"><span class="badge badge_get">get</span></a></span></h4></div><div id="panel_users_me" class="panel-collapse collapse"><div class="panel-body"><div class="list-group"><div onclick="window.location.href = '#users_me_get'" class="list-group-item"><span class="badge badge_get">get</span><div class="method_description"><p>Get info about current user.</p></div><div class="clearfix"></div></div></div></div></div><div class="modal fade" tabindex="0" id="users_me_get"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title" id="myModalLabel"><span class="badge badge_get">get</span> <span class="parent">/users</span>/me</h4></div><div class="modal-body"><div class="alert alert-info"><p>Get info about current user.</p></div><ul class="nav nav-tabs"><li class="active"><a href="#users_me_get_request" data-toggle="tab">Request</a></li><li><a href="#users_me_get_response" data-toggle="tab">Response</a></li></ul><div class="tab-content"><div class="tab-pane active" id="users_me_get_request"><h3>Headers</h3><ul><li><strong>apikey</strong>: <em>required (string - pattern: ^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$)</em><p>API Key used to authenticate used App.</p><p><strong>Examples</strong>:</p><pre>f4e68c61-9075-4512-b566-34be6501eef9</pre></li><li><strong>Authorization</strong>: <em>required (string)</em><p>Authorization Header in the format "Bearer {JWT TOKEN}".</p><p><strong>Examples</strong>:</p><pre>Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2FwaS50b2RvaXRrLmRldlwvdjFcL2xvZ2luIiwiaWF0IjoxNDc1MzI1NDQ3LCJleHAiOjE0NzUzMjkwNDcsIm5iZiI6MTQ3NTMyNTQ0NywianRpIjoiZGFlOTJlNzQ5NmJiODg0ODYxZGRlMWZlYzM0ZmJmYzMifQ.WslK5UknPQoB6ceWOQ8YUsXuBvo1EVZgnU__HImdGps</pre></li></ul></div><div class="tab-pane" id="users_me_get_response"><h2>HTTP status code <a href="http://httpstatus.es/200" target="_blank">200</a></h2><p>Uset info has been fetched successfully.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>User</strong>: <em>required (object)</em></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "data": {
    "id": "442195b3-6389-4d8c-a283-4d1d7313d6da",
    "name": "John Smith",
    "email": "john.smith@example.com",
    "created_at": {
      "date": "2016-10-01 11:38:24.000000",
      "timezone_type": 3,
      "timezone": "UTC"
    }
  }
}</code></pre><h2>HTTP status code <a href="http://httpstatus.es/401" target="_blank">401</a></h2><p>Response in case Authorization header is missing or invalid.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Message</strong>: <em>required (string)</em><p>Error message</p></li><li><strong>Status code</strong>: <em>required (integer)</em><p>HTTP Status code</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "message": "Failed to authenticate because of bad credentials or an invalid authorization header.",
  "status_code": 401
}</code></pre><h2>HTTP status code <a href="http://httpstatus.es/403" target="_blank">403</a></h2><p>Response in case apikey header was not sent or is not valid.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Message</strong>: <em>required (string)</em><p>Error message</p></li><li><strong>Status code</strong>: <em>required (integer)</em><p>HTTP Status code</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "message": "Api key is not valid.",
  "status_code": 403
}</code></pre><h2>HTTP status code <a href="http://httpstatus.es/500" target="_blank">500</a></h2><p>Response in case of a server-side error.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Message</strong>: <em>required (string)</em><p>Error message</p></li><li><strong>Status code</strong>: <em>required (integer)</em><p>HTTP Status code</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "message": "500 Internal Server Error",
  "status_code": 500
}</code></pre></div></div></div></div></div></div></div></div></div></div><div class="panel panel-default"><div class="panel-heading"><h3 id="todos" class="panel-title">/todos</h3></div><div class="panel-body"><div class="panel-group"><div class="panel panel-white"><div class="panel-heading"><h4 class="panel-title"><a class="collapsed" data-toggle="collapse" href="#panel_todos"><span class="parent"></span>/todos</a> <span class="methods"><a href="#todos_get"><span class="badge badge_get">get</span></a> <a href="#todos_post"><span class="badge badge_post">post</span></a></span></h4></div><div id="panel_todos" class="panel-collapse collapse"><div class="panel-body"><div class="list-group"><div onclick="window.location.href = '#todos_get'" class="list-group-item"><span class="badge badge_get">get</span><div class="method_description"><p>Retreive a listing of the todos for current user.</p></div><div class="clearfix"></div></div><div onclick="window.location.href = '#todos_post'" class="list-group-item"><span class="badge badge_post">post</span><div class="method_description"><p>Store a newly created todo in storage.</p></div><div class="clearfix"></div></div></div></div></div><div class="modal fade" tabindex="0" id="todos_get"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title" id="myModalLabel"><span class="badge badge_get">get</span> <span class="parent"></span>/todos</h4></div><div class="modal-body"><div class="alert alert-info"><p>Retreive a listing of the todos for current user.</p></div><ul class="nav nav-tabs"><li class="active"><a href="#todos_get_request" data-toggle="tab">Request</a></li><li><a href="#todos_get_response" data-toggle="tab">Response</a></li></ul><div class="tab-content"><div class="tab-pane active" id="todos_get_request"><h3>Headers</h3><ul><li><strong>apikey</strong>: <em>required (string - pattern: ^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$)</em><p>API Key used to authenticate used App.</p><p><strong>Examples</strong>:</p><pre>f4e68c61-9075-4512-b566-34be6501eef9</pre></li><li><strong>Authorization</strong>: <em>required (string)</em><p>Authorization Header in the format "Bearer {JWT TOKEN}".</p><p><strong>Examples</strong>:</p><pre>Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2FwaS50b2RvaXRrLmRldlwvdjFcL2xvZ2luIiwiaWF0IjoxNDc1MzI1NDQ3LCJleHAiOjE0NzUzMjkwNDcsIm5iZiI6MTQ3NTMyNTQ0NywianRpIjoiZGFlOTJlNzQ5NmJiODg0ODYxZGRlMWZlYzM0ZmJmYzMifQ.WslK5UknPQoB6ceWOQ8YUsXuBvo1EVZgnU__HImdGps</pre></li></ul></div><div class="tab-pane" id="todos_get_response"><h2>HTTP status code <a href="http://httpstatus.es/200" target="_blank">200</a></h2><p>Todos are fetched successfully.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>data</strong>: <em>required (array)</em><p>In case, no todos were found, empty array is returned.</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "data": [
    {
      "id": "a207329e-6264-4960-a377-5b6dc8995d19",
      "content": "Ab quae quod consequatur itaque porro est corporis rerum. Deserunt quos ab cupiditate.",
      "is_active": false,
      "is_completed": false,
      "created_at": {
        "date": "2016-10-01 09:31:30.000000",
        "timezone_type": 3,
        "timezone": "UTC"
      },
      "updated_at": {
        "date": "2016-10-01 09:31:30.000000",
        "timezone_type": 3,
        "timezone": "UTC"
      }
    },
    {
      "id": "26225fbc-d939-47c0-bfdf-22497412e577",
      "content": "Laudantium et ea consequuntur animi atque. Distinctio reiciendis omnis odio.",
      "is_active": true,
      "is_completed": false,
      "created_at": {
        "date": "2016-10-01 09:31:45.000000",
        "timezone_type": 3,
        "timezone": "UTC"
      },
      "updated_at": {
        "date": "2016-10-01 09:31:45.000000",
        "timezone_type": 3,
        "timezone": "UTC"
      }
    }
  ]
}</code></pre><h2>HTTP status code <a href="http://httpstatus.es/401" target="_blank">401</a></h2><p>Response in case Authorization header is missing or invalid.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Message</strong>: <em>required (string)</em><p>Error message</p></li><li><strong>Status code</strong>: <em>required (integer)</em><p>HTTP Status code</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "message": "Failed to authenticate because of bad credentials or an invalid authorization header.",
  "status_code": 401
}</code></pre><h2>HTTP status code <a href="http://httpstatus.es/403" target="_blank">403</a></h2><p>Response in case apikey header was not sent or is not valid.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Message</strong>: <em>required (string)</em><p>Error message</p></li><li><strong>Status code</strong>: <em>required (integer)</em><p>HTTP Status code</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "message": "Api key is not valid.",
  "status_code": 403
}</code></pre><h2>HTTP status code <a href="http://httpstatus.es/500" target="_blank">500</a></h2><p>Response in case of a server-side error.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Message</strong>: <em>required (string)</em><p>Error message</p></li><li><strong>Status code</strong>: <em>required (integer)</em><p>HTTP Status code</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "message": "500 Internal Server Error",
  "status_code": 500
}</code></pre></div></div></div></div></div></div><div class="modal fade" tabindex="0" id="todos_post"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title" id="myModalLabel"><span class="badge badge_post">post</span> <span class="parent"></span>/todos</h4></div><div class="modal-body"><div class="alert alert-info"><p>Store a newly created todo in storage.</p></div><ul class="nav nav-tabs"><li class="active"><a href="#todos_post_request" data-toggle="tab">Request</a></li><li><a href="#todos_post_response" data-toggle="tab">Response</a></li></ul><div class="tab-content"><div class="tab-pane active" id="todos_post_request"><h3>Headers</h3><ul><li><strong>apikey</strong>: <em>required (string - pattern: ^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$)</em><p>API Key used to authenticate used App.</p><p><strong>Examples</strong>:</p><pre>f4e68c61-9075-4512-b566-34be6501eef9</pre></li><li><strong>Authorization</strong>: <em>required (string)</em><p>Authorization Header in the format "Bearer {JWT TOKEN}".</p><p><strong>Examples</strong>:</p><pre>Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2FwaS50b2RvaXRrLmRldlwvdjFcL2xvZ2luIiwiaWF0IjoxNDc1MzI1NDQ3LCJleHAiOjE0NzUzMjkwNDcsIm5iZiI6MTQ3NTMyNTQ0NywianRpIjoiZGFlOTJlNzQ5NmJiODg0ODYxZGRlMWZlYzM0ZmJmYzMifQ.WslK5UknPQoB6ceWOQ8YUsXuBvo1EVZgnU__HImdGps</pre></li></ul><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Content</strong>: <em>required (string)</em></li><li><strong>Is active</strong>: <em>required (boolean)</em></li><li><strong>Is completed</strong>: <em>required (boolean)</em></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "content": "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, quidem.",
  "is_active": false,
  "is_completed": false
}</code></pre></div><div class="tab-pane" id="todos_post_response"><h2>HTTP status code <a href="http://httpstatus.es/201" target="_blank">201</a></h2><p>Todo has been saved successfully.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Todo</strong>: <em>required (object)</em></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "data": {
    "id": "a207329e-6264-4960-a377-5b6dc8995d19",
    "content": "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, quidem.",
    "is_active": false,
    "is_completed": false,
    "created_at": {
      "date": "2016-10-01 09:31:30.000000",
      "timezone_type": 3,
      "timezone": "UTC"
    },
    "updated_at": {
      "date": "2016-10-01 09:31:30.000000",
      "timezone_type": 3,
      "timezone": "UTC"
    }
  }
}</code></pre><h2>HTTP status code <a href="http://httpstatus.es/401" target="_blank">401</a></h2><p>Response in case Authorization header is missing or invalid.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Message</strong>: <em>required (string)</em><p>Error message</p></li><li><strong>Status code</strong>: <em>required (integer)</em><p>HTTP Status code</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "message": "Failed to authenticate because of bad credentials or an invalid authorization header.",
  "status_code": 401
}</code></pre><h2>HTTP status code <a href="http://httpstatus.es/403" target="_blank">403</a></h2><p>Response in case apikey header was not sent or is not valid.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Message</strong>: <em>required (string)</em><p>Error message</p></li><li><strong>Status code</strong>: <em>required (integer)</em><p>HTTP Status code</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "message": "Api key is not valid.",
  "status_code": 403
}</code></pre><h2>HTTP status code <a href="http://httpstatus.es/422" target="_blank">422</a></h2><p>Response in case of a validation error.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Message</strong>: <em>required (string)</em><p>Error message</p></li><li><strong>Status code</strong>: <em>required (integer)</em><p>HTTP Status code</p></li><li><strong>Errors</strong>: <em>required (object)</em><p>List of errors</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "message": "422 Unprocessable Entity",
  "errors": {
    "is_active": [
      "The is active field must be true or false."
    ]
  },
  "status_code": 422
}</code></pre><h2>HTTP status code <a href="http://httpstatus.es/500" target="_blank">500</a></h2><p>Response in case of a server-side error.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Message</strong>: <em>required (string)</em><p>Error message</p></li><li><strong>Status code</strong>: <em>required (integer)</em><p>HTTP Status code</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "message": "500 Internal Server Error",
  "status_code": 500
}</code></pre></div></div></div></div></div></div></div><div class="panel panel-white"><div class="panel-heading"><h4 class="panel-title"><a class="collapsed" data-toggle="collapse" href="#panel_todos__uuid_"><span class="parent">/todos</span>/{uuid}</a> <span class="methods"><a href="#todos__uuid__get"><span class="badge badge_get">get</span></a> <a href="#todos__uuid__put"><span class="badge badge_put">put</span></a> <a href="#todos__uuid__delete"><span class="badge badge_delete">delete</span></a></span></h4></div><div id="panel_todos__uuid_" class="panel-collapse collapse"><div class="panel-body"><div class="list-group"><div onclick="window.location.href = '#todos__uuid__get'" class="list-group-item"><span class="badge badge_get">get</span><div class="method_description"><p>Retreive a specified todo for current user.</p></div><div class="clearfix"></div></div><div onclick="window.location.href = '#todos__uuid__put'" class="list-group-item"><span class="badge badge_put">put</span><div class="method_description"><p>Update the specified resource in storage.</p></div><div class="clearfix"></div></div><div onclick="window.location.href = '#todos__uuid__delete'" class="list-group-item"><span class="badge badge_delete">delete</span><div class="method_description"><p>Remove the specified todo from storage.</p></div><div class="clearfix"></div></div></div></div></div><div class="modal fade" tabindex="0" id="todos__uuid__get"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title" id="myModalLabel"><span class="badge badge_get">get</span> <span class="parent">/todos</span>/{uuid}</h4></div><div class="modal-body"><div class="alert alert-info"><p>Retreive a specified todo for current user.</p></div><ul class="nav nav-tabs"><li class="active"><a href="#todos__uuid__get_request" data-toggle="tab">Request</a></li><li><a href="#todos__uuid__get_response" data-toggle="tab">Response</a></li></ul><div class="tab-content"><div class="tab-pane active" id="todos__uuid__get_request"><h3>URI Parameters</h3><ul><li><strong>uuid</strong>: <em>required (Uuid.Uuid)</em><p>UUID of requested todo</p></li></ul><h3>Headers</h3><ul><li><strong>apikey</strong>: <em>required (string - pattern: ^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$)</em><p>API Key used to authenticate used App.</p><p><strong>Examples</strong>:</p><pre>f4e68c61-9075-4512-b566-34be6501eef9</pre></li><li><strong>Authorization</strong>: <em>required (string)</em><p>Authorization Header in the format "Bearer {JWT TOKEN}".</p><p><strong>Examples</strong>:</p><pre>Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2FwaS50b2RvaXRrLmRldlwvdjFcL2xvZ2luIiwiaWF0IjoxNDc1MzI1NDQ3LCJleHAiOjE0NzUzMjkwNDcsIm5iZiI6MTQ3NTMyNTQ0NywianRpIjoiZGFlOTJlNzQ5NmJiODg0ODYxZGRlMWZlYzM0ZmJmYzMifQ.WslK5UknPQoB6ceWOQ8YUsXuBvo1EVZgnU__HImdGps</pre></li></ul></div><div class="tab-pane" id="todos__uuid__get_response"><h2>HTTP status code <a href="http://httpstatus.es/200" target="_blank">200</a></h2><p>Todo has been successfully fetched.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Todo</strong>: <em>required (object)</em><p>In case, no todo was found, data will be null.</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "data": {
    "id": "a207329e-6264-4960-a377-5b6dc8995d19",
    "content": "Ab quae quod consequatur itaque porro est corporis rerum. Deserunt quos ab cupiditate.",
    "is_active": false,
    "is_completed": false,
    "created_at": {
      "date": "2016-10-01 09:31:30.000000",
      "timezone_type": 3,
      "timezone": "UTC"
    },
    "updated_at": {
      "date": "2016-10-01 09:31:30.000000",
      "timezone_type": 3,
      "timezone": "UTC"
    }
  }
}</code></pre><h2>HTTP status code <a href="http://httpstatus.es/401" target="_blank">401</a></h2><p>Response in case Authorization header is missing or invalid.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Message</strong>: <em>required (string)</em><p>Error message</p></li><li><strong>Status code</strong>: <em>required (integer)</em><p>HTTP Status code</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "message": "Failed to authenticate because of bad credentials or an invalid authorization header.",
  "status_code": 401
}</code></pre><h2>HTTP status code <a href="http://httpstatus.es/403" target="_blank">403</a></h2><p>Response in case apikey header was not sent or is not valid.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Message</strong>: <em>required (string)</em><p>Error message</p></li><li><strong>Status code</strong>: <em>required (integer)</em><p>HTTP Status code</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "message": "Api key is not valid.",
  "status_code": 403
}</code></pre><h2>HTTP status code <a href="http://httpstatus.es/500" target="_blank">500</a></h2><p>Response in case of a server-side error.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Message</strong>: <em>required (string)</em><p>Error message</p></li><li><strong>Status code</strong>: <em>required (integer)</em><p>HTTP Status code</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "message": "500 Internal Server Error",
  "status_code": 500
}</code></pre></div></div></div></div></div></div><div class="modal fade" tabindex="0" id="todos__uuid__put"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title" id="myModalLabel"><span class="badge badge_put">put</span> <span class="parent">/todos</span>/{uuid}</h4></div><div class="modal-body"><div class="alert alert-info"><p>Update the specified resource in storage.</p></div><ul class="nav nav-tabs"><li class="active"><a href="#todos__uuid__put_request" data-toggle="tab">Request</a></li><li><a href="#todos__uuid__put_response" data-toggle="tab">Response</a></li></ul><div class="tab-content"><div class="tab-pane active" id="todos__uuid__put_request"><h3>URI Parameters</h3><ul><li><strong>uuid</strong>: <em>required (Uuid.Uuid)</em><p>UUID of requested todo</p></li></ul><h3>Headers</h3><ul><li><strong>apikey</strong>: <em>required (string - pattern: ^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$)</em><p>API Key used to authenticate used App.</p><p><strong>Examples</strong>:</p><pre>f4e68c61-9075-4512-b566-34be6501eef9</pre></li><li><strong>Authorization</strong>: <em>required (string)</em><p>Authorization Header in the format "Bearer {JWT TOKEN}".</p><p><strong>Examples</strong>:</p><pre>Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2FwaS50b2RvaXRrLmRldlwvdjFcL2xvZ2luIiwiaWF0IjoxNDc1MzI1NDQ3LCJleHAiOjE0NzUzMjkwNDcsIm5iZiI6MTQ3NTMyNTQ0NywianRpIjoiZGFlOTJlNzQ5NmJiODg0ODYxZGRlMWZlYzM0ZmJmYzMifQ.WslK5UknPQoB6ceWOQ8YUsXuBvo1EVZgnU__HImdGps</pre></li></ul><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Content</strong>: <em>(string)</em></li><li><strong>Is active</strong>: <em>(boolean)</em></li><li><strong>Is completed</strong>: <em>(boolean)</em></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "is_active": true
}</code></pre></div><div class="tab-pane" id="todos__uuid__put_response"><h2>HTTP status code <a href="http://httpstatus.es/200" target="_blank">200</a></h2><p>Todo has been successfully updated.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Todo</strong>: <em>required (object)</em></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "data": {
    "id": "a207329e-6264-4960-a377-5b6dc8995d19",
    "content": "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, quidem.",
    "is_active": false,
    "is_completed": true,
    "created_at": {
      "date": "2016-10-01 09:31:30.000000",
      "timezone_type": 3,
      "timezone": "UTC"
    },
    "updated_at": {
      "date": "2016-10-01 10:31:30.000000",
      "timezone_type": 3,
      "timezone": "UTC"
    }
  }
}</code></pre><h2>HTTP status code <a href="http://httpstatus.es/401" target="_blank">401</a></h2><p>Response in case Authorization header is missing or invalid.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Message</strong>: <em>required (string)</em><p>Error message</p></li><li><strong>Status code</strong>: <em>required (integer)</em><p>HTTP Status code</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "message": "Failed to authenticate because of bad credentials or an invalid authorization header.",
  "status_code": 401
}</code></pre><h2>HTTP status code <a href="http://httpstatus.es/403" target="_blank">403</a></h2><p>Response in case apikey header was not sent or is not valid.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Message</strong>: <em>required (string)</em><p>Error message</p></li><li><strong>Status code</strong>: <em>required (integer)</em><p>HTTP Status code</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "message": "Api key is not valid.",
  "status_code": 403
}</code></pre><h2>HTTP status code <a href="http://httpstatus.es/404" target="_blank">404</a></h2><p>Response in case requested resource doesn&#39;t exists.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Message</strong>: <em>required (string)</em><p>Error message</p></li><li><strong>Status code</strong>: <em>required (integer)</em><p>HTTP Status code</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "message": "404 Not Found",
  "status_code": 404
}</code></pre><h2>HTTP status code <a href="http://httpstatus.es/422" target="_blank">422</a></h2><p>Response in case of a validation error.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Message</strong>: <em>required (string)</em><p>Error message</p></li><li><strong>Status code</strong>: <em>required (integer)</em><p>HTTP Status code</p></li><li><strong>Errors</strong>: <em>required (object)</em><p>List of errors</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "message": "422 Unprocessable Entity",
  "errors": {
    "is_active": [
      "The is active field must be true or false."
    ]
  },
  "status_code": 422
}</code></pre><h2>HTTP status code <a href="http://httpstatus.es/500" target="_blank">500</a></h2><p>Response in case of a server-side error.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Message</strong>: <em>required (string)</em><p>Error message</p></li><li><strong>Status code</strong>: <em>required (integer)</em><p>HTTP Status code</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "message": "500 Internal Server Error",
  "status_code": 500
}</code></pre></div></div></div></div></div></div><div class="modal fade" tabindex="0" id="todos__uuid__delete"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title" id="myModalLabel"><span class="badge badge_delete">delete</span> <span class="parent">/todos</span>/{uuid}</h4></div><div class="modal-body"><div class="alert alert-info"><p>Remove the specified todo from storage.</p></div><ul class="nav nav-tabs"><li class="active"><a href="#todos__uuid__delete_request" data-toggle="tab">Request</a></li><li><a href="#todos__uuid__delete_response" data-toggle="tab">Response</a></li></ul><div class="tab-content"><div class="tab-pane active" id="todos__uuid__delete_request"><h3>URI Parameters</h3><ul><li><strong>uuid</strong>: <em>required (Uuid.Uuid)</em><p>UUID of requested todo</p></li></ul><h3>Headers</h3><ul><li><strong>apikey</strong>: <em>required (string - pattern: ^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$)</em><p>API Key used to authenticate used App.</p><p><strong>Examples</strong>:</p><pre>f4e68c61-9075-4512-b566-34be6501eef9</pre></li><li><strong>Authorization</strong>: <em>required (string)</em><p>Authorization Header in the format "Bearer {JWT TOKEN}".</p><p><strong>Examples</strong>:</p><pre>Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2FwaS50b2RvaXRrLmRldlwvdjFcL2xvZ2luIiwiaWF0IjoxNDc1MzI1NDQ3LCJleHAiOjE0NzUzMjkwNDcsIm5iZiI6MTQ3NTMyNTQ0NywianRpIjoiZGFlOTJlNzQ5NmJiODg0ODYxZGRlMWZlYzM0ZmJmYzMifQ.WslK5UknPQoB6ceWOQ8YUsXuBvo1EVZgnU__HImdGps</pre></li></ul></div><div class="tab-pane" id="todos__uuid__delete_response"><h2>HTTP status code <a href="http://httpstatus.es/204" target="_blank">204</a></h2><p>Todo has been successfully removed.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><h2>HTTP status code <a href="http://httpstatus.es/401" target="_blank">401</a></h2><p>Response in case Authorization header is missing or invalid.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Message</strong>: <em>required (string)</em><p>Error message</p></li><li><strong>Status code</strong>: <em>required (integer)</em><p>HTTP Status code</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "message": "Failed to authenticate because of bad credentials or an invalid authorization header.",
  "status_code": 401
}</code></pre><h2>HTTP status code <a href="http://httpstatus.es/403" target="_blank">403</a></h2><p>Response in case apikey header was not sent or is not valid.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Message</strong>: <em>required (string)</em><p>Error message</p></li><li><strong>Status code</strong>: <em>required (integer)</em><p>HTTP Status code</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "message": "Api key is not valid.",
  "status_code": 403
}</code></pre><h2>HTTP status code <a href="http://httpstatus.es/404" target="_blank">404</a></h2><p>Response in case requested resource doesn&#39;t exists.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Message</strong>: <em>required (string)</em><p>Error message</p></li><li><strong>Status code</strong>: <em>required (integer)</em><p>HTTP Status code</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "message": "404 Not Found",
  "status_code": 404
}</code></pre><h2>HTTP status code <a href="http://httpstatus.es/500" target="_blank">500</a></h2><p>Response in case of a server-side error.</p><h3>Body</h3><p><strong>Type: application/json</strong></p><strong>Properties</strong><ul><li><strong>Message</strong>: <em>required (string)</em><p>Error message</p></li><li><strong>Status code</strong>: <em>required (integer)</em><p>HTTP Status code</p></li></ul><p><strong>Examples</strong>:</p><pre><code>{
  "message": "500 Internal Server Error",
  "status_code": 500
}</code></pre></div></div></div></div></div></div></div></div></div></div></div><div class="col-md-3"><div id="sidebar" class="hidden-print affix" role="complementary"><ul class="nav nav-pills nav-stacked"><li><a href="#login">/login</a></li><li><a href="#register">/register</a></li><li><a href="#users">/users</a></li><li><a href="#todos">/todos</a></li></ul></div></div></div></div></body></html>