<?php include ("../components/db_config.php"); ?>
<!DOCTYPE html>
<html>
  <head>
  <?php include("../components/metadata.php") ?>
    <meta charset="utf-8" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no"
    />
    <meta
      name="description"
      content="Semantic-UI-Forest, collection of design, themes and templates for Semantic-UI."
    />
    <meta name="keywords" content="Semantic-UI, Theme, Design, Template" />
    <meta name="author" content="PPType" />
    <meta name="theme-color" content="#ffffff" />
    <title>Contact Your Manager</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"
      type="text/css"
    />
    <style type="text/css">
      body {
        -webkit-font-smoothing: antialiased;
        -moz-font-smoothing: grayscale;
            background-image: url(../images/bg.png);
            margin-top: 10px;
      }

      .ui.grid > .row h3.header {
        margin-bottom: 0;
        margin-top: 40px;
      }

      .ui.grid > .row .ui.item.menu {
        border: none;
      }

      .ui.grid > .row .ui.item.menu .item {
        background-image: linear-gradient(to bottom, #f5f5f5 0, #e5e5e5 100%);
        border: 1px solid #d5d5d5;
        border-left-color: white;
      }

      .ui.grid > .row .ui.item.menu .item.active {
        border-left: 0px none #777777;
        box-shadow: inset 1px 4px 7px rgba(0, 0, 0, 0.15);
      }

      .ui.grid .row .ui.center.aligned.container h1 {
        font-size: 63px;
      }

      .ui.grid .row .ui.center.aligned.container p {
        font-size: 21px;
        line-height: 1.5;
      }

      .ui.grid .three.column.row h1 {
        font-size: 30px;
      }

      footer {
        padding-top: 2rem;
        padding-bottom: 2rem;
      }
    </style>
  </head>

  <body id="root">
    <div class="ui stackable grid container">
      <div class="row">
        <h3 class="ui large header">Contact your Managers</h3>
        <div class="ui three item fluid stackable huge menu">
          <a class="active item">Home</a> 
          <a class="item" href="request.php">Request</a> 
          <a class="item" href="permission_request.php">Permision Requests</a>
          <a class="item" href="danger.php">Indicating Dangers</a> 
        </div>
      </div>
      <div class="ui hidden section divider"></div>
      <div class="ui hidden section divider"></div>
      <div class="row">
        <div class="ui center aligned container">
          <h1 class="ui huge header">Contact With The Managers!</h1>
          <p>
            You can contact your managers about various stuff like, making a requests, making permission requests or indicating dangers around
            workplace, use below links to start!
          </p>
        </div>
      </div>
      <div class="ui hidden section divider"></div>
      <div class="ui hidden section divider"></div>
      <div class="three column row">
        <div class="column green">
          <h1 class="ui huge header">Send a Request</h1>
          <p>
            Make a request from your manager, you can use below link to contact with your managers!
          </p>
          <a class="ui small button" href="request.php">Go &raquo;</a>
        </div>
        <div class="column teal">
          <h1 class="ui header">Send Permission Request</h1>
          <p>
            Send a permission request to your manager, you manager will be informed about your request.
          </p>
          <a class="ui small button" href="permission_request.php">Go &raquo;</a>
        </div>
        <div class="column red">
          <h1 class="ui header">Indicate Dangers</h1>
          <p>   
              Indicate dangers around your workplace, make your workplace safer.
          </p>
          <a class="ui small button" href="danger.php">Go &raquo;</a>
        </div>
      </div>
      <div class="ui hidden section divider"></div>
      <div class="row">
        <div class="column">
          <div class="ui divider"></div>
          <footer>&copy; 2021 Company, Inc.</footer>
        </div>
      </div>
    </div>
    <?php include("../components/footer.php") ?>
  </body>
</html>