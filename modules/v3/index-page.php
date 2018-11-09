<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title> ws-frameworks v3 :: Document </title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="description" content="Description">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="/assets/css/vue.css" title="vue" disabled>
  <link rel="stylesheet" href="/assets/css/simple.css">
  <link rel="stylesheet" href="/assets/css/bootstrap.css" title="bootstrap">
  <link rel="stylesheet" href="/assets/css/dark.css" title="dark" disabled>
  <link rel="stylesheet" href="/assets/css/buble.css" title="buble" disabled>
  <link rel="icon" type="image/png"      href="/assets/auth/images/icons/favicon.ico"/>
  <link rel="stylesheet" href="/assets/css/pure.css" title="pure" disabled>
  <style>
    nav.app-nav li ul {
      min-width: 100px;
    }
  </style>
</head>
<body>
  <div id="app"></div>
  <script>
    window.$docsify = {
      name: 'WS Framework Documentation v3',
      search: 'auto', // default
      homepage: "md/ws-frameworksv3/index.md",
      search: {
        noData: {
          '/': 'No results!'
        },
        paths: 'auto',
        placeholder: {
          '/': 'Search'
        }
      },
      //repo: '',
      alias: {
      '/.*/_sidebar.md': '/_sidebar.md'
      } , 
      auto2top: true,
      executeScript: true,
      loadSidebar: true,
      loadNavbar: '../_navbar.md', 
      mergeNavbar: true,
      maxLevel: 4,
      notFoundPage: true,
      subMaxLevel: 2,
      coverpage: true,
      plugins: [
        function (hook, vm) {
          hook.beforeEach(function (html) {
            url = '/md-editor/?modules/v3/' + vm.route.file
            var editHtml = "<button class='editdocument btn btn-primary' value='"+url+"'><i class='fa fa-pencil'></i> Edit Document</button> \n";

            return editHtml
              + html
              + '\n\n----\n\n'
              + '<a href="http://kct.co.id" target="_blank" style="color: inherit; font-weight: normal; text-decoration: none;">Powered by PT Kreasindo Cipta Teknologi</a>'
          })
        }
      ]
    }
  </script>
  <script src="/bower_components/jquery/dist/jquery.js"></script>
  <script src="/assets/js/docsify.min.js"></script>
  <script src="/assets/js/search.min.js"></script>
  <script src="/assets/js/php.min.js"></script>
  <script src="/assets/js/python.min.js"></script>
  <script src="/assets/js/bootstrap.js"></script>
  <script src="/assets/js/copycode.min.js"></script>
  <script src="/assets/js/ajax.min.js"></script>
  <script src="/assets/js/custom.min.js"></script>

</body>
</html>
