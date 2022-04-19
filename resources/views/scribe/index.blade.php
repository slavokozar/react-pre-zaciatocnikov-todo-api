<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Tasks API</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .axios-example code { display: none; }
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://127.0.0.1:8000";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("vendor/scribe/js/tryitout-3.25.0.js") }}"></script>

    <script src="{{ asset("vendor/scribe/js/theme-default-3.25.0.js") }}"></script>

</head>

<body data-languages="[&quot;axios&quot;,&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="axios">axios</button>
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                                                                            <ul id="tocify-header-0" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="introduction">
                        <a href="#introduction">Introduction</a>
                    </li>
                                            
                                                                    </ul>
                                                <ul id="tocify-header-1" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="authenticating-requests">
                        <a href="#authenticating-requests">Authenticating requests</a>
                    </li>
                                            
                                                </ul>
                    
                    <ul id="tocify-header-2" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-tasks">
                        <a href="#endpoints-GETapi-tasks">Display all tasks</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-tasks">
                        <a href="#endpoints-POSTapi-tasks">Create a new task</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-PUTapi-tasks--id-">
                        <a href="#endpoints-PUTapi-tasks--id-">Update the task</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-tasks--id-">
                        <a href="#endpoints-DELETEapi-tasks--id-">DELETE api/tasks/{id}</a>
                    </li>
                                                    </ul>
                            </ul>
        
                        
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: April 19 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://127.0.0.1:8000</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>To authenticate requests, include a query parameter <strong><code>api_token</code></strong> in the request.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>

        <h1 id="endpoints">Endpoints</h1>

    

            <h2 id="endpoints-GETapi-tasks">Display all tasks</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-tasks">
<blockquote>Example request:</blockquote>


<div class="axios-example">
    <pre><code class="language-javascript">
axios.get('http://127.0.0.1:8000/api/tasks?api_token=YOUR_AUTH_KEY')
</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/tasks?api_token=YOUR_AUTH_KEY" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/tasks"
);

const params = {
    "api_token": "YOUR_AUTH_KEY",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-tasks">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-tasks" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-tasks"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tasks"></code></pre>
</span>
<span id="execution-error-GETapi-tasks" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tasks"></code></pre>
</span>
<form id="form-GETapi-tasks" data-method="GET"
      data-path="api/tasks"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-tasks', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-tasks"
                    onclick="tryItOut('GETapi-tasks');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-tasks"
                    onclick="cancelTryOut('GETapi-tasks');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-tasks" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/tasks</code></b>
        </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="api_token"
               data-endpoint="GETapi-tasks"
               value="YOUR_AUTH_KEY"
               data-component="query" hidden>
    <br>
<p>Authentication key.</p>
            </p>
                </form>

            <h2 id="endpoints-POSTapi-tasks">Create a new task</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-tasks">
<blockquote>Example request:</blockquote>


<div class="axios-example">
    <pre><code class="language-javascript">
axios.post('http://127.0.0.1:8000/api/tasks?api_token=YOUR_AUTH_KEY', { 
    "text": "nxajznlewbtopepuzfalfipgwmxfyafzsfvblateoqnzqmxglpxladtjqklnckmryvgcihxbqvjkewklqtnzmwpgwbmlxkzrtnfzsojtwpezwcnbhtzojrwynbigwfeysmjajcgayldxjsjmrulsptfnkezbmzisiyffbzeforppahumcrsavjvniwvybhoxwawaxrgozwuuzcx",
    "active": "",
}
</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://127.0.0.1:8000/api/tasks?api_token=YOUR_AUTH_KEY" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"text\": \"nxajznlewbtopepuzfalfipgwmxfyafzsfvblateoqnzqmxglpxladtjqklnckmryvgcihxbqvjkewklqtnzmwpgwbmlxkzrtnfzsojtwpezwcnbhtzojrwynbigwfeysmjajcgayldxjsjmrulsptfnkezbmzisiyffbzeforppahumcrsavjvniwvybhoxwawaxrgozwuuzcx\",
    \"active\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/tasks"
);

const params = {
    "api_token": "YOUR_AUTH_KEY",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "text": "nxajznlewbtopepuzfalfipgwmxfyafzsfvblateoqnzqmxglpxladtjqklnckmryvgcihxbqvjkewklqtnzmwpgwbmlxkzrtnfzsojtwpezwcnbhtzojrwynbigwfeysmjajcgayldxjsjmrulsptfnkezbmzisiyffbzeforppahumcrsavjvniwvybhoxwawaxrgozwuuzcx",
    "active": false
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-tasks">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-tasks" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-tasks"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-tasks"></code></pre>
</span>
<span id="execution-error-POSTapi-tasks" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-tasks"></code></pre>
</span>
<form id="form-POSTapi-tasks" data-method="POST"
      data-path="api/tasks"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-tasks', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-tasks"
                    onclick="tryItOut('POSTapi-tasks');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-tasks"
                    onclick="cancelTryOut('POSTapi-tasks');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-tasks" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/tasks</code></b>
        </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="api_token"
               data-endpoint="POSTapi-tasks"
               value="YOUR_AUTH_KEY"
               data-component="query" hidden>
    <br>
<p>Authentication key.</p>
            </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>text</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="text"
               data-endpoint="POSTapi-tasks"
               value="nxajznlewbtopepuzfalfipgwmxfyafzsfvblateoqnzqmxglpxladtjqklnckmryvgcihxbqvjkewklqtnzmwpgwbmlxkzrtnfzsojtwpezwcnbhtzojrwynbigwfeysmjajcgayldxjsjmrulsptfnkezbmzisiyffbzeforppahumcrsavjvniwvybhoxwawaxrgozwuuzcx"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>active</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="POSTapi-tasks" hidden>
            <input type="radio" name="active"
                   value="true"
                   data-endpoint="POSTapi-tasks"
                   data-component="body"
            >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-tasks" hidden>
            <input type="radio" name="active"
                   value="false"
                   data-endpoint="POSTapi-tasks"
                   data-component="body"
            >
            <code>false</code>
        </label>
    <br>

        </p>
        </form>

            <h2 id="endpoints-PUTapi-tasks--id-">Update the task</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-tasks--id-">
<blockquote>Example request:</blockquote>


<div class="axios-example">
    <pre><code class="language-javascript">
axios.put('http://127.0.0.1:8000/api/tasks/1?api_token=YOUR_AUTH_KEY', { 
    "text": "plgfrpewgstdjfndcgtmxzqjsbmrkaknyqayzlbuezeaddtwhrenrteezuiddietlshymihtkngmhoskfogazmo",
    "active": "",
}
</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://127.0.0.1:8000/api/tasks/1?api_token=YOUR_AUTH_KEY" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"text\": \"plgfrpewgstdjfndcgtmxzqjsbmrkaknyqayzlbuezeaddtwhrenrteezuiddietlshymihtkngmhoskfogazmo\",
    \"active\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/tasks/1"
);

const params = {
    "api_token": "YOUR_AUTH_KEY",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "text": "plgfrpewgstdjfndcgtmxzqjsbmrkaknyqayzlbuezeaddtwhrenrteezuiddietlshymihtkngmhoskfogazmo",
    "active": false
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-tasks--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-tasks--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-tasks--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-tasks--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-tasks--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-tasks--id-"></code></pre>
</span>
<form id="form-PUTapi-tasks--id-" data-method="PUT"
      data-path="api/tasks/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-tasks--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-tasks--id-"
                    onclick="tryItOut('PUTapi-tasks--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-tasks--id-"
                    onclick="cancelTryOut('PUTapi-tasks--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-tasks--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/tasks/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/tasks/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-tasks--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the task.</p>
            </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="api_token"
               data-endpoint="PUTapi-tasks--id-"
               value="YOUR_AUTH_KEY"
               data-component="query" hidden>
    <br>
<p>Authentication key.</p>
            </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>text</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="text"
               data-endpoint="PUTapi-tasks--id-"
               value="plgfrpewgstdjfndcgtmxzqjsbmrkaknyqayzlbuezeaddtwhrenrteezuiddietlshymihtkngmhoskfogazmo"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>active</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="PUTapi-tasks--id-" hidden>
            <input type="radio" name="active"
                   value="true"
                   data-endpoint="PUTapi-tasks--id-"
                   data-component="body"
            >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-tasks--id-" hidden>
            <input type="radio" name="active"
                   value="false"
                   data-endpoint="PUTapi-tasks--id-"
                   data-component="body"
            >
            <code>false</code>
        </label>
    <br>

        </p>
        </form>

            <h2 id="endpoints-DELETEapi-tasks--id-">DELETE api/tasks/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-tasks--id-">
<blockquote>Example request:</blockquote>


<div class="axios-example">
    <pre><code class="language-javascript">
axios.delete('http://127.0.0.1:8000/api/tasks/1?api_token=YOUR_AUTH_KEY')
</code></pre></div>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://127.0.0.1:8000/api/tasks/1?api_token=YOUR_AUTH_KEY" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/tasks/1"
);

const params = {
    "api_token": "YOUR_AUTH_KEY",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-tasks--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-tasks--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-tasks--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-tasks--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-tasks--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-tasks--id-"></code></pre>
</span>
<form id="form-DELETEapi-tasks--id-" data-method="DELETE"
      data-path="api/tasks/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-tasks--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-tasks--id-"
                    onclick="tryItOut('DELETEapi-tasks--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-tasks--id-"
                    onclick="cancelTryOut('DELETEapi-tasks--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-tasks--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/tasks/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-tasks--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the task.</p>
            </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="api_token"
               data-endpoint="DELETEapi-tasks--id-"
               value="YOUR_AUTH_KEY"
               data-component="query" hidden>
    <br>
<p>Authentication key.</p>
            </p>
                </form>

    

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="axios">axios</button>
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
